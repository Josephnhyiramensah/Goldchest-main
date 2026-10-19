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
	                Job Card List
	            </h4>
                <div class="input-group">
                    <?php
                        if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Create_Job_Card'] == 'Yes')) 
                        {
                            echo '<a href="#" id="new_job_card_icon">New Job Card</a>';
                        };
                    ?>
                </div>
            </div>
            <div class="float-right">
		        <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <label>Name</label>
                        <input type="text" class="form-control border-0 small" name="job_card_name" id="job_card_name">
                    </div>
                    <div class="input-group">
                        <label for="job_card_status">Status</label>
                        <select class="form-control border-0 small" name="job_card_status_search" id="job_card_status_search"> 
                            <option value="0">Please Select</option>
                            <?php
                                $sql="SELECT * FROM job_status ORDER BY job_status ASC";
                                $result=mysqli_query($con,$sql);
                                while($row=mysqli_fetch_array($result))
                                {
                                    echo '<option value = "'.$row['job_status_id'].'">'.$row['job_status'].'</option>';
                                };
                            ?>
                        </select>
                    </div>
                    <div class="input-group">
                        <label>From</label>
                        <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="job_card_search_from" id="job_card_search_from">
                    </div>
                    <div class="input-group">
                        <label>To</label>
                        <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="job_card_search_to" id="job_card_search_to">
                    </div>
                    <div class="input-group">
                        <!--<a href="#" data-toggle="" id="job_card_search_icon"><i class="fas fa-search"></i></a>-->
                    </div>
		        </form>
	        </div>
        </div>
        <div class="card-body">
            <?php
                $query = "SELECT * FROM job_card WHERE company_id = '".$_SESSION['company_id']."' AND date = '$date_today' ORDER BY date DESC";
                $query_run = mysqli_query($con, $query);
            ?>
            <div class="table-responsive" id="job_card_list_table">
                <table class="table table-hover table-bordered table-sm" id="job_cardTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class = "action-td">Date</th>
                            <th class = "action-td">Customer</th>
                            <th class = "action-td">Receiving Ledger</th>
                            <th class = "action-td">Shelf No</th>
                            <th class = "action-td">Bill</th>
                            <th class = "action-td">Total Receipt</th>
                            <th class = "action-td">Balance</th>
                            <th class = "action-td">Items Used</th>
                            <th class = "action-td">Overhead</th>
                            <th class = "action-td">Net</th>
                            <th class = "action-td">Status</th>
                            <th class = "action-td">Action</th>
                        </tr>
                    </thead>
                    <tbody class="pv-table-body">
                        <?php
                            if (mysqli_num_rows($query_run) > 0)
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                                    $job_card_id = $row['job_card_id'];
                                    $ledger_dr = $row['ledger_debit'];
                                    $query_ledger = "SELECT * FROM ledgers WHERE ledger_id='$ledger_dr'";
                                    $query_ledger_run = mysqli_query($con, $query_ledger);
                                    $row_ledger = mysqli_fetch_assoc($query_ledger_run);

                                    $amount = $row['amount'];
                                    $amount_f = number_format($amount, 2, '.', ',');

                                    $query_sat = "SELECT SUM(amount) AS item_amount FROM stock_adjustment_items WHERE job_card_id='$job_card_id'";
                                    $result_sat = mysqli_query($con,$query_sat);
                                    if(!empty($result_sat) && mysqli_num_rows($result_sat)>0)
                                    {
                                        while($row_sat = mysqli_fetch_assoc($result_sat))
                                        {
                                            $item_amount = $row_sat['item_amount'];
                                        };
                                    }
                                    else
                                    {
                                        $item_amount = 0;
                                    };

                                    $query_oh = "SELECT SUM(amount) AS overhead FROM job_cost WHERE job_card_id='$job_card_id'";
                                    $result_oh = mysqli_query($con,$query_oh);
                                    if(!empty($result_oh) && mysqli_num_rows($result_oh)>0)
                                    {
                                        while($row_oh = mysqli_fetch_assoc($result_oh))
                                        {
                                            $overhead = $row_oh['overhead'];
                                        };
                                    }
                                    else
                                    {
                                        $overhead = 0;
                                    };

                                    $query_rec = "SELECT SUM(amount) AS total_receipt FROM receipt WHERE job_card_id='$job_card_id'";
                                    $result_rec = mysqli_query($con,$query_rec);
                                    if(!empty($result_rec) && mysqli_num_rows($result_rec)>0)
                                    {
                                        while($row_rec = mysqli_fetch_assoc($result_rec))
                                        {
                                            $total_receipt = $row_rec['total_receipt'];
                                        };
                                    }
                                    else
                                    {
                                        $total_receipt = 0;
                                    };
                                    if($row_ledger['tb_5'] != 7 && $row_ledger['tb_5'] != 8)
                                    {
                                        $total_receipt = $total_receipt;
                                    }
                                    else
                                    {
                                        $total_receipt = $amount;
                                    };
                                    $net = $amount - $item_amount - $overhead;
                                    $balance = $amount - $total_receipt;
                                    $net_f = number_format($net, 2, '.', ',');
                                    $overhead_f = number_format($overhead, 2, '.', ',');
                                    $item_amount_f = number_format($item_amount, 2, '.', ',');
                                    $total_receipt_f = number_format($total_receipt, 2, '.', ',');
                                    $balance_f = number_format($balance, 2, '.', ',');
                                    ?>
                                    <tr>
                                        <td class = "action-td"><?php echo $row['date'];?></td>
                                        <td>
                                            <a href="#" id="btn_edit_job_card" data-id="<?php echo $row['job_card_id'];?>"><?php echo $row['customer'];?></a>
                                        </td>
                                        <td><?php echo $row_ledger['ledger_desc'];?></td>
                                        <td class = "action-td"><?php echo $row['shelf'];?></td>
                                        <td class = "amt-td"><?php echo $amount_f;?></td>
                                        <td class = "amt-td"><?php echo $total_receipt_f;?></td>
                                        <td class = "amt-td"><?php echo $balance_f;?></td>
                                        <td class = "amt-td"><?php echo $item_amount_f;?></td>
                                        <td class = "amt-td"><?php echo $overhead_f;?></td>
                                        <td class = "amt-td"><?php echo $net_f;?></td>
                                        <td>
                                            <?php
                                                $query_jsl = "SELECT * FROM job_status_list WHERE job_card_id='$job_card_id'";
                                                $result_jsl = mysqli_query($con,$query_jsl);
                                                if(!empty($result_jsl) && mysqli_num_rows($result_jsl)>0)
                                                {
                                                    while($row_jsl = mysqli_fetch_assoc($result_jsl))
                                                    {
                                                        $user_id = $row_jsl['user_id'];
                                                        $query_staff = "SELECT * FROM users WHERE id='$user_id'";
                                                        $query_run_staff = mysqli_query($con, $query_staff);
                                                        $row_staff = mysqli_fetch_assoc($query_run_staff);

                                                        $job_status_id = $row_jsl['job_status_id'];
                                                        $query_status = "SELECT * FROM job_status WHERE job_status_id='$job_status_id'";
                                                        $query_run_status = mysqli_query($con, $query_status);
                                                        $row_status = mysqli_fetch_assoc($query_run_status);
                                                        echo $row_status['job_status'].':- '.$row_staff['first_name'].' '.$row_staff['last_name'].'<br>';
                                                    };
                                                }
                                                else
                                                {
                                                    echo 'PENDING';
                                                };
                                            ?>
                                        </td>
                                        <td class = "action-td">
                                            <?php
                                            if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Create_Receipt'] == 'Yes')) 
                                            {
                                                if($row_ledger['tb_5'] != 7 && $row_ledger['tb_5'] != 8)
                                                {
                                                    echo '<a href="#" data-toggle="" 
                                                    id="new_receipt_from_job_card" 
                                                    data-id="'.$row['job_card_id'].'"
                                                    data-id1="'.$row['ledger_debit'].'"
                                                    data-id2="'.$balance.'"
                                                    data-id3="'.$row['date'].'"
                                                    data-id4="'.$row_ledger['ledger_desc'].'">New Receipt</a> | ';
                                                };
                                            };
                                            if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Job_Card'] == 'Yes')) 
                                            {
                                                echo '<a href="#" id="btn_edit_job_card" data-id="'.$row['job_card_id'].'">Edit</a> | ';
                                            };
                                            ?>
                                                <a href="#" id="btn_job_card_set_status" data-id="<?php echo $row['job_card_id'];?>">Set Status</a>
                                                
                                                | <a href="#" id="btn_print_job_card_A4" 
                                                    data-id="<?php echo $row['job_card_id'];?>"
                                                    data-id1="<?php echo $row_ledger['ledger_desc'];?>"
                                                >
                                                    A4</a>
                                                | <a href="#" id="btn_print_job_card_POS" 
                                                    data-id="<?php echo $row['job_card_id'];?>"
                                                    data-id1="<?php echo $row_ledger['ledger_desc'];?>"
                                                >
                                                    POS</a>
                                            <?php
                                            if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Delete_Job_Card'] == 'Yes'))
                                            {
                                                echo ' | <a href="#" id="btn_delete_job_card" data-id="'.$row['job_card_id'].'">Delete</a>';
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
                                            <!--<a href="#" id="btn_delete_job_card" data-id2="<?php //echo $row['job_card_id'];?>"><i class="fa fa-trash fa-sm"></i></a>-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class = "action-td" colspan="12"><?php echo '<small>Entered By:'.$row_creator['first_name'].' '.$row_creator['last_name'].': '.$row['created_datetime'].' 
                                        Altered By:'.$row_alter['first_name'].' '.$row_alter['last_name'].': '.$row['altered_datetime'].'</small>';;?></td>
                                    </tr>
                                <?php
                                }
                            }
                            else
                            {
                                    echo 'No Stock Sales Not Found';
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
    id="job_card_invoice_delete_modal" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="job_card_invoice_delete_modal" 
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="job_card_invoice_delete_modal_title">Job Card Deletion</h5>
            </div>
            <form action="#" method="POST">
                <div class="modal-body">
                    <p id="job_card_invoice_delete_question"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="job_card_delete_yes" name="job_card_delete_yes" class="btn btn-danger">Yes</button>
                    <button type="button" id="job_card_delete_no" name="job_card_delete_no" class="btn btn-primary" data-dismiss="modal">No</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div 
    class="modal fade bd-example-modal-xl" 
    id="job_card_status_modal" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="job_card_status_modal" 
    aria-hidden="true">
	<div class="modal-dialog" style="max-width: 40%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="job_card_status_modal_title">Job Card Status</h5>
            </div>
            <form id="job_card_status_form" action="#" method="POST">
                <div class="modal-body">
	                    <div class="form-row">
	                        <div class="col-md-4 mb-4 form-group">
	                            <label for="job_card_status">Status</label>
	                            <input type="hidden" name="job_card_status_id" class="form-control bg-light" id="job_card_status_id">
	                            <select class="form-control" name="job_card_status" id="job_card_status"> 
	                                <option value="0">Please Select</option>
	                                <?php
	                                    $sql="SELECT * FROM job_status ORDER BY job_status ASC";
	                                    $result=mysqli_query($con,$sql);
										while($row=mysqli_fetch_array($result))
										{
											echo '<option value = "'.$row['job_status_id'].'">'.$row['job_status'].'</option>';
										};
	                                ?>
	                            </select>
	                        </div>
	                        <div class="col-md-8 mb-8 form-group">
	                            <label for="job_card_status_staff">Staff</label>
	                            <select class="form-control" name="job_card_status_staff" id="job_card_status_staff"> 
	                                <option value="0">Please Select</option>
	                                <?php
                						$company_id = $_SESSION['company_id'];
	                                    $sql="SELECT * FROM users WHERE company_id='$company_id' ORDER BY first_name ASC";
	                                    $result=mysqli_query($con,$sql);
										while($row=mysqli_fetch_array($result))
										{
											echo '<option value = "'.$row['id'].'">'.$row['first_name'].' '.$row['last_name'].'</option>';
										};
	                                ?>
	                            </select>
	                        </div>
	                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="job_card_status_save" name="job_card_status_save" class="btn btn-danger">Save</button>
                    <button type="button" id="job_card_status_cancel" name="job_card_status_cancel" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/receipt_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/job_card_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/items/customer_setup_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/items/item_search_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/footer_main.php');?>