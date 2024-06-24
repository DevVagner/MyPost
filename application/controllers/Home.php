<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Kingposter
 * @author    Pandisoft <pandisoft@gmail.com>
 * @copyright Pandisoft - pandisoft.com
 *
 */
class Home extends CI_Controller {

	private $settings;
	private $currentUser = array();

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {

		parent::__construct();
		
		//$this->output->enable_profiler(TRUE);

		$this->load->database();

		$this->load->library(array('session'));

		$this->load->model('User_Model');
		$this->load->model('Settings_Model');
		
		// If user is not logged in redirect to login page
		if(!$this->User_Model->isLoggedIn()){
			redirect('/login');
		}
		
		if($this->router->method == 'index' && strpos($_SERVER['REQUEST_URI'], 'index.php') !== false) {
			header('location: '.BASE_URL."?".http_build_query($_GET));
		}

		$this->currentUser = $this->User_Model->currentUser();

		// If the user account has expired show expiry page
		if($this->currentUser['expired']){
			redirect('account_expiry');
			exit();
		}
		
		$this->load->library('twig');
		$this->load->model('FbAccount_Model');
		
		$this->settings = $this->Settings_Model->get();
		$this->userSettings = $this->User_Model->userSettings();

		$this->config->set_item('language', $this->currentUser['lang']);

		$this->lang->load(array("general"));

		$this->twig->addGlobal('fbaccount', $this->FbAccount_Model);
		$this->twig->addGlobal('user', $this->User_Model);
		$this->twig->addGlobal('app_settings', $this->settings);

		// Set User Timezone
		date_default_timezone_set($this->currentUser['timezone']);

		// Set Date format
		$this->twig->addGlobal('date_format', $this->settings['date_format']);
		$this->load->helper('general_helper');
		$this->twig->addGlobal('date_format_js', php_date_to_js($this->settings['date_format']));

	}

	// The Homepage
	public function index()
	{
		$this->load->helper(array('flash_helper'));

		$twigData = array();
		$twigData['flash'] = null;

		$this->load->model('FbApps_Model');
		$this->load->model('NodesCategory_Model');
		$this->load->model('Post_Model');

		$currentFbAccount = $this->FbAccount_Model->UserDefaultFbAccount();

		$this->FbAccount_Model->setUserId($this->currentUser['user_id']);
		$this->FbAccount_Model->setFbId($currentFbAccount);

		$fbAccountDefaultApp = $this->FbAccount_Model->UserFbAccountDefaultApp();

		if(!$currentFbAccount){
			$twigData['flash'][] = flash_bag($this->lang->s("No Facebook account available, %s ","<a href='".base_url("facebook_accounts")."'>".$this->lang->s("Add Facebook Account")."</a>"),"warning",TRUE,TRUE,TRUE);
		}

		if(!$fbAccountDefaultApp->row()){
			$twigData['flash'][] = flash_bag($this->lang->s("No application has been selected, %s ","<a href='".base_url("settings/publish_settings")."'>".$this->lang->s("Select default Facebook app")."</a>"),"warning",TRUE,TRUE,TRUE);
		}else{
			$twigData['fbAccountDefaultApp'] = $fbAccountDefaultApp;
		}

		if($_SERVER['REQUEST_METHOD'] == 'POST'){

			if($this->input->post('nodescategory',TRUE)){
				// Set deault category
				$this->FbAccount_Model->setUserId($this->currentUser['user_id']);
				$this->FbAccount_Model->setFbId($this->FbAccount_Model->UserDefaultFbAccount());
				$this->FbAccount_Model->setDefaultNodesCategory((int)$this->input->post('nodescategory',TRUE));
				$this->FbAccount_Model->update();
			}

			if($this->input->post('removeGroup',TRUE)){
				try{
					$this->FbAccount_Model->removeGroupFromCategory($this->input->post('removeGroup',TRUE));
					$twigData['flash'][] = flash_bag($this->lang->s('GROUP_RMOVED_SUCCESS'),'success',true,true);
				}catch(Exeption $ex){
					$twigData['flash'][] = flash_bag($ex->getMessage(),"danger");
				}
				Redirect('/');
			}
		}

		$this->NodesCategory_Model->setUserId($this->currentUser['user_id']);
		$this->NodesCategory_Model->setFbId($currentFbAccount);
		$this->FbAccount_Model->setUserId($this->currentUser['user_id']);
		$this->FbAccount_Model->setFbId($currentFbAccount);

		$twigData['nodesCategories'] = $this->NodesCategory_Model->getFbAccountCategories();
		$twigData['fbaccountDetails'] = $this->FbAccount_Model->getFbAccountById($currentFbAccount);
		$twigData['userFbNodes'] = $this->FbAccount_Model->getUserNodes();
		$twigData['hiddenNodes'] = $this->FbAccount_Model->hiddenNodes();
		$twigData['fbAccountApps'] = $this->FbAccount_Model->fbAccountApps();

		$twigData['settings'] = $this->settings;
		$this->User_Model->setId($this->currentUser['user_id']);
		$twigData['user_options'] = $this->User_Model->userSettings();

		$twigData['less_data'] = LESS_DATA_ON_DATATABLE;
		$twigData['useDataTableP'] = USE_DT_PLUGIN;

		// Set post if provided
		if($this->input->get('post_id',TRUE)){
			$this->Post_Model->setId((int)$this->input->get('post_id',TRUE));
			$this->Post_Model->setUserId($this->currentUser['user_id']);
			$post = $this->Post_Model->getById();
			if($post->row()){
				$twigData['post'] = $post; 
			}
		}

		// Get Dashoard notification
		if(KPMIsActive('notifications')){
			$this->load->model('UserNotifications_Model');
			$this->UserNotifications_Model->setUserId($this->currentUser['user_id']);
			$this->UserNotifications_Model->setShowOn("home");
			if($notifications = $this->UserNotifications_Model->getUserNotifications($twigData['flash'])){
				$twigData['flash'] = $notifications;
			}
		}
		
		if(KPMIsActive('payments')){
			$expireIn = $this->User_Model->expireIn();
			if($expireIn != false && $expireIn <= 5){
				$twigData['flash'][] = flash_bag(l("Your account will expire in %s days, %s to Renew your plan.", $expireIn,"<a href='".base_url("prices")."'>".l("Click here")."</a>"),"danger",TRUE,TRUE,TRUE);	
			}
		}

		// Force to downgrade
		$twigData['downgrade_fb_accounts'] = (bool)FORCE_DOWNGRADE_FB_ACCOUNTS;
		if(FORCE_DOWNGRADE_FB_ACCOUNTS){
			$twigData['total_fb_account'] = $this->FbAccount_Model->countFbAccount((int)$this->currentUser['user_id']);

			$this->load->model('Role_Model');
			$this->Role_Model->setId((int)$this->currentUser['role']);
			$twigData['user_group'] = $this->Role_Model->getById();

			if($twigData['user_group']->row("max_fbaccount") == 0 || $twigData['total_fb_account'] <= $twigData['user_group']->row("max_fbaccount")){
				$twigData['downgrade_fb_accounts'] = FALSE;
			}
			
		}
		
		$twigData['load_nodes_ajax'] = LOAD_NODES_AJAX;

		$this->twig->display('home',$twigData);
	}

