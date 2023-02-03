<?php

session_start();
$error = array();

require_once "../connection/connection.php"; 

require "mail.php";

$mode = "enter_email";
if(isset($_GET['mode'])){
    $mode = $_GET['mode'];
}

//something is posted
if(count($_POST) > 0){

    switch ($mode) {
        case 'enter_email':
            // code...
            $email = $_POST['email'];
            //validate email
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $error[] = "Please enter a valid email";
            }elseif(!valid_email($email)){
                $error[] = "That email was not found";
            }else{

                $_SESSION['forgot']['email'] = $email;
                send_email($email);
                header("Location: forgot.php?mode=enter_code");
                die;
            }
            break;

        case 'enter_code':
            // code...
            $code = $_POST['code'];
            $result = is_code_correct($code);

            if($result == "the code is correct"){

                $_SESSION['forgot']['code'] = $code;
                header("Location: forgot.php?mode=enter_password");
                die;
            }else{
                $error[] = $result;
            }
            break;

        case 'enter_password':
            // code...
            $password = $_POST['password'];
            $password2 = $_POST['password2'];

            if($password !== $password2){
                $error[] = "Passwords do not match";
                
            }elseif(!isset($_SESSION['forgot']['email']) || !isset($_SESSION['forgot']['code'])){
                header("Location: forgot.php");
                die;
            }else{
                
                save_password($password);
                if(isset($_SESSION['forgot'])){
                    unset($_SESSION['forgot']);
                }

                header("Location: login.php");
                die;
            }
            break;
        
        default:
            // code...
            break;
    }
}
 function send_email($email)
   {
    global $con;
    $expire = time() + (60 * 10); //13hrs before expires the code
    $code = rand(10000,99999);
    $email = addslashes($email);

    $query = "insert into forgot_db2 (email,code,expire)  value ('$email','$code','$expire')";
    mysqli_query($con,$query);

    send_mail($email,'Password reset',"Your code is " . $code);
   }
    
//    need baguhin
function save_password($password){
	
	global $con;

	$password = ($password);
	$email = addslashes($_SESSION['forgot']['email']);

	$query = "update login set password = '$password' where emailAdd  = '" . $email."'";
	mysqli_query($con,$query);

}
function valid_email($email){
    global $con;

    $email = addslashes($email);

    $query = "select * from login where emailAdd   = '$email' limit 1";		
    $result = mysqli_query($con,$query);
    if($result){
        if(mysqli_num_rows($result) > 0)
        {
            return true;
         }
    }

    return false;

}
function is_code_correct($code){
    global $con;

    $code = addslashes($code);
    $expire = time();
    $email = addslashes($_SESSION['forgot']['email']);

		$query = "select * from forgot_db2 where code = '$code' && email = '$email' order by id desc limit 1";
		$result = mysqli_query($con,$query);
		if($result){
			if(mysqli_num_rows($result) > 0)
			{
				$row = mysqli_fetch_assoc($result);
				if($row['expire'] > $expire){

					return "the code is correct";
				}else{
					return "the code is expired";
				}   
			}else{
				return "the code is incorrect";
			}
		}

		return "the code is incorrect";
	}
?>

<!doctype html>
<html lang="en">
	<head>
		<title>Forgot Password</title>
	</head>
	<body class="login-background">
    <link rel="stylesheet" href="../css/modal.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<?php include('../common/common-header2.php') ?>
        <div class="login-div mt-3 rounded">
            <div class="logo-div text-center">
                <img src="../Images/iba.png" alt="logo" class="align-items-center" width="100" height="100">
            </div>
            <!-- <div class="login-padding">
                <p class="text-center text-white">Forgot your password? Enter your email below</p> -->

<?php
                switch($mode){

             case 'enter_email':
                ?>
                 <div class="login-padding">
                <p class="text-center text-white">Forgot your password? Enter your email below</p>

                <form class="p-1"  method="post" action="forgot.php?mode=enter_email">
                <span style="font-size: 12px;color:red;">
							<?php 
								foreach ($error as $err) {
									// code...
									echo $err . "<br>";
                                    
			}
							?>
							</span>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" class="form-control">
                </div>
               
                <div class="form-group text-center mb-3 mt-4">
                    <input type="submit" value="Next" class="btn btn-white pl-5 pr-5 ">
                </div>
                <br><br>
                <div><a href="login.php"></a></div>
            </form>
            </div>
            <?php
                break;


             case 'enter_code':
                ?>
                 <div class="login-padding">
                <p class="text-center text-white">Enter the code send to your email</p>
                <form class="p-1"  method="POST" action="forgot.php?mode=enter_code">
                <span style="font-size: 12px;color:red;">
							<?php 
								foreach ($error as $err) {
									// code...
									echo $err . "<br>";
								}
							?>
							</span>
                <div class="form-group">
                    <input type="input" name="code" placeholder="12345" class="form-control">
                </div>
               
                <div class="form-group text-center mb-3 mt-4">
                    <input type="submit" value="Next" class="btn btn-white pl-5 pr-5">
                    <a href="forgot.php">
                    <input type="button" value="Start over" class="btn btn-white pl-5 pr-5 ">
                    </a>

                </div>
                <br><br>
                <div><a href="login.php"></a></div>
            </form>
            </div>
            <?php
                 break;


              case 'enter_password':
                ?>
                   
                 <div class="login-padding">
                <p class="text-center text-white">Enter your new Password</p>

                <form class="p-1"  method="POST" action="forgot.php?mode=enter_password">
                <?php 
								foreach ($error as $err) {
									// code...
									
			echo '<script>alert("Password dont match!")</script>';
								}
							?>
							</span>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" class="form-control mb-4">
                    
                    <input type="password" name="password2" placeholder="Retype Password" class="form-control">
                </div>
               
                <div class="form-group text-center mb-3 mt-4">
                    <input type="submit" value="Next" class="btn btn-white pl-5 pr-5 ">
                </div>
                <br><br>
                <div><a href="login.php"></a></div>
            </form>
            </div>
            <?php
                  break;

                default:
                break;
}



?>


                <!-- <form class="p-1" action="enterVerificationCode.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="enteredVerificationCode" placeholder="Email" class="form-control" required>
                    </div>
                   
                    <div class="form-group text-center mb-3 mt-4">
                        <input type="submit" name="btnsubmit" value="Next" class="btn btn-white pl-5 pr-5 ">
                    </div>
                </form> -->
            <!-- </div> -->
        </div>

    </body>
</html>



