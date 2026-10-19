<div 
class="modal fade hide bd-example-modal-xl" 
id="nds_sales_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="nds_sales_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" style="max-width: 80%;" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="nds_sales_create_modal_header">Sales Invoice (NDS)</h5>
				<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>-->
			</div>
			<div class="modal-body">
				<form id="nds_sales_create_form" method="POST">
	                <div class="panel-body">
						<div id="nds_sales_create_form_msg"></div>
	                    <div class="form-row">
	                        <div class="col-md-4 mb-4 form-group">
	                            <input type="hidden" name="nds_sales_id" class="form-control bg-light" id="nds_sales_id">
	                            <label for="nds_sales_debit">Debit</label>
	                            <select class="form-control" name="nds_sales_debit" id="nds_sales_debit"> 
	                                <option value="0">Please Select</option>
	                                <?php
                						$company_id = $_SESSION['company_id'];
                						$cash_ledger_id = $_SESSION['cash_ledger_id'];
	                                    $sql="SELECT * FROM ledgers WHERE (company_id = '$company_id' AND (tb_5=4 OR tb_5=7 
										OR tb_5=8)) OR (default_status = 'yes' AND (tb_5=4 OR tb_5=7 OR tb_5=8))
										ORDER BY ledger_desc ASC";
	                                    $result = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($result))
										{
											if($row['ledger_id'] == $cash_ledger_id)
											{
												echo '<option value = "'.$row['ledger_id'].'" selected="selected">'.$row['ledger_desc'].'</option>';
											}
											else
											{
												echo '<option value = "'.$row['ledger_id'].'">'.$row['ledger_desc'].'</option>';
											};
										};
	                                ?>
	                            </select>
	                        </div>
	                        <div class="col-md-4 mb-4 form-group">
	                            <label for="nds_sales_credit">Credit</label>
	                            <select class="form-control" name="nds_sales_credit" id="nds_sales_credit"> 
	                                <option value="0">Please Select</option>
	                                 <?php
	                                    $sql_ssc="SELECT * FROM ledgers WHERE (company_id = '$company_id' AND tb_4=10) OR
										(default_status = 'Yes' AND tb_4=10) ORDER BY ledger_desc ASC";
	                                    $result_ssc = mysqli_query($con,$sql_ssc);
	                                    while($row_ssc = mysqli_fetch_array($result_ssc))
	                                    {
	                                    	echo '<option value = "'.$row_ssc['ledger_id'].'">'.$row_ssc['ledger_desc'].'</option>';
	                                    };
	                                ?>
	                            </select>
	                        </div>
	                        <div class="col-md-4 mb-4 form-group">
	                            <label for="nds_sales_amount">Amount</label>
	                            <input type="text" class="form-control" name="nds_sales_amount" id="nds_sales_amount" hidden="true">
	                            <input type="text" class="form-control" name="nds_sales_amount_2" id="nds_sales_amount_2" disabled="true">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-4 mb-4 form-group" id="nds_sales_customer_select_div">
	                            <label for="nds_sales_customer_select">Customer (<a href="#" id="nds_sales_create_customer"><small>Create Customer</small></a>)</label>
	                            <select class="form-control" name="nds_sales_customer_select" id="nds_sales_customer_select"> 
	                                <option value="0">Please Select</option>
	                                 <?php
	                                    $sql_ssc="SELECT * FROM customer WHERE company_id = '$company_id' ORDER BY first_name ASC";
	                                    $result_ssc = mysqli_query($con,$sql_ssc);
	                                    while($row_ssc = mysqli_fetch_array($result_ssc))
	                                    {
	                                    	echo '<option value = "'.$row_ssc['customer_id'].'">'.$row_ssc['first_name'].' '.$row_ssc['last_name'].'</option>';
	                                    };
	                                ?>
	                            </select>
	                        </div>
	                        <div class="col-md-4 mb-4 form-group" id="nds_sales_customer_input_div" hidden="true">
	                            <label for="nds_sales_customer_input">Customer (<a href="#" id="nds_sales_save_customer"><small>Save Customer</small></a>)</label>
	                            <input type="text" class="form-control" name="nds_sales_customer_input" id="nds_sales_customer_input">
	                        </div>
	                        <div class="col-md-4 mb-4 form-group">
	                            <label for="nds_sales_telephone">Telephone</label>
	                            <input type="text" class="form-control" name="nds_sales_telephone" id="nds_sales_telephone">
	                        </div>
	                        <div class="col-md-4 mb-4 form-group">
	                            <label for="nds_sales_date">Date</label>
	                            <input type="date" class="form-control" name="nds_sales_date" id="nds_sales_date" value="<?php echo date('Y-m-d');?>">
	                        </div>
	                    </div>

	                    <div class="form-row">
	                        <div class="col-md-4 mb-4 form-group">
	                            <label for="nds_sales_issued_by">Issued By</label>
	                            <input type="text" class="form-control" name="nds_sales_issued_by" id="nds_sales_issued_by">
	                        </div>
	                        <div class="col-md-8 mb-8 form-group">
	                            <label for="nds_sales_narration">Narration</label>
	                            <input type="text" class="form-control" name="nds_sales_narration" id="nds_sales_narration">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-12 mb-12" id="nds_sales_items_list">
								<table table class="table table-hover table-bordered table-sm" width="100%" cellspacing="0" style="font-size: 14px" id="nds_sales_items_table">
									<tr>
										<th width="50%">Description</th>
										<th width="15%" class="action-td">Warehouse</th>
										<th width="10%" class="action-td">Qty</th>
										<th width="10%" class="action-td">Price</th>
										<th width="20%" class="action-td">Amount</th>
										<th width="5%" class="action-td">Action</th>
									</tr>
									<tr id="1">
										<td>
											<input type="hidden" name="nds_sales_item_list_id[]" class="form-control bg-light" id="nds_sales_item_list_id1">
											<select class="form-control stock_sales_desc" name="stock_sales_desc[]" id="stock_sales_desc1" data-id="1" style="border-width:0px"> 
												<option value="0">Please Select</option>
												<?php
													$sql="SELECT * FROM stock_items WHERE company_id = '$company_id' ORDER BY stock_item ASC";
													$result=mysqli_query($con,$sql);
													while($row=mysqli_fetch_array($result))
													{
														echo '<option value ="'.$row['stock_item_id'].'">'.$row['stock_item'].'</option>';
													};
												?>
											</select>
										</td>
										<td>
											<select class="form-control nds_sales_loc_id" name="nds_sales_loc[]" id="nds_sales_loc1" data-id="1" style="border-width:0px"> 
												<option value="0">Please Select</option>
												<?php
													$warehouse_id = $_SESSION['warehouse_id'];
													$sql_wh="SELECT * FROM warehouse WHERE company_id = '$company_id' ORDER BY warehouse_desc"; 
													$result_wh = mysqli_query($con,$sql_wh);
													while($row_wh = mysqli_fetch_array($result_wh))
													{
														if($row_wh['warehouse_id']==$warehouse_id)
														{
															echo '<option value ="'.$row_wh['warehouse_id'].'" selected="selected">'.$row_wh['warehouse_desc'].'</option>';
														}
														else
														{
															echo '<option value ="'.$row_wh['warehouse_id'].'">'.$row_wh['warehouse_desc'].'</option>';
														};
													}
												?>
											</select>
										</td>
										<td>
											<input type="text" name="nds_sales_qty[]" class="form-control bg-light text-center nds_sales_qty" id="nds_sales_qty1" data-id="1" style="border-width:0px">
										</td>
										<td>
											<input type="text" name="nds_sales_price[]" class="form-control bg-light text-right nds_sales_price" id="nds_sales_price1" data-id="1" style="border-width:0px">
										</td>
										<td>
											<input type="text" name="nds_sales_amt[]" class="form-control bg-light text-right nds_sales_amt" id="nds_sales_amt1" style="border-width:0px">
										</td>
										<td>
											<!--<a href="#" id="delete_nds_sales_item" data-id="1"><i class="fa fa-trash fa-sm"></i></a>-->
										</td>
									</tr>
								</table>
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" name="nds_sales_save_btn" id="nds_sales_save_btn" class="btn btn-primary" >Save</button>
	                    <button type="button" name="nds_sales_update_btn" id="nds_sales_update_btn" class="btn btn-primary">Update</button>
	                    <button type="submit" name="nds_sales_cancel_btn" id="nds_sales_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                </div>
	            </form>
			</div>
		</div>
	</div>
</div>