

<?php
	$message = "";
	$account = "";
	$done = "enrolled";
if (isset($_POST['submit'])) {
	$account = $_POST['account'];
	$user_id = $_POST['user_id'];
	$que="update login set account='$account' where user_id = '$user_id'";
	$run=mysqli_query($con,$que);
	if ($run) {
		$message =  $account == "Activate" ? "Account Activated Successfully" : "Account Deactivated Successfully";
	}	
	else{
		$message = "Account Not Activated  Successfully";
	}
}
?>


							<div class="col-md-12">
								<?php
									if(($account == "activate" or $account == "Deactivate") and $message==true)
										$bg_color = "alert-success";
									else if($message==true)
										$bg_color = "alert-danger";	
								?>
								<h5 class="py-2 pl-3 <?php echo $bg_color; ?>">
									
									<?php echo $message ?>
								</h5>
							</div>
							<div class="col-md-12">
							<label><b>Activation/Deactivation of Accounts</b></label>
								<form action="manage-accounts.php" method="post">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">												
												<label>Enter User ID</label>
												<input type="text" name="user_id" class="form-control" required placeholder="Enter ID">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Enter Account Status:</label>
												<select name="account" class="form-control">
													<option>Select Account Status</option>
													<option value="activate">Activate</option>
													<option value="Deactivate">Deactivate</option>

												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="submit" name="submit" value="SUBMIT" class="btn btn-color px-5">
											</div>
										</div>
									</div>
								</form>
							</div>
						
<!-- NEW ACCOUNTS DIV -->
						<div class="col-md-12 mt-5">
						<label><b>New Registration</b></label>
									<div class="row">
										<div class="col-md-12">
											<table class="table align-items-center mb-0"> 
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 text-center">Full Name</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 text-center">Address</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 text-center">Email</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 text-center">Username</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 text-center">Role</th>
						<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 text-center">Create Account</th>
						<th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 text-center">Remove</th>
                      </tr>
                    </thead>
                      <tbody>
                        <?php
                          
                          require_once "../connection/connection.php";
                            
                            
                             
                              $sql = "SELECT * FROM signup where done ='NO' ORDER BY firstname";

                              $result = $con->query($sql);
                              if ($result->num_rows > 0) {
                              // output data of each row
                                while($row = $result->fetch_assoc()) {
                                  echo 
                                  "<td>
                                    <div class='avatar-group mt-2'><h6 class='mb-0 text-sm text-center'>" . $row["firstname"] . " " .$row["lastname"]. "</h6></div></td>
                                    <td><div class='avatar-group mt-2'><h6 class='mb-0 text-sm text-center'>" . $row["address"] . "</h6></div></td>
                                    <td><div class='avatar-group mt-2'><h6 class='mb-0 text-sm text-center'>" . $row["emailAdd"] . "</h6></div></td>
									<td><div class='avatar-group mt-2'><h6 class='mb-0 text-sm text-center'>" . $row["username"] . "</h6></div></td>
									<td><div class='avatar-group mt-2'><h6 class='mb-0 text-sm text-center'>" . $row["title"] . "</h6></div></td>
                                    <td><div class='avatar-group mt-2 text-center'><a href='createAccount.php?view=$row[emailAdd]' class='mb-0 text-sm'> <strong>"."YES"."</strong></a></td>
                                    <td><div class='avatar-group mt-2 text-center'><a href='toRemove.php?edit=$row[emailAdd]' onclick=\"javascript: return confirm('Are you sure you want to remove?');\" class='mb-0 text-sm' title='Remove'> <strong>". "YES" . "</strong></a></td>
                                  </tr>";
                                }
                                  echo "</table>";
    
                                } else { echo  " 0 result"; }
                            

                            
                              $con->close();
                          
                          ?>
                          <script>
                              function Ifpressed(){
                            
                                if (confirm("Do you want to end this chat session?") == true) {
                                  
                                    window.location = "";

                                } else {
                                    window.location = "HR Chat2.php";
                                }
                              }
                            </script> 
                    </tbody>
                  </table>
										</div>
									</div>
							</div>
				