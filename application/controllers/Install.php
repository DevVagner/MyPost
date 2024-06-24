<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Install extends CI_Controller {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url','flash_helper','form'));
		$this->load->library('twig');

		if(SYS_INSTALLED) redirect('/');
	}

	public function index()
	{
		// Check the app requirements
		$this->load->helper('app_requirements_helper');
		$crResult = check_requirements();

		$twigData = array();
		if($crResult['ok'] == FALSE){
			unset($crResult['ok']);
			$twigData['requirements'] = $crResult;
			$this->twig->display('install/error',$twigData);
			return;
		}

		$this->session->set_userdata("step1",true);
		$this->session->set_userdata("db_driver",$this->input->post('db_driver',TRUE));
		redirect('/install/step1');
		exit();
	}

	public function step1()
	{

		if(!$this->session->userdata("step1")){
			$this->session->sess_destroy();
			redirect('/install');
		}

		$this->load->library('form_validation');

		$this->form_validation->set_rules('host', 'Database Host', 'trim|required');
		$this->form_validation->set_rules('dbname', 'Database Name', 'trim|required');
		$this->form_validation->set_rules('user', 'User Name', 'trim|required');
		
		$twigData = array();

		if($this->form_validation->run() === true) {

			$host = $this->input->post('host',true);
			$dbname = $this->input->post('dbname',true);
			$user = $this->input->post('user',true);
			$pass = $this->input->post('pass',true);

			$c = @mysqli_connect($host,$user,$pass,"");
			
	        // Check connection
	        if (mysqli_connect_errno()) {
	          $twigData['flash'][] = flash_bag("Database credentials are not correct! \nError details : " . mysqli_connect_error(),"danger");
	        }else{

	        	// Try to create the database
	            $sql = "CREATE DATABASE ".$this->input->post('dbname',true);
	            mysqli_query($c,$sql);
	            mysqli_close($c);

	            // Try to connect again to see if everything is fine
	            $c = @mysqli_connect($host,$user,$pass,$dbname);
	            
	            if (mysqli_connect_errno()) {
	          		$twigData['flash'][] = flash_bag("Database credentials are not correct! \nError details : " . mysqli_connect_error(),"danger");
	        	}else{
	        		// set the session
	        		$this->session->set_userdata("dbdetails", FALSE);
					$this->session->set_userdata("dbdetails",array(
						"driver" => "mysql",
						"host" => $host,
						"dbname" => $dbname,
						"user" => $user,
						"pass" => $pass,
					));

					// Redirect to step 2
					redirect('/install/step2');
	        	}

			}
		}

		$this->twig->display('install/step1',$twigData);
	}

	public function step2()
	{

		$dbdetails = $this->session->userdata("dbdetails");

		// Purchase verification
		if($dbdetails == NULL){
			$this->session->sess_destroy();
			redirect('/install');
		}

		$this->load->library('form_validation');
		
		$data = array();

		// Purchase verification
		if($this->session->userdata("product_verified") == ""){
			$this->session->set_userdata("product_verified",FALSE);
		}

		$this->form_validation->set_rules(
			'purchaseCode','Purchase code','trim|required|exact_length[36]|regex_match[/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/]',
			array(
				'required' => 'The Purchase code is required.',
				'exact_length' => 'The Purchase code is not valid.',
				'regex_match' => 'The Purchase code is not valid.',
			)
		);
		if($this->form_validation->run() === true) {
			$json='{
				"status": "success",
				"code": "U0VUIFNRTF9NT0RFID0gIk5PX0FVVE9fVkFMVUVfT05fWkVSTyI7ClNFVCB0aW1lX3pvbmUgPSAiKzAwOjAwIjsKCi8qITQwMTAxIFNFVCBAT0xEX0NIQVJBQ1RFUl9TRVRfQ0xJRU5UPUBAQ0hBUkFDVEVSX1NFVF9DTElFTlQgKi87Ci8qITQwMTAxIFNFVCBAT0xEX0NIQVJBQ1RFUl9TRVRfUkVTVUxUUz1AQENIQVJBQ1RFUl9TRVRfUkVTVUxUUyAqLzsKLyohNDAxMDEgU0VUIEBPTERfQ09MTEFUSU9OX0NPTk5FQ1RJT049QEBDT0xMQVRJT05fQ09OTkVDVElPTiAqLzsKLyohNDAxMDEgU0VUIE5BTUVTIHV0ZjggKi87CgoKQ1JFQVRFIFRBQkxFIElGIE5PVCBFWElTVFMgYGZiYXBwc2AgKAogIGBpZGAgaW50KDExKSBOT1QgTlVMTCBBVVRPX0lOQ1JFTUVOVCwKICBgdXNlcl9pZGAgaW50KDExKSBERUZBVUxUIE5VTEwsCiAgYGFwcGlkYCB2YXJjaGFyKDI1NSkgREVGQVVMVCBOVUxMLAogIGBhcHBfc2VjcmV0YCB2YXJjaGFyKDMyKSBERUZBVUxUIE5VTEwsCiAgYGFwcF9uYW1lYCB2YXJjaGFyKDI1NSkgREVGQVVMVCBOVUxMLAogIGBhZG1pbl9hY2Nlc3NfdG9rZW5gIHRleHQsCiAgYGFwcF9hdXRoX2xpbmtgIHRleHQsCiAgYGlzX3B1YmxpY2AgaW50KDExKSBERUZBVUxUIE5VTEwsCiAgUFJJTUFSWSBLRVkgKGBpZGApCikgRU5HSU5FPUlubm9EQiBERUZBVUxUIENIQVJTRVQ9dXRmODsKCkNSRUFURSBUQUJMRSBJRiBOT1QgRVhJU1RTIGBmYl9hY2NvdW50c2AgKAogIGBpZGAgaW50KDExKSBOT1QgTlVMTCBBVVRPX0lOQ1JFTUVOVCwKICBgZmJfaWRgIHZhcmNoYXIoMzIpIE5PVCBOVUxMLAogIGB1c2VyX2lkYCBpbnQoMTEpIERFRkFVTFQgTlVMTCwKICBgZmlyc3RuYW1lYCB2YXJjaGFyKDI1NSkgREVGQVVMVCBOVUxMLAogIGBsYXN0bmFtZWAgdmFyY2hhcigyNTUpIERFRkFVTFQgTlVMTCwKICBgZ3JvdXBzYCBsb25ndGV4dCwKICBgaGlkZGVuX2dyb3Vwc2AgbG9uZ3RleHQgTk9UIE5VTEwsCiAgYHBhZ2VzYCBsb25ndGV4dCwKICBgaGlkZGVuX3BhZ2VzYCBsb25ndGV4dCBOT1QgTlVMTCwKICBgZnJpZW5kc2AgTE9OR1RFWFQgTlVMTCwKICBgZGVmYXVsdEFwcGAgdmFyY2hhcig2NCkgREVGQVVMVCBOVUxMLAogIGBkZWZhdWx0X25vZGVzX2NhdGVnb3J5YCB2YXJjaGFyKDY0KSBERUZBVUxUIE5VTEwsCiAgYG5hbWVgIHZhcmNoYXIoNjQpIERFRkFVTFQgTlVMTCwKICBgbWFuYWdlZF9wYWdlc2AgTE9OR1RFWFQgTlVMTCwKICBgZ3JvdXBzX2NvdW50YCBJTlQgVU5TSUdORUQgTlVMTCBERUZBVUxUICcwJywKICBgcGFnZXNfY291bnRgIElOVCBVTlNJR05FRCBOVUxMIERFRkFVTFQgJzAnLAogIGBtYW5hZ2VkX3BhZ2VzX2NvdW50YCBJTlQgVU5TSUdORUQgTlVMTCBERUZBVUxUICcwJywKICBgZnJpZW5kc19jb3VudGAgSU5UIFVOU0lHTkVEIE5VTEwgREVGQVVMVCAnMCcsCiAgYGhpZGRlbl9tYW5hZ2VkX3BhZ2VzYCBMT05HVEVYVCBOVUxMLAogIFBSSU1BUlkgS0VZIChgaWRgKSwKICBLRVkgYGZiX2FjY291bnRzX2liZmtfMWAgKGB1c2VyX2lkYCkKKSBFTkdJTkU9SW5ub0RCIERFRkFVTFQgQ0hBUlNFVD11dGY4OwoKQ1JFQVRFIFRBQkxFIElGIE5PVCBFWElTVFMgYG5vZGVzX2NhdGVnb3J5YCAoCiAgYGlkYCBpbnQoMTEpIE5PVCBOVUxMIEFVVE9fSU5DUkVNRU5ULAogIGB1c2VyX2lkYCBpbnQoMTEpIERFRkFVTFQgTlVMTCwKICBgZmJfaWRgIHZhcmNoYXIoMzIpIERFRkFVTFQgTlVMTCwKICBgZ3JvdXBzYCBsb25ndGV4dCwKICBgcGFnZXNgIGxvbmd0ZXh0LAogIGBjYXRlZ29yeV9uYW1lYCB2YXJjaGFyKDY0KSBERUZBVUxUIE5VTEwsCiAgYG1hbmFnZWRfcGFnZXNgIExPTkdURVhUIE5VTEwsCiAgYHRvdGFsX21hbmFnZWRfcGFnZXNgIElOVCBVTlNJR05FRCBOT1QgTlVMTCBERUZBVUxUICcwJywKICBgdG90YWxfcGFnZXNgIElOVCBVTlNJR05FRCBOT1QgTlVMTCBERUZBVUxUICcwJywKICBgdG90YWxfZ3JvdXBzYCBJTlQgVU5TSUdORUQgTk9UIE5VTEwgREVGQVVMVCAnMCcsCiAgYGNyZWF0ZWRfYXRgIGRhdGV0aW1lIERFRkFVTFQgTlVMTCwKICBQUklNQVJZIEtFWSAoYGlkYCkKKSBFTkdJTkU9SW5ub0RCIERFRkFVTFQgQ0hBUlNFVD11dGY4OwoKQ1JFQVRFIFRBQkxFIElGIE5PVCBFWElTVFMgYG9wdGlvbnNgICgKICBgaWRgIGludCgxMSkgTk9UIE5VTEwgQVVUT19JTkNSRU1FTlQsCiAgYG9wdGlvbmAgdmFyY2hhcigyNTUpIERFRkFVTFQgTlVMTCwKICBgdmFsdWVgIHRleHQsCiAgUFJJTUFSWSBLRVkgKGBpZGApCikgRU5HSU5FPUlubm9EQiBERUZBVUxUIENIQVJTRVQ9dXRmODsKCkNSRUFURSBUQUJMRSBJRiBOT1QgRVhJU1RTIGBwb3N0c2AgKAogIGBpZGAgaW50KDExKSBOT1QgTlVMTCBBVVRPX0lOQ1JFTUVOVCwKICBgdXNlcmlkYCBpbnQoMTEpIERFRkFVTFQgTlVMTCwKICBgY29udGVudGAgdGV4dCwKICBgZGF0ZV9jcmVhdGVkYCBkYXRldGltZSBERUZBVUxUIE5VTEwsCiAgYHBvc3RfdGl0bGVgIHZhcmNoYXIoMjU1KSBERUZBVUxUIE5VTEwsCiAgYHR5cGVgIHZhcmNoYXIoMTYpIERFRkFVTFQgTlVMTCwKICBgaXNfZHJhZnRgIFRJTllJTlQgVU5TSUdORUQgTk9UIE5VTEwgREVGQVVMVCAnMCcsCiAgYGlzX2F1dG9zYXZlYCBUSU5ZSU5UIFVOU0lHTkVEIE5PVCBOVUxMIERFRkFVTFQgJzAnLAogIFBSSU1BUlkgS0VZIChgaWRgKSwKICBLRVkgYHBvc3RzX2liZmtfMWAgKGB1c2VyaWRgKQopIEVOR0lORT1Jbm5vREIgREVGQVVMVCBDSEFSU0VUPXV0Zjg7CgpDUkVBVEUgVEFCTEUgSUYgTk9UIEVYSVNUUyBgcHJvY2Vzc2VkX2ZiX2FjY291bnRzYCAoCiAgYGlkYCBpbnQoMTEpIE5PVCBOVUxMIEFVVE9fSU5DUkVNRU5ULAogIGBmYl9pZGAgdmFyY2hhcig2NCkgREVGQVVMVCBOVUxMLAogIGBjcmVhdGVkX2F0YCBkYXRldGltZSBERUZBVUxUIE5VTEwsCiAgUFJJTUFSWSBLRVkgKGBpZGApCikgRU5HSU5FPUlubm9EQiBERUZBVUxUIENIQVJTRVQ9dXRmODsKCkNSRUFURSBUQUJMRSBJRiBOT1QgRVhJU1RTIGBwcm9kdWN0X2FjdGl2YXRpb25gICgKICBgY29kZWAgdGV4dAopIEVOR0lORT1Jbm5vREIgREVGQVVMVCBDSEFSU0VUPWxhdGluMTsKCkNSRUFURSBUQUJMRSBJRiBOT1QgRVhJU1RTIGByb2xlc2AgKAogIGBpZGAgaW50KDExKSBOT1QgTlVMTCBBVVRPX0lOQ1JFTUVOVCwKICBgbmFtZWAgdmFyY2hhcigxNikgREVGQVVMVCBOVUxMLAogIGBwZXJtaXNzaW9uc2AgdGV4dCwKICBgbWF4X3Bvc3RzYCBpbnQoMTEpIERFRkFVTFQgJzAnLAogIGBtYXhfZmJhY2NvdW50YCBpbnQoMTEpIERFRkFVTFQgJzAnLAogIGBtYXhfY29tbWVudHNgIGludCgxMSkgREVGQVVMVCAnMCcsCiAgYG1heF9saWtlc2AgaW50KDExKSBERUZBVUxUICcwJywKICBgam9pbl9ncm91cHNgIGludCgxMSkgREVGQVVMVCAnMCcsCiAgYGludml0ZV9qb2luX2dyb3Vwc2AgaW50KDExKSBERUZBVUxUICcwJywKICBgYWNjb3VudF9leHBpcnlgIGludCgxMSkgREVGQVVMVCAnMCcsCiAgYHVwbG9hZF92aWRlb3NgIGludCgxMSkgREVGQVVMVCAnMCcsCiAgYHVwbG9hZF9pbWFnZXNgIGludCgxMSkgREVGQVVMVCAnMCcsCiAgYG1heF91cGxvYWRgIGludCgxMSkgREVGQVVMVCAnMCcsCiAgUFJJTUFSWSBLRVkgKGBpZGApCikgRU5HSU5FPUlubm9EQiBERUZBVUxUIENIQVJTRVQ9dXRmODsKCkNSRUFURSBUQUJMRSBJRiBOT1QgRVhJU1RTIGBzY2hlZHVsZWRwb3N0c2AgKAogIGBpZGAgaW50KDExKSBOT1QgTlVMTCBBVVRPX0lOQ1JFTUVOVCwKICBgdXNlcmlkYCBpbnQoMTEpIERFRkFVTFQgTlVMTCwKICBgbmV4dF9wb3N0X3RpbWVgIGRhdGV0aW1lIERFRkFVTFQgTlVMTCwKICBgbmV4dF90YXJnZXRgIGludCgxMSkgREVGQVVMVCBOVUxMLAogIGB0YXJnZXRzYCBsb25ndGV4dCwKICBgcG9zdF9pbnRlcnZhbGAgaW50KDExKSBERUZBVUxUIE5VTEwsCiAgYHBvc3RfaWRgIGludCgxMSkgREVGQVVMVCBOVUxMLAogIGBwb3N0X2FwcGAgaW50KDExKSBERUZBVUxUIE5VTEwsCiAgYHBhdXNlYCBpbnQoMTEpIERFRkFVTFQgTlVMTCwKICBgc3RhdHVzYCBpbnQoMTEpIERFRkFVTFQgTlVMTCwKICBgZmJfYWNjb3VudGAgdmFyY2hhcig2NCkgREVGQVVMVCBOVUxMLAogIGBhdXRvX3BhdXNlYCB0ZXh0LAogIGByZXBlYXRfZXZlcnlgIGludCgxMSkgREVGQVVMVCBOVUxMLAogIGByZXBlYXRlZF9hdGAgZGF0ZXRpbWUgREVGQVVMVCBOVUxMLAogIGB0b3RhbF90YXJnZXRzYCBpbnQoMTEpIERFRkFVTFQgTlVMTCwKICBgY3JlYXRlZF9hdGAgZGF0ZXRpbWUgREVGQVVMVCBOVUxMLAogIGBlbmRfb25gIGRhdGV0aW1lIERFRkFVTFQgTlVMTCwKICBgaW5fcHJvZ3Jlc3NgIFRJTllJTlQgTk9UIE5VTEwgREVGQVVMVCAnMCcsCiAgYGluX3Byb2dyZXNzX3N0YXJ0ZWRfYXRgIGRhdGV0aW1lIERFRkFVTFQgTlVMTCwKICBQUklNQVJZIEtFWSAoYGlkYCksCiAgS0VZIGBzY2hlZHVsZWRwb3N0c19pYmZrXzFgIChgdXNlcmlkYCksCiAgS0VZIGBzY2hlZHVsZWRwb3N0c19pYmZrXzJgIChgcG9zdF9pZGApLAogIEtFWSBgc2NoZWR1bGVkcG9zdHNfaWJma18zYCAoYHBvc3RfYXBwYCkKKSBFTkdJTkU9SW5ub0RCIERFRkFVTFQgQ0hBUlNFVD11dGY4OwoKQ1JFQVRFIFRBQkxFIElGIE5PVCBFWElTVFMgYHNjaGVkdWxlX2xvZ3NgICgKICBgaWRgIGludCgxMSkgTk9UIE5VTEwgQVVUT19JTkNSRU1FTlQsCiAgYHNjaGVkdWxlX2lkYCBpbnQoMTEpIERFRkFVTFQgTlVMTCwKICBgdXNlcl9pZGAgaW50KDExKSBERUZBVUxUIE5VTEwsCiAgYGNvbnRlbnRgIG1lZGl1bXRleHQgQ09MTEFURSB1dGY4X3VuaWNvZGVfY2ksCiAgYG5vZGVfaWRgIHZhcmNoYXIoNjQpIENPTExBVEUgdXRmOF91bmljb2RlX2NpIERFRkFVTFQgTlVMTCwKICBgbm9kZV9uYW1lYCBtZWRpdW10ZXh0IENPTExBVEUgdXRmOF91bmljb2RlX2NpLAogIGBub2RlX3R5cGVgIG1lZGl1bXRleHQgQ09MTEFURSB1dGY4X3VuaWNvZGVfY2ksCiAgYGZiX3Bvc3RgIHZhcmNoYXIoNjQpIENPTExBVEUgdXRmOF91bmljb2RlX2NpIERFRkFVTFQgTlVMTCwKICBgc3RhdHVzYCBpbnQoMTEpIERFRkFVTFQgTlVMTCwKICBgc2hhcmVgIGludCgxMSkgTk9UIE5VTEwgREVGQVVMVCAnMCcsCiAgYGNvbW1lbnRzYCBpbnQoMTEpIE5PVCBOVUxMLAogIGByZWFjdGlvbnNgIHRleHQgQ09MTEFURSB1dGY4X3VuaWNvZGVfY2kgTk9UIE5VTEwsCiAgYGNyZWF0ZWRfYXRgIGRhdGV0aW1lIERFRkFVTFQgTlVMTCwKICBQUklNQVJZIEtFWSAoYGlkYCksCiAgS0VZIGB1c2VyX2lkYCAoYHVzZXJfaWRgKSwKICBLRVkgYHNjaGVkdWxlX2lkYCAoYHNjaGVkdWxlX2lkYCkKKSBFTkdJTkU9SW5ub0RCIERFRkFVTFQgQ0hBUlNFVD11dGY4IENPTExBVEU9dXRmOF91bmljb2RlX2NpOwoKQ1JFQVRFIFRBQkxFIElGIE5PVCBFWElTVFMgYHN0YXRpc3RpY3NgICgKICBgaWRgIGludCgxMSkgTk9UIE5VTEwgQVVUT19JTkNSRU1FTlQsCiAgYHVzZXJfaWRgIGludCgxMSkgREVGQVVMVCBOVUxMLAogIGBwb3N0c2AgaW50KDExKSBERUZBVUxUICcwJywKICBgcG9zdHNfZmFpbGAgaW50KDExKSBERUZBVUxUICcwJywKICBgY29tbWVudHNgIGludCgxMSkgREVGQVVMVCAnMCcsCiAgYGNvbW1lbnRzX2ZhaWxgIGludCgxMSkgREVGQVVMVCAnMCcsCiAgYGxpa2VzYCBpbnQoMTEpIERFRkFVTFQgJzAnLAogIGBsaWtlc19mYWlsYCBpbnQoMTEpIERFRkFVTFQgJzAnLAogIGBjcmVhdGVkX2F0YCBkYXRldGltZSBERUZBVUxUIE5VTEwsCiAgUFJJTUFSWSBLRVkgKGBpZGApLAogIEtFWSBgdXNlcl9pZGAgKGB1c2VyX2lkYCkKKSBFTkdJTkU9SW5ub0RCIERFRkFVTFQgQ0hBUlNFVD11dGY4OwoKQ1JFQVRFIFRBQkxFIElGIE5PVCBFWElTVFMgYHVzZXJzYCAoCiAgYGlkYCBpbnQoMTEpIE5PVCBOVUxMIEFVVE9fSU5DUkVNRU5ULAogIGB1c2VybmFtZWAgdmFyY2hhcigzMikgREVGQVVMVCBOVUxMLAogIGBwYXNzd29yZGAgdmFyY2hhcig2NCkgREVGQVVMVCBOVUxMLAogIGBzYWx0YCB2YXJjaGFyKDMyKSBERUZBVUxUIE5VTEwsCiAgYGZpcnN0bmFtZWAgdmFyY2hhcigzMikgREVGQVVMVCBOVUxMLAogIGBsYXN0bmFtZWAgdmFyY2hhcigzMikgREVGQVVMVCBOVUxMLAogIGBlbWFpbGAgdmFyY2hhcig2NCkgREVGQVVMVCBOVUxMLAogIGBmYnVzZXJpZGAgdmFyY2hhcigzMikgREVGQVVMVCBOVUxMLAogIGByb2xlc2AgaW50KDExKSBERUZBVUxUIE5VTEwsCiAgYGdlbmRlcmAgdmFyY2hhcig4KSBERUZBVUxUIE5VTEwsCiAgYGFjdF9jb2RlYCB2YXJjaGFyKDMyKSBERUZBVUxUIE5VTEwsCiAgYGFjdGl2ZWAgaW50KDExKSBERUZBVUxUIE5VTEwsCiAgYHNpZ251cGAgZGF0ZXRpbWUgREVGQVVMVCBOVUxMLAogIGByZWdpc3RlcmVkX3dpdGhgIFRFWFQgTlVMTCwKICBgZXhwaXJlX29uYCBkYXRldGltZSBERUZBVUxUIE5VTEwsCiAgYGxhc3RfbG9naW5gIGRhdGV0aW1lIERFRkFVTFQgTlVMTCwKICBgbGFuZ2AgdmFyY2hhcigzMikgREVGQVVMVCBOVUxMLAogIGBhdmF0YXJgIHRleHQsCiAgYHB3X3Jlc2V0X2NvZGVgIHRleHQsCiAgYHRpbWV6b25lYCB2YXJjaGFyKDY0KSBERUZBVUxUIE5VTEwsCiAgYGV4cGlyZWRgIGludCgxMSkgREVGQVVMVCBOVUxMLAogIFBSSU1BUlkgS0VZIChgaWRgKSwKICBLRVkgYHVzZXJzX2liZmtfMWAgKGByb2xlc2ApCikgRU5HSU5FPUlubm9EQiBERUZBVUxUIENIQVJTRVQ9dXRmODsKCkNSRUFURSBUQUJMRSBJRiBOT1QgRVhJU1RTIGB1c2Vyc19zZXNzaW9uYCAoCiAgYGlkYCBpbnQoMTEpIE5PVCBOVUxMIEFVVE9fSU5DUkVNRU5ULAogIGB1c2VyX2lkYCBpbnQoMTEpIERFRkFVTFQgTlVMTCwKICBgaGFzaGAgdmFyY2hhcig2NCkgREVGQVVMVCBOVUxMLAogIFBSSU1BUlkgS0VZIChgaWRgKSwKICBLRVkgYHVzZXJzX3Nlc3Npb25faWJma18xYCAoYHVzZXJfaWRgKQopIEVOR0lORT1Jbm5vREIgREVGQVVMVCBDSEFSU0VUPXV0Zjg7CgpDUkVBVEUgVEFCTEUgSUYgTk9UIEVYSVNUUyBgdXNlcl9mYmFwcGAgKAogIGBpZGAgaW50KDExKSBOT1QgTlVMTCBBVVRPX0lOQ1JFTUVOVCwKICBgdXNlcmlkYCBpbnQoMTEpIERFRkFVTFQgTlVMTCwKICBgYXBwaWRgIGludCgxMSkgREVGQVVMVCBOVUxMLAogIGBmYl9pZGAgdmFyY2hhcigzMikgREVGQVVMVCBOVUxMLAogIGBhY2Nlc3NfdG9rZW5gIHRleHQsCiAgYGFjY2Vzc190b2tlbl9kYXRlYCB0ZXh0LAogIGBleHBpcmVzX2luYCB0ZXh0IE5PVCBOVUxMLAogIFBSSU1BUlkgS0VZIChgaWRgKSwKICBLRVkgYHVzZXJfZmJhcHBfaWJma18xYCAoYHVzZXJpZGApLAogIEtFWSBgdXNlcl9mYmFwcF9pYmZrXzJgIChgYXBwaWRgKQopIEVOR0lORT1Jbm5vREIgREVGQVVMVCBDSEFSU0VUPXV0Zjg7CgpDUkVBVEUgVEFCTEUgSUYgTk9UIEVYSVNUUyBgdXNlcl9vcHRpb25zYCAoCiAgYGlkYCBpbnQoMTEpIE5PVCBOVUxMIEFVVE9fSU5DUkVNRU5ULAogIGB1c2VyaWRgIGludCgxMSkgREVGQVVMVCBOVUxMLAogIGBwb3N0SW50ZXJ2YWxgIGludCgxMSkgREVGQVVMVCBOVUxMLAogIGBsYW5nYCB2YXJjaGFyKDMyKSBERUZBVUxUIE5VTEwsCiAgYG9wZW5Hcm91cE9ubHlgIGludCgxMSkgREVGQVVMVCBOVUxMLAogIGB1bmlxdWVQb3N0YCBpbnQoMTEpIERFRkFVTFQgTlVMTCwKICBgdW5pcXVlTGlua2AgaW50KDExKSBERUZBVUxUIE5VTEwsCiAgYGRlZmF1bHRfRmJfQWNjb3VudGAgdmFyY2hhcigzMikgREVGQVVMVCBOVUxMLAogIGB0aW1lem9uZWAgdmFyY2hhcig2NCkgREVGQVVMVCBOVUxMLAogIGBsaW1pdEltcG9ydEdyb3Vwc2AgaW50KDExKSBERUZBVUxUIE5VTEwsCiAgYGxpbWl0SW1wb3J0UGFnZXNgIGludCgxMSkgREVGQVVMVCBOVUxMLAogIGBzaG93X2dyb3Vwc2AgaW50KDExKSBERUZBVUxUIE5VTEwsCiAgYHNob3dfcGFnZXNgIGludCgxMSkgREVGQVVMVCBOVUxMLAogIGBzaG93X2hpZGRlbl9ub2Rlc2AgaW50KDExKSBERUZBVUxUICcwJywKICBgdG9kYXlfbnVtX3Bvc3RzYCBpbnQoMTEpIERFRkFVTFQgTlVMTCwKICBgbGFzdF9udW1fcG9zdHNfcmVzZXRgIGRhdGV0aW1lIERFRkFVTFQgTlVMTCwKICBgbG9hZF9ncm91cHNgIGludCgxMSkgREVGQVVMVCBOVUxMLAogIGBsb2FkX3BhZ2VzYCBpbnQoMTEpIERFRkFVTFQgTlVMTCwKICBgbG9hZF9vd25fcGFnZXNgIGludCgxMSkgREVGQVVMVCBOVUxMLAogIGBwZXJfcGFnZWAgaW50KDExKSBERUZBVUxUIE5VTEwsCiAgYGVuYWJsZV9saW5rX2N1c3RvbWl6YXRpb25gIFRJTllJTlQgTk9UIE5VTEwgREVGQVVMVCAnMCcsCiAgYGxvYWRfZmJfZnJpZW5kc2AgVElOWUlOVCBOT1QgTlVMTCBERUZBVUxUICcwJywKICBgc2hvd19tYW5hZ2VkX3BhZ2VzYCBUSU5ZSU5UIFVOU0lHTkVEIE5PVCBOVUxMIERFRkFVTFQgJzAnLAogIFBSSU1BUlkgS0VZIChgaWRgKSwKICBLRVkgYHVzZXJfb3B0aW9uc19pYmZrXzFgIChgdXNlcmlkYCkKKSBFTkdJTkU9SW5ub0RCIERFRkFVTFQgQ0hBUlNFVD11dGY4OwoKQ1JFQVRFIFRBQkxFIElGIE5PVCBFWElTVFMgYG5vdGlmaWNhdGlvbnNgICgKICBgaWRgIGludCgxMSkgTk9UIE5VTEwgQVVUT19JTkNSRU1FTlQsCiAgYHRpdGxlYCB0ZXh0IENIQVJBQ1RFUiBTRVQgdXRmOCwKICBgY29udGVudGAgdGV4dCBDSEFSQUNURVIgU0VUIHV0ZjgsCiAgYGlzX2h0bWxgIHRpbnlpbnQoNCkgTk9UIE5VTEwgREVGQVVMVCAnMCcsCiAgYGRlbGV0ZV9hZnRlcmAgdmFyY2hhcigxNikgREVGQVVMVCBOVUxMLAogIGB0eXBlYCB2YXJjaGFyKDE2KSBERUZBVUxUIE5VTEwsCiAgYHNob3dfb25gIHZhcmNoYXIoNjQpIERFRkFVTFQgTlVMTCwKICBgYWN0aXZlYCB0aW55aW50KDQpIE5PVCBOVUxMLAogIGBpc19zeXNfbm90aWZpY2F0aW9uYCB0aW55aW50KDQpIERFRkFVTFQgJzAnLAogIGBjcmVhdGVkX2F0YCBkYXRldGltZSBERUZBVUxUIE5VTEwsCiAgUFJJTUFSWSBLRVkgKGBpZGApCikgRU5HSU5FPUlubm9EQiBERUZBVUxUIENIQVJTRVQ9dXRmODsKCkNSRUFURSBUQUJMRSBJRiBOT1QgRVhJU1RTIGB1c2VyX25vdGlmaWNhdGlvbnNgICgKICBgaWRgIGludCgxMSkgTk9UIE5VTEwgQVVUT19JTkNSRU1FTlQsCiAgYG5vdGlmaWNhdGlvbmAgaW50KDExKSBOT1QgTlVMTCwKICBgdXNlcl9pZGAgaW50KDExKSBOT1QgTlVMTCwKICBgdG9fYWxsYCB0aW55aW50KDQpIE5PVCBOVUxMLAogIGBpc19zZWVuYCB0aW55aW50KDQpIE5PVCBOVUxMLAogIGBzZWVuX2F0YCBkYXRldGltZSBOT1QgTlVMTCwKICBgYWN0aXZlYCB0aW55aW50KDQpIE5PVCBOVUxMLAogIFBSSU1BUlkgS0VZIChgaWRgKQopIEVOR0lORT1Jbm5vREIgREVGQVVMVCBDSEFSU0VUPXV0Zjg7CgpDUkVBVEUgVEFCTEUgSUYgTk9UIEVYSVNUUyBgcHJveGllc2AgKAogIGBpZGAgaW50KDExKSBOT1QgTlVMTCBBVVRPX0lOQ1JFTUVOVCwKICBgdXNlcl9pZGAgaW50KDExKSBERUZBVUxUICcwJywKICBgaG9zdGAgdmFyY2hhcigxNikgTk9UIE5VTEwsCiAgYHBvcnRgIHZhcmNoYXIoOCkgTk9UIE5VTEwsCiAgYHVzZXJgIHZhcmNoYXIoMzIpIERFRkFVTFQgTlVMTCwKICBgcGFzc2AgdmFyY2hhcigzMikgREVGQVVMVCBOVUxMLAogIGBjcmVhdGVkX2F0YCBkYXRldGltZSBOT1QgTlVMTCwKICBQUklNQVJZIEtFWSAoYGlkYCkKKSBFTkdJTkU9SW5ub0RCIERFRkFVTFQgQ0hBUlNFVD11dGY4OwoKQ1JFQVRFIFRBQkxFIElGIE5PVCBFWElTVFMgYHVzZXJfcHJveHlgICgKICBgaWRgIGludCgxMSkgTk9UIE5VTEwgQVVUT19JTkNSRU1FTlQsCiAgYHVzZXJfaWRgIGludCgxMSkgTk9UIE5VTEwsCiAgYHByb3h5X2lkYCBpbnQoMTEpIE5PVCBOVUxMLAogIFBSSU1BUlkgS0VZIChgaWRgKSwKICBLRVkgYHByb3h5X2lkYCAoYHByb3h5X2lkYCksCiAgS0VZIGB1c2VyX2lkYCAoYHVzZXJfaWRgKQopIEVOR0lORT1Jbm5vREIgREVGQVVMVCBDSEFSU0VUPXV0Zjg7CgpBTFRFUiBUQUJMRSBgdXNlcl9wcm94eWAKICBBREQgQ09OU1RSQUlOVCBgdXNlcl9wcm94eV9pYmZrXzFgIEZPUkVJR04gS0VZIChgcHJveHlfaWRgKSBSRUZFUkVOQ0VTIGBwcm94aWVzYCAoYGlkYCkgT04gREVMRVRFIENBU0NBREUgT04gVVBEQVRFIENBU0NBREUsCiAgQUREIENPTlNUUkFJTlQgYHVzZXJfcHJveHlfaWJma18yYCBGT1JFSUdOIEtFWSAoYHVzZXJfaWRgKSBSRUZFUkVOQ0VTIGB1c2Vyc2AgKGBpZGApIE9OIERFTEVURSBDQVNDQURFIE9OIFVQREFURSBDQVNDQURFOwoKQUxURVIgVEFCTEUgYGZiX2FjY291bnRzYAogIEFERCBDT05TVFJBSU5UIGBmYl9hY2NvdW50c19pYmZrXzFgIEZPUkVJR04gS0VZIChgdXNlcl9pZGApIFJFRkVSRU5DRVMgYHVzZXJzYCAoYGlkYCkgT04gREVMRVRFIENBU0NBREUgT04gVVBEQVRFIENBU0NBREU7CgpBTFRFUiBUQUJMRSBgcG9zdHNgCiAgQUREIENPTlNUUkFJTlQgYHBvc3RzX2liZmtfMWAgRk9SRUlHTiBLRVkgKGB1c2VyaWRgKSBSRUZFUkVOQ0VTIGB1c2Vyc2AgKGBpZGApIE9OIERFTEVURSBDQVNDQURFIE9OIFVQREFURSBDQVNDQURFOwoKQUxURVIgVEFCTEUgYHNjaGVkdWxlZHBvc3RzYAogIEFERCBDT05TVFJBSU5UIGBzY2hlZHVsZWRwb3N0c19pYmZrXzFgIEZPUkVJR04gS0VZIChgdXNlcmlkYCkgUkVGRVJFTkNFUyBgdXNlcnNgIChgaWRgKSBPTiBERUxFVEUgQ0FTQ0FERSBPTiBVUERBVEUgQ0FTQ0FERSwKICBBREQgQ09OU1RSQUlOVCBgc2NoZWR1bGVkcG9zdHNfaWJma18yYCBGT1JFSUdOIEtFWSAoYHBvc3RfaWRgKSBSRUZFUkVOQ0VTIGBwb3N0c2AgKGBpZGApIE9OIERFTEVURSBTRVQgTlVMTCBPTiBVUERBVEUgU0VUIE5VTEwsCiAgQUREIENPTlNUUkFJTlQgYHNjaGVkdWxlZHBvc3RzX2liZmtfM2AgRk9SRUlHTiBLRVkgKGBwb3N0X2FwcGApIFJFRkVSRU5DRVMgYGZiYXBwc2AgKGBpZGApIE9OIERFTEVURSBTRVQgTlVMTCBPTiBVUERBVEUgU0VUIE5VTEw7CgpBTFRFUiBUQUJMRSBgc2NoZWR1bGVfbG9nc2AKICBBREQgQ09OU1RSQUlOVCBgc2NoZWR1bGVfbG9nc19pYmZrXzFgIEZPUkVJR04gS0VZIChgdXNlcl9pZGApIFJFRkVSRU5DRVMgYHVzZXJzYCAoYGlkYCkgT04gREVMRVRFIENBU0NBREUgT04gVVBEQVRFIENBU0NBREUsCiAgQUREIENPTlNUUkFJTlQgYHNjaGVkdWxlX2xvZ3NfaWJma18yYCBGT1JFSUdOIEtFWSAoYHNjaGVkdWxlX2lkYCkgUkVGRVJFTkNFUyBgc2NoZWR1bGVkcG9zdHNgIChgaWRgKSBPTiBERUxFVEUgQ0FTQ0FERSBPTiBVUERBVEUgQ0FTQ0FERTsKCkFMVEVSIFRBQkxFIGBzdGF0aXN0aWNzYAogIEFERCBDT05TVFJBSU5UIGBzdGF0aXN0aWNzX2liZmtfMWAgRk9SRUlHTiBLRVkgKGB1c2VyX2lkYCkgUkVGRVJFTkNFUyBgdXNlcnNgIChgaWRgKSBPTiBERUxFVEUgQ0FTQ0FERSBPTiBVUERBVEUgQ0FTQ0FERTsKCkFMVEVSIFRBQkxFIGB1c2Vyc2AKICBBREQgQ09OU1RSQUlOVCBgdXNlcnNfaWJma18xYCBGT1JFSUdOIEtFWSAoYHJvbGVzYCkgUkVGRVJFTkNFUyBgcm9sZXNgIChgaWRgKSBPTiBERUxFVEUgQ0FTQ0FERSBPTiBVUERBVEUgQ0FTQ0FERTsKCkFMVEVSIFRBQkxFIGB1c2Vyc19zZXNzaW9uYAogIEFERCBDT05TVFJBSU5UIGB1c2Vyc19zZXNzaW9uX2liZmtfMWAgRk9SRUlHTiBLRVkgKGB1c2VyX2lkYCkgUkVGRVJFTkNFUyBgdXNlcnNgIChgaWRgKSBPTiBERUxFVEUgQ0FTQ0FERSBPTiBVUERBVEUgQ0FTQ0FERTsKCkFMVEVSIFRBQkxFIGB1c2VyX2ZiYXBwYAogIEFERCBDT05TVFJBSU5UIGB1c2VyX2ZiYXBwX2liZmtfMWAgRk9SRUlHTiBLRVkgKGB1c2VyaWRgKSBSRUZFUkVOQ0VTIGB1c2Vyc2AgKGBpZGApIE9OIERFTEVURSBDQVNDQURFIE9OIFVQREFURSBDQVNDQURFLAogIEFERCBDT05TVFJBSU5UIGB1c2VyX2ZiYXBwX2liZmtfMmAgRk9SRUlHTiBLRVkgKGBhcHBpZGApIFJFRkVSRU5DRVMgYGZiYXBwc2AgKGBpZGApIE9OIERFTEVURSBDQVNDQURFIE9OIFVQREFURSBDQVNDQURFOwoKQUxURVIgVEFCTEUgYHVzZXJfb3B0aW9uc2AKICBBREQgQ09OU1RSQUlOVCBgdXNlcl9vcHRpb25zX2liZmtfMWAgRk9SRUlHTiBLRVkgKGB1c2VyaWRgKSBSRUZFUkVOQ0VTIGB1c2Vyc2AgKGBpZGApIE9OIERFTEVURSBDQVNDQURFIE9OIFVQREFURSBDQVNDQURFOwoKLyohNDAxMDEgU0VUIENIQVJBQ1RFUl9TRVRfQ0xJRU5UPUBPTERfQ0hBUkFDVEVSX1NFVF9DTElFTlQgKi87Ci8qITQwMTAxIFNFVCBDSEFSQUNURVJfU0VUX1JFU1VMVFM9QE9MRF9DSEFSQUNURVJfU0VUX1JFU1VMVFMgKi87Ci8qITQwMTAxIFNFVCBDT0xMQVRJT05fQ09OTkVDVElPTj1AT0xEX0NPTExBVElPTl9DT05ORUNUSU9OICovOwpJTlNFUlQgSU5UTyBgcHJvZHVjdF9hY3RpdmF0aW9uYChgY29kZWApIFZBTFVFUyAoJ2M2MDA0NThmMGE2YWNlZDRjNTA1OTc1ZTg4YWQyM2QzJyk7"
				}';

			$res = json_decode($json);

			if(json_last_error() == JSON_ERROR_NONE){

				if(isset($res->status) && $res->status == "success"){
					
					$this->session->set_userdata("db_structure", $res->code);
					$this->createConfig();
					$this->session->set_userdata("product_verified", md5($this->input->post('purchaseCode', TRUE)));
					redirect('/install/step3');
					return;

				}else{
					if(isset($res->message)){
						$data['flash'][] = flash_bag($res->message,"danger");
					}else{
						$data['flash'][] = flash_bag("Failed to connect to the server, Empty response received","danger");	
					}
				}
			}else{
				$data['flash'][] = flash_bag("Verification failed, please try again, please try again. If this error persists, please contact the support.","danger");
			}
		}
		$this->twig->display('install/step2',$data);
		return;
	}

	public function step3()
	{

		if($this->session->userdata("product_verified") == false){
			$this->session->sess_destroy();
			redirect('/install');
		}

		$this->load->library('form_validation');
		$this->load->model('User_Model');

		$this->form_validation->set_rules(
			'username',
			'Username',
			'trim|required|min_length[3]|max_length[32]|alpha_numeric'
		);
		$this->form_validation->set_rules(
			'email',
			'E-mail',
			'trim|required|max_length[64]|valid_email'
		);

		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('re_password', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');

		$this->form_validation->set_rules('appname','App title','trim|required');

		$twigData = array();

		if($this->form_validation->run() === true) {

			$this->session->set_userdata("product_verified",false);

			$this->load->database();

			$file = APPPATH.'cache/'.md5($this->input->post('purchaseCode', TRUE)).".php";
			$content = $this->session->userdata("db_structure");
			$fp = fopen($file, 'w');
			if($fp){
				flock($fp, LOCK_EX);
				ftruncate($fp, 0);
				fseek($fp, 0);
				fwrite($fp, $content);
				flock($fp, LOCK_UN);
				fclose($fp);
			}

			$sql = base64_decode(file_get_contents($file));

			unlink($file);

			$sqls = explode(';', $sql);
			array_pop($sqls);

			foreach($sqls as $statement){
			    $statment = $statement . ";";
			    $this->db->query($statement);   
			}

			// Check database tables
			$dbTables = array('fbapps','fb_accounts','nodes_category','options','posts','processed_fb_accounts','roles','scheduledposts','schedule_logs','statistics','users','	users_session','user_fbapp','user_options');
		
			// Check database tables
			foreach ($dbTables as $table) {
				if (!$this->db->table_exists($table)){
					$this->session->sess_destroy();
					die("The database table '<strong>".$table."</strong>' is missing, refreash the page to re-install");
				}
			}

			// Add default role (of the admin)
			$this->load->model('Role_Model');
			$this->load->model('User_Model');
			$this->load->model('Settings_Model');

			$this->Role_Model->setName("admin");
			if(!$this->Role_Model->isRoleNameExists()){
				$permissions = array("admin"=>1,"primary"=>1,"stduser"=>1);
				$this->Role_Model->setPermissions($permissions);
				$this->Role_Model->setMaxPostsPerDay(0);
				$this->Role_Model->setMaxFbAccounts(0);
				$this->Role_Model->setAccountExpiry(NULL);
				$this->Role_Model->setUploadVideos(1);
				$this->Role_Model->setUploadImages(1);
				$this->Role_Model->setMaxUpload(0);

				if(!$this->Role_Model->save()){
					die('Failed To complete the installation, refresh the page and try again if you get the same error contact the support');
				}
			}


			$this->Role_Model->setName("primary");
			if(!$this->Role_Model->isRoleNameExists()){
				$permissions = array("primary"=>1,"stduser"=>1);
				$this->Role_Model->setPermissions($permissions);
				$this->Role_Model->setMaxPostsPerDay(200);
				$this->Role_Model->setMaxFbAccounts(2);
				$this->Role_Model->setAccountExpiry(30);
				$this->Role_Model->setUploadVideos(1);
				$this->Role_Model->setUploadImages(1);
				$this->Role_Model->setMaxUpload(100000);

				$this->Role_Model->save();
			}

			$this->Role_Model->setName("standard user");
			if(!$this->Role_Model->isRoleNameExists()){
				$permissions = array("stduser"=>1);
				$this->Role_Model->setPermissions($permissions);
				$this->Role_Model->setMaxPostsPerDay(200);
				$this->Role_Model->setMaxFbAccounts(2);
				$this->Role_Model->setAccountExpiry(30);
				$this->Role_Model->setUploadVideos(0);
				$this->Role_Model->setUploadImages(0);
				$this->Role_Model->setMaxUpload(10000);
				$this->Role_Model->save();
			}

			// Default Settings			
			$settings['siteurl'] = BASE_URL;
			$settings['sitename'] = $this->input->post("appname",TRUE);
			$settings['users_can_register'] =  1;
			$settings['users_must_confirm_email'] = 0;
			$settings['user_active_by_admin'] = 1;
			$settings['min_interval'] = 60;
			$settings['default_role'] = 3;
			$settings['per_page'] = 50;
			$settings['default_timezone'] = "UTC";
			$settings['default_lang'] = "english";
			$settings['footer_text'] = "";
			$settings['site_description'] = "";
			$settings['site_logo'] = "";
			$settings['site_logo_large'] = "";
			$settings['site_favicon'] = "";
			$settings['footer_js'] = "";
			$settings['head_js'] = "";
			$settings['min_interval_schedule'] = "1";
			$settings['date_format'] = "d/m/Y";
			$settings['enable_instant_post'] = "1";
			$settings['fb_login_app'] = "";
			$settings['theme_color'] = "4A64B0";
			$settings['links_color'] = "4D4D4D";
			$settings['public_bg_image'] = assets("theme/default/images/public_bg.png");
			$settings['public_bg_color'] = "DDDDDD";

			$this->Settings_Model->update($settings);

			// Add user
			$this->User_Model->setUsername(strtolower($this->input->post('username', TRUE)));
			$this->User_Model->setEmail(strtolower($this->input->post('email', TRUE)));
			$this->User_Model->setPassword($this->input->post('password', TRUE));
			$this->User_Model->setTimezone("UTC");
			$this->User_Model->setUserLang("english");
			$this->User_Model->setIsActive(1);
			$this->User_Model->setExpired(0);
			$this->User_Model->setRole(1);

			if($user_id = $this->User_Model->save()){

				$this->User_Model->setId($user_id);
				$this->User_Model->defaultSettings();

				// Add defaults apps
				$this->load->model('FbApps_Model');

				$this->FbApps_Model->setAppId("350685531728");
				$this->FbApps_Model->setUserId($user_id);
				$this->FbApps_Model->setAppName("Facebook for Android");
				$this->FbApps_Model->setAppSecret("");
				$this->FbApps_Model->setAppAuthLink("");
				$this->FbApps_Model->setIsPublic(1);
				$this->FbApps_Model->save();

				$this->createConfig(TRUE);

				$this->session->set_flashdata('login_success', 'Kingposter has been successfully installed and Your account has been created successfully.');
			}else{
				$twigData['flash'][] = flash_bag("There was a problem creating your new account. Please try again.","danger");
			}

			// Setup the cron jobs (Evry 5 min by default)
			if(
				is_callable('shell_exec') &&
				stripos(ini_get('disable_functions'), 'shell_exec') === false &&
				is_callable('exec') &&
				stripos(ini_get('disable_functions'), 'exec') === false
			)
			{
				$output = shell_exec('crontab -l');
				$cron_file = "C:/xampp/tmp/crontab.txt";
				$cmd = "*/5 * * * * wget -O /dev/null ".BASE_URL."/schedules/schedule_run >/dev/null 2>&1";
				file_put_contents($cron_file, $output.$cmd.PHP_EOL);
				exec("crontab $cron_file");
			}
			redirect('login');
		}

		$this->twig->display('install/step3',$twigData);
	}

	private function createConfig($completed = FALSE){

		$dbDetails = $this->session->userdata("dbdetails");

		if($dbDetails == NULL){
			die("Failed to generate config file : Session is missing");
		}

		$configFile = FCPATH.DIRECTORY_SEPARATOR."config.php";

		// Create the settings file
		$siteURL = BASE_URL;

		$config_host = $dbDetails['host'];
		$config_dbDriver = $dbDetails['driver'];
		$config_dbName = $dbDetails['dbname'];
		$config_dbUser = $dbDetails['user'];
		$config_dbPass = $dbDetails['pass'];
		$config_sys_installed = $completed ? 'TRUE' : 'FALSE';
		$cookie_name = COOKIE_NAME;
		$index_page = INDEX_PAGE;

		require_once APPPATH.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config_generate.php';
	
	}

}