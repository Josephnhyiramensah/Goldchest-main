<div 
class="modal fade hide bd-example-modal-xl"
id="bulk_sales_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="bulk_sales_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" style="max-width: 95%;" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="bulk_sales_create_modal_header">Bulk Sales Invoice</h5>
				<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>-->
			</div>
			<div class="modal-body">
				<form id="bulk_sales_create_form" method="POST">
					<div class="panel-body">
						<div class="form-row">
							<div class="col-md-6 mb-6 form-group">
								<div class="form-row">
									<div class="col-md-5 mb-5 form-group">
										<input type="hidden" name="bulk_sales_id" class="form-control bg-light" id="bulk_sales_id">
										<label for="bulk_sales_debit">Debit Ledger</label>
										<select class="form-control" name="bulk_sales_debit" id="bulk_sales_debit"> 
											<option value="0">Please Select</option>
											<?php
												$company_id = $_SESSION['company_id'];
												$sql="SELECT * FROM ledgers WHERE (`company_id`= '$company_id' AND `tb_1`= 1) OR 
												(`default_status`= 'Yes' AND `tb_1`= 1) ORDER BY ledger_desc ASC";
												$result=mysqli_query($con,$sql);
													while($row=mysqli_fetch_array($result))
													{
												?>
														<option value = "<?php echo($row['ledger_id'])?>" >
														<?php echo($row['ledger_desc']) ?>
														</option>
												<?php
													}               
											?>
										</select>
									</div>
									<div class="col-md-4 mb-4 form-group">
										<label for="bulk_sales_credit">Credit Ledger</label>
										<select class="form-control" name="bulk_sales_credit" id="bulk_sales_credit" hidden="true"> 
											<option value="0">Please Select</option>
											<?php
												$sql="SELECT * FROM ledgers ORDER BY ledger_desc ASC";
												$result=mysqli_query($con,$sql);
												while($row=mysqli_fetch_array($result))
												{
												?>
												<option value = "<?php echo($row['ledger_id'])?>" >
													<?php echo($row['ledger_desc']) ?>
												</option>
												<?php
												}               
											?>
										</select>
										<select class="form-control" name="bulk_sales_creditD" id="bulk_sales_creditD" disabled="true"> 
											<option value="0">Please Select</option>
											<?php
												$sql="SELECT * FROM ledgers ORDER BY ledger_desc ASC";
												$result=mysqli_query($con,$sql);
												while($row=mysqli_fetch_array($result))
												{
												?>
												<option value = "<?php echo($row['ledger_id'])?>" >
													<?php echo($row['ledger_desc']) ?>
												</option>
												<?php
												}               
											?>
										</select>
									</div>
									<div class="col-md-3 mb-3 form-group">
										<label for="bulk_sales_date">Date</label>
										<input type="date" class="form-control" name="bulk_sales_date" id="bulk_sales_date" value="<?php echo $date_today;?>">
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-5 mb-5 form-group">
										<label for="bulk_sales_supplied_by">Supplied By</label>
										<input type="text" class="form-control" name="bulk_sales_supplied_by" id="bulk_sales_supplied_by">
									</div>
									<div class="col-md-3 mb-3 form-group">
										<label for="bulk_sales_phone_no">Phone No</label>
										<input type="text" class="form-control" name="bulk_sales_phone_no" id="bulk_sales_phone_no">
									</div>
									<div class="col-md-4 mb-4 form-group">
										<label for="bulk_sales_location">Location</label>
										<input type="text" class="form-control" name="bulk_sales_location" id="bulk_sales_location">
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-12 mb-12 form-group">
										<label for="bulk_sales_narration">Narration</label>
										<input type="text" class="form-control" name="bulk_sales_narration" id="bulk_sales_narration">
									</div>
								</div>
							</div>
							<div class="col-md-6 mb-6 form-group">
								<div class="form-row">
									<div class="col-md-12 mb-12 scroll_card_bulk_sales_ledger_list" id="bulk_sales_payment_list_div">
										<table class="table table-hover table-bordered table-sm" id="bulk_sales_payment_list_table" width="100%" cellspacing="0">
											<thead>
												<tr>
													<th class = "action-td" colspan="4"><H6><strong>CUSTOMER DIRECT PAYMENT LIST</strong></H6></th>
												</tr>
												<tr data-id="0">
													<th class="action-td" width="40%"><a href="#" data-toggle="" id="new_bulk_sales_payment_ledger">LEDGER <small>(click to add)<small></a></th>
													<th class="action-td" width="25%">AMOUNT</th>
													<th class="action-td" width="25%">MODE</th>
													<th class="action-td" width="10%">ACTION</th>
												</tr>
											</thead>
												<tbody class="pv-table-body" id="bulk_sales_payment_list_table_body">
													<tr id="1">
														<td>
															<input type="hidden" class="form-control bg-light" name="bulk_sales_payment_ledger_group_id[]" id="bulk_sales_payment_ledger_group_id1">
															<select class="form-control bulk_sales_payment_ledger_id" name="bulk_sales_payment_ledger_id[]" id="bulk_sales_payment_ledger_id1"> 
																<option value="0">Please Select</option>
																<?php
																	$company_id = $_SESSION['company_id'];
																	$sql="SELECT * FROM `ledgers` WHERE (`company_id` = '$company_id' AND `tb_4`= 4) OR 
																	(`company_id` = '$company_id' AND `tb_4`= 6) OR (`company_id` = '$company_id' AND 
																	`tb_4`= 7) OR (default_status = 'yes' AND tb_4 = 6) ORDER BY ledger_desc ASC";
																	$result=mysqli_query($con,$sql);
																	while($row=mysqli_fetch_array($result))
																	{
																	?>
																	<option value = "<?php echo($row['ledger_id'])?>" >
																		<?php echo($row['ledger_desc']) ?>
																	</option>
																	<?php
																	}               
																?>
															</select>
														</td>
														<td>
															<input type="text" class="form-control bg-light bulk_sales_payment_amount text-right" name="bulk_sales_payment_amount[]" id="bulk_sales_payment_amount1">
														</td>
														<td>
															<select class="form-control bg-light" name="bulk_sales_payment_mode[]" id="bulk_sales_payment_mode1"> 
																<option value="0">Please Select</option>
																<option value="Cash">Cash</option>
																<option value="Cheque">Cheque</option>
																<option value="MoMo">MoMo</option>
																<option value="Bank_Transfer">Bank Transfer</option>
																<option value="Payment_Order">Payment Order</option>
																<option value="Swift">Swift</option>
																<option value="Visa">Visa</option>
																<option value="PayPal">PayPal</option>
																<option value="Credit_Card">Credit Card</option>
																<option value="Debit_Card">Debit Card</option>
															</select>
														</td>
														<td>
														</td>
													</tr>
												</tbody>
										</table>
									</div>
									<table class="table table-hover table-bordered table-sm" id="bulk_sales_payment_list_total_table" width="100%" cellspacing="0">
										<thead>
											<tr data-id="0">
												<th class="action-td" width="40%">TOTAL</th>
												<th class="action-td" width="25%">
													<input type="text" class="form-control bg-light text-right" name="bulk_sales_payment_amount_total" id="bulk_sales_payment_amount_total">
												</th>
												<th class="action-td" width="25%"></th>
												<th class="action-td" width="10%"></th>
											</tr>
										</thead>
									</table>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-12 mb-12 form-group">
								<label for="bulk_sales_search_pending">Search</label>
								<input type="text" class="form-control" name="bulk_sales_search_pending" id="bulk_sales_search_pending" placeholder="Type to search pending goods by weight">
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-12 mb-12 scroll-card-body">
								<div class="table-responsive" id="bulk_sales_pending_list_search_table_div">
									
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-12 mb-12 scroll-card-body">
								<div class="table-responsive" id="bulk_sales_selected_item_list_table_div">
									<table class="table table-hover table-bordered table-sm" id="bulk_sales_selected_item_list_table" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th class = "action-td" colspan="11"><H4>SELECTED GOODS</H4></th>
											</tr>
											<tr data-id="0">
												<th class="action-td" width="15%">SUPPLIER</th>
												<th class="action-td" width="10%">GRAMS</th>
												<th class="action-td" width="10%">WATER</th>
												<th class="action-td" width="5%">DENSITY</th>
												<th class="action-td" width="5%">KARAT</th>
												<th class="action-td" width="10%">POUNDS</th>
												<th class="action-td" width="7%">PRICE</th>
												<th class="action-td" width="10%">AMOUNT</th>
												<th class="action-td" width="8%">SELLING PRICE</th>
												<th class="action-td" width="15%">SALES AMOUNT</th>
												<th class="action-td" width="5%">ACTION</th>
											</tr>
										</thead>
										<tbody class="pv-table-body" id="bulk_sales_selected_item_list_table_body">
												<?php
													/*$i = 0;
													$query_bulk_sales_item_list = "SELECT * FROM purchases WHERE company_id = '".$_SESSION['company_id']."' ORDER BY date DESC";
													$query_run_bulk_sales_item_list = mysqli_query($con, $query_bulk_sales_item_list);
													if (mysqli_num_rows($query_run_bulk_sales_item_list) > 0)
													{
														while($row_bulk_sales_item_list = mysqli_fetch_assoc($query_run_bulk_sales_item_list))
														{
															$i++;
															$purchase_id = $row_bulk_sales_item_list['purchase_id'];
															//$query_sold_item_list = "SELECT * FROM sold_items WHERE purchase_id = '$purchase_id'";
															$query_sold_item_list = "SELECT SUM(grams) AS weight, SUM(water) AS water, SUM(amount) AS amount 
															FROM sold_items WHERE purchase_id = '$purchase_id'";
															$query_run_sold_item_list = mysqli_query($con, $query_sold_item_list);
															if (mysqli_num_rows($query_run_sold_item_list) > 0)
															{
																$row_sold_item_list = mysqli_fetch_assoc($query_run_sold_item_list);
																$sold_weight = $row_sold_item_list['weight'];
																$sold_water = $row_sold_item_list['water'];
																$sold_amount = $row_sold_item_list['amount'];
															}
															else
															{
																$sold_weight = 0;
																$sold_water = 0;
																$sold_amount = 0;
															};
															$pending_weight = $row_bulk_sales_item_list['weight'] - $sold_weight;
															$pending_water = $row_bulk_sales_item_list['water'] - $sold_water;
															$pending_amount = $row_bulk_sales_item_list['amount'] - $sold_amount;
															if($pending_weight > 5)
															{
																?>
																<tr id="bulk_sales_item_list<?php echo $i;?>" data-id="<?php echo $i;?>">
																	<td width="15%">
																		<?php echo $row_bulk_sales_item_list['supplier'];?>
																		<input type="hidden" class="form-control" name="bulk_sales_supplier[]" id="bulk_sales_supplier<?php echo $i;?>" value="<?php echo $row_bulk_sales_item_list['supplier'];?>">
																	</td>
																	<td class="action-td" width="10%">
																		<?php echo $row_bulk_sales_item_list['weight'];?>
																		<input type="hidden" class="form-control" name="bulk_sales_purchase_id[]" id="bulk_sales_purchase_id<?php echo $i;?>" value="<?php echo $row_bulk_sales_item_list['purchase_id'];?>">
																		<input type="hidden" class="form-control" name="bulk_sales_product_id[]" id="bulk_sales_product_id<?php echo $i;?>" value="<?php echo $row_bulk_sales_item_list['product_id'];?>">
																		<input type="hidden" class="form-control" name="bulk_sales_purity[]" id="bulk_sales_purity<?php echo $i;?>" value="<?php echo $row_bulk_sales_item_list['purity'];?>">
																		<input type="hidden" class="form-control" name="bulk_sales_price_per_pound[]" id="bulk_sales_price_per_pound<?php echo $i;?>" value="<?php echo $row_bulk_sales_item_list['price_per_pound'];?>">
																		<input type="hidden" class="form-control" name="bulk_sales_pieces[]" id="bulk_sales_pieces<?php echo $i;?>" value="<?php echo $row_bulk_sales_item_list['pieces'];?>">
																		<input type="text" class="form-control bulk_sales_weight text-center" name="bulk_sales_weight[]" id="bulk_sales_weight<?php echo $i;?>" value="<?php echo $pending_weight;?>">
																	</td>
																	<td class="action-td" width="10%">
																		<?php echo $row_bulk_sales_item_list['water'];?>
																		<input type="text" class="form-control bulk_sales_water text-center" name="bulk_sales_water[]" id="bulk_sales_water<?php echo $i;?>" value="<?php echo $pending_water;?>">
																	</td>
																	<td class="action-td" width="5%">
																		<?php echo $row_bulk_sales_item_list['density'];?>
																		<input type="hidden" class="form-control text-center" name="bulk_sales_density[]" id="bulk_sales_density<?php echo $i;?>" value="<?php echo $row_bulk_sales_item_list['density'];?>">
																		<input type="text" class="form-control text-center" name="bulk_sales_densityD[]" id="bulk_sales_densityD<?php echo $i;?>" value="<?php echo $row_bulk_sales_item_list['density'];?>" disabled="true">
																	</td>
																	<td class="action-td" width="5%">
																		<?php echo $row_bulk_sales_item_list['karat'];?>
																		<input type="hidden" class="form-control text-center" name="bulk_sales_karat[]" id="bulk_sales_karat<?php echo $i;?>" value="<?php echo $row_bulk_sales_item_list['karat'];?>">
																		<input type="text" class="form-control text-center" name="bulk_sales_karatD[]" id="bulk_sales_karatD<?php echo $i;?>" value="<?php echo $row_bulk_sales_item_list['karat'];?>" disabled="true">
																	</td>
																	<td class="action-td" width="10%">
																		<?php echo $row_bulk_sales_item_list['pounds'];?>
																		<input type="hidden" class="form-control text-center" name="bulk_sales_pounds[]" id="bulk_sales_pounds<?php echo $i;?>" value="<?php echo $row_bulk_sales_item_list['pounds'];?>">
																		<input type="text" class="form-control text-center" name="bulk_sales_poundsD[]" id="bulk_sales_poundsD<?php echo $i;?>" value="<?php echo $row_bulk_sales_item_list['pounds'];?>" disabled="true">
																	</td>
																	<td class="amt-td" width="10%">
																		<?php echo $row_bulk_sales_item_list['price'];?>
																		<input type="hidden" class="form-control" name="bulk_sales_price[]" id="bulk_sales_price<?php echo $i;?>" value="<?php echo $row_bulk_sales_item_list['price'];?>">
																	</td>
																	<td class="amt-td" width="10%">
																		<?php echo $row_bulk_sales_item_list['amount'];?>
																		<input type="hidden" class="form-control bulk_sales_amount" name="bulk_sales_amount[]" id="bulk_sales_amount<?php echo $i;?>" value="<?php echo $pending_amount;?>">
																	</td>
																	<td class="amt-td" width="10%">
																		<input type="text" class="form-control text-right bulk_sales_selling_price" name="bulk_sales_selling_price[]" id="bulk_sales_selling_price<?php echo $i;?>">
																	</td>
																	<td class="amt-td" width="15%">
																		<input type="text" class="form-control text-right bulk_sales_sold_amount" name="bulk_sales_sold_amount[]" id="bulk_sales_sold_amount<?php echo $i;?>" hidden="true">
																		<input type="text" class="form-control text-right" name="bulk_sales_sold_amountD[]" id="bulk_sales_sold_amountD<?php echo $i;?>" disabled="true">
																	</td>
																</tr>
																<?php
															};
														}
													};*/
												?>
											</tbody>
									</table>
								</div>
							</div>
							
							<table class="table table-hover table-bordered table-sm" id="pending_item_list_total_table" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th class="action-td" width="15%">TOTAL</th>
										<th class="action-td" width="10%">
											<input type="text" class="form-control text-center" name="bulk_sales_total_weight" id="bulk_sales_total_weight" hidden="true">
											<input type="text" class="form-control text-center" name="bulk_sales_total_weightD" id="bulk_sales_total_weightD" disabled="true">
										</th>
										<th class="action-td" width="10%">
											<input type="text" class="form-control text-center" name="bulk_sales_total_water" id="bulk_sales_total_water" hidden="true">
											<input type="text" class="form-control text-center" name="bulk_sales_total_waterD" id="bulk_sales_total_waterD" disabled="true">
										</th>
										<th class="action-td" width="5%"></th>
										<th class="action-td" width="5%"></th>
										<th class="action-td" width="10%">
											<input type="text" class="form-control text-right" name="bulk_sales_total_pounds" id="bulk_sales_total_pounds" hidden="true">
											<input type="text" class="form-control text-right" name="bulk_sales_total_poundsD" id="bulk_sales_total_poundsD" disabled="true">
										</th>
										<th class="action-td" width="7%"></th>
										<th class="action-td" width="10%"></th>
										<th class="action-td" width="8%"></th>
										<th class="amt-td" width="15%">
											<input type="text" class="form-control text-right" name="bulk_sales_total_amount" id="bulk_sales_total_amount" hidden="true">
											<input type="text" class="form-control text-right" name="bulk_sales_total_amountD" id="bulk_sales_total_amountD" disabled="true">
										</th>
										<th class="amt-td" width="5%">
										</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" name="bulk_sales_save_btn" id="bulk_sales_save_btn" class="btn btn-primary" >Save</button>
						<button type="button" name="bulk_sales_update_btn" id="bulk_sales_update_btn" class="btn btn-primary">Update</button>
						<button type="submit" name="bulk_sales_cancel_btn" id="bulk_sales_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
					</div>
	            </form>
          		<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/foot.php');?>
			</div>
		</div>
	</div>
</div>