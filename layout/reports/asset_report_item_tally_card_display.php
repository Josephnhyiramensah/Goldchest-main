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
    .scroll-card-body {max-height: 700px;overflow-y: auto;}
    .amt-td {text-align:right;}
    .action-td {text-align:center;}
</style>
<div class="container-fluid">
<?php 
    if(isset($_SESSION['asset_report_item_tally_card_start_date']))
    {
        $asset_id = $_SESSION['asset_report_item_tally_card_asset_id'];
        $start_date = $_SESSION['asset_report_item_tally_card_start_date'];
        $end_date = $_SESSION['asset_report_item_tally_card_end_date'];
        $company_id = $_SESSION['asset_report_item_tally_card_company_id'];

        $sql_company = "SELECT * FROM company WHERE company_id = '$company_id'";
        $result_company = mysqli_query($con,$sql_company);
        $row_company = mysqli_fetch_array($result_company);
        if ($asset_id !=='all') 
        {
            $sql_asset = "SELECT * FROM assets WHERE asset_id = '$asset_id' AND company_id = '$company_id'";
            $result_asset = mysqli_query($con,$sql_asset);
            $row_asset = mysqli_fetch_array($result_asset);
            $asset_desc = $row_asset['brand'].' - '.$row_asset['model'];
        }
        else
        {
            $site_desc ='ALL SITES';
        };
        
        ?>

        <table class="table table-hover table-bordered table-sm" id="site_report_list_table" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th class = "action-td" colspan="10"><H3><?php echo $row_company['trading_name'];?></H3></th>
                </tr>
                <tr>
                    <th class = "action-td" colspan="10"><H6><?php if ($asset_id !== 'all'){echo $row_asset['brand'].' - '.$row_asset['model'];}else{echo 'ALL ASSETS ';};?> REPORT FROM <?php echo $start_date;?> TO <?php echo $end_date;?></H6></th>
                </tr>
                <tr style="color:black">
                    <th class="action-td" rowspan="2">S/NO</th>
                    <th class="action-td" rowspan="2">DATE</th>
                    <th class="action-td" rowspan="2">WAREHOUSE</th>
                    <th class="action-td" rowspan="2">PARTICULAR</th>
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
                    $sum_credit_revenue = 0;
                    $sum_cash_revenue = 0;
                    $sum_total_revenue = 0;
                    $sum_fuel_exp = 0;
                    $sum_other_exp = 0;
                    $sum_total_expenses = 0;
                    $sum_surplus = 0;
                
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                        $asset_no = $row['asset_id'];
                        $asset = $row['brand'].' - '.$row['model'];
                        //CREDIT REVENUE
                            $query_credit_revenue = "SELECT hl.*, hr.hired_by, hr.narration, st.site FROM hiring_list hl JOIN 
                            hiring hr ON hl.hiring_id = hr.hiring_id JOIN ledgers lg ON hr.ledger_debit = lg.ledger_id JOIN
                            site st ON hl.site_id=st.site_id WHERE hl.date BETWEEN '$start_date' AND '$end_date' AND 
                            hl.asset_id = '$asset_no' AND lg.tb_4 != 6";
                            $query_run_credit_revenue = mysqli_query($con, $query_credit_revenue);
                            if (!empty($query_run_credit_revenue) && mysqli_num_rows($query_run_credit_revenue) > 0)
                            {
                                while($row_credit_revenue = mysqli_fetch_assoc($query_run_credit_revenue))
                                {
                                    $i++;
                                    $credit_revenue = $row_credit_revenue['amount'];
                                    $PARTICULARS = 'HIRING:'.$row_credit_revenue['hired_by'].', '.$row_credit_revenue['narration'];
                                    $SITE = $row_credit_revenue['site'];
                                    $AMOUNT = $row_credit_revenue['amount'];
                                    $PRICE = $row_credit_revenue['rate'];
                                    $QTY = $row_credit_revenue['qty'];
                                    $DATE = $row_credit_revenue['date'];
                                    $WAREHOUSE = 'N/A';
                                    $SURPLUS = $credit_revenue;
                                    $AMOUNT_f = number_format($AMOUNT, 2, '.', ',');
                                    $SURPLUS_f = number_format($SURPLUS, 2, '.', ',');

                                    echo '<tr>
                                        <td class="action-td">'.$i.'</td>
                                        <td class="action-td">'.$DATE.'</td>
                                        <td class="action-td">'.$WAREHOUSE.'</td>
                                        <td>
                                            '.$PARTICULARS.' - '.$SITE.'
                                        </td>
                                        <td class="amt-td">'.$AMOUNT_f.'</td>
                                        <td class="amt-td">0.00</td>
                                        <td class="amt-td">'.$AMOUNT_f.'</td>
                                        <td class="amt-td">0.00</td>
                                        <td class="amt-td">0.00</td>
                                        <td class="amt-td">0.00</td>
                                        <td class="amt-td">'.$SURPLUS_f.'</td>
                                    </tr>';
                
                                    $sum_credit_revenue = $sum_credit_revenue + $credit_revenue;
                                    $sum_cash_revenue = $sum_cash_revenue + 0;
                                    $sum_total_revenue = $sum_total_revenue + $credit_revenue;
                                    $sum_fuel_exp = $sum_fuel_exp + 0;
                                    $sum_other_exp = $sum_other_exp + 0;
                                    $sum_total_expenses = $sum_total_expenses + 0;
                                    $sum_surplus = $sum_surplus + $credit_revenue;
                                };
                            }
                            else
                            {
                                $credit_revenue = 0;
                                $PARTICULARS = 'HIRING';
                                $SITE = 'Not Specified';
                                $DATE = 'Not Specified';
                                $WAREHOUSE = 'N/A';
                                $AMOUNT = 0;
                                $QTY = 0;
                                $PRICE = 0;
                            };

                        //CASH REVENUE
                            $query_cash_revenue = "SELECT hl.*, hr.hired_by, hr.narration, st.site FROM hiring_list hl JOIN 
                            hiring hr ON hl.hiring_id = hr.hiring_id JOIN ledgers lg ON hr.ledger_debit = lg.ledger_id JOIN
                            site st ON hl.site_id=st.site_id WHERE hl.date BETWEEN '$start_date' AND '$end_date' AND 
                            hl.asset_id = '$asset_no' AND lg.tb_4 = 6";
                            $query_run_cash_revenue = mysqli_query($con, $query_cash_revenue);
                            if (!empty($query_run_cash_revenue) && mysqli_num_rows($query_run_cash_revenue) > 0)
                            {
                                while($row_cash_revenue = mysqli_fetch_assoc($query_run_cash_revenue))
                                {
                                    $i++;
                                    $cash_revenue = $row_cash_revenue['amount'];
                                    $PARTICULARS = 'HIRING:'.$row_cash_revenue['hired_by'].', '.$row_cash_revenue['narration'];
                                    $SITE = $row_cash_revenue['site'];
                                    $AMOUNT = $row_cash_revenue['amount'];
                                    $PRICE = $row_cash_revenue['rate'];
                                    $QTY = $row_cash_revenue['qty'];
                                    $WAREHOUSE = 'N/A';
                                    $DATE = $row_cash_revenue['date'];
                                    $SURPLUS = $cash_revenue;
                                    $AMOUNT_f = number_format($AMOUNT, 2, '.', ',');
                                    $SURPLUS_f = number_format($SURPLUS, 2, '.', ',');

                                    echo '<tr>
                                        <td class="action-td">'.$i.'</td>
                                        <td class="action-td">'.$DATE.'</td>
                                        <td class="action-td">'.$WAREHOUSE.'</td>
                                        <td>
                                            '.$PARTICULARS.' - '.$SITE.'
                                        </td>
                                        <td class="amt-td">0.00</td>
                                        <td class="amt-td">'.$AMOUNT_f.'</td>
                                        <td class="amt-td">'.$AMOUNT_f.'</td>
                                        <td class="amt-td">0.00</td>
                                        <td class="amt-td">0.00</td>
                                        <td class="amt-td">0.00</td>
                                        <td class="amt-td">'.$SURPLUS_f.'</td>
                                    </tr>';
                
                                    $sum_credit_revenue = $sum_credit_revenue + 0;
                                    $sum_cash_revenue = $sum_cash_revenue + $cash_revenue;
                                    $sum_total_revenue = $sum_total_revenue + $cash_revenue;
                                    $sum_fuel_exp = $sum_fuel_exp + 0;
                                    $sum_other_exp = $sum_other_exp + 0;
                                    $sum_total_expenses = $sum_total_expenses + 0;
                                    $sum_surplus = $sum_surplus + $cash_revenue;
                                }
                            }
                            else
                            {
                                $cash_revenue = 0;
                                $PARTICULARS = 'HIRING';
                                $SITE = 'Not Specified';
                                $DATE = 'Not Specified';
                                    $WAREHOUSE = 'N/A';
                                $AMOUNT = 0;
                                $QTY = 0;
                                $PRICE = 0;
                            };
                        $total_revenue = $credit_revenue + $cash_revenue;
                        //FUEL EXPENSES
                            $query_fuel_exp = "SELECT msl.*, si.stock_item, st.site, w.warehouse_desc FROM mtce_stock_list msl
                            JOIN stock_items si ON si.stock_item_id=msl.stock_id JOIN site st ON msl.site_id=st.site_id
                            JOIN warehouse w ON msl.warehouse_id=w.warehouse_id WHERE msl.date BETWEEN '$start_date' AND '$end_date' AND msl.asset_id = '$asset_no'
                            AND si.stock_item = 'DIESEL'";
                            $query_run_fuel_exp = mysqli_query($con, $query_fuel_exp);
                            if (!empty($query_run_fuel_exp) && mysqli_num_rows($query_run_fuel_exp) > 0)
                            {
                                while($row_fuel_exp = mysqli_fetch_assoc($query_run_fuel_exp))
                                {
                                    $i++;
                                    $fuel_exp = $row_fuel_exp['amount'];
                                    $PARTICULARS = $row_fuel_exp['stock_item'];
                                    $PRICE = $row_fuel_exp['rate'];
                                    $QTY = $row_fuel_exp['qty'];
                                    $DATE = $row_fuel_exp['date'];
                                    $WAREHOUSE = $row_fuel_exp['warehouse_desc'];
                                    $AMOUNT = $row_fuel_exp['amount'];
                                    $SURPLUS = -$fuel_exp;
                                    $AMOUNT_f = number_format($AMOUNT, 2, '.', ',');
                                    $SURPLUS_f = number_format($SURPLUS, 2, '.', ',');

                                    echo '<tr>
                                        <td class="action-td">'.$i.'</td>
                                        <td class="action-td">'.$DATE.'</td>
                                        <td class="action-td">'.$WAREHOUSE.'</td>
                                        <td>
                                            '.$PARTICULARS.' - '.$SITE.'
                                        </td>
                                        <td class="amt-td">0.00</td>
                                        <td class="amt-td">0.00</td>
                                        <td class="amt-td">0.00</td>
                                        <td class="amt-td">'.$AMOUNT_f.'</td>
                                        <td class="amt-td">0.00</td>
                                        <td class="amt-td">'.$AMOUNT_f.'</td>
                                        <td class="amt-td">'.$SURPLUS_f.'</td>
                                    </tr>';
                
                                    $sum_credit_revenue = $sum_credit_revenue + 0;
                                    $sum_cash_revenue = $sum_cash_revenue + 0;
                                    $sum_total_revenue = $sum_total_revenue + 0;
                                    $sum_fuel_exp = $sum_fuel_exp + $fuel_exp;
                                    $sum_other_exp = $sum_other_exp + 0;
                                    $sum_total_expenses = $sum_total_expenses + $fuel_exp;
                                    $sum_surplus = $sum_surplus - $fuel_exp;
                                }
                            }
                            else
                            {
                                $fuel_exp = 0;
                                $PARTICULARS = 'MAINTENANCE';
                                $PRICE = 0;
                                $AMOUNT = 0;
                                $QTY = 0;
                                $WAREHOUSE = 'N/A';
                                $SITE = 'N/A';
                                $DATE = 'N/A';
                            };
                        //OTHER EXPENSES
                            //STOCK_EXP
                                $query_stock_exp = "SELECT msl.*, si.stock_item, st.site, w.warehouse_desc FROM mtce_stock_list msl
                                JOIN stock_items si ON si.stock_item_id=msl.stock_id JOIN site st ON msl.site_id=st.site_id
                                JOIN warehouse w ON msl.warehouse_id=w.warehouse_id WHERE msl.date BETWEEN '$start_date' AND '$end_date' AND msl.asset_id = '$asset_no'
                                AND si.stock_item != 'DIESEL'";
                                $query_run_stock_exp = mysqli_query($con, $query_stock_exp);
                                if (!empty($query_run_stock_exp) && mysqli_num_rows($query_run_stock_exp) > 0)
                                {
                                    while($row_stock_exp = mysqli_fetch_assoc($query_run_stock_exp))
                                    {
                                        $i++;
                                        $stock_exp = $row_stock_exp['amount'];
                                        $PARTICULARS = $row_stock_exp['stock_item'];
                                        $PRICE = $row_stock_exp['rate'];
                                        $QTY = $row_stock_exp['qty'];
                                        $DATE = $row_stock_exp['date'];
                                        $AMOUNT = $row_stock_exp['amount'];
                                        $WAREHOUSE = $row_stock_exp['warehouse_desc'];
                                        $SITE = $row_stock_exp['amount'];
                                        $AMOUNT = $row_stock_exp['amount'];
                                        $SURPLUS = -$stock_exp;
                                        $AMOUNT_f = number_format($AMOUNT, 2, '.', ',');
                                        $SURPLUS_f = number_format($SURPLUS, 2, '.', ',');
                                        echo '<tr>
                                            <td class="action-td">'.$i.'</td>
                                            <td class="action-td">'.$DATE.'</td>
                                            <td class="action-td">'.$WAREHOUSE.'</td>
                                            <td>
                                                '.$PARTICULARS.' - '.$SITE.'
                                            </td>
                                            <td class="amt-td">0.00</td>
                                            <td class="amt-td">0.00</td>
                                            <td class="amt-td">0.00</td>
                                            <td class="amt-td">0.00</td>
                                            <td class="amt-td">'.$AMOUNT_f.'</td>
                                            <td class="amt-td">'.$AMOUNT_f.'</td>
                                            <td class="amt-td">'.$SURPLUS_f.'</td>
                                        </tr>';
                
                                        $sum_credit_revenue = $sum_credit_revenue + 0;
                                        $sum_cash_revenue = $sum_cash_revenue + 0;
                                        $sum_total_revenue = $sum_total_revenue + 0;
                                        $sum_fuel_exp = $sum_fuel_exp + 0;
                                        $sum_other_exp = $sum_other_exp + $stock_exp;
                                        $sum_total_expenses = $sum_total_expenses + $stock_exp;
                                        $sum_surplus = $sum_surplus - $stock_exp;
                                    };
                                }
                                else
                                {
                                    $stock_exp = 0;
                                    $PARTICULARS = 'MAINTENANCE';
                                    $PRICE = 0;
                                    $QTY = 0;
                                    $AMOUNT = 0;
                                    $DATE = 'Not Specified';
                                    $SITE = 'Not Specified';
                                    $WAREHOUSE = 'Not Specified';
                                };

                            //SERVICE_EXP
                                $query_service_exp = "SELECT mll.*, st.site FROM mtce_led_list mll JOIN
                                site st ON mll.site_id=st.site_id
                                WHERE mll.date BETWEEN '$start_date' AND '$end_date' AND mll.asset_id = '$asset_no'";
                                $query_run_service_exp = mysqli_query($con, $query_service_exp);
                                if (!empty($query_run_service_exp) && mysqli_num_rows($query_run_service_exp) > 0)
                                {
                                    while($row_service_exp = mysqli_fetch_assoc($query_run_service_exp))
                                    {
                                        $i++;
                                        $service_exp = $row_service_exp['amount'];
                                        $PARTICULARS = 'MAINTENANCE:'.$row_service_exp['narration'];
                                        $AMOUNT = $row_service_exp['amount'];
                                        $PRICE = 0;
                                        $QTY = 0;
                                        $WAREHOUSE = 'N/A';
                                        $SITE = $row_service_exp['site'];
                                        $DATE = $row_service_exp['date'];
                                        $SURPLUS = -$service_exp;
                                        $AMOUNT_f = number_format($AMOUNT, 2, '.', ',');
                                        $SURPLUS_f = number_format($SURPLUS, 2, '.', ',');

                                        echo '<tr>
                                            <td class="action-td">'.$i.'</td>
                                            <td class="action-td">'.$DATE.'</td>
                                            <td class="action-td">'.$WAREHOUSE.'</td>
                                            <td>
                                                '.$PARTICULARS.' - '.$SITE.'
                                            </td>
                                            <td class="amt-td">0.00</td>
                                            <td class="amt-td">0.00</td>
                                            <td class="amt-td">0.00</td>
                                            <td class="amt-td">0.00</td>
                                            <td class="amt-td">'.$AMOUNT_f.'</td>
                                            <td class="amt-td">'.$AMOUNT_f.'</td>
                                            <td class="amt-td">'.$SURPLUS_f.'</td>
                                        </tr>';
                
                                        $sum_credit_revenue = $sum_credit_revenue + 0;
                                        $sum_cash_revenue = $sum_cash_revenue + 0;
                                        $sum_total_revenue = $sum_total_revenue + 0;
                                        $sum_fuel_exp = $sum_fuel_exp + 0;
                                        $sum_other_exp = $sum_other_exp + $service_exp;
                                        $sum_total_expenses = $sum_total_expenses + $service_exp;
                                        $sum_surplus = $sum_surplus - $service_exp;
                                    };
                                }
                                else
                                {
                                    $service_exp = 0;
                                    $PARTICULARS = '--No Particulars--';
                                    $AMOUNT = 0;
                                    $PRICE = 0;
                                    $QTY = 0;
                                    $WAREHOUSE = 'N/A';
                                    $SITE = 'N/A';
                                    $DATE = 'N/A';
                                };

                            //OTHER_EXP
                                $query_other_exp = "SELECT tr.*, tr.narration, st.site, lg.ledger_desc FROM transactions tr 
                                JOIN ledgers lg ON tr.ledger_id=lg.ledger_id JOIN payment pt ON pt.payment_id=tr.payment_id 
                                JOIN site st ON st.site_id=tr.site_id WHERE tr.date BETWEEN '$start_date' AND '$end_date' AND 
                                tr.asset_id = '$asset_no' AND tr.payment_id > 0 AND tr.amount_debit > 0";
                                $query_run_other_exp = mysqli_query($con, $query_other_exp);
                                if (!empty($query_run_other_exp) && mysqli_num_rows($query_run_other_exp) > 0)
                                {
                                    while($row_other_exp = mysqli_fetch_assoc($query_run_other_exp))
                                    {
                                        $i++;
                                        $other_exp = $row_other_exp['amount_debit'];
                                        $PARTICULARS = $row_other_exp['ledger_desc'].': '.$row_other_exp['narration'];
                                        $PRICE = $row_other_exp['amount'];
                                        $AMOUNT = $row_other_exp['amount_debit'];
                                        $SITE = $row_other_exp['site'];
                                        $DATE = $row_other_exp['date'];
                                        $QTY = 0;
                                        $WAREHOUSE = 'N/A';
                                        $SURPLUS = -$other_exp;
                                        $AMOUNT_f = number_format($AMOUNT, 2, '.', ',');
                                        $SURPLUS_f = number_format($SURPLUS, 2, '.', ',');

                                        echo '<tr>
                                            <td class="action-td">'.$i.'</td>
                                            <td class="action-td">'.$DATE.'</td>
                                            <td class="action-td">'.$WAREHOUSE.'</td>
                                            <td>
                                                '.$PARTICULARS.' - '.$SITE.'
                                            </td>
                                            <td class="amt-td">0.00</td>
                                            <td class="amt-td">0.00</td>
                                            <td class="amt-td">0.00</td>
                                            <td class="amt-td">0.00</td>
                                            <td class="amt-td">'.$AMOUNT_f.'</td>
                                            <td class="amt-td">'.$AMOUNT_f.'</td>
                                            <td class="amt-td">'.$SURPLUS_f.'</td>
                                        </tr>';
                
                                        $sum_credit_revenue = $sum_credit_revenue + 0;
                                        $sum_cash_revenue = $sum_cash_revenue + 0;
                                        $sum_total_revenue = $sum_total_revenue + 0;
                                        $sum_fuel_exp = $sum_fuel_exp + 0;
                                        $sum_other_exp = $sum_other_exp + $other_exp;
                                        $sum_total_expenses = $sum_total_expenses + $other_exp;
                                        $sum_surplus = $sum_surplus - $other_exp;
                                    };
                                }
                                else
                                {
                                    $other_exp = 0;
                                    $PARTICULARS = '--No Particulars--';
                                    $PRICE = 0;
                                    $AMOUNT = 0;
                                    $SITE = 'N/A';
                                    $DATE = 'N/A';
                                    $WAREHOUSE = 'N/A';
                                    $QTY = 0;
                                };
                    };
                    

                $sum_credit_revenue_f = number_format($sum_credit_revenue, 2, '.', ',');
                $sum_cash_revenue_f = number_format($sum_cash_revenue, 2, '.', ',');
                $sum_total_revenue_f = number_format($sum_total_revenue, 2, '.', ',');
                $sum_fuel_exp_f = number_format($sum_fuel_exp, 2, '.', ',');
                $sum_other_exp_f = number_format($sum_other_exp, 2, '.', ',');
                $sum_total_expenses_f = number_format($sum_total_expenses, 2, '.', ',');
                $sum_surplus_f = number_format($sum_surplus, 2, '.', ',');
                echo '<tr style="color:black">
                    <td class="action-td" colspan="4">GRAND TOTAL</td>
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