<div 
class="modal fade bd-example-modal-xl" 
id="item_search_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="item_search_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
  <div class="modal-dialog modal-xl" role="document">
	   <div class="modal-content">
        <div class="modal-header">
        		<h5 class="modal-title m-0 font-weight-bold text-primary" id="item_search_modal_header">Item Search</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span>
        		</button>
  		  </div>
          <form id="item_search_modal_form" method="POST">
              <div class="modal-body">
                <div class="form-row">
                  <div class="col-md-12 mb-12">
                    <label for="item_search">Search</label>
                    <input type="text" class="form-control bg-light" name="item_search" id="item_search">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12 mb-12" id="customer_list_table">

                  </div>
                </div>
              </div>
              <div class="modal-footer">
                  <button type="submit" name="item_search_cancel_btn" id="item_search_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              </div>
          <?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/foot.php');?>
          </form>
	   </div>
  </div>
</div>