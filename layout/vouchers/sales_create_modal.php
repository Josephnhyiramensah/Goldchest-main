<div 
class="modal fade hide bd-example-modal-xl" 
id="sales_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="sales_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" style="max-width: 80%;" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="sales_create_modal_header">Sales Invoice</h5>
				<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>-->
			</div>
			<div class="modal-body">
				<form id="sales_create_form" method="POST">
	                <div class="panel-body">
	                    <div class="form-row">
	                        <div class="col-md-4 mb-4 form-group">
	                            <input type="hidden" name="sales_id" class="form-control bg-light" id="sales_id">
	                            <input type="hidden" name="sales_branch_id" class="form-control bg-light" id="sales_branch_id">
	                            <input type="hidden" name="sales_company_id" class="form-control bg-light" id="sales_company_id">
	                            <input type="hidden" name="sales_user_super_id" class="form-control bg-light" id="sales_user_super_id">
	                            <input type="hidden" name="sales_user_id" class="form-control bg-light" id="sales_user_id">
	                            <label for="sales_debit">Receiving Ledger</label>
	                            <select class="form-control" name="sales_debit" id="sales_debit"> 
	                                <option value="0">Please Select</option>
	                                <?php
		                                $company_id = $_SESSION['company_id'];
	                                    $sql="SELECT * FROM ledgers WHERE (`company_id`= '$company_id' AND `tb_1`= 1) OR 
										(`default_status`= 'Yes' AND `tb_1`= 1) ORDER BY ledger_desc ASC";
	                                    $result=mysqli_query($con,$sql);
	                                    	while($row=mysqli_fetch_array($result))
	                                    	{
	                                    ?>
	                                    		<option value = "<?php echo($row['ledger_id'])?>" >
	                                        	<?php echo($row['ledger_desc']) ?>
	                                    		</option>
	                                    <?php
	                                    	}               
	                                ?>
	                            </select>
	                        </div>
	                        <div class="col-md-4 mb-4 form-group">
	                            <label for="sales_credit">Paying Ledger</label>
	                            <select class="form-control" name="sales_credit" id="sales_credit" hidden="true"> 
	                                <option value="0">Please Select</option>
	                                 <?php
	                                    $sql="SELECT * FROM ledgers ORDER BY ledger_desc ASC";
	                                    $result=mysqli_query($con,$sql);
	                                    while($row=mysqli_fetch_array($result))
	                                    {
	                                    ?>
	                                    <option value = "<?php echo($row['ledger_id'])?>" >
	                                        <?php echo($row['ledger_desc']) ?>
	                                    </option>
	                                    <?php
	                                    }               
	                                ?>
	                            </select>
	                            <select class="form-control" name="sales_creditD" id="sales_creditD" disabled="true"> 
	                                <option value="0">Please Select</option>
	                                 <?php
	                                    $sql="SELECT * FROM ledgers ORDER BY ledger_desc ASC";
	                                    $result=mysqli_query($con,$sql);
	                                    while($row=mysqli_fetch_array($result))
	                                    {
	                                    ?>
	                                    <option value = "<?php echo($row['ledger_id'])?>" >
	                                        <?php echo($row['ledger_desc']) ?>
	                                    </option>
	                                    <?php
	                                    }               
	                                ?>
	                            </select>
	                        </div>
	                        <div class="col-md-4 mb-4 form-group">
	                            <label for="sales_date">Date</label>
	                            <input type="date" class="form-control" name="sales_date" id="sales_date" value="<?php echo date('Y-m-d');?>">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="sales_supplied_by">Supplied By</label>
	                            <input type="text" class="form-control" name="sales_supplied_by" id="sales_supplied_by">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="sales_phone_no">Phone No</label>
	                            <input type="text" class="form-control" name="sales_phone_no" id="sales_phone_no">
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="sales_location">Location</label>
	                            <input type="text" class="form-control" name="sales_location" id="sales_location">
	                        </div>
	                        <div class="col-md-1 mb-1 form-group">
	                            <label for="sales_on_pmmc">On PMMC</label>
	                            <select class="form-control" name="sales_on_pmmc" id="sales_on_pmmc"> 
	                                <option value="yes">Yes</option>
	                                <option value="no">No</option>
	                            </select>
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="sales_name_on_pmmc">Name on PMMC</label>
	                            <input type="text" class="form-control" name="sales_name_on_pmmc" id="sales_name_on_pmmc">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-4 mb-4 form-group">
	                            <label for="sales_product">Product Type</label>
	                            <select class="form-control" name="sales_product" id="sales_product"> 
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
	                            <label for="sales_gram">Gram</label>
	                            <input type="text" class="form-control" name="sales_gram" id="sales_gram">
	                            <input type="text" class="form-control" name="sales_gramD" id="sales_gramD" disabled>
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="sales_water">Water</label>
	                            <input type="text" class="form-control" name="sales_water" id="sales_water">
	                            <input type="text" class="form-control" name="sales_waterD" id="sales_waterD" disabled>
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="sales_price">Price</label>
	                            <input type="text" class="form-control" name="sales_price" id="sales_price">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="sales_pieces">No. of Pieces</label>
	                            <input type="text" class="form-control" name="sales_pieces" id="sales_pieces">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="sales_method">Method</label>
	                            <select class="form-control" name="sales_method" id="sales_method"> 
	                                <option value="Water_Density">Water_Density</option>
	                                <option value="XRF">XRF</option>
	                            </select>
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="sales_purity_discount">%Purity Discount</label>
	                            <input type="text" class="form-control" name="sales_purity_discount" id="sales_purity_discount" hidden="true">
	                            <input type="text" class="form-control" name="sales_purity_discountD" id="sales_purity_discountD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="sales_discounted_karat">Discounted Karat</label>
	                            <input type="text" class="form-control" name="sales_discounted_karat" id="sales_discounted_karat" hidden="true">
	                            <input type="text" class="form-control" name="sales_discounted_karatD" id="sales_discounted_karatD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="sales_discounted_purity">Discounted Purity</label>
	                            <input type="text" class="form-control" name="sales_discounted_purity" id="sales_discounted_purity" hidden="true">
	                            <input type="text" class="form-control" name="sales_discounted_purityD" id="sales_discounted_purityD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="sales_discounted_ppp">Discounted Price Per Pound</label>
	                            <input type="text" class="form-control" name="sales_discounted_ppp" id="sales_discounted_ppp" hidden="true">
	                            <input type="text" class="form-control" name="sales_discounted_pppD" id="sales_discounted_pppD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="sales_discounted_amount">Discounted Amount</label>
	                            <input type="text" class="form-control" name="sales_discounted_amount" id="sales_discounted_amount" hidden="true">
	                            <input type="text" class="form-control" name="sales_discounted_amountD" id="sales_discounted_amountD" disabled="true">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="sales_pounds">Pounds</label>
	                            <input type="text" class="form-control" name="sales_pounds" id="sales_pounds" hidden="true">
	                            <input type="text" class="form-control" name="sales_poundsD" id="sales_poundsD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="sales_density">Density</label>
	                            <input type="text" class="form-control" name="sales_density" id="sales_density" hidden="true">
	                            <input type="text" class="form-control" name="sales_densityD" id="sales_densityD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="sales_karat">Karat</label>
	                            <input type="text" class="form-control" name="sales_karat" id="sales_karat" hidden="true">
	                            <input type="text" class="form-control" name="sales_karatD" id="sales_karatD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="sales_purity">Purity</label>
	                            <input type="text" class="form-control" name="sales_purity" id="sales_purity" hidden="true">
	                            <input type="text" class="form-control" name="sales_purityD" id="sales_purityD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="sales_ppp">Price Per Pound</label>
	                            <input type="text" class="form-control" name="sales_ppp" id="sales_ppp" hidden="true">
	                            <input type="text" class="form-control" name="sales_pppD" id="sales_pppD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="sales_amount">Amount</label>
	                            <input type="text" class="form-control" name="sales_amount" id="sales_amount" hidden="true">
	                            <input type="text" class="form-control" name="sales_amountD" id="sales_amountD" disabled="true">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="purchase_gramD">Total Purchase (Top)</label>
	                            <input type="text" class="form-control" name="purchase_gramD" id="purchase_gramD" disabled>
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="purchase_waterD">Total Purchase (Down)</label>
	                            <input type="text" class="form-control" name="purchase_waterD" id="purchase_waterD" disabled>
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="purchase_amountD">Total Purchase Amount</label>
	                            <input type="text" class="form-control" name="purchase_amountD" id="purchase_amountD" disabled="true">
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="profitabilityD">Profitability</label>
	                            <input type="text" class="form-control" name="profitabilityD" id="profitabilityD" disabled="true">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-12 mb-12 form-group">
	                            <label for="sales_narration">Narration</label>
	                            <input type="text" class="form-control" name="sales_narration" id="sales_narration">
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" name="sales_save_btn" id="sales_save_btn" class="btn btn-primary" >Save</button>
	                    <button type="button" name="sales_update_btn" id="sales_update_btn" class="btn btn-primary">Update</button>
	                    <button type="submit" name="sales_cancel_btn" id="sales_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                </div>
		            <div class="form-row">
			            <div class="col-md-6 mb-6">
						 	<div class="table-responsive" id="sales_item_list_table">
						 		
							</div>
						</div>
						<div class="col-md-6 mb-6" id="sold_item_list_div">
							<table class="table table-hover table-bordered table-sm" id="sold_item_list_table" width="100%" cellspacing="0">
				                <thead>
				                    <tr>
				                        <th class = "action-td" colspan="7"><H4>SOLD GOODS</H4></th>
				                    </tr>
				                    <tr data-id="0">
				                        <th>DATE</th>
				                        <th>PURCHASE ID</th>
				                        <th>SUPPLIER</th>
				                        <th>GRAMS</th>
				                        <th>WATER</th>
				                        <th>KARAT</th>
				                        <th>AMOUNT</th>
				                    </tr>
				                </thead>
					                <tbody class="pv-table-body" id="sold_item_list_table_body">
									</tbody>
						    </table>
						</div>
					</div>
	            </form>
          		<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/foot.php');?>
			</div>
		</div>
	</div>
</div>