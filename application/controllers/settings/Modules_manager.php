<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * @extends CI_Controller
 */
class Modules_Manager extends CI_Controller {

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

		$this->currentUser = $this->User_Model->currentuser();

		// If the user account has expired show expiry page
		if($this->currentUser['expired'] == 1){
			redirect('account_expiry');
			exit();
		}

		// User must be an admin to access this area
		if(!$this->User_Model->HasPermission('admin')){
			redirect("errors/404");
			exit();
		}

		$this->load->model('Settings_Model');
		$this->load->model('FbAccount_Model');

		$this->settings = $this->Settings_Model->get();
		$this->twig->addGlobal('app_settings', $this->settings);
		
		$this->config->set_item('language', $this->currentUser['lang']);

		$this->lang->load(array("general"));

		$this->twig->addGlobal('fbaccountDetails', $this->FbAccount_Model->getFbAccountById($this->FbAccount_Model->UserDefaultFbAccount()));
		$this->twig->addGlobal('fbaccount', $this->FbAccount_Model);
		$this->twig->addGlobal('user', $this->User_Model);
		$this->twig->addGlobal('userData', $this->currentUser);

		// Set User Timezone
		date_default_timezone_set($this->currentUser['timezone']);

		// Set Date format
		$this->twig->addGlobal('date_format', $this->settings['date_format']);
		$this->load->helper('general_helper');
		$this->twig->addGlobal('date_format_js', php_date_to_js($this->settings['date_format']));
	}

	public function index() {
		$twigData = array();
		$this->twig->display('settings/modules_manager',$twigData);
	}

	public function available_modules(){

		$this->load->helper('file');
		$this->load->driver('cache', array('adapter' => 'file', 'backup' => 'file','key_prefix' => 'kp_'));

		if (!$res=$this->cache->get('available_modules')){
			$this->load->library('Curl');
			$json = $this->curl->get("http://gounane.com/manager/modules/kingposter");
			$res = json_decode($json,TRUE);

			if(json_last_error() != JSON_ERROR_NONE){
				display_json(array("status"=>"fail","message"=>"Failed connect to the server, please try again"));
			}	
			if(!isset($res["status"]) || $res["status"] != "ok"){
				display_json(array("status"=>"fail","message"=>"Failed connect to the server, please try again"));
			}
	        $this->cache->save('available_modules', $json, 604800);
	        $res = $json;
		}

		$modulesJson = json_decode($res,TRUE);

		$modulesList = (array)$modulesJson['modules'];

		$kpModules = array();
		$modules = APPPATH.DIRECTORY_SEPARATOR.MODULES_LOCATION;
		foreach (new DirectoryIterator($modules) as $fileInfo) {
			if($fileInfo->isDot() || !$fileInfo->isDir()) continue;
			$module = $modules.DIRECTORY_SEPARATOR.$fileInfo->getFilename().DIRECTORY_SEPARATOR."index.php";
			if(file_exists($module)){
				require_once $module;
			}
		}

		$allModules = array_merge($modulesList,$kpModules);
		
		foreach ($modulesList as $k => $k) {

			if(!isset($allModules[$k]["name"]))
				$allModules[$k]["name"] = @$modulesList[$k]["name"];

			if(!isset($allModules[$k]["title"]))
				$allModules[$k]["title"] = @$modulesList[$k]["title"];

			if(!isset($allModules[$k]["description"]))
				$allModules[$k]["description"] = @$modulesList[$k]["description"];

			if(!isset($allModules[$k]["version"]))
				$allModules[$k]["version"] = @$modulesList[$k]["version"];

			if(!isset($allModules[$k]["dev_version"]))
				$allModules[$k]["dev_version"] = @$modulesList[$k]["dev_version"];

			if(!isset($allModules[$k]["folder_name"]))
				$allModules[$k]["folder_name"] = @$modulesList[$k]["folder_name"];

			if(!isset($allModules[$k]["kp_min_version"]))
				$allModules[$k]["kp_min_version"] = @$modulesList[$k]["kp_min_version"];

			if(!isset($allModules[$k]["author"]))
				$allModules[$k]["author"] = @$modulesList[$k]["author"];
			
			if(!isset($allModules[$k]["price"]))
				$allModules[$k]["price"] = @$modulesList[$k]["price"];
				
			if(!isset($allModules[$k]["link"]))
				$allModules[$k]["link"] = @$modulesList[$k]["link"];
		}

		$installedModules = (array)$this->config->item('kp_modules');

		foreach ($kpModules as $k => $v) {
			if(isset($allModules[$k])){
				if(isset($installedModules[$k])){
					$allModules[$k]['status'] = "active";
				}else{
					$allModules[$k]['status'] = "inactive";
				}
				if(@$modulesList[$k]['dev_version'] > @$kpModules[$k]['dev_version']){
					$allModules[$k]['update'] = 1;
				}else{
					$allModules[$k]['update'] = 0;
				}
			}else{
				if(isset($allModules[$k])){
					$allModules[$k]['status'] = "Not installed";
				}
			}
		}

		display_json(array("status"=>"ok","modules" =>$allModules));
	}

	public function active()
	{

		$this->load->library('form_validation');

		$this->form_validation->set_rules('module', $this->lang->s('Module'), 'trim|required');

		if($this->form_validation->run() === false) {
			display_json(array(
				'status' => 'fail',
				'message' => $this->form_validation->error_array()
			));
			return;
		}

		$moduleTOActive = $this->input->post("module",TRUE);

		// Search for the module
		$kpModules = array();
		$modules = APPPATH.DIRECTORY_SEPARATOR.MODULES_LOCATION;
		foreach (new DirectoryIterator($modules) as $fileInfo) {
			if($fileInfo->isDot() || !$fileInfo->isDir()) continue;
			$module = $modules.DIRECTORY_SEPARATOR.$fileInfo->getFilename().DIRECTORY_SEPARATOR."index.php";
			if(file_exists($module)){
				require_once $module;
			}
		}
		
		if(!isset($kpModules[$moduleTOActive])){
			display_json(array("status"=>"fail","message"=> $moduleTOActive." module Not found"));
			return;
		}

		if(isset($kpModules[$moduleTOActive]['kp_min_version']) && $kpModules[$moduleTOActive]['kp_min_version'] > APP_VERSION_DEV){
			display_json(array("status"=>"fail","message"=> $kpModules[$moduleTOActive]['title']." module require Kingposter version >= ".$kpModules[$moduleTOActive]['kp_min_version']));
			return;
		}

		$moduleFile = APPPATH.'config'.DIRECTORY_SEPARATOR.'kp_modules.php';
		$installedModules = (array)$this->config->item('kp_modules');

		// Add module is not exists
		if(isset($installedModules[$moduleTOActive])){
			display_json(array(
				"status"=>"ok",
				"message"=> $kpModules[$moduleTOActive]['title']." module already activated",
				"m_status"=> "active"
			));
			return;
		}

		if(!isset($kpModules[$moduleTOActive]['folder_name'])){
			display_json(array(
				"status"=>"fail",
				"message"=> "Module folder name is missing",
				"m_status"=> "disabled"
			));
			return;
		}

		$installFile = APPPATH.MODULES_LOCATION.DIRECTORY_SEPARATOR.$kpModules[$moduleTOActive]['folder_name'].DIRECTORY_SEPARATOR."install.php";

		if(file_exists($installFile)){
			require_once $installFile;
		}

		$installedModules[$moduleTOActive] = array("folder_name"=>$kpModules[$moduleTOActive]['folder_name']);

		$fp = fopen($moduleFile, 'a+');
		flock($fp, LOCK_EX);
		ftruncate($fp, 0);
		fseek($fp, 0);
		$kpmfc = "<?php \n";

		foreach ($installedModules as $k => $v) {
			$kpmfc .= "\$config['kp_modules']['".$k."'] = array(\n";
			$kpmfc .= "'folder_name'=>'".@$installedModules[$k]['folder_name']."',\n";
			$kpmfc .= ");\n";
		}

		$kpmfc .= "\r\n?>".PHP_EOL;

		fwrite($fp, $kpmfc);
		flock($fp, LOCK_UN);
		fclose($fp);
			
		// Reset session
		$user = $this->User_Model->get_user((int)$this->currentUser['user_id']);
		$this->User_Model->setUserRole($user);

		display_json(array(
			"status"=>"ok",
			"message"=> $kpModules[$moduleTOActive]['title']." module has been activated ".implode((array)@$moduleErrors, ","),
			"m_status"=> "active"
		));

	}

	public function disable()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('module', $this->lang->s('Module'), 'trim|required');

		if($this->form_validation->run() === false) {
			display_json(array(
				'status' => 'fail',
				'message' => $this->form_validation->error_array()
			));
			return;
		}

		$moduleToDisable = $this->input->post("module",TRUE);

		$moduleFile = APPPATH.'config'.DIRECTORY_SEPARATOR.'kp_modules.php';
		$installedModules = (array)$this->config->item('kp_modules');

		// Remove module is not exists
		if(!isset($installedModules[$moduleToDisable])){
			display_json(array(
				"status"=>"ok",
				"message"=> str_replace("_", " ", $moduleToDisable)." module not activated",
				"m_status"=> "active"
			));
			return;
		}

		$moduleTitle = $installedModules[$moduleToDisable];
		unset($installedModules[$moduleToDisable]);

		$fp = fopen($moduleFile, 'a+');
		flock($fp, LOCK_EX);
		ftruncate($fp, 0);
		fseek($fp, 0);
		$kpmfc = "<?php \n";

		if(count($installedModules) == 0){
			$kpmfc .= "\$config['kp_modules'] = array();\n";
		}else{
			foreach ($installedModules as $k => $v) {
				$kpmfc .= "\$config['kp_modules']['".$k."'] = array(\n";
				$kpmfc .= "'folder_name'=>'".@$installedModules[$k]['folder_name']."',\n";
				$kpmfc .= ");\n";	
			}
		}

		$kpmfc .= "\r\n?>".PHP_EOL;
		fwrite($fp, $kpmfc);
		flock($fp, LOCK_UN);
		fclose($fp);

		display_json(array(
			"status"=>"ok",
			"message"=> str_replace("_", " ", $moduleToDisable)." module has been disabled",
			"m_status"=> "disabled",
		));
	}

	public function uploadModule(){

		if(empty($_FILES['module']['name'])){
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
		
		// upload the module archive
		$uploadTmpFolder = APPPATH.MODULES_LOCATION.DIRECTORY_SEPARATOR."tmp";

		// Upload attatchment 
		$config['upload_path']          = $uploadTmpFolder;
        $config['allowed_types']        = 'zip';
        $config['max_size']             = 10000;
        $config['file_name']             = md5(uniqid());

        $this->load->library('upload', $config);
        $this->load->helper('rrmdir_helper');

        // create the tmp folder if not exists
        if (is_dir($uploadTmpFolder)) {
	    	// Clear the tmp folder
			$dirList = glob($uploadTmpFolder.'*', GLOB_BRACE);
			foreach ($dirList as $file){if (is_dir($file)) {rrmdir($file);}else{unlink($file);}}
	    }

	    if (!is_dir($uploadTmpFolder)){mkdir($uploadTmpFolder, 0755);}

        if (!$this->upload->do_upload('module')){
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

		$moduleFolder = null;

		foreach (new DirectoryIterator($uploadTmpFolder) as $fileInfo) {
			if($fileInfo->isDot() || !$fileInfo->isDir()) continue;
			$index = $uploadTmpFolder."/".$fileInfo->getFilename()."/index.php";
			$install = $uploadTmpFolder."/".$fileInfo->getFilename()."/install.php";
			if(file_exists($index) && file_exists($install)){
				$moduleFolder = $fileInfo->getFilename(); break;
			}
		}
		

		if($moduleFolder == null){
			display_json(array(
				'status' => 'fail',
				'message' => l("No module found on the uploaded archive!")
			));
			return;
		}

		// move the module folder
		$sourceModuleFolder = $uploadTmpFolder.DIRECTORY_SEPARATOR.$moduleFolder;
		$distModuleFolder = APPPATH.MODULES_LOCATION.DIRECTORY_SEPARATOR.$moduleFolder;

		xcopy($sourceModuleFolder,$distModuleFolder,0755);

		// Clear the tmp folder
		$dirList = glob($uploadTmpFolder.'*', GLOB_BRACE);
		foreach ($dirList as $file){if (is_dir($file)) {rrmdir($file);}else{unlink($file);}}
		
		// Clear the cache folder 
		$keepFiles = array("index.html","phpsessions");
		$cachePath = APPPATH . "cache/";
		$dirList = glob($cachePath.'*', GLOB_BRACE);

		$this->load->helper('rrmdir_helper');
		foreach ($dirList as $file) {
		    if(!in_array(pathinfo($file)['basename'], $keepFiles)){
		        if (is_dir($file)) {
		            rrmdir($file);
		        } else {
		            unlink($file);
		        }
		    }
		}

		$modules = APPPATH.DIRECTORY_SEPARATOR.MODULES_LOCATION;
		foreach (new DirectoryIterator($modules) as $fileInfo) {
			if($fileInfo->isDot() || !$fileInfo->isDir()) continue;
			$module = $modules.DIRECTORY_SEPARATOR.$fileInfo->getFilename().DIRECTORY_SEPARATOR."update.php";
			if(file_exists($module)){
				require_once $module;
				unlink($module);
			}
		}

		display_json(array(
			'status' => 'ok',
			'message' => l("Module has been uploaded successfully")
		));
		return;
	}
}
?>