<?php
    //session_start(); 
    require($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/auth.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/header_main.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/navbar_main.php');
    
	date_default_timezone_set("Africa/Accra");
	$date_today = date('Y-m-d');
	$time = date('H-i-sa');
    $company_id = $_SESSION['company_id'];
    $branch_id = $_SESSION['branch_id'];
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
	                Admission List
	            </h4>
                <?php
                  if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Create_Admission'] == 'Yes')) 
                  {
                    echo '<a href="#" data-toggle="" id="new_admission_icon">New admission</a>';
                  };
                ?>
            </div>
            <div class="float-right">
		        <form class="form-inline mr-auto w-100 navbar-search">
                    <?php
                        if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['user_type_id'] == 2))
                        {
                            echo '<div class="input-group">
                                <label for="admission_search_by_branch">Branch</label>
                                <select class="form-control border-0 small" name="admission_search_by_branch" id="admission_search_by_branch"> 
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
                        <label for="admission_search_name">Search</label>
                        <input type="text" class="form-control border-0 small" name="admission_search_name" id="admission_search_name">
                    </div>
                    <div class="input-group">
                        <label for="admission_search_from">From</label>
                        <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="admission_search_from" id="admission_search_from">
                    </div>
                    <div class="input-group">
                        <label for="admission_search_to">To</label>
                        <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="admission_search_to" id="admission_search_to">
                    </div>
                    <div class="input-group">
                        <a href="#" data-toggle="" id="admission_search_icon"><i class="fas fa-search"></i></a>
                    </div>
                </form>
	        </div>
        </div>
        <div class="card-body" id="admission_list_card_body">
            <?php
                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['user_type_id'] == 2))
                {
                    $query = "SELECT * FROM admission WHERE company_id = '$company_id' 
                    ORDER BY date_admitted DESC, admission_id ASC";
                }
                else
                {
                    $query = "SELECT * FROM admission WHERE company_id = '$company_id' AND branch_id = '$branch_id' 
                    ORDER BY date_admitted DESC, admission_id ASC";
                };
                $query_run = mysqli_query($con, $query);
            ?>
            
            <div class="table-responsive" id="admission_list_table">
                <table class="table table-hover table-bordered table-sm" id="admissionTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="action-td">Deseased</th>
                            <th class="action-td">Adm. Date</th>
                            <th class="action-td">Disch. Date</th>
                            <th class="action-td">Duration</th>
                            <th class="action-td">Fridge Cost</th>
                            <th class="action-td">Total Bill</th>
                            <th class="action-td">Receipts</th>
                            <th class="action-td">Discount</th>
                            <th class="action-td">Refund</th>
                            <th class="action-td">Balance</th>
                            <th class="action-td">Relative</th>
                            <th class="action-td">Telephone</th>
                            <th class="action-td">Address</th>
                            <th class="action-td">Action</th>
                        </tr>
                    </thead>
                    <tbody class="pv-table-body">
                        <?php
                            if (!empty($query_run) && mysqli_num_rows($query_run) > 0)
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                                    $admission_id = $row['admission_id'];
                                    $total_freeze = 0;
                                    $query_ref = "SELECT * FROM refrigerator_list WHERE admission_id='$admission_id'";
                                    $result_ref = mysqli_query($con,$query_ref);
                                    if(!empty($result_ref) && mysqli_num_rows($result_ref) > 0)
                                    {
                                        while($row_ref = mysqli_fetch_assoc($result_ref))
                                        {
                                            if(isset($row_ref['date_discharged']) && $row_ref['date_discharged'] > 0)
                                            {
                                                $date_discharged = $row_ref['date_discharged'];
                                                $discharged_date = new DateTime($date_discharged);
                                            }
                                            else
                                            {
                                                $discharged_date = new DateTime();
                                            };
                                            $date_admitted = $row_ref['date_admitted'];
                                            $admission_date = new DateTime($date_admitted);
                                            $days = $discharged_date->diff($admission_date)->format('%a');
                                            

                                            $refrigerator_id = $row_ref['refrigerator_id'];
                                            
                                            //RETROSPECTIVE
                                                $query_ref_pl = "SELECT * FROM refrigerator_price WHERE refrigerator_id='$refrigerator_id'
                                                AND date <= '$date_admitted' ORDER BY date DESC";
                                                $result_ref_pl = mysqli_query($con,$query_ref_pl);
                                                if(!empty($result_ref_pl) && mysqli_num_rows($result_ref_pl) > 0)
                                                {
                                                    $row_ref_pl = mysqli_fetch_assoc($result_ref_pl);
                                                    $start_price = $row_ref_pl['price'];
                                                }
                                                else
                                                {
                                                    $start_price = 0;
                                                };

                                                $total_refrigerator_cost = 0;
                                                $start_date = $date_admitted;
                                                $sp = $start_price;

                                                if($days > 0)  
                                                {  
                                                    for($i = 0; $i < $days; $i++)
                                                    {  
                                                        $total_freeze = $total_freeze + $start_price;
                                                        $total_refrigerator_cost = $total_refrigerator_cost + $start_price;
                                                        $repeat = strtotime("+1 day",strtotime($start_date));
                                                        $start_date = date('Y-m-d',$repeat);
                                                        //echo $start_date.', '.$start_price.'</br>';
                                                        $query_pl = "SELECT * FROM refrigerator_price WHERE refrigerator_id='$refrigerator_id'
                                                        AND date = '$start_date'";
                                                        $result_pl = mysqli_query($con,$query_pl);
                                                        if(!empty($result_pl) && mysqli_num_rows($result_pl) > 0)
                                                        {
                                                            $row_pl = mysqli_fetch_assoc($result_pl);
                                                            $start_price = $row_pl['price'];
                                                        };
                                                    }; 
                                                };
                                        };
                                    }
                                    else
                                    {
                                        if(isset($row['date_discharged']) && $row['date_discharged'] > 0)
                                        {
                                            $discharged_date = new DateTime($date_discharged);
                                        }
                                        else
                                        {
                                            $discharged_date = new DateTime();
                                        };
                                        $date_admitted = $row_ref['date_admitted'];
                                        $admission_date = new DateTime($date_admitted);
                                        $days = $discharged_date->diff($admission_date)->format('%a');
                                    };
                                    
                                    //FRIDGE COST
                                        /*$query_refrigerator = "SELECT * FROM refrigerator WHERE refrigerator_id='$refrigerator_id'";
                                        $result_refrigerator = mysqli_query($con,$query_refrigerator);
                                        if(!empty($result_refrigerator) && mysqli_num_rows($result_refrigerator) > 0)
                                        {
                                            $row_refrigerator = mysqli_fetch_assoc($result_refrigerator);
                                            $refrigerator_price = $row_refrigerator['price'];
                                        }
                                        else
                                        {
                                            $refrigerator_price = 0;
                                        };
                                        $fridge_cost = $days * $refrigerator_price;*/

                                    
                                    //SERVICE ITEMS
                                        $amount_service = 0;
                                        $amount_service_f = 0;
                                        $query_service = "SELECT * FROM admission_service WHERE admission_id = '$admission_id'";
                                        $query_run_service = mysqli_query($con, $query_service);
                                        if (!empty($query_run_service) && mysqli_num_rows($query_run_service) > 0)
                                        {
                                            while($row_service = mysqli_fetch_assoc($query_run_service))
                                            {
                                                $amount_service = $amount_service + $row_service['amount'];
                                            };
                                        };
                                        
                                    //STOCK ITEMS
                                        $amount_stock = 0;
                                        $amount_stock_f = 0;
                                        $query_stock = "SELECT * FROM admission_stock WHERE admission_id = '$admission_id'";
                                        $query_run_stock = mysqli_query($con, $query_stock);
                                        if (!empty($query_run_stock) && mysqli_num_rows($query_run_stock) > 0)
                                        {
                                            while($row_stock = mysqli_fetch_assoc($query_run_stock))
                                            {
                                                $amount_stock = $amount_stock + $row_stock['amount'];
                                            };
                                        };

                                    //RECEIPT
                                        $total_receipt = 0;
                                        $query_receipt = "SELECT * FROM receipt WHERE admission_id = '$admission_id'";
                                        $query_run_receipt = mysqli_query($con, $query_receipt);
                                        if (!empty($query_run_receipt) && mysqli_num_rows($query_run_receipt) > 0)
                                        {
                                            while($row_receipt = mysqli_fetch_assoc($query_run_receipt))
                                            {
                                                $total_receipt = $total_receipt + $row_receipt['amount'];
                                            };
                                        };
                                    
                                    
                                //CREATED_BY
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

                                //ALTERED_BY
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
                           
                                //REFUND
                                    $refund_amount = 0;
                                    $query_receipt = "SELECT * FROM receipt WHERE admission_id='$admission_id'";
                                    $result_receipt = mysqli_query($con,$query_receipt);
                                    if(!empty($result_receipt) && mysqli_num_rows($result_receipt) > 0)
                                    {
                                        while($row_receipt = mysqli_fetch_assoc($result_receipt))
                                        {
                                            $receipt_id = $row_receipt['receipt_id'];
                                            $query_refund = "SELECT * FROM refund WHERE receipt_id='$receipt_id'";
                                            $result_refund = mysqli_query($con,$query_refund);
                                            if(!empty($result_refund) && mysqli_num_rows($result_refund) > 0)
                                            {
                                                while($row_refund = mysqli_fetch_assoc($result_refund))
                                                {
                                                    $refund_amount = $refund_amount + $row_refund['amount'];
                                                };
                                            }
                                            else
                                            {
                                                $refund_amount = 0;
                                            };
                                        };
                                    }
                                    else
                                    {
                                        $refund_amount = 0;
                                    };

                                //DISCOUNT
                                    $query_discount = "SELECT SUM(amount) AS amount FROM discount WHERE admission_id='$admission_id'";
                                    $result_discount = mysqli_query($con,$query_discount);
                                    if(!empty($result_discount) && mysqli_num_rows($result_discount) > 0)
                                    {
                                        $row_discount = mysqli_fetch_assoc($result_discount);
                                        $discount_amount = $row_discount['amount'];
                                    }
                                    else
                                    {
                                        $discount_amount = 0;
                                    };
                                    $total = $amount_service + $amount_stock;
                                    $total_f = number_format($total, 2, '.', ',');
                                    $total_receipt_f = number_format($total_receipt, 2, '.', ',');
                                    $refund_amount_f = number_format($refund_amount, 2, '.', ',');
                                    $discount_amount_f = number_format($discount_amount, 2, '.', ',');
                                    $balance = $total - $total_receipt - $discount_amount + $refund_amount;
                                    $balance_f = number_format($balance, 2, '.', ',');
                                    //$fridge_cost_f = number_format($fridge_cost, 2, '.', ',');
                                    $total_freeze_f = number_format($total_freeze, 2, '.', ',');
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['deceased'];?>
                                        </td>
                                        <td class="action-td"><?php echo $row['date_admitted'];?></td>
                                        <td class="action-td"><?php echo $row['date_discharged'];?></td>
                                        <td class="action-td"><?php echo $days.'day(s)';?></td>
                                        <td class="amt-td"><?php echo $total_freeze_f;?></td>
                                        <td class="amt-td"><?php echo $total_f;?></td>
                                        <td class="amt-td"><?php echo $total_receipt_f;?></td>
                                        <td class="amt-td"><?php echo $discount_amount_f;?></td>
                                        <td class="amt-td"><?php echo $refund_amount_f;?></td>
                                        <td class="amt-td"><?php echo $balance_f;?></td>
                                        <td><?php echo $row['relative'];?></td>
                                        <td><?php echo $row['relative_phone_no'];?></td>
                                        <td><?php echo $row['relative_address'];?></td>
        	                            <td class="action-td">
                                            <?php
                                              if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Create_Admission'] == 'Yes')) 
                                              {
                                                echo '<a href="#" id="btn_add_bill" data-id="'.$row['admission_id'].'">Add Bill</a> | ';
                                              };

                                              if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Admission'] == 'Yes')) 
                                              {
                                                echo '<a href="#" id="btn_edit_admission" data-id="'.$row['admission_id'].'">Edit</a> | ';
                                              };

                                              //if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Admission_Transfer'] == 'Yes')) 
                                              //{
                                                if ($row['date_discharged'] =='') 
                                                {
                                                    echo '<a href="#" id="btn_transfer_admission" data-id="'.$row['admission_id'].'" data-id1="'.$row['deceased'].'">Transfer</a> | ';
                                                };
                                              //};

                                              //if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Create_Discount'] == 'Yes')) 
                                              //{
                                                echo '<a href="#" id="btn_discount_admission" data-id="'.$row['admission_id'].'" data-id1="'.$row['deceased'].'">Discount</a> | ';
                                              //};
                                            ?>

                                              <a href="#" id="btn_admission_reprint" data-id="<?php echo $row['admission_id'];?>">Reprint</a>

                                            <?php
                                              if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Discharge_Admission'] == 'Yes'))
                                              {
                                                //$date = date('Y-m-d',strtotime($row['date_discharged']));
                                                //if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date)) {
                                                if ($row['date_discharged'] =='') 
                                                {
                                                    echo '| <a href="#" id="btn_discharge_admission" data-id="'.$row['admission_id'].'" data-id1="'.$row['date_admitted'].'" data-id2="'.$row['refrigerator_id'].'">Discharge</a>';
                                                };
                                              };
                                              if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Create_Receipt'] == 'Yes'))
                                              {
                                                echo ' | <a href="#" id="new_receipt_from_admission_icon" 
                                                data-id="'.$row['admission_id'].'" data-id1="'.$balance.'" 
                                                data-id2="'.$row['deceased'].'"
                                                data-id3="'.$_SESSION['cash_ledger_id'].'">New Receipt</a>';
                                              };
                                              if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Delete_Admission'] == 'Yes'))
                                              {
                                                echo ' | <a href="#" id="btn_delete_admission" data-id="'.$row['admission_id'].'">Delete</a>';
                                              };
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
                                        <td class = "action-td" colspan="14"><?php echo '<small>Branch:'.$voucher_branch.':- Entered By:'.$created_by.' Altered By:'.$altered_by.'</small>';?></td>
                                    </tr>
                                <?php
                                }
                            }
                            else
                            {
                                echo 'No admission Not Found';
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
    id="admission_delete_modal" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="admission_delete_modal" 
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="admission_delete_modal_title">Admission Deletion</h5>
            </div>
            <form action="#" method="POST">
                <div class="modal-body">
                    <p id="admission_delete_question"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="admission_delete_yes" name="admission_delete_yes" class="btn btn-danger">Yes</button>
                    <button type="button" id="admission_delete_no" name="admission_delete_no" class="btn btn-primary" data-dismiss="modal">No</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/discount_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/admission_transfer_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/receipt_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/admission_discharge_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/admission_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/footer_main.php');?>