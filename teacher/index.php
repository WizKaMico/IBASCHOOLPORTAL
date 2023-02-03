<!---------------- Session starts form here ----------------------->
<?php  
	session_start();
	if (!$_SESSION["LoginTeacher"])
	{
		header('location:../login/login.php');
	}
        require_once "../connection/connection.php";
        $user_id  = $_SESSION['LoginTeacher']; 
			$result=mysqli_query($con, "select * from login where user_id='$user_id'")or die('Error In Session');
		    $row=mysqli_fetch_array($result);


		    $resultx=mysqli_query($con, "select * from teacher_assigned where user_id='$user_id'");
		    $xrow=mysqli_fetch_array($resultx);
	?>
<!---------------- Session Ends form here ------------------------>


	<!-- title of this page -->
		<title>Teacher - Dashboard</title>
		

		<?php include('../common/common-header.php') ?>
		<?php include('../common/teacher-sidebar.php') ?>  

		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100">
			<div class="sub-main">
				<div class="bar-margin text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
					<h4>WELCOME! <?php echo strtoupper($row['user_id']); ?></h4>
				</div>
				<div class="row">
					<div class="col-md-12">					
						<form action="#" method="post">
							<div class="row mt-3">
								<div class="col-md-6">
									<div class="form-group">
										
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										
									</div>
								</div>
								<div class="col-md-4">
									
								</div>
							</div>	
						</form>
					</div>
				</div>
				<div class="row">
				   <?php if(!empty($_GET['view'])){ ?>
				   <?php if($_GET['view'] == 'CLASS'){ ?>	
				   	<div class="col-md-4">	
					  <iframe src="CALENDAR/" style="width:100%; height:800px; border:none;"></iframe>	
					</div>		

					<div class="col-md-8">	
					  <iframe src="SCHEDULE/?user_id=<?php echo $row['user_id']; ?>" style="width:100%; height:700px; border:none;"></iframe>	
					</div>
					<?php } else if($_GET['view'] == 'GRADES'){ ?>	
					<div class="col-md-7">	
					  <iframe src="STUDENT/?year_id=<?php echo $xrow['year_id']; ?>&class_id=<?php echo $xrow['class_id']; ?>&user_id=<?php echo $xrow['user_id']; ?>" style="width:100%; height:700px; border:none;"></iframe>	
					</div>	
					<div class="col-md-5">	
					  <iframe src="STUDENT/grade.php?user_id=<?php echo $xrow['user_id']; ?>" style="width:100%; height:700px; border:none;"></iframe>	
					</div>	
				    <?php } else if($_GET['view'] == 'DASHBOARD'){ ?>
					<div class="col-md-4">	
					  <iframe src="CALENDAR/" style="width:100%; height:800px; border:none;"></iframe>	
					</div>		

					<div class="col-md-8">	
					  <iframe src="SCHEDULE/?user_id=<?php echo $row['user_id']; ?>" style="width:100%; height:700px; border:none;"></iframe>	
					</div>
				    <?php } else if($_GET['view'] == 'PERSONAL'){ ?>
				  <div class="col-md-12">	
               <iframe src="PERSONAL/index.php?user_id=<?php echo $xrow['user_id']; ?>" style="width:100%; height:700px; border:none;"></iframe>
               </div>  
                <?php } else if($_GET['view'] == 'SETTING'){ ?>
				  <div class="col-md-12">	
               <iframe src="PERSONAL/update.php?user_id=<?php echo $xrow['user_id']; ?>" style="width:100%; height:700px; border:none;"></iframe>
               </div>  
				   <?php } else { ?>
				   
				   <?php } ?>	
				   <?php } else { ?>
				   

				   <?php } ?>	
				</div>
			</div>
		</main>
</body>
</html>

