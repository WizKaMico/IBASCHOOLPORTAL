<?php
	session_start();
		include_once('../../connection/connection.php');
 
	if(isset($_POST['add'])){
         
        $code = $_POST['student_id']; 
		$sql = "DELETE FROM student_assigned WHERE student_id = '$code'";

		//use for MySQLi OOP
		if($con->query($sql)){
			$_SESSION['success'] = 'decoded successfully';
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