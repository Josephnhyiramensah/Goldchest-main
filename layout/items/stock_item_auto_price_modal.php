<div 
class="modal fade hide bd-example-modal-lg" 
id="stock_item_auto_price_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="stock_item_auto_price_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="stock_item_auto_price_modal_header">Price Update</h5>
			</div>
			<div class="modal-body">
				<form id="stock_item_auto_price_modal_form" method="POST">
	                <div class="panel-body">
	                    <div id="stock_item_auto_price_modal_warning"></div>
	                    <div class="form-row">
							<div class="col-md-12 mb-12 form-group">
								<div id="product_type_div">
									<label for="stock_item_auto_price_modal_category">Product Type <small>(e.g. 18K)</small></label>
									<input type="text" name="stock_item_auto_price_modal_category" class="form-control bg-light" id="stock_item_auto_price_modal_category">
								</div>
								<div id="component_div">
									<label for="stock_item_auto_price_modal_component_id">Component</label>
									<select class="form-control bg-light" name="stock_item_auto_price_modal_component_id" id="stock_item_auto_price_modal_component_id"> 
										<option value="0">Please Select</option>
										<?php
											$sql_component="SELECT * FROM component ORDER BY component ASC";
											$result_component = mysqli_query($con,$sql_component);
											while($row_component = mysqli_fetch_array($result_component))
											{
												?>
													<option value = "<?php echo $row_component['component_id'];?>">
														<?php echo $row_component['component'];?>
													</option>
												<?php
											};
										?>
									</select>
								</div>
							</div>
	                    </div>
		                <div class="form-row">
	                        <div class="col-md-12 mb-12 form-group">
	                            <label for="stock_item_auto_price_modal_type">Price Update Type</label>
								<select class="form-control" name="stock_item_auto_price_modal_type" id="stock_item_auto_price_modal_type"> 
									<option value="Increase_By_Percentage">Increase_By_Percentage</option>
									<option value="Increase_By_Amount">Increase_By_Amount</option>
									<option value="Decrease_By_Percentage">Decrease_By_Percentage</option>
									<option value="Decrease_By_Amount">Decrease_By_Amount</option>
								</select>
	                        </div>
	                    </div> 
	                    <div class="form-row">
	                        <div class="col-md-12 mb-12 form-group">
	                            <label for="stock_item_auto_price_modal_amount">Amount <small>(if by 10% percentage: type 0.10, if by 10.00; type 10)</small></label>
	                            <input type="text" name="stock_item_auto_price_modal_amount" class="form-control bg-light" id="stock_item_auto_price_modal_amount">
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" name="stock_item_auto_price_modal_ok_btn" id="stock_item_auto_price_modal_ok_btn" class="btn btn-primary" >Save</button>
	                    <button type="submit" name="stock_item_auto_price_modal_cancel_btn" id="stock_item_auto_price_modal_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                </div>
	            </form>
			</div>
		</div>
	</div>
</div>