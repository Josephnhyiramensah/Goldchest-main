<div 
class="modal fade bd-example-modal-lg" 
id="service_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="service_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
  <div class="modal-dialog modal-lg" role="document">
	   <div class="modal-content">
        <div class="modal-header">
        		<h5 class="modal-title m-0 font-weight-bold text-primary" id="service_create_modal_header">Service Setup</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span>
        		</button>
  		  </div>
          <form id="service_create_form" method="POST">
              <div class="modal-body">
                <div class="form-row">
                  <div class="col-md-12 mb-12">
                    <div id="service_create_form_msg"></div>
                    <input type="hidden" class="form-control" name="service_id" id="service_id" >
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-10 mb-10">
                    <label for="service_name">Service</label>
                    <input type="text" class="form-control" name="service_name" id="service_name">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="service_price">Price</label>
                    <input type="text" class="form-control" name="service_price" id="service_price">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                  <button type="button" name="service_save_btn" id="service_save_btn" class="btn btn-primary">Save</button>
                  <button type="button" name="service_update_btn" id="service_update_btn" class="btn btn-primary">Update</button>
                  <button type="submit" name="service_cancel_btn" id="service_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              </div>
          <?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/foot.php');?>
          </form>
	   </div>
  </div>
</div>