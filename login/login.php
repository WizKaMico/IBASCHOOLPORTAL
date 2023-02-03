<!-- PHP Starts Here -->
<?php 
 session_start();
 session_unset();
 session_destroy();
 
session_start();
    require_once "../connection/connection.php"; 
    
    if(isset($_POST["btnlogin"]))
    {
        $username=$_POST["email"];
        $password= md5($_POST["password"]);

       

        $query="select * from login where user_id='$username' and Password='$password'";
        $result=mysqli_query($con,$query);
        if (mysqli_num_rows($result)>0) {
            while ($row=mysqli_fetch_array($result)) {
                
                if ($row["role"]=="admin")
                {
                    $_SESSION['LoginAdmin']=$row["user_id"];
                    header('Location: ../admin/index.php?view=DASHBOARD');
                }
                else if ($row["role"]=="teacher" and $row["account"]=="activate")
                {
                    $_SESSION['LoginTeacher']=$row["user_id"];
                    header('Location: ../teacher/index.php?view=CLASS');
                }
                else if ($row["role"]=="student" and $row["account"]=="activate" and $row["aplicant"]==null)
                {
                    $_SESSION['LoginStudent']=$row['user_id'];
                    $id = $row['id'];
                    $_SESSION["id"] = $id;
                    header('Location: ../applicant/aplicant_index.php');
                }
                else if ($row["role"]=="student" and $row["account"]=="activate" and $row["aplicant"]=="pending")
                {
                    $_SESSION['LoginStudent']=$row['user_id'];
                    header('Location: ../student/index.php?view=PENDING');
                }
                else if ($row["role"]=="student" and $row["account"]=="activate" and $row["aplicant"]=="enrolled")
                {
                    $_SESSION['LoginStudent']=$row['user_id'];
                    header('Location: ../student/index.php?view=ENROLLED');
                }
               
                else if ($row["role"]=="registrar" and $row["account"]=="activate")
                {
                    $_SESSION['LoginRegistrar']=$row['user_id'];
                    header('Location: ../registrar/index.php?view=CLASS');
                }
            }
        }
        else
            { 
                echo '<script>alert("Invalid username or password. Please try again.")</script>';
                echo '<script>window.location.href = ("login.php")</script>';               
            }
    }
        
    
?>

<!doctype html>
<html lang="en">
	<head>
		<title>login - IBANIAN</title>
<!--         <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
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
                <h2 class="text-center text-white">LOGIN</h2>
                <form class="p-1" action="#" method="POST">
                    <div class="form-group">
                        <label><h6>EMAIL:</h6></label>
                        <input type="text" name="email" placeholder="Enter your email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label><h6>PASSWORD:</h6></label>
                        <input type="Password" name="password" placeholder="Enter your password" class="form-control border-bottom" required>
                        <!-- <?php echo $message; ?> -->
                    </div>
                    <div class="form-group text-center mb-3 mt-4">
                        <input type="submit" name="btnlogin" value="LOGIN" class="btn btn-white pl-5 pr-5 ">
                    </div>
                    <p class="login-bottom text-center">
                    Don't have an account?
                    <a href="#" id="sign-up" class="font-weight-bold">Sign up</a><br><br>
                    <a href="forgot.php" id="forgotPass" class="font-weight-bold">Forgot Password?</a>
                  </p>
                </form>
            </div>
        </div>
        <!-- <main class="register-frame main-content position-absolute max-height-vh-100 h-100">     
            <iframe frameBorder="0" name="iframe_a" height="1000px" width="100%"  ></iframe>
         </main> -->

         <div id="myModal" class="modal2">
<!-- Modal content -->
<div class="modal-content2">
  <div class="modal-header">
  <p class="mb-0 text-sm font-weight-bold" style="color:white">Welcome!</p>
    <span class="close">&times;</span>
  </div><br>
      <div class="modal-body">
         <form role="form" id="sisgnup" action="toVerifyEmail.php" method="POST">
          <div class="input-group input-group-outline mb-3 w-100">
            <label class="form-label w-100 font-weight-bold" style="font-size:25px">REGISTRATION</label>
            <label class="form-label w-100 ">Enter your details below:</label>
                <div class="title-option">
                <label>I AM A:</label> <br>
                      <input type="radio" id="title2" name="title" value="teacher" required>
                      <label for="title2" > Teacher</label>
                      <input type="radio" id="title2" name="title" value="student" required>
                      <label for="title2">Student</label><br>   
                </div>
              <input required type="text" name="firstname" class="form-control w-100 mb-3" placeholder="First Name">
              <input required type="text" name="lastname" class="form-control w-100 mb-3" placeholder="Last Name">
              <input required type="text" name="address" class="form-control w-100 mb-3" placeholder="Complete Address">
              <input required type="email" name="emailAdd" class="form-control w-100 mb-3" placeholder="Email Address">
              <input required type="text" name="username" class="form-control w-100 mb-3" placeholder="Username">
              <input required type="password" name="password" class="form-control w-100 mb-3" placeholder="Password">
          </div>
            <div class="form-group d-flex">
                    <div class="checker" id="uniform-tnc"><span><input type="checkbox" name="tnc" id="tnc" class="checker" required></span></div> <span style="color:black !important; padding-left:5px">I agree to the </span>
                    <a href="#" id="term_of_service"> Terms of Service</a>                
            </div>
                <div class="form-group text-center mb-3 mt-4">
                    <input type="submit" name="btnlogin" onclick="GenerateCaptcha()" value="ENTER" class="btn btn-blk pl-5 pr-5 ">
                    <input type="text" id="txtCaptcha" name="txtCaptcha" style="display:none"/>
                </div>
        </form>
      </div>
</div>
</div>

<script type="text/javascript">  
        /* Function to Generat Captcha */  
        function GenerateCaptcha() {  
            var chr1 = Math.ceil(Math.random() * 10) + '';  
            var chr2 = Math.ceil(Math.random() * 10) + '';  
            var chr3 = Math.ceil(Math.random() * 10) + '';  
            var chr4 = Math.ceil(Math.random() * 10) + '';
  
            var str = new Array(4).join().replace(/(.|$)/g, function () { return ((Math.random() * 36) | 0).toString(36)[Math.random() < .5 ? "toString" : "toUpperCase"](); });  
            var captchaCode = str + chr1 + chr2 + chr3 + chr4;  
            document.getElementById("txtCaptcha").value = captchaCode  
        }
  
        /* Remove spaces from Captcha Code */  
        function removeSpaces(string) {  
            return string.split(' ').join('');  
        }  
    </script>



<script>
// Get the modal
var modal = document.getElementById("myModal");


// Get the button that opens the modal
var btn = document.getElementById("sign-up");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
modal.style.display = "block";
}


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
  modal.style.display = "none";
}
}
</script>

    </body>
</html>



