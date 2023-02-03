<?php
	session_start();
	include_once('../../connection/connection.php');
 
	if(isset($_POST['add'])){
		$class_id = $_POST['class_id'];
		$start = $_POST['start'];
		$end = $_POST['end'];
	
		date_default_timezone_set('Asia/Manila');
		$date_created = date('Y-m-d');
		$sql = "INSERT INTO class_schedule (class_id, start, end) VALUES ('$class_id', '$start', '$end')";
 
		//use for MySQLi OOP
		if($con->query($sql)){
			$_SESSION['success'] = 'added successfully';
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
 
	header('location: index.php');
?>