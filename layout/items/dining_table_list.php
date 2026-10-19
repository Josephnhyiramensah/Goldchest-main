<?php
    require($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/auth.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/header_main.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/navbar_main.php');
    if (isset($_SESSION['user_super_id'])) 
    {
        $user_super_id = $_SESSION['user_super_id'];
        $name = $_SESSION['full_name'];
    };
    $company_id = $_SESSION['company_id'];
    $branch_id = $_SESSION['branch_id'];
    $date_today = date('Y-m-d');
?>
<input type='hidden' id='session_user_super_id' value="<?php echo $user_super_id;?>">
<style type="text/css">
    input {border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;background-color: #ffffff;}
    .scroll_card_body {max-height: 700px;overflow-y: auto;}
    .scroll_order_body {max-height: 500px;overflow-y: auto;}
    .amt-td {text-align:right;}
    .action-td {text-align:center;}
  </style>
<div class="container-fluid">
    <div class="card shadow md-4">
        <div class="card-header py-3">
        	<div class="float-left">
	            <h4 class="m-0 font-weight-bold text-primary">
	                Dining Table List
	            </h4>
                <div class="input-group">
                    <a href="#" data-toggle="" id="new_dining_table_icon">New Dining Table</a>
                </div>
            </div>
            <div class="float-right">
		        <form class="form-inline mr-auto w-100 navbar-search">
		        	<div class="input-group">
                        <a href="#" data-toggle="" id="new_dining_table_icon"><i class="fas fa-building"></i></a>
		            </div>
		        </form>
	        </div>
        </div>
        <div class="card-body">
            <?php
                /*if($_SESSION['user_type'] == 'Ultra_Super_User')
                {
                    $query = "SELECT * FROM stock_type";
                }
                else
                {*/
                    $query = "SELECT * FROM dining_table WHERE company_id = '".$_SESSION['company_id']."'";
                //};
                
                $query_run = mysqli_query($con, $query);
                $i=0;
                $x=0;
            
            echo '<div class="table-responsive" id="stock_type-table">
                <table class="table table-hover table-bordered table-sm" id="stock_typeTable" width="100%" cellspacing="0">
                    <thead>
                        <!--<tr>
                            <th>Table Description</th>
                            <th class = "action-td">Action</th>
                        </tr>-->
                    </thead>
                    <tbody class="pv-table-body">';
                        
                            if (mysqli_num_rows($query_run) > 0)
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                                    $i++;
                                    $x++;
                                    /*echo '<tr>
                                        <td>'.$row['dining_table'].'</td>
                                        <td class = "action-td">';
                                            
                                            if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Dining_Table'] == 'Yes')) 
                                            {
                                                echo '<a 
                                                    href="#" id="btn_edit_dining_table" 
                                                    data-id="'.$row['dining_table_id'].'">
                                                    Edit
                                                </a>';
                                            };

                                            if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Delete_Dining_Table'] == 'Yes')) 
                                            {
                                                echo ' | <a href="#" id="btn_delete_dining_table" data-id="'.$row['dining_table_id'].'">Delete</a>';
                                            };
                                            
                                        echo '</td>
                                    </tr>';*/
                                    $dining_table_id = $row['dining_table_id'];
                                    $query_po = "SELECT * FROM table_order WHERE dining_table_id = '$dining_table_id' AND status != 'paid'";
                                    $query_run_po = mysqli_query($con, $query_po);
                                    if(!empty($query_run_po) && mysqli_num_rows($query_run_po) > 0)
                                    {
                                        $pending_orders = mysqli_num_rows($query_run_po);
                                        $row_po = mysqli_fetch_assoc($query_run_po);
                                        $table_order_id = $row_po['table_order_id'];
                                        $order_amount = $row_po['amount'];
                                        $debit_ledger = $row_po['ledger_debit'];
                                    }
                                    else
                                    {
                                        $pending_orders = 0;
                                        $table_order_id = 0;
                                        $order_amount = 0;
                                        $debit_ledger = 0;
                                    };
                                    
                                    if($i==1)
                                    {
                                        echo '<tr>';
                                    };
                                        echo' <td class="action-td">
                                            <div class="card" style="width: 20rem;">';
                                                echo '<div class="card-body">';
                                                    if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Dining_Table'] == 'Yes')) 
                                                    {
                                                        echo '<a 
                                                            href="#" id="btn_edit_dining_table" 
                                                            data-id="'.$row['dining_table_id'].'">
                                                            <h4 class="card-title m-0 font-weight-bold text-primary">'.$row['dining_table'].'</h4>
                                                        </a>';
                                                    }
                                                    else
                                                    {
                                                        echo '<h4 class="card-title m-0 font-weight-bold text-primary">'.$row['dining_table'].'</h4>';
                                                    };
                                                    echo '</br>';
                                                    if($pending_orders > 0)
                                                    {
                                                        if($row['table_type'] == 'EAT_IN')
                                                        {
                                                            echo ' <a href="#" id="table_add_order_btn" class="btn btn-success table_add_order_btn" data-table="'.$row['dining_table_id'].'" data-id="'.$table_order_id.'">Add Order</a>';
                                                            echo ' <a href="#" id="table_print_order_btn" class="table_print_order_btn btn btn-primary " data-table="'.$row['dining_table_id'].'" data-id="'.$table_order_id.'">Print</a>';
                                                            echo ' <a href="#" id="table_pay_order_btn" class="btn btn-danger table_pay_order_btn" 
                                                                data-table="'.$row['dining_table_id'].'" 
                                                                data-order="'.$table_order_id.'"
                                                                data-debit="'.$debit_ledger.'"
                                                                data-amount="'.$order_amount.'"
                                                            >Pay</a>';
                                                        }
                                                        else
                                                        {
                                                            echo ' <a href="#" id="table_display_order_btn" class="btn btn-success table_display_order_btn" data-table="'.$row['dining_table_id'].'">Display Orders</a>';
                                                        };
                                                    };
                                                    if(($row['table_type'] == 'EAT_IN' && $pending_orders < 1) || $row['table_type'] == 'TAKE_AWAY')
                                                    {
                                                        echo ' <a href="#" id="table_new_order_btn" class="btn btn-success table_new_order_btn" data-table="'.$row['dining_table_id'].'">New Order</a>';
                                                    };
                                                echo '</div>
                                            </div>
                                        </td>';
                                    if($i==4)
                                    {
                                        $i=0;
                                        echo '</tr>';
                                    };
                                };
                            }
                            else
                            {
                                echo 'Data Not Found';
                            };
                    echo '</tbody>
                </table>
            </div>';
            ?>
        </div>
    </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/items/dining_table_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/order_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/order_item_qty_price_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/items/item_delete_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/footer_main.php');?>