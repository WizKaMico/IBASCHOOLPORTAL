<?php
session_start();
	include "../connection/connection.php"; 
	$email = $_GET['view'];

	$sql = "SELECT * FROM student_info where emailAdd ='$email'";

	$result = $con->query($sql);
	if ($result->num_rows > 0) {
	  while($row = $result->fetch_assoc()) {
		 $email = $row["emailAdd"];
	    $fname = $row["fname"];
		// $pass = $row["password"];
		// $role = $row["title"];
	  }
	}
	else{

	}

	// $passHash = sha1($pass);

	
	$_SESSION['emailAdd'] = $email;
    $_SESSION['fname'] = $fname;
	// $_SESSION['password'] = $passHash;
	// $_SESSION['role'] = $role;

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
	$mail->Subject = "Congrats! Your account is now activated";
//Set sender email
	$mail->setFrom('ibashsoffice@gmail.com');
//Enable HTML
	$mail->isHTML(true);
	
//Email body
	$mail->Body = "<h2>Welcome to IBA NATIONAL SENIOR HIGH SCHOOL PORTAL!</h2></br></br>
	
	Here's your hey: <b>".$fname."</b> 
	
	you are now enrolled!." ;
//Add recipient
	$mail->addAddress($email);
//Finally send email
	if ( $mail->send() ) {
		echo '<script>alert("the student was enrolled")</script>';
        echo '<script>window.location.href = ("approve_account2.php")</script>';
	}else{
		echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
	}
//Closing smtp connection
	$mail->smtpClose();
