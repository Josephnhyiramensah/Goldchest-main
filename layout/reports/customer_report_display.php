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
        if(isset($_SESSION['customer_report_start_date']))
        {           
            $company_id = $_SESSION['company_id'];
            $customer_id = $_SESSION['customer_report_customer_id'];
            $type = $_SESSION['customer_report_type'];
            $start_date = $_SESSION['customer_report_start_date'];
            $end_date = $_SESSION['customer_report_end_date'];

            $sql_company = "SELECT * FROM company WHERE company_id = '$company_id'";
            $result_company = mysqli_query($con,$sql_company);
            $row_company = mysqli_fetch_array($result_company);
            if($type == 'SUMMARY')
            {
                echo '<table class="table table-hover table-bordered table-sm" id="customer_stock_report_list_table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class = "action-td" colspan="10"><H3>'.$row_company['trading_name'].'</H3></th>
                        </tr>
                        <tr>
                            <th class = "action-td" colspan="10"><H6>CUSTOMER SALES REPORT FROM '.$start_date.' TO '.$end_date.'</H6></th>
                        </tr>
                        <tr style="background-color:#E4DCCF; color:black">
                            <th class="action-td">S/NO</th>
                            <th class="action-td">WAREHOUSE</th>
                            <th class="action-td">AMOUNT</th>
                        </tr>
                    </thead>
                    <tbody class="pv-table-body" id="customer_stock_report_list_table_body">';
            }
            else
            {
                echo '<table class="table table-hover table-bordered table-sm" id="customer_stock_report_list_table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class = "action-td" colspan="10"><H3>'.$row_company['trading_name'].'</H3></th>
                        </tr>
                        <tr>
                            <th class = "action-td" colspan="10"><H6> SITE SALES REPORT FROM '.$start_date.' TO '.$end_date.'</H6></th>
                        </tr>
                        <tr style="background-color:#E4DCCF; color:black">
                            <th class="action-td">INV. NO</th>
                            <th class="action-td">DATE</th>
                            <th class="action-td">ITEM</th>
                            <th class="action-td">QUANTITY</th>
                            <th class="action-td">PRICE</th>
                            <th class="action-td">AMOUNT</th>
                        </tr>
                    </thead>
                    <tbody class="pv-table-body" id="customer_stock_report_list_table_body">';
            };

            if($customer_id == 'ALL')
            {
                $sql_ledger_list = "SELECT * FROM stock_sales WHERE company_id > 0 AND company_id = '$company_id' AND 
                date BETWEEN '$start_date' AND '$end_date' GROUP BY ledger_debit";
            }
            else
            {
                $sql_ledger_list = "SELECT * FROM stock_sales WHERE company_id > 0 AND company_id = '$company_id' AND 
                ledger_debit = '$customer_id' AND date BETWEEN '$start_date' AND'$end_date' GROUP BY ledger_debit";
            };
            $grand_total = 0;
            $result_ledger_list = mysqli_query($con,$sql_ledger_list);
            if(!empty($result_ledger_list) && mysqli_num_rows($result_ledger_list) > 0)
            {
                while($row_ledger_list = mysqli_fetch_array($result_ledger_list))
                {
                    $customer_total = 0;
                    $ledger_id = $row_ledger_list['ledger_debit'];
                    $sql_customer = "SELECT * FROM ledgers WHERE ledger_id = '$ledger_id'";
                    $result_customer = mysqli_query($con,$sql_customer);
                    if(!empty($result_customer) && mysqli_num_rows($result_customer) > 0)
                    {
                        $row_customer = mysqli_fetch_array($result_customer);
                        $customer_name = $row_customer['ledger_desc'];
                    }
                    else
                    {
                        $customer_name = 'Not Specified';
                    };

                    if($type == 'SUMMARY')
                    {
                        $i=0;
                        $site_total = 0;
                        $warehouse_total = 0;
                        echo '<tr style="background-color:grey; color:black">
                            <td colspan="3"><strong>'.$customer_name.'</strong></td>
                        </tr>';
                        $query_warehouse = "SELECT SUM(ssi.amount) AS warehouse_amount, ssi.warehouse_id FROM stock_sales_items ssi
                        JOIN stock_sales ss ON ssi.stock_sales_id = ss.stock_sales_id WHERE ss.ledger_debit = '$ledger_id' 
                        AND ssi.date BETWEEN '$start_date' AND '$end_date' GROUP BY ssi.warehouse_id";
                        $query_run_warehouse = mysqli_query($con, $query_warehouse);
                        if (mysqli_num_rows($query_run_warehouse) > 0)
                        {
                            while($row_warehouse = mysqli_fetch_assoc($query_run_warehouse))
                            {
                                $i++;
                                $warehouse_id = $row_warehouse['warehouse_id'];
                                $sql_whs = "SELECT * FROM warehouse WHERE warehouse_id = '$warehouse_id'";
                                $result_whs = mysqli_query($con,$sql_whs);
                                if(!empty($result_whs) && mysqli_num_rows($result_whs) > 0)
                                {
                                    $row_whs = mysqli_fetch_array($result_whs);
                                    $warehouse = $row_whs['warehouse_desc'];
                                }
                                else
                                {
                                    $warehouse = 'Not Specified';
                                };

                                $amount = $row_warehouse['warehouse_amount'];
                                $amount_f = number_format($amount, 2, '.', ',');
                                echo '<tr>
                                    <td class="action-td">'.$i.'</td>
                                    <td>'.$warehouse.'</td>
                                    <td class="amt-td">'.$amount_f.'</td>
                                </tr>';
                                $site_total = $site_total + $amount;
                                $warehouse_total = $warehouse_total + $amount;
                                $customer_total = $customer_total + $amount;
                                $grand_total = $grand_total + $amount;
                            };
                            $site_total_f = number_format($site_total, 2, '.', ',');
                            echo '<tr>
                                <td colspan="2">Site Total</td>
                                <td class="amt-td">'.$site_total_f.'</td>
                            </tr>';
                        };
                    }
                    else
                    {
                        $i=0;
                        $site_total = 0;

                        echo '<tr style="background-color:grey; color:black">
                            <td colspan="6"><strong>'.$customer_name.'</strong></td>
                        </tr>';

                        $query_warehouse = "SELECT ssi.warehouse_id AS warehouse_id FROM 
                        stock_sales_items ssi JOIN stock_sales ss ON ssi.stock_sales_id = ss.stock_sales_id WHERE 
                        ss.ledger_debit = '$ledger_id' AND ssi.date BETWEEN '$start_date' AND '$end_date' 
                        GROUP BY ssi.warehouse_id";
                        $query_run_warehouse = mysqli_query($con, $query_warehouse);
                        if (mysqli_num_rows($query_run_warehouse) > 0)
                        {
                            while($row_warehouse = mysqli_fetch_assoc($query_run_warehouse))
                            {
                                $warehouse_total = 0;
                                $warehouse_id = $row_warehouse['warehouse_id'];
                                $sql_whs = "SELECT * FROM warehouse WHERE warehouse_id = '$warehouse_id'";
                                $result_whs = mysqli_query($con,$sql_whs);
                                if(!empty($result_whs) && mysqli_num_rows($result_whs) > 0)
                                {
                                    $row_whs = mysqli_fetch_array($result_whs);
                                    $warehouse = $row_whs['warehouse_desc'];
                                }
                                else
                                {
                                    $warehouse = 'Not Specified';
                                };
                                echo '<tr>
                                    <td colspan="6"><strong>'.$warehouse.'</strong></td>
                                </tr>';
                            
                                $query_ss = "SELECT * FROM stock_sales ss JOIN 
                                stock_sales_items ssi ON ssi.stock_sales_id = ss.stock_sales_id WHERE 
                                ss.ledger_debit = '$ledger_id' AND ssi.warehouse_id = '$warehouse_id' AND ssi.date 
                                BETWEEN '$start_date' AND '$end_date' GROUP BY ss.stock_sales_id";
                                $result_ss = mysqli_query($con,$query_ss);
                                if(!empty($result_ss) && mysqli_num_rows($result_ss) > 0)
                                {
                                    while($row_ss = mysqli_fetch_array($result_ss))
                                    {
                                        $invoice_total = 0;
                                        echo '<tr">
                                            <td class="action-td"><strong>'.$row_ss['sno'].'</strong></td>
                                            <td class="action-td"><strong>'.$row_ss['date'].'</strong></td>
                                            <td colspan="4"><strong>Supplied by:'.$row_ss['received_by'].' Received by:'.$row_ss['supplied_by'].'</strong></td>
                                        </tr>';
                                        $stock_sales_id = $row_ss['stock_sales_id'];
                                        $query_ssi = "SELECT * FROM stock_sales_items WHERE stock_sales_id='$stock_sales_id'";
                                        $query_run_ssi = mysqli_query($con, $query_ssi);
                                        if (mysqli_num_rows($query_run_ssi) > 0)
                                        {
                                            while($row_ssi = mysqli_fetch_assoc($query_run_ssi))
                                            {
                                                $i++;
                                                $stock_item_id = $row_ssi['stock_item_id'];
                                                $query_si = "SELECT * FROM stock_items WHERE stock_item_id='$stock_item_id'";
                                                $query_run_si = mysqli_query($con, $query_si);
                                                if (mysqli_num_rows($query_run_si) > 0)
                                                {
                                                    $row_si = mysqli_fetch_assoc($query_run_si);
                                                    $stock_item = $row_si['stock_item'];
                                                }
                                                else
                                                {
                                                    $stock_item = 'Not Specified';
                                                };
                                                $amount = $row_ssi['amount'];
                                                $amount_f = number_format($amount, 2, '.', ',');
                                                echo '<tr">
                                                    <td class="action-td"></td>
                                                    <td class="action-td"></td>
                                                    <td>'.$stock_item.'</td>
                                                    <td class="action-td">'.$row_ssi['qty'].'</td>
                                                    <td class="amt-td">'.$row_ssi['price'].'</td>
                                                    <td class="amt-td">'.$amount_f.'</td>
                                                </tr>';
                                                $invoice_total = $invoice_total + $row_ssi['amount'];
                                                $site_total = $site_total + $row_ssi['amount'];
                                                $warehouse_total = $warehouse_total + $row_ssi['amount'];
                                                $customer_total = $customer_total + $row_ssi['amount'];
                                                $grand_total = $grand_total + $row_ssi['amount'];
                                            };
                                            $invoice_total_f = number_format($invoice_total, 2, '.', ',');
                                            echo '<tr>
                                                <th colspan="5" class="action-td">Invoice Total</th>
                                                <th class="amt-td">'.$invoice_total_f.'</th>
                                            </tr>';
                                        };
                                    };
                                };
                                $warehouse_total_f = number_format($warehouse_total, 2, '.', ',');
                                echo '<tr>
                                    <th colspan="5" class="action-td">'.$warehouse.' Total</th>
                                    <th class="amt-td">'.$warehouse_total_f.'</th>
                                </tr>';
                            };
                        };
                    };
                    $customer_total_f = number_format($customer_total, 2, '.', ',');
                    if($type == 'SUMMARY')
                    {
                        echo '<tr>
                            <th colspan="2" class="action-td">'.$customer_name.' Total</th>
                            <th class="amt-td">'.$customer_total_f.'</th>
                        </tr>';
                    }
                    else
                    {
                        echo '<tr>
                            <th colspan="5" class="action-td">'.$customer_name.' Total</th>
                            <th class="amt-td">'.$customer_total_f.'</th>
                        </tr>';
                    };
                    };
                    $grand_total_f = number_format($grand_total, 2, '.', ',');
                    if($type == 'SUMMARY')
                    {
                        echo '<tr>
                            <th colspan="2">Grand Total</th>
                            <th class="amt-td">'.$grand_total_f.'</th>
                        </tr>';
                    }
                    else
                    {
                        echo '<tr>
                            <th colspan="5">Grand Total</th>
                            <th class="amt-td">'.$grand_total_f.'</th>
                        </tr>';
                    };
            };
                echo '</tbody>
            </table>';
        };
?>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>