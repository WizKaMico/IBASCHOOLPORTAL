<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['CID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Class</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['CID']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Class:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="class_name" value="<?php echo $row['class_name']; ?>">
					</div>
				</div>

					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Year:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="year_id">

							<?php
							include_once('../../connection/connection.php');
							$sql1 = "SELECT * FROM year";

							//use for MySQLi-OOP
							$queries = $con->query($sql1);
							while($xrow = $queries->fetch_assoc()){
							?>	
							<option value="<?php echo $xrow['id']; ?>"><?php echo $xrow['year_name']; ?></option>
						    <?php } ?>
						</select>
					</div>



				</div>

						<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Room:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="room_name">
							<?php
							include_once('../../connection/connection.php');
							$sql2 = "SELECT * FROM room";

							//use for MySQLi-OOP
							$quer2 = $con->query($sql2);
							while($rrow = $quer2->fetch_assoc()){
							?>	
							<option value="<?php echo $rrow['id']; ?>"><?php echo $rrow['room_name']; ?></option>
						    <?php } ?>
						</select>
					</div>
				</div>

				<?php if(!empty($row['CSID'])){ ?>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Start:</label>
					</div>
					<div class="col-sm-10">
						<input type="time" class="form-control" name="start" value="<?php echo $row['start']; ?>" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">End:</label>
					</div>
					<div class="col-sm-10">
						<input type="time" class="form-control" name="end"  value="<?php echo $row['end']; ?>" required>
					</div>
				</div>
					


				<?php } else { ?>
				
				<?php echo "NO SCHEDULE"; ?>	

				<?php } ?>	
				
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['CID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Class</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete Class</p>
				<h2 class="text-center"><?php echo $row['class_name']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['CID']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>