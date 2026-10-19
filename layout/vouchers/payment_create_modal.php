<div 
class="modal fade hide bd-example-modal-xl" 
id="payment_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="payment_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" style="max-width: 90%;" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="payment_create_modal_header">Payment Voucher Creation</h5>
				<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>-->
			</div>
			<div class="modal-body">
				<form id="payment_create_form" method="POST">
	                <div class="panel-body">
	                    <div class="form-row">
	                        <div class="col-md-4 mb-4 form-group">
	                            <input type="hidden" name="payment_id" class="form-control bg-light" id="payment_id">
	                            <input type="hidden" name="company_id" class="form-control bg-light" id="company_id">
	                            <input type="hidden" name="user_id" class="form-control bg-light" id="user_id">
	                            <input type="hidden" name="user_super_id" class="form-control bg-light" id="user_super_id">
	                            <label for="payment_credit_ledger">Credit Ledger</label>
	                            <select class="form-control bg-light" name="payment_credit_ledger" id="payment_credit_ledger"> 
	                                <option value="0">Please Select</option>
		                                <?php
		                                	$company_id = $_SESSION['company_id'];
		                                    $sql="SELECT * FROM ledgers WHERE 
											(company_id = '$company_id' AND tb_4=6) OR
											(default_status = 'yes' AND tb_4=6)
											ORDER BY ledger_desc ASC";
		                                    $result=mysqli_query($con,$sql);
		                                    while($row = mysqli_fetch_array($result))
		                                    {
												if($cash_ledger_id == $row['ledger_id'])
												{
													echo '<option value = "'.$row['ledger_id'].'" selected="selected">
													'.$row['ledger_desc'].'</option>';
												}
												else
												{
													echo '<option value = "'.$row['ledger_id'].'">
													'.$row['ledger_desc'].'</option>';
												};
		                                    };
		                                ?>
	                            </select>
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="payment_ref">Reference</label>
	                            <input type="text" name="payment_ref" class="form-control bg-light" id="payment_ref">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="payment_date">Date</label>
	                            <input type="date" class="form-control bg-light" name="payment_date" id="payment_date" value="<?php echo date('Y-m-d');?>">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="payment_amount">Amount</label>
	                            <input type="text" class="form-control" name="payment_amount" id="payment_amount" hidden="true">
	                            <input type="text" class="form-control" name="payment_amountD" id="payment_amountD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="payment_mode">Mode</label>
	                            <select class="form-control bg-light" name="payment_mode" id="payment_mode"> 
	                                <option value="0">Please Select</option>
		                            <option value="cash">Cash</option>
		                            <option value="cheque">Cheque</option>
		                            <option value="momo">MoMo</option>
		                            <option value="bank_transfer">Bank Transfer</option>
		                            <option value="payment_order">Payment Order</option>
		                            <option value="swift">Swift</option>
		                            <option value="visa">Visa</option>
		                            <option value="paypal">PayPal</option>
		                            <option value="credit_card">Credit Card</option>
		                            <option value="debit_card">Debit Card</option>
	                            </select>
	                        </div>
	                    </div>
	                    <div id="bank_details_div" class="form-row" hidden="true">
	                        <div class="col-md-4 mb-4 form-group">
	                            <label for="payment_inst_no">Instrument No</label>
	                            <input type="text" class="form-control bg-light" name="payment_inst_no" id="payment_inst_no">
	                        </div>
	                        <div class="col-md-4 mb-4 form-group">
	                            <label for="payment_bank">Bank</label>
	                            <input type="text" class="form-control bg-light" name="payment_bank" id="payment_bank">
	                        </div>
	                        <div class="col-md-4 mb-4 form-group">
	                            <label for="payment_branch">Branch</label>
	                            <input type="text" class="form-control bg-light" name="payment_branch" id="payment_branch">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="payment_payee">Payee</label>
	                            <input type="text" class="form-control bg-light" name="payment_payee" id="payment_payee">
	                        </div>
	                        <div class="col-md-7 mb-7 form-group">
	                            <label for="payment_narration">Narration</label>
	                            <input type="text" class="form-control bg-light" name="payment_narration" id="payment_narration">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="payment_branch_id">Branch</label>
								<?php
									if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['user_type_id'] == 2))
									{
	                            		echo '<select class="form-control" name="payment_branch_id" id="payment_branch_id">';
									}
									else
									{
	                            		echo '<select class="form-control" name="payment_branch_id" id="payment_branch_id" hidden="true">';
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
	                            		echo '<select class="form-control" name="payment_branch_idD" id="payment_branch_idD" disabled="true" hidden="true">';
									}
									else
									{
	                            		echo '<select class="form-control" name="payment_branch_idD" id="payment_branch_idD" disabled="true">';
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
	                        <div class="col-md-12 mb-12" id="payment_dr_list">
	                            <table table class="table table-hover table-bordered table-sm" width="100%" cellspacing="0" style="font-size: 14px" id="payment_dr_list_table">
	                                <tr>
	                                    <th>Debit Ledger(s)</th><?php
				                        if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['company_type_id'] == 3 OR $_SESSION['company_type_id'] == 5) 
			          					{
					                        echo '<th>Site</th>';
		                                };
	                                    if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['company_type_id'] == 4 OR $_SESSION['company_type_id'] == 5) 
			          					{
					                        echo '<th>Asset</th>';
				                        };
			                            ?>
	                                    <th>Amount</th>
	                                    <th>Narration</th>
	                                    <th>Action</th>
	                                </tr>
	                                <tr id="1">
	                                    <td>
	                                        <select class="form-control payment_led_dr bg-light" name="payment_led_dr[]" id="payment_led_dr1" data-id="1" style="border-width:0px"> 
	                                            <option value="0">Please Select</option>
	                                            <?php
				                                    $sql="SELECT * FROM ledgers 
													WHERE (company_id = '$company_id' AND tb_2 !=3 AND tb_4 !=6)
													OR (default_status = 'Yes' AND tb_2 !=3 AND tb_4 !=6) 
	
													OR (company_id = '$company_id' AND tb_4 !=10 AND tb_4 !=6)
													OR (default_status = 'Yes' AND tb_4 !=10 AND tb_4 !=6)
													ORDER BY ledger_desc ASC";
				                                    $result=mysqli_query($con,$sql);
				                                    	while($row=mysqli_fetch_array($result))
				                                    	{
				                                    ?>
				                                    		<option value = "<?php echo($row['ledger_id'])?>" ><?php echo($row['ledger_desc']) ?></option>
				                                    <?php
				                                    	};
				                                ?>
	                                        </select>
	                                    </td>

				                        <?php
				                        if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['company_type_id'] == 3 OR $_SESSION['company_type_id'] == 5) 
			          					{
					                        echo '<td>
			                                        <select class="form-control payment_site_dr bg-light" name="payment_site_dr[]" id="payment_site_dr1" data-id="1" style="border-width:0px"> 
			                                            <option value="0">Please Select</option>';
			                                            
						                                    $sql_site = "SELECT * FROM site WHERE company_id = '$company_id' ORDER BY site ASC";
						                                    $result_site = mysqli_query($con,$sql_site);
						                                    	while($row_site=mysqli_fetch_array($result_site))
						                                    	{
						                                    		echo '<option value = "'.$row_site['site_id'].'" >'.$row_site['site'].'</option>';
						                                    	};
			                                        echo '</select>
			                                    </td>';
				                        };
				                        if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['company_type_id'] == 4 OR $_SESSION['company_type_id'] == 5) 
			          					{
					                        echo '<td>
			                                        <select class="form-control payment_asset_dr bg-light" name="payment_asset_dr[]" id="payment_asset_dr1" data-id="1" style="border-width:0px"> 
			                                            <option value="0">Please Select</option>';
			                                            
						                                    $sql_asset = "SELECT * FROM assets WHERE company_id = '$company_id' ORDER BY brand ASC";
						                                    $result_asset = mysqli_query($con,$sql_asset);
						                                    	while($row_asset=mysqli_fetch_array($result_asset))
						                                    	{
						                                   
						                                    		echo '<option value = "'.$row_asset['asset_id'].'" >'.$row_asset['brand'].' - '.$row_asset['model'].'</option>';
						                                    
						                                    	};
						                                
			                                        echo '</select>
			                                    </td>';
				                        };
			                            ?>
	                                    
	                                    <td class = "action-td">
	                                        <input type="text" name="payment_dr_amt[]" class="form-control bg-light payment_dr_amt amt-td" id="payment_dr_amt1" data-id="1" style="border-width:0px">
	                                    </td>
	                                    <td class = "action-td">
	                                        <input type="text" name="payment_dr_narration[]" class="form-control bg-light payment_dr_narration" id="payment_dr_narration1" data-id="1" style="border-width:0px">
	                                    </td>
	                                    <td class = "action-td">
	                                        <!--<a href="#" id="delete_payment_dr" data-id="1"><i class="fa fa-trash fa-sm"></i></a>-->
	                                    </td>
	                                </tr>
	                            </table>
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" name="payment_save_btn" id="payment_save_btn" class="btn btn-primary" >Save</button>
	                    <button type="button" name="payment_update_btn" id="payment_update_btn" class="btn btn-primary">Update</button>
	                    <button type="submit" name="payment_cancel_btn" id="payment_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                </div>
	            </form>
          		<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/foot.php');?>
			</div>
		</div>
	</div>
</div>