	public function toggleShowPages()
	{
		$this->load->library('form_validation');
		$this->load->helper('json_helper');

		$nOptions = array();

		$nOptions['show_pages'] = (int)$this->input->post("status");

		$this->User_Model->setId($this->currentUser['user_id']);
		$this->User_Model->UpdateOptions($nOptions);

		$this->form_validation->set_rules('status', 'Status title', 'trim|required');

		if($this->form_validation->run() === false) {
			display_json(array(
				'status' => 'fail',
				'message' => $this->form_validation->error_array()
			));
			return;
		}

		display_json(array(
			'status' => 'ok',
			'message' => ''
		));
	}

	public function toggleNodesVisibility($type = null)
	{
		if($type===null){show_404();return;}

		$this->load->library('form_validation');
		$this->load->helper('json_helper');

		$this->form_validation->set_rules('status', 'Status', 'trim|required');

		if($this->form_validation->run() === false) {
			display_json(array(
				'status' => 'fail',
				'message' => $this->form_validation->error_array()
			));
			return;
		}

		$nOptions = array();
		switch($type){
			case "groups";
				$nOptions['show_groups'] = (int)$this->input->post("status");
				break;
			case "pages";
				$nOptions['show_pages'] = (int)$this->input->post("status");
				break;
			case "show_managed_pages":
				$nOptions['show_managed_pages'] = (int)$this->input->post("status");
				break;
			default:
				show_404();
				return;
		}

		$this->User_Model->setId($this->currentUser['user_id']);
		$this->User_Model->UpdateOptions($nOptions);

		display_json(array(
			'status' => 'ok',
			'message' => ''
		));
	}

	public function toggleShowGroups()
	{
		$this->load->library('form_validation');
		$this->load->helper('json_helper');

		$nOptions = array();

		$nOptions['show_groups'] = (int)$this->input->post("status");

		$this->User_Model->setId($this->currentUser['user_id']);
		$this->User_Model->UpdateOptions($nOptions);

		$this->form_validation->set_rules('status', 'Status title', 'trim|required');

		if($this->form_validation->run() === false) {
			display_json(array(
				'status' => 'fail',
				'message' => $this->form_validation->error_array()
			));
			return;
		}

		display_json(array(
			'status' => 'ok',
			'message' => ''
		));
	}

