<?php
session_start();
	include "../connection/connection.php"; 

	$_SESSION['email'] = $_POST["emailAdd"];
	$_SESSION['role'] = $_POST["title"];
	$_SESSION['firstname'] = $_POST["firstname"];
	$_SESSION['lastname'] = $_POST["lastname"];
	$_SESSION['address'] = $_POST["address"];
	$_SESSION['username'] = $_POST["username"];
	$_SESSION['password'] = $_POST["password"];

	$_SESSION['verificationCode'] = $_POST["txtCaptcha"];


	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "tls";
	$mail->Port = "587";

	$mail->Username = "ibashsoffice@gmail.com";
	$mail->Password = "lvusqhgodfirndgz";

//Email subject
	$mail->Subject = "VERIFY YOUR EMAIL";
//Set sender email
	$mail->setFrom('ibashsoffice@gmail.com');
//Enable HTML
	$mail->isHTML(true);
	
//Email body
	$mail->Body = "<h2>Welcome to IBA NATIONAL SENIOR HIGH SCHOOL PORTAL!</h2></br></br></br>

	To continue your registration, please enter this verification code: <b>".$_SESSION['verificationCode']."</b>";
//Add recipient
	$mail->addAddress($_SESSION['email']);
//Finally send email
	if ( $mail->send() ) {
        echo '<script>window.location.href = ("enterVerificationCode.php")</script>';
	}else{
		echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
	}
//Closing smtp connection
	$mail->smtpClose();
