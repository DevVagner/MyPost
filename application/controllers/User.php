<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 * 
 * @extends CI_Controller
 */
class User extends MX_Controller {

	private $settings;

	public function __construct() {	
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('flash_helper'));
		$this->load->library('twig');
		$this->load->model('User_Model');
		$this->load->helper('cookie');

		// if the user is logged in redirect to home page
		if($this->User_Model->isLoggedIn() && $this->router->method != 'logout' ){
			redirect('/');
		}

		$this->load->model('Settings_Model');
		$this->settings = $this->Settings_Model->get();
		$this->twig->addGlobal('app_settings', $this->settings);
		
		// get default lang on the cookie if not set add default one
		$cookieLang = $this->input->cookie($this->config->item('sess_cookie_name')."_lang", TRUE);
		if($cookieLang){
			// check lang if exists
			if(in_array($cookieLang, $this->lang->availableLanguages())){
				$this->config->set_item('language', $cookieLang);
				$this->twig->addGlobal('current_lang', $cookieLang);
			}else{
				delete_cookie($this->config->item('sess_cookie_name')."_lang", TRUE);
				$this->config->set_item('language', $this->settings['default_lang']);
				$this->twig->addGlobal('current_lang', $this->settings['default_lang']);
			}
		}else{
			$cookie = array(
		        'name'   => '_lang',
		        'value'  => $this->settings['default_lang'],
		        'expire' => '900000',
		        'path'   => '/',
		        'prefix' => $this->config->item('sess_cookie_name'),
		        'secure' => FALSE
			);
			$this->input->set_cookie($cookie);
			$this->config->set_item('language', $this->settings['default_lang']);
			$this->twig->addGlobal('current_lang', $this->settings['default_lang']);
		}

		$this->lang->load(array("general"));

