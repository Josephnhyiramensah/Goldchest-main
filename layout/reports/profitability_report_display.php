<?php
    //session_start(); 
    require($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/auth.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/header_main.php');
    function truncate($number, $precision = 2) {
        $prec = 10 ** $precision;
        return intdiv(round($number * $prec, PHP_ROUND_HALF_DOWN), 1) / $prec;
    }
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
        if(isset($_SESSION['profitability_report_start_date']))
        {           
            $company_id = $_SESSION['company_id'];
            /*$user_id = $_SESSION['profitability_report_user_id'];
            $user_super_id = $_SESSION['profitability_report_user_super_id'];*/
            $start_date = $_SESSION['profitability_report_start_date'];
            $end_date = $_SESSION['profitability_report_end_date'];

            $sql_company = "SELECT * FROM company WHERE company_id = '$company_id'";
            $result_company = mysqli_query($con,$sql_company);
            $row_company = mysqli_fetch_array($result_company);
    ?>
            <table class="table table-hover table-bordered table-sm" id="profitability_report_list_table" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class = "action-td" colspan="19"><H3><?php echo $row_company['trading_name'];?></H3></th>
                    </tr>
                    <tr>
                        <th class = "action-td" colspan="19"><H6>PROFITABILITY REPORT FROM <?php echo $start_date;?> TO <?php echo $end_date;?></H6></th>
                    </tr>
                    <tr>
                        <th class="action-td" rowspan="2">S/NO</th>
                        <th class="action-td" rowspan="2">DATE</th>
                        <th class="action-td" rowspan="2">PARTICULARS</th>
                        <th class="action-td" colspan="7">PURCHASES</th>
                        <th class="action-td" colspan="7">SALES</th>
                        <th class="action-td" colspan="2">P/L</th>
                    </tr>
                    <tr>
                        <th class="action-td">WEIGHT</th>
                        <th class="action-td">WATER</th>
                        <th class="action-td">DENSITY</th>
                        <th class="action-td">POUND</th>
                        <th class="action-td">KARAT</th>
                        <th class="action-td">PURCH. PRICE</th>
                        <th class="action-td">PURCH. AMOUNT</th>
                        <th class="action-td">WEIGHT</th>
                        <th class="action-td">WATER</th>
                        <th class="action-td">DENSITY</th>
                        <th class="action-td">POUND</th>
                        <th class="action-td">KARAT</th>
                        <th class="action-td">SOLD PRICE</th>
                        <th class="action-td">SOLD AMOUNT</th>
                        <th class="action-td">P/L PRICE</th>
                        <th class="action-td">P/L AMOUNT</th>
                    </tr>
                </thead>
                    <tbody class="pv-table-body" id="profitability_report_list_table_body">
        <?php 
                        $i=0;
                        $si=0;
                        $total_weight_sold = 0;
                        $total_water_sold = 0;
                        $total_pounds_sold = 0;
                        $total_price_sold = 0;
                        $total_amount_sold = 0;

                        $total_weight = 0;
                        $total_water = 0;
                        $total_price = 0;
                        $total_amount = 0;

                        $total_sales_weight_sold = 0;
                        $total_sales_water_sold = 0;
                        $total_sales_pounds_sold = 0;
                        $total_sales_price_sold = 0;
                        $total_sales_amount_sold = 0;
                        $total_profit_price_sold = 0;
                        $total_profit_amount_sold = 0;

                        $total_sales_price_pending = 0;
                        $total_sales_amount_pending = 0;
                        $total_profit_price_pending = 0;
                        $total_profit_amount_pending = 0;

                        $total_sales_weight = 0;
                        $total_sales_water = 0;
                        $total_sales_pounds = 0;
                        $total_sales_amount = 0;
                        $total_profit_amount = 0;
                        $total_profit_price = 0;
                        $total_sales_price = 0;
                        $average_profit_price_sold = 0;
                        $query = "SELECT * FROM purchases WHERE company_id = '$company_id' AND 
                        date BETWEEN '$start_date' AND '$end_date' ORDER BY date ASC";
                        $query_run = mysqli_query($con, $query);
                        if (mysqli_num_rows($query_run) > 0)
                        {
                            echo '<tr style="background-color:#E4DCCF; color:black">
                                <th colspan="19"><H6><strong>SOLD</strong></H6></th>
                            </tr>';
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                                $purchase_id = $row['purchase_id'];
                                $query_sold = "SELECT * FROM sold_items WHERE purchase_id = '$purchase_id'";
                                $query_run_sold = mysqli_query($con, $query_sold);
                                if (mysqli_num_rows($query_run_sold) > 0)
                                {
                                    $i = ++$i;
                                    $si = ++$si;
                                    //$row_sold = mysqli_fetch_assoc($query_run_sold);
                                    
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

                                    $pounds = $row['pounds'];
                                    $density = $row['density'];
                                    $carat = $row['karat'];
                                    $total_weight_sold = $total_weight_sold + $row['weight'];
                                    $total_water_sold = $total_water_sold + $row['water'];
                                    $total_pounds_sold = $total_pounds_sold + $pounds;
                                    $total_price_sold = $total_price_sold + $row['price'];
                                    $total_amount_sold = $total_amount_sold + $amount;

                                    $total_weight = $total_weight + $row['weight'];
                                    $total_water = $total_water + $row['water'];
                                    $total_price = $total_price + $row['price'];
                                    $total_amount = $total_amount + $amount;

                                    $weight_purchases = $row['weight'];
                                    $amount_purchases = $amount;
                                    $price_purchases = $row['price'];

                                    ?>
                                    <tr>
                                        <td class="action-td"><?php echo $i;?></td>
                                        <td class="action-td"><?php echo $row['date'];?></td>
                                        <td><?php echo $row['supplier'];?></td>
                                        <td class="amt-td"><?php echo $row['weight'];?></td>
                                        <td class="amt-td"><?php echo $row['water'];?></td>
                                        <td class="amt-td"><?php echo $row['density'];?></td>
                                        <td class="amt-td"><?php echo $row['pounds'];?></td>
                                        <td class="amt-td"><?php echo $karat;?></td>
                                        <?php
                                            $price_sales = 0;
                                            $weight_sales = 0;
                                            $price_profit = 0;
                                            $profit = 0;
                                            $amount_sales = 0;

                                            $row_sold = mysqli_fetch_assoc($query_run_sold);
                                            $sales_id = $row_sold['sales_id'];
                                            $query_sales = "SELECT * FROM sales WHERE sales_id = '$sales_id'";
                                            $query_run_sales = mysqli_query($con, $query_sales);
                                            if($query_run_sales)
                                            {
                                                $row_sales = mysqli_fetch_assoc($query_run_sales);
                                                $price_sales = $row_sales['price'];
                                                $weight_sales = $row_sales['weight'];
                                                $water_sales = $row_sales['water'];
                                                $amount_sales = $row_sales['amount'];
                                                $price_profit = $price_sales - $row['price'];
                                                $profit = $row_sales['amount'] - $row['amount'];
                                                if($row['product_id'] != 1)
                                                {
                                                    $density = 0;
                                                    $carat = 0;
                                                };
                                                
                                            };

                                            $total_sales_weight = $total_sales_weight + $weight_sales;
                                            $total_sales_water = $total_sales_water + $water_sales;
                                            $total_sales_pounds = $total_sales_pounds + $pounds;
                                            $total_sales_amount = $total_sales_amount + $amount_sales;
                                            $total_profit_amount = $total_profit_amount + $profit;
                                            $total_profit_price = $total_profit_price + $price_profit;
                                            $total_sales_price = $total_sales_price + $price_sales;

                                            $total_sales_weight_sold = $total_sales_weight_sold + $weight_sales;
                                            $total_sales_water_sold = $total_sales_water_sold + $water_sales;
                                            $total_sales_pounds_sold = $total_sales_pounds_sold + $pounds;
                                            $total_sales_amount_sold = $total_sales_amount_sold + $amount_sales;
                                            $total_profit_amount_sold = $total_profit_amount_sold + $profit;
                                            $total_profit_price_sold = $total_profit_price_sold + $price_profit;
                                            $total_sales_price_sold = $total_sales_price_sold + $price_sales;

                                            $price_sales_f = number_format($price_sales, 2, '.', ',');
                                            $price_purchases_f = number_format($price_purchases, 2, '.', ',');
                                            $price_profit_f = number_format($price_profit, 2, '.', ',');
                                            $amount_sales_f = number_format($amount_sales, 2, '.', ',');
                                            $amount_purchases_f = number_format($amount_purchases, 2, '.', ',');
                                            $profit_f = number_format($profit, 2, '.', ',');
                                        ?>
                                        <td class="amt-td"><?php echo $price_purchases_f;?></td>
                                        <td class="amt-td"><?php echo $amount_purchases_f; ?></td>
                                        <td class="action-td"><?php echo $weight_sales;?></td>
                                        <td class="action-td"><?php echo $water_sales;?></td>
                                        <td class="action-td"><?php echo $density;?></td>
                                        <td class="action-td"><?php echo $pounds;?></td>
                                        <td class="action-td"><?php echo $carat;?></td>
                                        <td class="amt-td"><?php echo $price_sales_f;?></td>
                                        <td class="amt-td"><?php echo $amount_sales_f; ?></td>
                                        <td class="amt-td"><?php echo $price_profit_f; ?></td>
                                        <td class="amt-td"><?php echo $profit_f; ?></td>
                                    </tr>
                                <?php 
                                };
                            };
                        };
                        
                        if($total_price_sold > 0 && $si > 0)
                        {$average_price_sold = $total_price_sold / $si;}
                        else{$average_price_sold = 0;};

                        if($total_profit_price_sold > 0 && $si > 0)
                        {$average_profit_price_sold = $total_profit_price_sold / $si;}
                        else{$average_profit_price = 0;};

                        if($total_sales_price_sold > 0 && $si > 0)
                        {$average_sales_price_sold = $total_sales_price_sold / $si;}
                        else{$average_sales_price_sold = 0;};

                        $average_price_sold_f = number_format($average_price_sold, 2, '.', ',');
                        $average_profit_price_sold_f = number_format($average_profit_price_sold, 2, '.', ',');
                        $average_sales_price_sold_f = number_format($average_sales_price_sold, 2, '.', ',');

                        $total_sales_amount_sold_f = number_format($total_sales_amount_sold, 2, '.', ',');
                        $total_profit_amount_sold_f = number_format($total_profit_amount_sold, 2, '.', ',');
                        $total_amount_sold_f = number_format($total_amount_sold, 2, '.', ',');
                    ?>
                        <tr>
                            <td class="action-td" colspan="3"><strong>SUB TOTAL</strong></td>
                            <td class="amt-td"><strong><?php echo $total_weight_sold;?></strong></td>
                            <td class="amt-td"><strong><?php echo $total_water_sold;?></strong></td>
                            <td class="amt-td"><strong><?php ?></strong></td>
                            <td class="amt-td"><strong><?php echo $total_pounds_sold;?></strong></td>
                            <td class="amt-td"><strong>AVERAGE PRICE</strong></td>
                            <td class="amt-td"><strong><?php echo $average_price_sold_f;?></strong></td>
                            <td class="amt-td"><strong><?php echo $total_amount_sold_f;?></strong></td>
                            <td class="amt-td"><strong><?php echo $total_sales_weight_sold;?></strong></td>
                            <td class="amt-td"><strong><?php echo $total_sales_water_sold?></strong></td>
                            <td class="amt-td"><strong><?php ?></strong></td>
                            <td class="amt-td"><strong><?php echo $total_sales_pounds_sold?></strong></td>
                            <td class="amt-td"><strong>AVERAGE PRICE</strong></td>
                            <td class="amt-td"><strong><?php echo $average_sales_price_sold_f;?></strong></td>
                            <td class="amt-td"><strong><?php echo $total_sales_amount_sold_f;?></strong></td>
                            <td class="amt-td"><strong><?php echo $average_profit_price_sold_f;?></strong></td>
                            <td class="amt-td"><strong><?php echo $total_profit_amount_sold_f;?></strong></td>
                        </tr>
                            </tbody>
                        </table>
        <?php
        };
        ?>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>