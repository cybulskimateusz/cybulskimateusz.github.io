<?php

$to			= 'cybulskimateusz.work@icloud.com';
$mail		= $_POST['f_mail'];
$message	= $_POST['f_message'];
$subject	= $mail.' : '.$_POST['f_subject'];
$headers	= 'From: '.$mail;
$headers	= 'Content-Type: text/html; charset=utf-8'."\r\n";

mail($to, $subject, $message, $headers);

?>
