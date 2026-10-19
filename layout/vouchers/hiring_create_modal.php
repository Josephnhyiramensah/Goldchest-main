<div 
class="modal fade hide bd-example-modal-xl" 
id="hiring_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="hiring_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" style="max-width: 95%;" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="hiring_create_modal_header">Hiring Invoice</h5>
				<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>-->
			</div>
			<div class="modal-body">
				<form id="hiring_create_form" method="POST">
	                <div class="panel-body">
	                    <div class="form-row">
	                        <div class="col-md-4 mb-4 form-group">
	                            <input type="hidden" name="hiring_id" class="form-control bg-light" id="hiring_id">
	                            <input type="hidden" name="hiring_branch_id" class="form-control bg-light" id="hiring_branch_id">
	                            <label for="hiring_debit">Debit</label>
	                            <select class="form-control" name="hiring_debit" id="hiring_debit"> 
	                                <option value="0">Please Select</option>
	                                <?php
	                                	$company_id = $_SESSION['company_id'];
	                                    $sql="SELECT * FROM ledgers WHERE (company_id = '$company_id' AND (tb_4=4 OR tb_4=6)) 
										OR (default_status = 'Yes' AND (tb_4=4 OR tb_4=6)) ORDER BY ledger_desc ASC";
	                                    $result = mysqli_query($con,$sql);
                                    	while($row = mysqli_fetch_array($result))
                                    	{
                               				echo'<option value = "'.$row['ledger_id'].'">'.$row['ledger_desc'].'</option>';
                                    	};
	                                ?>
	                            </select>
	                        </div>
	                        <div class="col-md-4 mb-4 form-group">
	                            <label for="hiring_credit">Credit</label>
	                            <select class="form-control" name="hiring_credit" id="hiring_credit"> 
	                                <option value="0">Please Select</option>
	                                 <?php
	                                 	$company_id = $_SESSION['company_id'];
	                                    $sql="SELECT * FROM ledgers WHERE (company_id = '$company_id' AND tb_2=3) OR 
										(default_status = 'Yes' AND tb_2=3) ORDER BY ledger_desc ASC";
	                                    $result = mysqli_query($con,$sql);
	                                    while($row = mysqli_fetch_array($result))
	                                    {
	                                   		echo'<option value = "'.$row['ledger_id'].'">'.$row['ledger_desc'].'</option>';
	                                    };
	                                ?>
	                            </select>
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="hiring_date">Date</label>
	                            <input type="date" class="form-control" name="hiring_date" id="hiring_date" value="<?php echo  date('Y-m-d');?>">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="hiring_amount">Amount</label>
	                            <input type="text" class="form-control" name="hiring_amount" id="hiring_amount" hidden="true">
	                            <input type="text" class="form-control" name="hiring_amount_2" id="hiring_amount_2" disabled="true">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="hiring_operator">Operator</label>
	                            <input type="text" class="form-control" name="hiring_operator" id="hiring_operator">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="hiring_foreman">Foreman</label>
	                            <input type="text" class="form-control" name="hiring_foreman" id="hiring_foreman">
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="hiring_by">Hired By</label>
	                            <input type="text" class="form-control" name="hiring_by" id="hiring_by">
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="hiring_address">Address</label>
	                            <input type="text" class="form-control" name="hiring_address" id="hiring_address">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="hiring_phone">Phone No</label>
	                            <input type="text" class="form-control" name="hiring_phone" id="hiring_phone">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-12 mb-12 form-group">
	                            <label for="hiring_narration">Narration</label>
	                            <input type="text" class="form-control" name="hiring_narration" id="hiring_narration">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-12 mb-12" id="hiring_items_list">
	                            <table table class="table table-hover table-bordered table-sm" width="100%" cellspacing="0" style="font-size: 14px" id="hiring_items_table">
	                                <tr>
	                                    <th width="35%" class="action-td">Asset</th>
	                                    <th width="10%" class="action-td">Type</th>
	                                    <th width="10%" class="action-td">Start</th>
	                                    <th width="10%" class="action-td">End</th>
	                                    <th width="10%" class="action-td">Hours</th>
	                                    <th width="10%" class="action-td">Rate/hour</th>
	                                    <th width="10%" class="action-td">Amount</th>
	                                    <th width="5%" class="action-td">Action</th>
	                                </tr>
	                                <tr id="1" style="border-top: 1.5px solid black; border-left: 1.5px solid black; border-right: 1.5px solid black;">
	                                    <td>
	                                    	<input type="hidden" name="hiring_item_list_id[]" class="form-control bg-light" id="hiring_item_list_id1">
	                                        <select class="form-control hiring_asset_id" name="hiring_asset_id[]" id="hiring_asset_id1" data-id="1" style="border-width:0px"> 
	                                            <option value="0">Please Select Asset</option>
	                                            <?php
	                                 				$company_id = $_SESSION['company_id'];
	                                                $sql="SELECT * FROM assets WHERE company_id = '$company_id'";
	                                                $result=mysqli_query($con,$sql);
	                                                while($row=mysqli_fetch_array($result))
	                                                {
	                                                    echo '<option value ="'.$row['asset_id'].'">'.$row['brand'].' - '.$row['model'].'</option>';
	                                                }
	                                            ?>
	                                        </select>
	                                    </td>
										<td>
											<select class="form-control hiring_time_entry_type bg-light" name="hiring_time_entry_type[]" id="hiring_time_entry_type1" data-id="1" style="border-width:0px">
												<option value="Meter_Reading">Meter_Reading</option>
												<option value="Real_Time">Real_Time</option>
											</select>
										</td>
	                                    <td>
											<div id="hiring_time_start1">
	                                        	<input type="text" name="hiring_start[]" class="form-control bg-light hiring_start text-center" id="hiring_start1" data-id="1" style="border-width:0px">
											</div>
	                                    </td>
	                                    <td>
											<div id="hiring_time_end1">
	                                        	<input type="text" name="hiring_end[]" class="form-control bg-light hiring_end text-center" id="hiring_end1" data-id="1" style="border-width:0px">
											</div>
	                                    </td>
	                                    <td>
	                                        <input type="text" name="hiring_hour[]" class="form-control bg-light hiring_hour text-center" id="hiring_hour1" data-id="1" style="border-width:0px">
	                                    </td>
	                                    <td>
	                                        <input type="text" name="hiring_rate[]" class="form-control bg-light hiring_rate text-right" id="hiring_rate1" data-id="1" style="border-width:0px">
	                                    </td>
	                                    <td>
	                                        <input type="text" name="hiring_amt[]" class="form-control bg-light text-right hiring_amt" id="hiring_amt1" style="border-width:0px">
	                                    </td>
									</tr>
									<tr id="1" style="border-bottom: 1.5px solid black; border-left: 1.5px solid black; border-right: 1.5px solid black;">
	                                    <td>
	                                        Site:<select class="form-control hiring_site_id" name="hiring_site_id[]" id="hiring_site_id1" data-id="1" style="border-width:0px"> 
	                                            <option value="0">Please Select Site</option>
	                                            <?php
	                                 				$company_id = $_SESSION['company_id'];
	                                                $sql_wh="SELECT * FROM site WHERE company_id = '$company_id' ORDER BY site"; 
	                                                $result_wh=mysqli_query($con,$sql_wh);
	                                                while($row_wh=mysqli_fetch_array($result_wh))
	                                                {
	                                                    echo '<option value ="'.$row_wh['site_id'].'">'.$row_wh['site'].'</option>';
	                                                }
	                                            ?>
	                                        </select>
	                                    </td>
	                                    <td colspan="7">
	                                        Remarks: <input type="text" name="hiring_remark[]" class="form-control bg-light" id="hiring_remark1" style="border-width:0px">
	                                    </td>
	                                    <td class="action-td">
	                                        <!--<a href="#" id="delete_hiring_item" data-id="1"><i class="fa fa-trash fa-sm"></i></a>-->
	                                    </td>
	                                </tr>
	                            </table>
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" name="hiring_save_btn" id="hiring_save_btn" class="btn btn-primary" >Save</button>
	                    <button type="button" name="hiring_update_btn" id="hiring_update_btn" class="btn btn-primary">Update</button>
	                    <button type="submit" name="hiring_cancel_btn" id="hiring_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                </div>
	            </form>
			</div>
		</div>
	</div>
</div>