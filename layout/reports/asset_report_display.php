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
    
    table.table-bordered{
    border:1px solid black;
  }
</style>
<div class="container-fluid">
    <?php 
        if(isset($_SESSION['asset_report_start_date']))
        {           
            $company_id = $_SESSION['company_id'];
            //$user_id = $_SESSION['user_id'];
            //$user_super_id = $_SESSION['user_super_id'];
            $asset_id = $_SESSION['asset_report_asset'];
            $start_date = $_SESSION['asset_report_start_date'];
            $end_date = $_SESSION['asset_report_end_date'];

            $sql_company = "SELECT * FROM company WHERE company_id = '$company_id'";
            $result_company = mysqli_query($con,$sql_company);
            $row_company = mysqli_fetch_array($result_company);

            $sql_asset = "SELECT * FROM assets WHERE asset_id = '$asset_id' AND company_id = '$company_id'";
            $result_asset = mysqli_query($con,$sql_asset);
            $row_asset = mysqli_fetch_array($result_asset);
            ?>
            <table class="table table-hover table-bordered table-sm" id="site_report_list_table" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class = "action-td" colspan="9"><H3><?php echo $row_company['trading_name'];?></H3></th>
                    </tr>
                    <tr>
                        <th class = "action-td" colspan="9"><H6><?php if ($asset_id !== 'all'){echo $row_asset['brand'].' - '.$row_asset['model'];}else{echo 'ALL ASSETS ';};?> REPORT FROM <?php echo $start_date;?> TO <?php echo $end_date;?></H6></th>
                    </tr>
                    <tr style="color:black">
                        <th class="action-td" rowspan="2">S/NO</th>
                        <th class="action-td" rowspan="2">ASSET</th>
                        <th class="action-td" colspan="3">REVENUE</th>
                        <th class="action-td" colspan="3">EXPENDITURE</th>
                        <th class="action-td" rowspan="2">SURPLUS/(DEFICIT)</th>
                    <tr style="color:black">
                        <th class="action-td">CREDIT</th>
                        <th class="action-td">CASH</th>
                        <th class="action-td">TOTAL REV</th>
                        <th class="action-td">FUEL</th>
                        <th class="action-td">OTHER EXP</th>
                        <th class="action-td">TOTAL EXP</th>
                    </tr>
                    </tr>
                </thead>
                <tbody class="pv-table-body" id="asset_report_list_table_body">
                    <?php 
                    $sum_credit_revenue = 0;
                    $sum_cash_revenue = 0;
                    $sum_total_revenue = 0;
                    $sum_fuel_exp = 0;
                    $sum_other_exp = 0;
                    $sum_total_expenses = 0;
                    $sum_surplus = 0;
                    if ($asset_id == 'all') 
                    {
                        $query="SELECT * FROM assets WHERE  company_id = '$company_id' ORDER BY brand ASC";
                    } 
                    else 
                    {
                        $query="SELECT * FROM assets WHERE  asset_id = '$asset_id' ORDER BY brand ASC";
                    }
                    $query_run = mysqli_query($con, $query);
                    if (!empty($query_run) && mysqli_num_rows($query_run) > 0)
                    {
                        $i=0;
                    
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                            ++$i;
                            $asset_no = $row['asset_id'];
                            $asset = $row['brand'].' - '.$row['model'];
                            //CREDIT REVENUE
                                $query_credit_revenue = "SELECT SUM(hl.amount) AS credit_revenue FROM hiring_list hl JOIN hiring hr ON 
                                hl.hiring_id = hr.hiring_id JOIN ledgers lg ON hr.ledger_debit = lg.ledger_id
                                WHERE hl.date BETWEEN '$start_date' AND '$end_date' AND hl.asset_id = '$asset_no'
                                AND lg.tb_4 != 6";
                                $query_run_credit_revenue = mysqli_query($con, $query_credit_revenue);
                                if (!empty($query_run_credit_revenue) && mysqli_num_rows($query_run_credit_revenue) > 0)
                                {
                                    $row_credit_revenue = mysqli_fetch_assoc($query_run_credit_revenue);
                                    $credit_revenue = $row_credit_revenue['credit_revenue'];
                                }
                                else
                                {
                                    $credit_revenue = 0;
                                };
                            //CASH REVENUE
                                $query_cash_revenue = "SELECT SUM(hl.amount) AS cash_revenue FROM hiring_list hl JOIN hiring hr ON 
                                hl.hiring_id = hr.hiring_id JOIN ledgers lg ON hr.ledger_debit = lg.ledger_id
                                WHERE hl.date BETWEEN '$start_date' AND '$end_date' AND hl.asset_id = '$asset_no'
                                AND lg.tb_4 = 6";
                                $query_run_cash_revenue = mysqli_query($con, $query_cash_revenue);
                                if (!empty($query_run_cash_revenue) && mysqli_num_rows($query_run_cash_revenue) > 0)
                                {
                                    $row_cash_revenue = mysqli_fetch_assoc($query_run_cash_revenue);
                                    $cash_revenue = $row_cash_revenue['cash_revenue'];
                                }
                                else
                                {
                                    $cash_revenue = 0;
                                };
                            $total_revenue = $credit_revenue + $cash_revenue;
                            //FUEL EXPENSES
                                $query_fuel_exp = "SELECT SUM(msl.amount) AS fuel_exp FROM mtce_stock_list msl
                                JOIN stock_items si ON si.stock_item_id=msl.stock_id
                                WHERE msl.date BETWEEN '$start_date' AND '$end_date' AND msl.asset_id = '$asset_no'
                                AND si.stock_item = 'DIESEL'";
                                $query_run_fuel_exp = mysqli_query($con, $query_fuel_exp);
                                if (!empty($query_run_fuel_exp) && mysqli_num_rows($query_run_fuel_exp) > 0)
                                {
                                    $row_fuel_exp = mysqli_fetch_assoc($query_run_fuel_exp);
                                    $fuel_exp = $row_fuel_exp['fuel_exp'];
                                }
                                else
                                {
                                    $fuel_exp = 0;
                                };
                            //OTHER EXPENSES
                                //STOCK_EXP
                                    $query_stock_exp = "SELECT SUM(msl.amount) AS stock_exp FROM mtce_stock_list msl
                                    JOIN stock_items si ON si.stock_item_id=msl.stock_id
                                    WHERE msl.date BETWEEN '$start_date' AND '$end_date' AND msl.asset_id = '$asset_no'
                                    AND si.stock_item != 'DIESEL'";
                                    $query_run_stock_exp = mysqli_query($con, $query_stock_exp);
                                    if (!empty($query_run_stock_exp) && mysqli_num_rows($query_run_stock_exp) > 0)
                                    {
                                        $row_stock_exp = mysqli_fetch_assoc($query_run_stock_exp);
                                        $stock_exp = $row_stock_exp['stock_exp'];
                                    }
                                    else
                                    {
                                        $stock_exp = 0;
                                    };
                                //SERVICE_EXP
                                    $query_service_exp = "SELECT SUM(amount) AS service_exp FROM mtce_led_list 
                                    WHERE date BETWEEN '$start_date' AND '$end_date' AND asset_id = '$asset_no'";
                                    $query_run_service_exp = mysqli_query($con, $query_service_exp);
                                    if (!empty($query_run_service_exp) && mysqli_num_rows($query_run_service_exp) > 0)
                                    {
                                        $row_service_exp = mysqli_fetch_assoc($query_run_service_exp);
                                        $service_exp = $row_service_exp['service_exp'];
                                    }
                                    else
                                    {
                                        $service_exp = 0;
                                    };

                                //OTHER_EXP
                                    $query_other_exp = "SELECT SUM(amount_debit) AS other_exp FROM transactions 
                                    WHERE date BETWEEN '$start_date' AND '$end_date' AND asset_id = '$asset_no'
                                    AND payment_id > 0 AND amount_debit > 0";
                                    $query_run_other_exp = mysqli_query($con, $query_other_exp);
                                    if (!empty($query_run_other_exp) && mysqli_num_rows($query_run_other_exp) > 0)
                                    {
                                        $row_other_exp = mysqli_fetch_assoc($query_run_other_exp);
                                        $other_exp = $row_other_exp['other_exp'];
                                    }
                                    else
                                    {
                                        $other_exp = 0;
                                    };

                                $total_other_expenses = $stock_exp + $service_exp + $other_exp;
                                $total_expenses = $fuel_exp + $total_other_expenses;
                                $surplus = $total_revenue - $total_expenses;
                    
                                $sum_credit_revenue = $sum_credit_revenue + $credit_revenue;
                                $sum_cash_revenue = $sum_cash_revenue + $cash_revenue;
                                $sum_total_revenue = $sum_total_revenue + $total_revenue;
                                $sum_fuel_exp = $sum_fuel_exp + $fuel_exp;
                                $sum_other_exp = $sum_other_exp + $total_other_expenses;
                                $sum_total_expenses = $sum_total_expenses + $total_expenses;
                                $sum_surplus = $sum_surplus + $surplus;

                            $credit_revenue_f = number_format($credit_revenue, 2, '.', ',');
                            $cash_revenue_f = number_format($cash_revenue, 2, '.', ',');
                            $total_revenue_f = number_format($total_revenue, 2, '.', ',');
                            $fuel_exp_f = number_format($fuel_exp, 2, '.', ',');
                            $total_other_expenses_f = number_format($total_other_expenses, 2, '.', ',');
                            $total_expenses_f = number_format($total_expenses, 2, '.', ',');
                            $surplus_f = number_format($surplus, 2, '.', ',');
                            ?>
                            <tr>
                                <td class="action-td"><?php echo $i;?></td>
                                <td><a id="asset_report_item_tally_card" 
                                    href="#"
                                    data-id="<?php echo $asset_no;?>"
                                    data-id3="<?php echo $start_date;?>"
                                    data-id4="<?php echo $end_date;?>"
                                    data-id5="<?php echo $company_id;?>">
                                    <?php echo $asset;?>
                                    </a>
                                </td>
                                <td class="amt-td"><?php echo $credit_revenue_f;?></td>
                                <td class="amt-td"><?php echo $cash_revenue_f;?></td>
                                <td class="amt-td"><?php echo $total_revenue_f;?></td>
                                <td class="amt-td"><?php echo $fuel_exp_f;?></td>
                                <td class="amt-td"><?php echo $total_other_expenses_f;?></td>
                                <td class="amt-td"><?php echo $total_expenses_f;?></td>
                                <td class="amt-td"><?php echo $surplus_f;?></td>
                            </tr>
                            <?php 
                        };
                        
                        $sum_credit_revenue = $sum_credit_revenue + $credit_revenue;
                        $sum_cash_revenue = $sum_cash_revenue + $cash_revenue;
                        $sum_total_revenue = $sum_total_revenue + $total_revenue;
                        $sum_fuel_exp = $sum_fuel_exp + $fuel_exp;
                        $sum_other_exp = $sum_other_exp + $total_other_expenses;
                        $sum_total_expenses = $sum_total_expenses + $total_expenses;
                        $sum_surplus = $sum_surplus + $surplus;

                    $sum_credit_revenue_f = number_format($sum_credit_revenue, 2, '.', ',');
                    $sum_cash_revenue_f = number_format($sum_cash_revenue, 2, '.', ',');
                    $sum_total_revenue_f = number_format($sum_total_revenue, 2, '.', ',');
                    $sum_fuel_exp_f = number_format($sum_fuel_exp, 2, '.', ',');
                    $sum_other_exp_f = number_format($sum_other_exp, 2, '.', ',');
                    $sum_total_expenses_f = number_format($sum_total_expenses, 2, '.', ',');
                    $sum_surplus_f = number_format($sum_surplus, 2, '.', ',');
                    echo '<tr style="color:black">
                        <td class="action-td" colspan="2">GRAND TOTAL</td>
                        <td class="amt-td">'.$sum_credit_revenue_f.'</td>
                        <td class="amt-td">'.$sum_cash_revenue_f.'</td>
                        <td class="amt-td">'.$sum_total_revenue_f.'</td>
                        <td class="amt-td">'.$sum_fuel_exp_f.'</td>
                        <td class="amt-td">'.$sum_other_exp_f.'</td>
                        <td class="amt-td">'.$sum_total_expenses_f.'</td>
                        <td class="amt-td">'.$sum_surplus_f.'</td>
                    </tr>';
                    };
                    ?>
                </tbody>
            </table>
            <?php
        };
?>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>