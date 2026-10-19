<div 
class="modal fade bd-example-modal-xl" 
id="site_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="site_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="site_create_modal_header">Site Setup</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="site_create_form" method="POST">
					<div class="form-row">
						<div class="col-md-12 mb-12">
							<label for="site_name">Site Description</label>
							<input type="text" class="form-control" name="site_name" id="site_name">
							<input type="hidden" class="form-control" name="site_id" id="site_id">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-12 mb-12">
							<label for="site_location">Location</label>
							<input type="text" class="form-control" name="site_location" id="site_location">
						</div>
					</div>
				    <div class="modal-footer">
				        <button type="button" name="site_save_btn" id="site_save_btn" class="btn btn-primary" >Save</button>
				        <button type="button" name="site_update_btn" id="site_update_btn" class="btn btn-primary" >Update</button>
				        <button type="submit" name="site_cancel_btn" id="site_cancel_btn" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				    </div>
				</form>
			</div>
		</div>
	</div>
</div>