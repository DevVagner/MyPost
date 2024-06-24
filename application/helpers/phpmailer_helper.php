<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ( ! function_exists('phpmailer') )
{
  function phpmailer(){
  	require FCPATH.'vendor/autoload.php';
  	$mail = new PHPMailer(TRUE);
	if(MAIL_PROTOCOL == "smtp"){
		$mail->IsSMTP();
		$mail->SMTPAuth   = TRUE;
		$mail->SMTPDebug  = 1;
		$mail->SMTPSecure = SMTP_CRYPTO;
		$mail->Host = SMTP_HOST;
		$mail->Port = SMTP_PORT;
		$mail->Username = SMTP_USER;
		$mail->Password = SMTP_PASS;
	}
	$mail->IsHTML(TRUE);
	$mail->Debugoutput = 'html';
	$mail->Timeout = 30;
	return $mail;
  }
}

