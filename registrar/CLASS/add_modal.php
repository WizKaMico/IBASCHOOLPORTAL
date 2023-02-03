<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add Content</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php" enctype="multipart/form-data">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Class:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="class_name" required>
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
						<label class="control-label modal-label">Room:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="room_name">
							<?php
							include_once('../../connection/connection.php');
							$sql = "SELECT * FROM room";

							//use for MySQLi-OOP
							$query = $con->query($sql);
							while($row = $query->fetch_assoc()){
							?>	
							<option value="<?php echo $row['id']; ?>"><?php echo $row['room_name']; ?></option>
						    <?php } ?>
						</select>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Strand:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="strand">
							<option value="Business, Accountancy, Management (BAM)">Business, Accountancy, Management (BAM)</option>
							<option value="Humanities, Education, Social Sciences (HESS)">Humanities, Education, Social Sciences (HESS)</option>
							<option value="Science, Technology, Engineering, Mathematics (STEM)">Science, Technology, Engineering, Mathematics (STEM)</option>
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
<div class="modal fade" id="addyear" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add Year</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add_year.php" enctype="multipart/form-data">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Year:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="year_name" required>
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
<div class="modal fade" id="addroom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add Room</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add_room.php" enctype="multipart/form-data">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Room:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="room_name" required>
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
<div class="modal fade" id="addschedule" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add Schedule</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add_schedule.php" enctype="multipart/form-data">


				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Class:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="class_id">
							<?php
							include_once('../../connection/connection.php');
							$sql = "SELECT *,class.id as CID, class_schedule.id as CSID FROM class left join class_schedule ON class.id = class_schedule.class_id";

							//use for MySQLi-OOP
							$query = $con->query($sql);
							while($row = $query->fetch_assoc()){
							?>	
							<?php if(!empty($row['CSID'])){ ?>

							<?php } else { ?>	
							<option value="<?php echo $row['CID']; ?>"><?php echo $row['class_name']; ?></option>
						    <?php } ?>
						    <?php } ?>
						</select>
					</div>
				</div>
				

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Start:</label>
					</div>
					<div class="col-sm-10">
						<input type="time" class="form-control" name="start" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">End:</label>
					</div>
					<div class="col-sm-10">
						<input type="time" class="form-control" name="end" required>
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