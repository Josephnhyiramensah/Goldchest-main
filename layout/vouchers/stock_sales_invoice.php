<?php
    //session_start(); 
    require($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/auth.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/header_main.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/navbar_main.php');
    
	date_default_timezone_set("Africa/Accra");
	$date_today = date('Y-m-d');
	$time = date('H-i-sa');
    
    if(isset($_SESSION['warehouse_id'])){$warehouse_id = $_SESSION['warehouse_id'];};
    if(isset($_SESSION['cash_ledger_id'])){$cash_ledger_id = $_SESSION['cash_ledger_id'];};

    if(isset($_SESSION['user_id']))
    {
        $user_id = $_SESSION['user_id'];
        $sql_user = "SELECT * FROM users WHERE id = '$user_id'";
        $result_user = mysqli_query($con,$sql_user);
        $row_user = mysqli_fetch_array($result_user);
    };

    if(isset($_SESSION['branch_id']))
    {
        $branch_id = $_SESSION['branch_id'];
        $sql_branch = "SELECT * FROM branch WHERE branch_id = '$branch_id'";
        $result_branch = mysqli_query($con,$sql_branch);
        $row_branch = mysqli_fetch_array($result_branch);
    };
 ?>
  <style type="text/css">
    .scroll-card {height: 800px;overflow-y: auto;}
    .scroll-card-items {height: 385px;overflow-y: auto;}
    .scroll-card-div {height: 600px;overflow-y: auto;}
    .scroll-card-body {max-height: 700px;overflow-y: auto;}
    .amt-td {text-align:right;}
    .action-td {text-align:center;}
</style>
<div class="container-fluid scroll-card">
    <div class="card shadow md-4">
        <div class="card-header py-3">
        	<div class="float-left">
	            <h4 class="m-0 font-weight-bold text-primary">
	                Sales Invoice
	            </h4>
                <div class="input-group">
                    <a href="#" data-toggle="" id="new_stock_sales_icon">Branch: <?php echo $row_branch['branch_name'];?></a>
                </div>
            </div>
            <div class="float-right">
                <a href="#" data-toggle="" id="stock_sales_invoice_search_item">Search Item</a>
                | 
                <a href="#" data-toggle="" data-id="invoice" id="new_customer_icon">New Customer</a>
                | 
                <a href="#" data-toggle="" data-id="invoice" id="search_customer_icon">Search Customer</a>
	        </div>
        </div>
        <div class="card-body">
            <form action="" method="POST" id="stock_sales_invoice_form">
                <input type="hidden" class="form-control" name="stock_sales_invoice_id" id="stock_sales_invoice_id">
                <div class="form-row">
                    <div class="col-md-5 mb-5 scroll-card-div">
                        <div class="table-responsive" id="stock_sales_invoice_customer_details">
                            <table class="table table-hover table-bordered table-sm" id="stock_sales_invoice_customer_detailsTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <td><strong>Name</strong></td>
                                        <td colspan="2"></td>
                                        <td class="action-td">
                                            <a href="#" data-toggle="" data-id="invoice" id="new_customer_icon">New</a>
                                            | 
                                            <a href="#" data-toggle="" id="search_customer_icon">Search</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Age</strong></td>
                                        <td></td>
                                        <td><strong>Phone No:</strong></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Sex</strong></td>
                                        <td></td>
                                        <td><strong>ID No:</strong></td>
                                        <td></td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="table-responsive" id="stock_sales_invoice_payment_option">
                            <table class="table table-hover table-bordered table-sm" id="stock_sales_invoice_payment_optionTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr id="1">
                                        <th width="60%" class = "action-td"><a href="#" data-toggle="" id="stock_sales_invoice_add_ledger">Ledger <small>(click to add ledger)</small></a></th>
                                        <th width="40%" class = "action-td" colspan="2">Amount</th>
                                    </tr>
                                </thead>
                                <tbody class="pv-table-body">
                                    <tr id="2">
                                        <td width="50%">
                                            <select class="form-control bg-light" name="payment_option_ledger_id[]" id="payment_option_ledger_id2"> 
                                                <option value="0">Please Select</option>
                                                <?php
                                                    $company_id = $_SESSION['company_id'];
                                                    $sql="SELECT * FROM ledgers WHERE (company_id = '$company_id' AND tb_4 = 6) 
                                                    OR (default_status = 'yes' AND tb_4 = 6) OR (company_id = '$company_id' AND tb_4 = 4) 
                                                    OR (default_status = 'yes' AND tb_4 = 4) 
                                                    ORDER BY ledger_desc ASC";
                                                    $result=mysqli_query($con,$sql);
                                                    while($row = mysqli_fetch_array($result))
                                                    {
                                                        if($row['ledger_id'] == $cash_ledger_id)
                                                        {
                                                            echo'<option value = "'.$row['ledger_id'].'" selected="selected">
                                                            '.$row['ledger_desc'].'
                                                            </option>';
                                                        }
                                                        else
                                                        {
                                                            echo'<option value = "'.$row['ledger_id'].'">
                                                            '.$row['ledger_desc'].'
                                                            </option>';
                                                        };
                                                    };
                                                ?>
                                            </select>
                                        </td>
                                        <td width="30%">
                                            <input type="text" name="payment_option_ledger_amount[]" class="form-control payment_option_amount bg-light text-right" id="payment_option_ledger_amount2">
                                        </td>
                                        <td width="20%" class="action-td">
                                            <!--<a href="#" data-toggle="" id="delete_payment_option_ledger">Delete</a>-->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            <table class="table table-hover table-bordered table-sm" id="stock_sales_invoice_payment_optionTotalTable" width="100%" cellspacing="0">
                                <thead>
                                    <th width="60%" class = "amt-td">Total</th>
                                    <th width="30%" class = "action-td">
                                        <input type="text" class="form-control text-right" name="payment_option_total" id="payment_option_total">
                                    </th>
                                    <th width="10%" class = "action-td"></th>
                                </thead>
                                <thead>
                                    <th width="60%" class = "amt-td">Cash Tendered</th>
                                    <th width="30%" class = "action-td">
                                        <input type="text" class="form-control text-right" name="payment_option_cash_tendered" id="payment_option_cash_tendered">
                                    </th>
                                    <th width="10%" class = "action-td"></th>
                                </thead>
                                <thead>
                                    <th width="60%" class = "amt-td">Change</th>
                                    <th width="30%" class = "action-td">
                                        <input type="text" class="form-control text-right" name="payment_option_change" id="payment_option_change">
                                    </th>
                                    <th width="10%" class = "action-td"></th>
                                </thead>
                            </table>
                        </div>
                        <div class="table-responsive" id="stock_sales_invoice_warehouse_cash_ledger">
                            <table class="table table-hover table-bordered table-sm" id="stock_sales_invoice_warehouse_cash_ledgerTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="50%" class = "action-td">Default Warehouse</th>
                                        <th width="50%" class = "action-td">Default Date</th>
                                    </tr>
                                </thead>
                                <tbody class="pv-table-body">
                                    <tr>
                                        <td width="50%">
                                            <select class="form-control bg-light" name="stock_sales_invoice_default_warehouse" id="stock_sales_invoice_default_warehouse" hidden="true"> 
                                                <option value="0">Please Select</option>
                                                    <?php
                                                        $company_id = $_SESSION['company_id'];
                                                        $sql="SELECT * FROM warehouse";
                                                        $result=mysqli_query($con,$sql);
                                                        while($row = mysqli_fetch_array($result))
                                                        {
                                                            if($row['warehouse_id'] == $warehouse_id)
                                                            {
                                                                echo '<option value = "'.$row['warehouse_id'].'" selected="selected">
                                                                '.$row['warehouse_desc'].'</option>';
                                                            }
                                                            else
                                                            {
                                                                echo '<option value = "'.$row['warehouse_id'].'">
                                                                '.$row['warehouse_desc'].'</option>';
                                                            };
                                                        };
                                                    ?>
                                            </select>
                                            <select class="form-control bg-light" name="stock_sales_invoice_default_warehouseD" id="stock_sales_invoice_default_warehouseD" disabled="true"> 
                                                <option value="0">Please Select</option>
                                                    <?php
                                                        $company_id = $_SESSION['company_id'];
                                                        $sql = "SELECT * FROM warehouse";
                                                        $result=mysqli_query($con,$sql);
                                                        while($row = mysqli_fetch_array($result))
                                                        {
                                                            if($row['warehouse_id'] == $warehouse_id)
                                                            {
                                                                echo '<option value = "'.$row['warehouse_id'].'" selected="selected">
                                                                '.$row['warehouse_desc'].'</option>';
                                                            }
                                                            else
                                                            {
                                                                echo '<option value = "'.$row['warehouse_id'].'">
                                                                '.$row['warehouse_desc'].'</option>';
                                                            };
                                                        };
                                                    ?>
                                            </select>
                                        </td>
                                        <td width="50%">
                                            <input type="date" class="form-control bg-light text-center" name="default_date" id="default_date" value="<?php echo $date_today;?>" hidden="true">
                                            <input type="date" class="form-control bg-light text-center" name="default_dateD" id="default_dateD" value="<?php echo $date_today;?>" disabled="true">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-7 mb-7 scroll-card-div">
                        <div class="table-responsive scroll-card-items" id="stock_sales_invoice_list_table">
                            <table class="table table-hover table-bordered table-sm" id="stock_sales_invoiceTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr id="1">
                                        <th width="50%" class = "action-td">Item Description</th>
                                        <th width="10%" class = "action-td">Qty</th>
                                        <th width="10%" class = "action-td">Price</th>
                                        <th width="20%" class = "action-td">Amount</th>
                                        <th width="10%" class = "action-td">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="pv-table-body">
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="table-responsive" id="stock_sales_invoice_total_table">
                            <table class="table table-hover table-bordered table-sm" id="stock_sales_totalTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="40%">Branch: <?php echo $row_branch['branch_name'];?></th>
                                        <th width="30%" class = "amt-td">Sub Total</th>
                                        <th width="30%" class = "action-td">
                                            <input type="hidden" class="form-control text-right" name="stock_sales_invoice_sub_total" id="stock_sales_invoice_sub_total">
                                            <input type="text" class="form-control text-right" name="stock_sales_invoice_sub_totalD" id="stock_sales_invoice_sub_totalD" disabled="true">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th width="40%">User: <?php echo $row_user['first_name'].' '.$row_user['last_name'];?></th>
                                        <th width="30%" class = "amt-td">Discount</th>
                                        <th width="30%" class = "action-td">
                                            <input type="text" class="form-control text-right" name="stock_sales_invoice_discount" id="stock_sales_invoice_discount">
                                            <input type="hidden" class="form-control text-right" name="stock_sales_invoice_discountD" id="stock_sales_invoice_discountD" disabled="true">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th width="40%">Date: <?php echo $date_today;?></th>
                                        <th width="30%" class = "amt-td">Tax</th>
                                        <th width="30%" class = "action-td">
                                            <input type="text" class="form-control text-right" name="stock_sales_invoice_tax" id="stock_sales_invoice_tax">
                                            <input type="hidden" class="form-control text-right" name="stock_sales_invoice_taxD" id="stock_sales_invoice_taxD" disabled="true">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th width="40%">Time: <?php echo $time;?></th>
                                        <th width="30%" class = "amt-td">Net Total</th>
                                        <th width="30%" class = "action-td">
                                            <input type="text" class="form-control text-right" name="stock_sales_invoice_net_total" id="stock_sales_invoice_net_total">
                                            <input type="hidden" class="form-control text-right" name="stock_sales_invoice_net_totalD" id="stock_sales_invoice_net_totalD" disabled="true">
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-2 mb-2">
                        <a href="/layout/vouchers/stock_sales_invoice.php" class="btn btn-primary btn-block" id="stock_sales_invoice_new_tn">New Invoice</a>
                    </div>
                    <div class="col-md-2 mb-2">
                    <button type="submit" name="stock_sales_invoice_hold_btn" id="stock_sales_invoice_hold_btn" class="btn btn-primary btn-block">Hold</button>
                    </div>
                    <div class="col-md-2 mb-2">
                    <button type="submit" name="stock_sales_invoice_void_btn" id="stock_sales_invoice_void_btn" class="btn btn-primary btn-block">Void</button>
                    </div>
                    <div class="col-md-2 mb-2">
                    <button type="submit" name="stock_sales_invoice_tender_btn" id="stock_sales_invoice_tender_btn" class="btn btn-primary btn-block">Tender</button>
                    </div>
                    <div class="col-md-2 mb-2">
                    <button type="submit" name="stock_sales_invoice_save_btn" id="stock_sales_invoice_save_btn" class="btn btn-primary btn-block">Save Invoice</button>
                    </div>
                    <div class="col-md-2 mb-2">
                        <a href="/layout/vouchers/stock_sales_list.php" class="btn btn-danger btn-block" id="stock_sales_invoice_cancel_btn">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
          <?php //include($_SERVER['DOCUMENT_ROOT'] .'/includes/foot.php');?>
    </div>
</div>

<div 
    class="modal fade bd-example-modal-xl" 
    id="stock_sales_invoice_delete_modal" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="stock_sales_invoice_delete_modal" 
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stock_sales_invoice_delete_modal_title">Stock Sales Invoice Deletion</h5>
            </div>
            <form action="#" method="POST">
                <div class="modal-body">
                    <p id="stock_sales_invoice_delete_question"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="stock_sales_delete_yes" name="stock_sales_delete_yes" class="btn btn-danger">Yes</button>
                    <button type="button" id="stock_sales_delete_no" name="stock_sales_delete_no" class="btn btn-primary" data-dismiss="modal">No</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/items/customer_setup_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/items/item_search_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>
<?php //include($_SERVER['DOCUMENT_ROOT'] .'/includes/footer_main.php');?>