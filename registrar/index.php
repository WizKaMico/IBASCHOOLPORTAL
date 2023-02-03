<!---------------- Session starts form here ----------------------->
<?php  
	session_start();
	if (!$_SESSION["LoginRegistrar"])
	{
		header('location:../login/login.php');
	}
        require_once "../connection/connection.php";
        $user_id  = $_SESSION['LoginRegistrar']; 
			$result=mysqli_query($con, "select * from login where user_id='$user_id'")or die('Error In Session');
		    $row=mysqli_fetch_array($result);
	?>
<!---------------- Session Ends form here ------------------------>


	<!-- title of this page -->
		<title>Registrar - Dashboard</title>
		

		<?php include('../common/common-header.php') ?>
		<?php include('../common/registrar-sidebar.php') ?>  

		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100">
			<div class="sub-main">
				<div class="bar-margin text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
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
				</div>

				<div class="row">
				<?php if(!empty($_GET['view'])){ ?>
				<?php if($_GET['view'] == 'PERSONAL'){ ?>	
			
				<?php } else if($_GET['view'] == 'CLASS'){ ?>
				<div class="col-md-12">	
				  <iframe src="CLASS/" style="width:100%; height:700px; border:none;"></iframe>
				</div>	
				<?php } else if($_GET['view'] == 'STUDENT'){ ?>	
				<div class="col-md-12">	
				 <iframe src="STUDENT/" style="width:100%; height:700px; border:none;"></iframe>
				</div>	
			    <?php } else if($_GET['view'] == 'TEACHER'){ ?>
				<div class="col-md-12">	
				  <iframe src="TEACHER/" style="width:100%; height:700px; border:none;"></iframe>
				</div>	
				<?php } else if($_GET['view'] == 'SCHEDULE'){ ?>
				<div class="col-md-4">	
				  <iframe src="CALENDAR/" style="width:100%; height:800px; border:none;"></iframe>	
				</div>		

				<div class="col-md-8">	
				  <iframe src="SCHEDULE/" style="width:100%; height:700px; border:none;"></iframe>	
				</div>
			    <?php } else if($_GET['view'] == 'SETTING'){ ?>
			     <div class="col-md-12">	
               <iframe src="PERSONAL/update.php?user_id=<?php echo $row['user_id']; ?>" style="width:100%; height:700px; border:none;"></iframe>
               </div>   	


				<?php } else { ?>
				<div class="col-md-6">	

				</div>	
				<?php } ?>	
				<?php } else { ?>
				

				<?php } ?>	
				</div>

				
			</div>
		</main>
</body>
</html>

