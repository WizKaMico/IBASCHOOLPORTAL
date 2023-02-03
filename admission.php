
<?php
		  include_once('connection/connection.php');
	  $result=mysqli_query($con, "select * from enrollment")or die('Error In Session');
    $row=mysqli_fetch_array($result);

 	if(isset($_POST["btn-save"])){
         
		
		$f_fname=$_POST["user_u_fname"];
		$f_lname=$_POST["user_l_uname"];
		$f_fname=$_POST["user_f_fname"];
		$f_lname=$_POST["user_l_lname"];
		$m_fname=$_POST["user_m_fname"];
		$m_lname=$_POST["user_l_lname"];
		$u_address=$_POST["user_address"];
        $u_zipcode=$_POST["user_zipcode"];
		$u_gender=$_POST["user_gender"];
		$u_dateofbirth=$_POST["user_dob"];
		$u_strand=$_POST["user_strand"];
		$u_userphone=$_POST["user_phone"];
        
		
		//  $uf_files = $_FILES['file_psa']['name'];$tmp_name=$_FILES['file_psa']['tmp_name'];$path = "uploads/".$uf_files;move_uploaded_file($tmp_name, $path);

		$query="INSERT INTO PreEnrollment (F_Fname, F_Lname, M_Fname, M_Lname, Address_S, Zip_code, Gender_S, Date_OF_Birth, Strand_S, mobile_num)
		values ('$f_fname', '$f_lname', '$m_fname', '$m_lname', '$u_address', '$u_zipcode','$u_gender', '$u_dateofbirth', '$u_strand', '$u_userphone')";
        
	
	    $query_run = mysqli_query($con, $query);
		 
 		if($query_run){
			echo '<script>alert("We have received your registration. We will send you an email once we verify your details. Thank you!")</script>';
			echo '<script>window.location.href = ("registration_form.php")</script>';
		}
		else {
			
            echo '<script>alert("Your Data has not been submitted")</script>';
		}
	}
?>
<!doctype html>
<html lang="en">
	<head>
		<title>Admin - Manage Accounts</title>
	</head>
	<body>
	<?php include('common/header.php') ?>  

		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100">
		<?php date_default_timezone_set('Asia/Manila'); ?>
		<?php if($row['date_from'] >= date('Y-m-d') && $row['date_to'] <= date('Y-m-d') OR $row['status'] == 'ACTIVE'){ ?>
				<div class="bar-margin text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3 text-center">
					<h4>Early Enrollment Form </h4>
				</div>
				      <div class="container">
                        
                        <div class="col-xl-10 shadow mx-auto mt-5 p-3 bg-white">
                        <h3 class="text-center text-black-50">Please Fill up the form</h3>
                        
                            
 <div class="container">
 <form role="form" action="action/registration_form.php" method="POST">
<div class="form-row">
<div class="form-group col-md-6">
<label>First Name</label>
<input type="text" class="form-control" name="student_user_f_uname" placeholder="Enter First Name" required>
</div>
<div class="form-group col-md-6">
<label>Last Name</label>
<input type="text" class="form-control" name="student_user_l_uname" placeholder="Enter Last Name" required>
</div>
</div>


<form role="form" action="registration_form.php" method="POST">
<div class="form-row">
<div class="form-group col-md-6">
<label>Fathers Name</label>
<input type="text" class="form-control" name="user_f_fname" placeholder="Enter First Name" required>
</div>
<div class="form-group col-md-6">
<label>Last Name</label>
<input type="text" class="form-control" name="user_l_lname" placeholder="Enter Last Name" required>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label>Mother Name</label>
<input type="text" class="form-control" name="user_m_fname" placeholder="Enter First Name" required>
</div>
<div class="form-group col-md-6">
<label>Last Name</label>
<input type="text" class="form-control" name="user_m_lname" placeholder="Enter Last Name" required>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label>Address</label>
<input type="text" class="form-control" name="user_address" placeholder="Adress" required>
</div>
<div class="form-group col-md-6">
<label>Zip Code</label>
<input type="text" class="form-control" name="user_zipcode" placeholder="Enter Zip Code" maxlength="4" required>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label>Gender</label>
<select id="inputState" name="user_gender" class="form-control" required>
  <option selected>Choose...</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Male">Other</option>
</select>
</div>
<div class="form-group col-md-6">
<label >Date of Birth</label>
<input type="date" class="form-control" name="user_dob" placeholder="Date of Birth" required>
</div>
</div>

<div class="form-row">
                      
<div class="form-group col-md-6">
<label>Select Strand</label>
<select id="user_strand" name="user_strand" class="form-control" required>
  <option selected>Choose...</option>
  <option value="BAM">Business, Accountancy, Management (BAM)</option>
  <option value="HESS">Humanities, Education, Social Sciences (HESS)</option>
  <option value="STEM">Science, Technology, Engineering, Mathematics (STEM)</option>
  
</select>
</div>
<div class="form-group col-md-6">
<label >Mobile No.</label>
<input type="phone" class="form-control" name="user_phone" placeholder="Enter 11-digit Mobile no." maxlength="11" required>
</div>
</div>


<input type="submit" name="add" class="btn btn-primary btn-lg btn-block" value="Submit">
</div>

</form>

<?php } else { ?>


<?php }  ?>	
</div>

        	
   </div>			
</div>

                        </div>
                      </div>
                 




					</div>
				
			
		</main>
	</body>
</html>



