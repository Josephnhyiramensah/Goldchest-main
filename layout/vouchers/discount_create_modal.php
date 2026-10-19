<div 
class="modal fade hide bd-example-modal-xl" 
id="discount_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="discount_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" style="max-width: 60%;" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="discount_create_modal_header">Discount Voucher Creation</h5>
				<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>-->
			</div>
			<div class="modal-body">
				<form id="discount_create_form" method="POST">
	                <div class="panel-body">
	                    <div class="form-row" hidden="true">
	                        <div class="col-md-6 mb-6 form-group">
	                            <input type="hidden" name="discount_id" class="form-control bg-light" id="discount_id">
	                            <input type="hidden" name="discount_admission_id" class="form-control bg-light" id="discount_admission_id">
	                            <label for="discount_debit_ledger">Debit Ledger</label>
	                            <select class="form-control bg-light" name="discount_debit_ledger" id="discount_debit_ledger"> 
	                                <option value="0">Please Select</option>
									<?php
										$company_id = $_SESSION['company_id'];
										$sql="SELECT * FROM ledgers WHERE company_id = '$company_id' OR 
										default_status = 'yes' ORDER BY ledger_desc ASC";
										$result = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($result))
										{
										?>
										<option value = "<?php echo($row['ledger_id'])?>">
											<?php echo($row['ledger_desc'])?>
										</option>
										<?php
										};
									?>
	                            </select>
	                        </div>
	                        <div class="col-md-6 mb-6 form-group">
	                            <label for="discount_credit_ledger">Credit Ledger</label>
	                            <select class="form-control bg-light" name="discount_credit_ledger" id="discount_credit_ledger"> 
	                                <option value="0">Please Select</option>
		                                <?php
		                                	$company_id = $_SESSION['company_id'];
		                                    $sql="SELECT * FROM ledgers WHERE company_id = '$company_id' OR 
											default_status = 'yes' ORDER BY ledger_desc ASC";
		                                    $result = mysqli_query($con,$sql);
		                                    while($row = mysqli_fetch_array($result))
		                                    {
		                                    ?>
		                                    <option value = "<?php echo($row['ledger_id'])?>">
		                                        <?php echo($row['ledger_desc'])?>
		                                    </option>
		                                    <?php
		                                    };
		                                ?>
	                            </select>
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="discount_date">Date</label>
	                            <input type="date" class="form-control bg-light" name="discount_date" id="discount_date" value="<?php echo date('Y-m-d');?>">
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="discount_amount">Amount</label>
	                            <input type="text" class="form-control" name="discount_amount" id="discount_amount">
	                        </div>
	                        <div class="col-md-6 mb-6 form-group">
	                            <label for="discount_narration">Reason</label>
	                            <input type="text" class="form-control bg-light" name="discount_narration" id="discount_narration">
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" name="discount_save_btn" id="discount_save_btn" class="btn btn-primary" >Save</button>
	                    <button type="button" name="discount_update_btn" id="discount_update_btn" class="btn btn-primary">Update</button>
	                    <button type="submit" name="discount_cancel_btn" id="discount_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                </div>
	            </form>
          <?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/foot.php');?>
			</div>
		</div>
	</div>
</div>