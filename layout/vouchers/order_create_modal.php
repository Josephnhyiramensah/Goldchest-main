<div 
class="modal fade hide bd-example-modal-xl" 
id="order_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="order_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" style="max-width: 99%;" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="order_create_modal_header">Order Voucher Creation</h5>
				<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>-->
			</div>
			<div class="modal-body">
				<form id="order_item_list_form" method="POST">
	                <div class="panel-body">
	                    <div class="form-row">
							<input type="hidden" class="form-control" name="table_order_id" id="table_order_id">
							<input type="hidden" class="form-control" name="dining_table_id" id="dining_table_id">
							<input type="hidden" class="form-control" name="order_payable_amount" id="order_payable_amount">
	                        <div class="col-md-1 mb-1 form-group" id="order_table_list_div">
								<table class="table table-hover table-bordered table-sm" id="order_table_list" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th class="action-td">Tables</th>
										</tr>
									</thead>
									<tbody class="pv-table-body">
									<div class="scroll_order_body">
										<?php
											$query = "SELECT * FROM dining_table WHERE company_id = '$company_id' AND branch_id = '$branch_id'";
											$result = mysqli_query($con,$query);
											while($row = mysqli_fetch_array($result))
											{
												echo' <tr>
													<td class="action-td">
														<button type="button" name="order_table_list" id="order_table_list" data-id="'.$row['dining_table_id'].'" class="btn btn-primary btn-block order_table_id">'.$row['dining_table'].'</button>
													</td>
												</tr>';
											};
										?>
										</div>
									</tbody>
								</table>
	                        </div>
	                        <div class="col-md-5 mb-5 form-group" id="order_menu_div">
								<div class="form-row">
									<div class="col-md-6 mb-6 form-group">
										<label for="order_customer_name">Customer Name</label>
										<input type="text" class="form-control" name="order_customer_name" id="order_customer_name">
									</div>
									<div class="col-md-6 mb-6 form-group">
										<label for="order_customer_phone">Customer Phone</label>
										<input type="text" class="form-control" name="order_customer_phone" id="order_customer_phone">
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6 mb-6 form-group">
										<select class="form-control bg-light" name="order_stock_item_type" id="order_stock_item_type"> 
											<option value="0">Please Select Menu Type</option>
												<?php
													$sql="SELECT * FROM stock_item_type WHERE company_id = '$company_id' ORDER BY stock_item_type ASC";
													$result = mysqli_query($con,$sql);
													while($row = mysqli_fetch_array($result))
													{
														echo '<option value = "'.$row['stock_item_type_id'].'">
														'.$row['stock_item_type'].'
														</option>';
													};
												?>
										</select>
									</div>
									<div class="col-md-6 mb-6 form-group">
										<input type="text" class="form-control" name="order_search_menu" id="order_search_menu" placeholder="Search menu">
									</div>
	                        	</div>
								<div class="scroll_order_body" id="order_menu_list_div">
								<?php
									echo '<table class="table table-hover table-bordered table-sm" id="order_table_list" width="100%" cellspacing="0">';
										$query_stt = "SELECT * FROM stock_item_type WHERE company_id='$company_id' AND branch_id='$branch_id'";
										$result_stt = mysqli_query($con,$query_stt);
										if(!empty($result_stt) && mysqli_num_rows($result_stt) > 0)
										{
											while($row_stt = mysqli_fetch_array($result_stt))
											{
												echo '<thead>
													<tr>
														<th colspan="2">'.$row_stt['stock_item_type'].'</th>
													</tr>
												</thead>
												<tbody class="pv-table-body">';
													$stock_item_type_id = $row_stt['stock_item_type_id'];
													$query_stk = "SELECT st.*, pl.price FROM stock_items st JOIN
													price_list pl ON (st.stock_item_id=pl.stock_item_id AND st.branch_id=pl.branch_id) WHERE 
													st.company_id = '$company_id' AND st.branch_id = '$branch_id' AND st.stock_item_type_id='$stock_item_type_id'";
													$result_stk = mysqli_query($con,$query_stk);
													while($row_stk = mysqli_fetch_array($result_stk))
													{
														echo '<tr>
															<td>
																<a href="#" class="order_stock_item_id" 
																	data-item="'.$row_stk['stock_item_id'].'" 
																	data-price="'.$row_stk['price'].'" 
																	data-name="'.$row_stk['stock_item'].'">
																	<small><strong>'.$row_stk['stock_item'].'</strong></small>
																</a>
															</td>
															<td class="amt-td">
																<a href="#" class=" order_stock_item_id" 
																	data-item="'.$row_stk['stock_item_id'].'" 
																	data-price="'.$row_stk['price'].'" 
																	data-name="'.$row_stk['stock_item'].'">
																	<small><strong>'.$row_stk['price'].'</strong></small>
																</a>
															</td>
														</tr>';
													}
											};
										};
										echo '</tbody>
									</table>';
									?>
								</div>
	                        </div>
	                        <div class="col-md-6 mb-6 form-group" id="table_order_item_list_div">
								<div id="order_nav_item_list">
									<ul class="nav nav-tabs nav-justified">
										<li class="nav-item active"><a class="nav-link" aria-current="page" data-toggle="tab" href="#order_item_list_nav" id="#order_item_list_li">ORDER ITEMS</a></li>
										<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#order_payment_nav">ORDER PAYMENT</a></li>
									</ul>
									<div class="tab-content">
										<div id="order_item_list_nav" class="tab-pane fade show active">
											<div class="form-row">
												<div class="col-md-6 mb-6 form-group">
													<select class="form-control bg-light" name="order_dining_table_id" id="order_dining_table_id"> 
														<option value="0">Please Select Table</option>
														<?php
															$query = "SELECT * FROM dining_table WHERE company_id = '$company_id' AND branch_id = '$branch_id'";
															$result = mysqli_query($con,$query);
															while($row = mysqli_fetch_array($result))
															{
																echo '<option value = "'.$row['dining_table_id'].'">'.$row['dining_table'].'</option>';
															};
														?>
													</select>
													<select class="form-control bg-light" name="order_dining_table_idD" id="order_dining_table_idD" disabled="true" hidden="true"> 
														<option value="0">Please Select Table</option>
														<?php
															$query = "SELECT * FROM dining_table WHERE company_id = '$company_id' AND branch_id = '$branch_id'";
															$result = mysqli_query($con,$query);
															while($row = mysqli_fetch_array($result))
															{
																echo '<option value = "'.$row['dining_table_id'].'">'.$row['dining_table'].'</option>';
															};
														?>
													</select>
												</div>
												<div class="col-md-4 mb-4 form-group">
													<select class="form-control bg-light" name="order_customer_id" id="order_customer_id"> 
														<option value="0">Please Select Table</option>
														<?php
															$query = "SELECT * FROM ledgers WHERE (company_id = '$company_id' AND tb_4 = 4) OR (default_status = 'Yes' AND tb_4 = 4)";
															$result = mysqli_query($con,$query);
															while($row = mysqli_fetch_array($result))
															{
																echo '<option value = "'.$row['ledger_id'].'">'.$row['ledger_desc'].'</option>';
															};
														?>
													</select>
												</div>
												<div class="col-md-2 mb-2 form-group">
													<input type="date" class="form-control text-center" value="<?php echo $date_today;?>" name="order_date" id="order_date" hidden="true">
													<input type="date" class="form-control text-center" value="<?php echo $date_today;?>" name="order_dateD" id="order_dateD" disabled="true">
												</div>
											</div>
											<div class="scroll_order_body" id="order_item_list_table_div">
												<table class="table table-hover table-bordered table-sm" id="order_item_list_table" width="100%" cellspacing="0">
													<thead>
														<tr id="0">
															<th class="action-td" colspan="5">Order Items</th>
														</tr>
														<tr>
															<th class="action-td" width="50%">Items</th>
															<th class="action-td" width="10%">Qty</th>
															<th class="action-td" width="10%">Price</th>
															<th class="action-td" width="20%">Amount</th>
															<th class="action-td" width="10%">Action</th>
														</tr>
													</thead>
													<tbody class="pv-table-body">
														<tr id="1"></tr>
													</tbody>
												</table>
											</div>
											<table class="table table-hover table-bordered table-sm" id="order_item_table_total" width="100%" cellspacing="0">
												<thead>
													<tr>
														<th class="action-td" width="70%">TOTAL</th>
														<th class="amt-td" width="20%">
															<input type="text" class="form-control text-right" name="order_item_list_sub_total" id="order_item_list_sub_total" hidden="true">
															<input type="text" class="form-control text-right" name="order_item_list_sub_totalD" id="order_item_list_sub_totalD" disabled="true">
														</th>
														<th class="action-td" width="10%"></th>
													</tr>
												</thead>
											</table>
										</div>
										<div id="order_payment_nav" class="tab-pane fade">
											<div class="scroll_order_body">
												<table class="table table-hover table-bordered table-sm" id="order_payment_list_table" width="100%" cellspacing="0">
													<thead>
														<tr>
															<th class="action-td" width="70%">Cash Ledger</th>
															<th class="action-td" width="20%">Amount</th>
															<th class="action-td" width="10%">Action</th>
														</tr>
													</thead>
													<tbody class="pv-table-body">
														<tr id="op1" data-id="1">
															<td>
																<select class="form-control bg-light order_payment_ledger_id" name="order_payment_ledger_id[]" id="order_payment_ledger_id1" data-id="1"> 
																	<option value="0">Please Select</option>
																	<?php
																		$query = "SELECT * FROM ledgers WHERE (company_id = '$company_id' AND tb_4 = 6) OR 
																		(default_status = 'Yes' AND tb_4 = 6)";
																		$result = mysqli_query($con,$query);
																		while($row = mysqli_fetch_array($result))
																		{
																			echo '<option value = "'.$row['ledger_id'].'">'.$row['ledger_desc'].'</option>';
																		};
																	?>
																</select>
															</td>
															<td>
																<input type="text" class="form-control text-right order_payment_amount" name="order_payment_amount[]" id="order_payment_amount1">
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											<table class="table table-hover table-bordered table-sm" id="order_payment_total_table" width="100%" cellspacing="0">
												<thead>
													<tr>
														<th class="amt-td" width="20%">ORDER TOTAL</th>
														<th class="amt-td" width="20%">
															<input type="text" class="form-control text-right" name="order_payment_list_order_total" id="order_payment_list_order_total" hidden="true">
															<input type="text" class="form-control text-right" name="order_payment_list_order_totalD" id="order_payment_list_order_totalD" disabled="true">
														</th>
														<th class="amt-td" width="30%">PAYMENT TOTAL</th>
														<th class="amt-td" width="20%">
															<input type="text" class="form-control text-right" name="order_payment_list_sub_total" id="order_payment_list_sub_total" hidden="true">
															<input type="text" class="form-control text-right" name="order_payment_list_sub_totalD" id="order_payment_list_sub_totalD" disabled="true">
														</th>
														<th class="action-td" width="10%"></th>
													</tr>
													<tr>
														<th class="amt-td" width="20%"></th>
														<th class="amt-td" width="20%"></th>
														<th class="amt-td" width="30%">CASH TENDERED</th>
														<th class="amt-td" width="20%">
															<input type="text" class="form-control text-right" name="order_payment_cash_tendered" id="order_payment_cash_tendered">
														</th>
														<th class="action-td" width="10%"></th>
													</tr>
													<tr>
														<th class="amt-td" width="20%"></th>
														<th class="amt-td" width="20%"></th>
														<th class="amt-td" width="30%">BALANCE</th>
														<th class="amt-td" width="20%">
															<input type="text" class="form-control text-right" name="order_payment_balance" id="order_payment_balance" hidden="true">
															<input type="text" class="form-control text-right" name="order_payment_balanceD" id="order_payment_balanceD" disabled="true">
														</th>
														<th class="action-td" width="10%"></th>
													</tr>
												</thead>
											</table>
										</div>
									</div>
								</div>
							</div>
	                    </div>
	                </div>
					<div class="form-row">
						<div class="col-md-6 mb-6 form-group modal-footer">
							<div id="order_served_btn_div"></div>
							<div id="order_unserved_btn_div"></div>
							<div id="order_print_btn_div"></div>
							<div id="order_pay_btn_div"></div>
						</div>
						<div class="col-md-6 mb-6 form-group modal-footer">
							<button type="button" name="order_save_btn" id="order_save_btn" class="btn btn-primary">Order</button>
							<button type="button" name="order_save_pay_btn" id="order_save_pay_btn" class="btn btn-primary">Pay</button>
							<button type="button" name="order_update_btn" id="order_update_btn" class="btn btn-primary">Order</button>
							<button type="submit" name="order_cancel_btn" id="order_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
						</div>
					</div>
	            </form>
          <?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/foot.php');?>
			</div>
		</div>
	</div>
</div>