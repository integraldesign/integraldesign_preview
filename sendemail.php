<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Gracias por ponerse en contacto con nosotros. Lo antes posible nos pondremos en contacto contigo.'
	);

    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $subject = @trim(stripslashes($_POST['subject'])); 
    $message = @trim(stripslashes($_POST['message'])); 

    $email_from = $email;
    $email_to = 'mferrer@integraldesign.es';//replace with your email

    $body = 'Nombre: ' . $name . "\n\n" . 'Correo electronico: ' . $email . "\n\n" . 'Asunto: ' . $subject . "\n\n" . 'Mensaje: ' . $message;

    $success = @mail($email_to, $subject, $body, 'De: <'.$email_from.'>');

    echo json_encode($status);
    die;