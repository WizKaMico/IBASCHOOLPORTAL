<?php
session_start();
 include "../connection/connection.php"; 

    // $username =  $_SESSION['username'];
    $email =  $_SESSION['emailAdd'];
	// $passHash = $_SESSION['password'];
	// $role = $_SESSION['role'];
    // $account = "activate";
    
     $applicant = "enrolled";
    if(mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }
    else{

    // $sql = "INSERT INTO login (user_id, emailAdd, password, role, account)
    // values ('$username', '$email', '$passHash', '$role', '$account')";

    
// $sql = "INSERT INTO login (user_id, emailAdd, password, role, account, aplicant)
// values ('$username', '$email', '$passHash', '$role', '$account', '$applicant')";


$sql = "update login set aplicant = '$applicant' where emailAdd  = '" . $email."'";


    if ($con->query($sql)){
        echo '<script>window.location.href = ("enrollees.php")</script>';
       
    }
    else{
        echo '<script>alert("Something went wrong. Please try again.")</script>';
        echo '<script>window.location.href = ("enrollees.php")</script>';
      
    }
        $con->close();

     
    }

    
      

    ?>