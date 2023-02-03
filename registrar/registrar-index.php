 <!---------------- Session starts form here ----------------------->
	<?php  
	session_start();
	if (!$_SESSION["LoginRegistrar"])
	{
		header('location:../login/login.php');
	}
		require_once "../connection/connection.php";
	?>
<!---------------- Session Ends form here ------------------------>
<title>Registrar - Dashboard</title>
	<?php include('../common/common-header.php') ?>
	<?php include('../common/registrar-sidebar.php') ?>  
		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100 page-content-index">
			<div class="flex-wrap flex-md-no-wrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
				<h4>Registrar Dashboard </h4>
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
				<div class="col-md-12">
					<div>
						
					</div>				
				</div>
			</div>	
		</main>
	
		<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>