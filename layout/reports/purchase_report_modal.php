<div 
class="modal fade hide bd-example-modal-lg" 
id="purchase_report_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="purchase_report_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="purchase_report_modal_header">Purchase Report</h5>
			</div>
			<div class="modal-body">
				<form id="purchase_report_modal_form" method="POST">
	                <div class="panel-body">
	                	<div class="form-row">
	                        <div class="col-md-12 mb-12 form-group">
	                            <label for="purch_report_customer">Customer</label>
	                            <select class="form-control bg-light" name="purch_report_customer" id="purch_report_customer">
					                <option value="ALL">ALL</option>';
			                    <?php
									$company_id = $_SESSION['company_id'];
                                    $sql="SELECT supplier FROM purchases WHERE company_id = '$company_id'";
                                    $result=mysqli_query($con,$sql);
                                    while($row=mysqli_fetch_array($result))
                                    {
                                        echo '<option value ="'.$row['supplier'].'">'.$row['supplier'].'</option>';
                                    }
                                ?>
					        	</select>
	                        </div>
	                    </div>
	                    <div class="form-row">
	                    	<div id="purchase_report_modal_warning"></div>
	                        <div class="col-md-12 mb-12 form-group">
	                            <input type="hidden" name="purch_report_company_id" class="form-control bg-light" id="purch_report_company_id">
	                            <input type="hidden" name="purch_report_user_id" class="form-control bg-light" id="purch_report_user_id">
	                            <input type="hidden" name="purch_report_user_super_id" class="form-control bg-light" id="purch_report_user_super_id">
	                            <label for="purch_report_start_date">Start Date</label>
	                            <input type="date" name="purch_report_start_date" class="form-control bg-light" id="purch_report_start_date">
	                        </div>
	                    </div> 
	                    <div class="form-row">
	                        <div class="col-md-12 mb-12 form-group">
	                            <label for="purch_report_end_date">End Date</label>
	                            <input type="date" name="purch_report_end_date" class="form-control bg-light" id="purch_report_end_date">
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" name="purch_report_ok_btn" id="purch_report_ok_btn" class="btn btn-primary" >Save</button>
	                    <button type="submit" name="purch_report_cancel_btn" id="purch_report_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                </div>
	            </form>
			</div>
		</div>
	</div>
</div>