	public function toggleHiddenNodes()
	{
		$this->load->library('form_validation');
		$this->load->helper('json_helper');

		$nOptions = array();

		$nOptions['show_hidden_nodes'] = (int)$this->input->post("status");

		$this->User_Model->setId($this->currentUser['user_id']);
		$this->User_Model->UpdateOptions($nOptions);

		$this->form_validation->set_rules('status', 'Status title', 'trim|required');

		if($this->form_validation->run() === false) {
			display_json(array(
				'status' => 'fail',
				'message' => $this->form_validation->error_array()
			));
			return;
		}

		display_json(array(
			'status' => 'ok',
			'message' => ''
		));
	}

	public function load_nodes()
	{
		
		$twigData = array();

		$this->load->model('FbApps_Model');
		$this->load->model('NodesCategory_Model');
		$this->load->model('Post_Model');

		$currentFbAccount = $this->FbAccount_Model->UserDefaultFbAccount();

		$this->FbAccount_Model->setUserId($this->currentUser['user_id']);
		$this->FbAccount_Model->setFbId($currentFbAccount);

		$fbAccountDefaultApp = $this->FbAccount_Model->UserFbAccountDefaultApp();
		
		$this->NodesCategory_Model->setUserId($this->currentUser['user_id']);
		$this->NodesCategory_Model->setFbId($currentFbAccount);
		$twigData['nodesCategories'] = $this->NodesCategory_Model->getFbAccountCategories();

		$twigData['fbaccountDetails'] = $this->FbAccount_Model->getFbAccountById($currentFbAccount);
		
		$twigData['userFbNodes'] = $this->FbAccount_Model->getUserNodes();

		$this->FbAccount_Model->setUserId($this->currentUser['user_id']);
		$this->FbAccount_Model->setFbId($currentFbAccount);
		
		$twigData['hiddenNodes'] = $this->FbAccount_Model->hiddenNodes();

		$twigData['settings'] = $this->settings;

		$this->User_Model->setId($this->currentUser['user_id']);
		$twigData['user_options'] = $this->User_Model->userSettings();

		$twigData['fbAccountApps'] = $this->FbAccount_Model->fbAccountApps();
		
		$twigData['less_data'] = LESS_DATA_ON_DATATABLE;
		$twigData['useDataTableP'] = USE_DT_PLUGIN;
	
		$this->twig->display('home/nodes',$twigData);
	}


	public function access_user_account($uid = false) {

		$user = $this->User_Model->get_user((int)$uid);

		if(!$user || !$user->row()){
			echo "User not found";
			return;
		}

        $userData = array();
        $userData['expired'] = FALSE;
        $userData['user_id'] = $user->row('id');
        $userData['username'] = (string)$user->row('username');
        $userData['firstname'] = (string)$user->row('firstname');
        $userData['lastname'] = (string)$user->row('lastname');
        $userData['avatar'] = (string)$user->row('avatar');
        $userData['email'] = (string)$user->row('email');
        $userData['logged_in'] = TRUE;
        $userData['timezone'] = (string)$user->row('timezone');
        $userData['lang'] = (string)$user->row('lang');
        $userData['active'] = $user->row('active');
        $userData['role'] = $user->row('roles');
        $userData['expire_on'] = $user->row('expire_on');

		$this->session->set_userdata('current_admin_account', $this->currentUser['user_id']);

		$this->session->set_userdata('user',$userData);
		$this->session->set_userdata('user_settings',NULL);
		
		redirect('/');
		exit();
	}

	public function back_to_admin(){

		$userid = $this->session->userdata('current_admin_account');

		$this->session->unset_userdata('current_admin_account');

		$user = $this->User_Model->get_user((int)$userid);

		if(!$user || !$user->row()){
			show_404();
			return;
		}

        $userData = array();
        $userData['expired'] = FALSE;
        $userData['user_id'] = $user->row('id');
        $userData['username'] = (string)$user->row('username');
        $userData['firstname'] = (string)$user->row('firstname');
        $userData['lastname'] = (string)$user->row('lastname');
        $userData['avatar'] = (string)$user->row('avatar');
        $userData['email'] = (string)$user->row('email');
        $userData['logged_in'] = TRUE;
        $userData['timezone'] = (string)$user->row('timezone');
        $userData['lang'] = (string)$user->row('lang');
        $userData['active'] = $user->row('active');
        $userData['role'] = $user->row('roles');
        $userData['expire_on'] = $user->row('expire_on');

		$this->session->set_userdata('user',$userData);
		$this->session->set_userdata('user_settings',NULL); 
		
		redirect('/');
		exit();
	}
}
