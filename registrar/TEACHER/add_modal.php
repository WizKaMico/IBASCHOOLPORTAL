<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">ENCODE TEACHER</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php" enctype="multipart/form-data">
					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Year:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="year_id">
							<?php
							include_once('../../connection/connection.php');
							$sql = "SELECT * FROM year";

							//use for MySQLi-OOP
							$query = $con->query($sql);
							while($row = $query->fetch_assoc()){
							?>	
							<option value="<?php echo $row['id']; ?>"><?php echo $row['year_name']; ?></option>
						    <?php } ?>
						</select>
					</div>
				</div>
					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Teacher:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="user_id" required>
							<?php
							include_once('../../connection/connection.php');
							$sql1 = "SELECT *,login.user_id as UID FROM login LEFT JOIN teacher_assigned ON login.user_id = teacher_assigned.user_id WHERE login.role = 'teacher'";

							//use for MySQLi-OOP
							$queries = $con->query($sql1);
							while($urow = $queries->fetch_assoc()){
							?>	
						
							<option value="<?php echo $urow['UID']; ?>"><?php echo $urow['UID']; ?></option>
						
						    <?php } ?>
						</select>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Class:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="class_id">
							<?php
							include_once('../../connection/connection.php');
							$sql1 = "SELECT * FROM class";

							//use for MySQLi-OOP
							$queries = $con->query($sql1);
							while($urow = $queries->fetch_assoc()){
							?>	
							<option value="<?php echo $urow['id']; ?>"><?php echo $urow['class_name']; ?></option>
						    <?php } ?>
						</select>
					</div>
				</div>
				
			
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>



<!-- Add New -->
<div class="modal fade" id="decode" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">DECODE TEACHER</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="delete.php" enctype="multipart/form-data">
					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">CODE:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="teacher_id">
							<?php
							include_once('../../connection/connection.php');
							$sql = "SELECT * FROM login LEFT JOIN teacher_assigned ON login.user_id = teacher_assigned.user_id WHERE login.role = 'teacher'";

							//use for MySQLi-OOP
							$query = $con->query($sql);
							while($row = $query->fetch_assoc()){
							?>	
					
							<option value="<?php echo $row['teacher_id']; ?>"><?php echo $row['teacher_id']; ?> - <?php echo $row['user_id']; ?></option>
					
						    <?php } ?>
						}
						</select>
					</div>
				</div>
				
			
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>