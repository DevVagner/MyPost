<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * @extends CI_Controller
 */
class Proxies_manager extends CI_Controller {

	private $settings;
	private $currentUser;

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {	
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('flash_helper','json_helper'));
		$this->load->library('twig');
		$this->load->model('User_Model');

		// if the user is logged in redirect to home page
		if(!$this->User_Model->isLoggedIn()){
			redirect('/login');
		}

		$this->load->model('Settings_Model');
		$this->settings = $this->Settings_Model->get();

		if(!$this->settings['use_proxy']){
			show_404();
			exit();
		}

		$this->currentUser = $this->User_Model->currentuser();

		$this->load->model('FbAccount_Model');

		$this->twig->addGlobal('app_settings', $this->settings);
		
		$this->config->set_item('language', $this->currentUser['lang']);
		$this->lang->load(array("general"));
		
		$this->twig->addGlobal('fbaccountDetails', $this->FbAccount_Model->getFbAccountById($this->FbAccount_Model->UserDefaultFbAccount()));
		$this->twig->addGlobal('fbaccount', $this->FbAccount_Model);
		$this->twig->addGlobal('user', $this->User_Model);

		$this->User_Model->setId($this->currentUser['user_id']);
		$this->twig->addGlobal('user_options', $this->User_Model->userSettings());

	}

	public function index()
	{
		$this->load->model('Proxy_Model');

		$this->load->library('pagination');
		$this->load->helper("pagination");

		$twigData = array();

		$perPage = isset($this->settings['per_page']) || $this->settings['per_page'] != null ? $this->settings['per_page'] : 25;
		
		$this->Proxy_Model->setUserId($this->currentUser['user_id']);

		$config = pagination_config();
		$config['base_url'] = base_url()."/settings/proxies/";
		$config['total_rows'] = $this->Proxy_Model->count();
		
		$config['per_page'] = $perPage;

		$this->pagination->initialize($config);
		$pagination = $this->pagination->create_links();
		
		$proxies = $this->Proxy_Model->get((int)$this->input->get('per_page', TRUE),$perPage);

		$twigData['proxies']		= $proxies;
		$twigData['pagination']		= $pagination;
		$twigData['total_records']	= $config['total_rows'];
		$twigData['perPage']		= $perPage >= $config['total_rows'] ? $config['total_rows'] : $perPage;

		$this->twig->display('settings/proxies_manager',$twigData);	
	}


	public function delete(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('id', 'Proxy id', 'trim|required|integer');

		if($this->form_validation->run() === false) {
			display_json(array(
				'status' => 'error',
				'message' => $this->form_validation->error_array()
			));
			exit;
		}

		$this->load->model('Proxy_Model');
		$this->Proxy_Model->setId($this->input->post('id',TRUE));
		$this->Proxy_Model->setUserId($this->currentUser['user_id']);

		if($this->Proxy_Model->delete()){
			display_json(array(
				'status' => 'success',
				'message' => l("The proxy has been deleted successfully")
			));
			exit;
		}

		display_json(array(
			'status' => 'error',
			'message' => l("Failed to delete the record")
		));
		exit;

	}

	public function add(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('host', 'Proxy host', 'trim|required');
		$this->form_validation->set_rules('port', 'Proxy port', 'trim|required');

		if($this->form_validation->run() === false) {
			display_json(array(
				'status' => 'error',
				'message' => $this->form_validation->error_array()
			));
			exit;
		}

		$this->load->model('Proxy_Model');

		$this->Proxy_Model->setUserId($this->currentUser['user_id']);
		$this->Proxy_Model->setHost($this->input->post("host",TRUE));
		$this->Proxy_Model->setPort($this->input->post("port",TRUE));
		$this->Proxy_Model->setUser($this->input->post("user",TRUE));
		$this->Proxy_Model->setPass($this->input->post("pass",TRUE));

		if($this->User_Model->HasPermission('admin')){
			$this->Proxy_Model->setIsPublic((int)$this->input->post("is_public",TRUE));
		}
		
		if($this->Proxy_Model->save()){
			display_json(array(
				'status' => 'success',
				'message' => l("The proxy has been deleted successfully")
			));
			exit;
		}

		display_json(array(
			'status' => 'error',
			'message' => l("Failed to delete the record")
		));
		exit;
	}

	public function disable($status = 0){
		$this->User_Model->setId($this->currentUser['user_id']);
		$this->User_Model->UpdateOptions(array("use_proxy"=>(int)$status));
		$s = $this->User_Model->options();
		display_json(array(
			'status' => 'ok',
			'option_status' => $s->row('use_proxy')
		));
	}

}