		$this->twig->addGlobal('lang',$this->lang);
		
	}
	
	public function index() {
		$this->login();
	}
	
	public function register() {

		// If user is logged in redirect to home page
		if($this->User_Model->isLoggedIn()){
			redirect('/');
		}

		// If the user registration is not enabled show 404
		if($this->settings['users_can_register'] == 0){
			show_404();
			exit();
		}

		$this->session->set_userdata('tp_register_userdata',null);

		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data = array();

		// set validation rules
		$this->form_validation->set_rules('username', l('Username'), 'trim|required|alpha_numeric|max_length[32]|min_length[4]|regex_match[/^[a-z0-9]+$/]|is_exists[users.username]', array(
			'is_exists' => l('This username "%s" is already taken, please choose another',$this->input->post('username', TRUE)),	
			'regex_match' => l('Username must contain lowercase letters and numbers only.'),	
		));

		$this->form_validation->set_rules(
			'email',
			l('E-mail'),
			'trim|required|max_length[64]|valid_email|is_exists[users.email]',
			array('is_exists' => l('The E-mail is already exists'))
		);

		$this->form_validation->set_rules('password', l('Password'), 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', l('Confirm Password'), 'trim|required|min_length[6]|matches[password]');
		
		if ($this->form_validation->run() === false) {
			$this->twig->display('public/register', $data);
			return;
		}

		// Check the captcha
		if(@$this->settings['captcha_enabled'] == 1){
			require_once FCPATH . 'vendor/google/recaptcha/src/autoload.php';
			$recaptcha = new \ReCaptcha\ReCaptcha(@$this->settings['captcha_secret']);
			$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
		    if (!$resp->isSuccess()){
		    	$data['flash'][] = flash_bag(l("The Captcha was not correct. Please try again"),"danger");
		    	if(DEBUG_MODE){
		    		foreach ($resp->getErrorCodes() as $code) {
		            	$data['flash'][] = flash_bag($code,"danger");
		            }
		    	}
				$this->twig->display('public/register', $data);
				return;
		    }
		}

		// Add User
		$is_active = $this->settings['user_active_by_admin'] == 1 ? 0 : 1;

		if($is_active == 1){
			$is_active = $this->settings['users_must_confirm_email'] == 1 ? 0 : 1;
		}

		// Check if the default role is exists 
		$this->load->model('Role_Model');
		$this->Role_Model->setId((int)$this->settings['default_role']);
		$role = $this->Role_Model->getById();

		if(!$role->row()){
			// user creation failed, this should never happen
			$data['flash'][] = flash_bag(l("There was a problem creating your new account. Please try again."),"danger");
			log_message("error","Default role not found!");
			$this->twig->display('public/register', $data);
			return;
		}	

		// Save the new user account data
		$this->User_Model->setUsername(strtolower($this->input->post('username', TRUE)));
		$this->User_Model->setEmail(strtolower($this->input->post('email', TRUE)));
		$this->User_Model->setPassword($this->input->post('password', TRUE));
		$this->User_Model->setTimezone($this->settings['default_timezone']);
		$this->User_Model->setUserLang($this->settings['default_lang']);
		$this->User_Model->setIsActive($is_active);
		$this->User_Model->setExpired(0);

		$this->User_Model->setRole($this->settings['default_role']);

		// Set account Expiry
		if($role->row('account_expiry') == 0){
			$this->User_Model->setExpireOn(NULL);
		}else{
			$currentDateTime = new DateTime();
			$currentDateTime->modify("+".$role->row('account_expiry')." days");
			$this->User_Model->setExpireOn($currentDateTime->format('Y-m-d'));
		}
		
		$this->load->helper('hash_helper');
		$activation_code = salt();

		$accountCreationMsg = l("Your account has been created successfully")."\n";

		// Check if the user must confirm his / her email
		if($this->settings['users_must_confirm_email'] == 1){
			
			$this->User_Model->setActivationCode($activation_code);

			$accountCreationMsg .= l("To complete the process please check your email for a validation request.")."\n";

			$accountCreationMsg .= l("Within the email you will find a link which you must click in order to activate your account.\n");

			$accountCreationMsg .= l("If the email doesn't appear shortly, please be sure to check your spam / junk mail folder.\n");
		}

		if($this->settings['user_active_by_admin'] == 1){
			$accountCreationMsg .= l('Your account is awaiting activation');
		}
		
		if ($user_id = $this->User_Model->save()) {

			// Set account default settings
			$this->User_Model->setId($user_id);
			$this->User_Model->defaultSettings();

			$this->load->library('email');
			$this->load->helper('mail_config_helper');
			$this->email->initialize(mail_config($this->Settings_Model->get()));
			$this->email->from(EMAIL_FROM, $this->settings['sitename']);
			$this->email->reply_to(ADMIN_EMAIL, $this->settings['sitename']);

			if($this->settings['users_must_confirm_email'] == 1){
				
				// Generate the reset link 
				$actlink = base_url("user/account_activation?email=".$this->input->post('email',TRUE)."&activation_code=".$activation_code);

				$message = l("Hello %s ",$this->input->post('username', TRUE)).".<br/><br/>";
				$message .= l("Thank you for registering with %s ! To complete your registration please click the link below or paste it into the browser to confirm your e-mail address and complete your registration.",$this->settings['sitename'])."<br/>";
				$message .= "<a href='".$actlink."' target='_bank'>".$actlink."</a>";
				$message .= "<br/><br/><br/>".l("Please do not reply to this email.");

				// Sending the activation link
				$this->email->from(EMAIL_FROM, $this->settings['sitename']);
				$this->email->reply_to(ADMIN_EMAIL, $this->settings['sitename']);
				$this->email->to($this->input->post('email',TRUE));
				$this->email->subject(l('Account activation'));
				$this->email->message($message);

				if(!$this->email->send()){
					log_message("error","User controller -> register method : Failed to send activation link");
				}
			}

			
			if($is_active)
			{
				$welcomeEmailTplData = array(
					"site_name" => $this->settings['sitename'],
					"name" => $this->input->post('username', TRUE),
					"username" => $this->input->post('username', TRUE),
					"email" => $this->input->post('email',TRUE)
				); 
				$welcomeEmailTpl = $this->twig->render("mail_templates/welcome",$welcomeEmailTplData);
				$this->email->to($this->input->post('email',TRUE));
				$this->email->subject(l('Welcome to %s', $this->settings['sitename']));
				$this->email->message($welcomeEmailTpl);
				if(!$this->email->send()){
					log_message("error","User controller -> register method : Failed to send welcome message");
				}
			}

			if(@$this->settings['receive_notif_new_user']){
				$newUserTPLData = array(
					"site_name" => $this->settings['sitename'],
					"username" => $this->input->post('username', TRUE),
					"email" => $this->input->post('email',TRUE),
					"require_approval" => $this->settings['user_active_by_admin'] == 1
				); 
				$newUserTPL = $this->twig->render("mail_templates/new_user",$newUserTPLData);
				
				$this->email->from(EMAIL_FROM, $this->settings['sitename']);
				$this->email->reply_to(ADMIN_EMAIL, $this->settings['sitename']);
				$this->email->to($this->settings['admin_email']);
				$this->email->subject(l('[%s] A new user registered : %s', $this->settings['sitename'],$this->input->post('username', TRUE)));
				$this->email->message($newUserTPL);
				if(!$this->email->send()){
					log_message("error","User controller -> register method : Failed to send welcome message");
				}
			}

			$this->session->set_flashdata('login_success',$accountCreationMsg);
			redirect('login');
			
		} else {
			// user creation failed, this should never happen
			$data['flash'][] = flash_bag(l("There was a problem creating your new account. Please try again."),"danger");
			// send error to the view
			$this->twig->display('public/register', $data);
		}
	}
		
	public function register_third_party($thirdparty = false) {

		// If user is logged in redirect to home page
		if($this->User_Model->isLoggedIn()){
			redirect('/');
			return;
		}

		// If the user registration is not enabled show 404
		if($this->settings['users_can_register'] == 0){
			show_404();
			return;
		}

		if($thirdparty === false || $this->input->get('token',TRUE) == null){
			redirect('/register');
			return;
		}

		$data = array();

		$data['thirdparty'] = $thirdparty;
		$data['token'] = $this->input->get('token',TRUE);

		switch ($thirdparty) {
			case 'facebook':
				if(!$this->session->userdata('tp_register_userdata')){
					$this->load->model('Facebook_Model');
					$this->Facebook_Model->setAccessToken($this->input->get('token',TRUE));
					$userData = $this->Facebook_Model->GetUserFromAccessToken();

					if($userData == null){
						redirect('/register'); return;
					}else{
						$this->session->set_userdata('tp_register_userdata',array(
							"tp" => "facebook",
							"data" => $userData
						));
					}
				}
				break;
			default:
				redirect('/register');
				break;
		}

		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');

		$tpdata = $this->session->userdata('tp_register_userdata');
		$data['tpdata'] = $tpdata;

		$tpdata = $tpdata['data'];

		if(!isset($tpdata->email) || !isset($tpdata->first_name) || !isset( $tpdata->last_name)){
			$this->session->set_userdata('tp_register_userdata', NULL);
			redirect('/register'); return;
		}

		$checkEmail = $this->User_Model->getUserByEmail($tpdata->email);
		if($checkEmail){
			$data['flash'][] = flash_bag(l("There is an existing account associated with this email '%s'",$tpdata->email),"danger");
			$this->twig->display('public/register_third_party', $data);
			return;
		}
		
		// set validation rules
		$this->form_validation->set_rules('username', l('Username'), 'trim|required|alpha_numeric|max_length[32]|min_length[4]|regex_match[/^[a-z0-9]+$/]|is_exists[users.username]', array(
			'is_exists' => l('This username "%s" is already taken, please choose another',$this->input->post('username', TRUE)),	
			'regex_match' => l('Username must contain lowercase letters and numbers only.'),	
		));

		$this->form_validation->set_rules('password', l('Password'), 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', l('Confirm Password'), 'trim|required|min_length[6]|matches[password]');
		
		if ($this->form_validation->run() === false) {
			$this->twig->display('public/register_third_party', $data);
			return;
		}

		// Add User
		$is_active = $this->settings['user_active_by_admin'] == 1 ? 0 : 1;

		// Check if the default role is exists 
		$this->load->model('Role_Model');
		$this->Role_Model->setId((int)$this->settings['default_role']);
		$role = $this->Role_Model->getById();

		if(!$role->row()){
			// user creation failed, this should never happen
			$data['flash'][] = flash_bag(l("There was a problem creating your new account. Please try again."),"danger");
			log_message("error","Default role not found!");
			return;
		}	

		// Save the new user account data
		$this->User_Model->setUsername(strtolower($this->input->post('username', TRUE)));
		$this->User_Model->setEmail(strtolower($tpdata->email));
		$this->User_Model->setFirstname($tpdata->first_name);
		$this->User_Model->setlastname($tpdata->last_name);
		$this->User_Model->setPassword($this->input->post('password', TRUE));
		$this->User_Model->setTimezone($this->settings['default_timezone']);
		$this->User_Model->setUserLang($this->settings['default_lang']);
		$this->User_Model->setIsActive($is_active);
		$this->User_Model->setFbUserId($tpdata->id);
		$this->User_Model->setExpired(0);
		$this->User_Model->setRegisteredWith($thirdparty);

		$this->User_Model->setRole($this->settings['default_role']);

		// Set account Expiry
		if($role->row('account_expiry') == 0){
			$this->User_Model->setExpireOn(NULL);
		}else{
			$currentDateTime = new DateTime();
			$currentDateTime->modify("+".$role->row('account_expiry')." days");
			$this->User_Model->setExpireOn($currentDateTime->format('Y-m-d'));
		}

		$this->load->helper('hash_helper');
		$activation_code = salt();
		
		// Check if the user must confirm his / her email
		if($this->settings['user_active_by_admin'] == 0 && $this->settings['users_must_confirm_email'] == 1){	
			$this->User_Model->setActivationCode($activation_code);
			$accountCreationMsg = l('Your account has been created successfully. please check your email to activate your account');
		}

		if($this->settings['user_active_by_admin'] == 1){
			$accountCreationMsg = l('Your account has been created successfully. your account is awaiting activation');
		}

		if($is_active){
			$accountCreationMsg = l('Your account has been created successfully.');
		}
		
		if ($user_id = $this->User_Model->save()) {

			// Set account default settings
			$this->User_Model->setId($user_id);
			$this->User_Model->defaultSettings();

			$this->session->set_flashdata('login_success',$accountCreationMsg);
			redirect('login');
			$this->session->set_userdata('tp_register_userdata',null);

			if($this->settings['user_active_by_admin'] == 0)
			{
				$welcomeEmailTplData = array(
					"site_name" => $this->settings['sitename'],
					"name" => $this->input->post('username', TRUE),
					"username" => $this->input->post('username', TRUE),
					"email" => $this->input->post('email',TRUE)
				); 
				$welcomeEmailTpl = $this->twig->render("mail_templates/welcome",$welcomeEmailTplData);
				$this->load->library('email');
				$this->load->helper('mail_config_helper');
				$this->email->initialize(mail_config($this->Settings_Model->get()));
				$this->email->from(EMAIL_FROM, $this->settings['sitename']);
				$this->email->reply_to(ADMIN_EMAIL, $this->settings['sitename']);
				$this->email->to($this->input->post('email',TRUE));
				$this->email->subject(l('Welcome to %s', $this->settings['sitename']));
				$this->email->message($welcomeEmailTpl);
			}

			
		} else {
			// user creation failed, this should never happen
			$data['flash'][] = flash_bag(l("There was a problem creating your new account. Please try again."),"danger");
			// send error to the view
			$this->twig->display('public/register', $data);
		}

	}

	public function login() {

		// If user is logged in redirect to home page
		if($this->User_Model->isLoggedIn())
			redirect('/');

		// Check if cookie session is exists
		if($uscode = $this->input->cookie($this->config->item('sess_cookie_name')."_usid", TRUE)){
			if($this->User_Model->loginFromCookie($uscode)){
				redirect("/");
			}
		}

		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');

		$twigData = array();

		if($this->session->flashdata('login_success')) {
			$twigData['flash'][] = flash_bag($this->session->flashdata('login_success'),"success");
		}

		if($this->session->flashdata('login_danger')) {
			$twigData['flash'][] = flash_bag($this->session->flashdata('login_danger'),"danger");
		}

		// Facebook
		$this->load->helper("thirdparty_login_helper");
		if(@$this->settings['fb_login_app'] && @$this->settings['fb_login_app_secret']){
			$twigData['fb_login_url'] = thirdparty_login_facebook(@$this->settings['fb_login_app'],@$this->settings['fb_login_app_secret']);
		}

		// set validation rules
		$this->form_validation->set_rules('username', l('Username'), 'trim|required');
		$this->form_validation->set_rules('password', l('Password'), 'trim|required');

		if ($this->form_validation->run() == false) {
			// validation not ok, send validation errors to the view
			$this->twig->display('public/login',$twigData);
		} else {
			// set variables from the form
			$username = $this->input->post('username',TRUE);
			$password = $this->input->post('password',TRUE);
			$rememberMe = $this->input->post('remember',TRUE) == "on" ? TRUE : FALSE;

			if ($this->User_Model->checkUserLogin($username, $password, $rememberMe)) {
				// user login ok
				if($this->session->userdata('next_after_login')){
					$uri = $this->session->userdata('next_after_login');
					$this->session->unset_userdata('next_after_login');
					redirect($uri);
					exit();
				}else{
					redirect("/");
					exit();
				}
			} else {
				// login failed
				$twigData['flash'][] = flash_bag($this->User_Model->getErrors(),"danger");
				
			}
		}
		
		// send error to the view
		$this->twig->display('public/login',$twigData);
	}
		
	public function thirdparty_login($thirdparty = null) {

		// If user is logged in redirect to home page
		if($this->User_Model->isLoggedIn()){
			redirect('/');
			return;
		}

		// Check if cookie session is exists
		if($uscode = $this->input->cookie($this->config->item('sess_cookie_name'), TRUE)){
			if($this->User_Model->loginFromCookie($uscode)){
				redirect("/");
				return;
			}
		}

		if($thirdparty == null){
			redirect('login');
			return;
		}

		$twigData = array();
		if($this->session->flashdata('login_success')) {
			$twigData['flash'][] = flash_bag($this->session->flashdata('login_success'),"success");
		}

		if($this->User_Model->loginViaFacebook()) {
			if($this->session->userdata('next_after_login')){
				$uri = $this->session->userdata('next_after_login');
				$this->session->unset_userdata('next_after_login');
				redirect($uri);
				return;
			}
			redirect("/");
			return;
		}
		$this->session->set_flashdata('login_danger', l('Failed to login via Facebook')." ".$this->User_Model->getErrors());
		redirect("login");
	}

	public function logout() {
		$this->User_Model->loggedOut();
		redirect('/login');
	}

	public function account_recovery(){

		$this->load->helper('form');
		$this->load->library('form_validation');

		$data = array();

		$this->form_validation->set_rules('email', l('Email'), 'trim|required|valid_email');

		if ($this->form_validation->run() == false) {
			$this->twig->display('public/account_recovery');
		} else {

			$user = $this->User_Model->getUserByEmail($this->input->post('email',TRUE));

			if(count($user)){

				$this->load->helper('hash_helper');

				$this->load->library('email');
				$this->load->helper('mail_config_helper');
				$this->email->initialize(mail_config($this->Settings_Model->get()));

				// Generating the reset code
				$pwResetCode = salt();
				
				// Updating the user table and inserting the reset code
				$this->User_Model->setId($user->id);
				$this->User_Model->update(array("pw_reset_code" => $pwResetCode));

				// Generate the reset link 
				$pwResetlink = base_url("reset_password?email=".$this->input->post('email',TRUE)."&pw_reset_code=".$pwResetCode);

				$message = l("Hello %s",$user->firstname).",<br/><br/>";
				$message .= l("You recently requested a new password")."<br/><br/>";
				$message .= l("Please click the link below to complete your request")."<br/>";
				$message .= "<a href='".$pwResetlink."'>".$pwResetlink."</a>";
				$message .= "<br /><br />".l('Please do not reply to this email.');

				// Sending the password reset request message
				$this->email->from(EMAIL_FROM, $this->settings['sitename']);
				$this->email->reply_to(ADMIN_EMAIL, $this->settings['sitename']);
				$this->email->to($this->input->post('email',TRUE));
				$this->email->subject(l('Account recovery request'));
				$this->email->message($message);

				if($this->email->send()){
					$data['flash'][] = flash_bag(l("Reset password link has been sent to your email"),"success");
				}else{
					$data['flash'][] = flash_bag("Oops somthing went wrong, please try again","danger",TRUE,TRUE);
				}

			}else{
				$data['flash'][] = flash_bag(l("No Account associated with this email address"),"danger",true,true);
			}

			$this->twig->display('public/account_recovery',$data);
		}	
	}

	public function reset_password(){

		$twigData = array();

		if($this->input->get('email',TRUE) == null || $this->input->get('pw_reset_code',TRUE) == null){
			$twigData['flash'][] = flash_bag(l("The password reset link is not valid"),"danger",true,false);
			$this->twig->display('public/reset_password_invalid',$twigData);
			return;
		}

		// Check if the reset code is valid
		$user = $this->User_Model->CheckPWResetCode($this->input->get('email',TRUE),$this->input->get('pw_reset_code',TRUE));
		if(!$user){
			$twigData['flash'][] = flash_bag(l("The password reset link is not valid"),"danger",true,false);
			$this->twig->display('public/reset_password_invalid',$twigData);
			return;
		}

		$twigData['user'] = $user;
		
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('password', l('Password'), 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', l('Confirm Password'), 'trim|required|min_length[6]|matches[password]');

		if ($this->form_validation->run() == true) {

			$salt = substr(md5(uniqid(rand(), true)), 0, 32);

			$newPW = array(
				"password" => $this->User_Model->hash_password($this->input->post("password",true),$salt),
				"salt" => $salt,
				"pw_reset_code" => "",
			);

			$this->User_Model->setId($user->id);
			if($this->User_Model->update($newPW)){
				$this->session->set_flashdata('login_success', l('Your password has been updated successfully.'));
				redirect('login');
			}else{
				$twigData['flash'][] = flash_bag("Failed to update your password, Please try agian","danger",true,false);
			}
		}

		$this->twig->display('public/reset_password',$twigData);
	}

	public function account_activation(){

		// Check the activation and email combination activate user account or show error
		$twigData = array();

		if($this->input->get('email',TRUE) == null || $this->input->get('activation_code',TRUE) == null){
			$twigData['flash'][] = flash_bag(l("The activation link is not valid"),"danger",true,false);
			$this->twig->display('public/account_activation',$twigData);
			return;
		}

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_data($this->input->get());

		$this->form_validation->set_rules('email', l('Email'), 'trim|required|valid_email');

		if ($this->form_validation->run() == false) {
			$twigData['flash'][] = flash_bag(l("The email is not valid!"),"danger",true,false);
			$this->twig->display('public/account_activation',$twigData);
			return;
		}

		// Check if the activation code is valid
		$this->User_Model->setEmail($this->input->get('email',TRUE));
		$this->User_Model->setActivationCode($this->input->get('activation_code',TRUE));
		$user = $this->User_Model->CheckActivationCode();

		if(!$user->row()){
			$twigData['flash'][] = flash_bag(l("The activation link is not valid"),"danger",true,false);
			$this->twig->display('public/account_activation',$twigData);
			return;
		}

		// The activation is valid update the user is_active field
		$this->User_Model->setId($user->row('id'));
		$stat = $this->User_Model->update(array(
			"active"=> 1,
			"act_code"=> ""
		));

		if($stat){
			$this->session->set_flashdata('login_success', l('Your account has been activated successfully.'));
			redirect('login');
			exit();
		}else{
			$twigData['flash'][] = flash_bag(l("Failed to activate your account please try again or contact us."),"danger",true,false);
			$this->twig->display('public/account_activation',$twigData);
			return;
		}
	}
}
