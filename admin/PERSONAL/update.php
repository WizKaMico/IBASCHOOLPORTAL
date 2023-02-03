<?php 
session_start();
$user_id = $_GET['user_id'];
 include_once('../../connection/connection.php');
$result=mysqli_query($con, "select * from login where user_id='$user_id'");
$row=mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="./style.css">

</head>
<body style="background:white; margin-top:-100px;">
<!-- partial:index.partial.html -->
<div class="container">  
  <form id="contact" action="#" method="post">
  
     <fieldset>
      <label>UserId</label>
      <input value="<?php echo $row['user_id']; ?>" name="UserId" type="text" tabindex="4" required="" readonly="">
      <input value="<?php echo $row['id']; ?>" name="id" type="hidden" tabindex="4" required>
    </fieldset>
    <fieldset>
      <label>Email</label>
      <input value="<?php echo $row['emailAdd']; ?>" name="email" type="email" tabindex="4" required>
    </fieldset>
    <fieldset>
      <label>Password</label>
      <input type="text" name="password" tabindex="4" name="password" required>
    </fieldset>
     <fieldset>
      <input type="submit" name="submit" tabindex="4" required>
    </fieldset>
      
  </form>

  <?php if(isset($_POST['submit'])){ 

   $user_id = $_POST['UserId']; 
   $email = $_POST['email']; 
   $password = md5($_POST['password']);

   $id = $_POST['id'];

    $sql = "UPDATE login SET  emailAdd = '$email', password = '$password' WHERE id = '$id'";
     $sql1 = "UPDATE student_info SET  emailAdd = '$email' WHERE user_id = '$user_id'";
    //use for MySQLi OOP
    if($con->query($sql) && $con->query($sql1)){
      // $_SESSION['success'] = 'updated successfully';
    }
    ///////////////
 
    //use for MySQLi Procedural
    // if(mysqli_query($con, $sql)){
    //  $_SESSION['success'] = 'Member added successfully';
    // }
    //////////////
 
    else{
      // $_SESSION['error'] = 'Something went wrong while adding';
    }
  }
  else{
    // $_SESSION['error'] = 'Fill up add form first';
  }
 


 ?>  
</div>
<!-- partial -->
  
</body>
</html>
