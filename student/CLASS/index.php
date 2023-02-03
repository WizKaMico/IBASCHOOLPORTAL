<?php
	session_start();
	$yid = $_GET['view'];
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
			
			<div class="height10">
			</div>
			<div class="row">
			
			</div>
			<div class="row">
		
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>ID</th>
						<th>CLASS</th>
						<th>YEAR</th>
						<th>SCHEDULE</th>
						<th>ROOM</th>
					</thead>
					<tbody>
						<?php
							include_once('../../connection/connection.php');
							$sql = "SELECT *,class.id as CID, class_schedule.id as CSID, room.id as ROMID FROM class LEFT JOIN class_schedule ON class.id = class_schedule.class_id LEFT JOIN room ON class.room_name = room.id LEFT JOIN year ON class.year_id = year.id WHERE year.id = '$yid'";

							//use for MySQLi-OOP
							$query = $con->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
								
									<td>".$row['CID']."</td>
							        <td>".$row['class_name']."</td>
							        <td>".$row['year_name']."</td>"; 

							        if(!empty($row['CSID'])){
							        echo"<td> START : ".$row['start']." END : ".$row['end']."</td>";
							        }else{
							        echo "<td>CLASS NO SCHEDULE</td>";	
							        }	

							        if(!empty($row['ROMID'])){
							        echo"<td>".$row['room_name']."</td>";
							        }else{
							        echo "<td>TBA</td>";	
							        }	
							   echo "</tr>";
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