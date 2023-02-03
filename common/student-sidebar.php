	<div class="row w-100">
		<button class="show-btn button-show ml-auto">
		<i class="fa fa-bars py-1" aria-hidden="true"></i>
		</button> 
	</div>
		<nav id="sidebarMenu" class="">
			<div class="col-xl-2 col-lg-3 col-md-4 sidebar position-fixed border-right">
				<div class="sidebar-header">
					<div class="nav-item">
						<a class="nav-link text-white" href="../student/index.php?view=DASHBOARD">
							<span class="home"></span>
							<i class="fa fa-home mr-2" aria-hidden="true"></i>Dashboard
						</a>
					</div>
				</div>
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link" href="../student/index.php?view=PERSONAL">
						<span data-feather="file"></span>
						<i class="fa fa-user mr-2" aria-hidden="true"></i> Personal Profile
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../student/index.php?view=CLASS">
						<span data-feather="file"></span>
						<i class="fa fa-address-book mr-2" aria-hidden="true"></i> Classes
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../student/index.php?view=GRADES">
						<span data-feather="shopping-cart"></span>
						<i class="fa fa-file-text mr-2" aria-hidden="true"></i> Grades
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../student/index.php?view=SETTING">
						<span data-feather="shopping-cart"></span>
						<i class="fa fa-cog mr-2" aria-hidden="true"></i> Settings
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