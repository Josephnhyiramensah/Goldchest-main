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
	$branch_id = $_SESSION['branch_id'];
?>
  <style type="text/css">
    .scroll-card-body {
            max-height: 700px;
            overflow-y: auto;
          }
    .scroll_search_div {
            max-height: 200px;
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
	                Sales (NDS) List
	            </h4>
                <div class="input-group">
                    <?php
                        if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Create_NDS_Sales'] == 'Yes')) 
                        {
                            //echo '<a href="/layout/vouchers/nds_sales_invoice.php" data-toggle="" id="new_nds_sales_invoice_icon">New nds Sales Voucher</a>';
                            //if($_SESSION['company_type_id'] == 6)
                            //{
                                echo '<a href="#" id="new_nds_sales_icon">New Sales Invoice</a>';
                                
                            //};
                        };
                    ?>
                </div>
            </div>
            <div class="float-right">
		        <form class="form-inline mr-auto w-100 navbar-search">
                    <?php
                        if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['user_type_id'] == 2))
                        {
                            echo '<div class="input-group">
                                <label for="nds_sales_search_by_branch">Branch</label>
                                <select class="form-control border-0 small" name="nds_sales_search_by_branch" id="nds_sales_search_by_branch"> 
                                    <option value="0">Please Select</option>';
                                        $sql="SELECT * FROM branch WHERE company_id = '$company_id' ORDER BY branch_name ASC";
                                        $result = mysqli_query($con,$sql);
                                        while($row = mysqli_fetch_array($result))
                                        {
                                            echo '<option value ="'.$row['branch_id'].'">'.$row['branch_name'].'</option>';
                                        };
                                echo '</select>
                            </div>';
                        };
                    ?>
                    <div class="input-group">
                        <label for="nds_sales_name">Name</label>
                        <input type="text" class="form-control border-0 small" name="nds_sales_name" id="nds_sales_name">
                    </div>
                    <div class="input-group">
                        <label for="nds_sales_search_from">From</label>
                        <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="nds_sales_search_from" id="nds_sales_search_from">
                    </div>
                    <div class="input-group">
                        <label for="nds_sales_search_to">To</label>
                        <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="nds_sales_search_to" id="nds_sales_search_to">
                    </div>
                    <div class="input-group">
                        <a href="#" data-toggle="" id="nds_sales_search_icon"><i class="fas fa-search"></i></a>
                    </div>
		        </form>
	        </div>
        </div>
        <div class="card-body">
            <?php
                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['user_type_id'] == 2))
                {
                    $query = "SELECT * FROM nds_sales WHERE company_id = '$company_id' AND 
                    date = '$date_today' ORDER BY date DESC";
                }
                else
                {
                    $query = "SELECT * FROM nds_sales WHERE company_id = '$company_id' AND branch_id = '$branch_id' AND 
                    date = '$date_today' ORDER BY date DESC";
                };
                $query_run = mysqli_query($con, $query);
            
            echo '<div class="table-responsive" id="nds_sales_list_table_div">
                <table class="table table-hover table-bordered table-sm" id="nds_salesTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class = "action-td">ID</th>
                            <th class = "action-td">Date</th>
                            <th>Customer</th>
                            <th class = "action-td">Amount</th>
                            <th class = "action-td">Reference No</th>
                            <th>Debit Ledger</th>
                            <th class = "action-td">Action</th>
                        </tr>
                    </thead>
                    <tbody class="pv-table-body">';
                        
                            if (mysqli_num_rows($query_run) > 0)
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                                    $ledger_cr = $row['ledger_debit'];
                                    $query_ledger = "SELECT * FROM ledgers WHERE ledger_id='$ledger_cr'";
                                    $query_ledger_run = mysqli_query($con, $query_ledger);
                                    $row_ledger = mysqli_fetch_assoc($query_ledger_run);

                                    $customer_id = $row['customer_id'];
                                    $query_customer = "SELECT * FROM customer WHERE customer_id='$customer_id' AND company_id = '$company_id'";
                                    $result_customer = mysqli_query($con,$query_customer);
                                    if(!empty($result_customer) && mysqli_num_rows($result_customer) > 0)
                                    {
                                        $row_customer = mysqli_fetch_assoc($result_customer);
                                        $customer_name = $row_customer['first_name'].' '.$row_customer['last_name'];
                                    }
                                    else
                                    {
                                        $customer_name = 'Not Specified';
                                    };
                                    $amount = $row['amount'];
                                    $amount_f = number_format($amount, 2, '.', ',');
                                    
                                    echo '<tr>
                                        <td class = "action-td">'.$row['sno'].'</td>
                                        <td class = "action-td">'.$row['date'].'</td>
                                        <td>'.$customer_name.'</td>
                                        <td class = "amt-td">'.$amount_f.'</td>
                                        <td class = "action-td">'.$row['reference_no'].'</td>
                                        <td>'.$row_ledger['ledger_desc'].'</td>
                                        <td class = "action-td">';
                                            
                                            if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_NDS_Sales'] == 'Yes')) 
                                            {
                                                echo '<a href="#" id="btn_edit_nds_sales" data-id="'.$row['nds_sales_id'].'">Edit</a> | ';
                                            };
                                            if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Create_NDS_Sales'] == 'Yes')) 
                                            {
                                                echo '<a data-id="'.$row['nds_sales_id'].'" data-id1="'.$row['customer_id'].'" href="#" id="create_waybill">Waybill</a>';
                                            };
                                            if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR $_SESSION['user_type_id'] == 2 OR
                                            ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Create_NDS_Sales'] == 'Yes' AND $date_today==$row['date'])) 
                                            {
                                                echo '| <a href="#" id="btn_nds_sales_invoice_reprint_POS" 
                                                    data-id="'.$row['nds_sales_id'].'"
                                                    data-id1="'.$row['supplied_by'].'"
                                                >
                                                    Reprint(POS)</a>
                                                | <a href="#" id="btn_nds_sales_invoice_reprint_A4" 
                                                    data-id="'.$row['nds_sales_id'].'"
                                                    data-id1="'.$row['supplied_by'].'"
                                                >
                                                    Reprint(A4)</a>';
                                            }
                                            if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Delete_NDS_Sales'] == 'Yes'))
                                            {
                                                echo ' | <a href="#" id="btn_delete_nds_sales" data-id="'.$row['nds_sales_id'].'">Delete</a>';
                                            };
                                            
                                            
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
                                        
                                        echo '</td>
                                    </tr>
                                    <tr>
                                        <td class = "action-td" colspan="7"><small>Branch:'.$voucher_branch.': '.$creator.' '.$alter.'</small></td>
                                    </tr>';
                                }
                            }
                            else
                            {
                                echo 'No Sales Not Found';
                            };
                    echo '</tbody>
                </table>
            </div>';
            ?>
        </div>
    </div>
</div>

<div 
    class="modal fade bd-example-modal-xl" 
    id="nds_sales_invoice_delete_modal" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="nds_sales_invoice_delete_modal" 
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nds_sales_invoice_delete_modal_title">nds Sales Invoice Deletion</h5>
            </div>
            <form action="#" method="POST">
                <div class="modal-body">
                    <p id="nds_sales_invoice_delete_question"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="nds_sales_delete_yes" name="nds_sales_delete_yes" class="btn btn-danger">Yes</button>
                    <button type="button" id="nds_sales_delete_no" name="nds_sales_delete_no" class="btn btn-primary" data-dismiss="modal">No</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/nds_sales_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/waybill_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/items/customer_setup_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/items/item_search_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/footer_main.php');?>