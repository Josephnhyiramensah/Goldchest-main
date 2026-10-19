<div 
class="modal fade bd-example-modal-lg" 
id="tag_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="tag_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
  <div class="modal-dialog modal-lg" role="document">
	   <div class="modal-content">
        <div class="modal-header">
        		<h5 class="modal-title m-0 font-weight-bold text-primary" id="tag_create_modal_header">Tag Setup</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span>
        		</button>
  		  </div>
          <form id="tag_create_form" method="POST">
              <div class="modal-body">
                <div class="form-row">
                  <div class="col-md-12 mb-12">
                    <div id="tag_create_form_msg"></div>
                    <input type="hidden" class="form-control" name="tag_id" id="tag_id" >
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12 mb-12">
                    <label for="tag">Tag</label>
                    <input type="text" class="form-control" name="tag" id="tag">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                  <button type="button" name="tag_save_btn" id="tag_save_btn" class="btn btn-primary">Save</button>
                  <button type="button" name="tag_update_btn" id="tag_update_btn" class="btn btn-primary">Update</button>
                  <button type="submit" name="tag_cancel_btn" id="tag_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              </div>
          <?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/foot.php');?>
          </form>
	   </div>
  </div>
</div>