

<?php
    session_start();
	include_once('../../connection/connection.php');
	if(ISSET($_POST['add'])){
		$image_name = $_FILES['photo']['name'];
		$image_temp = $_FILES['photo']['tmp_name'];
	
		$title = $_POST['title'];
		// $date_from = $_POST['date_from'];
		// $date_to = $_POST['date_to'];
		$description = $_POST['description'];

		// $date2 = date("Y-m-d H:i:s", strtotime($date_from));
		// $datef = date("Y-m-d H:i:s", strtotime($date_to));

		date_default_timezone_set('Asia/Manila');
		$date_create = date('Y-m-d');
	
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		if(!is_dir("./upload"))
			mkdir("upload");
		$path = "upload/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(move_uploaded_file($image_temp, $path)){
				// mysqli_query($con,"INSERT INTO `tbl_events` VALUES('', '$title', '$date2', '$datef')");  
				mysqli_query($con, "INSERT INTO `announcement` VALUES('', '$title', '$description', '$date_create', '$path')") or die(mysqli_error());
				
				$_SESSION['success'] = 'Announcement added successfully';
			
			}	
		}else{
		  $_SESSION['error'] = 'Something went wrong while adding';
		}

		header("location: index.php");
	}

?>