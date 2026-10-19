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
	                Stock Purchases List
	            </h4>
                <div class="input-group">
                    <a href="#" data-toggle="" id="new_stock_purchase_icon">New Stock Purchase Voucher</a>
                </div>
            </div>
            <div class="float-right">
		        <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <label>Name</label>
                        <input type="text" class="form-control border-0 small" name="stock_purchase_name" id="stock_purchase_name">
                    </div>
                    <div class="input-group">
                        <label>From</label>
                            <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="stock_purchase_search_from" id="stock_purchase_search_from">
                    </div>
                    <div class="input-group">
                        <label>To</label>
                            <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="stock_purchase_search_to" id="stock_purchase_search_to">
                    </div>
                    <div class="input-group">
                        <a href="#" data-toggle="" id="stock_purchase_search_icon"><i class="fas fa-search"></i></a>
                    </div>
		        </form>
	        </div>
        </div>
        <div class="card-body">
            <?php
                $company_id = $_SESSION['company_id'];
                $query = "SELECT * FROM stock_purchases WHERE company_id = '$company_id' AND date = '$date_today' ORDER BY date DESC";
                $query_run = mysqli_query($con, $query);
            ?>
            <div class="table-responsive" id="stock_purchases_list_table">
                <table class="table table-hover table-bordered table-sm" id="stock_purchasesTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class = "action-td">Purchase ID</th>
                            <th class = "action-td">Date</th>
                            <th>Supplied By</th>
                            <th class = "action-td">Amount</th>
                            <th class = "action-td">Invoice No</th>
                            <th>Credit Ledger</th>
                            <th class = "action-td">Action</th>
                        </tr>
                    </thead>
                    <tbody class="pv-table-body">
                        <?php
                            if (mysqli_num_rows($query_run) > 0)
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                                    $ledger_cr = $row['ledger_credit'];
                                    $query_ledger = "SELECT * FROM ledgers WHERE ledger_id='$ledger_cr'";
                                    $query_ledger_run = mysqli_query($con, $query_ledger);
                                    $row_ledger = mysqli_fetch_assoc($query_ledger_run);
                        ?>
                                    <tr>
                                        <td class = "action-td">
                                        <?php
                                            if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Stock_Purchase'] == 'Yes')) 
                                            {
                                                echo '<a href="#" id="btn_edit_stock_purchase" data-id="'.$row['stock_purchase_id'].'">'.$row['sno'].'</a>';
                                            }
                                        ?>
                                        </td>
                                        <td class = "action-td"><?php echo $row['date'];?></td>
                                        <td><?php echo $row['supplied_by'];?></td>
                                        <td class = "amt-td"><?php echo $row['amount'];?></td>
                                        <td class = "action-td"><?php echo $row['reference_no'];?></td>
                                        <td><?php echo $row_ledger['ledger_desc'];?></td>
        	                            <td class = "action-td">
                                        <?php
                                            if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Delete_Stock_Purchase'] == 'Yes')) 
						                    {
							                    echo '<a href="#" id="btn_delete_stock_purchase" data-id="'.$row['stock_purchase_id'].'">
                                                    <i class="fa fa-trash fa-sm"></i>
                                                </a>';
                                            };
                                        echo '</td>
                                    </tr>';
                                            //CREATOR
                                                $created_id = $row['created_by'];
                                                $query_creator = "SELECT * FROM users WHERE id='$created_id'";
                                                $result_creator = mysqli_query($con,$query_creator);
                                                if(!empty($result_creator) && mysqli_num_rows($result_creator) > 0)
                                                {
                                                    $row_creator = mysqli_fetch_assoc($result_creator);
                                                    $creator = 'Entered By:'.$row_creator['first_name'].' '.$row_creator['last_name'].': '.$row['created_datetime'];
                                                }
                                                else
                                                {
                                                    $creator = 'Not Specified';
                                                };
    
                                            //ALTER
                                                $altered_id = $row['altered_by'];
                                                $query_alter = "SELECT * FROM users WHERE id='$altered_id'";
                                                $result_alter = mysqli_query($con,$query_alter);
                                                if(!empty($result_alter) && mysqli_num_rows($result_alter) > 0)
                                                {
                                                    $row_alter = mysqli_fetch_assoc($result_alter);
                                                    $alter = 'Altered By:'.$row_alter['first_name'].' '.$row_alter['last_name'].': '.$row['altered_datetime'];
                                                }
                                                else
                                                {
                                                    $alter = 'Not Specified';
                                                };
    
                                            //BRANCH
                                                $voucher_branch_id = $row['branch_id'];
                                                $query_branch = "SELECT * FROM branch WHERE branch_id='$voucher_branch_id'";
                                                $result_branch = mysqli_query($con,$query_branch);
                                                if(!empty($result_branch) && mysqli_num_rows($result_branch) > 0)
                                                {
                                                    $row_branch = mysqli_fetch_assoc($result_branch);
                                                    $voucher_branch = $row_branch['branch_name'];
                                                }
                                                else
                                                {
                                                    $voucher_branch = 'Not Specified';
                                                };

                                            $stock_purchase_id = $row['stock_purchase_id'];
                                            $query_sp = "SELECT * FROM stock_purchase_items WHERE stock_purchase_id='$stock_purchase_id'";
                                            $result_sp = mysqli_query($con,$query_sp);
                                            if(!empty($result_sp) && mysqli_num_rows($result_sp) > 0)
                                            {
                                                $row_sp = mysqli_fetch_assoc($result_sp);

                                                $warehouse_id = $row_sp['warehouse_id'];
                                                $query_spw = "SELECT * FROM warehouse WHERE warehouse_id='$warehouse_id'";
                                                $result_spw = mysqli_query($con,$query_spw);
                                                if(!empty($result_spw) && mysqli_num_rows($result_spw) > 0)
                                                {
                                                    $row_spw = mysqli_fetch_assoc($result_spw);
                                                    $warehouse = $row_spw['warehouse_desc'];
                                                }
                                                else
                                                {
                                                    $warehouse = 'Not Specified';
                                                };
                                            }
                                            else
                                            {
                                                $warehouse = 'Not Specified';
                                            };
                                        
        	                            echo '<tr>
                                        <td class = "action-td" colspan="7"><small>Branch:'.$voucher_branch.': '.$creator.' '.$alter.' Transferred to:'.$warehouse.'</small></td>
                                    </tr>';
                                }
                            }
                            else
                            {
                                echo 'No Stock Purchases Not Found';
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
    id="stock_purchase_invoice_delete_modal" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="stock_purchase_invoice_delete_modal" 
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stock_purchase_invoice_delete_modal_title">Stock Purchase Invoice Deletion</h5>
            </div>
            <form action="#" method="POST">
                <div class="modal-body">
                    <p id="stock_purchase_invoice_delete_question"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="stock_purchase_delete_yes" name="stock_purchase_delete_yes" class="btn btn-danger">Yes</button>
                    <button type="button" id="stock_purchase_delete_no" name="stock_purchase_delete_no" class="btn btn-primary" data-dismiss="modal">No</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('stock_purchases_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/footer_main.php');?>