<?php
    //session_start(); 
    require($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/auth.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/header_main.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/navbar_main.php');
    $company_id = $_SESSION['company_id'];
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
<?php
echo '<div class="container-fluid">
    <div class="card shadow md-4">
        <div class="card-header py-3">
        	<div class="float-left">
	            <h4 class="m-0 font-weight-bold text-primary">
	                Stock Item List
	            </h4>
                <div class="input-group">
                    <a href="#" data-toggle="" id="new_stock_item_icon">New Stock Item</a>
                </div>
            </div>
            <div class="float-right">
                
                <div class="input-group">
                    <label>Search</label>
                    <input type="text" class="form-control border-0 small" name="stock_item_search" id="stock_item_search">
                </div>';
                if(
                    $_SESSION['company_type_id'] != 5 && 
                    $_SESSION['company_type_id'] != 6 && 
                    $_SESSION['company_type_id'] != 7 && 
                    $_SESSION['company_type_id'] != 8 && 
                    $_SESSION['company_type_id'] != 9)
                {
                    echo '<div class="input-group">
                        <a href="#" data-toggle="" id="auto_update_price_icon">Product Type Price Update</a>
                        | 
                        <a href="#" data-toggle="" id="auto_update_price_component_icon">Component Price Update</a>
                    </div>';
                };
                
	        echo '</div>
        </div>
        <div class="card-body">';
            
                $company_id = $_SESSION['company_id'];
                $query = "SELECT * FROM stock_items WHERE company_id = '$company_id' ORDER BY stock_item ASC";
                $query_run = mysqli_query($con, $query);
            
            echo '<div class="table-responsive" id="stock_item_list_table">
                <table class="table table-hover table-bordered table-sm" id="stock_itemTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="action-td">Description</th>
                            <th class="action-td">Group</th>';
                            
                                if(
                                    $_SESSION['company_type_id'] !=5 && 
                                    $_SESSION['company_type_id'] !=6 && 
                                    $_SESSION['company_type_id'] != 7 && 
                                    $_SESSION['company_type_id'] != 8 && 
                                    $_SESSION['company_type_id'] != 9
                                )
                                {
                                    echo '<th class="action-td">Picture</th>
                                    <th class="action-td">Type</th>';
                                };
                            
                            echo '<th class="action-td">Unit</th>';
                            
                                if(
                                    $_SESSION['company_type_id'] !=5 && 
                                    $_SESSION['company_type_id'] !=6 && 
                                    $_SESSION['company_type_id'] != 7 && 
                                    $_SESSION['company_type_id'] != 8 && 
                                    $_SESSION['company_type_id'] != 9
                                    )
                                {
                                    echo '<th class="action-td">Grams</th>
                                    <th class="action-td">Price Per Gram</th>';
                                };
                        
                            echo '<th class="action-td">Selling Price</th>
                            <th class="action-td">Action</th>
                        </tr>
                    </thead>
                    <tbody class="pv-table-body">';
                        
                            if (mysqli_num_rows($query_run) > 0)
                            {
                                while($row=mysqli_fetch_assoc($query_run))
                                {

                                    $unit_id = $row['unit_id'];
                                    $query_unit = "SELECT * FROM unit WHERE unit_id='$unit_id'";
                                    $query_unit_run = mysqli_query($con, $query_unit);
                                    if(!empty($query_unit_run) && mysqli_num_rows($query_unit_run) > 0)
                                    {
                                        $row_unit = mysqli_fetch_assoc($query_unit_run);
                                        $unit = $row_unit['formal_name'];
                                    }
                                    else
                                    {
                                        $unit = 'Not Specified';
                                    };
                                    $stock_item_type_id = $row['stock_item_type_id'];
                                    $query_type = "SELECT * FROM stock_item_type WHERE stock_item_type_id='$stock_item_type_id'";
                                    $query_type_run = mysqli_query($con, $query_type);
                                    if(!empty($query_type_run) && mysqli_num_rows($query_type_run) > 0)
                                    {
                                        $row_type = mysqli_fetch_assoc($query_type_run);
                                        $stock_item_type = $row_type['stock_item_type'];
                                    }
                                    else
                                    {
                                        $stock_item_type = 'Not Specified';
                                    };
                                
                                    echo '<tr>
                                        <td>
                                            <a href="#" id="btn_edit_stock_item" data-id="'.$row['stock_item_id'].'">'.$row['stock_item'].'</a>
                                        </td>
                                        <td>
                                            '.$stock_item_type.'
                                        </td>';
                                        
                                            if(
                                                $_SESSION['company_type_id'] !=5 && 
                                                $_SESSION['company_type_id'] !=6 && 
                                                $_SESSION['company_type_id'] !=7 && 
                                                $_SESSION['company_type_id'] !=8 && 
                                                $_SESSION['company_type_id'] != 9)
                                            {
                                                echo '<td class="action-td">';
                                        
                                                if($row['img_url'] != '')
                                                {
                                                    echo '<img src="'.$row['img_url'].'" alt="image" style="width:150px; height:100px">';
                                                };
                                        
                                                echo '</td>
                                                <td>'.$row['stock_type'].'</td>';
                                            };
                                        
                                        echo '<td class="action-td">'.$unit.'</td>';
                                        
                                            if(
                                                $_SESSION['company_type_id'] !=5 && 
                                                $_SESSION['company_type_id'] !=6 && 
                                                $_SESSION['company_type_id'] !=7 && 
                                                $_SESSION['company_type_id'] !=8 && 
                                                $_SESSION['company_type_id'] != 9
                                                )
                                            {
                                                echo '<td class="action-td">'.$row['grams'].'</td>
                                                <td class="action-td">'.$row['price_per_gram'].'</td>';
                                            };
                                        
                                        echo '<td class="amt-td">'.$row['price_cash'].'</td>
        	                            <td class="action-td">';
                                    
                                            if(
                                                $_SESSION['company_type_id'] !=5 && 
                                                $_SESSION['company_type_id'] !=6 && 
                                                $_SESSION['company_type_id'] !=7 && 
                                                $_SESSION['company_type_id'] !=8 && 
                                                $_SESSION['company_type_id'] != 9)
                                            {
                                                echo '<a href="#" id="stock_item_file_insert_btn" data-id="'.$row['stock_item_id'].'">Upload Image</a>
                                                | ';
                                            };
                                    
                                            echo '<a href="#" id="btn_edit_stock_item" data-id="'.$row['stock_item_id'].'">Edit</a>
                                            | 
                                            <a href="#" id="btn_delete_stock_item" data-id="'.$row['stock_item_id'].'">Delete</a>
        	                            </td>
                                    </tr>';
                        
                                }
                            };
                        
                    echo '</tbody>
                </table>
            </div>
        </div>
    </div>
</div>';
?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/items/stock_item_auto_price_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/items/item_delete_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/items/stock_item_image_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/items/stock_item_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/footer_main.php');?>