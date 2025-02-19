<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 * @extends CI_Controller
 */
class Posts extends CI_Controller
{

	private $settings;
	private $currentUser;
	private $userOptions;

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('flash_helper', 'json_helper'));
		$this->load->library('twig');
		$this->load->model('User_Model');

		// if the user is logged in redirect to home page
		if (!$this->User_Model->isLoggedIn()) {
			redirect('/login');
		}

		$this->currentUser = $this->User_Model->currentuser();

		// If the user account has expired show expiry page
		if ($this->currentUser['expired'] == 1) {
			redirect('account_expiry');
			exit();
		}

		$this->userOptions = $this->User_Model->options();

		$this->load->model('Settings_Model');
		$this->load->model('Post_Model');

		$this->settings = $this->Settings_Model->get();
		$this->twig->addGlobal('app_settings', $this->settings);
		$this->twig->addGlobal('user', $this->User_Model);

		$this->config->set_item('language', $this->currentUser['lang']);
		$this->lang->load(array("general"));

		// Set Date format
		$this->twig->addGlobal('date_format', $this->settings['date_format']);
		$this->load->helper('general_helper');
		$this->twig->addGlobal('date_format_js', php_date_to_js($this->settings['date_format']));

		date_default_timezone_set(@$this->currentUser['timezone']);
	}

	public function index()
	{
		$twigData = array();

		$this->load->library('pagination');
		$this->load->helper("pagination");
		$this->Post_Model->setUserId($this->currentUser['user_id']);

		$userOptions = $this->User_Model->options($this->currentUser['user_id']);
		$perPage = $userOptions->row('per_page');
		if (!$perPage) $perPage = 25;

		$config = pagination_config();
		$config['base_url'] = base_url() . "/posts/";
		$config['total_rows'] = $this->Post_Model->count();

		$config['per_page'] = $perPage;

		$this->pagination->initialize($config);
		$pagination = $this->pagination->create_links();

		$posts = $this->Post_Model->get((int)$this->input->get('per_page', TRUE), $perPage);

		$twigData['posts'] = $posts;
		$twigData['pagination'] = $pagination;
		$twigData['User_Model'] = $this->User_Model;
		$twigData['total_posts'] = $config['total_rows'];
		$twigData['perPage'] = $perPage >= $config['total_rows'] ? $config['total_rows'] : $perPage;

		$this->load->model('FbAccount_Model');
		$twigData['fbaccount'] = $this->FbAccount_Model;
		$twigData['fbaccountDetails'] = $this->FbAccount_Model->getFbAccountById($this->FbAccount_Model->UserDefaultFbAccount());

		$this->twig->display('posts', $twigData);
	}

	public function add()
	{

		$this->load->library('form_validation');

		//$this->form_validation->set_rules('post_title', 'Post title', 'trim|required');
		$this->form_validation->set_rules('post_type', 'Post type', 'trim|required');

		if ($this->form_validation->run() === false) {
			display_json(array(
				'status' => 'error',
				'message' => $this->form_validation->error_array()
			));
			return;
		}

		if ($this->input->post('post_title', TRUE)) {
			$postTitle = $this->input->post('post_title', TRUE);
		} else {
			$now = new DateTime();
			$postTitle = $now->format('Y-m-d');
			$this->Post_Model->setIsAutosave(1);
		}

		$postContent = array();

		$postContent['message'] = $this->input->post('message', FALSE);

		$postContent['fb_preset_id'] = "0";

		// Add price / title if submitted
		if ($this->input->post('itemprice', FALSE)) {
			$postContent['itemprice'] = $this->input->post('itemprice', FALSE);
			$postContent['itemname'] = $this->input->post('itemname', FALSE);
		}

		// Required fields
		switch ($this->input->post('post_type', TRUE)) {
			case "message":
				$postContent['fb_preset_id'] = strlen($this->input->post('message', FALSE)) > 130 ? 0 : $this->input->post('fb_preset_id', TRUE);
				break;
			case "link":
				if ($this->input->post('link', TRUE) == null) {
					display_json(array(
						'status' => 'error',
						'message' => "Post content error : Link field is required"
					));
					return;
				}
				$postContent['link'] = $this->input->post('link', TRUE);
				$postContent['picture'] = $this->input->post('picture', TRUE);
				$postContent['name'] = $this->input->post('name', TRUE);
				$postContent['caption'] = $this->input->post('caption', TRUE);
				$postContent['description'] = $this->input->post('description', TRUE);
				break;
			case "image":
				$images = array();
				for ($i = 0; $i < MAX_NUM_IMG_POST; $i++) {
					if ($this->input->post("image_" . $i, TRUE)) {
						$images[] = $this->input->post("image_" . $i, TRUE);
					}
				}
				$postContent['image'] = $images;
				if (count($images) == 0) {
					display_json(array(
						'status' => 'error',
						'message' => "Post content error : At least image one is required"
					));
					return;
				}
				if ($this->input->post("allow_spherical_photo", TRUE) == 1) {
					$postContent['image'] = array($images[0]);
					$postContent['allow_spherical_photo'] = true;
				}
				break;
			case "video":
				if ($this->input->post('video', TRUE) == null) {
					display_json(array(
						'status' => 'error',
						'message' => "Post content error : Video url is rquired"
					));
					return;
				}
				$postContent['video'] = $this->input->post('video', TRUE);
				$postContent['description_video'] = $this->input->post('description_video', TRUE);
				break;
			default:
				display_json(array(
					'status' => 'error',
					'message' => $this->lang->s('Post type not defined!')
				));
				return;
		}

		$this->Post_Model->setUserId((int)$this->currentUser['user_id']);
		$this->Post_Model->setContent(json_encode($postContent));
		$this->Post_Model->setTitle($postTitle);
		$this->Post_Model->setType($this->input->post('post_type', TRUE));

		if ($postID = $this->Post_Model->save()) {
			display_json(array(
				'status' => 'success',
				'message' => $this->lang->s('Post has been saved successfully'),
				'post_id' => $postID
			));
		} else {
			display_json(array(
				'status' => 'error',
				'message' => 'Unabe to save your post'
			));
		}
	}

	public function delete()
	{

		$this->load->library('form_validation');

		$this->form_validation->set_rules('ids', 'IDs', 'trim|required');

		if ($this->form_validation->run() === false) {
			display_json(array(
				'status' => 'error',
				'message' => $this->form_validation->error_array()
			));
			exit;
		}

		$ids = (array)json_decode($this->input->post('ids'), true);

		if (count($ids) == 0) {
			display_json(array(
				'status' => 'error',
				'message' => $this->lang->s("No record has been specified")
			));
			exit;
		}

		$this->Post_Model->setUserId((int)$this->currentUser['user_id']);

		if ($this->Post_Model->delete($ids)) {
			display_json(array(
				'status' => 'success',
				'message' => $this->lang->s("Post(s) has been deleted successfully")
			));
			return;
		}

		display_json(array(
			'status' => 'error',
			'message' => $this->lang->s("Enable to delete the requested records. Please try again")
		));
		exit;
	}

	public function update()
	{

		$this->load->library('form_validation');

		$this->form_validation->set_rules('post_id', $this->lang->s('Post id'), 'trim|required|integer');
		$this->form_validation->set_rules('post_type', 'Post type', 'trim|required');

		if ($this->form_validation->run() === false) {
			display_json(array(
				'status' => 'error',
				'message' => $this->form_validation->error_array()
			));
			exit;
		}

		$postContent = array();

		$postContent['message'] = $this->input->post('message', FALSE);

		$postContent['fb_preset_id'] = "0";

		// Add price / title if submitted
		if ($this->input->post('itemprice', FALSE)) {
			$postContent['itemprice'] = $this->input->post('itemprice', FALSE);
			$postContent['itemname'] = $this->input->post('itemname', FALSE);
		}

		// Required fields
		switch ($this->input->post('post_type', TRUE)) {
			case "message":
				$postContent['fb_preset_id'] = strlen($this->input->post('message', FALSE)) > 130 ? 0 : $this->input->post('fb_preset_id', TRUE);
				break;
			case "link":
				if ($this->input->post('link', TRUE) == null) {
					display_json(array(
						'status' => 'error',
						'message' => "Post content error : Link field is required"
					));
					return;
				}
				$postContent['link'] = $this->input->post('link', TRUE);
				$postContent['picture'] = $this->input->post('picture', TRUE);
				$postContent['name'] = $this->input->post('name', TRUE);
				$postContent['caption'] = $this->input->post('caption', TRUE);
				$postContent['description'] = $this->input->post('description', TRUE);
				break;
			case "image":
				$images = array();

				for ($i = 0; $i < MAX_NUM_IMG_POST; $i++) {
					if ($this->input->post("image_" . $i, TRUE)) {
						$images[] = $this->input->post("image_" . $i, TRUE);
					}
				}

				$postContent['image'] = $images;

				if (count($images) == 0) {
					display_json(array(
						'status' => 'error',
						'message' => "Post content error : At least image one is required"
					));
					return;
				}

				if ($this->input->post("allow_spherical_photo", TRUE) == 1) {
					$postContent['image'] = array($images[0]);
					$postContent['allow_spherical_photo'] = true;
				}

				break;
			case "video":
				if ($this->input->post('video', TRUE) == null) {
					display_json(array(
						'status' => 'error',
						'message' => "Post content error : Video url is rquired"
					));
					return;
				}
				$postContent['video'] = $this->input->post('video', TRUE);
				$postContent['description_video'] = $this->input->post('description_video', TRUE);
				break;
			default:
				display_json(array(
					'status' => 'error',
					'message' => $this->lang->s('Post type not defined!')
				));
				return;
		}

		$this->Post_Model->setId((int)$this->input->post('post_id', TRUE));
		$this->Post_Model->setUserId((int)$this->currentUser['user_id']);


		$newData = array();
		$newData['content'] = json_encode($postContent);
		$newData['type'] = $this->input->post('post_type', TRUE);

		if ($this->Post_Model->update($newData)) {
			display_json(array(
				'status' => 'success',
				'message' => $this->lang->s('Post has been update successfully')
			));
		} else {
			display_json(array(
				'status' => 'error',
				'message' => $this->lang->s('Nothing has been Updated')
			));
		}
	}

	public function send_post()
	{
		ini_set('max_execution_time', 6000);
		set_time_limit(6000);

		$this->load->library('form_validation');

		// Check if the user can send post
		$this->User_Model->setId($this->currentUser['user_id']);
		if (!$this->User_Model->canDoToday("post")) {
			display_json(array(
				'status' => 'error',
				'message' => $this->lang->s('You reached the maximum posts allowed per day on your account')
			));
			return;
		}

		// Check require params
		$this->form_validation->set_rules('groupID', 'Group ID', 'trim|required');
		$this->form_validation->set_rules('postType', 'Post type', 'trim|required');

		if ($this->form_validation->run() === false) {
			display_json(array(
				'status' => 'error',
				'message' => $this->form_validation->error_array()
			));
			return;
		}

		// Check if the current facebook account have default app
		$this->load->model('FbAccount_Model');
		$currentFbAccount = $this->FbAccount_Model->UserDefaultFbAccount();

		$this->FbAccount_Model->setUserId($this->currentUser['user_id']);
		$this->FbAccount_Model->setFbId($currentFbAccount);

		$fbAccountDefaultApp = $this->FbAccount_Model->UserFbAccountDefaultApp();

		if (!$fbAccountDefaultApp->row()) {
			display_json(array(
				'status' => 'error',
				'message' => $this->lang->s('No app has been defined, Please go to the settings -> publish settings and choose a default app')
			));
			return;
		}

		// Get fbaccount access token
		$accessToken = $this->FbAccount_Model->defaultAccessToken((int)$fbAccountDefaultApp->row('id'));

		if (!$accessToken->row()) {
			display_json(array(
				'status' => 'error',
				'message' => $this->lang->s('Access token not availabe for current facebook account and default app')
			));
			return;
		}
		$accessToken = $accessToken->row('access_token');
		// send
		$this->load->model('Facebook_Model');
		$node = $this->input->post('groupID', TRUE);
		$postType = $this->input->post('postType', TRUE);

		$message = $this->input->post('message', FALSE);

		$link = $this->input->post('link', TRUE);
		$picture = $this->input->post('picture', TRUE);
		$name = $this->input->post('name', TRUE);
		$caption = $this->input->post('caption', TRUE);
		$description = $this->input->post('description', TRUE);
		$itemprice = $this->input->post('itemprice', TRUE);
		$itemname = $this->input->post('itemname', TRUE);

		$videoUrl = $this->input->post('video', TRUE);
		$description_video = $this->input->post('description_video', TRUE);

		$this->load->library('spintax');
		$params = array();

		if ($this->userOptions->row('uniquePost') == 1) {

			$uniquePost = "";

			if (UNIQUE_POST_FORMAT == 1) {
				$uniquePost = uniqid();
			} elseif (UNIQUE_POST_FORMAT == 2) {
				$now = new DateTime();
				$uniquePost = $now->format('Y-m-d H:i');
			} elseif (UNIQUE_POST_FORMAT == 3) {
				$now = new DateTime();
				$uniquePost = uniqid() . " - " . $now->format('Y-m-d H:i');
			}

			if (FB_PDP_POSITTION == 'bottom') {
				$params['message'] = urlencode($this->spintax->get($message) . "\n\n" . $uniquePost);
			} else {
				$params['message'] = urlencode($uniquePost . "\n\n" . $this->spintax->get($message));
			}
		} else {
			$params['message'] = urlencode($this->spintax->get($message));
		}

		if ($postType == "message" && $this->input->post('fb_preset_id', TRUE) != 0) {
			$params['text_format_preset_id'] = $this->input->post('fb_preset_id', TRUE);
		}

		// Add price and product name
		if ($itemprice && $itemname) {
			$productDetails = $itemname . " for sale \n";
			$productDetails .= "Price : " . $itemprice . "\n";
			$params['message'] = urlencode($productDetails) . $params['message'];
		}

		// Add site signature
		if (SITE_SIGNATURE !== FALSE && $this->input->post('fb_preset_id', TRUE) == 0) {
			$params['message'] = $params['message'] . urlencode("\n\n" . SITE_SIGNATURE);
		}

		if ($postType == "link") {
			$link = $this->spintax->get($link);

			// custom page
			if (@$this->settings['enable_link_customize'] == 1) {
				if (trim($picture) != "" || trim($name) != "" || trim($caption) != "" || trim($description) != "") {
					$buildLink = "?link=" . $this->spintax->get($link);
					$buildLink .= "&picture=" . preg_replace("/\r|\n|#/", "", $this->spintax->get($picture));
					$buildLink .= "&name=" . preg_replace("/\r|\n|#/", "", substr($this->spintax->get($name), 0, 200));
					$buildLink .= "&description=" . preg_replace("/\r|\n|#/", "", substr($this->spintax->get($description), 0, 200));
					$link = base_url("/page/generate/" . $buildLink);
				}
			} else {
				$params['picture'] = urlencode($this->spintax->get($picture));
				$params['name'] = urlencode($this->spintax->get($name));
				$params['caption'] = urlencode($this->spintax->get($caption));
				$params['description'] = urlencode($this->spintax->get($description));
			}

			// If is unique post link enabled
			if ($this->userOptions->row('uniqueLink') == 1) {
				if (strpos($link, '?') !== false) {
					$link = rtrim($link, "/") . "&fb_node=" . $node . "&ul=" . uniqid();
				} else {
					$link = trim($link) . "?fb_node=" . $node . "&ul=" . uniqid();
				}
			}
			$params['link'] = urlencode($link);
		}

		if ($postType == "video") {

			$sVideoURL = $this->spintax->get($videoUrl);

			// Youtube Video
			$this->load->library('Youtube_Lib');
			if ($uV = $this->youtube_lib->getYTVideoLink($sVideoURL)) {
				$sVideoURL = $uV;
			}

			if ($this->youtube_lib->getError() != null) {
				display_json(array(
					'status' => 'error',
					'message' => l($this->youtube_lib->getError())
				));
				return;
			}

			// Facebook Video
			$this->load->library('Facebook_video_link_lib');
			if ($uV = $this->facebook_video_link_lib->getYTVideoLink($sVideoURL)) {
				$sVideoURL = $uV;
			}

			if ($this->facebook_video_link_lib->getError() != null) {
				display_json(array(
					'status' => 'error',
					'message' => l($this->facebook_video_link_lib->getError())
				));
				return;
			}

			$params['file_url'] = urlencode($sVideoURL);
			$params['description'] = urlencode($this->spintax->get($message));
			unset($params['message']);
		}

		if ($postType == "image") {
			$images = array();
			for ($i = 0; $i < MAX_NUM_IMG_POST; $i++) {
				if ($this->input->post("image_" . $i, TRUE)) {
					$images[] = $this->input->post("image_" . $i, TRUE);
				}
			}

			$image_from = "url";
			if (FB_SEND_IMAGE_AS_MP) {
				$image_from = "source";
			}

			if (count($images) > 1 && $this->input->post("allow_spherical_photo", TRUE) == 0) {
				// Send all images
				$attached_media = array();
				foreach ($images as $image) {

					$currentIMG = $this->spintax->get($image);

					if ($image_from == "source" && strpos($currentIMG, base_url()) == FALSE && strpos($currentIMG, "localhost") == FALSE) {
						$params['url'] = urlencode($currentIMG);
					} else {
						$params[$image_from] = urlencode($currentIMG);
					}

					$params['published'] = 'false';

					$id = $this->Facebook_Model->post($node, $params, $postType, $accessToken);
					if ($id) {
						$attached_media[] = '{"media_fbid":"' . $id . '"}';
					}
				}

				if (count($attached_media) == 0) {
					display_json(array(
						'status' => 'error',
						'message' => $this->lang->s($this->Facebook_Model->getError())
					));
					return;
				}
				unset($params[$image_from]);
				$params['published'] = 'true';
				$params['attached_media'] = '[' . implode(',', $attached_media) . ']';
				$result = $this->Facebook_Model->post($node, $params, 'message', $accessToken);
			} else {
				$currentIMG = $this->spintax->get(@$images[0]);

				if ($image_from == "source" && strpos($currentIMG, base_url()) == FALSE && strpos($currentIMG, "localhost") == FALSE) {
					$params['url'] = urlencode($currentIMG);
				} else {
					$params[$image_from] = urlencode($currentIMG);
				}

				if ($this->input->post("allow_spherical_photo", TRUE) == 1) {
					$params['allow_spherical_photo'] = true;
				}

				$result = $this->Facebook_Model->post($node, $params, $postType, $accessToken);
			}
		} else {
			$result = $this->Facebook_Model->post($node, $params, $postType, $accessToken);
		}

		$this->load->model('Statistic_Model');
		$this->Statistic_Model->setUserId($this->currentUser['user_id']);

		if ($result === false) {
			$this->Statistic_Model->update("posts_fail");
			display_json(array(
				'status' => 'error',
				'message' => $result
			));
			return;
		}
		$this->Statistic_Model->update("posts");
		display_json(array(
			'status' => 'success',
			'id' => $result
		));
		return;
	}
}
