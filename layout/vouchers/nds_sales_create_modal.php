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
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="nds_sales_create_form" method="POST">
	                <div class="panel-body">
						<div id="nds_sales_create_form_msg"></div>
	                    <div class="form-row">
	                        <div class="col-md-4 mb-4 form-group">
	                            <input type="hidden" name="nds_sales_id" class="form-control bg-light" id="nds_sales_id">
	                            <input type="hidden" name="nds_sales_unique" class="form-control bg-light" id="nds_sales_unique">
	                            <label for="nds_sales_debit">Debit</label>
								<select class="form-control" name="nds_sales_debit" id="nds_sales_debit"> 
									<option value="0">Please Select</option>
									<?php
										$company_id = $_SESSION['company_id'];
										if(isset($_SESSION['cash_ledger_id'])){$cash_ledger_id = $_SESSION['cash_ledger_id'];}else{$cash_ledger_id =0;};
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
								<select class="form-control" name="nds_sales_debitD" id="nds_sales_debitD" disabled="true" hidden="true"> 
									<option value="0">Please Select</option>
									<?php
										$company_id = $_SESSION['company_id'];
										if(isset($_SESSION['cash_ledger_id'])){$cash_ledger_id = $_SESSION['cash_ledger_id'];}else{$cash_ledger_id =0;};
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
							<div class="col-md-4 mb-4 form-group" id="nds_sales_vat_type_div">
								<label for="nds_sales_vat_type">VAT Type</label>
								<select class="form-control" name="nds_sales_vat_type" id="nds_sales_vat_type"> 
									<option value="None">None</option>
									<option value="Standard Rate">Standard Rate</option>
									<option value="Flat Rate">Flat Rate</option>
								</select>
							</div>
							<div class="col-md-2 mb-2 form-group" hidden="true" id="nds_sales_calc_type_div">
								<label for="nds_sales_calc_type">VAT Calc. Type</label>
								<select class="form-control" name="nds_sales_calc_type" id="nds_sales_calc_type"> 
									<option value="Inclusive">Inclusive</option>
									<option value="Exclusive">Exclusive</option>
								</select>
							</div>
	                        <div class="col-md-4 mb-4 form-group" hidden="true">
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
	                        <div class="col-md-4 mb-4 form-group" id="nds_sales_customer_select_div">
	                            <label for="nds_sales_customer_select">Customer (<a href="#" id="nds_sales_create_customer"><small>Create Customer</small></a>) - <a href="#" id="nds_sales_find_customer"><small>Find Customer</small></a></label>
	                            <select class="form-control" name="nds_sales_customer_select" id="nds_sales_customer_select"> 
	                                <option value="0">Please Select</option>
	                                 <?php
	                                    //$sql_ssc="SELECT * FROM customer WHERE company_id = '$company_id' ORDER BY phone_number ASC";
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
	                                    	echo '<option value = "'.$row_ssc['customer_id'].'">'.$row_ssc['phone_number'].' - '.$row_ssc['first_name'].' '.$row_ssc['last_name'].'</option>';
	                                    };
	                                ?>
	                            </select>
	                        </div>
	                        <div class="col-md-4 mb-4 form-group" id="nds_sales_customer_input_div" hidden="true">
	                            <label for="nds_sales_customer_input">Customer (<a href="#" id="nds_sales_save_customer"><small>Save Customer</small></a>)</label>
	                            <input type="text" class="form-control" name="nds_sales_customer_input" id="nds_sales_customer_input">
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="nds_sales_telephone">Telephone</label>
	                            <input type="text" class="form-control" name="nds_sales_telephone" id="nds_sales_telephone">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="nds_sales_date">Date</label>
	                            <input type="date" class="form-control" name="nds_sales_date" id="nds_sales_date" value="<?php echo date('Y-m-d');?>">
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="nds_sales_branch_id">Branch</label>
								<?php
									if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['user_type_id'] == 2))
									{
	                            		echo '<select class="form-control" name="nds_sales_branch_id" id="nds_sales_branch_id">';
									}
									else
									{
	                            		echo '<select class="form-control" name="nds_sales_branch_id" id="nds_sales_branch_id" hidden="true">';
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
	                            		echo '<select class="form-control" name="nds_sales_branch_idD" id="nds_sales_branch_idD" disabled="true" hidden="true">';
									}
									else
									{
	                            		echo '<select class="form-control" name="nds_sales_branch_idD" id="nds_sales_branch_idD" disabled="true">';
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
										<th width="40%">Description</th>
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
											<?php
											if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['user_type_id'] == 2))
											{
												echo '<input type="text" name="nds_sales_price[]" class="form-control bg-light text-right nds_sales_price" id="nds_sales_price1" data-id="1" style="border-width:0px">
												<input type="text" name="nds_sales_priceD[]" class="form-control bg-light text-right nds_sales_priceD" id="nds_sales_priceD1" data-id="1" style="border-width:0px" disabled="true" hidden="true">';
											}
											else
											{
												echo '<input type="text" name="nds_sales_price[]" class="form-control bg-light text-right nds_sales_price" id="nds_sales_price1" data-id="1" style="border-width:0px" hidden="true">
												<input type="text" name="nds_sales_priceD[]" class="form-control bg-light text-right nds_sales_priceD" id="nds_sales_priceD1" data-id="1" style="border-width:0px" disabled="true">';
											}
											?>
										</td>
										<td>
											<input type="text" name="nds_sales_amt[]" class="form-control bg-light text-right nds_sales_amt" id="nds_sales_amt1" style="border-width:0px" hidden="true">
											<input type="text" name="nds_sales_amtD[]" class="form-control bg-light text-right nds_sales_amtD" id="nds_sales_amtD1" style="border-width:0px" disabled="true">
										</td>
										<td>
											<!--<a href="#" id="delete_nds_sales_item" data-id="1"><i class="fa fa-trash fa-sm"></i></a>-->
										</td>
									</tr>
								</table>
	                            <table table class="table table-hover table-bordered table-sm" width="100%" cellspacing="0" style="font-size: 14px" id="nds_sales_sub_total_table">
	                                <tr id="nds_sales_sub_total_row">
	                                    <th class = "amt-td" width="65%">
											SUB TOTAL
	                                    </th>
	                                    <td width="10%">
	                                    </td>
	                                    <td width="20%">
	                                        <input type="text" class="form-control text-right" name="nds_sales_sub_total_amount" class="form-control bg-light" id="nds_sales_sub_total_amount" style="border-width:0px" hidden="true">
	                                        <input type="text" class="form-control text-right" name="nds_sales_sub_total_amountD" class="form-control bg-light" id="nds_sales_sub_total_amountD" style="border-width:0px" disabled="true">
	                                    </td>
	                                    <td width="5%">
	                                    </td>
	                                </tr>
	                            </table>
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-12 mb-12" id="discount_list">
	                            <table table class="table table-hover table-bordered table-sm" width="100%" cellspacing="0" style="font-size: 14px" id="nds_sales_discount_table">
	                                <tr id="nds_sales_discount_row">
	                                    <th class = "amt-td" width="65%">
											DISCOUNT
	                                    </th>
	                                    <td width="10%">
	                                        <input type="text" class="form-control text-center" name="nds_sales_discount_rate" class="form-control bg-light" id="nds_sales_discount_rate" style="border-width:0px">
	                                    </td>
	                                    <td width="20%">
	                                        <input type="text" class="form-control text-right" name="nds_sales_discount_amount" class="form-control bg-light" id="nds_sales_discount_amount" style="border-width:0px">
	                                        <!--<input type="text" class="form-control text-right" name="nds_sales_discount_amountD" class="form-control bg-light" id="nds_sales_discount_amountD" style="border-width:0px" disabled="true">-->
	                                    </td>
	                                    <td width="5%">
	                                    </td>
	                                </tr>
									<tr>
	                                    <th class = "amt-td" width="65%">
											TOTAL
	                                    </th>
	                                    <td width="10%">
	                                    </td>
	                                    <td width="20%">
	                                        <input type="text" class="form-control text-right" name="nds_sales_total_amount" class="form-control bg-light" id="nds_sales_total_amount" style="border-width:0px" hidden="true">
	                                        <input type="text" class="form-control text-right" name="nds_sales_total_amountD" class="form-control bg-light" id="nds_sales_total_amountD" style="border-width:0px" disabled="true">
	                                    </td>
	                                    <td width="5%">
	                                    </td>
	                                </tr>
	                            </table>
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-12 mb-12" id="nds_sales_vat_list">
	                            <table table class="table table-hover table-bordered table-sm" width="100%" cellspacing="0" style="font-size: 14px" id="nds_sales_vat_table">
	                                <tr id="covid_row">
	                                    <th class = "amt-td" width="65%">
											COVID
	                                    </th>
	                                    <td width="10%">
	                                        <input type="text" class="form-control text-center" name="nds_sales_covid_rate" class="form-control bg-light" id="nds_sales_covid_rate" style="border-width:0px">
	                                    </td>
	                                    <td width="20%">
	                                        <input type="text" class="form-control text-right" name="nds_sales_covid_amount" class="form-control bg-light" id="nds_sales_covid_amount" style="border-width:0px" hidden="true">
	                                        <input type="text" class="form-control text-right" name="nds_sales_covid_amountD" class="form-control bg-light" id="nds_sales_covid_amountD" style="border-width:0px" disabled="true">
	                                    </td>
	                                    <td width="5%">
	                                    </td>
	                                </tr>
									<tr id="getfund_row">
	                                    <th class = "amt-td">
											GETFUND
	                                    </th>
	                                    <td>
	                                        <input type="text" class="form-control text-center" name="nds_sales_getfund_rate" class="form-control bg-light" id="nds_sales_getfund_rate" style="border-width:0px">
	                                    </td>
	                                    <td>
	                                        <input type="text" class="form-control text-right" name="nds_sales_getfund_amount" class="form-control bg-light" id="nds_sales_getfund_amount" style="border-width:0px" hidden="true">
	                                        <input type="text" class="form-control text-right" name="nds_sales_getfund_amountD" class="form-control bg-light" id="nds_sales_getfund_amountD" style="border-width:0px" disabled="true">
	                                    </td>
	                                    <td>
	                                    </td>
	                                </tr>
									<tr id="nhil_row">
	                                    <th class = "amt-td">
											NHIL
	                                    </th>
	                                    <td>
	                                        <input type="text" class="form-control text-center" name="nds_sales_nhil_rate" class="form-control bg-light" id="nds_sales_nhil_rate" style="border-width:0px">
	                                    </td>
	                                    <td>
	                                        <input type="text" class="form-control text-right" name="nds_sales_nhil_amount" class="form-control bg-light" id="nds_sales_nhil_amount" style="border-width:0px" hidden="true">
	                                        <input type="text" class="form-control text-right" name="nds_sales_nhil_amountD" class="form-control bg-light" id="nds_sales_nhil_amountD" style="border-width:0px" disabled="true">
	                                    </td>
	                                    <td>
	                                    </td>
	                                </tr>
									<tr id="total_levies_row">
	                                    <th class = "amt-td">
											TOTAL LEVIES
	                                    </th>
	                                    <td>
	                                        <!--<input type="text" class="form-control text-center" name="stock_purch_total_cgn_rate" class="form-control bg-light" id="nds_sales_total_cgn_rate" style="border-width:0px">-->
	                                    </td>
	                                    <td>
	                                        <input type="text" class="form-control text-right" name="nds_sales_total_levies_amount" class="form-control bg-light" id="nds_sales_total_levies_amount" style="border-width:0px" hidden="true">
	                                        <input type="text" class="form-control text-right" name="nds_sales_total_levies_amountD" class="form-control bg-light" id="nds_sales_total_levies_amountD" style="border-width:0px" disabled="true">
	                                    </td>
	                                    <td>
	                                    </td>
	                                </tr>
									<tr id="total_after_levies_row">
	                                    <th class = "amt-td">
											TOTAL
	                                    </th>
	                                    <td>
	                                        <!--<input type="text" class="form-control text-center" name="stock_purch_total_cgn_rate" class="form-control bg-light" id="stock_purch_total_cgn_rate" style="border-width:0px">-->
	                                    </td>
	                                    <td>
	                                        <input type="text" class="form-control text-right" name="nds_sales_total_after_levies_amount" class="form-control bg-light" id="nds_sales_total_after_levies_amount" style="border-width:0px" hidden="true">
	                                        <input type="text" class="form-control text-right" name="nds_sales_total_after_levies_amountD" class="form-control bg-light" id="nds_sales_total_after_levies_amountD" style="border-width:0px" disabled="true">
	                                    </td>
	                                    <td>
	                                    </td>
	                                </tr>
									<tr id="vat_row">
	                                    <th class = "amt-td">
											VAT
	                                    </th>
	                                    <td>
	                                        <input type="text" class="form-control text-center" name="nds_sales_vat_rate" class="form-control bg-light" id="nds_sales_vat_rate" style="border-width:0px">
	                                    </td>
	                                    <td>
	                                        <input type="text" class="form-control text-right" name="nds_sales_vat_amount" class="form-control bg-light" id="nds_sales_vat_amount" style="border-width:0px" hidden="true">
	                                        <input type="text" class="form-control text-right" name="nds_sales_vat_amountD" class="form-control bg-light" id="nds_sales_vat_amountD" style="border-width:0px" disabled="true">
	                                    </td>
	                                    <td>
	                                    </td>
	                                </tr>
									<tr id="net_amount_row">
	                                    <th class = "amt-td">
											NET AMOUNT
	                                    </th>
	                                    <td>
	                                        <!--<input type="text" class="form-control text-center" name="nds_sales_net_amount_rate" class="form-control bg-light" id="nds_sales_net_amount_rate" style="border-width:0px">-->
	                                    </td>
	                                    <td>
	                                        <input type="text" class="form-control text-right" name="nds_sales_net_amount_amount" class="form-control bg-light" id="nds_sales_net_amount_amount" style="border-width:0px" hidden="true">
	                                        <input type="text" class="form-control text-right" name="nds_sales_net_amount_amountD" class="form-control bg-light" id="nds_sales_net_amount_amountD" style="border-width:0px" disabled="true">
	                                    </td>
	                                    <td>
	                                    </td>
	                                </tr>
									<tr id="vat_empty_row">
	                                    <td>
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