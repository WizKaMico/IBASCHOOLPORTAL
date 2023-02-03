<?php
session_start();
 include "../connection/connection.php"; 

    $username =  $_SESSION['username'];
    $email =  $_SESSION['emailAdd'];
	$passHash = $_SESSION['password'];
	$role = $_SESSION['role'];
    $account = "activate";
    
    $applicant = "";
    if(mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }
    else{

    // $sql = "INSERT INTO login (user_id, emailAdd, password, role, account)
    // values ('$username', '$email', '$passHash', '$role', '$account')";

    
$sql = "INSERT INTO login (user_id, emailAdd, password, role, account, aplicant)
values ('$username', '$email', '$passHash', '$role', '$account', '$applicant')";



    if ($con->query($sql)){
        echo '<script>window.location.href = ("manage-accounts.php")</script>';
       
    }
    else{
        echo '<script>alert("Something went wrong. Please try again.")</script>';
        echo '<script>window.location.href = ("manage-accounts.php")</script>';
      
    }
        $con->close();

        
$sql="insert into user_info(user_id, emailAdd)values('$email')";
     
    }

    
      

    ?>