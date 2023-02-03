


<?php
	session_start();
		include_once('../connection/connection.php');
 
	if(isset($_POST['add'])){
		
		$student_user_f_uname = $_POST['student_user_f_uname'];
		$student_user_l_uname = $_POST['student_user_l_uname'];
		$user_f_fname = $_POST['user_f_fname'];	
		$user_l_lname = $_POST['user_l_lname'];	
		$user_m_fname = $_POST['user_m_fname'];	
		$user_m_lname = $_POST['user_m_lname'];	
		$user_address = $_POST['user_address'];	
		$user_zipcode = $_POST['user_zipcode'];	
		$user_gender = $_POST['user_gender'];	
		$user_dob = $_POST['user_dob'];	
		$user_strand = $_POST['user_strand'];	
		$user_phone = $_POST['user_phone'];	
		date_default_timezone_set('Asia/Manila');
		$date_create = date('Y-m-d');

		$sql = "INSERT INTO  early_registration (student_user_f_uname, student_user_l_uname, user_f_fname, user_l_lname, user_m_fname, user_m_lname, user_address, user_zipcode, user_gender, user_dob, user_strand, user_phone, date_create) VALUES ('$student_user_f_uname', '$student_user_l_uname', '$user_f_fname', '$user_l_lname', '$user_m_fname', '$user_m_lname', '$user_address', '$user_zipcode', '$user_gender', '$user_dob', '$user_strand', '$user_phone', '$date_create')";
		//use for MySQLi OOP
		if($con->query($sql) && $con->query($sql1)){
			$_SESSION['success'] = 'Enrollment added successfully';
		}
		///////////////
 
		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
 
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}
 
	header('location: ../admission.php');
?>