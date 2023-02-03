<!---------------- Session starts form here ----------------------->
<?php  
	session_start();
	if (!$_SESSION["LoginStudent"])
	{
		header('location:../login/login.php');
	}
	if($_SESSION['LoginStudent']){
		$_SESSION['LoginAdmin'] = "";
	}
		require_once "../connection/connection.php";
		
	?>
	
<!---------------- Session Ends form here ------------------------>


<!doctype html>
<html lang="en">
	<head>
		<title>Aplicant - Dashboard</title>
	</head>
	<body>
		<?php include('../common/common-header.php') ?>	
		<?php include('../common/aplicant-sidebar.php') ?>
     
		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100">
			<div class="sub-main">
				
				<div class="text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
					
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
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div>

						
							
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div>
							
						</div>
					</div>
				</div>
			</div>
		</main>
		<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>

