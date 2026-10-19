<?php
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
        if(isset($_SESSION['customer_stock_report_start_date']))
        {           
            $company_id = $_SESSION['company_id'];
            $customer_id = $_SESSION['customer_stock_report_customer_id'];
            $type = $_SESSION['customer_stock_report_type'];
            $start_date = $_SESSION['customer_stock_report_start_date'];
            $end_date = $_SESSION['customer_stock_report_end_date'];

            $sql_company = "SELECT * FROM company WHERE company_id = '$company_id'";
            $result_company = mysqli_query($con,$sql_company);
            $row_company = mysqli_fetch_array($result_company);
                $sql_customer = "SELECT * FROM customer WHERE customer_id = '$customer_id' AND company_id > 0 AND company_id = '$company_id'";
                $result_customer = mysqli_query($con,$sql_customer);
                if(!empty($result_customer) && mysqli_num_rows($result_customer) > 0)
                {
                    $row_customer = mysqli_fetch_array($result_customer);
                    $customer_name = $row_customer['first_name'].''.$row_customer['last_name'];
                }
                else
                {
                    $customer_name = 'Not Specified';
                };
                $total_amount = 0;

                if($type == 'SUMMARY')
                {
                ?>
                <table class="table table-hover table-bordered table-sm" id="customer_stock_report_list_table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class = "action-td" colspan="10"><H3><?php echo $row_company['trading_name'];?></H3></th>
                        </tr>
                        <tr>
                            <th class = "action-td" colspan="10"><H6><?php echo $customer_name.' STOCK REPORT FROM '.$start_date.' TO '.$end_date;?></H6></th>
                        </tr>
                        <tr style="background-color:#E4DCCF; color:black">
                            <th class="action-td">S/NO</th>
                            <th class="action-td">ITEM</th>
                            <th class="action-td">OPENING QUANTITY</th>
                            <th class="action-td">INWARDS</th>
                            <th class="action-td">OUTWARDS</th>
                            <th class="action-td">CLOSING QUANTITY</th>
                            <th class="action-td">PRICE</th>
                            <th class="action-td">AMOUNT</th>
                        </tr>
                    </thead>
                    <tbody class="pv-table-body" id="customer_stock_report_list_table_body">
                        <?php
                        if($customer_id == 'ALL') 
                        {
                            $sql_customer_stock_list = "SELECT * FROM customer_warehouse WHERE (company_id > 0 AND company_id = '$company_id') GROUP BY stock_item_id";
                        }
                        else
                        {
                            $sql_customer_stock_list = "SELECT * FROM customer_warehouse WHERE (company_id > 0 AND company_id = '$company_id') AND customer_id = '$customer_id' GROUP BY stock_item_id";
                        }
                        $result_customer_stock_list = mysqli_query($con,$sql_customer_stock_list);
                        if(!empty($result_customer_stock_list) && mysqli_num_rows($result_customer_stock_list) > 0)
                        {
                            $i=0;
                            while($row_customer_stock_list = mysqli_fetch_array($result_customer_stock_list))
                            {
                                $i++;
                                $stock_item_id = $row_customer_stock_list['stock_item_id'];
                                if($customer_id == 'ALL') 
                                {
                                    $query="SELECT swap_id, waybill_id, nds_sales_id, item_id, SUM(ob) AS ob, SUM(qty_in) AS qty_in, SUM(qty_out) AS qty_out FROM
                                    (SELECT swap_id  AS swap_id, waybill_id  AS waybill_id, nds_sales_id  AS nds_sales_id, 
                                    stock_item_id  AS item_id, qty_in - 0 AS ob, 0 AS qty_out, 0 AS qty_in FROM customer_warehouse 
                                    WHERE date < '$start_date' AND stock_item_id = '$stock_item_id' AND (company_id > 0 AND company_id = '$company_id')
                                    UNION ALL SELECT swap_id  AS swap_id, waybill_id  AS waybill_id, nds_sales_id  AS nds_sales_id, 
                                    stock_item_id AS item_id, 0 - qty_out AS ob, 0 AS qty_out, 0 AS qty_in FROM customer_warehouse 
                                    WHERE date < '$start_date' AND stock_item_id = '$stock_item_id' AND (company_id > 0 AND company_id = '$company_id')
                            
                                    UNION ALL SELECT swap_id  AS swap_id, waybill_id  AS waybill_id, nds_sales_id  AS nds_sales_id, 
                                    stock_item_id  AS item_id, 0 AS ob, 0 AS qty_out, qty_in AS qty_in FROM customer_warehouse 
                                    WHERE date BETWEEN '$start_date' AND '$end_date' AND stock_item_id = '$stock_item_id' AND (company_id > 0 AND company_id = '$company_id')
                                    UNION ALL SELECT swap_id  AS swap_id, waybill_id  AS waybill_id, nds_sales_id  AS nds_sales_id, 
                                    stock_item_id AS item_id, 0 AS ob,  qty_out AS qty_out, 0 AS qty_in FROM customer_warehouse 
                                    WHERE date BETWEEN '$start_date' AND '$end_date' AND stock_item_id = '$stock_item_id' AND (company_id > 0 AND company_id = '$company_id')) AS c GROUP BY item_id";
                                }
                                else
                                {
                                    $query="SELECT swap_id, waybill_id, nds_sales_id, item_id, SUM(ob) AS ob, SUM(qty_in) AS qty_in, SUM(qty_out) AS qty_out FROM
                                    (SELECT swap_id  AS swap_id, waybill_id  AS waybill_id, nds_sales_id  AS nds_sales_id, 
                                    stock_item_id  AS item_id, qty_in - 0 AS ob, 0 AS qty_out, 0 AS qty_in FROM customer_warehouse 
                                    WHERE date < '$start_date' AND customer_id = '$customer_id' AND stock_item_id = '$stock_item_id' AND 
                                    (company_id > 0 AND company_id = '$company_id')
                                    UNION ALL SELECT swap_id  AS swap_id, waybill_id  AS waybill_id, nds_sales_id  AS nds_sales_id, 
                                    stock_item_id AS item_id, 0 - qty_out AS ob, 0 AS qty_out, 0 AS qty_in FROM customer_warehouse 
                                    WHERE date < '$start_date' AND customer_id = '$customer_id' AND stock_item_id = '$stock_item_id' AND 
                                    (company_id > 0 AND company_id = '$company_id')
                            
                                    UNION ALL SELECT swap_id  AS swap_id, waybill_id  AS waybill_id, nds_sales_id  AS nds_sales_id, 
                                    stock_item_id  AS item_id, 0 AS ob, 0 AS qty_out, qty_in AS qty_in FROM customer_warehouse 
                                    WHERE date BETWEEN '$start_date' AND '$end_date' AND customer_id = '$customer_id' AND stock_item_id = '$stock_item_id' 
                                    AND (company_id > 0 AND company_id = '$company_id')
                                    UNION ALL SELECT swap_id  AS swap_id, waybill_id  AS waybill_id, nds_sales_id  AS nds_sales_id, 
                                    stock_item_id AS item_id, 0 AS ob,  qty_out AS qty_out, 0 AS qty_in FROM customer_warehouse 
                                    WHERE date BETWEEN '$start_date' AND '$end_date' AND customer_id = '$customer_id' AND stock_item_id = '$stock_item_id' 
                                    AND (company_id > 0 AND company_id = '$company_id')) AS c GROUP BY item_id";
                                };
                                
                                $query_run = mysqli_query($con, $query);
                                if (mysqli_num_rows($query_run) > 0)
                                {
                                    $row = mysqli_fetch_assoc($query_run);
                                    $cls_bal = $row['ob'] + $row['qty_in'] - $row['qty_out'];
                                }
                                else
                                {
                                    $cls_bal = 0;
                                };

                                $query_item = "SELECT * FROM stock_items WHERE stock_item_id ='$stock_item_id'";
                                $query_run_item = mysqli_query($con, $query_item);
                                if(mysqli_num_rows($query_run_item) > 0)
                                {
                                    $row_item = mysqli_fetch_assoc($query_run_item);
                                    $item_desc = $row_item['stock_item'];
                                    $item_cost = $row_item['price_cash'];
                                }
                                else
                                {
                                    $item_desc = 'Not Specified';
                                    $item_cost = 0;
                                };
                                $item_amount = $cls_bal*$item_cost;
                                $total_amount = $total_amount + $item_amount;
                                $item_amount_f = number_format($item_amount, 2, '.', ',');
                                
                                echo '<tr>
                                    <td class="action-td">'.$i.'</td>
                                    <td><a id="customer_item_swap_btn" 
                                        href="#"
                                        data-id="'.$stock_item_id.'"
                                        data-id1="'.$customer_id.'"
                                        data-id2="'.$start_date.'"
                                        data-id3="'.$end_date.'"
                                        data-id4="'.$cls_bal.'">
                                        '.$item_desc.'
                                        </a>
                                    </td>
                                    <td class="amt-td">'.$row['ob'].'</td>
                                    <td class="amt-td">'.$row['qty_in'].'</td>
                                    <td class="amt-td">'.$row['qty_out'].'</td>
                                    <td class="amt-td">'.$cls_bal.'</td>
                                    <td class="amt-td">'.$item_cost.'</td>
                                    <td class="amt-td">'.$item_amount_f.'</td>
                                </tr>';
                            };
                            
                            $total_amount_f = number_format($total_amount, 2, '.', ',');
                            echo '<tr>
                                <th colspan="7" class="action-td">TOTAL STOCK VALUE</th>
                                <th class="amt-td">'.$total_amount_f.'</th>
                            </tr>';
                        };
                        ?>
                    </tbody>
                </table>
                <?php
            }
            else
            {
                echo '<table class="table table-hover table-bordered table-sm" id="customer_stock_report_list_table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class = "action-td" colspan="7"><H3>'.$row_company['trading_name'].'</H3></th>
                        </tr>
                        <tr>
                            <th class = "action-td" colspan="7"><H6>'.$customer_name.' STOCK REPORT FROM '.$start_date.' TO '.$end_date.'</H6></th>
                        </tr>
                        <tr style="background-color:#E4DCCF; color:black">
                            <th class="action-td">S/NO</th>
                            <th class="action-td">DATE</th>
                            <th>ITEM</th>
                            <th>VOUCHER TYPE</th>
                            <th class="action-td">NARRATION</th>
                            <th class="action-td">QTY IN</th>
                            <th class="action-td">QTY OUT</th>
                        </tr>
                    </thead>
                    <tbody class="pv-table-body" id="customer_stock_report_list_table_body">';
                    $sql_customer_stock_list = "SELECT * FROM customer_warehouse WHERE customer_id = '$customer_id' AND 
                    (company_id > 0 AND company_id = '$company_id') ORDER BY date ASC, nds_sales_id ASC, waybill_id ASC, 
                    swap_id ASC";
                    $result_customer_stock_list = mysqli_query($con,$sql_customer_stock_list);
                    if(!empty($result_customer_stock_list) && mysqli_num_rows($result_customer_stock_list) > 0)
                    {
                        $i=0;
                        while($row_customer_stock_list = mysqli_fetch_array($result_customer_stock_list))
                        {
                            $i++;
                            $stock_item_id = $row_customer_stock_list['stock_item_id'];
                            $query_item = "SELECT * FROM stock_items WHERE stock_item_id ='$stock_item_id'";
                            $query_run_item = mysqli_query($con, $query_item);
                            if(mysqli_num_rows($query_run_item) > 0)
                            {
                                $row_item = mysqli_fetch_assoc($query_run_item);
                                $item_desc = $row_item['stock_item'];
                                $item_cost = $row_item['price_cash'];
                            }
                            else
                            {
                                $item_desc = 'Not Specified';
                                $item_cost = 0;
                            };

                            if($row_customer_stock_list['swap_id'] > 0)
                            {
                                $voucher_type = 'SWAP';
                                $swap_id = $row_customer_stock_list['swap_id'];
                                $query_v = "SELECT * FROM swap WHERE swap_id ='$swap_id' AND (company_id > 0 AND company_id = '$company_id')";
                                $query_run_v = mysqli_query($con, $query_v);
                                if(mysqli_num_rows($query_run_v) > 0)
                                {
                                    $row_v = mysqli_fetch_assoc($query_run_v);
                                    $narration = $row_v['narration'];
                                }
                                else
                                {
                                    $narration = 'Not Specified';
                                };
                            }
                            else if($row_customer_stock_list['waybill_id'] > 0)
                            {
                                $voucher_type = 'WAYBILL';
                                $waybill_id = $row_customer_stock_list['waybill_id'];
                                $query_v = "SELECT * FROM waybill WHERE waybill_id ='$waybill_id' AND (company_id > 0 AND company_id = '$company_id')";
                                $query_run_v = mysqli_query($con, $query_v);
                                if(mysqli_num_rows($query_run_v) > 0)
                                {
                                    $row_v = mysqli_fetch_assoc($query_run_v);
                                    $narration = $row_v['narration'];
                                }
                                else
                                {
                                    $narration = 'Not Specified';
                                };
                            }
                            else if($row_customer_stock_list['nds_sales_id'] > 0)
                            {
                                $voucher_type = 'NDS SALES';
                                $nds_sales_id = $row_customer_stock_list['nds_sales_id'];
                                $query_v = "SELECT * FROM nds_sales WHERE nds_sales_id ='$nds_sales_id' AND (company_id > 0 AND company_id = '$company_id')";
                                $query_run_v = mysqli_query($con, $query_v);
                                if(mysqli_num_rows($query_run_v) > 0)
                                {
                                    $row_v = mysqli_fetch_assoc($query_run_v);
                                    $narration = $row_v['narration'];
                                }
                                else
                                {
                                    $narration = 'Not Specified';
                                };
                            };
                            echo '<tr>
                                <td class="action-td">'.$i.'</td>
                                <td class="action-td">'.$row_customer_stock_list['date'].'</td>
                                <td>'.$item_desc.'</td>
                                <td>'.$voucher_type.'</td>
                                <td class="action-td">'.$narration.'</td>
                                <td class="action-td">'.$row_customer_stock_list['qty_in'].'</td>
                                <td class="action-td">'.$row_customer_stock_list['qty_out'].'</td>
                            </tr>';
                        };
                    };
                    echo '</tbody>
                </table>';
            };
        };
?>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>