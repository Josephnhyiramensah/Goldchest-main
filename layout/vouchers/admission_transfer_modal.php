<div 
class="modal fade hide bd-example-modal-xl" 
id="admission_transfer_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="admission_transfer_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" style="max-width: 60%;" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="admission_transfer_create_modal_header">Change Refrigerator</h5>
				<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>-->
			</div>
			<div class="modal-body">
				<form id="admission_transfer_create_form" method="POST">
	                <div class="panel-body">
	                    <div class="form-row">
	                        <div class="col-md-5 mb-5 form-group">
	                            <input type="hidden" name="admission_transfer_id" class="form-control bg-light" id="admission_transfer_id">
	                            <input type="hidden" name="admission_transfer_admission_id" class="form-control bg-light" id="admission_transfer_admission_id">
	                            <input type="hidden" name="admission_transfer_list_id" class="form-control bg-light" id="admission_transfer_list_id">
	                            <label for="admission_transfer_current_refrigerator_id">Current Refrigerator</label>
	                            <select class="form-control bg-light" name="admission_transfer_current_refrigerator_id" id="admission_transfer_current_refrigerator_id" hidden="true"> 
	                                <option value="0">Please Select</option>
									<?php
										$sql="SELECT * FROM refrigerator WHERE company_id = '$company_id' AND branch_id = '$branch_id' 
										ORDER BY refrigerator ASC";
										$result = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($result))
										{
											echo '<option value = "'.$row['refrigerator_id'].'">'.$row['refrigerator'].'</option>';
										};
									?>
	                            </select>
	                            <select class="form-control bg-light" name="admission_transfer_current_refrigerator_idD" id="admission_transfer_current_refrigerator_idD" disabled="true"> 
	                                <option value="0">Please Select</option>
									<?php
										$sql="SELECT * FROM refrigerator WHERE company_id = '$company_id' AND branch_id = '$branch_id' 
										ORDER BY refrigerator ASC";
										$result = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($result))
										{
											echo '<option value = "'.$row['refrigerator_id'].'">'.$row['refrigerator'].'</option>';
										};
									?>
	                            </select>
	                        </div>
	                        <div class="col-md-5 mb-5 form-group">
	                            <label for="admission_transfer_current_cubible_id">Current Cubicle</label>
	                            <select class="form-control bg-light" name="admission_transfer_current_cubible_id" id="admission_transfer_current_cubible_id" hidden="true"> 
	                                <option value="0">Please Select</option>
		                                <?php
		                                	$query = "SELECT * FROM cubicle";
											$result = mysqli_query($con,$query);
											while($row = mysqli_fetch_assoc($result))
											{
												echo '<option value="'.$row['cubicle_id'].'">'.$row['cubicle'].'</option>';
											};
		                                ?>
	                            </select>
	                            <select class="form-control bg-light" name="admission_transfer_current_cubible_idD" id="admission_transfer_current_cubible_idD" disabled="true"> 
	                                <option value="0">Please Select</option>
		                                <?php
		                                	$query = "SELECT * FROM cubicle";
											$result = mysqli_query($con,$query);
											while($row = mysqli_fetch_assoc($result))
											{
												echo '<option value="'.$row['cubicle_id'].'">'.$row['cubicle'].'</option>';
											};
		                                ?>
	                            </select>
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="admission_transfer_current_admission_date">Admission Date</label>
	                            <input type="date" class="form-control bg-light" name="admission_transfer_current_admission_date" id="admission_transfer_current_admission_date" hidden="true">
	                            <input type="date" class="form-control bg-light" name="admission_transfer_current_admission_dateD" id="admission_transfer_current_admission_dateD" disabled="true">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-10 mb-10 form-group" id="admission_transfer_new_refrigerator_div">
	                            <label for="admission_transfer_new_refrigerator_id">New Refrigerator</label>
	                            <select class="form-control bg-light admission_transfer_new_refrigerator_id" name="admission_transfer_new_refrigerator_id" id="admission_transfer_new_refrigerator_id"> 
	                                <option value="0">Please Select</option>
									<?php
										$sql="SELECT * FROM refrigerator WHERE company_id = '$company_id' AND branch_id = '$branch_id' 
										ORDER BY refrigerator ASC";
										$result = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($result))
										{
											echo '<option value = "'.$row['refrigerator_id'].'">'.$row['refrigerator'].'</option>';
										};
									?>
	                            </select>
	                        </div>
	                        <div class="col-md-5 mb-5 form-group" id="admission_transfer_new_refrigerator_cubible_div" hidden="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="admission_transfer_new_admission_date">Transfer Date</label>
	                            <input type="date" class="form-control bg-light" name="admission_transfer_new_admission_date" id="admission_transfer_new_admission_date" value="<?php echo date('Y-m-d');?>">
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" name="admission_transfer_save_btn" id="admission_transfer_save_btn" class="btn btn-primary" >Save</button>
	                    <button type="button" name="admission_transfer_update_btn" id="admission_transfer_update_btn" class="btn btn-primary">Update</button>
	                    <button type="submit" name="admission_transfer_cancel_btn" id="admission_transfer_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                </div>
	            </form>
          <?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/foot.php');?>
			</div>
		</div>
	</div>
</div>