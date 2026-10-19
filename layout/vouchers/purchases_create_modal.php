<div 
class="modal fade hide bd-example-modal-xl" 
id="purchase_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="purchase_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" style="max-width: 80%;" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="purchases_create_modal_header">Purchases Invoice</h5>
				<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>-->
			</div>
			<div class="modal-body">
				<form id="purchases_create_form" method="POST">
	                <div class="panel-body">
	                    <div class="form-row">
	                        <?php
	                        if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['company_type_id'] == 3 OR $_SESSION['company_type_id'] == 5) 
          					{
		                        echo '<div class="col-md-3 mb-3 form-group">';
	                        }
	                        else 
	                        {
	                        	echo '<div class="col-md-4 mb-4 form-group">';
	                        };
                            ?>
	                            <input type="hidden" name="purchase_id" class="form-control bg-light" id="purchase_id">
	                            <input type="hidden" name="purch_booking_id" class="form-control bg-light" id="purch_booking_id">
	                            <input type="hidden" name="purch_branch_id" class="form-control bg-light" id="purch_branch_id">
	                            <input type="hidden" name="purch_company_id" class="form-control bg-light" id="purch_company_id">
	                            <input type="hidden" name="purch_user_id" class="form-control bg-light" id="purch_user_id">
	                            <input type="hidden" name="purch_user_super_id" class="form-control bg-light" id="purch_user_super_id">
	                            <label for="purch_debit">Receiving Ledger</label>
	                            <select class="form-control" name="purch_debit" id="purch_debit" hidden="true"> 
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
	                            <select class="form-control" name="purch_debitD" id="purch_debitD" disabled="true"> 
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
	                        <?php
	                        if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['company_type_id'] == 3 OR $_SESSION['company_type_id'] == 5) 
          					{
		                        echo '<div class="col-md-3 mb-3 form-group">';
	                        }
	                        else 
	                        {
	                        	echo '<div class="col-md-4 mb-4 form-group">';
	                        };
                            ?>
	                            <label for="purch_credit">Paying Ledger</label>
	                            <select class="form-control" name="purch_credit" id="purch_credit"> 
	                                <option value="0">Please Select</option>
	                                 <?php
		                                $company_id = $_SESSION['company_id'];
	                                    /*$sql="SELECT * FROM `ledgers` WHERE (`company_id` = '$company_id' AND `tb_4`= 4) OR 
										(`company_id` = '$company_id' AND `tb_4`= 6) OR (`company_id` = '$company_id' 
										AND `tb_4`= 7) OR (default_status = 'yes' AND tb_4 = 6) ORDER BY ledger_desc ASC";*/
										$sql="SELECT * FROM `ledgers` WHERE (`company_id` = '$company_id' AND `tb_2`!= 3 AND `tb_2`!= 4) OR 
										(`default_status` = 'yes' AND `tb_2`!= 3 AND `tb_2`!= 4) ORDER BY ledger_desc ASC";
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
	                        <?php
	                        if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['company_type_id'] == 3 OR $_SESSION['company_type_id'] == 5) 
          					{
		                        echo '<div class="col-md-3 mb-3 form-group">';
								
		                    }
							else
							{
		                        echo '<div class="col-md-3 mb-3 form-group" hidden="true">';
							};
		                            echo '<label for="purch_site">Site</label>
		                            <select class="form-control" name="purch_site" id="purch_site"> 
	                                    <option value="0">Please Select</option>';
	                                    
	                         				$company_id = $_SESSION['company_id'];
	                                        $sql_site="SELECT * FROM site WHERE company_id = '$company_id' ORDER BY site"; 
	                                        $result_site=mysqli_query($con,$sql_site);
	                                        while($row_site=mysqli_fetch_array($result_site))
	                                        {
	                                            echo '<option value ="'.$row_site['site_id'].'">'.$row_site['site'].'</option>';
	                                        };
	                                echo '</select>
		                        </div>';
	                        if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['company_type_id'] == 3 OR $_SESSION['company_type_id'] == 5) 
          					{
		                        echo '<div class="col-md-3 mb-3 form-group">';
	                        }
	                        else 
	                        {
	                        	echo '<div class="col-md-4 mb-4 form-group">';
	                        };
                            ?>
	                            <label for="purch_date">Date</label>
	                            <input type="date" class="form-control" name="purch_date" id="purch_date"  value="<?php echo date('Y-m-d');?>">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="purch_supplied_by">Supplied By</label>
	                            <input type="text" class="form-control" name="purch_supplied_by" id="purch_supplied_by">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="phone_no">Phone No</label>
	                            <input type="text" class="form-control" name="phone_no" id="phone_no">
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="purch_location">Location</label>
	                            <input type="text" class="form-control" name="purch_location" id="purch_location">
	                        </div>
	                        <div class="col-md-1 mb-1 form-group">
	                            <label for="purch_on_pmmc">On PMMC</label>
	                            <select class="form-control" name="purch_on_pmmc" id="purch_on_pmmc"> 
	                                <option value="yes">Yes</option>
	                                <option value="no">No</option>
	                            </select>
	                        </div>
	                        <div class="col-md-3 mb-3 form-group">
	                            <label for="purch_name_on_pmmc">Name on PMMC</label>
	                            <input type="text" class="form-control" name="purch_name_on_pmmc" id="purch_name_on_pmmc">
	                        </div>
	                    </div>

	                    <div class="form-row">
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="purch_product">Product Type</label>
	                            <select class="form-control" name="purch_product" id="purch_product"> 
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
	                            <label for="purch_gram_both">Gram (Both)</label>
	                            <input type="text" class="form-control" name="purch_gram_both" id="purch_gram_both">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="purch_gram">Gram (Big)</label>
	                            <input type="text" class="form-control" name="purch_gram" id="purch_gram">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="purch_water">Water</label>
	                            <input type="text" class="form-control" name="purch_water" id="purch_water">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="purch_price">Price</label>
	                            <input type="text" class="form-control" name="purch_price" id="purch_price">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="purch_pieces">No. of Pieces</label>
	                            <input type="text" class="form-control" name="purch_pieces" id="purch_pieces">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="purch_method">Method</label>
	                            <select class="form-control" name="purch_method" id="purch_method"> 
	                                <option value="Water_Density">Water_Density</option>
	                                <option value="XRF">XRF</option>
	                            </select>
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="purch_purity_discount">%Purity Discount</label>
	                            <input type="text" class="form-control" name="purch_purity_discount" id="purch_purity_discount" hidden="true">
	                            <input type="text" class="form-control" name="purch_purity_discountD" id="purch_purity_discountD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="purch_discounted_karat">Discounted Karat</label>
	                            <input type="text" class="form-control" name="purch_discounted_karat" id="purch_discounted_karat" hidden="true">
	                            <input type="text" class="form-control" name="purch_discounted_karatD" id="purch_discounted_karatD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="purch_discounted_purity">Discounted Purity</label>
	                            <input type="text" class="form-control" name="purch_discounted_purity" id="purch_discounted_purity" hidden="true">
	                            <input type="text" class="form-control" name="purch_discounted_purityD" id="purch_discounted_purityD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="purch_discounted_ppp">Discounted Price Per Pound</label>
	                            <input type="text" class="form-control" name="purch_discounted_ppp" id="purch_discounted_ppp" hidden="true">
	                            <input type="text" class="form-control" name="purch_discounted_pppD" id="purch_discounted_pppD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="purch_discounted_amount">Discounted Amount</label>
	                            <input type="text" class="form-control" name="purch_discounted_amount" id="purch_discounted_amount" hidden="true">
	                            <input type="text" class="form-control" name="purch_discounted_amountD" id="purch_discounted_amountD" disabled="true">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="purch_pounds">Pounds</label>
	                            <input type="text" class="form-control" name="purch_pounds" id="purch_pounds" hidden="true">
	                            <input type="text" class="form-control" name="purch_poundsD" id="purch_poundsD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="purch_density">Density</label>
	                            <input type="text" class="form-control" name="purch_density" id="purch_density" hidden="true">
	                            <input type="text" class="form-control" name="purch_densityD" id="purch_densityD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="purch_karat">Karat</label>
	                            <input type="text" class="form-control" name="purch_karat" id="purch_karat" hidden="true">
	                            <input type="text" class="form-control" name="purch_karatD" id="purch_karatD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="purch_purity">Purity</label>
	                            <input type="text" class="form-control" name="purch_purity" id="purch_purity" hidden="true">
	                            <input type="text" class="form-control" name="purch_purityD" id="purch_purityD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="purch_ppp">Price Per Pound</label>
	                            <input type="text" class="form-control" name="purch_ppp" id="purch_ppp" hidden="true">
	                            <input type="text" class="form-control" name="purch_pppD" id="purch_pppD" disabled="true">
	                        </div>
	                        <div class="col-md-2 mb-2 form-group">
	                            <label for="purch_amount">Amount</label>
	                            <input type="text" class="form-control" name="purch_amount" id="purch_amount" hidden="true">
	                            <input type="text" class="form-control" name="purch_amountD" id="purch_amountD" disabled="true">
	                        </div>
	                    </div>
	                    <div class="form-row">
	                        <div class="col-md-12 mb-12 form-group">
	                            <label for="purch_narration">Narration</label>
	                            <input type="text" class="form-control" name="purch_narration" id="purch_narration">
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" name="purch_save_btn" id="purch_save_btn" class="btn btn-primary" >Save</button>
	                    <button type="button" name="purch_update_btn" id="purch_update_btn" class="btn btn-primary">Update</button>
	                    <button type="submit" name="purch_cancel_btn" id="purch_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                </div>
	            </form>
          		<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/foot.php');?>
			</div>
		</div>
	</div>
</div>