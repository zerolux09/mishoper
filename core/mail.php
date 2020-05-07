<?php
	header('stringify');
	$status = array(
		'type'=>'success',
		'message'=>'Thank you for contact us. As early as possible  we will contact you '
	);

    $name       = @trim(stripslashes($_POST['ename'])); 
    $email      = @trim(stripslashes($_POST['email'])); 
    $ephone      = @trim(stripslashes($_POST['ephone'])); 
    $subject    = @trim(stripslashes($_POST['subject'])); 
    $message    = @trim(stripslashes($_POST['message']));
    $spectext = '<!DOCTYPE html><html><head><title>Заказ</title></head><body>';
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $email_from = $email;
    $email_to = 'webmaster@mishoper.online';//replace with your email

    $body =   $spectext .'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n"  . 'ephone: ' . $ephone . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message . '</body></html>' . $headers;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
if ($success) {
    echo 1;
} else {
    echo 0;
}
    echo json_encode($status);
    
    die;