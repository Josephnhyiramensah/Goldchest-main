<div 
class="modal fade hide bd-example-modal-lg" 
id="customer_stock_report_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="customer_stock_report_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="customer_stock_report_modal_header">Customer Stock Report</h5>
			</div>
			<div class="modal-body">
				<form id="customer_stock_report_modal_form" method="POST">
	                <div class="panel-body">
	                	<div id="customer_stock_report_modal_warning"></div>
                        <div class="form-row">
	                        <div class="col-md-12 mb-12 form-group">
	                            <label for="customer_stock_report_customer_id">Customer</label>
	                            <select class="form-control bg-light" name="customer_stock_report_customer_id" id="customer_stock_report_customer_id">
					            	<option value="ALL">ALL</option>
								<?php
	                                $company_id = $_SESSION['company_id'];
	                                $branch_id = $_SESSION['branch_id'];
									if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['user_type_id'] == 2))
									{
										$sql_ssc="SELECT * FROM customer WHERE company_id = '$company_id' ORDER BY first_name ASC";
									}
									else
									{
										$sql_ssc="SELECT * FROM customer WHERE company_id = '$company_id' AND branch_id = '$branch_id' ORDER BY first_name ASC";
									};
									$result_ssc = mysqli_query($con,$sql_ssc);
									while($row_ssc = mysqli_fetch_array($result_ssc))
									{
										echo '<option value = "'.$row_ssc['customer_id'].'">'.$row_ssc['phone_number'].' - '.$row_ssc['first_name'].' '.$row_ssc['last_name'].'</option>';
									};
			                    ?>
					        	</select>
	                        </div>
	                    </div>
                        <div class="form-row">
	                        <div class="col-md-12 mb-12 form-group">
	                            <label for="customer_stock_report_type">Type</label>
	                            <select class="form-control bg-light" name="customer_stock_report_type" id="customer_stock_report_type">
					            	<option value="SUMMARY">SUMMARY</option>
									<option value="DETAILED">DETAILED</option>
					        	</select>
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-12 mb-12 form-group">
	                            <label for="customer_stock_report_start_date">Start Date</label>
	                            <input type="date" name="customer_stock_report_start_date" class="form-control bg-light" id="customer_stock_report_start_date">
	                        </div>
	                    </div> 
	                    <div class="form-row">
	                        <div class="col-md-12 mb-12 form-group">
	                            <label for="customer_stock_report_end_date">End Date</label>
	                            <input type="date" name="customer_stock_report_end_date" class="form-control bg-light" id="customer_stock_report_end_date">
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" name="customer_stock_report_ok_btn" id="customer_stock_report_ok_btn" class="btn btn-primary" >Save</button>
	                    <button type="submit" name="customer_stock_report_cancel_btn" id="customer_stock_report_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                </div>
	            </form>
			</div>
		</div>
	</div>
</div>