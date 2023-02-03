<?php
	session_start();
	require_once "../../connection/connection.php";
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
			
			</div>
	
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
					
						<th>STUDENT</th>
						<th>CLASS</th>
						<th>PERIOD</th>
						<th>GRADE</th>
						<th>CODE</th>

					</thead>
					<tbody>
						<?php
							include_once('../../connection/connection.php');
							$sql = "SELECT * FROM `student_grade` WHERE teacher_user_id = '$user_id'";

							//use for MySQLi-OOP
							$query = $con->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>";
					                 
									
									
							echo   "<td>".$row['student_user_id']."</td>
									<td>".$row['class_name']."</td>
									<td>".$row['period']."</td>
									<td>".$row['grade']."</td>
									<td>".$row['code']."</td>
									";

							

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