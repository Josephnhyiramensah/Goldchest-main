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
	                Contra List
	            </h4>
                
                <?php
                      if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Create_Contra'] == 'Yes')) 
                      {
                        echo '<a href="#" data-toggle="" id="new_contra_icon">New Contra</a>';
                      };
                    ?>
            </div>
            <div class="float-right">
		        <form class="form-inline mr-auto w-100 navbar-search">
                    <?php
                        if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['user_type_id'] == 2))
                        {
                            echo '<div class="input-group">
                                <label for="contra_search_by_branch">Branch</label>
                                <select class="form-control border-0 small" name="contra_search_by_branch" id="contra_search_by_branch"> 
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
                        <label>Search</label>
                        <input type="text" class="form-control border-0 small" name="contra_search_name" id="contra_search_name">
                    </div>
                    <div class="input-group">
                        <label>From</label>
                        <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="contra_search_from" id="contra_search_from">
                    </div>
                    <div class="input-group">
                        <label>To</label>
                        <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="contra_search_to" id="contra_search_to">
                    </div>
                    <div class="input-group">
                        <a href="#" data-toggle="" id="contra_search_icon"><i class="fas fa-search"></i></a>
                    </div>
                </form>
	        </div>
        </div>
        <div class="card-body" id="contra_list_card_body">
            <?php
                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['user_type_id'] == 2))
                {
                    $query = "SELECT * FROM contra WHERE company_id = '$company_id' 
                    AND date = '$date_today' ORDER BY date DESC, contra_id ASC";
                }
                else
                {
                    $query = "SELECT * FROM contra WHERE company_id = '$company_id' 
                    AND branch_id = '$branch_id' AND date = '$date_today' ORDER BY date DESC, contra_id ASC";
                };
                /*$query_branch_count = "SELECT * FROM branch WHERE company_id = '".$_SESSION['company_id']."'";
                $query_run_branch_count = mysqli_query($con, $query_branch_count);
                if (mysqli_num_rows($query_run_branch_count) > 1)
                {
                    if ($_SESSION['user_type_id'] != 3) 
                    {
                        $query = "SELECT * FROM contra WHERE company_id = '".$_SESSION['company_id']."' 
                        AND date = '$date_today' ORDER BY date DESC, contra_id ASC";
                    }
                    else
                    {
                        $query = "SELECT * FROM contra WHERE company_id = '".$_SESSION['company_id']."' AND 
                        branch_id = '".$_SESSION['branch_id']."' AND date = '$date_today ORDER BY date DESC, contra_id ASC";
                    };
                }
                else
                {
                    $query = "SELECT * FROM contra WHERE company_id = '".$_SESSION['company_id']."' 
                    AND date = '$date_today' ORDER BY date DESC, contra_id ASC";
                };*/
                $query_run = mysqli_query($con, $query);
            ?>
            <div class="table-responsive" id="contra_list_table">
                <table class="table table-hover table-bordered table-sm" id="contraTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="10%" class="action-td">Contra No</th>
                            <th width="10%" class="action-td">Date</th>
                            <th width="20%">Debit Ledger</th>
                            <th width="20%">Credit Ledger</th>
                            <th width="10%">Amount</th>
                            <th width="25%">Narration</th>
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
                                        <?php
                                            $ledger_id_dr = $row['ledger_debit'];
                                            $query_ledger_dr = "SELECT * FROM ledgers WHERE ledger_id ='$ledger_id_dr'";
                                            $query_run_ledger_dr = mysqli_query($con,$query_ledger_dr);
                                            $row_ledger_dr = mysqli_fetch_array($query_run_ledger_dr);
                                        ?>
                                        <td><?php echo $row_ledger_dr['ledger_desc'];?></td>
                                        <?php
                                            $ledger_id = $row['ledger_credit'];
                                            $query_ledger="SELECT * FROM ledgers WHERE ledger_id ='$ledger_id'";
                                            $query_run_ledger = mysqli_query($con,$query_ledger);
                                            $row_ledger = mysqli_fetch_array($query_run_ledger);

                                            $contra_amount = $row['amount'];
                                            $contra_amount = number_format($contra_amount, 2, '.', ',');
                                        ?>
                                        <td><?php echo $row_ledger['ledger_desc'];?></td>
                                        <td class="amt-td"><?php echo $contra_amount;?></td>
                                        <td><?php echo $row['narration'];?></td>
        	                            <td class="action-td">
                                            <?php
                                              if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Contra'] == 'Yes')) 
                                              {
                                                echo '<a href="#" id="btn_edit_contra" data-id="'.$row['contra_id'].'"><i class="fa fa-edit fa-sm"></i></a> |';
                                              };
                                            ?>

                                              <a href="#" id="btn_contra_reprint" data-id="<?php echo $row['contra_id'];?>"><i class="fa fa-print fa-sm"></i></a>

                                            <?php
                                              if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Delete_Contra'] == 'Yes'))
                                              {
                                                echo '| <a href="#" id="btn_delete_contra" data-id="'.$row['contra_id'].'"><i class="fa fa-trash fa-sm"></i></a>';
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
                                        <td class = "action-td" colspan="7"><?php echo '<small>Branch:'.$voucher_branch.': '.$creator.' '.$alter.'</small>';?></td>
                                    </tr>
                        <?php
                                }
                            }
                            else
                            {
                                    echo 'No Contra Voucher Not Found';
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
    id="contra_delete_modal" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="contra_delete_modal" 
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contra_delete_modal_title">Contra Deletion</h5>
            </div>
            <form action="#" method="POST">
                <div class="modal-body">
                    <p id="contra_delete_question"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="contra_delete_yes" name="contra_delete_yes" class="btn btn-danger">Yes</button>
                    <button type="button" id="contra_delete_no" name="contra_delete_no" class="btn btn-primary" data-dismiss="modal">No</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include('contra_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/footer_main.php');?>