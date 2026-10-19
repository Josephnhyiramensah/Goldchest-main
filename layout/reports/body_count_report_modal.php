<div 
class="modal fade hide bd-example-modal-lg" 
id="body_count_report_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="body_count_report_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="body_count_report_modal_header">Body Count Report</h5>
			</div>
			<div class="modal-body">
				<form id="body_count_report_modal_form" method="POST">
	                <div class="panel-body">
	                    <div class="form-row">
							<div id="body_count_report_modal_warning"></div>
							<div class="col-md-12 mb-12 form-group">
								<label for="body_count_report_branch_id">Branch</label>
								<select class="form-control bg-light" name="body_count_report_branch_id" id="body_count_report_branch_id"> 
									<option value="ALL">ALL</option>
									<?php
									$company_id = $_SESSION['company_id'];
									$sql="SELECT * FROM branch WHERE company_id = '$company_id' ORDER BY branch_name ASC";
									$result = mysqli_query($con,$sql);
									while($row = mysqli_fetch_array($result))
									{
										echo'<option value = "'.$row['branch_id'].'">'.$row['branch_name'].'</option>';
									};
									?>
								</select>
							</div>
		                </div>
	                    <div class="form-row">
							<div class="col-md-12 mb-12 form-group">
								<label for="body_count_report_type">Type</label>
								<select class="form-control bg-light" name="body_count_report_type" id="body_count_report_type"> 
									<option value="DETAILED">DETAILED</option>
									<option value="SUMMARY">SUMMARY</option>
								</select>
							</div>
		                </div>
		                <div class="form-row">
	                        <div class="col-md-12 mb-12 form-group">
	                            <label for="body_count_report_start_date">Start Date</label>
	                            <input type="date" name="body_count_report_start_date" class="form-control bg-light" id="body_count_report_start_date">
	                        </div>
	                    </div> 
	                    <div class="form-row">
	                        <div class="col-md-12 mb-12 form-group">
	                            <label for="body_count_report_end_date">End Date</label>
	                            <input type="date" name="body_count_report_end_date" class="form-control bg-light" id="body_count_report_end_date">
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" name="body_count_report_ok_btn" id="body_count_report_ok_btn" class="btn btn-primary" >Save</button>
	                    <button type="submit" name="body_count_report_cancel_btn" id="body_count_report_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                </div>
	            </form>
			</div>
		</div>
	</div>
</div>