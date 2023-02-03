<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">ENCODE GRADE</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php" enctype="multipart/form-data">


					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Class:</label>
					</div>
					<div class="col-sm-10">
					   <input type="hidden" class="form-control" name="class_id" value="<?php echo $xrow['class_id']; ?>" readonly="" required="">
					   <input type="hidden" class="form-control" name="year_id" value="<?php echo $year_id; ?>" readonly="" required="">
					    <input type="text" class="form-control" name="class_name" value="<?php echo $xrow['class_name']; ?>" readonly="" required="">
					    <input type="hidden" class="form-control" name="teacher_user_id" value="<?php echo $xrow['user_id']; ?>" readonly="" required="">
					</div>
				</div>
		
					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Student:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="student_user_id">
							<?php
							include_once('../../connection/connection.php');
							$sql1 = "SELECT *,login.user_id as LOGID FROM login LEFT JOIN student_assigned ON login.user_id = student_assigned.user_id LEFT JOIN year ON student_assigned.year_id = year.id WHERE login.role = 'student' AND login.account = 'activate' AND login.aplicant = 'enrolled'";

							//use for MySQLi-OOP
							$queries = $con->query($sql1);
							while($urow = $queries->fetch_assoc()){
							?>	
							<option value="<?php echo $urow['LOGID']; ?>"><?php echo $urow['LOGID']; ?></option>
						    <?php } ?>
						</select>
					</div>
				</div>


					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">PERIOD:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="period">
							
							<option value="Q1">Q1</option>
							<option value="Q2">Q2</option>
							<option value="Q3">Q3</option>
							<option value="Q4">Q4</option>
						    
						</select>
					</div>
				</div>

					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">GRADE:</label>
					</div>
					<div class="col-sm-10">
					    <input type="number" class="form-control" name="grade" required="">
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
						 <input type="hidden" class="form-control" name="class_id" value="<?php echo $xrow['class_id']; ?>" readonly="" required="">
					   <input type="hidden" class="form-control" name="year_id" value="<?php echo $year_id; ?>" readonly="" required="">
						<input type="hidden" class="form-control" name="teacher_user_id" value="<?php echo $xrow['user_id']; ?>" readonly="" required="">
						<select class="form-control" name="code">
							<?php
							include_once('../../connection/connection.php');
							$sql = "SELECT * FROM `student_grade`";

							//use for MySQLi-OOP
							$query = $con->query($sql);
							while($row = $query->fetch_assoc()){
							?>	
			
							<option value="<?php echo $row['code']; ?>">STUDENT : <?php echo $row['student_user_id']; ?> - GRADE <?php echo $row['grade']; ?> - CODE <?php echo $row['code']; ?>  - PERIOD <?php echo $row['period']; ?></option>
					
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