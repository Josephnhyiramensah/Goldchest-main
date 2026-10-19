<div 
class="modal fade hide bd-example-modal-xl" 
id="receipt_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="receipt_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" style="max-width: 80%;" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="receipt_create_modal_header">Receipt Voucher Creation</h5>
				<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>-->
			</div>
			<div class="modal-body">
				<form id="receipt_create_form" method="POST">
	                <div class="panel-body">
	                    <div class="form-row">
	                        <div class="col-md-4 mb-4 form-group">
	                            <input type="hidden" name="receipt_id" class="form-control bg-light" id="receipt_id">
	                            <input type="hidden" name="receipt_job_card_id" class="form-control bg-light" id="receipt_job_card_id">
	                            <input type="hidden" name="receipt_admission_id" class="form-control bg-light" id="receipt_admission_id">
	                            <label for="receipt_debit_ledger">Debit Ledger</label>
	                            <select class="form-control bg-light" name="receipt_debit_ledger" id="receipt_debit_ledger"> 
	                                <option value="0">Please Select</option>
		                                <?php
		                                	$company_id = $_SESSION['company_id'];
		                                    $sql="SELECT * FROM ledgers WHERE (company_id = '$company_id' AND tb_4 = 6) OR 
											(default_status = 'yes' AND tb_4 = 6) ORDER BY ledger_desc ASC";
		                                    $result=mysqli_query($con,$sql);
											if(!empty($result) && mysqli_num_rows($result)> 0)
											{
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
											};
		                                ?>
	                            </select>
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="receipt_ref">Reference</label>
	                            <input type="text" name="receipt_ref" class="form-control bg-light" id="receipt_ref">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="receipt_date">Date</label>
	                            <input type="date" class="form-control bg-light" name="receipt_date" id="receipt_date" value="<?php echo date('Y-m-d');?>">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="receipt_amount">Amount</label>
	                            <input type="text" class="form-control" name="receipt_amount" id="receipt_amount" hidden="true">
	                            <input type="text" class="form-control" name="receipt_amountD" id="receipt_amountD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="receipt_mode">Mode</label>
	                            <select class="form-control bg-light" name="receipt_mode" id="receipt_mode"> 
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
	                            <label for="receipt_inst_no">Instrument No</label>
	                            <input type="text" class="form-control bg-light" name="receipt_inst_no" id="receipt_inst_no">
	                        </div>
	                        <div class="col-md-4 mb-4 form-group">
	                            <label for="receipt_bank">Bank</label>
	                            <input type="text" class="form-control bg-light" name="receipt_bank" id="receipt_bank">
	                        </div>
	                        <div class="col-md-4 mb-4 form-group">
	                            <label for="receipt_branch">Branch</label>
	                            <input type="text" class="form-control bg-light" name="receipt_branch" id="receipt_branch">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="receipt_received_from">Received From</label>
	                            <input type="text" class="form-control bg-light" name="receipt_received_from" id="receipt_received_from">
	                        </div>
	                        <div class="col-md-7 mb-7 form-group">
	                            <label for="receipt_narration">Narration</label>
	                            <input type="text" class="form-control bg-light" name="receipt_narration" id="receipt_narration">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="receipt_branch_id">Branch</label>
								<?php
									if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['user_type_id'] == 2))
									{
	                            		echo '<select class="form-control" name="receipt_branch_id" id="receipt_branch_id">';
									}
									else
									{
	                            		echo '<select class="form-control" name="receipt_branch_id" id="receipt_branch_id" hidden="true">';
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
	                            		echo '<select class="form-control" name="receipt_branch_idD" id="receipt_branch_idD" disabled="true" hidden="true">';
									}
									else
									{
	                            		echo '<select class="form-control" name="receipt_branch_idD" id="receipt_branch_idD" disabled="true">';
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
	                        <div class="col-md-12 mb-12" id="receipt_cr_list">
	                            <table table class="table table-hover table-bordered table-sm" width="100%" cellspacing="0" style="font-size: 14px" id="receipt_cr_list_table">
	                                <tr>
	                                    <th width="30%">Credit Ledger(s)</th>
	                                    <th width="15%">Amount</th>
	                                    <th width="50%">Narration</th>
	                                    <th width="5%">Action</th>
	                                </tr>
	                                <tr id="1">
	                                    <td>
	                                    	<input type="hidden" name="receipt_cr_id[]" class="form-control bg-light" id="receipt_cr_id1">
	                                        <select class="form-control receipt_led_cr bg-light" name="receipt_led_cr[]" id="receipt_led_cr1" data-id="1" style="border-width:0px"> 
	                                            <option value="0">Please Select</option>
	                                            <?php
		                                			$company_id = $_SESSION['company_id'];
				                                    $sql="SELECT * FROM ledgers WHERE (company_id = '$company_id' AND tb_2 !=4 AND tb_4 !=6) 
													OR (default_status = 'yes' AND tb_2 !=4 AND tb_4 !=6) ORDER BY ledger_desc ASC";
				                                    $result = mysqli_query($con,$sql);
													if(!empty($result) && mysqli_num_rows($result)> 0)
													{
				                                    	while($row = mysqli_fetch_array($result))
				                                    	{
				                                    		?>
				                                    		<option value = "<?php echo($row['ledger_id'])?>" ><?php echo($row['ledger_desc']) ?></option>
				                                    		<?php
				                                    	};
													};
				                                ?>
	                                        </select>
	                                    </td>
	                                    <td class = "action-td">
	                                        <input type="text" name="receipt_cr_amt[]" class="form-control bg-light receipt_cr_amt amt-td" id="receipt_cr_amt1" data-id="1" style="border-width:0px">
	                                    </td>
	                                    <td class = "action-td">
	                                        <input type="text" name="receipt_cr_narration[]" class="form-control bg-light receipt_cr_narration" id="receipt_cr_narration1" data-id="1" style="border-width:0px">
	                                    </td>
	                                    <td class = "action-td">
	                                        <a href="#" id="delete_receipt_cr" data-id="1"><i class="fa fa-trash fa-sm"></i></a>
	                                    </td>
	                                </tr>
	                            </table>
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" name="receipt_save_btn" id="receipt_save_btn" class="btn btn-primary" >Save</button>
	                    <button type="button" name="receipt_update_btn" id="receipt_update_btn" class="btn btn-primary">Update</button>
	                    <button type="submit" name="receipt_cancel_btn" id="receipt_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                </div>
	            </form>
          		<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/foot.php');?>
			</div>
		</div>
	</div>
</div>