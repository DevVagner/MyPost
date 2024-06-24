<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 * @extends CI_Controller
 */
class Update extends CI_Controller {

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

		// User must be an admin to access this area
		if(!$this->User_Model->HasPermission('admin')){
			show_404();
			exit();
		}

		$this->currentUser = $this->User_Model->currentuser();

		$this->load->model('Settings_Model');
		$this->load->model('FbAccount_Model');

		$this->settings = $this->Settings_Model->get();
		$this->twig->addGlobal('app_settings', $this->settings);
		
		$this->config->set_item('language', $this->currentUser['lang']);
		$this->lang->load(array("general"));
		
		$this->twig->addGlobal('fbaccountDetails', $this->FbAccount_Model->getFbAccountById($this->FbAccount_Model->UserDefaultFbAccount()));
		$this->twig->addGlobal('fbaccount', $this->FbAccount_Model);
		$this->twig->addGlobal('user', $this->User_Model);

	}

	public function index()
	{
		$twigData = array();
		$this->twig->display('settings/update',$twigData);	
	}

	public function uploadUpdate(){

		
		if(empty($_FILES['update']['name'])){
			display_json(array(
				'status' => 'fail',
				'message' => "No file submitted"
			));
			return;
		}

		if(!class_exists('ZipArchive')){
			display_json(array(
				'status' => 'fail',
				'message' => "The ZIP extension is not enabled/installed on the server, Please enable/install the ZIP extension on the server and try again"
			));
			return;
		}
		
		// upload the update archive
		$uploadTmpFolder = APPPATH."cache".DIRECTORY_SEPARATOR."update_tmp/";

		// Upload attatchment 
		$config['upload_path']          = $uploadTmpFolder;
        $config['allowed_types']        = 'zip';
        $config['max_size']             = 50000;
        $config['file_name']             = md5(uniqid());

        $this->load->library('upload', $config);
        $this->load->helper('rrmdir_helper');

        // create the tmp folder if not exists
        if (is_dir($uploadTmpFolder)) {
	    	// Clear the tmp folder
			$dirList = glob($uploadTmpFolder.'*', GLOB_BRACE);
			foreach ($dirList as $file){if (is_dir($file)) {rrmdir($file);}else{unlink($file);}}
	    }

	    if (!is_dir($uploadTmpFolder)){
	    	mkdir($uploadTmpFolder, 0777);
	    }

        if (!$this->upload->do_upload('update')){
            display_json(array(
				'status' => 'fail',
				'message' => $this->upload->display_errors()
			));
			return;
        }
	    
		$zip = new ZipArchive;
		$zipFile = $uploadTmpFolder.DIRECTORY_SEPARATOR.@$this->upload->data()['file_name'];

		if ($zip->open($zipFile) === TRUE) {
		    $zip->extractTo($uploadTmpFolder);
		    $zip->close();
		} else {
		    display_json(array(
				'status' => 'fail',
				'message' => l("Unzip archive failed")
			));
			return;
		}

		// Delete the update archive
		unlink($zipFile);

		$systemFolder = $uploadTmpFolder."system/";
		$applicationFolder = $uploadTmpFolder."application/";
		$configFolder = $uploadTmpFolder."application/config/";
		$controllersFolder = $uploadTmpFolder."application/controllers/";
		$viewsFolder = $uploadTmpFolder."application/views/";
		$indexFile = $uploadTmpFolder."index.php";

		if(
			!is_dir($systemFolder) ||
			!is_dir($applicationFolder) ||
			!is_dir($controllersFolder) ||
			!is_dir($viewsFolder) ||
			!is_file($indexFile)
		){
			// Clear the tmp folder
			$dirList = glob($uploadTmpFolder.'*', GLOB_BRACE);
			foreach ($dirList as $file){if (is_dir($file)) {rrmdir($file);}else{unlink($file);}}

			display_json(array(
				'status' => 'fail',
				'message' => l("No update found inside the archive, Please check the archive and try again!")
			));
			return;
		}

		// move the update folder
		$updateFiles = scandir($uploadTmpFolder);
		foreach ($updateFiles as $file) {
		  if (in_array($file, array(".",".."))) continue;
		  xcopy($uploadTmpFolder.$file, FCPATH.$file, 0777);
		}

		// Clear the tmp folder
		$dirList = glob($uploadTmpFolder.'*', GLOB_BRACE);
		foreach ($dirList as $file){if (is_dir($file)) {rrmdir($file);}else{unlink($file);}}

		display_json(array(
			'status' => 'ok',
			'message' => l("Kingposter has been uploaded successfully")
		));
		return;
	}
}
