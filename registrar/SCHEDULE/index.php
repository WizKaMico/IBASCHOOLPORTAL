<?php
	session_start();
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
			
				<a href="print_pdf.php" class="btn btn-success pull-right" style="background-color:#2c3e50; border-color:#2c3e50;"><span class="glyphicon glyphicon-print"></span> PDF</a>
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
					

						<th>EMAIL</th>
						<th>ROLE</th>
						<th>ASSIGNED</th>
						<th>STATUS</th>
					</thead>
					<tbody>
						<?php
							include_once('../../connection/connection.php');
							$sql = "SELECT * FROM login LEFT JOIN teacher_assigned ON login.user_id = teacher_assigned.user_id LEFT JOIN class ON teacher_assigned.class_id = class.id LEFT JOIN year ON class.year_id = year.id LEFT JOIN class_schedule ON class.id = class_schedule.class_id WHERE login.role = 'teacher'";

							//use for MySQLi-OOP
							$query = $con->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>";
					               
									
							echo   "<td>".$row['emailAdd']."</td>
									<td>".$row['role']."</td>
									<td>".$row['account']."</td>"; 
                                 
                                 if(!empty($row['teacher_id'])){
                                 	echo "<td>".$row['teacher_id']." - ASSIGNED | CLASS ".$row['class_name']." | ".strtoupper($row['year_name'])." </td>";
                                 }else{
                                 	echo "<td>NOT YET ASSIGNED</td>"; 
                                 }

								echo "</tr>";
								
							}
					

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

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