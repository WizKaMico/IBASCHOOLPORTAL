 <!---------------- Session starts form here ----------------------->
	<?php  
	session_start();
	if (!$_SESSION["LoginAdmin"])
	{
		header('location:../login/login.php');
	}
		require_once "../connection/connection.php";
			$user_id  = $_SESSION['LoginAdmin']; 
			$result=mysqli_query($con, "select * from login where user_id='$user_id'")or die('Error In Session');
		    $row=mysqli_fetch_array($result);

		
	?>
<!---------------- Session Ends form here ------------------------>
<title>Admin - Dashboard</title>
	<?php include('../common/common-header.php') ?>
	<?php include('../common/admin-sidebar.php') ?>  
		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100 page-content-index">
			<div class="flex-wrap flex-md-no-wrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
				WELCOME!  <?php echo strtoupper($row['emailAdd']); ?>
			</div>
			<div class="row">
				<div class=" col-lg-6 col-md-12 col-sm-12 ">
					<div>
					
					</div>
				</div>
				<div class=" col-lg-6 col-md-12 col-sm-12">
					<div>
						
					</div>
				</div>
				
				 <?php if(!empty($_GET['view'])){ ?>
                 <?php if($_GET['view'] == 'DASHBOARD'){ ?>
                 <div class="col-md-6">	
                 <iframe src="REPORT/pie.php" style="width:100%; height:700px; border:none;"></iframe>
                 </div>
                 <div class="col-md-6">	
                 <iframe src="REPORT/bar.php" style="width:100%; height:700px; border:none;"></iframe>
                 </div>
                  <div class="col-md-4">	
                 <iframe src="REPORT/pie2.php" style="width:100%; height:700px; border:none;"></iframe>
                 </div>
                   <div class="col-md-8">	
                 <iframe src="STUDENTS/registered_student.php" style="width:100%; height:700px; border:none;"></iframe>
                 </div>
                 <?php }else if($_GET['view'] == 'EVENTS'){ ?>
                 <div class="col-md-4">	
                 <iframe src="CALENDAR/" style="width:100%; height:700px; border:none;"></iframe>
                 </div>
                 <div class="col-md-8">	
                 <iframe src="EVENTS/" style="width:100%; height:700px; border:none;"></iframe>
                 </div>
                 
                 <?php }else if($_GET['view'] == 'ANNOUNCEMENTS'){ ?>
                 	 <div class="col-md-4">	
                 <iframe src="SLIDER/" style="width:100%; height:700px; border:none;"></iframe>
                 </div>     
                  <div class="col-md-8">	
                 <iframe src="ANNOUNCEMENTS/" style="width:100%; height:700px; border:none;"></iframe>
                 </div>       
                 <?php }else if($_GET['view'] == 'ENROLLMENT'){ ?>
				 <div class="col-md-4">	
                 <iframe src="CALENDAR/" style="width:100%; height:700px; border:none;"></iframe>
                 </div>
                 <div class="col-md-8">	
                 <iframe src="ENROLLMENT/" style="width:100%; height:700px; border:none;"></iframe>
                 </div>
				 
				 <?php }else if($_GET['view'] == 'GRADESUBMISSION'){ ?>
				  <div class="col-md-4">	
                 <iframe src="CALENDAR/" style="width:100%; height:700px; border:none;"></iframe>
                 </div>
                 <div class="col-md-8">	
                 <iframe src="GRADESUBMISSION/" style="width:100%; height:700px; border:none;"></iframe>
                 </div>
				 <?php }else if($_GET['view'] == 'STUDENTS'){ ?>
				 <div class="col-md-12">	
				 <iframe src="STUDENTS/" style="width:100%; height:700px; border:none;"></iframe>
				 </div>
				 <?php }else if($_GET['view'] == 'FACULTIES'){ ?><div class="col-md-12">	
				  <div class="col-md-12">	
				 <iframe src="FACULTIES/" style="width:100%; height:700px; border:none;"></iframe>
				 </div>
				 <?php }else if($_GET['view'] == 'REPORT'){ ?>	
				 <div class="col-md-6">	
                 <iframe src="REPORT/pie.php" style="width:100%; height:700px; border:none;"></iframe>
                 </div>
                 <div class="col-md-6">	
                 <iframe src="REPORT/bar.php" style="width:100%; height:700px; border:none;"></iframe>
                 </div>
				
				 <?php }else if($_GET['view'] == 'ACCOUNTS'){ ?><?php include('manage-accounts.php'); ?>
				 <?php }else if($_GET['view'] == 'MANAGE'){ ?><div class="col-md-12">	
				  <div class="col-md-12">	
				 <iframe src="MANAGE/" style="width:100%; height:1100px; border:none;"></iframe>
				 </div>
				 	 <?php }else if($_GET['view'] == 'SETTING'){ ?><div class="col-md-12">	
				  <div class="col-md-12">	
				 <iframe src="PERSONAL/update.php?user_id=<?php echo $row['user_id']; ?>" style="width:100%; height:1100px; border:none;"></iframe>
				 </div>
				 <?php } else { ?>

						<?php } ?>	
						<?php } else { ?>
						<?php include('DASHBOARD/'); ?>
						<?php } ?>	
						

			</div>	
		</main>
	
		<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>