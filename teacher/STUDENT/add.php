


<?php
	session_start();
		include_once('../../connection/connection.php');
 
	if(isset($_POST['add'])){
		$year_id = $_POST['year_id'];
		$class_id = $_POST['class_id'];  
		$class_name = $_POST['class_name'];
		$teacher_user_id = $_POST['teacher_user_id'];
		$student_user_id = $_POST['student_user_id'];
		$period = $_POST['period'];
		$grade = $_POST['grade'];
		$code = rand(66666,99999);

		$sql = "INSERT INTO  student_grade (class_id, class_name, teacher_user_id, student_user_id, period, grade, code) VALUES ('$class_id', '$class_name', '$teacher_user_id', '$student_user_id', '$period', '$grade', '$code')";
      
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

	header('location: index.php?year_id='.$year_id.'&class_id='.$class_id.'&user_id='.$teacher_user_id);
?>