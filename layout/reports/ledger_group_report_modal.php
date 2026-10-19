<div 
class="modal fade hide bd-example-modal-lg" 
id="ledger_group_report_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="ledger_group_report_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="ledger_group_report_modal_header">Ledger Group Report</h5>
			</div>
			<div class="modal-body">
				<form id="ledger_group_report_modal_form" method="POST">
	                <div class="panel-body">
	                    <div id="ledger_group_report_modal_warning"></div>
	                    <div class="form-row">
		                        <div class="col-md-12 mb-12 form-group">
		                            <label for="ledger_group_report_group_id">Group</label>
		                            <select class="form-control bg-light" name="ledger_group_report_group_id" id="ledger_group_report_group_id"> 
		                                <?php
		                                		/*$company_id = $_SESSION['company_id'];
												if($_SESSION['user_type']=='Normal_User')
												{
													$user_id = $_SESSION['user_id'];
													$sql="SELECT * FROM ledgers WHERE (company_id = '$company_id' OR default_status = 'Yes') AND 
													ledger_id NOT IN (SELECT ledger_id FROM user_cash_ledger WHERE user_id='$user_id')
													ORDER BY ledger_desc ASC";
												}
												else
												{*/
													$sql="SELECT * FROM trial_bal_group_4 ORDER BY tb_4_desc ASC";
												//};
			                                    $result = mysqli_query($con,$sql);
			                                    while($row = mysqli_fetch_array($result))
			                                    {
													echo'<option value = "'.$row['id'].'">'.$row['tb_4_desc'].'</option>';
			                                    };
			                                ?>
		                            </select>
		                        </div>
		                </div>
		                <div class="form-row">
	                        <div class="col-md-12 mb-12 form-group">
	                            <label for="ledger_group_report_start_date">Start Date</label>
	                            <input type="date" name="ledger_group_report_start_date" class="form-control bg-light" id="ledger_group_report_start_date">
	                        </div>
	                    </div> 
	                    <div class="form-row">
	                        <div class="col-md-12 mb-12 form-group">
	                            <label for="ledger_group_report_end_date">End Date</label>
	                            <input type="date" name="ledger_group_report_end_date" class="form-control bg-light" id="ledger_group_report_end_date">
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" name="ledger_group_report_ok_btn" id="ledger_group_report_ok_btn" class="btn btn-primary" >Save</button>
	                    <button type="submit" name="ledger_group_report_cancel_btn" id="ledger_group_report_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                </div>
	            </form>
			</div>
		</div>
	</div>
</div>