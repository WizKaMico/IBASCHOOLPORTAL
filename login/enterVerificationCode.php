
<!-- PHP Starts Here -->
<?php 

session_start();
error_reporting(0);

include "../connection/connection.php"; 

    if(isset($_POST["btnsubmit"]))
    {
        $enteredVerificationCode = $_POST["enteredVerificationCode"];

           $verEmail = $_SESSION['email'];
           $verRole = $_SESSION['role'];
           $verFirstname = $_SESSION['firstname']; 
           $verLastname = $_SESSION['lastname']; 
           $verAddress = $_SESSION['address']; 
           $verUsername = $_SESSION['username']; 
           $verPassword = $_SESSION['password']; 
        
        if($enteredVerificationCode == $_SESSION['verificationCode']){
            $done = "NO";

            $query="select * from signup where emailAdd='$verEmail' or username='$verUsername' ";
            $result=mysqli_query($con,$query);
            if (mysqli_num_rows($result)>0) {
                
                echo '<script>alert("Email address or Username already exists. Please try again.")</script>';
                
                
            }
            else
                { 
                    if (mysqli_connect_error()){
                        die('Connect Error ('. mysqli_connect_errno() .') '
                        . mysqli_connect_error());
                        }
                        else{
        
                        $sql = "INSERT INTO signup (emailAdd, firstname, lastname, address, username, password, title, done)
                        values ('$verEmail', '$verFirstname', '$verLastname', '$verAddress', '$verUsername', '$verPassword', '$verRole', '$done')";
        
                        if ($con->query($sql)){
                            echo '<script>alert("We have received your registration. We will send you an email once we verify your details. Thank you!")</script>';
                            echo '<script>window.location.href = ("login.php")</script>';
                        
                        }
                        else{
                            echo '<script>alert("Email address or Username already exists. Please try again.")</script>';
                            
                        
                        }
                            $con->close();
                        }
                }
        }
        else{
            echo '<script>alert("Invalid verification code. Please try again.")</script>';
            echo '<script>window.location.href = ("enterVerificationCode.php")</script>';
        }
    
    }

?>

<!doctype html>
<html lang="en">
	<head>
		<title>login - IBANIAN</title>
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
            <div class="login-padding">
                <p class="text-center text-white">PLEASE ENTER THE VERIFICATION CODE WE SENT TO YOUR REGISTERED EMAIL</p>
                <form class="p-1" action="enterVerificationCode.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="enteredVerificationCode" placeholder="Enter verification code here" class="form-control" required>
                    </div>
                   
                    <div class="form-group text-center mb-3 mt-4">
                        <input type="submit" name="btnsubmit" value="SUBMIT" class="btn btn-white pl-5 pr-5 ">
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>



