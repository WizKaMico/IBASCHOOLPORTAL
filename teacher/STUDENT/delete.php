<?php
	session_start();
		include_once('../../connection/connection.php');
 
	if(isset($_POST['add'])){

		$year_id = $_POST['year_id'];
		$class_id = $_POST['class_id']; 
		$teacher_user_id = $_POST['teacher_user_id'];
        $code = $_POST['code']; 
		$sql = "DELETE FROM student_grade WHERE code = '$code'";

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

		header('location: index.php?year_id='.$year_id.'&class_id='.$class_id.'&user_id='.$teacher_user_id);
?>