<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">ENCODE STUDENT</h4></center>
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
						<label class="control-label modal-label">Student:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="user_id">
							<?php
							include_once('../../connection/connection.php');
							$sql1 = "SELECT * FROM login WHERE role = 'student' AND account = 'activate' AND aplicant = 'enrolled'";

							//use for MySQLi-OOP
							$queries = $con->query($sql1);
							while($urow = $queries->fetch_assoc()){
							?>	
							<option value="<?php echo $urow['user_id']; ?>"><?php echo $urow['user_id']; ?></option>
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
                <center><h4 class="modal-title" id="myModalLabel">DECODE STUDENT</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="delete.php" enctype="multipart/form-data">
					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">CODE:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="student_id">
							<?php
							include_once('../../connection/connection.php');
							$sql = "SELECT * FROM login LEFT JOIN student_assigned ON login.user_id = student_assigned.user_id WHERE login.role = 'student'";

							//use for MySQLi-OOP
							$query = $con->query($sql);
							while($row = $query->fetch_assoc()){
							?>	
							<?php if(!empty($row['student_id'])){ ?>
							<option value="<?php echo $row['student_id']; ?>"><?php echo $row['student_id']; ?> - <?php echo $row['user_id']; ?></option>
						   <?php } else { ?>
                           
                           <?php } ?>
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