<div 
class="modal fade hide bd-example-modal-xl" 
id="waybill_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="waybill_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" style="max-width: 90%;" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="waybill_create_modal_header">Create Waybill</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="waybill_create_form" method="POST">
	                <div class="panel-body">
						<div id="waybill_msg"></div>
	                    <div class="form-row"  id="nds_customer_search_div" hidden>
	                        <div class="col-md-12 mb-12 form-group">
	                    		<div class="form-row">
									<div class="col-md-8 mb-8 form-group">
										<label for="customer_search_name">Search Customer</label>
										<input type="text" class="form-control" name="customer_search_name" id="customer_search_name">
									</div>
									<div class="col-md-4 mb-4 form-group">
										<label for="customer_search_name_criteria">Search Criteria</label>
										<select class="form-control" name="customer_search_name_criteria" id="customer_search_name_criteria"> 
	                                		<option value="Name">Name</option>
											<option value="Telephone">Telephone</option>
										</select>
									</div>
								</div>
	                    		<div class="form-row">
									<div class="col-md-12 mb-12 form-group scroll_search_div" id="customer_table">

									</div>
								</div>
							</div>
						</div>
	                    <div class="form-row">
	                        <div class="col-md-4 mb-4 form-group">
	                            <input type="hidden" name="waybill_id" class="form-control bg-light" id="waybill_id">
	                            <input type="hidden" name="waybill_unique" class="form-control bg-light" id="waybill_unique">
	                            <input type="hidden" name="waybill_nds_sales_id" class="form-control bg-light" id="waybill_nds_sales_id">
	                            <label for="waybill_customer_id">Customer - <a href="#" id="nds_sales_find_customer"><small>Find Customer</small></a></label>
	                            <select class="form-control" name="waybill_customer_id" id="waybill_customer_id"> 
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
	                                    	echo '<option value = "'.$row_ssc['customer_id'].'" 
												data-customer_telephone="'.$row_ssc['phone_number'].'"
												data-customer_name="'.$row_ssc['first_name'].' '.$row_ssc['last_name'].'"
											>'.$row_ssc['phone_number'].' - '.$row_ssc['first_name'].' '.$row_ssc['last_name'].'</option>';
	                                    };
	                                ?>
	                            </select>
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="waybill_customer_phone">Customer Phone Number</label>
	                            <input type="text" class="form-control" name="waybill_customer_phone" id="waybill_customer_phone" hidden="true">
	                            <input type="text" class="form-control" name="waybill_customer_phoneD" id="waybill_customer_phoneD" disabled="true">
	                            <input type="text" class="form-control" name="waybill_customer_name" id="waybill_customer_name" hidden="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="waybill_secret_code">Secret Code</label>
	                            <input type="text" class="form-control" name="waybill_secret_code" id="waybill_secret_code">
	                            <input type="text" class="form-control" name="waybill_secret_code_sent" id="waybill_secret_code_sent" hidden="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="waybill_date">Date</label>
	                            <input type="date" class="form-control" name="waybill_date" id="waybill_date" value="<?php echo date('Y-m-d');?>">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="waybill_send_code_btn">.</label>
	                    		<button type="button" name="waybill_send_code_btn" id="waybill_send_code_btn" class="btn btn-primary btn-block">Send Code</button>
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="waybill_driver">Driver</label>
	                            <input type="text" class="form-control" name="waybill_driver" id="waybill_driver">
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="waybill_driver_telephone">Driver's Telephone</label>
	                            <input type="text" class="form-control" name="waybill_driver_telephone" id="waybill_driver_telephone" value="<?php echo date('Y-m-d');?>">
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="waybill_car_number">Car Number</label>
	                            <input type="text" class="form-control" name="waybill_car_number" id="waybill_car_number">
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="waybill_destination">Destination</label>
	                            <input type="text" class="form-control" name="waybill_destination" id="waybill_destination">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="waybill_issued_by">Issued By</label>
	                            <input type="text" class="form-control" name="waybill_issued_by" id="waybill_issued_by">
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="waybill_approved_by">Approved By</label>
	                            <input type="text" class="form-control" name="waybill_approved_by" id="waybill_approved_by">
	                        </div>
	                        <div class="col-md-4 mb-4 form-group">
	                            <label for="waybill_narration">Narration</label>
	                            <input type="text" class="form-control" name="waybill_narration" id="waybill_narration">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="waybill_branch_id">Branch</label>
								<?php
									if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['user_type_id'] == 2))
									{
	                            		echo '<select class="form-control" name="waybill_branch_id" id="waybill_branch_id">';
									}
									else
									{
	                            		echo '<select class="form-control" name="waybill_branch_id" id="waybill_branch_id" hidden="true">';
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
	                            		echo '<select class="form-control" name="waybill_branch_idD" id="waybill_branch_idD" disabled="true" hidden="true">';
									}
									else
									{
	                            		echo '<select class="form-control" name="waybill_branch_idD" id="waybill_branch_idD" disabled="true">';
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
	                        <div class="col-md-12 mb-12" id="waybill_items_list">
								
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" name="waybill_save_btn" id="waybill_save_btn" class="btn btn-primary" >Save</button>
	                    <button type="button" name="waybill_update_btn" id="waybill_update_btn" class="btn btn-primary">Update</button>
	                    <button type="submit" name="waybill_cancel_btn" id="waybill_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                </div>
	            </form>
			</div>
		</div>
	</div>
</div>