<?php
    //session_start(); 
    require($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/auth.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/header_main.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/navbar_main.php');

    /*if(isset($_SESSION['company_sms']))
    {
        $company_sms = $_SESSION['company_sms'];
        if($company_sms == 'Yes')
        {
            $query_sms = "SELECT SUM(qty_in) AS total_sms_purchases, SUM(qty_out) AS total_sms_used FROM sms WHERE company_id = '".$_SESSION['company_id']."'";
            $query_run_sms = mysqli_query($con, $query_sms);
            if (mysqli_num_rows($query_run_sms) > 0)
            {
                $row_sms = mysqli_fetch_assoc($query_run_sms);
                $_SESSION['company_sms_bal'] = $row_sms['total_sms_purchases'] - $row_sms['total_sms_used'];
            };
        }
        else
        {
            $_SESSION['company_sms_bal'] = 'N/A';
        };
    };*/

    $company_id = $_SESSION['company_id'];
	date_default_timezone_set("Africa/Accra");
	$date_today = date('Y-m-d');
	$time = date('H-i-sa');
    $two_week_earlier = date('Y-m-d', strtotime($date_today .' -14 day'));
?>
<input type="hidden" class="form-control" name="session_company_sms" id="session_company_sms" value="<?php echo $_SESSION['company_sms'];?>">
<input type="hidden" class="form-control" name="session_company_sms_bal" id="session_company_sms_bal" value="<?php echo 0/*$_SESSION['company_sms_bal']*/;?>">
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
	                Purchases List
	            </h4>
                    <?php
                      if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Create_Purchases'] == 'Yes')) 
                      {
                        echo '<a href="#" data-toggle="" id="new_purchase_icon">New Purchase</a>';
                      };
                    ?>
            </div>
            <div class="float-right">
		        <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <label>Search by Supplier</label>
                        <input type="text" class="form-control border-0 small" name="purchase_search_name" id="purchase_search_name">
                    </div>
                    <div class="input-group">
                        <label>From</label>
                        <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="purchase_search_from" id="purchase_search_from">
                    </div>
                    <div class="input-group">
                        <label>To</label>
                        <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="purchase_search_to" id="purchase_search_to">
                    </div>
                    <div class="input-group">
                        <a href="#" data-toggle="" id="purchase_search_icon"><i class="fas fa-search"></i></a>
                    </div>
		        </form>
	        </div>
        </div>
        <div class="card-body" id="purchase_list_card_body">
            <?php
                $query_branch_count = "SELECT * FROM branch WHERE company_id = '$company_id'";
                $query_run_branch_count = mysqli_query($con, $query_branch_count);
                if (mysqli_num_rows($query_run_branch_count) > 1)
                {
                    if ($_SESSION['user_type_id'] != 3) 
                    {
                        $query = "SELECT * FROM purchases WHERE company_id = '$company_id' 
                        AND date BETWEEN '$two_week_earlier' AND '$date_today' ORDER BY 
                        date DESC, purchase_id ASC";
                    }
                    else
                    {
                        $query = "SELECT * FROM purchases WHERE company_id = '$company_id' 
                        AND branch_id = '".$_SESSION['branch_id']."' AND date BETWEEN '$two_week_earlier' 
                        AND '$date_today' ORDER BY date DESC, purchase_id ASC";
                    };
                }
                else
                {
                    $query = "SELECT * FROM purchases WHERE company_id = '$company_id' 
                    AND date BETWEEN '$two_week_earlier' AND '$date_today' ORDER BY 
                    date DESC, purchase_id ASC";
                };
                
                $query_run = mysqli_query($con, $query);
            ?>
            <div class="table-responsive" id="purchases_list_table">
                <table class="table table-hover table-bordered table-sm" id="purchasesTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class = "action-td" width="5%">No</th>
                            <th class = "action-td" width="10%">Date</th>
                            <th width="20%">Paying Ledger</th>
                            <th width="10%">Supplied By</th>
                            <th class = "action-td" width="10%">Grams</th>
                            <th class = "action-td" width="10%">Water</th>
                            <th class = "action-td" width="10%">Price</th>
                            <th class = "action-td" width="5%">Karat</th>
                            <th class = "action-td" width="10%">Amount</th>
                            <th class = "action-td" width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody class="pv-table-body" >
                        <?php
                            $i = 0;
                            if (!empty($query_run) && mysqli_num_rows($query_run) > 0)
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                                    $i = ++$i;
                                    $ledger_cr = $row['ledger_credit'];
                                    $query_ledger = "SELECT * FROM ledgers WHERE ledger_id ='$ledger_cr'";
                                    $query_ledger_run = mysqli_query($con, $query_ledger);
                                    if (!empty($query_ledger_run) && mysqli_num_rows($query_ledger_run) > 0)
                                    {
                                        $row_ledger = mysqli_fetch_assoc($query_ledger_run);
                                        $ledger_desc = $row_ledger['ledger_desc'];
                                    }
                                    else
                                    {
                                        $ledger_desc = 'Not Specified';
                                    };

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
                                        <td><?php echo $ledger_desc;?></td>
                                        <td><?php echo $row['supplier'].':- '.$row['phone'];?></td>
                                        <td class = "action-td"><?php echo $row['weight_both'];?></td>
                                        <td class = "action-td"><?php echo $row['water'];?></td>
                                        <?php
                                            $price_purchase = $row['price'];
                                            $price_purchase = number_format($price_purchase, 2, '.', ',');
                                        ?>
                                        <td class = "action-td"><?php echo $price_purchase;?></td>
                                        <td class = "action-td"><?php echo $karat;?></td>
                                        <?php
                                            $amount_purchase = $amount;
                                            $amount_purchase = number_format($amount_purchase, 2, '.', ',');
                                        ?>
                                        <td class = "amt-td"><?php echo $amount_purchase;?></td>
        	                            <td class = "action-td">
                                            
                                            <?php
                                              if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Purchases'] == 'Yes')) 
                                              {
                                                echo '<a href="#" id="btn_edit_purchase" data-id="'.$row['purchase_id'].'"><i class="fa fa-edit fa-sm"></i></a> | ';
                                              };
                                            ?>
                                                <a href="#" id="btn_reprint_purchase" 
                                                    data-id="<?php echo $row['purchase_id'];?>"
                                                    data-id1="<?php echo $row['ledger_credit'];?>"
                                                    ><i class="fa fa-print fa-sm"></i></a>

                                                 | <a href="#" id="btn_send_sms_purchase" 
                                                    data-id="<?php echo $row['purchase_id'];?>"
                                                    >Send SMS</a>
                                            <?php
                                              if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Delete_Purchases'] == 'Yes')) 
                                              {
                                                echo ' | <a href="#" id="btn_delete_purchase" data-id="'.$row['purchase_id'].'"><i class="fa fa-trash fa-sm"></i></a>';
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
                                            ?>
        	                            </td>
                                    </tr>
                                    <tr>
                                        <td class = "action-td" colspan="10">
                                            <?php echo '<small>Branch:'.$voucher_branch.': '.$creator.' '.$alter.'</small>';?>
                                        </td>
                                    </tr>
                        <?php
                                }
                            }
                            else
                            {
                                    echo 'No Purchases Not Found';
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
    id="purchase_invoice_delete_modal" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="purchase_invoice_delete_modal" 
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="purchase_invoice_delete_modal_title">Purchase Invoice Deletion</h5>
            </div>
            <form action="#" method="POST">
                <div class="modal-body">
                    <p id="purchase_invoice_delete_question"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="purchase_delete_yes" name="purchase_delete_yes" class="btn btn-danger">Yes</button>
                    <button type="button" id="purchase_delete_no" name="purchase_delete_no" class="btn btn-primary" data-dismiss="modal">No</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div 
    class="modal fade bd-example-modal-xl" 
    id="purchase_send_sms_modal" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="purchase_send_sms_modal" 
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="purchase_send_sms_modal_title">Purchase - Send SMS</h5>
            </div>
            <form action="#" method="POST">
                <div class="modal-body">
                    <p id="purchase_send_sms_question"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="purchase_send_sms_yes" name="purchase_send_sms_yes" class="btn btn-danger">Yes</button>
                    <button type="button" id="purchase_send_sms_no" name="purchase_send_sms_no" class="btn btn-primary" data-dismiss="modal">No</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include('purchases_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/footer_main.php');?>