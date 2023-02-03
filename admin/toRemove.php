<?php
    include "../connection/connection.php"; 

    $email = $_GET['edit'];
    $update = "UPDATE signup SET done='YES' WHERE emailAdd='$email'";

    $result = mysqli_query($con, $update);
    echo("<script>alert('Removed');</script>");
    echo '<script>window.location.href = ("manage-accounts.php")</script>';
?>