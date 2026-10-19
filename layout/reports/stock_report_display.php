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
        if(isset($_SESSION['stock_report_start_date']))
        {           
            $company_id = $_SESSION['stock_report_company_id'];
            $user_id = $_SESSION['stock_report_user_id'];
            $user_super_id = $_SESSION['stock_report_user_super_id'];
            $warehouse = $_SESSION['stock_report_warehouse'];
            $start_date = $_SESSION['stock_report_start_date'];
            $end_date = $_SESSION['stock_report_end_date'];

            $sql_company = "SELECT * FROM company WHERE company_id = '$company_id'";
            $result_company = mysqli_query($con,$sql_company);
            $row_company = mysqli_fetch_array($result_company);

            $sql_warehouse = "SELECT * FROM warehouse WHERE warehouse_id = '$warehouse'";
            $result_warehouse = mysqli_query($con,$sql_warehouse);
            $row_warehouse = mysqli_fetch_array($result_warehouse);
    ?>
    <table class="table table-hover table-bordered table-sm" id="stock_report_list_table" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th class = "action-td" colspan="12"><H3><?php echo $row_company['trading_name'];?></H3></th>
            </tr>
            <tr>
                <th class = "action-td" colspan="12"><H6><?php if ($warehouse !== 'all'){echo $row_warehouse['warehouse_desc'].' ';}else{echo 'ALL WAREHOUSES ';};?> STOCK REPORT FROM <?php echo $start_date;?> TO <?php echo $end_date;?></H6></th>
            </tr>
            <tr style="background-color:#E4DCCF; color:black">
                <th class="action-td">S/NO</th>
                <th class="action-td">ITEM</th>
                <th class="action-td">PICTURE</th>
                <th class="action-td">OPENING QUANTITY</th>
                <th class="action-td">INWARDS</th>
                <th class="action-td">OUTWARDS</th>
                <th class="action-td">CLOSING QUANTITY</th>
                <th class="action-td">RE-ORDER LEVEL</th>
                <th class="action-td">RE-ORDER QUANTITY</th>
                <th class="action-td">RATE</th>
                <th class="action-td">OPENING AMOUNT</th>
                <th class="action-td">CLOSING AMOUNT</th>
            </tr>
        </thead>
            <tbody class="pv-table-body" id="stock_report_list_table_body">
                                 
            <?php 
            if ($warehouse == 'all') 
            {
                $query="SELECT item_id, SUM(ob) AS ob, SUM(qty_in) AS qty_in, SUM(qty_out) AS qty_out FROM
                (SELECT stock_item_id  AS item_id, warehouse_id, qty - 0 AS ob, 0 AS qty_out, 0 AS qty_in FROM stock_purchase_items 
                WHERE date < '$start_date' AND company_id = '$company_id'
                UNION ALL SELECT stock_item_id AS item_id, warehouse_id, 0 - qty AS ob, 0 AS qty_out, 0 AS qty_in FROM stock_sales_items 
                WHERE date < '$start_date' AND company_id = '$company_id'
                UNION ALL SELECT stock_id AS item_id, warehouse_id, 0 - qty AS ob, 0 AS qty_out, 0 AS qty_in FROM mtce_stock_list 
                WHERE date < '$start_date' AND company_id = '$company_id'
                UNION ALL SELECT stock_item_id AS item_id, warehouse_id, 0 - qty_out AS ob, 0 AS qty_out, 0 AS qty_in FROM stock_adjustment_items 
                WHERE date < '$start_date' AND company_id = '$company_id'
                UNION ALL SELECT stock_item_id AS item_id, warehouse_id, 0 - qty_transferred AS ob, 0 AS qty_out, 0 AS qty_in FROM stock_transfer_items 
                WHERE date_trans < '$start_date' AND company_id = '$company_id'
                UNION ALL SELECT stock_item_id AS item_id, warehouse_id, qty_in - 0 AS ob,  0 AS qty_out, 0 AS qty_in FROM stock_adjustment_items 
                WHERE date < '$start_date' AND company_id = '$company_id'
                UNION ALL SELECT stock_item_id AS item_id, warehouse_id, qty_received - 0 AS ob,  0 AS qty_out, 0 AS qty_in FROM stock_transfer_items 
                WHERE date_trans < '$start_date' AND company_id = '$company_id'

                UNION ALL SELECT stock_item_id  AS item_id, warehouse_id, 0 AS ob, 0 AS qty_out, qty AS qty_in FROM stock_purchase_items 
                WHERE date BETWEEN '$start_date' AND '$end_date' AND company_id = '$company_id'
                UNION ALL SELECT stock_item_id AS item_id, warehouse_id, 0 AS ob,  qty AS qty_out, 0 AS qty_in FROM stock_sales_items 
                WHERE date BETWEEN '$start_date' AND '$end_date' AND company_id = '$company_id'
                UNION ALL SELECT stock_id AS item_id, warehouse_id, 0 AS ob,  qty AS qty_out, 0 AS qty_in FROM mtce_stock_list 
                WHERE date BETWEEN '$start_date' AND '$end_date' AND company_id = '$company_id'
                UNION ALL SELECT stock_item_id AS item_id, warehouse_id, 0 AS ob,  qty_out AS qty_out, 0 AS qty_in FROM stock_adjustment_items 
                WHERE date BETWEEN '$start_date' AND '$end_date' AND company_id = '$company_id'
                UNION ALL SELECT stock_item_id AS item_id, warehouse_id, 0 AS ob,  qty_transferred AS qty_out, 0 AS qty_in FROM stock_transfer_items 
                WHERE date_trans BETWEEN '$start_date' AND '$end_date' AND company_id = '$company_id'
                UNION ALL SELECT stock_item_id AS item_id, warehouse_id, 0 AS ob,  0 AS qty_out, qty_in AS qty_in FROM stock_adjustment_items 
                WHERE date BETWEEN '$start_date' AND '$end_date' AND company_id = '$company_id'
                UNION ALL SELECT stock_item_id AS item_id, warehouse_id, 0 AS ob,  0 AS qty_out, qty_received AS qty_in FROM stock_transfer_items 
                WHERE date_trans BETWEEN '$start_date' AND '$end_date' AND company_id = '$company_id') AS c GROUP BY item_id";
            } 
            else 
            {
                $query="SELECT item_id, SUM(ob) AS ob, SUM(qty_in) AS qty_in, SUM(qty_out) AS qty_out FROM
                (SELECT stock_item_id  AS item_id, warehouse_id, qty - 0 AS ob, 0 AS qty_out, 0 AS qty_in FROM stock_purchase_items 
                WHERE date < '$start_date' AND warehouse_id ='$warehouse' AND company_id = '$company_id'
                UNION ALL SELECT stock_item_id AS item_id, warehouse_id, 0 - qty AS ob, 0 AS qty_out, 0 AS qty_in FROM stock_sales_items 
                WHERE date < '$start_date' AND warehouse_id ='$warehouse' AND company_id = '$company_id'
                UNION ALL SELECT stock_id AS item_id, warehouse_id, 0 - qty AS ob, 0 AS qty_out, 0 AS qty_in FROM mtce_stock_list 
                WHERE date < '$start_date' AND warehouse_id ='$warehouse' AND company_id = '$company_id'
                UNION ALL SELECT stock_item_id AS item_id, warehouse_id, 0 - qty_out AS ob, 0 AS qty_out, 0 AS qty_in FROM stock_adjustment_items 
                WHERE date < '$start_date' AND warehouse_id ='$warehouse' AND company_id = '$company_id'
                UNION ALL SELECT stock_item_id AS item_id, warehouse_id, 0 - qty_transferred AS ob, 0 AS qty_out, 0 AS qty_in FROM stock_transfer_items 
                WHERE date_trans < '$start_date' AND warehouse_id ='$warehouse' AND company_id = '$company_id'
                UNION ALL SELECT stock_item_id AS item_id, warehouse_id, qty_in - 0 AS ob,  0 AS qty_out, 0 AS qty_in FROM stock_adjustment_items 
                WHERE date < '$start_date' AND warehouse_id ='$warehouse' AND company_id = '$company_id'
                UNION ALL SELECT stock_item_id AS item_id, warehouse_id, qty_received - 0 AS ob,  0 AS qty_out, 0 AS qty_in FROM stock_transfer_items 
                WHERE date_trans < '$start_date' AND warehouse_id ='$warehouse' AND company_id = '$company_id'

                UNION ALL SELECT stock_item_id  AS item_id, warehouse_id, 0 AS ob, 0 AS qty_out, qty AS qty_in FROM stock_purchase_items 
                WHERE date BETWEEN '$start_date' AND '$end_date' AND warehouse_id ='$warehouse' AND company_id = '$company_id'
                UNION ALL SELECT stock_item_id AS item_id, warehouse_id, 0 AS ob,  qty AS qty_out, 0 AS qty_in FROM stock_sales_items 
                WHERE date BETWEEN '$start_date' AND '$end_date' AND warehouse_id ='$warehouse' AND company_id = '$company_id'
                UNION ALL SELECT stock_id AS item_id, warehouse_id, 0 AS ob,  qty AS qty_out, 0 AS qty_in FROM mtce_stock_list 
                WHERE date BETWEEN '$start_date' AND '$end_date' AND warehouse_id ='$warehouse' AND company_id = '$company_id'
                UNION ALL SELECT stock_item_id AS item_id,warehouse_id, 0 AS ob,  qty_out AS qty_out, 0 AS qty_in FROM stock_adjustment_items 
                WHERE date BETWEEN '$start_date' AND '$end_date' AND warehouse_id ='$warehouse' AND company_id = '$company_id'
                UNION ALL SELECT stock_item_id AS item_id, warehouse_id, 0 AS ob,  qty_transferred AS qty_out, 0 AS qty_in FROM stock_transfer_items 
                WHERE date_trans BETWEEN '$start_date' AND '$end_date' AND warehouse_id ='$warehouse' AND company_id = '$company_id'
                UNION ALL SELECT stock_item_id AS item_id, warehouse_id, 0 AS ob,  0 AS qty_out, qty_in AS qty_in FROM stock_adjustment_items 
                WHERE date BETWEEN '$start_date' AND '$end_date' AND warehouse_id ='$warehouse' AND company_id = '$company_id'
                UNION ALL SELECT stock_item_id AS item_id, warehouse_id, 0 AS ob,  0 AS qty_out, qty_received AS qty_in FROM stock_transfer_items 
                WHERE date_trans BETWEEN '$start_date' AND '$end_date' AND warehouse_id ='$warehouse' AND company_id = '$company_id') AS c GROUP BY item_id";
            };
            $query_run = mysqli_query($con, $query);
            if (mysqli_num_rows($query_run) > 0)
            {
                $i=0;
                $total_closing_amount=0;
                $total_opening_amount=0;
                while($row = mysqli_fetch_assoc($query_run))
                {
                    $i++;
                    $item_id = $row['item_id'];
                    $query_item = "SELECT * FROM stock_items WHERE stock_item_id ='$item_id'";
                
                    $query_run_item = mysqli_query($con, $query_item);
                    if(mysqli_num_rows($query_run_item) > 0)
                    {
                        $row_item = mysqli_fetch_assoc($query_run_item);
                        $item_desc = $row_item['stock_item'];

                        if(isset($row_item['re_order_level']) && $row_item['re_order_level'] > 0)
                        {
                            $re_order_level = $row_item['re_order_level'];
                        }
                        else
                        {
                            $re_order_level = 0;
                        };

                        $query_pap = "SELECT  avg(price) AS avg_price FROM stock_purchase_items WHERE 
                        stock_item_id ='$item_id' AND date BETWEEN '2000-01-01' AND '$end_date' 
                        GROUP BY stock_item_id";
                        $query_run_pap = mysqli_query($con, $query_pap);
                        if(mysqli_num_rows($query_run_pap) > 0)
                        {
                            $row_av_price = mysqli_fetch_assoc($query_run_pap);
                            $average_price = $row_av_price['avg_price'];
                            $average_price_f = number_format($average_price, 2, '.', ',');
                            $opening_amount = $row['ob'] * $average_price;
                            $opening_amount_f = number_format($opening_amount, 2, '.', ',');
                            $cls_bal = $row['ob'] + $row['qty_in'] - $row['qty_out'];
                            $closing_amount = $cls_bal * $average_price;
                            $closing_amount_f = number_format($closing_amount, 2, '.', ',');
                        }
                        else
                        {
                            $average_price = 0;
                            $average_price_f = number_format($average_price, 2, '.', ',');
                            $opening_amount = 0 * $average_price;
                            $opening_amount_f = number_format($opening_amount, 2, '.', ',');
                            $cls_bal = 0;
                            $closing_amount = $cls_bal * $average_price;
                            $closing_amount_f = number_format($closing_amount, 2, '.', ',');
                        };
                    }
                    else
                    {
                        $item_desc = '--No Item--';
                        $re_order_level = 0;
                        $average_price = 0;
                        $average_price_f = number_format($average_price, 2, '.', ',');
                        $opening_amount = 0 * $average_price;
                        $opening_amount_f = number_format($opening_amount, 2, '.', ',');
                        $cls_bal = 0;
                        $closing_amount = $cls_bal * $average_price;
                        $closing_amount_f = number_format($closing_amount, 2, '.', ',');
                    };
                    $total_opening_amount = $total_opening_amount + $opening_amount;
                    $total_closing_amount = $total_closing_amount + $closing_amount;
                    ?>
                    <tr>
                        <td class="action-td"><?php echo $i;?></td>
                        <td><a id="stock_report_item_tally_card" 
                            href="#"
                            data-id="<?php echo $row['item_id'];?>"
                            data-id2="<?php echo $warehouse;?>"
                            data-id3="<?php echo $start_date;?>"
                            data-id4="<?php echo $end_date;?>"
                            data-id5="<?php echo $company_id;?>">
                            <?php echo $item_desc;?>
                            </a>
                        </td>
                        <td class="amt-td">
                            <?php 
                                if(isset($row_item['img_url']) && $row_item['img_url'] != '')
                                {
                                    echo '<img src="'.$row_item['img_url'].'" alt="image" style="width:150px; height:100px">';
                                };
                                $cls_qty = $row['ob'] + $row['qty_in'] - $row['qty_out'];
                                if($re_order_level > $cls_qty)
                                {
                                    $re_order_qty = $re_order_level - $cls_qty;
                                }
                                else
                                {
                                    $re_order_qty = '';
                                };
                            ?>
                        </td>
                        <td class="amt-td"><?php echo $row['ob'];?></td>
                        <td class="amt-td"><?php echo $row['qty_in'];?></td>
                        <td class="amt-td"><?php echo $row['qty_out'];?></td>
                        <td class="amt-td"><?php echo $cls_qty;?></td>
                        <td class="amt-td"><?php echo $re_order_level;?></td>
                        <td class="amt-td"><?php echo $re_order_qty;?></td>
                        <td class="amt-td"><?php echo $average_price_f;?></td>
                        <td class="amt-td"><?php echo $opening_amount_f;?></td>
                        <td class="amt-td"><?php echo $closing_amount_f;?></td>
                    </tr>
                    <?php 
                };
                $total_opening_amount_f = number_format($total_opening_amount, 2, '.', ',');
                $total_closing_amount_f = number_format($total_closing_amount, 2, '.', ',');
                ?>
                <tr>
                    <td class="action-td" colspan = "10"><strong>GRAND TOTAL</strong></td>
                    <td class="amt-td"><strong><?php echo $total_opening_amount_f;?></strong></td>
                    <td class="amt-td"><strong><?php echo $total_closing_amount_f;?></strong></td>
                </tr>
                <?php 
            };
                ?>
            </tbody>
        </table>
<?php
        };
?>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>