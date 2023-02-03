<?php 

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
      <input value="<?php  echo $row['user_id']; ?>" type="text" tabindex="1" required autofocus readonly="">
    </fieldset>
    <fieldset>
      <label>Email</label>
      <input value="<?php echo $row['emailAdd']; ?>" type="email" tabindex="2" required readonly="">
    </fieldset>
  
  
  </form>
</div>
<!-- partial -->
  
</body>
</html>
