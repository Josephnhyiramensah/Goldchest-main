<?php
    //session_start(); 
    require($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/auth.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/header_main.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/navbar_main.php');
    
	date_default_timezone_set("Africa/Accra");
	$date_today = date('Y-m-d');
	$time = date('H-i-sa');
?>
<input type='hidden' id='session_company_id' value="<?php echo $_SESSION['company_id'];?>">
<input type='hidden' id='session_user_super_id' value="<?php echo $_SESSION['user_super_id'];?>">
<input type='hidden' id='session_user_id' value="<?php echo $_SESSION['user_id'];?>">
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
	                Discount List
	            </h4>
                <?php
                  //if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Create_Discount'] == 'Yes')) 
                  //{
                    echo '<a href="#" data-toggle="" id="new_discount_icon">New Discount</a>';
                  //};
                ?>
            </div>
            <div class="float-right">
		        <form class="form-inline mr-auto w-100 navbar-search">
		        	<div class="input-group">
		            	<label for="discount_search_name">Name</label>
        				<input type="text" class="form-control border-0 small" name="discount_search_name" id="discount_search_name">
		            </div>
		            <div class="input-group">
		            	<label for="discount_search_from">From</label>
                        <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="discount_search_from" id="discount_search_from">
		            </div>
		            <div class="input-group">
		            	<label for="discount_search_to">To</label>
                        <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="discount_search_to" id="discount_search_to">
		            </div>
		        	<div class="input-group">
                    <a href="#" data-toggle="" id="discount_search_icon"><i class="fas fa-search"></i></a>
		            </div>
		        </form>
	        </div>
        </div>
        <div class="card-body" id="discount_list_card_body">
            <?php
                $query_branch_count = "SELECT * FROM branch WHERE company_id = '".$_SESSION['company_id']."'";
                $query_run_branch_count = mysqli_query($con, $query_branch_count);
                if (mysqli_num_rows($query_run_branch_count) > 1)
                {
                    if ($_SESSION['user_type_id'] != 3) 
                    {
                        $query = "SELECT * FROM discount WHERE company_id = '".$_SESSION['company_id']."' 
                        AND date = '$date_today' ORDER BY date DESC, discount_id ASC";
                    }
                    else
                    {
                        $query = "SELECT * FROM discount WHERE company_id = '".$_SESSION['company_id']."' 
                        AND branch_id = '".$_SESSION['branch_id']."' AND date = '$date_today' ORDER BY date DESC, discount_id ASC";
                    };
                }
                else
                {
                    $query = "SELECT * FROM discount WHERE company_id = '".$_SESSION['company_id']."' 
                    AND date = '$date_today' ORDER BY date DESC, discount_id ASC";
                };
                $query_run = mysqli_query($con, $query);
            ?>
            <div class="table-responsive" id="payment_list_table">
                <table class="table table-hover table-bordered table-sm" id="paymentTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="10%" class="action-td">discount No</th>
                            <th width="10%" class="action-td">Date</th>
                            <th width="30%">Received From</th>
                            <th width="20%">Receiving Ledger</th>
                            <th width="15%">Amount</th>
                            <th width="10%">Mode</th>
                            <th width="5%" class="action-td">Action</th>
                        </tr>
                    </thead>
                    <tbody class="pv-table-body">
                        <?php
                            if (mysqli_num_rows($query_run) > 0)
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                        ?>
                                    <tr>
                                        <td class="action-td">
                                            <?php echo $row['sno'];?>
                                        </td>
                                        <td class="action-td"><?php echo $row['date'];?></td>
                                        <td><?php echo $row['received_from'];?></td>
                                        <?php
                                            $ledger_id = $row['ledger_credit'];
                                            $query_ledger="SELECT * FROM ledgers WHERE ledger_id ='$ledger_id'";
                                            $query_run_ledger = mysqli_query($con,$query_ledger);
                                            $row_ledger = mysqli_fetch_array($query_run_ledger);

                                            $discount_amount = $row['amount'];
                                            $discount_amount = number_format($discount_amount, 2, '.', ',');
                                            
                                            $created_id = $row['created_by'];
                                            $query_creator = "SELECT * FROM users WHERE id='$created_id'";
                                            $result_creator = mysqli_query($con,$query_creator);
                                            if(!empty($result_creator) && mysqli_num_rows($result_creator) > 0)
                                            {
                                                $row_creator = mysqli_fetch_assoc($result_creator);
                                                $created_by = $row_creator['first_name'].' '.$row_creator['last_name'].': '.$row['created_datetime'];
                                            }
                                            else
                                            {
                                                $created_by = 'Not Specified';
                                            };
                                            
                                            $altered_id = $row['altered_by'];
                                            $query_alter = "SELECT * FROM users WHERE id='$altered_id'";
                                            $result_alter = mysqli_query($con,$query_alter);
                                            if(!empty($result_alter) && mysqli_num_rows($result_alter) > 0)
                                            {
                                                $row_alter = mysqli_fetch_assoc($result_alter);
                                                $altered_by = $row_alter['first_name'].' '.$row_alter['last_name'].': '.$row['altered_datetime'];
                                            }
                                            else
                                            {
                                                $altered_by = 'Not Specified';
                                            };
                                        ?>
                                        <td><?php echo $row_ledger['ledger_desc'];?></td>
                                        <td class="amt-td"><?php echo $discount_amount;?></td>
                                        <td><?php echo $row['mode'];?></td>
        	                            <td class="action-td">
                                            <?php
                                              //if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Discount'] == 'Yes')) 
                                              //{
                                                echo '<a href="#" id="btn_edit_discount" data-id="'.$row['discount_id'].'">Edit</a> | 
                                                <a href="#" id="btn_discount_discount" data-id="'.$row['discount_id'].'">Refund</a> | ';
                                              //};
                                            ?>
                                            
		                                    <a href="#" id="btn_discount_reprint" data-id="<?php echo $row['discount_id'];?>">Reprint</a>
		                                    
                                            <?php
                                              //if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Delete_Discount'] == 'Yes')) 
                                              //{
                                                echo '|<a href="#" id="btn_delete_discount" data-id="'.$row['discount_id'].'">Delete</a>';
                                              //};
                                            ?>
        	                            </td>
                                    </tr>
                                    <tr>
                                        <td class = "action-td" colspan="7"><?php echo '<small>Entered By:'.$created_by.' Altered By:'.$altered_by.'</small>';?></td>
                                    </tr>
                                <?php
                                }
                            }
                            else
                            {
                                    echo 'No discount Not Found';
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
    id="discount_delete_modal" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="discount_delete_modal" 
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="discount_delete_modal_title">Discount Deletion</h5>
            </div>
            <form action="#" method="POST">
                <div class="modal-body">
                    <p id="discount_delete_question"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="discount_delete_yes" name="discount_delete_yes" class="btn btn-danger">Yes</button>
                    <button type="button" id="discount_delete_no" name="discount_delete_no" class="btn btn-primary" data-dismiss="modal">No</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/discount_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/footer_main.php');?>