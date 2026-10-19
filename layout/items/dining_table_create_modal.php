<div 
class="modal fade bd-example-modal-lg" 
id="dining_table_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="dining_table_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
  <div class="modal-dialog modal-lg" role="document">
	   <div class="modal-content">
        <div class="modal-header">
        		<h5 class="modal-title m-0 font-weight-bold text-primary" id="dining_table_create_modal_header">Dining Table Setup</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span>
        		</button>
  		  </div>
          <form id="dining_table_create_form" method="POST">
              <div class="modal-body">
                <div class="form-row">
                  <div class="col-md-12 mb-12">
                    <div id="dining_table_create_form_msg"></div>
                    <input type="hidden" class="form-control" name="dining_table_id" id="dining_table_id" >
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12 mb-12">
                    <label for="dining_table">Table Description</label>
                    <input type="text" class="form-control" name="dining_table" id="dining_table">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12 mb-12">
                    <label for="dining_table_type">Table Type</label>
                    <select class="form-control bg-light" name="dining_table_type" id="dining_table_type"> 
                      <option value="EAT_IN">EAT_IN</option>
                      <option value="TAKE_AWAY">TAKE_AWAY</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                  <button type="button" name="dining_table_save_btn" id="dining_table_save_btn" class="btn btn-primary">Save</button>
                  <button type="button" name="dining_table_update_btn" id="dining_table_update_btn" class="btn btn-primary">Update</button>
                  <button type="submit" name="dining_table_cancel_btn" id="dining_table_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              </div>
          <?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/foot.php');?>
          </form>
	   </div>
  </div>
</div>