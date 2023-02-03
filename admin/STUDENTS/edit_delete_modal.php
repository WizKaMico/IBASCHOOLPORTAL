<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">VIEW DETAILS</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="#">
<!-- 				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>"> -->
               <h5>STUDENT INFO</h5>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Firstname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" value="<?php echo $row['student_user_f_uname']; ?>" readonly="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Lastname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lastname" value="<?php echo $row['student_user_l_uname']; ?>" readonly="">
					</div>
				</div>
				  <h5>PARENT INFO (FATHERS)</h5>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Firstname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" value="<?php echo $row['user_f_fname']; ?>" readonly="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Lastname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lastname" value="<?php echo $row['user_l_lname']; ?>" readonly="">
					</div>
				</div>

				  <h5>PARENT INFO (MOTHERS)</h5>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Firstname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" value="<?php echo $row['user_m_fname']; ?>" readonly="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Lastname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lastname" value="<?php echo $row['user_m_lname']; ?>" readonly="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Address:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" value="<?php echo $row['user_address']; ?>" readonly="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Zip:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" value="<?php echo $row['user_zipcode']; ?>" readonly="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Gender:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" value="<?php echo $row['user_gender']; ?>" readonly="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">DOB:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" value="<?php echo $row['user_dob']; ?>" readonly="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">STRAND:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" value="<?php echo $row['user_strand']; ?>" readonly="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">PHONE:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" value="<?php echo $row['user_phone']; ?>" readonly="">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
			</form>
            </div>

        </div>
    </div>
</div>
