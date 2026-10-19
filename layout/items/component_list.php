<?php
    //session_start(); 
    require($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/auth.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/header_main.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/navbar_main.php');
?>
<style type="text/css">
    input {
            border-top-style: hidden;
            border-right-style: hidden;
            border-left-style: hidden;
            border-bottom-style: hidden;
            background-color: #ffffff;
          }
    .amt-td {text-align:right;}
    .action-td {text-align:center;}
  </style>
<div class="container-fluid">
    <div class="card shadow md-4">
        <div class="card-header py-3">
        	<div class="float-left">
	            <h4 class="m-0 font-weight-bold text-primary">
	                Component List
	            </h4>
                <div class="input-group">
                    <a href="#" data-toggle="" id="new_component_icon">New Component</a>
                </div>
            </div>
            <div class="float-right">
		        <form class="form-inline mr-auto w-100 navbar-search">
		        	
		        </form>
	        </div>
        </div>
        <div class="card-body">
            <?php
                $company_id = $_SESSION['company_id'];
                $query = "SELECT * FROM component WHERE company_id = '$company_id' ORDER BY component ASC";
                $query_run = mysqli_query($con, $query);
            ?>
            <div class="table-responsive" id="component_list_table">
                <table class="table table-hover table-bordered table-sm" id="componentTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="action-td">Component</th>
                            <th class="action-td">Price Per Gram</th>
                            <th class="action-td">Action</th>
                        </tr>
                    </thead>
                    <tbody class="pv-table-body">
                        <?php
                            if (!empty($query_run) && mysqli_num_rows($query_run) > 0)
                            {
                                while($row=mysqli_fetch_assoc($query_run))
                                {
                        ?>
                                    <tr>
                                        <td>
                                            <a href="#" id="btn_edit_component" data-id="<?php echo $row['component_id'];?>"><?php echo $row['component'];?></a>
                                        </td>
                                        <td class="amt-td"><?php echo $row['price_per_gram'];?></td>
        	                            <td class="action-td">
        									<a href="#" id="btn_edit_component" data-id="<?php echo $row['component_id'];?>"><i class="fa fa-edit fa-sm"></i></a>
                                            | <a href="#" id="btn_delete_component" data-id="<?php echo $row['component_id'];?>"><i class="fa fa-trash fa-sm"></i></a>
        	                            </td>
                                    </tr>
                        <?php
                                }
                            };
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/items/component_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/items/item_delete_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/footer_main.php');?>