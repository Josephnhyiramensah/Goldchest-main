<div 
class="modal fade hide bd-example-modal-xl" 
id="refund_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="refund_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" style="max-width: 60%;" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="refund_create_modal_header">Refund Voucher Creation</h5>
				<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>-->
			</div>
			<div class="modal-body">
				<form id="refund_create_form" method="POST">
	                <div class="panel-body">
	                    <div class="form-row">
	                        <div class="col-md-6 mb-6 form-group">
	                            <input type="hidden" name="refund_id" class="form-control bg-light" id="refund_id">
	                            <input type="hidden" name="refund_receipt_id" class="form-control bg-light" id="refund_receipt_id">
	                            <input type="hidden" name="refund_receipt_amount" class="form-control bg-light" id="refund_receipt_amount">
	                            <label for="refund_debit_ledger">Debit Ledger</label>
	                            <select class="form-control bg-light" name="refund_debit_ledger" id="refund_debit_ledger"> 
	                                <option value="0">Please Select</option>
		                                <?php
		                                	$company_id = $_SESSION['company_id'];
											$sql="SELECT * FROM ledgers WHERE (company_id = '$company_id' AND tb_2 !=4 AND tb_4 !=6) 
											OR (default_status = 'yes' AND tb_2 !=4 AND tb_4 !=6) ORDER BY ledger_desc ASC";
		                                    $result = mysqli_query($con,$sql);
		                                    while($row = mysqli_fetch_array($result))
		                                    {
		                                    	echo '<option value = "'.$row['ledger_id'].'">'.$row['ledger_desc'].'</option>';
		                                    };
		                                ?>
	                            </select>
	                        </div>
	                        <div class="col-md-6 mb-6 form-group">
	                            <label for="refund_credit_ledger">Credit Ledger</label>
	                            <select class="form-control bg-light" name="refund_credit_ledger" id="refund_credit_ledger"> 
	                                <option value="0">Please Select</option>
		                                <?php
		                                	$company_id = $_SESSION['company_id'];
		                                    $sql="SELECT * FROM ledgers WHERE (company_id = '$company_id' AND tb_4 = 6) OR 
											(default_status = 'yes' AND tb_4 = 6) ORDER BY ledger_desc ASC";
		                                    $result = mysqli_query($con,$sql);
		                                    while($row = mysqli_fetch_array($result))
		                                    {
		                                    	echo '<option value = "'.$row['ledger_id'].'">'.$row['ledger_desc'].'</option>';
		                                    };
		                                ?>
	                            </select>
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="refund_date">Date</label>
	                            <input type="date" class="form-control bg-light" name="refund_date" id="refund_date" value="<?php echo date('Y-m-d');?>">
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="refund_amount">Amount</label>
	                            <input type="text" class="form-control bg-light" name="refund_amount" id="refund_amount">
	                        </div>
	                        <div class="col-md-6 mb-6 form-group">
	                            <label for="refund_name">Name</label>
	                            <input type="text" class="form-control bg-light" name="refund_name" id="refund_name">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-12 mb-12 form-group">
	                            <label for="refund_narration">Narration</label>
	                            <input type="text" class="form-control bg-light" name="refund_narration" id="refund_narration">
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" name="refund_save_btn" id="refund_save_btn" class="btn btn-primary" >Save</button>
	                    <button type="button" name="refund_update_btn" id="refund_update_btn" class="btn btn-primary">Update</button>
	                    <button type="submit" name="refund_cancel_btn" id="refund_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                </div>
	            </form>
          <?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/foot.php');?>
			</div>
		</div>
	</div>
</div>