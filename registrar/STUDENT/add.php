


<?php
	session_start();
		include_once('../../connection/connection.php');
 
	if(isset($_POST['add'])){
		
		$year_id = $_POST['year_id'];
		$user_id = $_POST['user_id'];
		$student_id = rand(66666,99999);

		$sql = "INSERT INTO  student_assigned (year_id, user_id, student_id) VALUES ('$year_id', '$user_id', '$student_id')";
      
		if($con->query($sql)){
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