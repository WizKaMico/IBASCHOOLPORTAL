 <!---------------- Session starts form here ----------------------->
 <?php  
	session_start();
	if (!$_SESSION["LoginRegistrar"])
	{
		header('location:../login/login.php');
	}
		require_once "../connection/connection.php";
	?>
<!doctype html>
<html lang="en">
	<head>
		<title>Admin - Manage Accounts</title>
	</head>
	<body>
		<?php include('../common/common-header.php') ?>
		<?php include('../common/registrar-sidebar.php') ?>  

		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100">
			<div class="sub-main">
				<div class="bar-margin text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
					<h4>User Account Management System </h4>
				</div>
				

<div class="col-md-12 mt-5">
						<label><b>New Applicant</b></label>
									<div class="row">
										<div class="col-md-12">
											<table class="table align-items-center mb-0"> 
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 text-center">Full Name</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 text-center">Address</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 text-center">Email</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 text-center">Username</th>
						<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 text-center">Approve</th>
						<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 text-center">Remove</th>
						<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 text-center">View</th>
                      </tr>
                    </thead>
                      <tbody>
                        <?php
                          
                          require_once "../connection/connection.php";
                            
                            
                             
                              $sql = "SELECT * FROM student_info where done ='' ORDER BY fname";

                              $result = $con->query($sql);
                              if ($result->num_rows > 0) {
                              // output data of each row
                                while($row = $result->fetch_assoc()) {
                                  echo 
                                  "<td>
                                    <div class='avatar-group mt-2'><h6 class='mb-0 text-sm text-center'>" . $row["fname"] . " " .$row["lname"]. "</h6></div></td>
                                    <td><div class='avatar-group mt-2'><h6 class='mb-0 text-sm text-center'>" . $row["Address_S"] . "</h6></div></td>
									<td><div class='avatar-group mt-2'><h6 class='mb-0 text-sm text-center'>" . $row["emailAdd"] . "</h6></div></td>
									<td><div class='avatar-group mt-2'><h6 class='mb-0 text-sm text-center'>" . $row["user_id"] . "</h6></div></td>
                                    <td><div class='avatar-group mt-2 text-center' ><a href='approve_account.php?view=$row[emailAdd]' class='mb-0 text-sm'> <strong>"."YES"."</strong></a></td>
                                    <td><div class='avatar-group mt-2 text-center'><a href='toRemove.php?edit=$row[emailAdd]' onclick=\"javascript: return confirm('Are you sure you want to remove?');\" class='mb-0 text-sm' title='Remove'> <strong>". "YES" . "</strong></a></td>  
									<td><div class='avatar-group mt-2 text-center'><a href='profile.php?view=".$row['id']."' data-toggle='modal' data-target='mymodal' class='mb-0 text-sm' title='view'> <strong>". "view" . "</strong></a></td>  
                                  </tr>";


?>


        



                         <?php  }
                                  echo "</table>";
    
                                } else { echo  " 0 result"; }
                            

                            
                              $con->close();
                          
                          ?>
                         
                    </tbody>
                  </table>
										</div>
<!-- Button to Open the Modal -->


<!-- The Modal -->

                       

									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</main>
	</body>
</html>

