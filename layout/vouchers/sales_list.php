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
<input type='hidden' id='session_company_id' value="<?php echo $_SESSION['company_id'];?>">
<input type='hidden' id='session_user_super_id' value="<?php echo $_SESSION['user_super_id'];?>">
<input type='hidden' id='session_user_id' value="<?php echo $_SESSION['user_id'];?>">
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
	                Sales List
	            </h4>
                <?php
                  if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Create_Sales'] == 'Yes')) 
                  {
                    echo '<a href="#" data-toggle="" id="new_sales_icon">New Sales</a>';
                  };
                ?>
            </div>
            <div class="float-right">
		        <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <label>Search by Supplier</label>
                        <input type="text" class="form-control border-0 small" name="sales_search_name" id="sales_search_name">
                    </div>
                    <div class="input-group">
                        <label>From</label>
                        <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="sales_search_from" id="sales_search_from">
                    </div>
                    <div class="input-group">
                        <label>To</label>
                        <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="sales_search_to" id="sales_search_to">
                    </div>
                    <div class="input-group">
                        <a href="#" data-toggle="" id="sales_search_icon"><i class="fas fa-search"></i></a>
                    </div>
                </form>
	        </div>
        </div>
        <div class="card-body" id="sales_list_card_body">
            <?php
                $query = "SELECT * FROM sales WHERE company_id = '".$_SESSION['company_id']."' 
                AND date = '$date_today' ORDER BY date DESC, sales_id ASC";
                $query_run = mysqli_query($con, $query);
            ?>
            <div class="table-responsive" id="sales_list_table">
                <table class="table table-hover table-bordered table-sm" id="salesTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class = "action-td" width="10%">S/No</th>
                            <th class = "action-td" width="10%">Date</th>
                            <th width="20%">Receiving Ledger</th>
                            <th width="10%">Supplied By</th>
                            <th class = "action-td" width="10%">Grams</th>
                            <th class = "action-td" width="10%">Water</th>
                            <th class = "action-td" width="10%">Price</th>
                            <th class = "action-td" width="5%">Karat</th>
                            <th class = "action-td" width="10%">Amount</th>
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
                                    $ledger_dr = $row['ledger_debit'];
                                    $query_ledger = "SELECT * FROM ledgers WHERE ledger_id ='$ledger_dr'";
                                    $query_ledger_run = mysqli_query($con, $query_ledger);
                                    $row_ledger = mysqli_fetch_assoc($query_ledger_run);

                                    if($row['purity_discount'] > 0)
                                    {
                                        $karat = $row['discounted_karat'];
                                        $amount = $row['discounted_amount'];
                                    }
                                    else
                                    {
                                        $karat = $row['karat'];
                                        $amount = $row['amount'];
                                    };
                        ?>
                                    <tr>
                                        <td class = "action-td">
                                            <?php echo $i;?>
                                        </td>
                                        <td class = "action-td"><?php echo $row['date'];?></td>
                                        <td><?php echo $row_ledger['ledger_desc'];?></td>
                                        <td><?php echo $row['supplier'];?></td>
                                        <td class = "action-td"><?php echo $row['weight'];?></td>
                                        <td class = "action-td"><?php echo $row['water'];?></td>
                                        <?php
                                            $price_sales = $row['price'];
                                            $price_sales = number_format($price_sales, 2, '.', ',');
                                        ?>
                                        <td class = "action-td"><?php echo $price_sales;?></td>
                                        <td class = "action-td"><?php echo $karat;?></td>
                                        <?php
                                            $amount_sales = $amount;
                                            $amount_sales = number_format($amount_sales, 2, '.', ',');
                                        ?>
                                        <td class = "amt-td"><?php echo $amount_sales;?></td>
        	                            <td class = "action-td">
                                            <?php
                                              if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Sales'] == 'Yes')) 
                                              {
                                                echo '<a href="#" id="btn_edit_sales" data-id="'.$row['sales_id'].'"><i class="fa fa-edit fa-sm"></i></a> |';
                                              };
                                            ?>

                                              <a href="#" id="btn_single_sales_reprint" data-id="<?php echo $row['sales_id'];?>"><i class="fa fa-print fa-sm"></i></a>

                                            <?php
                                              if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Delete_Sales'] == 'Yes'))
                                              {
                                                echo '| <a href="#" id="btn_delete_sales" data-id="'.$row['sales_id'].'"><i class="fa fa-trash fa-sm"></i></a>';
                                              };
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
                                              
                                              $altered_id = $row['altered_by'];
                                              $query_alter = "SELECT * FROM users WHERE id='$altered_id'";
                                              $result_alter = mysqli_query($con,$query_alter);
                                              if(!empty($result_alter) && mysqli_num_rows($result_alter) > 0)
                                              {
                                                $row_alter = mysqli_fetch_assoc($result_alter);
                                                $alter = 'Entered By:'.$row_alter['first_name'].' '.$row_alter['last_name'].': '.$row['altered_datetime'];
                                              }
                                              else
                                              {
                                                $alter = 'Not Specified';
                                              };
                                            ?>
        	                            </td>
                                    </tr>
                                    <tr>
                                        <td class = "action-td" colspan="10"><?php echo '<small>'.$creator.' '.$alter.'</small>';?></td>
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
    id="sales_invoice_delete_modal" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="sales_invoice_delete_modal" 
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sales_invoice_delete_modal_title">Sales Invoice Deletion</h5>
            </div>
            <form action="#" method="POST">
                <div class="modal-body">
                    <p id="sales_invoice_delete_question"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="sales_delete_yes" name="sales_delete_yes" class="btn btn-danger">Yes</button>
                    <button type="button" id="sales_delete_no" name="sales_delete_no" class="btn btn-primary" data-dismiss="modal">No</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include('sales_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/footer_main.php');?>