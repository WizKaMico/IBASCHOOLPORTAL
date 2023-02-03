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
						<label class="control-label modal-label">Title:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="title" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Under:</label>
					</div>
					<div class="col-sm-10">
                         <select class="form-control" name="under">
                         	<option value="VISION">VISION</option>
                         	<option value="MISSION">MISSION</option>
                         	<option value="CORE">CORE</option>
                         	<option value="STRANDS">STRANDS</option>
                         </select> 
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Description:</label>
					</div>
					<div class="col-sm-10">
					    <textarea cols="5" rows="10" class="form-control" name="description"></textarea>
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