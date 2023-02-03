<div class="row w-100">
		<button class="show-btn button-show ml-auto">
		<i class="fa fa-bars py-1" aria-hidden="true"></i>
		</button> 
	</div>
		<nav id="sidebarMenu" class="">
			<div class="col-xl-2 col-lg-3 col-md-4 sidebar position-fixed border-right">
				<div class="sidebar-header">
					<div class="nav-item">
						<a class="nav-link text-white" href="../applicant/aplicant_index.php">
							<span class="home"></span>
							Hi, Applicant!<br>
							<i class="fa fa-home mr-2" aria-hidden="true"></i>Dashboard
						</a>
					</div>
				</div>
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link" href="../applicant/registration_form.php">
						<span data-feather="file"></span>
						<i class="fa fa-user mr-2" aria-hidden="true"></i> Registration Form
						</a>
					</li>
										
				</ul>
			</div>
		</nav>
		
		<script>
			const toggleBtn = document.querySelector(".show-btn");
			const sidebar = document.querySelector(".sidebar");
			// undefined
			toggleBtn.addEventListener("click",function(){
				sidebar.classList.toggle("show-sidebar");
			});
		</script>