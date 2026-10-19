<div 
class="modal fade hide bd-example-modal-xl" 
id="booking_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="booking_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" style="max-width: 80%;" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="booking_create_modal_header">Booking Voucher</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="booking_create_form" method="POST">
	                <div class="panel-body">
	                    <div class="form-row">
	                        <div class="col-md-4 mb-4 form-group">
	                            <input type="hidden" name="booking_id" class="form-control bg-light" id="booking_id">
	                            
	                            <label for="booking_credit">Customer</label>
	                            <select class="form-control" name="booking_credit" id="booking_credit"> 
	                                <option value="0">Please Select</option>
	                                 <?php
		                                $company_id = $_SESSION['company_id'];
	                                    $sql="SELECT * FROM `ledgers` WHERE (`company_id` = '$company_id' AND `tb_4`= 4) OR 
										(default_status = 'yes' AND tb_4 = 4) ORDER BY ledger_desc ASC";
	                                    $result=mysqli_query($con,$sql);
	                                    while($row=mysqli_fetch_array($result))
	                                    {
	                                    ?>
	                                    <option value = "<?php echo($row['ledger_id'])?>">
	                                        <?php echo($row['ledger_desc']) ?>
	                                    </option>
	                                    <?php
	                                    }               
	                                ?>
	                            </select>
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="booking_phone_no">Phone No</label>
	                            <input type="text" class="form-control" name="booking_phone_no" id="booking_phone_no">
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="booking_location">Location</label>
	                            <input type="text" class="form-control" name="booking_location" id="booking_location">
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="booking_date">Date</label>
	                            <input type="date" class="form-control" name="booking_date" id="booking_date"  value="<?php echo date('Y-m-d');?>">
	                        </div>
	                    </div>

	                    <div class="form-row">
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="booking_product">Product Type</label>
	                            <select class="form-control" name="booking_product" id="booking_product"> 
	                                <option value="0">Please Select</option>
	                                 <?php
	                                    $sql="SELECT * FROM product ORDER BY product_desc ASC";
	                                    $result=mysqli_query($con,$sql);
	                                    while($row=mysqli_fetch_array($result))
	                                    {
	                                    ?>
	                                    <option value = "<?php echo($row['product_id'])?>" >
	                                        <?php echo($row['product_desc']) ?>
	                                    </option>
	                                    <?php
	                                    }               
	                                ?>
	                            </select>
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="booking_gram_both">Gram (Both)</label>
	                            <input type="text" class="form-control" name="booking_gram_both" id="booking_gram_both">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="booking_gram">Gram (Big)</label>
	                            <input type="text" class="form-control" name="booking_gram" id="booking_gram">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="booking_water">Water</label>
	                            <input type="text" class="form-control" name="booking_water" id="booking_water">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="booking_price">Price</label>
	                            <input type="text" class="form-control" name="booking_price" id="booking_price">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="booking_amount">Amount</label>
	                            <input type="text" class="form-control" name="booking_amount" id="booking_amount" hidden="true">
	                            <input type="text" class="form-control" name="booking_amountD" id="booking_amountD" disabled="true">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="booking_pounds">Pounds</label>
	                            <input type="text" class="form-control" name="booking_pounds" id="booking_pounds" hidden="true">
	                            <input type="text" class="form-control" name="booking_poundsD" id="booking_poundsD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="booking_density">Density</label>
	                            <input type="text" class="form-control" name="booking_density" id="booking_density" hidden="true">
	                            <input type="text" class="form-control" name="booking_densityD" id="booking_densityD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="booking_karat">Karat</label>
	                            <input type="text" class="form-control" name="booking_karat" id="booking_karat" hidden="true">
	                            <input type="text" class="form-control" name="booking_karatD" id="booking_karatD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="booking_purity">Purity</label>
	                            <input type="text" class="form-control" name="booking_purity" id="booking_purity" hidden="true">
	                            <input type="text" class="form-control" name="booking_purityD" id="booking_purityD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="booking_ppp">Price Per Pound</label>
	                            <input type="text" class="form-control" name="booking_ppp" id="booking_ppp" hidden="true">
	                            <input type="text" class="form-control" name="booking_pppD" id="booking_pppD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="booking_pieces">No. of Pieces</label>
	                            <input type="text" class="form-control" name="booking_pieces" id="booking_pieces">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-12 mb-12 form-group">
	                            <label for="booking_narration">Narration</label>
	                            <input type="text" class="form-control" name="booking_narration" id="booking_narration">
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" name="booking_save_btn" id="booking_save_btn" class="btn btn-primary" >Save</button>
	                    <button type="button" name="booking_update_btn" id="booking_update_btn" class="btn btn-primary">Update</button>
	                    <button type="submit" name="booking_cancel_btn" id="booking_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                </div>
	            </form>
          		<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/foot.php');?>
			</div>
		</div>
	</div>
</div>