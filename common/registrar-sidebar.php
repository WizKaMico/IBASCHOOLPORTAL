<div class="row w-100">
<button class="show-btn button-show ml-auto">
<i class="fa fa-bars py-1" aria-hidden="true"></i>
</button> 
</div>
<nav id="sidebarMenu" class="">
    <div class="col-xl-2 col-lg-3 col-md-4 sidebar position-fixed border-right">
        <div class="sidebar-header">
            <a class="nav-link text-white" href="#">
            <span class="home"></span>
				<i class="fa fa-home mr-2" aria-hidden="true"></i>Dashboard
            </a>
        </div>
        <ul class="nav flex-column">
     <!--        <li class="nav-item">
                <a class="nav-link" href="../registrar/index.php?view=<?php echo 'PERSONAL'; ?>">
                <span data-feather="file"></span>
                <i class="fa fa-user mr-2" aria-hidden="true"></i> Personal Profile
                </a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="../registrar/index.php?view=<?php echo 'CLASS'; ?>">
                <span data-feather="file"></span>
                <i class="fa fa-address-book mr-2" aria-hidden="true"></i> Classes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../registrar/index.php?view=<?php echo 'STUDENT'; ?>">
                <span data-feather="shopping-cart"></span>
                <i class="fa fa-users mr-2" aria-hidden="true"></i> Students
                </a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="../registrar/index.php?view=<?php echo 'TEACHER'; ?>">
                <span data-feather="shopping-cart"></span>
                <i class="fa fa-users mr-2" aria-hidden="true"></i> Teacher
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../registrar/enrollees.php">
                <span data-feather="users"></span>
                <i class="fa fa-user-plus mr-2" aria-hidden="true"></i> Enrollees
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../registrar/index.php?view=<?php echo 'SCHEDULE'; ?>">
                <span data-feather="users"></span>
                <i class="fa fa-book mr-2" aria-hidden="true"></i> Schedules
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../registrar/index.php?view=<?php echo 'SETTING'; ?>">
                <span data-feather="users"></span>
                <i class="fa fa-cog mr-2" aria-hidden="true"></i> Settings
                </a>
            </li>
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