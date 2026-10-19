<?php
    require($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/auth.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/header_main.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/navbar_main.php');
    if (isset($_SESSION['user_super_id'])) {
        $user_super_id = $_SESSION['user_super_id'];
        $name = $_SESSION['full_name'];
    };
    $company_id = $_SESSION['company_id'];
    $branch_id = $_SESSION['branch_id'];

    function ageCalculator($dob){
        if(!empty($dob)){
            $birthdate = new DateTime($dob);
            $today   = new DateTime('today');
            $age = $birthdate->diff($today)->y;
            return $age;
        }else{
            return 0;
        }
    }
?>
<input type='hidden' id='session_user_super_id' value="<?php echo $user_super_id;?>">
<style type="text/css">
    input {border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;background-color: #ffffff;}
    .scroll-card-body {max-height: 700px;overflow-y: auto;}
    .amt-td {text-align:right;}
    .action-td {text-align:center;}
  </style>
<div class="container-fluid">
    <div class="card shadow md-4">
        <div class="card-header py-3">
        	<div class="float-left">
	            <h4 class="m-0 font-weight-bold text-primary">
	                Customer List
	            </h4>
                <div class="input-group">
                    <a href="#" data-toggle="" data-id="customer" id="new_customer_icon">New Customer</a>
                </div>
            </div>
            <div class="float-right">
		        <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <label for="customer_search_name">Search</label>
                        <input type="text" class="form-control border-0 small" name="customer_search_name" id="customer_search_name">
                    </div>
                    <div class="input-group">
                        <label for="customer_search_name_criteria">Search Criteria</label>
                        <select class="form-control" name="customer_search_name_criteria" id="customer_search_name_criteria"> 
                            <option value="Name">Name</option>
                            <option value="Telephone">Telephone</option>
                        </select>
                    </div>
		        	<div class="input-group">

                    <a href="#" data-toggle="" id="new_customer_icon"><i class="fas fa-user"></i></a>

		            </div>
		        </form>
	        </div>
        </div>
        <div class="card-body">
            <?php
                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['user_type_id'] == 2))
                {
                    $query = "SELECT * FROM customer WHERE company_id = '$company_id' ORDER BY first_name ASC";
                }
                else
                {
                    $query = "SELECT * FROM customer WHERE company_id = '$company_id' AND branch_id = '$branch_id' ORDER BY first_name ASC";
                };
                $query_run = mysqli_query($con, $query);
            ?>
            <div class="table-responsive" id="customer_table">
                <table class="table table-hover table-bordered table-sm" id="customerTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class = "action-td">Name</th>
                            <th class = "action-td">Age</th>
                            <th class = "action-td">Sex</th>
                            <th class = "action-td">ID Number</th>
                            <th class = "action-td">ID Type</th>
                            <th class = "action-td">Telephone</th>
                            <th class = "action-td">Action</th>
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
	                            <td><?php echo $row['first_name'].' '.$row['last_name']?></td>
                                <td class = "action-td"><?php echo ageCalculator($row['date_of_birth']).' year(s)';?></td>
                                <td class = "action-td"><?php echo $row['gender'];?></td>
                                <td class = "action-td"><?php echo $row['id_number'];?></td>
                                <td class = "action-td"><?php echo $row['id_type'];?></td>
                                <td class = "action-td"><?php echo $row['phone_number'];?></td>
                                <td class = "action-td">
                                    <?php
                                      if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Create_Ledger'] == 'Yes')) 
                                      {
                                        echo '<a 
                                        href="#" id="btn_edit_customer" 
                                        data-id="'.$row['customer_id'].'">
                                        Edit
                                    </a>';
                                      };

                                      if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Delete_Ledger'] == 'Yes')) 
                                      {
                                        echo ' | <a href="#" id="btn_delete_customer" data-id="'.$row['customer_id'].'">Delete</a>';
                                      };
                                    ?>
	                            </td>
                            </tr>
                        <?php
                                }
                            }
                            else
                            {
                                    echo 'Data Not Found';
                            };
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('customer_setup_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/footer_main.php');?>