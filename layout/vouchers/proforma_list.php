<?php
    //session_start(); 
    require($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/auth.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/header_main.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/navbar_main.php');
    if(isset($_SESSION['search_from'])){$search_from = $_SESSION['search_from'];}else{$search_from = '';};
    if(isset($_SESSION['search_to'])){$search_to = $_SESSION['search_to'];}else{$search_to = '';};
    if(isset($_SESSION['page'])){$page = $_SESSION['page'];}else{$page = '';};
    if(isset($_SESSION['remember_state'])){$remember_state = $_SESSION['remember_state'];}else{$remember_state = 'false';};
    
	date_default_timezone_set("Africa/Accra");
	$date_today = date('Y-m-d');
	$time = date('H-i-sa');
	$company_id = $_SESSION['company_id'];
?>
  <style type="text/css">
    .scroll-card-body {
            max-height: 700px;
            overflow-y: auto;
          }
    .amt-td {
            text-align:right;
          }
    .action-td {
            text-align:center;
          }
</style>
<div class="container-fluid scroll-card-body">
    <div class="card shadow md-4">
        <div class="card-header py-3">
        	<div class="float-left">
	            <h4 class="m-0 font-weight-bold text-primary">
	                Proforma List
	            </h4>
                <div class="input-group">
                    <?php
                        if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Create_Stock_Sales'] == 'Yes')) 
                        {
                            //echo '<a href="/layout/vouchers/proforma_invoice_invoice.php" data-toggle="" id="new_proforma_invoice_invoice_icon">New nds Sales Voucher</a>';
                            //if($_SESSION['company_type_id'] == 6)
                            //{
                                echo '<a href="#" id="new_proforma_invoice_icon">New Proforma Invoice</a>';
                            //};
                        };
                    ?>
                </div>
            </div>
            <div class="float-right">
		        <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <label for="proforma_invoice_name">Name</label>
                        <input type="text" class="form-control border-0 small" name="proforma_invoice_name" id="proforma_invoice_name">
                    </div>
                    <div class="input-group">
                        <label for="proforma_invoice_search_from">From</label>
                        <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="proforma_invoice_search_from" id="proforma_invoice_search_from">
                    </div>
                    <div class="input-group">
                        <label for="proforma_invoice_search_to">To</label>
                        <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="proforma_invoice_search_to" id="proforma_invoice_search_to">
                    </div>
                    <div class="input-group">
                        <a href="#" data-toggle="" id="proforma_invoice_search_icon"><i class="fas fa-search"></i></a>
                    </div>
		        </form>
	        </div>
        </div>
        <div class="card-body">
            <?php
                $query = "SELECT * FROM proforma WHERE company_id = '".$_SESSION['company_id']."' AND date = '$date_today' ORDER BY date DESC";
                $query_run = mysqli_query($con, $query);
            ?>
            <div class="table-responsive" id="proforma_invoice_list_table">
                <table class="table table-hover table-bordered table-sm" id="proforma_invoiceTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class = "action-td">Date</th>
                            <th>Customer</th>
                            <th class = "action-td">Amount</th>
                            <th class = "action-td">Reference No</th>
                            <th>Debit Ledger</th>
                            <th class = "action-td">Action</th>
                        </tr>
                    </thead>
                    <tbody class="pv-table-body">
                        <?php
                            if (mysqli_num_rows($query_run) > 0)
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                                    $ledger_cr = $row['ledger_debit'];
                                    $query_ledger = "SELECT * FROM ledgers WHERE ledger_id='$ledger_cr'";
                                    $query_ledger_run = mysqli_query($con, $query_ledger);
                                    $row_ledger = mysqli_fetch_assoc($query_ledger_run);

                                    $customer_id = $row['customer_id'];
                                    $query_customer = "SELECT * FROM customer WHERE customer_id='$customer_id'";
                                    $result_customer = mysqli_query($con,$query_customer);
                                    $row_customer = mysqli_fetch_assoc($result_customer);
                                    $amount = $row['amount'];
                                    $amount_f = number_format($amount, 2, '.', ',');
                                    ?>
                                    <tr>
                                        <td class = "action-td"><?php echo $row['date'];?></td>
                                        <td><?php echo $row_customer['first_name'].' '.$row_customer['last_name'];?></td>
                                        <td class = "amt-td"><?php echo $amount_f;?></td>
                                        <td class = "action-td"><?php echo $row['reference_no'];?></td>
                                        <td><?php echo $row_ledger['ledger_desc'];?></td>
                                        <td class = "action-td">
                                            <?php
                                            if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_proforma_invoice'] == 'Yes')) 
                                            {
                                                echo '<a href="#" id="btn_edit_proforma_invoice" data-id="'.$row['proforma_invoice_id'].'">Edit</a> | ';
                                            };
                                            if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Create_proforma_invoice'] == 'Yes')) 
                                            {
                                                echo '<a data-id="'.$row['proforma_invoice_id'].'" data-id1="'.$row['customer_id'].'" href="#" id="create_waybill">Waybill</a>';
                                            };
                                            ?>
                                                <!--<a href="#" id="btn_display_proforma_invoice" data-id="<?php //echo $row['proforma_invoice_id'];?>">Display</a>-->
                                                | <a href="#" id="btn_proforma_invoice_invoice_reprint_POS" 
                                                    data-id="<?php echo $row['proforma_invoice_id'];?>"
                                                    data-id1="<?php echo $row['supplied_by'];?>"
                                                >
                                                    Reprint(POS)</a>
                                                | <a href="#" id="btn_proforma_invoice_invoice_reprint_A4" 
                                                    data-id="<?php echo $row['proforma_invoice_id'];?>"
                                                    data-id1="<?php echo $row['supplied_by'];?>"
                                                >
                                                    Reprint(A4)</a>
                                            <?php
                                            if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Delete_proforma_invoice'] == 'Yes'))
                                            {
                                                echo ' | <a href="#" id="btn_delete_proforma_invoice" data-id="'.$row['proforma_invoice_id'].'">Delete</a>';
                                            };
                                            
                                            $created_id = $row['created_by'];
                                            $query_creator = "SELECT * FROM users WHERE id='$created_id'";
                                            $result_creator = mysqli_query($con,$query_creator);
                                            $row_creator = mysqli_fetch_assoc($result_creator);
                                            
                                            $altered_id = $row['altered_by'];
                                            $query_alter = "SELECT * FROM users WHERE id='$altered_id'";
                                            $result_alter = mysqli_query($con,$query_alter);
                                            $row_alter = mysqli_fetch_assoc($result_alter);
                                            ?>
                                            <!--<a href="#" id="btn_delete_proforma_invoice" data-id2="<?php //echo $row['proforma_invoice_id'];?>"><i class="fa fa-trash fa-sm"></i></a>-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class = "action-td" colspan="6"><?php echo '<small>Entered By:'.$row_creator['first_name'].' '.$row_creator['last_name'].': '.$row['created_datetime'].' 
                                        Altered By:'.$row_alter['first_name'].' '.$row_alter['last_name'].': '.$row['altered_datetime'].'</small>';;?></td>
                                    </tr>
                                <?php
                                }
                            }
                            else
                            {
                                echo 'No Sales Not Found';
                            };
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div 
    class="modal fade bd-example-modal-xl" 
    id="proforma_invoice_invoice_delete_modal" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="proforma_invoice_invoice_delete_modal" 
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="proforma_invoice_invoice_delete_modal_title">nds Sales Invoice Deletion</h5>
            </div>
            <form action="#" method="POST">
                <div class="modal-body">
                    <p id="proforma_invoice_invoice_delete_question"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="proforma_invoice_delete_yes" name="proforma_invoice_delete_yes" class="btn btn-danger">Yes</button>
                    <button type="button" id="proforma_invoice_delete_no" name="proforma_invoice_delete_no" class="btn btn-primary" data-dismiss="modal">No</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/proforma_invoice_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/waybill_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/items/customer_setup_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/items/item_search_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/footer_main.php');?>