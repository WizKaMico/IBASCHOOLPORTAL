<?php
	session_start();
	include_once('../../connection/connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$class_name = $_POST['class_name'];
		$year_id = $_POST['year_id'];
		$room_name = $_POST['room_name'];
		$strand = $_POST['strand'];
		$start = $_POST['start'];
		$end = $_POST['end'];

		$sql = "UPDATE class SET class_name = '$class_name',year_id = '$year_id', room_name = '$room_name', strand = '$strand' WHERE id = '$id'";
		$sql1 = "UPDATE class_schedule SET start = '$start', end = '$end' WHERE class_id = '$id'";
		//use for MySQLi OOP
		if($con->query($sql) && $con->query($sql1)){
			$_SESSION['success'] = 'Member updated successfully';
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