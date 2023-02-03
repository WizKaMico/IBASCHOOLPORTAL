


<?php
	session_start();
		include_once('../../connection/connection.php');
 
	if(isset($_POST['add'])){
		
		$title = $_POST['title'];
		$event_title = 'ENROLLMENT-'.$title.'';
		$date_from = $_POST['date_from'];
		$date_to = $_POST['date_to'];

		$date2 = date("Y-m-d H:i:s", strtotime($date_from));
		$datef = date("Y-m-d H:i:s", strtotime($date_to));

		date_default_timezone_set('Asia/Manila');
		$date_create = date('Y-m-d');

		$status = $_POST['status'];

		$sql = "INSERT INTO enrollment (title, date_from, date_to, status) VALUES ('$title', '$date_from', '$date_to', '$status')";
        $sql1 = "INSERT INTO tbl_events (title, start, end) VALUES ('$event_title', '$date2', '$datef')";
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
 
	header('location: index.php');
?>