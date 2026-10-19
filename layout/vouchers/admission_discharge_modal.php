<div 
class="modal fade hide bd-example-modal-xl" 
id="admission_discharge_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="admission_discharge_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" style="max-width: 25%;" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="admission_discharge_modal_header">Admission Voucher Creation</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="admission_discharge_form" method="POST">
	                <div class="panel-body">
	                    <div class="form-row">
	                        <div class="col-md-12 mb-12 form-group">
	                            <input type="hidden" name="admission_id_discharge" class="form-control bg-light" id="admission_id_discharge">
	                            <input type="hidden" name="refrigerator_id_discharge" class="form-control bg-light" id="refrigerator_id_discharge">
	                            <label for="admission_date_discharge">Admission Date</label>
	                            <input type="date" name="admission_date_discharge" class="form-control bg-light text-center" id="admission_date_discharge" hidden="true">
	                            <input type="date" name="admission_date_dischargeD" class="form-control bg-light text-center" id="admission_date_dischargeD" disabled="true">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-12 mb-12 form-group">
	                            <label for="discharge_date">Discharge Date</label>
	                            <input type="date" class="form-control bg-light text-center" name="discharge_date" id="discharge_date" value="<?php echo $date_today;?>">
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" name="admission_discharge_btn" id="admission_discharge_btn" class="btn btn-primary">Discharge</button>
	                    <button type="submit" name="admission_cancel_btn" id="admission_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                </div>
	            </form>
          		<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/foot.php');?>
			</div>
		</div>
	</div>
</div>