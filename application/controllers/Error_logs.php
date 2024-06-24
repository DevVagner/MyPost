<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error_logs extends CI_Controller {

	private $settings;
	private $currentUser;
	private $userOptions;

	public function __construct() {	
		parent::__construct();
		$this->load->model('User_Model');

		// User ust be logged in to access this area
		if(!$this->User_Model->isLoggedIn()){
			redirect('/login');exit();
		}

		// User must be an admin to access this area
		if(!$this->User_Model->HasPermission('admin')){
			show_404();exit();
		}

		$this->load->model('Settings_Model');
		$this->settings = $this->Settings_Model->get();
		$this->currentUser = $this->User_Model->currentUser();
		$this->config->set_item('language', $this->currentUser['lang']);
		$this->lang->load(array("general"));

		$this->load->library('twig');
		$this->twig->addGlobal('app_settings', $this->settings);
		$this->twig->addGlobal('user', $this->User_Model);
		$this->twig->addGlobal('userData', $this->currentUser);
		
		// Set Date format
		$this->twig->addGlobal('date_format', $this->settings['date_format']);
		$this->load->helper('general_helper');
		$this->twig->addGlobal('date_format_js', php_date_to_js($this->settings['date_format']));

	}
	
	public function index() {
		$twigData = array();

		// Get all logs files
		$logsFolder = APPPATH . "logs/";
		$dirList = glob($logsFolder.'*', GLOB_BRACE);
		$logs = array();
		foreach ($dirList as $file) {
			if(strpos(basename($file),".php")){
				$logs[] = basename($file, ".php");
			}
		}

		$logs = array_reverse($logs);

		$fileContent = "";

		if($this->input->get("logfile",TRUE)){
			if(file_exists($logsFolder.$this->input->get("logfile",TRUE).".php")){
				$fileContent = file_get_contents($logsFolder.$this->input->get("logfile",TRUE).".php");
			}
		}else{
			if(isset($logs[0]) && file_exists($logsFolder.$logs[0].".php")){
				$fileContent = file_get_contents($logsFolder.$logs[0].".php");
			}
		}

		$twigData['logs'] = $logs;
		$twigData['fileContent'] = trim(str_replace("<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>","",$fileContent));

		$this->twig->display('error_logs',$twigData);
	}
}
