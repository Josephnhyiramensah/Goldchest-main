<div 
class="modal fade bd-example" 
id="stock_item_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="stock_item_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" style="max-width:80%" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="stock_item_create_modal_header">Stock Item Setup</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="stock_item_create_form" method="POST">
					<div class="form-row">
						<div class="col-md-9 mb-9" id="stock_item_detail_div">
							<div class="form-row">
								<div class="col-md-7 mb-7">
									<label for="stock_item_name">Stock Item</label>
									<input type="text" class="form-control" name="stock_item_name" id="stock_item_name">
									<input type="hidden" class="form-control" name="stock_item_id" id="stock_item_id">
								</div>
								<div class="col-md-3 mb-3">
									<label for="stock_item_type_id">Stock Item Type</label>
									<select class="form-control" name="stock_item_type_id" id="stock_item_type_id"> 
										<option value="0">Please Select</option>
										<?php
											$sql_unit="SELECT * FROM stock_item_type WHERE company_id='$company_id' ORDER BY stock_item_type ASC";
											$result_unit = mysqli_query($con,$sql_unit);
											while($row_unit=mysqli_fetch_array($result_unit))
											{
												echo '<option value = "'.$row_unit['stock_item_type_id'].'">'.
												$row_unit['stock_item_type'].'</option>';
											}               
										?>
									</select>
								</div>
								<div class="col-md-2 mb-2">
									<label for="unit_of_measure">Unit of Measure</label>
									<select class="form-control" name="unit_of_measure" id="unit_of_measure"> 
										<option value="0">Please Select</option>
										<?php
											$sql_unit="SELECT * FROM unit ORDER BY formal_name ASC";
											$result_unit=mysqli_query($con,$sql_unit);
											while($row_unit=mysqli_fetch_array($result_unit))
											{
											?>
											<option value = "<?php echo($row_unit['unit_id'])?>" >
												<?php echo($row_unit['formal_name']) ?>
											</option>
											<?php
											}               
										?>
									</select>
								</div>
							</div>
							<div class="form-row">
								<?php
									if(
										$_SESSION['company_type_id'] != 5 &&
										$_SESSION['company_type_id'] != 6 && 
										$_SESSION['company_type_id'] != 7 && 
										$_SESSION['company_type_id'] != 8 && 
										$_SESSION['company_type_id'] != 9
										)
									{
										echo '<div class="col-md-3 mb-3">
											<label for="type">Type (Karat)</label>
											<input type="text" class="form-control" name="type" id="type">
										</div>
										<div class="col-md-2 mb-2">
											<label for="grams">Grams (G)</label>
											<input type="text" class="form-control" name="grams" id="grams">
										</div>
										<div class="col-md-2 mb-2">
											<label for="price_per_gram">Price Per Gram (PG)</label>
											<input type="text" class="form-control" name="price_per_gram" id="price_per_gram">
										</div>';
									};
								?>
								<?php
									if(
										$_SESSION['company_type_id'] != 5 &&
										$_SESSION['company_type_id'] != 6 && 
										$_SESSION['company_type_id'] != 7 && 
										$_SESSION['company_type_id'] != 8 && 
										$_SESSION['company_type_id'] != 9
									)
									{
										echo '<div class="col-md-3 mb-3">
											<label for="manufacturer">Manufacturer</label>
											<input type="text" class="form-control" name="manufacturer" id="manufacturer">
										</div>';
									};
								?>
							</div>
							<div class="form-row">
								<div class="col-md-2 mb-2">
									<label for="price_cash">Selling Price</label>
									<input type="text" class="form-control" name="price_cash" id="price_cash">
								</div>
								<div class="col-md-2 mb-2"<?php if($_SESSION['company_id'] != 11){echo 'hidden="true"';};?>>
									<label for="margin_mtce">Selling Margin (Mtce)</label>
									<input type="text" class="form-control" name="margin_mtce" id="margin_mtce" value="0.10">
								</div>
								<div class="col-md-2 mb-2"<?php if($_SESSION['company_id'] != 11){echo 'hidden="true"';};?>>
									<label for="margin_site">Selling Margin (Site)</label>
									<input type="text" class="form-control" name="margin_site" id="margin_site" value="0.30">
								</div>
								<div class="col-md-3 mb-3">
									<label for="block_neg">Block Negative?</label>
									<select class="form-control" name="block_neg" id="block_neg"> 
										<option value="0">Please Select</option>
										<option value="Yes">Yes</option>
										<option value="No">No</option>
									</select>
								</div>
								<div class="col-md-3 mb-3">
									<label for="re_order_level">Re-Order Level</label>
									<input type="text" class="form-control" name="re_order_level" id="re_order_level">
								</div>
								<div class="col-md-3 mb-3" hidden="true">
									<label for="batch">Maintain Batches?</label>
									<select class="form-control" name="batch" id="batch"> 
										<option value="0">Please Select</option>
										<option value="Yes">Yes</option>
										<option value="No">No</option>
									</select>
								</div>
								<div class="col-md-3 mb-3" hidden="true">
									<label for="expiry_date">Maintain Expiry Date?</label>
									<select class="form-control" name="expiry_date" id="expiry_date"> 
										<option value="0">Please Select</option>
										<option value="Yes">Yes</option>
										<option value="No">No</option>
									</select>
								</div>
								<div class="col-md-3 mb-3" hidden="true">
									<label for="days_prompt">Days to Prompt</label>
									<input type="text" class="form-control" name="days_prompt" id="days_prompt">
								</div>
							</div>
							<div class="form-row" hidden="true">
								<div class="col-md-3 mb-3">
									<label for="min_level">Minimum Level</label>
									<input type="text" class="form-control" name="min_level" id="min_level">
								</div>
								<div class="col-md-3 mb-3">
									<label for="max_level">Maximum Level</label>
									<input type="text" class="form-control" name="max_level" id="max_level">
								</div>
								<div class="col-md-3 mb-3">
									<label for="eoq">EOQ</label>
									<input type="text" class="form-control" name="eoq" id="eoq">
								</div>
							</div>
							<?php 
								if(
									$_SESSION['company_type_id'] == 5 || 
									$_SESSION['company_type_id'] == 6 || 
									$_SESSION['company_type_id'] == 7 || 
									$_SESSION['company_type_id'] == 8 || 
									$_SESSION['company_type_id'] == 9
								)
								{
									echo '<div class="form-row" hidden="true">';
								}
								else
								{
									echo '<div class="form-row">';
								};
							?>
								<div class="col-md-12 mb-12">
									<div id="component_list_div">
									<table class="table table-hover table-bordered table-sm" id="stock_item_component_list_table" width="100%" cellspacing="0">
										<thead>
										<tr>
											<th class = "action-td" colspan="5"><H6><strong>COMPONENT</strong></H6></th>
										</tr>
										<tr data-id="0">
											<th class="action-td"><a href="#" data-toggle="" id="add_stock_item_component">Component <small>(click to add)<small></a></th>
											<th class="action-td">Price Per Gram</th>
											<th class="action-td">Grams</th>
											<th class="action-td">Amount</th>
											<th class="action-td">Action</th>
										</tr>
										</thead>
										<tbody class="pv-table-body" id="stock_item_component_list_table_body">
										<tr id="1">
											<td width="40%">
											<select class="form-control bg-light stock_item_component_id " width="50%" name="stock_item_component_id[]" id="stock_item_component_id1"> 
												<option value="0">Please Select</option>
												
													<?php
														$sql_component="SELECT * FROM component ORDER BY component ASC";
														$result_component = mysqli_query($con,$sql_component);
														while($row_component = mysqli_fetch_array($result_component))
														{
														?>
														<option value = "<?php echo($row_component['component_id'])?>">
															<?php echo $row_component['component'];?>
														</option>
														<?php
														}               
													?>
											</select>
											</td>
											<td width="15%">
											<input type="text" class="form-control bg-light stock_item_component_price text-right" name="stock_item_component_price[]" id="stock_item_component_price1" hidden="true">
											<input type="text" class="form-control bg-light stock_item_component_priceD text-right" name="stock_item_component_priceD[]" id="stock_item_component_priceD1" disabled="true">
											</td>
											<td width="15%">
											<input type="text" width="20%" class="form-control bg-light stock_item_component_gram text-right" name="stock_item_component_gram[]" id="stock_item_component_gram1">
											</td>
											<td width="20%">
												<input type="text" class="form-control bg-light stock_item_component_amount text-right" name="stock_item_component_amount[]" id="stock_item_component_amount1" hidden="true">
												<input type="text" class="form-control bg-light stock_item_component_amountD text-right" name="stock_item_component_amountD[]" id="stock_item_component_amountD1" disabled="true">
											</td>
											<td width="10%">
											</td>
										</tr>
										</tbody>
									</table>
									</div>
									<div id="stock_item_component_total_div">
									<table class="table table-hover table-bordered table-sm" id="stock_item_component_list_total_table" width="100%" cellspacing="0">
										<thead>
										<tr data-id="0">
											<th class="action-td" width="40%">TOTAL</th>
											<th class="action-td" width="15%"></th>
											<th class="action-td" width="15%">
											<input type="text" class="form-control bg-light text-right" name="stock_item_component_grams_total" id="stock_item_component_grams_total">
											</th>
											<th class="action-td" width="20%">
											<input type="text" class="form-control bg-light text-right" name="stock_item_component_amount_total" id="stock_item_component_amount_total">
											</th>
											<th class="action-td" width="10%"></th>
										</tr>
										</thead>
									</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 mb-3 text-center" id="stock_item_image_div">
							<div id="stock_item_image">
							</div>
						</div>
					</div>
				    <div class="modal-footer">
				        <button type="button" name="stock_item_save_btn" id="stock_item_save_btn" class="btn btn-primary" >Save</button>
				        <button type="button" name="stock_item_update_btn" id="stock_item_update_btn" class="btn btn-primary" >Update</button>
				        <button type="submit" name="stock_item_cancel_btn" id="stock_item_cancel_btn" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				    </div>
				</form>
			</div>
		</div>
	</div>
</div>