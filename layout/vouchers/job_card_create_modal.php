<div 
class="modal fade hide bd-example-modal-xl" 
id="job_card_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="job_card_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" style="max-width: 90%;" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="job_card_create_modal_header">Job Card</h5>
				<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>-->
			</div>
			<div class="modal-body">
				<form id="job_card_create_form" method="POST">
	                <div class="panel-body">
	                    <div class="form-row">
	                        <div class="col-md-4 mb-4 form-group">
	                            <input type="hidden" name="job_card_id" class="form-control bg-light" id="job_card_id">
	                            <input type="hidden" name="job_card_branch_id" class="form-control bg-light" id="job_card_branch_id">
	                            <label for="sales_debit">Debit</label>
	                            <select class="form-control" name="job_card_debit" id="job_card_debit"> 
	                                <option value="0">Please Select</option>
	                                <?php
                						$company_id = $_SESSION['company_id'];
	                                    $sql="SELECT * FROM ledgers WHERE (company_id = '$company_id' AND (tb_5=1 OR tb_5=7 
										OR tb_5=8)) OR (default_status = 'yes' AND (tb_5=1 OR tb_5=7 OR tb_5=8))
										ORDER BY ledger_desc ASC";
	                                    $result=mysqli_query($con,$sql);
										while($row=mysqli_fetch_array($result))
										{
											echo '<option value = "'.$row['ledger_id'].'">'.$row['ledger_desc'].'</option>';
										};
	                                ?>
	                            </select>
	                        </div>
	                        <div class="col-md-4 mb-4 form-group">
	                            <label for="job_card_customer">Customer</label>
	                            <input type="text" class="form-control" name="job_card_customer" id="job_card_customer">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="job_card_shelf_no">Shelf No</label>
	                            <input type="text" class="form-control" name="job_card_shelf_no" id="job_card_shelf_no">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="job_card_date">Date</label>
	                            <input type="date" class="form-control" name="job_card_date" id="job_card_date" value="<?php echo date('Y-m-d');?>">
	                        </div>
						</div>
						<div class="form-row">
	                        <div class="col-md-6 mb-6 form-group">
	                            <label for="job_card_narration">Narration</label>
	                            <input type="text" class="form-control" name="job_card_narration" id="job_card_narration">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="job_card_amount">Amount</label>
	                            <input type="text" class="form-control" name="job_card_amount" id="job_card_amount" hidden="true">
	                            <input type="text" class="form-control" name="job_card_amount_2" id="job_card_amount_2" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
							<label for="job_card_stock_amount">Amount (Inventory Used)</label>
	                            <input type="text" class="form-control" name="job_card_stock_amount" id="job_card_stock_amount" hidden="true">
	                            <input type="text" class="form-control" name="job_card_stock_amountD" id="job_card_stock_amountD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
							<label for="job_card_overhead_amount">Amount (Overhead)</label>
	                            <input type="text" class="form-control" name="job_card_overhead_amount" id="job_card_overhead_amount" hidden="true">
	                            <input type="text" class="form-control" name="job_card_overhead_amountD" id="job_card_overhead_amountD" disabled="true">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-12 mb-12" id="job_card_items_list">
								<div id="item_list">
									<ul class="nav nav-tabs nav-justified">
										<li class="nav-item active"><a class="nav-link" aria-current="page" data-toggle="tab" href="#service_item_list">SERVICE ITEMS</a></li>
										<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#job_cost">JOB COST</a></li>
									</ul>
									<div class="tab-content">
										<div id="service_item_list" class="tab-pane fade show active">
											<table table class="table table-hover table-bordered table-sm" width="100%" cellspacing="0" style="font-size: 14px" id="job_card_service_table">
												<tr>
													<th width="60%">Description</th>
													<th width="10%" class="action-td">Qty</th>
													<th width="15%" class="action-td">Price</th>
													<th width="20%" class="action-td">Amount</th>
													<th width="5%" class="action-td">Action</th>
												</tr>
												<tr id="1">
													<td>
														<input type="hidden" name="job_card_item_list_id[]" class="form-control bg-light" id="job_card_item_list_id1">
														<select class="form-control job_card_service" name="job_card_service[]" id="job_card_service1" data-id="1" style="border-width:0px"> 
															<option value="0">Please Select</option>
															<?php
																$sql="SELECT * FROM service WHERE company_id = '$company_id' ORDER BY service ASC";
																$result=mysqli_query($con,$sql);
																while($row = mysqli_fetch_array($result))
																{
																	echo '<option value ="'.$row['service_id'].'">'.$row['service'].'</option>';
																};
															?>
														</select>
													</td>
													<td>
														<input type="text" name="job_card_service_qty[]" class="form-control bg-light text-center job_card_service_qty" id="job_card_service_qty1" data-id="1" style="border-width:0px">
													</td>
													<td>
														<input type="text" name="job_card_service_price[]" class="form-control bg-light text-right job_card_service_price" id="job_card_service_price1" data-id="1" style="border-width:0px">
													</td>
													<td>
														<input type="text" name="job_card_service_amt[]" class="form-control bg-light text-right job_card_service_amt" id="job_card_service_amt1" style="border-width:0px">
													</td>
													<td>
														<!--<a href="#" id="delete_service_item" data-id="1"><i class="fa fa-trash fa-sm"></i></a>-->
													</td>
												</tr>
											</table>
										</div>
										<div id="job_cost" class="tab-pane fade">
											<ul class="nav nav-tabs nav-justified">
												<li class="nav-item active"><a class="nav-link" aria-current="page" data-toggle="tab" href="#stock_item_list">Stock Consumption</a></li>
												<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#overhead_cost_list">Other Overheads</a></li>
											</ul>
											<div class="tab-content">
												<div id="stock_item_list" class="tab-pane fade show active">
													<table table class="table table-hover table-bordered table-sm" width="100%" cellspacing="0" style="font-size: 14px" id="job_card_items_table">
														<tr>
															<th width="50%">Description</th>
															<th width="15%" class="action-td">Warehouse</th>
															<th width="10%" class="action-td">Qty</th>
															<th width="10%" class="action-td">Price</th>
															<th width="10%" class="action-td">Amount</th>
															<th width="5%" class="action-td">Action</th>
														</tr>
														<tr id="stk1">
															<td>
																<input type="hidden" name="job_card_item_list_id[]" class="form-control bg-light" id="job_card_item_list_id1">
																<select class="form-control job_card_desc" name="job_card_desc[]" id="job_card_desc1" data-id="1" style="border-width:0px"> 
																	<option value="0">Please Select</option>
																	<?php
																		$sql="SELECT * FROM stock_items WHERE company_id = '$company_id' ORDER BY stock_item ASC";
																		$result=mysqli_query($con,$sql);
																		while($row=mysqli_fetch_array($result))
																		{
																			echo '<option value ="'.$row['stock_item_id'].'">'.$row['stock_item'].'</option>';
																		}
																	?>
																</select>
															</td>
															<td>
																<select class="form-control job_card_loc_id" name="job_card_loc[]" id="job_card_loc1" data-id="1" style="border-width:0px"> 
																	<option value="0">Please Select</option>
																	<?php
																		$warehouse_id = $_SESSION['warehouse_id'];
																		$sql_wh="SELECT * FROM warehouse WHERE company_id = '$company_id' ORDER BY warehouse_desc"; 
																		$result_wh=mysqli_query($con,$sql_wh);
																		while($row_wh=mysqli_fetch_array($result_wh))
																		{
																			if($warehouse_id==$row_wh['warehouse_id'])
																			{
																				echo '<option value ="'.$row_wh['warehouse_id'].'" selected="selected">'.$row_wh['warehouse_desc'].'</option>';
																			}
																			else
																			{
																				echo '<option value ="'.$row_wh['warehouse_id'].'">'.$row_wh['warehouse_desc'].'</option>';
																			};
																		};
																	?>
																</select>
															</td>
															<td>
																<input type="text" name="job_card_qty[]" class="form-control bg-light text-center job_card_qty" id="job_card_qty1" data-id="1" style="border-width:0px">
															</td>
															<td>
																<input type="text" name="job_card_price[]" class="form-control bg-light text-right job_card_price" id="job_card_price1" data-id="1" style="border-width:0px">
															</td>
															<td>
																<input type="text" name="job_card_amt[]" class="form-control bg-light text-right job_card_amt" id="job_card_amt1" data-id="1" style="border-width:0px">
															</td>
															<td>
																<!--<a href="#" id="delete_job_card_stock_item" data-id="1"><i class="fa fa-trash fa-sm"></i></a>-->
															</td>
														</tr>
													</table>
												</div>
												<div id="overhead_cost_list" class="tab-pane fade">
													<table table class="table table-hover table-bordered table-sm" width="100%" cellspacing="0" style="font-size: 14px" id="job_card_overhead_table">
														<tr>
															<th width="50%">Description</th>
															<th width="15%" class="action-td">Amount</th>
															<th width="30%" class="action-td">Remarks</th>
															<th width="5%" class="action-td">Action</th>
														</tr>
														<tr id="oh1">
															<td>
																<input type="text" name="job_card_overhead[]" class="form-control bg-light" id="job_card_overhead1">
															</td>
															<td>
																<input type="text" name="job_card_overhead_amt[]" class="form-control bg-light text-right job_card_overhead_amt" id="job_card_overhead_amt1" style="border-width:0px">
															</td>
															<td>
																<input type="text" name="job_card_overhead_remarks[]" class="form-control bg-light" id="job_card_overhead_remarks1" style="border-width:0px">
															</td>
															<td class="action-td">
																<a href="#" class="add_job_card_overhead_row" id="add_job_card_overhead_row" data-id="1"><i class="fa fa-plus fa-sm"></i></a>
															</td>
														</tr>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" name="job_card_save_btn" id="job_card_save_btn" class="btn btn-primary" >Save</button>
	                    <button type="button" name="job_card_update_btn" id="job_card_update_btn" class="btn btn-primary">Update</button>
	                    <button type="submit" name="job_card_cancel_btn" id="job_card_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                </div>
	            </form>
			</div>
		</div>
	</div>
</div>