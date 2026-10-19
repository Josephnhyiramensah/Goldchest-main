<?php
    //session_start(); 
    require($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/auth.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/header_main.php');
?>
<input type='hidden' id='session_company_id' value="<?php echo $_SESSION['company_id'];?>">
<input type='hidden' id='session_user_super_id' value="<?php echo $_SESSION['user_super_id'];?>">
<input type='hidden' id='session_user_id' value="<?php echo $_SESSION['user_id'];?>">
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
<div class="container-fluid">
    <?php 
        if(isset($_SESSION['sales_report_start_date']))
        {           
            $company_id = $_SESSION['sales_report_company_id'];
            $user_id = $_SESSION['sales_report_user_id'];
            $user_super_id = $_SESSION['sales_report_user_super_id'];
            $start_date = $_SESSION['sales_report_start_date'];
            $end_date = $_SESSION['sales_report_end_date'];

            $sql_company = "SELECT * FROM company WHERE company_id = '$company_id'";
            $result_company = mysqli_query($con,$sql_company);
            $row_company = mysqli_fetch_array($result_company);
    ?>
                    <table class="table table-hover table-bordered table-sm" id="sales_report_list_table" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class = "action-td" colspan="12"><H3><?php echo $row_company['trading_name'];?></H3></th>
                                </tr>
                                <tr>
                                    <th class = "action-td" colspan="12"><H6>SALES REPORT FROM <?php echo $start_date;?> TO <?php echo $end_date;?></H6></th>
                                </tr>
                                <tr>
                                    <th class="action-td">S/NO</th>
                                    <th class="action-td">DATE</th>
                                    <th class="action-td">PARTICULARS</th>
                                    <th class="action-td">WEIGHT</th>
                                    <th class="action-td">WATER</th>
                                    <th class="action-td">DENSITY</th>
                                    <th class="action-td">PRICE</th>
                                    <th class="action-td">POUND</th>
                                    <th class="action-td">KARAT</th>
                                    <th class="action-td">SALES AMT</th>
                                    <th class="action-td">PURCH. AMT</th>
                                    <th class="action-td">PROFIT</th>
                                </tr>
                            </thead>
                                <tbody class="pv-table-body" id="purchase_report_list_table_body">
                                 
            <?php 
                $query = "SELECT * FROM sales WHERE company_id = '$company_id' AND date BETWEEN '$start_date' AND 
                '$end_date' ORDER BY date ASC";
                $query_run = mysqli_query($con, $query);
                
                $i = 0;
                $total_amount_sales = 0;
                $total_weight_sales = 0;
                $total_price_sales = 0;
                $total_water_sales = 0;
                $total_pounds_sales = 0;
                $total_amount_purchase = 0;
                $total_amount_profit = 0;

                if (mysqli_num_rows($query_run) > 0)
                {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                            if($row['purity_discount'] > 0)
                            {
                                $karat = $row['discounted_karat'];
                                $amount = $row['discounted_amount'];
                            }
                            else
                            {
                                $karat = $row['karat'];
                                $amount = $row['amount'];
                            };
                            $i = ++$i;
                            $total_amount_sales = $total_amount_sales + $amount;
                            $total_weight_sales = $total_weight_sales + $row['weight'];
                            $total_price_sales = $total_price_sales + $row['price'];
                            $total_water_sales = $total_water_sales + $row['water'];
                            $total_pounds_sales = $total_pounds_sales + $row['pounds'];

                            $sales_id = $row['sales_id'];
                            $query_sold_items = "SELECT * FROM sold_items WHERE sales_id = '$sales_id'";
                            $query_run_sold_items = mysqli_query($con, $query_sold_items);
                            $amount_purchase = 0;
                            $amount_profit = 0;
                            if (mysqli_num_rows($query_run_sold_items) > 0)
                            {
                                while($row_sold_items = mysqli_fetch_assoc($query_run_sold_items))
                                {
                                    $amount_purchase = $amount_purchase + $row_sold_items['amount'];
                                };
                            };
                            $total_amount_purchase = $total_amount_purchase + $amount_purchase;
                            $amount_profit = $row['amount'] - $amount_purchase;
                            $total_amount_profit = $total_amount_profit + $amount_profit;
        ?>
                                <tr>
                                    <td class="action-td"><?php echo $i;?></td>
                                    <td class="action-td"><?php echo $row['date'];?></td>
                                    <td>
                                        <?php
                                            if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Sales'] == 'Yes')) 
                                            {
                                            echo '<a href="#" id="btn_edit_sales" data-id="'.$row['sales_id'].'">'.$row['supplier'].'</a>';
                                            };
                                        ?>
                                    </td>
                                    <td class="amt-td"><?php echo $row['weight'];?></td>
                                    <td class="amt-td"><?php echo $row['water'];?></td>
                                    <td class="amt-td"><?php echo $row['density'];?></td>
                                    <?php
                                        $price_sales = $row['price'];
                                        $price_sales = number_format($price_sales, 2, '.', ',');
                                    ?>
                                    <td class="amt-td"><?php echo $price_sales;?></td>
                                    <td class="amt-td"><?php echo $row['pounds'];?></td>
                                    <td class="amt-td"><?php echo $karat;?></td>
                                    <?php
                                        $amount_sales = $amount;
                                        $amount_sales_f = number_format($amount_sales, 2, '.', ',');
                                        $amount_purchase_f = number_format($amount_purchase, 2, '.', ',');
                                        $amount_profit_f = number_format($amount_profit, 2, '.', ',');
                                    ?>
                                    <td class="amt-td"><?php echo $amount_sales_f; ?></td>
                                    <td class="amt-td"><?php echo $amount_purchase_f; ?></td>
                                    <td class="amt-td"><?php echo $amount_profit_f; ?></td>
                                </tr>
            <?php 
                        }
                };
            ?>
                                    <tr>
                                        <td class="action-td" colspan="3"><strong>TOTAL</strong></td>
                                        <td class="amt-td"><strong><?php echo $total_weight_sales;?></strong></td>
                                        <td class="amt-td"><strong><?php echo $total_water_sales;?></strong></td>
                                        <td class="amt-td"><strong></strong></td>
                                        <td class="amt-td"><strong></strong></td>
                                        <td class="amt-td"><strong><?php echo $total_pounds_sales;?></strong></td>
                                        <td class="amt-td"><strong></strong></td>
                                        <?php
                                            $total_amount_sales = number_format($total_amount_sales, 2, '.', ',');
                                            $total_amount_purchase_f = number_format($total_amount_purchase, 2, '.', ',');
                                            $total_amount_profit_f = number_format($total_amount_profit, 2, '.', ',');
                                        ?>
                                        <td class="amt-td"><strong><?php echo $total_amount_sales;?></strong></td>
                                        <td class="amt-td"><strong><?php echo $total_amount_purchase_f;?></strong></td>
                                        <td class="amt-td"><strong><?php echo $total_amount_profit_f;?></strong></td>
                                    </tr>
                                </tbody>
                    </table>
        <?php
        };
        ?>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/sales_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>