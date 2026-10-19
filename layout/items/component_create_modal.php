<div 
class="modal fade bd-example-modal-xl" 
id="component_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="component_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="component_create_modal_header">component Setup</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="component_create_form" method="POST">
                    <div id="component_create_form_msg"></div>
					<div class="form-row">
						<div class="col-md-12 mb-12">
							<label for="component">Component</label>
							<input type="text" class="form-control bg-light" name="component" id="component">
							<input type="hidden" class="form-control" name="component_id" id="component_id">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-12 mb-12">
							<label for="price_per_gram">Price Per Gram</label>
							<input type="text" class="form-control bg-light" name="price_per_gram" id="price_per_gram">
						</div>
					</div>
				    <div class="modal-footer">
				        <button type="button" name="component_save_btn" id="component_save_btn" class="btn btn-primary" >Save</button>
				        <button type="button" name="component_update_btn" id="component_update_btn" class="btn btn-primary" >Update</button>
				        <button type="submit" name="component_cancel_btn" id="component_cancel_btn" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				    </div>
				</form>
			</div>
		</div>
	</div>
</div>