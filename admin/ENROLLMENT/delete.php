<?php
	session_start();
	include_once('../../connection/connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM enrollment WHERE id = '".$_GET['id']."'";
		$sql1 = "DELETE FROM tbl_events WHERE id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($con->query($sql) && $con->query($sql1)){
			$_SESSION['success'] = 'deleted successfully';
		}
		////////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member deleted successfully';
		// }
		/////////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to delete first';
	}

	header('location: index.php');
?>