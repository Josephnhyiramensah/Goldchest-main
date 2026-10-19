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
	$branch_id = $_SESSION['branch_id'];
    if($company_id == 11)
    {
        $warehouse_id = $_SESSION['user_warehouse'];
    }
    else
    {
        $warehouse_id = $_SESSION['warehouse_id'];
    };
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
	                Maintenance Voucher List
	            </h4>
                <div class="input-group">
                    <a href="#" data-toggle="" id="new_mtce_icon">New M'tce Voucher</a>
                </div>
            </div>
            <div class="float-right">
		        <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <label>Name</label>
                        <input type="text" class="form-control border-0 small" name="mtce_name" id="mtce_name">
                    </div>
                    <div class="input-group">
                        <label>From</label>
                            <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="mtce_search_from" id="mtce_search_from">
                    </div>
                    <div class="input-group">
                        <label>To</label>
                        <input type="date" class="form-control border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="mtce_search_to" id="mtce_search_to">
                    </div>
                    <div class="input-group">
                        <a href="#" data-toggle="" id="mtce_search_icon"><i class="fas fa-search"></i></a>
                    </div>
		        </form>
	        </div>
        </div>
        <div class="card-body">
            <?php
                $company_id = $_SESSION['company_id'];
                $query = "SELECT * FROM mtce_sheet WHERE company_id = '$company_id' AND date = '$date_today' ORDER BY date DESC";
                $query_run = mysqli_query($con, $query);
            ?>
            <div class="table-responsive" id="mtce_list_table">
                <table class="table table-hover table-bordered table-sm" id="mtceTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class = "action-td">Mtce ID</th>
                            <th class = "action-td">Date</th>
                            <th class = "action-td">Serviced By</th>
                            <th class = "action-td">Address</th>
                            <th class = "action-td">Telephone</th>
                            <th class = "action-td">Amount</th>
                            <th class = "action-td">Action</th>
                        </tr>
                    </thead>
                    <tbody class="pv-table-body">
                        <?php
                            if (mysqli_num_rows($query_run) > 0)
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                                    $ledger_cash = $row['ledger_cash'];
                                    $query_ledger = "SELECT * FROM ledgers WHERE ledger_id='$ledger_cash'";
                                    $query_ledger_run = mysqli_query($con, $query_ledger);
                                    $row_ledger = mysqli_fetch_assoc($query_ledger_run);
                        ?>
                                    <tr>
                                        <td class = "action-td">
                                            <?php
                                                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Mtce_Sheet'] == 'Yes')) 
                                                {
                                                    echo '<a href="#" id="btn_edit_mtce" data-id="'.$row['mtce_sheet_id'].'">'.$row['sno'].'</a>';
                                                }
                                                else
                                                {
                                                    echo $row['sno'];
                                                };
                                            ?>
                                        </td>
                                        <td class = "action-td"><?php echo $row['date'];?></td>
                                        <td><?php if(isset($row_ledger)){echo $row_ledger['ledger_desc'].' - '.$row['serviced_by'];}else{echo $row['serviced_by'];};?></td>
                                        <td class = "action-td"><?php echo $row['address'];?></td>
                                        <td class = "action-td"><?php echo $row['telephone'];?></td>
                                        <td class = "amt-td"><?php echo $row['amount'];?></td>
        	                            <td class = "action-td">
                                            <?php
                                                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Delete_Mtce_Sheet'] == 'Yes')) 
                                                {
                                                    echo '<a href="#" id="btn_delete_mtce_sheet" data-id="'.$row['mtce_sheet_id'].'"><i class="fa fa-trash fa-sm"></i></a>';
                                                };
                                            ?>
        	                            </td>
                                    </tr>
                        <?php
                                }
                            }
                            else
                            {
                                    echo 'No Mtce Not Found';
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
    id="mtce_invoice_delete_modal" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="mtce_invoice_delete_modal" 
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mtce_invoice_delete_modal_title">Hiring Invoice Deletion</h5>
            </div>
            <form action="#" method="POST">
                <div class="modal-body">
                    <p id="mtce_invoice_delete_question"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="mtce_delete_yes" name="mtce_delete_yes" class="btn btn-danger">Yes</button>
                    <button type="button" id="mtce_delete_no" name="mtce_delete_no" class="btn btn-primary" data-dismiss="modal">No</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('mtce_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/footer_main.php');?>