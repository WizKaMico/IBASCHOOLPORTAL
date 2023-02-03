<?php
	session_start();
	include_once('../../connection/connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$title = $_POST['title'];
		$event_title = 'GRADE-'.$title.'';
		$date_from = $_POST['date_from'];
		$date_to = $_POST['date_to'];

		$date2 = date("Y-m-d H:i:s", strtotime($date_from));
		$datef = date("Y-m-d H:i:s", strtotime($date_to));

		$sql1 = "UPDATE tbl_events SET title = '$event_title', start = '$date2', end = '$datef' WHERE id = '$id'";


		$sql = "UPDATE grade_submission SET title = '$title', date_from = '$date_from', date_to = '$date_to' WHERE id = '$id'";

		//use for MySQLi OOP
		if($con->query($sql) && $con->query($sql1)){
			$_SESSION['success'] = 'updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: index.php');

?>