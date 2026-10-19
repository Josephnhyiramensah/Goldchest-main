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
    $dining_table_id = $_SESSION['dining_table_id'];
    date_default_timezone_set("Africa/Accra");
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
	                Order List
	            </h4>
                <div class="input-group">
                    <?php 
                        if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Create_Order'] == 'Yes')) 
                        {
                            echo '<a href="#" data-toggle="" id="new_order_icon">New Order</a>';
                        };
                    ?>
                </div>
            </div>
            <div class="float-right">
		        <form class="form-inline mr-auto w-100 navbar-search">
                    <?php
                        if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Order'] == 'Yes')) 
                        {
                            echo '<div class="input-group">
                                <label for="table_order_search_by_table">Table</label>
                                <select class="form-control border-0 small" name="table_order_search_by_table" id="table_order_search_by_table"> 
                                    <option value="0">Please Select</option>';
                                        $sql="SELECT * FROM dining_table WHERE company_id = '$company_id' AND branch_id = '$branch_id' ORDER BY dining_table ASC";
                                        $result = mysqli_query($con,$sql);
                                        while($row = mysqli_fetch_array($result))
                                        {
                                            echo '<option value ="'.$row['dining_table_id'].'">'.$row['dining_table'].'</option>';
                                        };
                                echo '</select>
                            </div>';
                        };
                        if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['user_type_id'] == 2))
                        {
                            echo '<div class="input-group">
                                <label for="table_order_search_by_branch">Branch</label>
                                <select class="form-control border-0 small" name="table_order_search_by_branch" id="table_order_search_by_branch"> 
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
                        if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Order'] == 'Yes')) 
                        {
                            echo '<div class="input-group">
                                <label for="table_order_search_from">From</label>
                                <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="table_order_search_from" id="table_order_search_from">
                            </div>
                            <div class="input-group">
                                <label for="table_order_search_to">To</label>
                                <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="table_order_search_to" id="table_order_search_to">
                            </div>
                            <div class="input-group">
                                <a href="#" data-toggle="" id="new_dining_table_icon"><i class="fas fa-building"></i></a>
                            </div>';
                        };
                    ?>
		        </form>
	        </div>
        </div>
        <div class="card-body">
            <?php
                if(isset($dining_table_id) && $dining_table_id > 0)
                {
                    $query = "SELECT * FROM table_order WHERE dining_table_id = '$dining_table_id' AND date = '$date_today'";
                }
                else
                {
                    $query = "SELECT * FROM table_order WHERE company_id = '$company_id' AND branch_id = '$branch_id' AND date = '$date_today'";
                };
                $query_run = mysqli_query($con, $query);
                $i=0;
            
            echo '<div class="table-responsive scroll_card_body" id="table_order_list_table_div">
                <table class="table table-hover table-borderless table-sm" id="stock_typeTable" width="100%" cellspacing="0">
                    
                    <tbody class="pv-table-body">';
                        if (mysqli_num_rows($query_run) > 0)
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                                $i++;
                                $dining_table_id = $row['dining_table_id'];
                                $table_order_id = $row['table_order_id'];
                                $created_by = $row['created_by'];
                                $query_table = "SELECT * FROM dining_table WHERE dining_table_id = '$dining_table_id'";
                                $query_run_table = mysqli_query($con, $query_table);
                                if (mysqli_num_rows($query_run_table) > 0)
                                {
                                    while($row_table = mysqli_fetch_assoc($query_run_table))
                                    {
                                        $dining_table = $row_table['dining_table'];
                                        $table_type = $row_table['table_type'];
                                    };
                                }
                                else
                                {
                                    $dining_table = 'Not Specified';
                                    $table_type = 'Not Specified';
                                };
                                $query_order_list = "SELECT * FROM table_order_list WHERE table_order_id = '$table_order_id'";
                                $query_run_order_list = mysqli_query($con, $query_order_list);
                                $order_item_list = '<table class="table table-hover table-borderless table-sm" id="order_item_table" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="bg-primary">
                                            <th action="action-td" colspan="2" class="modal-title m-0 font-weight-bold text-white">ORDER: '.$row['table_order_id'].'</th>
                                        </tr>
                                    </thead>
                                    <tbody class="pv-table-body">';
                                    if (mysqli_num_rows($query_run_order_list) > 0)
                                    {
                                        while($row_order_list = mysqli_fetch_assoc($query_run_order_list))
                                        {
                                            $stock_item_id = $row_order_list['stock_item_id'];
                                            $query_stock = "SELECT * FROM stock_items WHERE stock_item_id = '$stock_item_id' AND branch_id = '$branch_id'";
                                            $query_run_stock = mysqli_query($con, $query_stock);
                                
                                            if (mysqli_num_rows($query_run_stock) > 0)
                                            {
                                                while($row_stock = mysqli_fetch_assoc($query_run_stock))
                                                {
                                                    $stock_item = $row_stock['stock_item'];
                                                };
                                            }
                                            else
                                            {
                                                $stock_item = 'Not Specified';
                                            };
                                            $order_item_list .='<tr>
                                                <td width="80%">'.$stock_item.'</td>
                                                <td class="action-td" width="20%">'.$row_order_list['qty'].'</td>
                                            </tr>';
                                        };
                                    }
                                    else
                                    {
                                        $order_item_list .='Not Order list';
                                    };
                                    $order_item_list .='</tbody>
                                </table>';

                                //RECEIPT
                                    $query_receipt = "SELECT SUM(amount) AS receipt_amount FROM receipt WHERE table_order_id = '$table_order_id'";
                                    $query_run_receipt = mysqli_query($con, $query_receipt);
                                    if (mysqli_num_rows($query_run_receipt) > 0)
                                    {
                                        while($row_receipt = mysqli_fetch_assoc($query_run_receipt))
                                        {
                                            $receipt_amount = $row_receipt['receipt_amount'];
                                        };
                                    }
                                    else
                                    {
                                        $receipt_amount = 0;
                                    };
                                //WAITER
                                    $query_created = "SELECT * FROM users WHERE id = '$created_by'";
                                    $query_run_created = mysqli_query($con, $query_created);
                        
                                    if (mysqli_num_rows($query_run_created) > 0)
                                    {
                                        while($row_created = mysqli_fetch_assoc($query_run_created))
                                        {
                                            $waiter = $row_created['first_name'].' '.$row_created['last_name'];
                                        };
                                    }
                                    else
                                    {
                                        $waiter = 'Not Specified';
                                    };

                                if($i==1)
                                {
                                    echo '<tr>';
                                };
                                    echo' <td class="action-td">
                                        <div class="card" style="width: 20rem;">';
                                            if($row['status']=='Pending')
                                            {
                                                echo '<div class="card-body">';
                                            }
                                            else
                                            {
                                                echo '<div class="card-body bg-warning">';
                                            };
                                                echo '<div>'.$order_item_list.'</div>
                                                <h5 class="card-title m-0 font-weight-bold text-primary">'.$dining_table.'</h5>
                                                <p>Waiter:'.$waiter.' Type:'.$table_type.'</p>';
                                                if($table_type == 'TAKE_AWAY')
                                                {
                                                    echo '<p>Customer:'.$row['customer_name'].'('.$row['customer_phone'].')</p>';
                                                };

                                                if($row['status']=='Pending')
                                                {
                                                    echo ' <a href="#" id="order_serve_btn" class="btn btn-primary" data-id="'.$row['table_order_id'].'">Serve</a>';
                                                }
                                                else
                                                {
                                                    echo ' <a href="#" id="order_pending_btn" class="btn btn-primary" data-id="'.$row['table_order_id'].'">Unserve</a>';
                                                };

                                                echo ' <a href="#" id="order_print_btn" class="btn btn-primary" data-id="'.$row['table_order_id'].'">Print</a>';
                                                if($receipt_amount < $row['amount'])
                                                {
                                                    echo ' <a href="#" id="order_pay_btn" class="btn btn-primary" data-order="'.$row['table_order_id'].'" 
                                                    data-table="'.$row['dining_table_id'].'" data-debit="'.$row['ledger_debit'].'"
                                                    data-amount="'.$row['amount'].'">Pay</a>';
                                                };
                                            
                                                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Order'] == 'Yes')) 
                                                {
                                                    echo ' <a href="#" id="order_edit_btn" class="btn btn-success" 
                                                    data-id="'.$row['table_order_id'].'"
                                                    data-id1="'.$dining_table_id.'"
                                                    data-id2="'.$table_type.'"
                                                    >Edit</a>';
                                                };

                                                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Delete_Order'] == 'Yes')) 
                                                {
                                                    echo ' <a href="#" id="order_delete_btn" class="btn btn-danger" data-id="'.$row['table_order_id'].'">Delete</a>';
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
<div 
    class="modal fade bd-example-modal-xl" 
    id="order_delete_modal" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="order_delete_modal" 
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="order_delete_modal_title">Order Deletion</h5>
            </div>
            <form action="#" method="POST">
                <div class="modal-body">
                    <p id="order_delete_question"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="order_delete_yes" name="order_delete_yes" class="btn btn-danger">Yes</button>
                    <button type="button" id="order_delete_no" name="order_delete_no" class="btn btn-primary" data-dismiss="modal">No</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php 
    $_SESSION['dining_table_id']='';
    include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/order_create_modal.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/order_item_qty_price_modal.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/layout/items/item_delete_modal.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/footer_main.php');
?>