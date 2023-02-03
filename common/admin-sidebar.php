  <div class="row w-100">
    <button class="show-btn button-show ml-auto">
      <i class="fa fa-bars py-1" aria-hidden="true"></i>
    </button> 
  </div>
    <nav id="sidebarMenu" class="">
			<div class="col-xl-2 col-lg-3 col-md-4 sidebar position-fixed border-right">
        <div class="sidebar-header">
          <div class="nav-item">
              <a class="nav-link text-white" href="../admin/index.php?view=DASHBOARD">
                <span class="home"></span>
						      <i class="fa fa-home mr-2" aria-hidden="true"></i>Dashboard
              </a>
          </div>
        </div>   
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="../admin/index.php?view=EVENTS">
              <span data-feather="file"></span>
              <i class="fa fa-calendar mr-2" aria-hidden="true"></i>Events
            </a>
		      </li>
          <li class="nav-item">
            <a class="nav-link" href="../admin/index.php?view=ANNOUNCEMENTS">
              <span data-feather="shopping-cart"></span>
              <i class="fa fa-bullhorn mr-2" aria-hidden="true"></i>Announcements
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admin/index.php?view=ENROLLMENT">
              <span data-feather="users"></span>
              <i class="fa fa-clock-o mr-2" aria-hidden="true"></i>Enrollment Period
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admin/index.php?view=GRADESUBMISSION">
              <span data-feather="bar-chart-2"></span>
              <i class="fa fa-clock-o mr-2" aria-hidden="true"></i>Grade Submission Period
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admin/index.php?view=STUDENTS">
              <span data-feather="layers"></span>
               <i class="fa fa-users mr-2" aria-hidden="true"></i>Students
            </a>
		  </li>
          <li class="nav-item">
            <a class="nav-link" href="../admin/index.php?view=FACULTIES">
              <span data-feather="layers"></span>
              <i class="fa fa-users mr-2" aria-hidden="true"></i>Faculties
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admin/index.php?view=REPORT">
              <span data-feather="layers"></span>
              <i class="fa fa-area-chart mr-2" aria-hidden="true"></i>Report
            </a>
          </li>
          <li class="nav-item">
<!--             <a class="nav-link" href="../admin/manage-accounts.php"> -->
              <a class="nav-link" href="../admin/index.php?view=ACCOUNTS">
              <span data-feather="layers"></span>
              <i class="fa fa-key mr-2" aria-hidden="true"></i>Manage New Accounts
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admin/index.php?view=MANAGE">
              <span data-feather="layers"></span>
              <i class="fa fa-home mr-2" aria-hidden="true"></i>Manage Homepage
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admin/index.php?view=SETTING">
              <span data-feather="layers"></span>
              <i class="fa fa-cog mr-2" aria-hidden="true"></i>Settings
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