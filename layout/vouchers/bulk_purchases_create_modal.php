<div 
class="modal fade hide bd-example-modal-xl"
id="bulk_purchase_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="bulk_purchase_create_modal"
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" style="max-width: 95%;" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="bulk_purchases_create_modal_header">Bulk Purchases Invoice</h5>
				<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>-->
			</div>
			<div class="modal-body">
				<form id="bulk_purchases_create_form" method="POST">
	                <div class="panel-body">
						<div class="form-row">
							<div class="col-md-7 mb-7">
								<div class="form-row">
									<?php
										if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['company_type_id'] == 3 OR $_SESSION['company_type_id'] == 5) 
										{
											echo '<div class="col-md-3 mb-3 form-group">';
										}
										else 
										{
											echo '<div class="col-md-4 mb-4 form-group">';
										};
									?>
										<input type="hidden" name="bulk_purchase_id" class="form-control bg-light" id="bulk_purchase_id">
										<label for="bulk_purch_debit">Receiving Ledger</label>
										<select class="form-control" name="bulk_purch_debit" id="bulk_purch_debit" hidden="true"> 
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
										<select class="form-control" name="bulk_purch_debitD" id="bulk_purch_debitD" disabled="true"> 
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
									<?php
									if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['company_type_id'] == 3 OR $_SESSION['company_type_id'] == 5) 
									{
										echo '<div class="col-md-3 mb-3 form-group">';
									}
									else 
									{
										echo '<div class="col-md-4 mb-4 form-group">';
									};
									?>
										<label for="bulk_purch_credit">Giving Ledger</label>
										<select class="form-control" name="bulk_purch_credit" id="bulk_purch_credit"> 
											<option value="0">Please Select</option>
											<?php
												$company_id = $_SESSION['company_id'];
												$sql="SELECT * FROM `ledgers` WHERE (`company_id` = '$company_id' AND `tb_2`!= 3 AND `tb_2`!= 4) OR 
												(`default_status` = 'yes' AND `tb_2`!= 3 AND `tb_2`!= 4) ORDER BY ledger_desc ASC";

												/*$sql="SELECT * FROM `ledgers` WHERE (`company_id` = '$company_id' AND `tb_4`= 4) OR 
												(`default_status` = 'yes' AND `tb_4`= 4) OR (`company_id` = '$company_id' AND `tb_4`= 7) 
												OR (default_status = 'yes' AND tb_4 = 7) ORDER BY ledger_desc ASC";*/
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
									<?php
									if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['company_type_id'] == 3 OR $_SESSION['company_type_id'] == 5) 
									{
										echo '<div class="col-md-3 mb-3 form-group">';
									}
									else 
									{
										echo '<div class="col-md-4 mb-4 form-group">';
									};
									?>
										<label for="bulk_purch_date">Date</label>
										<input type="date" class="form-control" name="bulk_purch_date" id="bulk_purch_date" value="<?php echo $date_today;?>">
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-4 mb-4 form-group">
										<label for="bulk_purch_supplied_by">Supplied By</label>
										<input type="text" class="form-control" name="bulk_purch_supplied_by" id="bulk_purch_supplied_by">
									</div>
									<div class="col-md-4 mb-4 form-group">
										<label for="bulk_purch_phone_no">Phone No</label>
										<input type="text" class="form-control" name="bulk_purch_phone_no" id="bulk_purch_phone_no">
									</div>
									<div class="col-md-4 mb-4 form-group">
										<label for="bulk_purch_location">Location</label>
										<input type="text" class="form-control" name="bulk_purch_location" id="bulk_purch_location">
									</div>
									<!--<div class="col-md-1 mb-1 form-group">
										<label for="bulk_purch_on_pmmc">On PMMC</label>
										<select class="form-control" name="bulk_purch_on_pmmc" id="bulk_purch_on_pmmc"> 
											<option value="yes">Yes</option>
											<option value="no">No</option>
										</select>
									</div>
									<div class="col-md-3 mb-3 form-group">
										<label for="bulk_purch_name_on_pmmc">Name on PMMC</label>
										<input type="text" class="form-control" name="bulk_purch_name_on_pmmc" id="bulk_purch_name_on_pmmc">
									</div>-->
								</div>

								<div class="form-row">
										<div class="form-row">
											<div class="col-md-2 mb-2 form-group">
												<label for="bulk_purch_product">Product Type</label>
												<select class="form-control" name="bulk_purch_product" id="bulk_purch_product"> 
													<option value="0">Please Select</option>
													<?php
														$sql="SELECT * FROM product ORDER BY product_desc ASC";
														$result=mysqli_query($con,$sql);
														while($row=mysqli_fetch_array($result))
														{
														?>
														<option value = "<?php echo($row['product_id'])?>" >
															<?php echo($row['product_desc']) ?>
														</option>
														<?php
														}               
													?>
												</select>
											</div>
											<div class="col-md-2 mb-2 form-group">
												<label for="bulk_purch_gram_both">Gram (Both)</label>
												<input type="text" class="form-control" name="bulk_purch_gram_both" id="bulk_purch_gram_both">
											</div>
											<div class="col-md-2 mb-2 form-group">
												<label for="bulk_purch_gram">Gram (Big)</label>
												<input type="text" class="form-control" name="bulk_purch_gram" id="bulk_purch_gram">
											</div>
											<div class="col-md-2 mb-2 form-group">
												<label for="bulk_purch_water">Water</label>
												<input type="text" class="form-control" name="bulk_purch_water" id="bulk_purch_water">
											</div>
											<div class="col-md-2 mb-2 form-group">
												<label for="bulk_purch_price">Price</label>
												<input type="text" class="form-control" name="bulk_purch_price" id="bulk_purch_price">
											</div>
											<div class="col-md-2 mb-2 form-group">
												<label for="bulk_purch_amount">Amount</label>
												<input type="text" class="form-control" name="bulk_purch_amount" id="bulk_purch_amount" hidden="true">
												<input type="text" class="form-control" name="bulk_purch_amountD" id="bulk_purch_amountD" disabled="true">
											</div>
										</div>
										<div class="form-row">
											<div class="col-md-2 mb-2 form-group">
												<label for="bulk_purch_pounds">Pounds</label>
												<input type="text" class="form-control" name="bulk_purch_pounds" id="bulk_purch_pounds" hidden="true">
												<input type="text" class="form-control" name="bulk_purch_poundsD" id="bulk_purch_poundsD" disabled="true">
											</div>
											<div class="col-md-2 mb-2 form-group">
												<label for="bulk_purch_density">Density</label>
												<input type="text" class="form-control" name="bulk_purch_density" id="bulk_purch_density" hidden="true">
												<input type="text" class="form-control" name="bulk_purch_densityD" id="bulk_purch_densityD" disabled="true">
											</div>
											<div class="col-md-2 mb-2 form-group">
												<label for="bulk_purch_karat">Karat</label>
												<input type="text" class="form-control" name="bulk_purch_karat" id="bulk_purch_karat" hidden="true">
												<input type="text" class="form-control" name="bulk_purch_karatD" id="bulk_purch_karatD" disabled="true">
											</div>
											<div class="col-md-2 mb-2 form-group">
												<label for="bulk_purch_purity">Purity</label>
												<input type="text" class="form-control" name="bulk_purch_purity" id="bulk_purch_purity" hidden="true">
												<input type="text" class="form-control" name="bulk_purch_purityD" id="bulk_purch_purityD" disabled="true">
											</div>
											<div class="col-md-2 mb-2 form-group">
												<label for="bulk_purch_ppp">Price Per Pound</label>
												<input type="text" class="form-control" name="bulk_purch_ppp" id="bulk_purch_ppp" hidden="true">
												<input type="text" class="form-control" name="bulk_purch_pppD" id="bulk_purch_pppD" disabled="true">
											</div>
											<div class="col-md-2 mb-2 form-group">
												<label for="bulk_purch_pieces">No. of Pieces</label>
												<input type="text" class="form-control" name="bulk_purch_pieces" id="bulk_purch_pieces">
											</div>
										</div>
								</div>
								<div class="form-row">
									<div class="col-md-12 mb-12 form-group">
										<label for="bulk_purch_narration">Narration</label>
										<input type="text" class="form-control" name="bulk_purch_narration" id="bulk_purch_narration">
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-12 mb-12">
										<button type="button" name="bulk_purch_enter_btn" id="bulk_purch_enter_btn" class="btn btn-success btn-block">Enter</button>
									</div>
								</div>
							</div>
							<div class="col-md-5 mb-5">
								<div class="col-md-12 mb-12 scroll_card_bulk_purchase_ledger_list" id="bulk_purchase_payment_list_div">
									<table class="table table-hover table-bordered table-sm" id="bulk_purhcase_payment_list_table" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th class = "action-td" colspan="4"><H6><strong>PAYMENT LIST</strong></H6></th>
											</tr>
											<tr data-id="0">
												<th class="action-td" width="40%"><a href="#" data-toggle="" id="new_bulk_purchase_payment_ledger">LEDGER <small>(click to add)<small></a></th>
												<th class="action-td" width="25%">AMOUNT</th>
												<th class="action-td" width="25%">MODE</th>
												<th class="action-td" width="10%">ACTION</th>
											</tr>
										</thead>
											<tbody class="pv-table-body" id="bulk_purchase_payment_list_table_body">
												<tr id="1">
													<td>
														<input type="hidden" class="form-control bg-light" name="bulk_purchase_payment_ledger_group_id[]" id="bulk_purchase_payment_ledger_group_id1">
														<select class="form-control bulk_purchase_payment_ledger_id" name="bulk_purchase_payment_ledger_id[]" id="bulk_purchase_payment_ledger_id1"> 
															<option value="0">Please Select</option>
															<?php
																$company_id = $_SESSION['company_id'];
																$sql="SELECT * FROM `ledgers` WHERE 
																(`company_id` = '$company_id' AND `tb_4`= 4) OR 
																(`company_id` = '$company_id' AND `tb_4`= 6) OR 
																(`company_id` = '$company_id' AND `tb_4`= 7) OR 
																(default_status = 'yes' AND tb_4 = 6) ORDER BY ledger_desc ASC";
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
														<input type="text" class="form-control bg-light bulk_purchase_payment_amount text-right" name="bulk_purchase_payment_amount[]" id="bulk_purchase_payment_amount1">
													</td>
													<td>
														<select class="form-control bg-light" name="bulk_purchase_payment_mode[]" id="bulk_purchase_payment_mode1"> 
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
								<table class="table table-hover table-bordered table-sm" id="bulk_purchase_payment_list_total_table" width="100%" cellspacing="0">
									<thead>
										<tr data-id="0">
											<th class="action-td" width="40%">TOTAL</th>
											<th class="action-td" width="25%">
												<input type="text" class="form-control bg-light text-right" name="bulk_purchase_payment_amount_total" id="bulk_purchase_payment_amount_total">
											</th>
											<th class="action-td" width="25%"></th>
											<th class="action-td" width="10%"></th>
										</tr>
									</thead>
								</table>
							</div>
						</div>
	                </div>
					
            		<div class="table-responsive" id="bulk_purchases_item_list_table">
						<table class="table table-hover table-bordered table-sm" id="bulk_purchases_items_table" width="100%" cellspacing="0">
							<thead>
								<tr id="1">
									<th class = "action-td" width="5%">Pieces</th>
									<th class = "action-td" width="10%">Grams</th>
									<th class = "action-td" width="10%">Water</th>
									<th class = "action-td" width="10%">Density</th>
									<th class = "action-td" width="10%">Karat</th>
									<th class = "action-td" width="10%">Purity</th>
									<th class = "action-td" width="10%">Pounds</th>
									<th class = "action-td" width="10%">Price</th>
									<th class = "action-td" width="15%">Amount</th>
									<th class = "action-td" width="10%">Action</th>
								</tr>
							</thead>
							<tbody class="pv-table-body" >
							</tbody>
						</table>
						<table class="table table-hover table-bordered table-sm" id="bulk_purchases_items_totals" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th class = "action-td" width="5%">Total</th>
									<th class = "action-td" width="10%">
                                    	<input type="text" name="p_grams_total" class="form-control bg-light text-center" id="p_grams_total" style="border-width:0px">
									</th>
									<th class = "action-td" width="10%">
                                    	<input type="text" name="p_water_total" class="form-control bg-light text-center" id="p_water_total" style="border-width:0px">
									</th>
									<th class = "action-td" width="10%"></th>
									<th class = "action-td" width="10%"></th>
									<th class = "action-td" width="10%"></th>
									<th class = "action-td" width="10%">
                                    	<input type="text" name="p_pounds_total" class="form-control bg-light text-center" id="p_pounds_total" style="border-width:0px">
									</th>
									<th class = "amt-td" width="10%"></th>
									<th class = "amt-td" width="15%">
                                    	<input type="text" name="p_amount_total" class="form-control bg-light text-right" id="p_amount_total" style="border-width:0px">
									</th>
									<th class = "action-td" width="10%"></th>
								</tr>
							</thead>
						</table>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" name="bulk_purch_save_btn" id="bulk_purch_save_btn" class="btn btn-primary" >Save</button>
	                    <button type="button" name="bulk_purch_update_btn" id="bulk_purch_update_btn" class="btn btn-primary">Update</button>
	                    <button type="submit" name="bulk_purch_cancel_btn" id="bulk_purch_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                </div>
	            </form>
          		<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/foot.php');?>
			</div>
		</div>
	</div>
</div>