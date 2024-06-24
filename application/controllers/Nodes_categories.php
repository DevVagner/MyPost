<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nodes_categories extends CI_Controller {

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
		$this->load->database();
		$this->load->library(array('session','twig'));

		$this->load->model('User_Model');
		$this->load->model('Settings_Model');
			
		// If user is not logged in redirect to login page
		if(!$this->User_Model->isLoggedIn()){
			redirect('/login');
		}	

		$this->load->model('Facebook_Model');
		$this->load->model('FbApps_Model');
		$this->load->model('NodesCategory_Model');
		$this->load->model('FbAccount_Model');

		$this->currentUser = $this->User_Model->currentUser();

		// If the user account has expired show expiry page
		if($this->currentUser['expired'] == 1){
			redirect('account_expiry');
			exit();
		}

		$this->settings = $this->Settings_Model->get();
		
		$this->config->set_item('language', $this->currentUser['lang']);
		$this->lang->load(array("general"));

		$this->load->helper(array('json_helper'));


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

	public function index() {
		$twigData = array();

		$this->NodesCategory_Model->setUserId($this->currentUser['user_id']);
		
		$nodesCategories = $this->NodesCategory_Model->get();
		
		$twigData['nodes_categories'] = $nodesCategories;
		$twigData['User_Model'] = $this->User_Model;
		$twigData['total_records'] = $this->NodesCategory_Model->count();
		
		$this->load->model('FbAccount_Model');
		$twigData['fbaccount'] = $this->FbAccount_Model;
		$twigData['fbaccountDetails'] = $this->FbAccount_Model->getFbAccountById($this->FbAccount_Model->UserDefaultFbAccount());
		
		$this->twig->display('nodes_categories/home',$twigData);
	}

	public function add_category(){

		// Check required fields
		$this->load->library('form_validation');

		$this->form_validation->set_rules('categoryname', $this->lang->s('Category name'), 'trim|required|min_length[2]|max_length[32]|regex_match[/^[\p{L}\p{M}\p{Nd} ]{2,}$/u]', array(
			'regex_match' => $this->lang->s('Category name must contain alphanumeric characters underscore and space only.'),	
		));

		if($this->form_validation->run() === false) {
			display_json(array(
				'status' => 'error',
				'message' => $this->form_validation->error_array()
			));
			return;
		}

		$facebookAccountID = $this->input->post("facebook_account",TRUE);

		if(!$facebookAccountID){
			display_json(array(
				'status' => 'error',
				'message' => l('NO_FB_ACCOUNT_SELECTED')." ".l("A category must be associated with a Facebook account")
			));
			return;
		}

		// check if the facebook ID exists
		$fbAccount = $this->FbAccount_Model->getFbAccountById($facebookAccountID,$this->currentUser['user_id']);
		if(!$fbAccount){
			display_json(array(
				'status' => 'error',
				'message' => l("Facebook account not exists")
			));
			return;
		}

		// add the new category
		// Check if a category with the same name is already exists
		if($this->NodesCategory_Model->isCatNameExists($this->input->post('categoryname',TRUE),$this->currentUser['user_id'],$this->FbAccount_Model->UserDefaultFbAccount())){
			display_json(array(
				'status' => 'error',
				'message' => $this->lang->s('A category with the same name is already exists')
			));
			return;
		}

		$this->NodesCategory_Model->setUserId($this->currentUser['user_id']);
		$this->NodesCategory_Model->setFbId($facebookAccountID);
		$this->NodesCategory_Model->setCategoryName($this->input->post('categoryname',TRUE));

		if($this->NodesCategory_Model->save()){
			display_json(array(
				'status' => 'success',
				'message' => $this->lang->s('The new category has been saved succussfully.')
			));
			return;
		}


		display_json(array(
			'status' => 'success',
			'message' => $this->lang->s('Failed to save the category please try again.')
		));
		return;

	}

	public function delete(){

		// Check required fields
		$this->load->library('form_validation');

		$this->form_validation->set_rules('id', $this->lang->s('Category ID'), 'trim|required|integer');

		if($this->form_validation->run() === false) {
			display_json(array(
				'status' => 'error',
				'message' => $this->form_validation->error_array()
			));
			return;
		}

		$this->NodesCategory_Model->setId($this->input->post('id',TRUE));
		$this->NodesCategory_Model->setUserId($this->currentUser['user_id']);

		$category = $this->NodesCategory_Model->getbyId();

		if(!$category->row()){
			display_json(array(
				'status' => 'error',
				'message' => $this->lang->s('Category not found')
			));
			return;
		}

		// if the category is the facebook account default category remove the default category
		$currentFbAccount = $this->FbAccount_Model->UserDefaultFbAccount();

		if($category->row('fb_id') == $currentFbAccount){
			$this->FbAccount_Model->setUserId($this->currentUser['user_id']);
			$this->FbAccount_Model->setFbId($currentFbAccount);
			$this->FbAccount_Model->setDefaultNodesCategory("-1");
			$this->FbAccount_Model->update();
		}

		if($this->NodesCategory_Model->delete()){
			display_json(array(
				'status' 	=> 'success',
				'message' 	=> $this->lang->s('Category has been deleted succussfully')
			));
			return;
		}

		display_json(array(
			'status' 	=> 'error',
			'message' 	=> $this->lang->s('Failed to delete the requested category, Please try again')
		));
		return;

	}

	public function remove_nodes()
	{
		// Check required fields
		$this->load->library('form_validation');

		$this->form_validation->set_rules('category_id', $this->lang->s('Category ID'), 'trim|required|integer');
		$this->form_validation->set_rules('nodes', $this->lang->s('nodes'), 'trim|required');

		if($this->form_validation->run() === false) {
			display_json(array(
				'status' => 'error',
				'message' => $this->form_validation->error_array()
			));
			return;
		}

		$this->NodesCategory_Model->setId($this->input->post('category_id',TRUE));
		$this->NodesCategory_Model->setUserId($this->currentUser['user_id']);
		$this->NodesCategory_Model->setFbId($this->FbAccount_Model->UserDefaultFbAccount());
		
		$res = $this->NodesCategory_Model->removeNodes(json_decode($this->input->post('nodes',TRUE),true));
		
		if($res){
			display_json(array(
				'status' 	=> 'success',
				'message' 	=> $this->lang->s('Select nodes has been removed from the current category')
			));
			return;
		}

		display_json(array(
			'status' 	=> 'error',
			'message' 	=> $this->lang->s('Nothing has been deleted!')
		));
		return;

	}
	
	public function add_nodes($value='')
	{
		// Check required fields
		$this->load->library('form_validation');

		$this->form_validation->set_rules('category_id', $this->lang->s('Category ID'), 'trim|required|integer');
		$this->form_validation->set_rules('nodes', $this->lang->s('nodes'), 'trim|required');

		if($this->form_validation->run() === false) {
			display_json(array(
				'status' => 'error',
				'message' => $this->form_validation->error_array()
			));
			return;
		}

		if(!$this->FbAccount_Model->UserDefaultFbAccount()){
			display_json(array(
				'status' => 'error',
				'message' => $this->lang->s('NO_FB_ACCOUNT_SELECTED')
			));
			return;
		}

		$this->NodesCategory_Model->setId($this->input->post('category_id',TRUE));
		$this->NodesCategory_Model->setUserId($this->currentUser['user_id']);
		$this->NodesCategory_Model->setFbId($this->FbAccount_Model->UserDefaultFbAccount());
		
		$nodes = (array)json_decode($this->input->post('nodes',TRUE),true);

		$res = $this->NodesCategory_Model->addNodes($nodes);
		
		if($res){
			display_json(array(
				'status' 	=> 'success',
				'message' 	=> $this->lang->s('Select nodes has been added to the category')
			));
			return;
		}

		display_json(array(
			'status' 	=> 'error',
			'message' 	=> $this->lang->s('Nothing has been added!')
		));
		return;
	}

	public function refresh($fbaccount=NULL,$category=NULL){
		if($category==NULL) return;
		if($fbaccount==NULL) return;
		$this->NodesCategory_Model->setId((int)$category);
		$this->NodesCategory_Model->setUserId($this->currentUser['user_id']);
		$this->NodesCategory_Model->setFbId($fbaccount);
		$this->NodesCategory_Model->refreshNodes();
		display_json(array(
			'status' 	=> 'ok',
			'message' 	=> l('Category has been updated')
		));
		return;
	}

}
