<div 
class="modal fade hide bd-example-modal-xl" 
id="swap_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="swap_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" style="max-width: 95%;" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="swap_create_modal_header">Stock Sales Invoice</h5>
				<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>-->
			</div>
			<div class="modal-body">
				<form id="swap_create_form" method="POST">
	                <div class="panel-body">
	                    <div class="form-row">
	                        <div class="col-md-4 mb-4 form-group">
	                            <input type="hidden" name="swap_id" class="form-control bg-light" id="swap_id">
	                            <input type="hidden" name="swap_unique" class="form-control bg-light" id="swap_unique">
	                            <label for="swap_customer_id">Customer</label>
	                            <select class="form-control" name="swap_customer_id" id="swap_customer_id"> 
	                                <option value="0">Please Select</option>
	                                 <?php
										if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['user_type_id'] == 2))
										{
	                                    	$sql_ssc="SELECT * FROM customer WHERE company_id = '$company_id' ORDER BY phone_number ASC";
										}
										else
										{
	                                    	$sql_ssc="SELECT * FROM customer WHERE company_id = '$company_id' AND branch_id = '$branch_id' ORDER BY phone_number ASC";
										};
	                                    $result_ssc = mysqli_query($con,$sql_ssc);
	                                    while($row_ssc = mysqli_fetch_array($result_ssc))
	                                    {
	                                    	//echo '<option value = "'.$row_ssc['customer_id'].'">'.$row_ssc['first_name'].' '.$row_ssc['last_name'].'</option>';
	                                    	echo '<option value = "'.$row_ssc['customer_id'].'">'.$row_ssc['phone_number'].' - '.$row_ssc['first_name'].' '.$row_ssc['last_name'].'</option>';
	                                    };
	                                ?>
	                            </select>
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="swap_date">Date</label>
	                            <input type="date" class="form-control" name="swap_date" id="swap_date" value="<?php echo date('Y-m-d');?>">
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="swap_prepared_by">Prepared By</label>
	                            <input type="text" class="form-control" name="swap_prepared_by" id="swap_prepared_by">
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="swap_approved_by">Approved By</label>
	                            <input type="text" class="form-control" name="swap_approved_by" id="swap_approved_by">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-9 mb-9 form-group">
	                            <label for="swap_narration">Narration</label>
	                            <input type="text" class="form-control" name="swap_narration" id="swap_narration">
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="swap_branch_id">Branch</label>
								<?php
									if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['user_type_id'] == 2))
									{
	                            		echo '<select class="form-control" name="swap_branch_id" id="swap_branch_id">';
									}
									else
									{
	                            		echo '<select class="form-control" name="swap_branch_id" id="swap_branch_id" hidden="true">';
									};
								?>
	                                <option value="0">Please Select</option>
	                                 <?php

	                                    $sql_branch="SELECT * FROM branch WHERE company_id = '$company_id' ORDER BY branch_name ASC";
	                                    $result_branch = mysqli_query($con,$sql_branch);
	                                    while($row_branch = mysqli_fetch_array($result_branch))
	                                    {
											if($row_branch['branch_id']==$branch_id)
											{
	                                    		echo '<option value = "'.$row_branch['branch_id'].'" selected="selected">'.$row_branch['branch_name'].'</option>';
											}
											else
											{
	                                    		echo '<option value = "'.$row_branch['branch_id'].'">'.$row_branch['branch_name'].'</option>';
											};
	                                    };
	                                ?>
	                            </select>
								<?php
									if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['user_type_id'] == 2))
									{
	                            		echo '<select class="form-control" name="swap_branch_idD" id="swap_branch_idD" disabled="true" hidden="true">';
									}
									else
									{
	                            		echo '<select class="form-control" name="swap_branch_idD" id="swap_branch_idD" disabled="true">';
									};
								?>
	                                <option value="0">Please Select</option>
	                                 <?php

	                                    $sql_branch="SELECT * FROM branch WHERE company_id = '$company_id' ORDER BY branch_name ASC";
	                                    $result_branch = mysqli_query($con,$sql_branch);
	                                    while($row_branch = mysqli_fetch_array($result_branch))
	                                    {
											if($row_branch['branch_id']==$branch_id)
											{
	                                    		echo '<option value = "'.$row_branch['branch_id'].'" selected="selected">'.$row_branch['branch_name'].'</option>';
											}
											else
											{
	                                    		echo '<option value = "'.$row_branch['branch_id'].'">'.$row_branch['branch_name'].'</option>';
											};
	                                    };
	                                ?>
	                            </select>
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-6 mb-6" id="swap_items_consumption_list">
	                        </div>
	                        <div class="col-md-6 mb-6" id="swap_items_production_list">
								<table table class="table table-hover table-bordered table-sm" width="100%" cellspacing="0" style="font-size: 14px" id="swap_items_production_table">
									<tr>
										<th colspan="3" class="action-td">PRODUCTION</th>
									</tr>
									<tr>
										<th width="70%">Description</th>
										<th width="25%" class="action-td">Qty</th>
										<th width="5%" class="action-td">Action</th>
									</tr>
									<tr id="1">
										<td>
											<input type="hidden" name="swap_item_list_id[]" class="form-control bg-light" id="swap_item_list_id1">
											<select class="form-control swap_production_item_id" name="swap_production_item_id[]" id="swap_production_item_id1" data-id="1" style="border-width:0px"> 
												<option value="0">Please Select</option>
												<?php
													$sql="SELECT * FROM stock_items WHERE company_id = '$company_id' ORDER BY stock_item ASC";
													$result = mysqli_query($con,$sql);
													while($row = mysqli_fetch_array($result))
													{
														echo '<option value ="'.$row['stock_item_id'].'">'.$row['stock_item'].'</option>';
													};
												?>
											</select>
										</td>
										<td>
											<input type="text" name="swap_production_qty[]" class="form-control bg-light text-center swap_production_qty" id="swap_production_qty1" data-id="1" style="border-width:0px">
										</td>
										<td>
											<!--<a href="#" id="delete_swap_item" data-id="1"><i class="fa fa-trash fa-sm"></i></a>-->
										</td>
									</tr>
								</table>
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" name="swap_save_btn" id="swap_save_btn" class="btn btn-primary" >Save</button>
	                    <button type="button" name="swap_update_btn" id="swap_update_btn" class="btn btn-primary">Update</button>
	                    <button type="submit" name="swap_cancel_btn" id="swap_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                </div>
	            </form>
			</div>
		</div>
	</div>
</div>