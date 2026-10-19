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
	                Stock Requisition List
	            </h4>
                <div class="input-group">
                <a href="#" data-toggle="" id="new_stock_requisition_icon">New Stock Requisition</a>
                </div>
            </div>
            <div class="float-right">
		        <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <label>Name</label>
                        <input type="text" class="form-control border-0 small" name="patient_name" id="patient_name">
                    </div>
                    <div class="input-group">
                        <label>From</label>
                        <?php
                            if($remember_state == true)
                            {
                        ?>
                                <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="stock_requisition_search_from" id="stock_requisition_search_from" value="<?php echo $search_from;?>">
                        <?php
                            }
                            else
                            {
                        ?>
                                <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="stock_requisition_search_from" id="stock_requisition_search_from">
                        <?php
                            };
                        ?>
                    </div>
                    <div class="input-group">
                        <label>To</label>
                            <?php
                                if($remember_state == true)
                                {
                            ?>
                                    <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="stock_requisition_search_to" id="stock_requisition_search_to" value="<?php echo $search_to;?>">
                            <?php
                                }
                                else
                                {
                            ?>
                                    <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="stock_requisition_search_to" id="stock_requisition_search_to">

                            <?php
                                };
                            ?>
                    </div>
                    <div class="input-group">
                        <div class="form-check">
                            <?php
                                if($remember_state == true)
                                {
                            ?>
                                    <input class="form-check-input" type="checkbox" value="" id="remember_state" checked>
                            <?php
                                }
                                else
                                {
                            ?>
                                    <input class="form-check-input" type="checkbox" value="" id="remember_state">
                            <?php
                                };
                            ?>
                        </div>
                    </div>
		        </form>
	        </div>
        </div>
        <div class="card-body">
            <?php
                $company_id = $_SESSION['company_id'];
                $query = "SELECT * FROM stock_requisition WHERE company_id = '$company_id' AND 
                date = '$date_today' ORDER BY date DESC";
                $query_run = mysqli_query($con, $query);
            
            echo '<div class="table-responsive" id="stock_requisition_list_table">
                <table class="table table-hover table-bordered table-sm" id="stockrequisitionTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class = "action-td">ID</th>
                            <th class = "action-td">Date</th>
                            <th>Requested By</th>
                            <th class = "action-td">Requested To</th>
                            <th class = "action-td">Requested From</th>
                            <th class = "action-td">Action</th>
                        </tr>
                    </thead>
                    <tbody class="pv-table-body">';
                        if (mysqli_num_rows($query_run) > 0)
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                                $warehouse_from = $row['warehouse_from'];
                                $warehouse_to = $row['warehouse_to'];
                                $query_warehouse_from = "SELECT * FROM warehouse WHERE warehouse_id ='$warehouse_to'";
                                $query_warehouse_from_run = mysqli_query($con, $query_warehouse_from);
                                $row_warehouse_from = mysqli_fetch_assoc($query_warehouse_from_run);

                                $query_warehouse_to = "SELECT * FROM warehouse WHERE warehouse_id ='$warehouse_from'";
                                $query_warehouse_to_run = mysqli_query($con, $query_warehouse_to);
                                $row_warehouse_to = mysqli_fetch_assoc($query_warehouse_to_run);
                    
                                echo '<tr>
                                    <td class = "action-td">
                                        <a href="#" id="btn_edit_stock_req" data-id="'.$row['stock_req_id'].'">'.$row['sno'].'</a>
                                    </td>
                                    <td class = "action-td">'.$row['date'].'</td>
                                    <td>'.$row['requested_by'].'</td>
                                    <td class = "action-td">'.$row_warehouse_to['warehouse_desc'].'</td>
                                    <td class = "action-td">'.$row_warehouse_from['warehouse_desc'].'</td>
                                    <td class = "action-td">';
                                    
                                        $requisition_id = $row['stock_req_id'];
                                        $query_req_trans = "SELECT * FROM stock_transfer WHERE stock_req_id ='$requisition_id'";
                                        $query_run_req_trans = mysqli_query($con, $query_req_trans);
                                        if (mysqli_num_rows($query_run_req_trans) < 1)
                                        {
                                            echo '<a href="#" id="btn_transfer_stock_req" data-id="'.$row['stock_req_id'].'">Transfer</a>
                                                    | ';
                                        };
                                
                                        echo '<a href="#" id="btn_delete_stock_req" data-id="'.$row['stock_req_id'].'">Delete</a>
                                    </td>
                                </tr>';
                                            
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
                          
                        echo '<tr>
                            <td class = "action-td" colspan="6"><small>Branch:'.$voucher_branch.': '.$creator.' '.$alter.'</small></td>
                        </tr>';
                    
                            }
                        }
                        else
                        {
                                echo 'No Stock Requisition Not Found';
                        };
                    echo '</tbody>
                </table>
            </div>';
            ?>
        </div>
    </div>
</div>
<?php include('stock_requisition_create_modal.php');?>
<?php include('stock_transfer_create_modal.php');?>
<?php include('stock_requisition_delete_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/footer_main.php');?>