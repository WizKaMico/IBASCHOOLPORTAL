

<?php  
    if (!$_COOKIE["verifyEmail"])
    {
       echo '<script>alert("Invalid Link. Please try again.")</script>';
        echo '<script>window.location.href = ("login.php")</script>';
    }

	else{
        $emailVerified = $_COOKIE["verifyEmail"];

        echo '<script>alert("Verified email address!")</script>';
        echo $emailVerified;
    }
?>


