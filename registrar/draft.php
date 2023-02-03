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


	<!-- title of this page -->
		<title>Registrar - Dashboard</title>
		

		<?php include('../common/common-header.php') ?>
		<?php include('../common/registrar-sidebar.php') ?>  

		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100">
			<div class="sub-main">
				<div class="bar-margin text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
					<h4>Registrar Draft Page</h4>
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
					<div class="col-md-12 ml-2">
						
					</div>
				</div>
			</div>
		</main>
</body>
</html>

