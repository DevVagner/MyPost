<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('mail_config') )
{
  function mail_config($settings)
  {
    $config = array();
    
    if(!isset($settings["mail_protocol"]) || trim($settings["mail_protocol"]) == ""){
    	$config['protocol'] = "mail";
    }else{
    	$config['protocol'] = $settings["mail_protocol"];
    }

	$config['smtp_host'] = @$settings["mail_smtp_host"];
	$config['smtp_port'] = @$settings["mail_smtp_port"];
	$config['smtp_user'] = @$settings["mail_smtp_user"]; 
	$config['smtp_pass'] = @$settings["mail_smtp_pass"];
	$config['smtp_crypto'] = strtolower(@$settings["mail_smtp_crypto"]);
	$config['charset'] = "utf-8";
	$config['mailtype'] = "html";
	$config['newline'] = "\r\n";
	$config['smtp_timeout'] = '7';
	$config['validation'] = TRUE;
	$config['useragent'] = "Kingposter";
	return $config;
  }
}

?>