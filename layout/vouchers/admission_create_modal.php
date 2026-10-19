<div 
class="modal fade hide bd-example-modal-xl" 
id="admission_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="admission_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" style="max-width: 95%;" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="admission_create_modal_header">Admission Voucher Creation</h5>
				<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>-->
			</div>
			<div class="modal-body">
				<form id="admission_create_form" method="POST">
	                <div class="panel-body">
					<input type="hidden" name="admission_id" class="form-control bg-light" id="admission_id">
	                    <div class="form-row adm">
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="admission_deseased">Deseased</label>
	                            <input type="text" name="admission_deseased" class="form-control bg-light" id="admission_deseased">
	                        </div>
	                        <div class="col-md-1 mb-1 form-group">
	                            <label for="admission_age">Age</label>
	                            <input type="text" class="form-control bg-light" name="admission_age" id="admission_age">
	                        </div>
	                        <div class="col-md-1 mb-1 form-group">
	                            <label for="admission_gender">Sex</label>
	                            <select class="form-control bg-light" name="admission_gender" id="admission_gender"> 
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
	                        <div class="col-md-1 mb-1 form-group">
	                            <label for="admission_tag">Tag</label>
								<select class="form-control bg-light" name="admission_tag" id="admission_tag"> 
									<option value="0">Please Select</option>
									<?php
										$sql="SELECT * FROM tag WHERE company_id = '$company_id' AND branch_id = '$branch_id' ORDER BY tag ASC";
										$result=mysqli_query($con,$sql);
										while($row=mysqli_fetch_array($result))
										{
											echo '<option value = "'.$row['tag_id'].'">'.$row['tag'].'</option>';
										};
									?>
								</select>
	                        </div>
	                        <div class="col-md-4 mb-4 form-group" id="admission_refrigerator_initial_div">
	                            <label for="admission_refrigerator_initial">Refrigerator</label>
								<select class="form-control bg-light" name="admission_refrigerator_initial" id="admission_refrigerator_initial"> 
									<option value="0">Please Select</option>
									<?php
										$sql_ref_select = "SELECT * FROM refrigerator WHERE company_id = '$company_id' AND branch_id = '$branch_id' 
										ORDER BY refrigerator ASC";
										$result_ref_select = mysqli_query($con,$sql_ref_select);
										while($row_ref_select = mysqli_fetch_array($result_ref_select))
										{
											echo '<option value = "'.$row_ref_select['refrigerator_id'].'">'.$row_ref_select['refrigerator'].'</option>';
										};
									?>
								</select>
	                        </div>
	                        <div class="col-md-2 mb-2 form-group" id="admission_refrigerator_cubible_initial_div" hidden="true">
	                            <!--<label for="admission_refrigerator_cubible_initial">Cubicle No</label>
								<select class="form-control bg-light" name="admission_refrigerator_cubible_initial" id="admission_refrigerator_cubible_initial"> 
									<option value="0">Please Select</option>
									<?php
										/*$sql="SELECT * FROM cubicle WHERE company_id = '$company_id' AND branch_id = '$branch_id' 
										ORDER BY refrigerator ASC";
										$result = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($result))
										{
											echo '<option value = "'.$row['refrigerator_id'].'">'.$row['refrigerator'].'</option>';
										};*/
									?>
								</select>-->
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="admission_certificate">Certificate No</label>
	                            <input type="text" class="form-control bg-light" name="admission_certificate" id="admission_certificate">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="admission_date">Admission Date</label>
	                            <input type="date" class="form-control bg-light" name="admission_date" id="admission_date" value="<?php echo $date_today;?>">
	                            <input type="date" class="form-control bg-light" name="admission_dateD" id="admission_dateD" value="<?php echo $date_today;?>" disabled="true" hidden="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group adm">
	                            <label for="discharge_date">Discharge Date</label>
	                            <input type="date" class="form-control bg-light" name="discharge_date" id="discharge_date" hidden = "true">
	                            <input type="date" class="form-control bg-light" name="discharge_dateD" id="discharge_dateD" disabled = "true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group adm">
	                            <label for="admission_cause_of_death">Cause of Death</label>
	                            <input type="text" class="form-control bg-light" name="admission_cause_of_death" id="admission_cause_of_death">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group adm">
	                            <label for="admission_place_of_death">Place of Death</label>
	                            <input type="text" class="form-control bg-light" name="admission_place_of_death" id="admission_place_of_death">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group adm">
	                            <label for="admission_pathologist">Pathologist</label>
	                            <input type="text" class="form-control bg-light" name="admission_pathologist" id="admission_pathologist">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group adm">
	                            <label for="admission_attendant">Attendant</label>
	                            <input type="text" class="form-control bg-light" name="admission_attendant" id="admission_attendant">
	                        </div>
	                    </div>
	                    <div class="form-row adm">
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="admission_relative">Relative</label>
	                            <input type="text" class="form-control bg-light" name="admission_relative" id="admission_relative">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="admission_relative_phone">Relative Telephone</label>
	                            <input type="text" class="form-control bg-light" name="admission_relative_phone" id="admission_relative_phone">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="admission_relative_address">Relative Address</label>
	                            <input type="text" class="form-control bg-light" name="admission_relative_address" id="admission_relative_address">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="admission_total_stock_amount">Total Stock Bill</label>
	                            <input type="text" class="form-control" name="admission_total_stock_amount" id="admission_total_stock_amount" hidden="true">
	                            <input type="text" class="form-control" name="admission_total_stock_amountD" id="admission_total_stock_amountD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="admission_total_service_amount">Total Service Bill</label>
	                            <input type="text" class="form-control" name="admission_total_service_amount" id="admission_total_service_amount" hidden="true">
	                            <input type="text" class="form-control" name="admission_total_service_amountD" id="admission_total_service_amountD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="admission_total_amount">Total Amount</label>
	                            <input type="text" class="form-control" name="admission_total_amount" id="admission_total_amount" hidden="true">
	                            <input type="text" class="form-control" name="admission_total_amountD" id="admission_total_amountD" disabled="true">
	                        </div>
	                    </div>
							
						<ul class="nav nav-tabs nav-justified">
							<li class="nav-item active"><a class="nav-link" aria-current="page" data-toggle="tab" href="#admission_bill_list_tab"><strong>BILLS</strong></a></li>
							<li class="nav-item"><a class="nav-link adm" data-toggle="tab" href="#admission_receipt_list_tab"><strong>RECEIPTS</strong></a></li>
							<li class="nav-item"><a class="nav-link adm" data-toggle="tab" href="#admission_refrigerator_list_tab"><strong>REFRIGERATOR</strong></a></li>
						</ul>
						<div class="tab-content">
							<div id="admission_bill_list_tab" class="tab-pane fade show active">
								<div class="form-row">
									<div class="col-md-6 mb-6">
										<div id="admission_stock_list">
											<table table class="table table-hover table-bordered table-sm" width="100%" cellspacing="0" style="font-size: 14px" id="admission_stock_list_table">
												<tr class="action-td">
													<th colspan="5">STOCK ITEMS</th>
												</tr>
												<tr>
													<th width="25%">Item Description</th>
													<th width="10%" class="action-td">Qty</th>
													<th width="20%" class="action-td">Warehouse</th>
													<th width="15%" class="action-td">Price</th>
													<th width="20%" class="action-td">Amount</th>
													<th width="10%" class="action-td">Action</th>
												</tr>
												<tr id="stk1">
													<td>
														<select class="form-control admission_stock_item_id bg-light" name="admission_stock_item_id[]" id="admission_stock_item_id1" data-id="1" style="border-width:0px"> 
															<option value="0">Please Select</option>
															<?php
																$sql="SELECT * FROM stock_items WHERE company_id = '$company_id' AND branch_id ='$branch_id'
																ORDER BY stock_item ASC";
																$result = mysqli_query($con,$sql);
																while($row = mysqli_fetch_array($result))
																{
																	echo '<option value = "'.$row['stock_item_id'].'">'.$row['stock_item'].'</option>';
																};
															?>
														</select>
													</td>
													<td class = "action-td">
														<input type="text" name="admission_stock_qty[]" class="form-control bg-light admission_stock_qty text-center" id="admission_stock_qty1" data-id="1" style="border-width:0px">
													</td>
													<td>
														<select class="form-control admission_warehouse_id bg-light" name="admission_warehouse_id[]" id="admission_warehouse_id1" data-id="1" style="border-width:0px"> 
															<option value="0">Please Select</option>
															<?php
																$sql_wh="SELECT * FROM warehouse WHERE company_id = '$company_id'
																ORDER BY warehouse_desc ASC";
																$result_wh = mysqli_query($con,$sql_wh);
																while($row_wh = mysqli_fetch_array($result_wh))
																{
																	echo '<option value = "'.$row_wh['warehouse_id'].'">'.$row_wh['warehouse_desc'].'</option>';
																};
															?>
														</select>
													</td>
													<td class = "action-td">
														<input type="text" name="admission_stock_price[]" class="form-control bg-light admission_stock_price text-right" id="admission_stock_price1" data-id="1" style="border-width:0px">
													</td>
													<td class = "action-td">
														<input type="text" name="admission_stock_amount[]" class="form-control bg-light admission_stock_amount text-right" id="admission_stock_amount1" data-id="1" style="border-width:0px" hidden="true">
														<input type="text" name="admission_stock_amountD[]" class="form-control bg-light admission_stock_amountD text-right" id="admission_stock_amountD1" data-id="1" style="border-width:0px" disabled="true">
													</td>
													<td class = "action-td">
														<!--<a href="#" id="delete_admission_stock" data-id="1"><i class="fa fa-trash fa-sm"></i></a>-->
													</td>
												</tr>
											</table>
											<table table class="table table-hover table-bordered table-sm" width="100%" cellspacing="0" style="font-size: 14px" id="admission_stock_list_table_total">
												<tr>
													<th width="70%" class="amt-td" colspan="3">TOTAL ITEMS</th>
													<th width="20%" class="action-td">
														<input type="text" name="admission_stock_total" class="form-control bg-light admission_stock_total text-right" id="admission_stock_total" style="border-width:0px" hidden="true">
														<input type="text" name="admission_stock_totalD" class="form-control bg-light admission_stock_totalD text-right" id="admission_stock_totalD" style="border-width:0px" disabled="true">
													</th>
													<th width="10%" class="action-td"></th>
												</tr>
											</table>
										</div>
									</div>
									<div class="col-md-6 mb-6">
										<div id="admission_service_list">
											<table table class="table table-hover table-bordered table-sm" width="100%" cellspacing="0" style="font-size: 14px" id="admission_service_list_table">
												<tr class="action-td">
													<th colspan="5">SERVICE ITEMS</th>
												</tr>
												<tr>
													<th width="35%">Service Description</th>
													<th width="15%" class="action-td">Qty</th>
													<th width="20%" class="action-td">Price</th>
													<th width="20%" class="action-td">Amount</th>
													<th width="10%" class="action-td">Action</th>
												</tr>
												<tr id="svr1">
													<td>
														<select class="form-control admission_ledger_id bg-light" name="admission_ledger_id[]" id="admission_ledger_id1" data-id="1" style="border-width:0px"> 
															<option value="0">Please Select</option>
															<?php
																$sql="SELECT * FROM ledgers WHERE (company_id = '$company_id' AND tb_2=3 AND branch_id ='$branch_id') OR 
																(default_status = 'Yes' AND tb_2=3) ORDER BY ledger_desc ASC";
																$result=mysqli_query($con,$sql);
																while($row = mysqli_fetch_array($result))
																{
																	echo '<option value = "'.$row['ledger_id'].'">'.$row['ledger_desc'].'</option>';
																};
															?>
														</select>
													</td>
													<td class = "action-td">
														<input type="text" name="admission_service_qty[]" class="form-control bg-light admission_service_qty text-center" id="admission_service_qty1" data-id="1" style="border-width:0px">
													</td>
													<td class = "action-td">
														<input type="text" name="admission_service_price[]" class="form-control bg-light admission_service_price text-right" id="admission_service_price1" data-id="1" style="border-width:0px">
													</td>
													<td class = "action-td">
														<input type="text" name="admission_service_amount[]" class="form-control bg-light admission_service_amount text-right" id="admission_service_amount1" data-id="1" style="border-width:0px"hidden="true">
														<input type="text" name="admission_service_amountD[]" class="form-control bg-light admission_service_amountD text-right" id="admission_service_amountD1" data-id="1" style="border-width:0px" disabled="true">
													</td>
													<td class = "action-td">
														<!--<a href="#" id="delete_admission_service" data-id="1"><i class="fa fa-trash fa-sm"></i></a>-->
													</td>
												</tr>
											</table>
											<table table class="table table-hover table-bordered table-sm" width="100%" cellspacing="0" style="font-size: 14px" id="admission_service_list_table_total">
												<tr>
													<th width="70%" class="amt-td" colspan="3">TOTAL SERVICE</th>
													<th width="20%" class="action-td">
														<input type="text" name="admission_service_total" class="form-control bg-light admission_service_total text-right" id="admission_service_total" style="border-width:0px" hidden="true">
														<input type="text" name="admission_service_totalD" class="form-control bg-light admission_service_totalD text-right" id="admission_service_totalD" style="border-width:0px" disabled="true">
													</th>
													<th width="10%" class="action-td"></th>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div id="admission_receipt_list_tab" class="tab-pane fade adm">
							</div>
							<div id="admission_refrigerator_list_tab" class="tab-pane fade adm">
								<div class="form-row">
									<div class="col-md-12 mb-12">
										<div id="admission_refrigerator_list">
											<table table class="table table-hover table-bordered table-sm" width="100%" cellspacing="0" style="font-size: 14px" id="admission_refrigerator_list_table">
												<tr class="action-td">
													<th colspan="5">REFRIGERATOR</th>
												</tr>
												<tr>
													<th width="45%">Refrigerator</th>
													<th width="15%">Cubicle</th>
													<th width="15%" class="action-td">Date Admitted</th>
													<th width="15%" class="action-td">Date Discharged</th>
													<th width="10%" class="action-td">Action</th>
												</tr>
												<tr id="ref1">
													<td>
														<select class="form-control bg-light admission_refrigerator_id" name="admission_refrigerator_id[]" id="admission_refrigerator_id1" data-id="1"> 
															<option value="0">Please Select</option>
															<?php
																$sql="SELECT * FROM refrigerator WHERE company_id = '$company_id' AND branch_id = '$branch_id' 
																ORDER BY refrigerator ASC";
																$result = mysqli_query($con,$sql);
																while($row = mysqli_fetch_array($result))
																{
																	echo '<option value = "'.$row['refrigerator_id'].'">'.$row['refrigerator'].'</option>';
																};
															?>
														</select>
													</td>
													<td>
														<div id="admission_refrigerator_cubicle_div1"></div>
													</td>
													<td class = "action-td">
														<input type="date" name="admission_refrigerator_date_admitted[]" class="form-control bg-light admission_refrigerator_date_admitted text-center" id="admission_refrigerator_date_admitted1" data-id="1" style="border-width:0px" value="<?php echo $date_today;?>">
													</td>
													<td class = "action-td">
														<input type="date" name="admission_refrigerator_date_discharge[]" class="form-control bg-light admission_refrigerator_date_discharge text-right" id="admission_refrigerator_date_discharge1" data-id="1" style="border-width:0px">
													</td>
													<td class = "action-td">
														<!--<a href="#" id="delete_admission_refrigerator_list_row" data-id="1"><i class="fa fa-trash fa-sm"></i></a>-->
													</td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" name="admission_save_btn" id="admission_save_btn" class="btn btn-primary">Save</button>
	                    <button type="button" name="admission_save_bill_btn" id="admission_save_bill_btn" class="btn btn-primary">Save1</button>
	                    <button type="button" name="admission_update_btn" id="admission_update_btn" class="btn btn-primary">Update</button>
	                    <button type="submit" name="admission_cancel_btn" id="admission_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                </div>
	            </form>
          		<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/foot.php');?>
			</div>
		</div>
	</div>
</div>