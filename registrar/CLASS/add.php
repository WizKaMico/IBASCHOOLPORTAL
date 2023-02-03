<?php
	session_start();
	include_once('../../connection/connection.php');
 
	if(isset($_POST['add'])){
		$class_name = $_POST['class_name'];
		$year_id = $_POST['year_id'];
		$room_name = $_POST['room_name'];
		$strand = $_POST['strand'];
	
		date_default_timezone_set('Asia/Manila');
		$date_created = date('Y-m-d');
		$sql = "INSERT INTO class (class_name, year_id, room_name, strand, date_created) VALUES ('$class_name', '$year_id', '$room_name', '$strand', '$date_created')";
 
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