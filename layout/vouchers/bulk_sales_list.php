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
    .scroll-card-body {
            max-height: 500px;
            overflow-y: auto;
          }
    .scroll_card_bulk_sales_ledger_list {
            max-height: 300px;
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
	                Sales List
	            </h4>
                <?php
                  if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Create_Sales'] == 'Yes')) 
                  {
                    echo '<a href="#" data-toggle="" id="new_bulk_sales_icon">New Bulk Sales</a>';
                  };
                ?>
            </div>
            <div class="float-right">
		        <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <label>Search by Supplier</label>
                        <input type="text" class="form-control border-0 small" name="bulk_sales_search_name" id="bulk_sales_search_name">
                    </div>
                    <div class="input-group">
                        <label>From</label>
                        <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="bulk_sales_search_from" id="bulk_sales_search_from">
                    </div>
                    <div class="input-group">
                        <label>To</label>
                        <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="bulk_sales_search_to" id="bulk_sales_search_to">
                    </div>
                    <div class="input-group">
                        <a href="#" data-toggle="" id="sales_search_icon"><i class="fas fa-search"></i></a>
                    </div>
                </form>
	        </div>
        </div>
        <div class="card-body" id="sales_list_card_body">
            <?php
                $query = "SELECT * FROM bulk_sales WHERE company_id = '$company_id' 
                AND date BETWEEN '$two_week_earlier' AND '$date_today' ORDER BY date DESC, bulk_sales_id ASC";
                $query_run = mysqli_query($con, $query);
            ?>
            <div class="table-responsive" id="bulk_sales_list_table">
                <table class="table table-hover table-bordered table-sm" id="bulksalesTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class = "action-td" width="10%">S/No</th>
                            <th class = "action-td" width="10%">Date</th>
                            <th width="20%">Sold To</th>
                            <th class = "action-td" width="10%">Grams</th>
                            <th class = "action-td" width="10%">Water</th>
                            <th class = "action-td" width="10%">Pounds</th>
                            <th class = "action-td" width="15%">Amount</th>
                            <th width="10%">Cash Received</th>
                            <th class = "action-td" width="5%">Action</th>
                        </tr>
                    </thead>
                    <tbody class="pv-table-body">
                        <?php
                            $i = 0;
                            if (mysqli_num_rows($query_run) > 0)
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                                    $i = ++$i;
                                    $total_weight = 0;
                                    $total_water = 0;
                                    $total_pounds = 0;
                                    $total_amount = 0;
                                    $total_journal = 0;
                                    $total_receipt = 0;
                                    $total_amount_paid = 0;

                                    $bulk_sales_id = $row['bulk_sales_id'];
                                    $ledger_dr = $row['ledger_debit'];
                                    $query_ledger = "SELECT * FROM ledgers WHERE ledger_id ='$ledger_dr'";
                                    $query_ledger_run = mysqli_query($con, $query_ledger);
                                    $row_ledger = mysqli_fetch_assoc($query_ledger_run);
                                    
                                    $query_sales = "SELECT * FROM sales WHERE bulk_sales_id ='$bulk_sales_id'";
                                    $query_sales_run = mysqli_query($con, $query_sales);
                                    while($row_sales = mysqli_fetch_assoc($query_sales_run))
                                    {
                                        $total_weight = $total_weight + $row_sales['weight'];
                                        $total_water = $total_water + $row_sales['water'];
                                        $total_pounds = $total_pounds + $row_sales['pounds'];
                                        $total_amount = $total_amount + $row_sales['amount'];
                                    };
                                    
                                    $query_journal = "SELECT * FROM journal WHERE bulk_sales_id ='$bulk_sales_id'";
                                    $query_journal_run = mysqli_query($con, $query_journal);
                                    while($row_journal = mysqli_fetch_assoc($query_journal_run))
                                    {
                                        $total_journal = $total_journal + $row_journal['amount'];
                                        $total_amount_paid = $total_amount_paid + $row_journal['amount'];
                                    };
                                    
                                    $query_receipt = "SELECT * FROM receipt WHERE bulk_sales_id ='$bulk_sales_id'";
                                    $query_receipt_run = mysqli_query($con, $query_receipt);
                                    while($row_receipt = mysqli_fetch_assoc($query_receipt_run))
                                    {
                                        $total_receipt = $total_receipt + $row_receipt['amount'];
                                        $total_amount_paid = $total_amount_paid + $row_receipt['amount'];
                                    };

                            ?>
                                    <tr>
                                        <td class = "action-td">
                                            <?php echo $i;?>
                                        </td>
                                        <td class = "action-td"><?php echo $row['date'];?></td>
                                        <td><?php echo $row_ledger['ledger_desc'];?></td>
                                        <td class = "action-td"><?php echo $total_weight;?></td>
                                        <td class = "action-td"><?php echo $total_water;?></td>
                                        <td class = "action-td"><?php echo $total_pounds;?></td>
                                        <?php
                                            $total_amount_f = number_format($total_amount, 2, '.', ',');
                                            $total_amount_paid_f = number_format($total_amount_paid, 2, '.', ',');
                                        ?>
                                        <td class = "amt-td"><?php echo $total_amount_f;?></td>
                                        <td class = "amt-td"><?php echo $total_amount_paid_f;?></td>
        	                            <td class = "action-td">
                                            <?php
                                                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Sales'] == 'Yes')) 
                                                {
                                                    echo '<a href="#" id="btn_edit_bulk_sales" data-id="'.$row['bulk_sales_id'].'"><i class="fa fa-edit fa-sm"></i></a> |';
                                                };
                                            ?>
                                              <a href="#" id="btn_bulk_sales_re_print" data-id="<?php echo $row['bulk_sales_id'];?>"><i class="fa fa-print fa-sm"></i></a>
                                            <?php
                                                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Delete_Sales'] == 'Yes'))
                                                {
                                                    echo ' | <a href="#" id="btn_delete_bulk_sales" data-id="'.$row['bulk_sales_id'].'"><i class="fa fa-trash fa-sm"></i></a>';
                                                };
                                            ?>
        	                            </td>
                                    </tr>
                        <?php
                                }
                            }
                            else
                            {
                                    echo 'No Bulk Sales Not Found';
                            };
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('bulk_sales_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/items/item_delete_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/footer_main.php');?>