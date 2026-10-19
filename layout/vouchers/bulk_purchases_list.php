<?php
    //session_start(); 
    require($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/auth.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/header_main.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/navbar_main.php');

    $company_id = $_SESSION['company_id'];
	date_default_timezone_set("Africa/Accra");
	$date_today = date('Y-m-d');
	$time = date('H-i-sa');
    $two_week_earlier = date('Y-m-d', strtotime($date_today .' -14 day'));
?>
<style type="text/css">
    .scroll-card-body {max-height: 700px;overflow-y: auto;}
    .scroll_card_bulk_purchase_ledger_list {max-height: 400px;overflow-y: auto;}
    .amt-td {text-align:right;}
    .action-td {text-align:center;}
</style>
<div class="container-fluid scroll-card-body">
    <div class="card shadow md-4">
        <div class="card-header py-3">
        	<div class="float-left">
	            <h4 class="m-0 font-weight-bold text-primary">
	                Bulk Purchases List
	            </h4>
                    <?php
                      if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Create_Purchases'] == 'Yes')) 
                      {
                        echo '<a href="#" data-toggle="" id="new_bulk_purchase_icon">New Bulk Purchase</a>';
                      };
                    ?>
            </div>
            <div class="float-right">
		        <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <label>Search by Supplier</label>
                        <input type="text" class="form-control border-0 small" name="bulk_purchase_search_name" id="bulk_purchase_search_name">
                    </div>
                    <div class="input-group">
                        <label>From</label>
                        <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="bulk_purchase_search_from" id="bulk_purchase_search_from">
                    </div>
                    <div class="input-group">
                        <label>To</label>
                        <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="bulk_purchase_search_to" id="bulk_purchase_search_to">
                    </div>
                    <div class="input-group">
                        <a href="#" data-toggle="" id="purchase_search_icon"><i class="fas fa-search"></i></a>
                    </div>
		        </form>
	        </div>
        </div>
        <div class="card-body" id="bulk_purchase_list_card_body">
            <?php
                $query_branch_count = "SELECT * FROM branch WHERE company_id = '$company_id'";
                $query_run_branch_count = mysqli_query($con, $query_branch_count);
                if (mysqli_num_rows($query_run_branch_count) > 1)
                {
                    if ($_SESSION['user_type_id'] != 3) 
                    {
                        $query = "SELECT * FROM bulk_purchases WHERE company_id = '$company_id' 
                        AND date BETWEEN '$two_week_earlier' AND '$date_today' ORDER BY 
                        date DESC, bulk_purchase_id ASC";
                    }
                    else
                    {
                        $query = "SELECT * FROM bulk_purchases WHERE company_id = '$company_id' 
                        AND branch_id = '".$_SESSION['branch_id']."' AND date BETWEEN '$two_week_earlier' 
                        AND '$date_today' ORDER BY date DESC, bulk_purchase_id ASC";
                    };
                }
                else
                {
                    $query = "SELECT * FROM bulk_purchases WHERE company_id = '$company_id' 
                    AND date BETWEEN '$two_week_earlier' AND '$date_today' ORDER BY 
                    date DESC, bulk_purchase_id ASC";
                };
                
                $query_run = mysqli_query($con, $query);
            ?>
            <div class="table-responsive" id="bulk_purchases_list_table">
                <table class="table table-hover table-bordered table-sm" id="bulk_purchasesTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class = "action-td" width="10%">Date</th>
                            <th width="15%">Paying Ledger</th>
                            <th class = "action-td" width="10%">Grams</th>
                            <th class = "action-td" width="10%">Water</th>
                            <th class = "action-td" width="10%">Pounds</th>
                            <th class = "action-td" width="10%">Amount</th>
                            <th class = "action-td" width="10%">Payment</th>
                            <th class = "action-td" width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody class="pv-table-body" >
                        <?php
                            if (mysqli_num_rows($query_run) > 0)
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                                    $ledger_cr = $row['ledger_credit'];
                                    $query_ledger = "SELECT * FROM ledgers WHERE ledger_id ='$ledger_cr'";
                                    $query_ledger_run = mysqli_query($con, $query_ledger);
                                    $row_ledger = mysqli_fetch_assoc($query_ledger_run);

                                    $bulk_purchase_id = $row['bulk_purchase_id'];
                                    $total_weight = 0;
                                    $total_water = 0;
                                    $total_pounds = 0;
                                    $total_amount = 0;
                                    $query_purchases = "SELECT * FROM purchases WHERE bulk_purchase_id ='$bulk_purchase_id'";
                                    $query_run_purchases = mysqli_query($con, $query_purchases);
                                    if($query_run_purchases && mysqli_num_rows($query_run_purchases) > 0)
                                    {
                                        while($row_purchases = mysqli_fetch_assoc($query_run_purchases))
                                        {
                                            $total_weight = $total_weight + $row_purchases['weight_both'];
                                            $total_water = $total_water + $row_purchases['water'];
                                            $total_pounds = $total_pounds + $row_purchases['pounds'];
                                            $total_amount = $total_amount + $row_purchases['amount'];
                                        };
                                    };
                                    
                                    $cash_amount = 0;
                                    $query_payment = "SELECT * FROM payment WHERE bulk_purchase_id ='$bulk_purchase_id'";
                                    $query_run_payment = mysqli_query($con, $query_payment);

                                    if(!empty($query_run_payment) && mysqli_num_rows($query_run_payment) > 0) 
                                    {
                                        while($row_payment = mysqli_fetch_assoc($query_run_payment))
                                        {
                                            $cash_amount = $cash_amount + $row_payment['amount'];
                                        };
                                    };
                                    $query_journal = "SELECT * FROM journal WHERE bulk_purchase_id ='$bulk_purchase_id'";
                                    $query_run_journal = mysqli_query($con, $query_journal);
                                    if(!empty($query_run_journal) && mysqli_num_rows($query_run_journal) > 0) 
                                    {
                                        while($row_journal = mysqli_fetch_assoc($query_run_journal))
                                        {
                                            $cash_amount = $cash_amount + $row_journal['amount'];
                                        };
                                    };
                        ?>
                                    <tr>
                                        <td class = "action-td"><?php echo $row['date'];?></td>
                                        <td><?php echo $row_ledger['ledger_desc'];?></td>
                                        <td class = "action-td"><?php echo $total_weight;?></td>
                                        <td class = "action-td"><?php echo $total_water;?></td>
                                        <td class = "action-td"><?php echo $total_pounds;?></td>
                                        <?php
                                            $amount_purchase_f = number_format($total_amount, 2, '.', ',');
                                            $cash_amount_f = number_format($cash_amount, 2, '.', ',');
                                        ?>
                                        <td class = "amt-td"><?php echo $amount_purchase_f;?></td>
                                        <td class = "amt-td"><?php echo $cash_amount_f;?></td>
        	                            <td class = "action-td">
                                            
                                            <?php
                                              if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR 
                                              ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Purchases'] == 'Yes')) 
                                              {
                                                echo '<a href="#" id="btn_edit_bulk_purchase" data-id="'.$row['bulk_purchase_id'].'"><i class="fa fa-edit fa-sm"></i></a> | ';
                                              };
                                            ?>
                                                <a href="#" id="btn_reprint_bulk_purchase" 
                                                    data-id="<?php echo $row['bulk_purchase_id'];?>"
                                                    data-id1="<?php echo $row['ledger_credit'];?>"
                                                    ><i class="fa fa-print fa-sm"></i></a>
                                            <?php
                                              if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR 
                                              ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Delete_Purchases'] == 'Yes')) 
                                              {
                                                echo ' | <a href="#" id="btn_delete_bulk_purchase" data-id="'.$row['bulk_purchase_id'].'"><i class="fa fa-trash fa-sm"></i></a>';
                                              };
                                            ?>
        	                            </td>
                                    </tr>
                        <?php
                                }
                            }
                            else
                            {
                                    echo 'No Bulk Purchases Not Found';
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
    id="bulk_purchase_send_sms_modal" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="bulk_purchase_send_sms_modal" 
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bulk_purchase_send_sms_modal_title">Bulk Purchase - Send SMS</h5>
            </div>
            <form action="#" method="POST">
                <div class="modal-body">
                    <p id="bulk_purchase_send_sms_question"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="bulk_purchase_send_sms_yes" name="bulk_purchase_send_sms_yes" class="btn btn-danger">Yes</button>
                    <button type="button" id="bulk_purchase_send_sms_no" name="bulk_purchase_send_sms_no" class="btn btn-primary" data-dismiss="modal">No</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include('bulk_purchases_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/items/item_delete_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/footer_main.php');?>