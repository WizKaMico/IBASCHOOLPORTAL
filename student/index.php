<!---------------- Session starts form here ----------------------->
 <?php  
	session_start();
	if (!$_SESSION["LoginStudent"])
	{
		header('location:../login/login.php');
	}
	if($_SESSION['LoginStudent']){
		$_SESSION['LoginAdmin'] = "";
		$user_id = $_SESSION['LoginStudent']; 	
	}
		require_once "../connection/connection.php";

		$result=mysqli_query($con, "select * from student_info where user_id='$user_id'")or die('Error In Session');
		$row=mysqli_fetch_array($result);

		$check=mysqli_query($con, "select *,year.id as YID from student_info LEFT JOIN student_assigned ON student_info.user_id = student_assigned.user_id LEFT JOIN year ON student_assigned.year_id = year.id WHERE student_info.user_id = '$user_id'");
		$xrow=mysqli_fetch_array($check);
		
			
	?>
<!---------------- Session Ends form here ------------------------>


<!doctype html>
<html lang="en">
	<head>
		<title>Student - Dashboard</title>
	</head>
	<body>
		<?php include('../common/common-header.php') ?>
		<?php include('../common/student-sidebar.php') ?>  

		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100">
			<div class="sub-main">
				<div class="text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
					WELCOME! <?php if($row['Gender_S'] == 'Male'){ echo 'MR.'; }else{ echo 'MS.'; } ?> <?php echo strtoupper($row['lname']); echo' '; echo strtoupper($row['fname']); ?>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div>
							
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-md-6 col-sm-12">
						<div>
							
						</div>
					</div>
				</div>

		    <div class="row">			
			<?php if(!empty($_GET['view'])){ ?>
			<?php if($_GET['view'] == 'ENROLLED'){ ?>	
			<div class="col-md-4">	
				<iframe src="CALENDAR/" style="width:100%; height:800px; border:none;"></iframe>	
			</div>		

			  <div class="col-md-7">	
                 <iframe src="CLASS/?view=<?php echo $xrow['YID']; ?>" style="width:100%; height:700px; border:none;"></iframe>
               </div>       	
			<?php }else if($_GET['view'] == 'CLASS'){ ?>	
			<div class="col-md-12">	
                 <iframe src="CLASS/?view=<?php echo $xrow['YID']; ?>" style="width:100%; height:700px; border:none;"></iframe>
               </div>
            <?php }else if($_GET['view'] == 'GRADES'){ ?>	
			<div class="col-md-12">	
                 <iframe src="CLASS/grade.php?user_id=<?php echo $xrow['user_id']; ?>" style="width:100%; height:700px; border:none;"></iframe>
               </div> 
               <?php }else if($_GET['view'] == 'PERSONAL'){ ?>	
			    <div class="col-md-12">	
               <iframe src="PERSONAL/index.php?user_id=<?php echo $xrow['user_id']; ?>" style="width:100%; height:700px; border:none;"></iframe>
               </div>     
               <?php }else if($_GET['view'] == 'DASHBOARD'){ ?>	
			 <div class="col-md-4">	
				<iframe src="CALENDAR/" style="width:100%; height:800px; border:none;"></iframe>	
			</div>		

			  <div class="col-md-7">	
                 <iframe src="CLASS/?view=<?php echo $xrow['YID']; ?>" style="width:100%; height:700px; border:none;"></iframe>
               </div>  
                 <?php }else if($_GET['view'] == 'SETTING'){ ?>	    
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
		<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>