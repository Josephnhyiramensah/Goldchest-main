<?php
    //session_start(); 
    require($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/auth.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/header_main.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/navbar_main.php');
    
	date_default_timezone_set("Africa/Accra");
	$date_today = date('Y-m-d');
	$time = date('H-i-sa');
    if (isset($_SESSION['branch_id'])) {$branch_id = $_SESSION['branch_id'];}else{$branch_id = '';};
    if (isset($_SESSION['user_id'])) {$user_id = $_SESSION['user_id'];}else{$user_id = '';};
    if (isset($_SESSION['user_super_id'])) {$user_super_id = $_SESSION['user_super_id'];}else{$user_super_id = '';};
    if (isset($_SESSION['company_id'])) {$company_id = $_SESSION['company_id'];}else{$company_id = '';};
    if(isset($_SESSION['cash_ledger_id'])){$cash_ledger_id = $_SESSION['cash_ledger_id'];}else{$cash_ledger_id = 0;};
?>
<input type='hidden' id='session_company_id' value="<?php echo $company_id;?>">
<input type='hidden' id='session_user_super_id' value="<?php echo $user_super_id;?>">
<input type='hidden' id='session_user_id' value="<?php echo $user_id;?>">
<style type="text/css">
    input {
            border-top-style: hidden;
            border-right-style: hidden;
            border-left-style: hidden;
            border-bottom-style: hidden;
            background-color: #ffffff;
          }
          
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
	                Receipt List
	            </h4>
                <?php
                  if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Create_Receipt'] == 'Yes')) 
                  {
                    echo '<a href="#" data-toggle="" id="new_receipt_icon">New Receipt</a>';
                  };
                ?>
            </div>
            <div class="float-right">
		        <form class="form-inline mr-auto w-100 navbar-search">
                    <?php
                        if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['user_type_id'] == 2))
                        {
                            echo '<div class="input-group">
                                <label for="receipt_search_by_branch">Branch</label>
                                <select class="form-control border-0 small" name="receipt_search_by_branch" id="receipt_search_by_branch"> 
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
		            	<label for="receipt_search_name">Name</label>
        				<input type="text" class="form-control border-0 small" name="receipt_search_name" id="receipt_search_name">
		            </div>
		            <div class="input-group">
		            	<label for="receipt_search_from">From</label>
                        <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="receipt_search_from" id="receipt_search_from">
		            </div>
		            <div class="input-group">
		            	<label for="receipt_search_to">To</label>
                        <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="receipt_search_to" id="receipt_search_to">
		            </div>
		        	<div class="input-group">
                    <a href="#" data-toggle="" id="receipt_search_icon"><i class="fas fa-search"></i></a>
		            </div>
		        </form>
	        </div>
        </div>
        <div class="card-body" id="receipt_list_card_body">
            <?php
                
                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['user_type_id'] == 2))
                {
                    $query = "SELECT * FROM receipt WHERE company_id = '$company_id' 
                    AND date = '$date_today' AND deleted='' ORDER BY date DESC, receipt_id ASC";
                }
                else
                {
                    $query = "SELECT * FROM receipt WHERE company_id = '$company_id' 
                    AND branch_id = '$branch_id' AND date = '$date_today' AND deleted='' ORDER BY date DESC, receipt_id ASC";
                };
                $query_run = mysqli_query($con, $query);
            
            echo '<div class="table-responsive" id="payment_list_table">
                <table class="table table-hover table-bordered table-sm" id="paymentTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="10%" class="action-td">Receipt No</th>
                            <th width="10%" class="action-td">Date</th>
                            <th width="30%">Received From</th>
                            <th width="20%">Receiving Ledger</th>
                            <th width="15%">Amount</th>
                            <th width="10%">Mode</th>
                            <th width="5%" class="action-td">Action</th>
                        </tr>
                    </thead>
                    <tbody class="pv-table-body">';
                        
                            if (!empty($query_run) && mysqli_num_rows($query_run) > 0)
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                                
                                    echo '<tr>
                                        <td class="action-td">'. $row['sno'].'</td>
                                        <td class="action-td">'.$row['date'].'</td>
                                        <td>'.$row['received_from'].'</td>';
                                        
                                            $receipt_id = $row['receipt_id'];
                                            $query_cr="SELECT * FROM transactions WHERE receipt_id ='$receipt_id' AND amount_credit > 0
                                            AND deleted=''";
                                            $query_run_cr = mysqli_query($con,$query_cr);
                        
                                            if (!empty($query_run) && mysqli_num_rows($query_run) > 0)
                                            {
                                                $row_cr = mysqli_fetch_array($query_run_cr);
                                                $credit_ledger_id = $row_cr['ledger_id'];
                                            }
                                            else
                                            {
                                                $credit_ledger_id = 'Not Specified';
                                            };

                                            $ledger_id = $row['ledger_credit'];
                                            $query_ledger="SELECT * FROM ledgers WHERE ledger_id ='$ledger_id'";
                                            $query_run_ledger = mysqli_query($con,$query_ledger);
                        
                                            if (!empty($query_run) && mysqli_num_rows($query_run) > 0)
                                            {
                                                $row_ledger = mysqli_fetch_array($query_run_ledger);
                                                $ledger_desc = $row_ledger['ledger_desc'];
                                            }
                                            else
                                            {
                                                $ledger_desc = 'Not Specified';
                                            };

                                            $receipt_amount = $row['amount'];
                                            $receipt_amount = number_format($receipt_amount, 2, '.', ',');
                                        
                                        echo '<td>'.$ledger_desc.'</td>
                                        <td class="amt-td">'.$receipt_amount.'</td>
                                        <td>'.$row['mode'].'</td>
        	                            <td class="action-td">';
                                            
                                              if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Receipt'] == 'Yes')) 
                                              {
                                                echo '<a href="#" id="btn_edit_receipt" data-id="'.$row['receipt_id'].'">Edit</a> | 
                                                <a href="#" id="btn_refund_receipt" 
                                                    data-id="'.$row['receipt_id'].'" 
                                                    data-id1="'.$row['amount'].'"
                                                    data-id2="'.$row['ledger_credit'].'"
                                                    data-id3="'.$credit_ledger_id.'"
                                                    data-id4="'.$row['received_from'].'"
                                                >Refund </a> | ';
                                              };
                                            
                                        
		                                    echo '<a href="#" id="btn_receipt_reprint" data-id="'.$row['receipt_id'].'">Reprint</a>';
		                                    
                                            
                                              if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Delete_Receipt'] == 'Yes')) 
                                              {
                                                echo ' | <a href="#" id="btn_delete_receipt" data-id="'.$row['receipt_id'].'">Delete</a>';
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
                                        <td class = "action-td" colspan="7"><small>Branch:'.$voucher_branch.': '.$creator.' '.$alter.'</small>
                                        </td>
                                    </tr>';
                                }
                            }
                            else
                            {
                                echo 'No Receipt Not Found';
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
    id="receipt_delete_modal" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="receipt_delete_modal" 
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="receipt_delete_modal_title">Receipt Deletion</h5>
            </div>
            <form action="#" method="POST">
                <div class="modal-body">
                    <p id="receipt_delete_question"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="receipt_delete_yes" name="receipt_delete_yes" class="btn btn-danger">Yes</button>
                    <button type="button" id="receipt_delete_no" name="receipt_delete_no" class="btn btn-primary" data-dismiss="modal">No</button>
                </div>
            </form>
        </div>
    </div>
</div><div 
    class="modal fade bd-example-modal-xl" 
    id="receipt_reprint_modal" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="receipt_reprint_modal" 
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="receipt_reprint_modal_title">Receipt Reprint</h5>
            </div>
            <form action="#" method="POST">
                <div class="modal-body">
                    <p id="receipt_reprint_question"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="receipt_reprint_a5" name="receipt_reprint_a5" class="btn btn-danger">A4</button>
                    <button type="button" id="receipt_reprint_pos" name="receipt_reprint_pos" class="btn btn-primary" data-dismiss="modal">POS</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/receipt_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/refund_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/footer_main.php');?>