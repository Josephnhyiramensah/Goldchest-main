<div 
class="modal fade hide bd-example-modal-lg" 
id="customer_report_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="customer_report_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="customer_report_modal_header">Customer Stock Report</h5>
			</div>
			<div class="modal-body">
				<form id="customer_report_modal_form" method="POST">
	                <div class="panel-body">
	                	<div id="customer_report_modal_warning"></div>
                        <div class="form-row">
	                        <div class="col-md-12 mb-12 form-group">
	                            <label for="customer_report_customer_id">Site/Customer</label>
	                            <select class="form-control bg-light" name="customer_report_customer_id" id="customer_report_customer_id">
								<option value="ALL">ALL</option>
					            <?php
									$company_id = $_SESSION['company_id'];
									if($_SESSION['user_type']=='Normal_User')
									{
										$user_id = $_SESSION['user_id'];
										$sql="SELECT * FROM ledgers WHERE (company_id = '$company_id' OR default_status = 'Yes') AND 
										ledger_id NOT IN (SELECT ledger_id FROM user_cash_ledger WHERE user_id='$user_id')
										ORDER BY ledger_desc ASC";
									}
									else
									{
										$sql="SELECT * FROM ledgers WHERE company_id = '$company_id' OR default_status = 'Yes'
										ORDER BY ledger_desc ASC";
									};
									$result = mysqli_query($con,$sql);
									while($row = mysqli_fetch_array($result))
									{
										echo'<option value = "'.$row['ledger_id'].'">'.$row['ledger_desc'].'</option>';
									};
								?>
					        	</select>
	                        </div>
	                    </div>
                        <div class="form-row">
	                        <div class="col-md-12 mb-12 form-group">
	                            <label for="customer_report_type">Type</label>
	                            <select class="form-control bg-light" name="customer_report_type" id="customer_report_type">
					            	<option value="SUMMARY">SUMMARY</option>
									<option value="DETAILED">DETAILED</option>
					        	</select>
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-12 mb-12 form-group">
	                            <label for="customer_report_start_date">Start Date</label>
	                            <input type="date" name="customer_report_start_date" class="form-control bg-light" id="customer_report_start_date">
	                        </div>
	                    </div> 
	                    <div class="form-row">
	                        <div class="col-md-12 mb-12 form-group">
	                            <label for="customer_report_end_date">End Date</label>
	                            <input type="date" name="customer_report_end_date" class="form-control bg-light" id="customer_report_end_date">
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" name="customer_report_ok_btn" id="customer_report_ok_btn" class="btn btn-primary" >Save</button>
	                    <button type="submit" name="customer_report_cancel_btn" id="customer_report_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                </div>
	            </form>
			</div>
		</div>
	</div>
</div>