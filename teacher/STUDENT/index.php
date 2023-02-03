<?php
	session_start();
	require_once "../../connection/connection.php";
	$year_id = $_GET['year_id'];
    $class_id = $_GET['class_id'];
    $user_id = $_GET['user_id'];
    $resultx=mysqli_query($con, "select * from teacher_assigned left join class ON teacher_assigned.class_id = class.id where teacher_assigned.user_id='$user_id'");
	$xrow=mysqli_fetch_array($resultx);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<div class="row">
				<a href="#addnew" data-toggle="modal" class="btn btn-primary" style="background-color:#2c3e50; border-color:#2c3e50;"><span class="glyphicon glyphicon-plus"></span>ADD GRADE</a>
				<a href="#decode" data-toggle="modal" class="btn btn-primary" style="background-color:#2c3e50; border-color:#2c3e50;"><span class="glyphicon glyphicon-plus"></span>DECODE</a>
				<a href="print_pdf.php" class="btn btn-success pull-right" style="background-color:#2c3e50; border-color:#2c3e50;"><span class="glyphicon glyphicon-print"></span> PDF</a>
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
					
						<th>FULLNAME</th>
						<th>EMAIL</th>
						<th>PHONE</th>
						<th>ROLE</th>
						<th>STATUS</th>
						<th>ENCODE</th>
					</thead>
					<tbody>
						<?php
							include_once('../../connection/connection.php');
							$sql = "SELECT *,student_info.id as STUDIN, login.id as LOGID FROM `student_info` LEFT JOIN login ON student_info.user_id = login.user_id LEFT JOIN student_assigned ON login.user_id = student_assigned.user_id WHERE role = 'student' AND student_assigned.year_id = '$year_id'";

							//use for MySQLi-OOP
							$query = $con->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>";
					                 
									if($row['Gender_S'] == 'Male'){ echo "<td>Mr. ".$row['fname']." ".$row['lname']."</td>"; } else { echo "<td>Ms. ".$row['fname']." ".$row['lname']."</td>"; } 
									
							echo   "<td>".$row['emailAdd']."</td>
									<td>".$row['mobile_num']."</td>
									<td>".$row['role']."</td>
									<td>".$row['account']."-".$row['aplicant']."</td>";

									if(!empty($row['student_id'])){
							echo   "<td>".$row['student_id']."</td>";			
									}else{
							echo   "<td>FOR ENCODING</td>";			
									}

							echo   "</tr>";
								include('edit_delete_modal.php');
							}
					

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include('add_modal.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>
</html>