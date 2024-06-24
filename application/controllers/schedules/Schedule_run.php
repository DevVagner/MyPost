<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule_run extends CI_Controller {

	private $currentUser;
	private $settings;
	private $randomChooseService;

	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model('User_Model');
		$this->load->model('FbAccount_Model');
		$this->load->model('Settings_Model');
		$this->load->model('Schedule_Model');
		$this->load->helper('json_helper');
		$this->settings = $this->Settings_Model->get();
		ignore_user_abort(true);
		ini_set('max_execution_time', 60000);
		set_time_limit(60000);
	}

	public function index(){
		$this->load->library('Cron_lib');
		if($this->cron_lib->lock("post", 1)) return false;
		$this->FbAccount_Model->clearProcessedFbAccounts();
		$this->auto_post(false);
		$this->reset_in_p_schedule();
	}

	private function auto_post($runTwice = true){

		$schedules = $this->Schedule_Model->getPending(100);
		
		$scheduleProccessed = array();
		$schedulesToUpdate = array();

		foreach ($schedules as $schedule) {

			if(in_array($schedule->id, $scheduleProccessed)){
			    $schedulesToUpdate[] = $schedule->id;
				continue;
			}

			// Set the user timezone
			if(isset($schedule->timezone) && $schedule->timezone != null && in_array($schedule->timezone, DateTimeZone::listIdentifiers(DateTimeZone::ALL))){
				date_default_timezone_set($schedule->timezone);
			}

			$currentDateTime = new DateTime();
			$post_run_time = new DateTime($schedule->next_post_time);

			if(strtotime($currentDateTime->format("Y-m-d H:i")) < strtotime($post_run_time->format("Y-m-d H:i"))){
			    $schedulesToUpdate[] = $schedule->id;
				continue;
			}

			// Check if facebook is already proccessed 
			$this->FbAccount_Model->setFbId($schedule->fb_account);
			if($this->FbAccount_Model->isFbAccountProcessed()){
			    $schedulesToUpdate[] = $schedule->id;
				continue;
			}

			$scheduleProccessed[] = $schedule->id;

			if(USE_MULTI_THREAD){
				$this->load->library('dojob');
				$this->dojob->setService('schedules/schedule_run/send_post');
		        $this->dojob->setParams(array($schedule->userid,$schedule->id,APP_TOKEN));
		        $this->dojob->run();
			}else{
	        	$this->send_post($schedule->userid,$schedule->id,APP_TOKEN);
			}
		}
		
		if(count($schedulesToUpdate)){
			$this->db->set('in_progress', 0);
			$this->db->where('in_progress', 1);
			$this->db->where_in('id', $schedulesToUpdate);
        	$this->db->update('scheduledposts');  
		}
		
		if($runTwice){
		    $this->auto_post(false);
		}

	}

	public function send_post($userId,$scheduleId,$token){

		if(!$userId || !$scheduleId || !$token || $token != APP_TOKEN){
			return;
		}

		ini_set('max_execution_time', 60000);
		set_time_limit(60000);

		// Get the schedule by id
		$this->Schedule_Model->setId((int)$scheduleId);
		$this->Schedule_Model->setUserId((int)$userId);
		$schedule = $this->Schedule_Model->getById();

		if(!$schedule->row()){
			return;
		}

		$this->load->model('ScheduleLogs_Model');
		$this->ScheduleLogs_Model->setUserId($schedule->row('userid'));
        $this->ScheduleLogs_Model->setScheduleId($schedule->row('id'));

		$this->User_Model->setId($schedule->row('userid'));
		if(!$this->User_Model->canDoToday("post")){
			date_default_timezone_set('UTC');
			$currentDateTime = new DateTime();
			$currentDateTime->modify('+1 day');
			$this->Schedule_Model->update(array('in_progress' => 0,'next_post_time' => $currentDateTime->format('Y-m-d')));
			
			// Set Timezone
			if(in_array($schedule->row('timezone'), DateTimeZone::listIdentifiers(DateTimeZone::ALL))){
				date_default_timezone_set($schedule->row('timezone'));
			}
			
			// stop the schedule
			$this->ScheduleLogs_Model->setFbPost(null);
			$this->ScheduleLogs_Model->setContent('You reached the maximum posts allowed per day on your account');
			$this->ScheduleLogs_Model->save();
			return;
		}

		// Set Timezone
		if(in_array($schedule->row('timezone'), DateTimeZone::listIdentifiers(DateTimeZone::ALL))){
			date_default_timezone_set($schedule->row('timezone'));
		}
		
		// Get the post by id
		$this->load->model('Post_Model');
		$this->Post_Model->setId((int)$schedule->row('post_id'));
		$this->Post_Model->setUserId((int)$schedule->row('userid'));
		$post = $this->Post_Model->getById();

		if(!$post->row()){
			$this->Schedule_Model->update(array('pause'=>1,'in_progress' => 0));
			return;
		}

		// Get facebok account access token
		$this->load->model('FbAccount_Model');
		$this->FbAccount_Model->setUserId($schedule->row('userid'));
		$this->FbAccount_Model->setFbId($schedule->row('fb_account'));

		// Get fbaccount access token
		$accessToken = $this->FbAccount_Model->defaultAccessToken((int)$schedule->row('post_app'));

		if(!$accessToken->row()){
			// stop the schedule
			$this->ScheduleLogs_Model->setFbPost(null);
			$this->ScheduleLogs_Model->setContent("Access token missing : Reset access token or change app");
			$this->ScheduleLogs_Model->save();
			$this->Schedule_Model->update(array('pause'=>1,'in_progress' => 0));
			return;
		}

		/* --------------- Repeat schedule ------------- */

		// Update the schedule
		$sData = array();

		$sData['in_progress'] = 0;

		// Check if the current target is the last one
		if((int)$schedule->row('next_target')+1 >= (int)$schedule->row('total_targets')){
			// This was the last target
			// Repeat schedule
			if((int)$schedule->row('repeat_every') > 0 ){
				$now = new DateTime();
				$endOn = new DateTime($schedule->row('end_on'));
				if(strtotime($now->format("Y-m-d H:i")) >= strtotime($endOn->format("Y-m-d H:i"))){
					$sData['status'] = 1;
				}else{
					$next_post_time = new DateTime();
					$next_post_time->modify('+'.(int)$schedule->row('repeat_every').' day');

					$lastRepeated = new DateTime($schedule->row('repeated_at'));
					$newlastRepeated = new DateTime();
					$newlastRepeated->setTime($lastRepeated->format("H"), $lastRepeated->format("i"));
					$next_post_time->setTime($lastRepeated->format("H"), $lastRepeated->format("i"));

					$sData['repeated_at'] = $newlastRepeated->format('Y-m-d H:i');
					$sData['next_post_time'] = $next_post_time->format('Y-m-d H:i');
					$sData['next_target'] = 0;
				}
			}else{
				$sData['status'] = 1;	
			}
		}else{

			$currentDateTime = new Datetime();
			$sInterval = $schedule->row('post_interval');

			if(isset($this->settings['schedule_random_interval']) && $this->settings['schedule_random_interval'] != 0){
				$sri = (int)$this->settings['schedule_random_interval'];
				$sInterval = $sInterval+mt_rand(1, $sri);
			}
			
			// Update the scheduled
			$currentDateTime->modify("+".$sInterval." minutes");
			$next_post_time = $this->Schedule_Model->autoPause($schedule);

			if(!$next_post_time){
				$next_post_time = $currentDateTime->format('Y-m-d H:i');
			}

			$sData['next_target'] = (int)$schedule->row('next_target')+1;
			$sData['next_post_time'] = $next_post_time;
		}
		
		$this->Schedule_Model->update($sData);
		
		$targets = (array)json_decode($schedule->row('targets'),TRUE);

		$accessToken = $accessToken->row('access_token');

		$currentTargetIndex = (int)$schedule->row('next_target');
		
		// If target is null exit
		if(!isset($targets[$currentTargetIndex])){
			$this->ScheduleLogs_Model->setFbPost(null);
			$this->ScheduleLogs_Model->setContent("Null target");
			$this->ScheduleLogs_Model->save();
			return;
		}

		$currentTarget = $targets[$currentTargetIndex];

		// If target is null exit
		if(!isset($currentTarget['id']) || trim($currentTarget['id']) == "" || $currentTarget['id'] === 0 ){
			$this->ScheduleLogs_Model->setFbPost(null);
			$this->ScheduleLogs_Model->setContent("Null target");
			$this->ScheduleLogs_Model->save();
			return;
		}

		$nodeId = $currentTarget['id'] == "me" ? $schedule->row('fb_account') : $currentTarget['id'];

		$this->ScheduleLogs_Model->setNodeId($nodeId);
        $this->ScheduleLogs_Model->setNodeName($currentTarget['name']);
        $this->ScheduleLogs_Model->setNodeType($currentTarget['type']);

        // Check access token
		$this->load->model('Facebook_Model');
		$this->Facebook_Model->setAccessToken($accessToken);

		$this->load->library('spintax');

		// send
		$node = $currentTarget['id'];
		
		// Prepare post
		$postType = $post->row('type');
		$pf = (array)json_decode($post->row('content'),TRUE);
		$params = array();

		// Get user option
		$userOptions = $this->User_Model->options($schedule->row('userid'));

		if($userOptions->row() && $userOptions->row('uniquePost') == 1){
				
			$uniquePost = "";
			
			if(UNIQUE_POST_FORMAT == 1){
				$uniquePost = uniqid();
			} elseif (UNIQUE_POST_FORMAT == 2){
				$now = new DateTime();
				$uniquePost = $now->format('Y-m-d H:i');
			} elseif (UNIQUE_POST_FORMAT == 3) {
				$now = new DateTime();
				$uniquePost = uniqid()." - ".$now->format('Y-m-d H:i');
			}

			if(FB_PDP_POSITTION == 'bottom'){
				$params['message'] = urlencode($this->spintax->get(@$pf['message'])."\n\n". $uniquePost);
			}else{
				$params['message'] = urlencode($uniquePost."\n\n".$this->spintax->get(@$pf['message']));
			}
		}else{
			$params['message'] = urlencode($this->spintax->get(@$pf['message']));
		}

		if(isset($pf['fb_preset_id']) && $pf['fb_preset_id']){
			$params['text_format_preset_id'] = $pf['fb_preset_id'];
		}

		// Add site signature
		if(SITE_SIGNATURE !== FALSE && @$pf['fb_preset_id'] == 0){
			$params['message'] = $params['message'].urlencode("\n\n".SITE_SIGNATURE);
		}

		// Add price and product name
		if(isset($pf['itemprice']) && isset($pf['itemname'])){
			$productDetails = $pf['itemname']." for sale \n";
			$productDetails .= "Price : ".$pf['itemprice']."\n";
			$params['message'] = urlencode($productDetails).$params['message'];
		}

		if($postType == "link"){	

			$link = $this->spintax->get($pf['link']);

			$picture = $this->spintax->get($pf['picture']);
			$name = $this->spintax->get($pf['name']);
			$caption = $this->spintax->get($pf['caption']);
			$description = $this->spintax->get($pf['description']);
			
			$this->load->model("FbApps_Model");
			$this->FbApps_Model->setId($schedule->row('post_app'));
			$fbapp = $this->FbApps_Model->getById();

			// check facebook app
			// HTC sense still can post 
			if(isset($this->settings['enable_link_customize']) && $this->settings['enable_link_customize'] != 0){
				if(trim($picture) != "" || trim($name) != "" || trim($caption) != "" || trim($description) != ""){
					$link = base_url("/page/index/".$schedule->row('userid')."/".$post->row('id'));
				}
			}else{
				$params['picture'] = urlencode($picture);
				$params['name'] = urlencode($name);
				$params['caption'] = urlencode($caption);
				$params['description'] = urlencode($description);
			}

			// If is unique post link enabled
			if($userOptions->row() && $userOptions->row('uniqueLink') == 1){
				if (strpos($link, '?') !== false) {
					$link = rtrim($link, "/")."&fb_node=".$node."&ul=".uniqid();
				}else{
					$link = trim($link)."?fb_node=".$node."&ul=".uniqid();
				}
			}

			$params['link'] = urlencode($link);
		}
		
		if($postType == "video"){

			$sVideoURL = $this->spintax->get($pf['video']);
			$this->load->library('Youtube_Lib');
			if($uV = $this->youtube_lib->getYTVideoLink($sVideoURL)){
				$sVideoURL = $uV;
			}

			if($this->youtube_lib->getError() != null){
				$this->ScheduleLogs_Model->setFbPost(null);
				$this->ScheduleLogs_Model->setContent(l($this->youtube_lib->getError()));
				$this->ScheduleLogs_Model->save();
				$this->Schedule_Model->update(array('pause'=>1,'in_progress' => 0));
				return;
			}
			
			$this->load->library('Facebook_video_link_lib');
			if($uV = $this->facebook_video_link_lib->getYTVideoLink($sVideoURL)){
				$sVideoURL = $uV;
			}

			if($this->facebook_video_link_lib->getError() != null){
				$this->ScheduleLogs_Model->setFbPost(null);
				$this->ScheduleLogs_Model->setContent(l($this->facebook_video_link_lib->getError()));
				$this->ScheduleLogs_Model->save();
				$this->Schedule_Model->update(array('pause'=>1,'in_progress' => 0));
				return;
			}

			$params['file_url'] = urlencode($sVideoURL);
			$params['description'] = urlencode($this->spintax->get(@$pf['message']));
		}

		if($postType == "image"){

			$image_from = "url";
			if(FB_SEND_IMAGE_AS_MP){
				$image_from = "source";
			}

			$images = (array)$pf['image'];

			$allow_spherical_photo = isset($pf['allow_spherical_photo']) ? $pf['allow_spherical_photo'] : 0;

			if(count($images) > 1 && $allow_spherical_photo == 0){
				// Send all images
				$attached_media = array();
				foreach ($images as $image) {

					$currentIMG = $this->spintax->get($image);

					if($image_from == "source" && strpos($currentIMG, base_url()) == FALSE && strpos($currentIMG, "localhost") == FALSE){
						$params['url'] = urlencode($currentIMG);
					}else{
						$params[$image_from] = urlencode($currentIMG);
					}

					$params['published'] = 'false';
					$id = $this->Facebook_Model->post($node,$params,$postType,$accessToken);
					if($id){
						$attached_media[] = '{"media_fbid":"'.$id.'"}';
					}
				}
				
				if(count($attached_media) == 0){
					$this->ScheduleLogs_Model->setFbPost(NULL);
					$this->ScheduleLogs_Model->setContent("Error : ".$this->Facebook_Model->getError());
					$this->ScheduleLogs_Model->save();
					return;
				}

				unset($params[$image_from]);
				$params['published'] = 'true';
				$params['attached_media'] = '['.implode(',',$attached_media).']';
				$result = $this->Facebook_Model->post($node,$params,"message",$accessToken);

			}else{
				$currentIMG = $this->spintax->get($images[0]);

				if($image_from == "source" && strpos($currentIMG, base_url()) == FALSE && strpos($currentIMG, "localhost") == FALSE){
					$params['url'] = urlencode($currentIMG);
				}else{
					$params[$image_from] = urlencode($currentIMG);
				}
				
				if($allow_spherical_photo == 1){
					$params['allow_spherical_photo'] = true;
				}

				$result = $this->Facebook_Model->post($node,$params,$postType,$accessToken);
			}
			
		}else{
			$result = $this->Facebook_Model->post($node,$params,$postType,$accessToken);
		}

		$this->load->model('Statistic_Model');
		$this->Statistic_Model->setUserId($schedule->row('userid'));

		if($result === false){
			$this->ScheduleLogs_Model->setFbPost(NULL);
			$this->ScheduleLogs_Model->setContent("Error : ".$this->Facebook_Model->getError());
			$this->ScheduleLogs_Model->save();
			$this->Statistic_Model->update("posts_fail");

			$errorCodes = array("460","506","341","368","459","190","463","467","458");

			if(in_array($this->Facebook_Model->getErrorCode(), $errorCodes)){

				$this->load->model("UserNotifications_Model");
				$this->load->model("Notifications_Model");

				$this->Notifications_Model->setTitle("A Schedule has been paused");
				$this->Notifications_Model->setContent("<a href='https://fb.com/".$schedule->row('fb_account')."' target='_blank'><img src='https://graph.facebook.com/".$schedule->row('fb_account')."/picture?redirect=1&height=32&width=32&type=normal' class='img-circle'></a> Error details : ".$this->Facebook_Model->getError()." <a href='".base_url('schedules#s-'.$schedule->row('id'))."'>View schedule</a>");
				$this->Notifications_Model->setIsHtml(1);
				$this->Notifications_Model->setType('warning');
				$this->Notifications_Model->setIsSysNotification(1);
				$this->Notifications_Model->setActive(1);
				
				if($notificationId = $this->Notifications_Model->save()){
					$this->UserNotifications_Model->setNotification($notificationId);
					$this->UserNotifications_Model->setUserId($schedule->row('userid'));
					$this->UserNotifications_Model->setIsSeen(0);
					$this->UserNotifications_Model->save();
				}
				
				$this->Schedule_Model->update(array("pause"=>"1",'in_progress' => 0));
			}

		}else{
			// Set Timezone
			if(in_array($schedule->row('timezone'), DateTimeZone::listIdentifiers(DateTimeZone::ALL))){
				date_default_timezone_set($schedule->row('timezone'));
			}
			$this->ScheduleLogs_Model->setFbPost($result);
			$this->ScheduleLogs_Model->setContent(null);
			$this->ScheduleLogs_Model->save();
			$this->Statistic_Model->update("posts");
			$this->FbAccount_Model->addProcessedFbAccount();
		}
		
		$this->Schedule_Model->update(array('in_progress' => 0));

	}
	
	public function reset_in_p_schedule(){
		$this->Schedule_Model->resetInProgressSchedules();	
	}
	
}