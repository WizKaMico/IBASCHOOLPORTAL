<?php
    include "../connection/connection.php"; 
    

            $emailAdd = $_POST['emailAdd'];
            $title_position = $_POST['title']; 

            $firstname = $_POST['firstname'];   
            $lastname = $_POST['lastname'];
            $address = $_POST['address'];                
            
            $username = $_POST['username'];
            $password = $_POST['password'];

            $done = "NO";
        

            $query="select * from signup where emailAdd='$emailAdd' or username='$username' ";
            $result=mysqli_query($con,$query);
            if (mysqli_num_rows($result)>0) {
                
                echo '<script>alert("Email address or Username already exists. Please try again.")</script>';
                echo '<script>window.location.href = ("login.php")</script>';
                
            }
            else
                { 
                    if (mysqli_connect_error()){
                        die('Connect Error ('. mysqli_connect_errno() .') '
                        . mysqli_connect_error());
                        }
                        else{
        
                        $sql = "INSERT INTO signup (emailAdd, firstname, lastname, address, username, password, title, done)
                        values ('$emailAdd', '$firstname','$lastname', '$address', '$username', '$password', '$title_position', '$done')";
        
                        if ($con->query($sql)){
                            echo '<script>alert("We have received your registration. We will send you an email once we verify your details. Thank you!")</script>';
                            echo '<script>window.location.href = ("login.php")</script>';
                           
                        }
                        else{
                            echo '<script>alert("Email address or Username already exists. Please try again.")</script>';
                            echo '<script>window.location.href = ("login.php")</script>';
                          
                        }
                            $con->close();
                        }
                }


  
            
                
?>