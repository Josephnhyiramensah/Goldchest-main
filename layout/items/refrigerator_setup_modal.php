<div 
class="modal fade bd-example-modal-lg" 
id="refrigerator_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="refrigerator_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
  <div class="modal-dialog" style="max-width: 60%;" role="document">
	   <div class="modal-content">
        <div class="modal-header">
        		<h5 class="modal-title m-0 font-weight-bold text-primary" id="refrigerator_create_modal_header">refrigerator Setup</h5>
        		<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span>
        		</button>-->
  		  </div>
          <form id="refrigerator_create_form" method="POST">
              <div class="modal-body">
                <div class="form-row">
                  <div class="col-md-12 mb-12">
                    <div id="refrigerator_create_form_msg"></div>
                    <input type="hidden" class="form-control" name="refrigerator_id" id="refrigerator_id" >
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-10 mb-10">
                    <label for="refrigerator_name">Refrigerator Name</label>
                    <input type="text" class="form-control" name="refrigerator_name" id="refrigerator_name">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="refrigerator_price">Price</label>
                    <input type="text" class="form-control" name="refrigerator_price" id="refrigerator_price">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12 mb-12">
                      <ul class="nav nav-tabs nav-justified">
                        <li class="nav-item active"><a class="nav-link" aria-current="page" data-toggle="tab" href="#cubicle_list">Cubicles</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#refrigerator_price_list_div">Price List</a></li>
                      </ul>
                      <div class="tab-content">
                        <div id="cubicle_list" class="tab-pane fade show active">
                          <table table class="table table-hover table-bordered table-sm" width="100%" cellspacing="0" style="font-size: 14px" id="cubicle_list_table">
                              <tr>
                                  <th>Cubicle</th>
                                  <th class="action-td">Action</th>
                              </tr>
                              <tr id="1">
                                  <td class = "action-td">
                                      <input type="text" name="cubicle[]" class="form-control bg-light cubicle" id="cubicle1" data-id="1" style="border-width:0px">
                                  </td>
                                  <td class = "action-td">
                                      <!--<a href="#" id="delete_cubicle" data-id="1"><i class="fa fa-trash fa-sm"></i></a>-->
                                  </td>
                              </tr>
                          </table>
                        </div>
                        <div id="refrigerator_price_list_div" class="tab-pane fade">
                          <table table class="table table-hover table-bordered table-sm" width="100%" cellspacing="0" style="font-size: 14px" id="refrigerator_price_list_table">
                              <tr>
                                  <th>Applicable Date</th>
                                  <th>Price</th>
                                  <th class="action-td">Action</th>
                              </tr>
                              <tr id="pl1" data-id="1">
                                  <td class = "action-td">
                                      <input type="date" name="refrigerator_price_list_date[]" class="form-control bg-light refrigerator_price_list_date" id="refrigerator_price_list_date1" data-id="1" style="border-width:0px">
                                  </td>
                                  <td class = "amt-td">
                                      <input type="text" name="refrigerator_price_list_price[]" class="form-control bg-light refrigerator_price_list_price" id="refrigerator_price_list_price1" data-id="1" style="border-width:0px">
                                  </td>
                                  <td class = "action-td">
                                      <!--<a href="#" class="delete_refrigerator_price_list" id="delete_refrigerator_price_list1" data-id="1"><i class="fa fa-trash fa-sm"></i></a>-->
                                  </td>
                              </tr>
                          </table>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                  <button type="button" name="refrigerator_save_btn" id="refrigerator_save_btn" class="btn btn-primary">Save</button>
                  <button type="button" name="refrigerator_update_btn" id="refrigerator_update_btn" class="btn btn-primary">Update</button>
                  <button type="submit" name="refrigerator_cancel_btn" id="refrigerator_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              </div>
              <?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/foot.php');?>
          </form>
	   </div>
  </div>
</div>