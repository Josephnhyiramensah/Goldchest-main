<div 
class="modal fade hide bd-example-modal-xl" 
id="mtce_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="mtce_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" style="max-width: 90%;" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="mtce_create_modal_header">Maintenance Vourcher</h5>
				<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>-->
			</div>
			<div class="modal-body">
				<form id="mtce_create_form" method="POST">
	                <div class="panel-body">
	                    <div class="form-row">
	                        <div class="col-md-2 mb-2 form-group">
	                            <input type="hidden" name="mtce_sheet_id" class="form-control bg-light" id="mtce_sheet_id">
	                            <input type="hidden" name="mtce_sheet_branch_id" class="form-control bg-light" id="mtce_sheet_branch_id">
	                            <label for="hiring_debit">Debit</label>
	                            <select class="form-control" name="mtce_debit" id="mtce_debit"> 
	                                <option value="0">Please Select</option>
	                                <?php
	                                	$company_id = $_SESSION['company_id'];
	                                    $sql="SELECT * FROM ledgers WHERE (company_id = '$company_id' AND tb_2=4) OR
										(default_status = 'yes' AND tb_2=4)
										ORDER BY ledger_desc ASC";
	                                    $result = mysqli_query($con,$sql);
                                    	while($row = mysqli_fetch_array($result))
                                    	{
                               				echo'<option value = "'.$row['ledger_id'].'">'.$row['ledger_desc'].'</option>';
                                    	};
	                                ?>
	                            </select>
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="mtce_amount">Total Amount</label>
	                            <input type="text" class="form-control" name="mtce_amount" id="mtce_amount" hidden="true">
	                            <input type="text" class="form-control" name="mtce_amount_2" id="mtce_amount_2" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="mtce_credit_cash">Credit - Cash</label>
	                            <select class="form-control" name="mtce_credit_cash" id="mtce_credit_cash"> 
	                                <option value="0">Please Select</option>
	                                <?php
	                                 	$company_id = $_SESSION['company_id'];
	                                    $sql="SELECT * FROM ledgers WHERE (company_id = '$company_id' AND (tb_4=6 OR tb_4=4)) OR 
										(default_status = 'yes' AND (tb_4=6 OR tb_4=4))
										ORDER BY ledger_desc ASC";
	                                    $result = mysqli_query($con,$sql);
	                                    while($row = mysqli_fetch_array($result))
	                                    {
	                                   		echo'<option value = "'.$row['ledger_id'].'">'.$row['ledger_desc'].'</option>';
	                                    };
	                                ?>
	                            </select>
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="mtce_amount_cash">Cash Amount</label>
	                            <input type="text" class="form-control" name="mtce_amount_cash" id="mtce_amount_cash" hidden="true">
	                            <input type="text" class="form-control" name="mtce_amount_cash_2" id="mtce_amount_cash_2" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="mtce_credit_stock">Credit - Stock</label>
	                            <select class="form-control" name="mtce_credit_stock" id="mtce_credit_stock"> 
	                                <option value="0">Please Select</option>
	                                 <?php
	                                 	$company_id = $_SESSION['company_id'];
	                                    $sql="SELECT * FROM ledgers WHERE 
										(company_id = '$company_id' AND tb_2=4) OR
										(default_status = 'yes' AND tb_2=4)
										ORDER BY ledger_desc ASC";
	                                    $result = mysqli_query($con,$sql);
	                                    while($row = mysqli_fetch_array($result))
	                                    {
	                                   		echo'<option value = "'.$row['ledger_id'].'">'.$row['ledger_desc'].'</option>';
	                                    };
	                                ?>
	                            </select>
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="mtce_amount_stock">Stock Amount</label>
	                            <input type="text" class="form-control" name="mtce_amount_stock" id="mtce_amount_stock" hidden="true">
	                            <input type="text" class="form-control" name="mtce_amount_stock2" id="mtce_amount_stock_2" disabled="true">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="mtce_date">Date</label>
	                            <input type="date" class="form-control" name="mtce_date" id="mtce_date" value="<?php echo  date('Y-m-d');?>">
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="serviced_by">Serviced By</label>
	                            <input type="text" class="form-control" name="serviced_by" id="serviced_by">
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="mtce_address">Address</label>
	                            <input type="text" class="form-control" name="mtce_address" id="mtce_address">
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="mtce_phone">Phone No</label>
	                            <input type="text" class="form-control" name="mtce_phone" id="mtce_phone">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-12 mb-12 form-group">
	                            <label for="mtce_narration">Narration</label>
	                            <input type="text" class="form-control" name="mtce_narration" id="mtce_narration">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-12 mb-12" id="mtce_service_items_list">
	                            <table table class="table table-hover table-bordered table-sm" width="100%" cellspacing="0" style="font-size: 14px" id="mtce_service_items_table">
	                                <tr>
	                                    <th class="action-td" colspan="5" style="background-color:#E4DCCF; color:black">SERVICE LIST</th>
	                                </tr>
	                                <tr>
	                                    <th width="20%" class="action-td">Asset</th>
	                                    <th width="15%" class="action-td">Site</th>
	                                    <th width="50%" class="action-td">Remarks</th>
	                                    <th width="10%" class="action-td">Amount</th>
	                                    <th width="5%" class="action-td">Action</th>
	                                </tr>
	                                <tr id="1">
	                                    <td>
	                                    	<input type="hidden" name="mtce_service_item_list_id[]" class="form-control bg-light" id="mtce_service_item_list_id1">
	                                        <select class="form-control mtce_service_asset_id" name="mtce_service_asset_id[]" id="mtce_service_asset_id1" data-id="1" style="border-width:0px"> 
	                                            <option value="0">Please Select</option>
	                                            <?php
	                                 				$company_id = $_SESSION['company_id'];
	                                                $sql="SELECT * FROM assets WHERE company_id = '$company_id' ORDER BY brand ASC";
	                                                $result=mysqli_query($con,$sql);
	                                                while($row=mysqli_fetch_array($result))
	                                                {
	                                                    echo '<option value ="'.$row['asset_id'].'">'.$row['brand'].' - '.$row['model'].'</option>';
	                                                }
	                                            ?>
	                                        </select>
	                                    </td>
	                                    <td>
	                                        <select class="form-control mtce_service_site_id" name="mtce_service_site_id[]" id="mtce_service_site_id1" data-id="1" style="border-width:0px"> 
	                                            <option value="0">Please Select</option>
	                                            <?php
	                                 				$company_id = $_SESSION['company_id'];
	                                                $sql_wh="SELECT * FROM site WHERE company_id = '$company_id' ORDER BY site ASC"; 
	                                                $result_wh=mysqli_query($con,$sql_wh);
	                                                while($row_wh=mysqli_fetch_array($result_wh))
	                                                {
	                                                    echo '<option value ="'.$row_wh['site_id'].'">'.$row_wh['site'].'</option>';
	                                                }
	                                            ?>
	                                        </select>
	                                    </td>
	                                    <td>
	                                        <input type="text" name="mtce_service_remark[]" class="form-control bg-light" id="mtce_service_remark1" style="border-width:0px">
	                                    </td>
	                                    <td>
	                                        <input type="text" name="mtce_service_amt[]" class="form-control bg-light mtce_service_amt" id="mtce_service_amt1" style="border-width:0px" data-id="1">
	                                    </td>
	                                    <td class="action-td">
	                                        <!--<a href="#" id="delete_hiring_item" data-id="1"><i class="fa fa-trash fa-sm"></i></a>-->
	                                    </td>
	                                </tr>
	                            </table>
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-12 mb-12" id="mtce_stock_items_list">
	                            <table table class="table table-hover table-bordered table-sm" width="100%" cellspacing="0" style="font-size: 14px" id="mtce_stock_items_table">
	                                <tr>
	                                    <th class="action-td" colspan="8" style="background-color:#E4DCCF; color:black">INVENTORY LIST</th>
	                                </tr>
	                                <tr>
	                                    <th width="15%" class="action-td">Stock Item</th>
	                                    <th width="13%" class="action-td">Asset</th>
	                                    <th width="13%" class="action-td">Site</th>
	                                    <th width="10%" class="action-td">Warehouse</th>
	                                    <th width="7%" class="action-td">Qty</th>
	                                    <th width="7%" class="action-td">Price</th>
	                                    <th width="10%" class="action-td">Amount</th>
	                                    <th width="5%" class="action-td">Action</th>
	                                </tr>
	                                <tr id="1">
	                                    <td>
	                                        <select class="form-control mtce_stock_id" name="mtce_stock_id[]" id="mtce_stock_id1" data-id="1" style="border-width:0px"> 
	                                            <option value="0">Please Select</option>
	                                            <?php
	                                 				$company_id = $_SESSION['company_id'];
	                                                $sql_wh="SELECT * FROM stock_items WHERE company_id = '$company_id' ORDER BY stock_item ASC"; 
	                                                $result_wh=mysqli_query($con,$sql_wh);
	                                                while($row_wh=mysqli_fetch_array($result_wh))
	                                                {
	                                                    echo '<option value ="'.$row_wh['stock_item_id'].'">'.$row_wh['stock_item'].'</option>';
	                                                }
	                                            ?>
	                                        </select>
	                                    </td>
	                                    <td>
	                                    	<input type="hidden" name="mtce_stock_item_list_id[]" class="form-control bg-light" id="mtce_stock_item_list_id1">
	                                        <select class="form-control mtce_stock_asset_id" name="mtce_stock_asset_id[]" id="mtce_stock_asset_id1" data-id="1" style="border-width:0px"> 
	                                            <option value="0">Please Select</option>
	                                            <?php
	                                 				$company_id = $_SESSION['company_id'];
	                                                $sql="SELECT * FROM assets WHERE company_id = '$company_id' ORDER BY brand ASC";
	                                                $result=mysqli_query($con,$sql);
	                                                while($row=mysqli_fetch_array($result))
	                                                {
	                                                    echo '<option value ="'.$row['asset_id'].'">'.$row['brand'].' - '.$row['model'].'</option>';
	                                                }
	                                            ?>
	                                        </select>
	                                    </td>
	                                    <td>
	                                        <select class="form-control mtce_stock_site_id" name="mtce_stock_site_id[]" id="mtce_stock_site_id1" data-id="1" style="border-width:0px"> 
	                                            <option value="0">Please Select</option>
	                                            <?php
	                                 				$company_id = $_SESSION['company_id'];
	                                                $sql_site="SELECT * FROM site WHERE company_id = '$company_id' ORDER BY site ASC"; 
	                                                $result_site = mysqli_query($con,$sql_site);
	                                                while($row_site = mysqli_fetch_array($result_site))
	                                                {
	                                                    echo '<option value ="'.$row_site['site_id'].'">'.$row_site['site'].'</option>';
	                                                }
	                                            ?>
	                                        </select>
	                                    </td>
	                                    <td>
											<?php
											if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['user_type_id'] == 2))
											{
												echo '<select class="form-control mtce_stock_wh_id" name="mtce_stock_wh_id[]" id="mtce_stock_wh_id1" data-id="1" style="border-width:0px">';
											}
											else
											{
												echo '<select class="form-control mtce_stock_wh_id" name="mtce_stock_wh_id[]" id="mtce_stock_wh_id1" data-id="1" style="border-width:0px" hidden="true">';
											};
	                                        
	                                            echo '<option value="0">Please Select</option>';
	                                            
	                                 				$company_id = $_SESSION['company_id'];
	                                                $sql_wh="SELECT * FROM warehouse WHERE company_id = '$company_id' ORDER BY warehouse_desc ASC"; 
	                                                $result_wh=mysqli_query($con,$sql_wh);
	                                                while($row_wh=mysqli_fetch_array($result_wh))
	                                                {
														if($row_wh['warehouse_id']== $warehouse_id)
	                                                    {
															echo '<option value ="'.$row_wh['warehouse_id'].'" selected="selected">'.$row_wh['warehouse_desc'].'</option>';
														}
														else
														{
															echo '<option value ="'.$row_wh['warehouse_id'].'">'.$row_wh['warehouse_desc'].'</option>';
														};
	                                                }
	                                        
	                                        echo '</select>';
											if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['user_type_id'] == 2))
											{
												echo '<select class="form-control mtce_stock_wh_idD" name="mtce_stock_wh_idD[]" id="mtce_stock_wh_idD1" data-id="1" style="border-width:0px" hidden="true" disabled="true">';
											}
											else
											{
												echo '<select class="form-control mtce_stock_wh_idD" name="mtce_stock_wh_idD[]" id="mtce_stock_wh_idD1" data-id="1" style="border-width:0px" disabled="true">';
											}; 
	                                            echo '<option value="0">Please Select</option>';
	                                            
	                                 				$company_id = $_SESSION['company_id'];
	                                                $sql_wh="SELECT * FROM warehouse WHERE company_id = '$company_id' ORDER BY warehouse_desc ASC"; 
	                                                $result_wh=mysqli_query($con,$sql_wh);
	                                                while($row_wh = mysqli_fetch_array($result_wh))
	                                                {
														if($row_wh['warehouse_id']== $warehouse_id)
	                                                    {
															echo '<option value ="'.$row_wh['warehouse_id'].'" selected="selected">'.$row_wh['warehouse_desc'].'</option>';
														}
														else
														{
															echo '<option value ="'.$row_wh['warehouse_id'].'">'.$row_wh['warehouse_desc'].'</option>';
														};
	                                                }
	                                            
	                                        echo '</select>';
										?>
	                                    </td>
	                                    <td>
	                                        <input type="text" name="mtce_stock_qty[]" class="form-control bg-light mtce_stock_qty" id="mtce_stock_qty1" data-id="1" style="border-width:0px">
	                                    </td>
	                                    <td>
	                                        <input type="text" name="mtce_stock_price[]" class="form-control bg-light mtce_stock_price" id="mtce_stock_price1" data-id="1" style="border-width:0px">
	                                    </td>
	                                    <td>
	                                        <input type="text" name="mtce_stock_amt[]" class="form-control bg-light" id="mtce_stock_amt1" style="border-width:0px">
	                                    </td>
	                                    <td class="action-td">

	                                    </td>
	                                </tr>
	                            </table>
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" name="mtce_save_btn" id="mtce_save_btn" class="btn btn-primary" >Save</button>
	                    <button type="button" name="mtce_update_btn" id="mtce_update_btn" class="btn btn-primary">Update</button>
	                    <button type="submit" name="mtce_cancel_btn" id="mtce_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                </div>
	            </form>
			</div>
		</div>
	</div>
</div>