<div 
class="modal fade bd-example-modal-xl" 
id="asset_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="asset_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="asset_create_modal_header">Asset Setup</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="asset_create_form" method="POST">
					<div class="form-row">
						<div class="col-md-12 mb-12">
							<label for="asset_ledger_id">Ledger</label>
							<select class="form-control bg-light" name="asset_ledger_id" id="asset_ledger_id"> 
	                                <option value="0">Please Select</option>
                            <?php
                                $sql="SELECT * FROM ledgers WHERE (company_id = '$company_id' AND tb_3 = 1) 
								OR (default_status = 'yes' AND tb_3 =1) ORDER BY ledger_desc ASC";
                                $result=mysqli_query($con,$sql);
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
						<div class="col-md-12 mb-12">
							<label for="asset_brand">Brand</label>
							<input type="text" class="form-control bg-light" name="asset_brand" id="asset_brand">
							<input type="hidden" class="form-control" name="asset_id" id="asset_id">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-12 mb-12">
							<label for="asset_model">Model</label>
							<input type="text" class="form-control bg-light" name="asset_model" id="asset_model">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-12 mb-12">
							<label for="asset_serial_no">Serial No</label>
							<input type="text" class="form-control bg-light" name="asset_serial_no" id="asset_serial_no">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-6">
							<label for="asset_manu_date">Date Of Manufacture</label>
							<input type="date" class="form-control bg-light" name="asset_manu_date" id="asset_manu_date">
						</div>
						<div class="col-md-6 mb-6">
							<label for="asset_rate_per_hour">Rate Per Hour</label>
							<input type="text" class="form-control bg-light" name="asset_rate_per_hour" id="asset_rate_per_hour">
						</div>
					</div>
				    <div class="modal-footer">
				        <button type="button" name="asset_save_btn" id="asset_save_btn" class="btn btn-primary" >Save</button>
				        <button type="button" name="asset_update_btn" id="asset_update_btn" class="btn btn-primary" >Update</button>
				        <button type="submit" name="asset_cancel_btn" id="asset_cancel_btn" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				    </div>
				</form>
			</div>
		</div>
	</div>
</div>