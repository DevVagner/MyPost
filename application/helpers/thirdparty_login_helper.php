<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('thirdparty_login_facebook')){
	function thirdparty_login_facebook($appid,$secret){
		require_once  FCPATH."vendor/facebook/autoload.php";
		$fb = new Facebook\Facebook(['app_id' => $appid,'app_secret' => $secret,'default_graph_version' => 'v2.2']);
		$helper = $fb->getRedirectLoginHelper();
		$permissions = ['email'];
		$loginUrl = $helper->getLoginUrl(base_url("user/thirdparty_login/facebook/"), $permissions);
		return $loginUrl;
	}
}