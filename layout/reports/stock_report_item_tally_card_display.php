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
    if(isset($_SESSION['stock_report_item_tally_card_start_date']))
    {
        $item_id = $_SESSION['stock_report_item_tally_card_item_id'];
        //$category_id = $_SESSION['stock_report_item_tally_card_category_id'];
        $warehouse = $_SESSION['stock_report_item_tally_card_warehouse_id'];
        $start_date = $_SESSION['stock_report_item_tally_card_start_date'];
        $end_date = $_SESSION['stock_report_item_tally_card_end_date'];
        $company_id = $_SESSION['company_id'];

        $sql_company = "SELECT * FROM company WHERE company_id = '$company_id'";
        $result_company = mysqli_query($con,$sql_company);
        $row_company = mysqli_fetch_array($result_company);
        if ($warehouse !=='all') 
        {
            $sql_warehouse = "SELECT * FROM warehouse WHERE warehouse_id = '$warehouse'";
            $result_warehouse = mysqli_query($con,$sql_warehouse);
            $row_warehouse = mysqli_fetch_array($result_warehouse);
            $warehouse_desc = $row_warehouse['warehouse_desc'];
        }
        else
        {
            $warehouse_desc ='ALL WAREHOUSES';
        };
        
        $query_item = "SELECT * FROM stock_items WHERE stock_item_id ='$item_id'";
        $query_run_item = mysqli_query($con, $query_item);
        $row_item = mysqli_fetch_assoc($query_run_item);
        $item_desc = $row_item['stock_item'];
            
?>
    <table class="table table-hover table-bordered table-sm" id="stock_report_list_table" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th class = "action-td" colspan="7"><H3><?php echo $row_company['trading_name'];?></H3></th>
                </tr>
                <tr>
                    <th class = "action-td" colspan="7"><H6><?php echo $warehouse_desc .' - '. $item_desc;?> TALLY CARD FROM <?php echo $start_date;?> TO <?php echo $end_date;?></H6></th>
                </tr>
                <tr style="background-color:#E4DCCF; color:black">
                    <th class="action-td">S/NO</th>
                    <th class="action-td">DATE</th>
                    <th class="action-td">PARTICULARS</th>
                    <th class="action-td">OPENING BALANCE</th>
                    <th class="action-td">INWARDS</th>
                    <th class="action-td">OUTWARDS</th>
                    <th class="action-td">CLOSONG BALANCE</th>
                </tr>
            </thead>
                <tbody class="pv-table-body" id="stock_report_list_table_body">
                                 
<?php 
    if ($warehouse == 'all') 
    {
            $query="SELECT date, item_id, Reference, waybill_id, voucher, warehouse_id, ob, qty_out, qty_in FROM
            (
                SELECT stock_item_id AS item_id, stock_purchase_id AS Reference, 0 AS waybill_id, 'stock_purchase' AS voucher, warehouse_id, 0 AS ob, 0 AS qty_out, qty AS qty_in, date AS date
                FROM stock_purchase_items WHERE date BETWEEN '$start_date' AND '$end_date' AND stock_item_id = '$item_id' AND company_id = '$company_id' AND qty >0
               
                UNION ALL SELECT stock_item_id AS item_id, stock_sales_id AS Reference, waybill_id AS waybill_id, 'stock_sales' AS voucher, warehouse_id, 0 AS ob,  qty AS qty_out, 0 AS qty_in, 
                date AS date FROM stock_sales_items WHERE date BETWEEN '$start_date' AND '$end_date'
                AND stock_item_id = '$item_id' AND company_id = '$company_id' AND qty > 0
               
                UNION ALL SELECT stock_id AS item_id, mtce_stock_list_id AS Reference, 0 AS waybill_id, 'mtce_sheet' AS voucher, warehouse_id, 0 AS ob,  qty AS qty_out, 0 AS qty_in, date AS date
                FROM mtce_stock_list WHERE date BETWEEN '$start_date' AND '$end_date' AND stock_id = '$item_id' AND company_id = '$company_id' AND qty >0
               
                UNION ALL SELECT stock_item_id AS item_id, stock_adj_id AS Reference, 0 AS waybill_id, 'stock_adjustment' AS voucher, warehouse_id, 0 AS ob,  qty_out AS qty_out, 0 AS qty_in, 
                date AS date FROM stock_adjustment_items WHERE date BETWEEN '$start_date' AND '$end_date' AND stock_item_id = '$item_id' AND company_id = '$company_id' AND qty_out >0
               
                UNION ALL SELECT stock_item_id AS item_id, stock_trans_id AS Reference, 0 AS waybill_id, 'stock_transfer' AS voucher, warehouse_id, 0 AS ob,  qty_transferred AS qty_out, 
                0 AS qty_in, date_trans AS date FROM stock_transfer_items WHERE date_trans BETWEEN '$start_date' AND '$end_date' AND stock_item_id = '$item_id' AND 
                company_id = '$company_id' AND qty_transferred > 0

                UNION ALL SELECT stock_item_id AS item_id, stock_adj_id AS Reference, 0 AS waybill_id, 'stock_adjustment' AS voucher, warehouse_id, 0 AS ob,  0 AS qty_out, qty_in AS qty_in, 
                date AS date FROM stock_adjustment_items WHERE date BETWEEN '$start_date' AND '$end_date' AND stock_item_id = '$item_id' AND company_id = '$company_id' AND qty_in >0
               

                UNION ALL SELECT stock_item_id AS item_id, stock_trans_id AS Reference, 0 AS waybill_id, 'stock_transfer' AS voucher, warehouse_id, 0 AS ob,  0 AS qty_out, qty_received AS qty_in,
                date_trans AS date FROM stock_transfer_items WHERE date_trans BETWEEN '$start_date' AND '$end_date' AND stock_item_id = '$item_id' AND company_id = '$company_id' AND qty_received > 0
               
            ) AS c ORDER BY date ASC";

            $query_ob = "SELECT SUM(ob) AS ob FROM
            (
                SELECT stock_item_id AS item_id, stock_purchase_id AS Reference, 0 AS waybill_id, 'stock_purchase' AS voucher, warehouse_id, qty - 0 AS ob,  0 AS qty_out, 0 AS qty_in
                FROM stock_purchase_items WHERE date < '$start_date' AND stock_item_id = '$item_id' AND company_id = '$company_id' AND qty >0

                UNION ALL SELECT stock_item_id AS item_id, stock_sales_id AS Reference, waybill_id AS waybill_id, 'stock_sales' AS voucher, warehouse_id, 0 - qty AS ob,  0 AS qty_out, 0 AS qty_in
                FROM stock_sales_items WHERE date < '$start_date' AND stock_item_id = '$item_id' AND company_id = '$company_id' AND qty >0

                UNION ALL SELECT stock_id AS item_id, mtce_stock_list_id AS Reference, 0 AS waybill_id, 'mtce_sheet' AS voucher, warehouse_id, 0 - qty AS ob,  0 AS qty_out, 0 AS qty_in
                FROM mtce_stock_list WHERE date < '$start_date' AND stock_id = '$item_id' AND company_id = '$company_id' AND qty >0

                UNION ALL SELECT stock_item_id AS item_id, stock_adj_id AS Reference, 0 AS waybill_id, 'stock_adjustment' AS voucher, warehouse_id, 0 - qty_out AS ob,  0 AS qty_out, 0 AS qty_in
                FROM stock_adjustment_items WHERE date < '$start_date' AND stock_item_id = '$item_id' AND company_id = '$company_id' AND qty_out >0

                UNION ALL SELECT stock_item_id AS item_id, stock_trans_id AS Reference, 0 AS waybill_id, 'stock_transfer' AS voucher, warehouse_id, 0 - qty_transferred AS ob,  0 AS qty_out, 
                0 AS qty_in FROM stock_transfer_items WHERE date_trans < '$start_date' AND stock_item_id = '$item_id' AND company_id = '$company_id' AND qty_transferred > 0
               
                UNION ALL SELECT stock_item_id AS item_id, stock_adj_id AS Reference, 0 AS waybill_id, 'stock_adjustment' AS voucher, warehouse_id, qty_in - 0 AS ob,  0 AS qty_out, 0 AS qty_in 
                FROM stock_adjustment_items WHERE date < '$start_date' AND stock_item_id = '$item_id' AND company_id = '$company_id' AND qty_in >0

                UNION ALL SELECT stock_item_id AS item_id, stock_trans_id AS Reference, 0 AS waybill_id, 'stock_transfer' AS voucher, warehouse_id, qty_received - 0 AS ob,  0 AS qty_out, 
                0 AS qty_in FROM stock_transfer_items WHERE date_trans < '$start_date' AND stock_item_id = '$item_id' AND company_id = '$company_id' AND qty_received > 0
            ) AS d";
    } 
    else 
    {
            $query="SELECT date, item_id, Reference, waybill_id, voucher, warehouse_id, ob, qty_out, qty_in FROM
            (
                SELECT stock_item_id AS item_id, stock_purchase_id AS Reference, 0 AS waybill_id, 'stock_purchase' AS voucher, warehouse_id, 0 AS ob, 0 AS qty_out, qty AS qty_in, date AS date 
                FROM stock_purchase_items WHERE date BETWEEN '$start_date' AND '$end_date' AND stock_item_id = '$item_id' AND warehouse_id = '$warehouse' AND 
                company_id = '$company_id' AND qty > 0

                UNION ALL SELECT stock_item_id AS item_id, stock_sales_id AS Reference, waybill_id AS waybill_id, 'stock_sales' AS voucher, warehouse_id, 0 AS ob, qty AS qty_out, 0 AS qty_in, 
                date AS date FROM stock_sales_items WHERE date BETWEEN '$start_date' AND '$end_date' 
                AND '$end_date' AND stock_item_id = '$item_id' AND warehouse_id = '$warehouse' AND 
                company_id = '$company_id' AND qty > 0

                UNION ALL SELECT stock_id AS item_id, mtce_stock_list_id AS Reference, 0 AS waybill_id, 'mtce_sheet' AS voucher, warehouse_id, 0 AS ob,  qty AS qty_out, 0 AS qty_in, date AS date 
                FROM mtce_stock_list WHERE date BETWEEN '$start_date' AND '$end_date' AND stock_id = '$item_id' AND warehouse_id = '$warehouse' AND company_id = '$company_id' AND qty > 0
               
                UNION ALL SELECT stock_item_id AS item_id, stock_adj_id AS Reference, 0 AS waybill_id, 'stock_adjustment' AS voucher, warehouse_id, 0 AS ob,  qty_out AS qty_out, 0 AS qty_in, 
                date AS date FROM stock_adjustment_items WHERE date BETWEEN '$start_date' AND '$end_date' AND stock_item_id = '$item_id' AND warehouse_id = '$warehouse' AND 
                company_id = '$company_id' AND qty_out > 0

                UNION ALL SELECT stock_item_id AS item_id, stock_trans_id AS Reference, 0 AS waybill_id, 'stock_transfer' AS voucher, warehouse_id, 0 AS ob,  qty_transferred AS qty_out, 
                0 AS qty_in, date_trans AS date FROM stock_transfer_items WHERE date_trans BETWEEN '$start_date' AND '$end_date' AND stock_item_id = '$item_id' AND 
                warehouse_id = '$warehouse' AND company_id = '$company_id' AND qty_transferred > 0

                UNION ALL SELECT stock_item_id AS item_id, stock_adj_id AS Reference, 0 AS waybill_id, 'stock_adjustment' AS voucher, warehouse_id, 0 AS ob,  0 AS qty_out, qty_in AS qty_in, 
                date AS date FROM stock_adjustment_items WHERE date BETWEEN '$start_date' AND '$end_date' AND stock_item_id = '$item_id' AND warehouse_id = '$warehouse' AND 
                company_id = '$company_id' AND qty_in > 0

                UNION ALL SELECT stock_item_id AS item_id, stock_trans_id AS Reference, 0 AS waybill_id, 'stock_transfer' AS voucher, warehouse_id, 0 AS ob,  0 AS qty_out, 
                qty_received AS qty_in, date_trans AS date FROM stock_transfer_items WHERE date_trans BETWEEN '$start_date' AND '$end_date' AND stock_item_id = '$item_id' 
                AND warehouse_id = '$warehouse' AND company_id = '$company_id' AND qty_received > 0
            )AS c ORDER BY date ASC";

            $query_ob = "SELECT SUM(ob) AS ob FROM
            (
                SELECT stock_item_id AS item_id, stock_purchase_id AS Reference, 0 AS waybill_id, 'stock_purchase' AS voucher, warehouse_id, qty - 0 AS ob,  0 AS qty_out, 0 AS qty_in
                FROM stock_purchase_items WHERE date < '$start_date' AND stock_item_id = '$item_id' AND warehouse_id = '$warehouse' AND company_id = '$company_id' AND qty > 0
               
                UNION ALL SELECT stock_item_id AS item_id, stock_sales_id AS Reference, waybill_id AS waybill_id, 'stock_sales' AS voucher, warehouse_id, 0 - qty AS ob,  0 AS qty_out, 0 AS qty_in
                FROM stock_sales_items WHERE date < '$start_date' AND stock_item_id = '$item_id' 
                AND warehouse_id = '$warehouse' AND company_id = '$company_id' AND qty > 0
               
                UNION ALL SELECT stock_id AS item_id, mtce_stock_list_id AS Reference, 0 AS waybill_id, 'mtce_sheet' AS voucher, warehouse_id, 0 - qty AS ob,  0 AS qty_out, 0 AS qty_in
                FROM mtce_stock_list WHERE date < '$start_date' AND stock_id = '$item_id' AND warehouse_id = '$warehouse' AND company_id = '$company_id' AND qty > 0
               
                UNION ALL SELECT stock_item_id AS item_id, stock_adj_id AS Reference, 0 AS waybill_id, 'stock_adjustment' AS voucher, warehouse_id, 0 - qty_out AS ob,  0 AS qty_out, 0 AS qty_in
                FROM stock_adjustment_items WHERE date < '$start_date' AND stock_item_id = '$item_id' AND warehouse_id = '$warehouse' AND company_id = '$company_id' AND qty_out > 0
               
                UNION ALL SELECT stock_item_id AS item_id, stock_trans_id AS Reference, 0 AS waybill_id, 'stock_transfer' AS voucher, warehouse_id, 0 - qty_transferred AS ob,  0 AS qty_out, 
                0 AS qty_in FROM stock_transfer_items WHERE date_trans < '$start_date' AND stock_item_id = '$item_id' AND warehouse_id = '$warehouse' AND 
                company_id = '$company_id' AND qty_transferred > 0

                UNION ALL SELECT stock_item_id AS item_id, stock_adj_id AS Reference, 0 AS waybill_id, 'stock_adjustment' AS voucher, warehouse_id, qty_in - 0 AS ob,  0 AS qty_out, 0 AS qty_in 
                FROM stock_adjustment_items WHERE date < '$start_date' AND stock_item_id = '$item_id' AND warehouse_id = '$warehouse' AND company_id = '$company_id' AND qty_in > 0
               
                UNION ALL SELECT stock_item_id AS item_id, stock_trans_id AS Reference, 0 AS waybill_id, 'stock_transfer' AS voucher, warehouse_id, qty_received - 0 AS ob,  0 AS qty_out, 
                0 AS qty_in FROM stock_transfer_items WHERE date_trans < '$start_date' AND stock_item_id = '$item_id' AND warehouse_id = '$warehouse' AND 
                company_id = '$company_id' AND qty_received > 0
            ) AS d";
        
    };
        $query_run_ob = mysqli_query($con, $query_ob);
        $row_ob = mysqli_fetch_assoc($query_run_ob);
        $ob = $row_ob['ob'];
        $qty_in = 0;
        $qty_out = 0;
?>
        <tr>
            <td class="action-td"></td>
            <td></td>
            <td><strong>OPENING BALANCE</strong></td>
            <td class="action-td"><strong><?php echo $ob;?></strong></td>
            <td class="amt-td"></td>
            <td class="amt-td"></td>
            <td class="amt-td"></td>
        </tr>
<?php
        $query_run = mysqli_query($con, $query);
        if (mysqli_num_rows($query_run) > 0)
        {
            $i=0;
            while($row = mysqli_fetch_assoc($query_run))
            {
                ++$i;
                    $ob = $ob + $qty_in - $qty_out;
                    if($row['voucher'] == 'stock_purchase')
                    {
                        $PARTICULARS = '';
                        $stock_purchase_id = $row['Reference'];
                        $sql_stock_purchase = "SELECT * FROM stock_purchases WHERE stock_purchase_id = '$stock_purchase_id' AND company_id = '$company_id'";
                        $result_stock_purchase = mysqli_query($con,$sql_stock_purchase);
                        if (mysqli_num_rows($result_stock_purchase) > 0)
                        {
                            $row_stock_purchase = mysqli_fetch_array($result_stock_purchase);
                            
                            $ledger_id = $row_stock_purchase['ledger_credit'];
                            $sql_ledger_cr = "SELECT * FROM ledgers WHERE ledger_id = '$ledger_id'";
                            $result_ledger_cr = mysqli_query($con,$sql_ledger_cr);
                            $row_ledger_cr = mysqli_fetch_array($result_ledger_cr);

                            $PARTICULARS = 'Purchase Voucher ID:'.$row['Reference'].'-'.$row_ledger_cr['ledger_desc'].', '.$row_stock_purchase['supplied_by'];
                        }
                        else
                        {
                            $PARTICULARS = 'Purchase Voucher ID:'.$row['Reference'].'--No Particulars--';
                        };
                    }
                    else if($row['voucher'] == 'stock_sales')
                    {
                        $PARTICULARS = '';
                        $stock_sales_id = $row['Reference'];
                        $waybill_id = $row['waybill_id'];
                        if($stock_sales_id > 0)
                        {
                            $sql_stock_sales = "SELECT * FROM stock_sales WHERE stock_sales_id = '$stock_sales_id' AND company_id = '$company_id'";
                            $result_stock_sales = mysqli_query($con,$sql_stock_sales);
                            if (mysqli_num_rows($result_stock_sales) > 0)
                            {
                                $row_stock_sales = mysqli_fetch_array($result_stock_sales);
                                
                                $ledger_id = $row_stock_sales['ledger_debit'];
                                $sql_ledger_dr = "SELECT * FROM ledgers WHERE ledger_id = '$ledger_id'";
                                $result_ledger_dr = mysqli_query($con,$sql_ledger_dr);
                                if(mysqli_num_rows($result_ledger_dr) > 0)
                                {
                                    $row_ledger_dr = mysqli_fetch_array($result_ledger_dr);
                                    $debit_ledger = $row_ledger_dr['ledger_desc'];
                                }
                                else
                                {
                                    $sql_trans_dr = "SELECT * FROM transactions WHERE stock_sales_id = '$stock_sales_id' AND amount_debit > 0";
                                    $result_trans_dr = mysqli_query($con,$sql_trans_dr);
                                    $row_trans_dr = mysqli_fetch_array($result_trans_dr);
                                    $ledger_id = $row_trans_dr['ledger_id'];
                                    $sql_ledger_dr = "SELECT * FROM ledgers WHERE ledger_id = '$ledger_id'";
                                    $result_ledger_dr = mysqli_query($con,$sql_ledger_dr);
                                    $row_ledger_dr = mysqli_fetch_array($result_ledger_dr);
                                    $debit_ledger = $row_ledger_dr['ledger_desc'];
                                };

                                $PARTICULARS = 'Sales Voucher ID:'.$row['Reference'].'-'.$debit_ledger.', '.$row_stock_sales['supplied_by'];
                            }
                            else
                            {
                                $PARTICULARS = 'Sales Voucher ID:'.$row['Reference'].'--No Particulars--';
                            };
                        };
                        if($waybill_id > 0)
                        {
                            $sql_waybill = "SELECT * FROM waybill WHERE waybill_id = '$waybill_id' AND company_id = '$company_id'";
                            $result_waybill = mysqli_query($con,$sql_waybill);
                            if (mysqli_num_rows($result_waybill) > 0)
                            {
                                $row_waybill = mysqli_fetch_array($result_waybill);
                                
                                $customer_id = $row_waybill['customer_id'];
                                $sql_customer = "SELECT * FROM customer WHERE customer_id = '$customer_id'";
                                $result_customer = mysqli_query($con,$sql_customer);
                                if(mysqli_num_rows($result_customer) > 0)
                                {
                                    $row_customer = mysqli_fetch_array($result_customer);
                                    $customer_name = $row_customer['first_name'].' '.$row_customer['last_name'].':-'.$row_customer['phone_number'];
                                }
                                else
                                {
                                    $customer_name = 'Not Specified';
                                };

                                $PARTICULARS = 'Waybill ID:'.$row['waybill_id'].'-'.$customer_name;
                            }
                            else
                            {
                                $PARTICULARS = 'Waybill ID:'.$row['waybill_id'].'--No Particulars--';
                            };
                        };
                    }
                    else if($row['voucher'] == 'mtce_sheet')
                    {
                        $mtce_stock_list_id = $row['Reference'];
                        $sql_mtce_stock_list = "SELECT * FROM mtce_stock_list WHERE mtce_stock_list_id = '$mtce_stock_list_id' AND company_id = '$company_id'";
                        $result_mtce_stock_list = mysqli_query($con,$sql_mtce_stock_list);
                        if (mysqli_num_rows($result_mtce_stock_list) > 0)
                        {
                            $row_mtce_stock_list = mysqli_fetch_assoc($result_mtce_stock_list);
                            
                            $site_id = $row_mtce_stock_list['site_id'];
                            $sql_site = "SELECT * FROM site WHERE site_id = '$site_id'";
                            $result_site = mysqli_query($con,$sql_site);
                            if (mysqli_num_rows($result_site) > 0)
                            {
                                $row_site = mysqli_fetch_assoc($result_site);
                                $site = $row_site['site'];
                            }
                            else
                            {
                                $site = '--No Site--';
                            };

                            $mtce_sheet_id = $row_mtce_stock_list['mtce_sheet_id'];
                            $sql_mtce_sheet = "SELECT * FROM mtce_sheet WHERE mtce_sheet_id = '$mtce_sheet_id'";
                            $result_mtce_sheet = mysqli_query($con,$sql_mtce_sheet);
                            if (mysqli_num_rows($result_mtce_sheet) > 0)
                            {
                                $row_mtce_sheet = mysqli_fetch_assoc($result_mtce_sheet);
                                $PARTICULARS = 'Maintenance Voucher ID:'.$row['Reference'].', '.$site.', Serviced by:'.$row_mtce_sheet['serviced_by'];
                            }
                            else
                            {
                                $PARTICULARS = 'Maintenance Voucher ID:'.$row['Reference'].', '.$site.'--No Name--';
                            };
                        }
                        else
                        {
                            $PARTICULARS = 'Maintenance Voucher ID:'.$row['Reference'].'--No Particulars--';
                        };
                    }
                    else if($row['voucher'] == 'stock_adjustment')
                    {
                        $stock_adjustment_id = $row['Reference'];
                        $sql_stock_adjustment_item = "SELECT * FROM stock_adjustment_items WHERE stock_adj_id = '$stock_adjustment_id' AND company_id = '$company_id'";
                        $result_stock_adjustment_item = mysqli_query($con, $sql_stock_adjustment_item);
                        if (mysqli_num_rows($result_stock_adjustment_item) > 0)
                        {
                            $row_stock_adjustment_item = mysqli_fetch_assoc($result_stock_adjustment_item);
                            
                            $stock_adj_id = $row_stock_adjustment_item['stock_adj_id'];
                            $stock_adj_item_id = $row_stock_adjustment_item['stk_adj_item_id'];
                            $sql_stock_adjustment = "SELECT * FROM stock_adjustment WHERE stock_adj_id = '$stock_adj_id'";
                            $result_stock_adjustment = mysqli_query($con,$sql_stock_adjustment);
                            if(!empty($result_stock_adjustment) && mysqli_num_rows($result_stock_adjustment) > 0)
                            {
                                $row_stock_adjustment = mysqli_fetch_assoc($result_stock_adjustment);
                                $Reference = $row['Reference'];
                                $adjusted_by = $row_stock_adjustment['adjusted_by'];
                                $narration = $row_stock_adjustment['narration'];
                                $sa_status = mysqli_num_rows($result_stock_adjustment);
                                $PARTICULARS = 'Stock Adjustment Voucher ID:'.$Reference.', '.$adjusted_by.', '.$narration;
                            }
                            else
                            {
                                $Reference = 'N/A';
                                $adjusted_by = 'N/A';
                                $narration = 'N/A';
                                $sa_status = 0;
                                $DETAILS = 'Stock Adjustment Voucher ID:'.$Reference.'--No Particulars--'.$stock_adj_item_id;
                                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['user_type_id'] == 2)) 
                                {
                                    $PARTICULARS = '<a href="#" data-toggle="" id="btn_delete_stock_adjustment_item_list" data-id="'.$stock_adj_item_id.'">'.$DETAILS.'</a>';
                                }
                                else
                                {
                                    $PARTICULARS = $DETAILS;
                                };
                            };
                        };
                    }
                    else if($row['voucher'] == 'stock_transfer')
                    {
                        $stock_transfer_id = $row['Reference'];
                        $sql_stock_transfer = "SELECT * FROM stock_transfer WHERE stock_trans_id = '$stock_transfer_id' AND company_id = '$company_id'";
                        $result_stock_transfer = mysqli_query($con, $sql_stock_transfer);
                        if (mysqli_num_rows($result_stock_transfer) > 0)
                        {
                            $row_stock_transfer = mysqli_fetch_assoc($result_stock_transfer);
                            
                            $warehouse_from_id = $row_stock_transfer['warehouse_from'];
                            $sql_warehouse_from = "SELECT * FROM warehouse WHERE warehouse_id = '$warehouse_from_id'";
                            $result_warehouse_from = mysqli_query($con,$sql_warehouse_from);
                            $row_warehouse_from = mysqli_fetch_assoc($result_warehouse_from);
                            
                            $warehouse_to_id = $row_stock_transfer['warehouse_to'];
                            $sql_warehouse_to = "SELECT * FROM warehouse WHERE warehouse_id = '$warehouse_to_id'";
                            $result_warehouse_to = mysqli_query($con,$sql_warehouse_to);
                            $row_warehouse_to = mysqli_fetch_assoc($result_warehouse_to);

                            $PARTICULARS = 'Stock Transfer Voucher ID:'.$row['Reference'].', Transfer from:'.$row_warehouse_from['warehouse_desc'].
                            ' to: '.$row_warehouse_to['warehouse_desc'].', Transferred:'.$row_stock_transfer['transferred_by'].', received by: '.$row_stock_transfer['collected_by'];
                        }
                        else
                        {
                            $PARTICULARS = 'Stock Transfer Voucher ID:'.$row['Reference'].'--No Particulars--';
                        };
                    }
                    else if($row['voucher'] != 'stock_purchase' &&
                            $row['voucher'] != 'stock_sales' &&
                            $row['voucher'] != 'mtce_sheet' &&
                            $row['voucher'] != 'stock_adjustment' &&
                            $row['voucher'] != 'stock_transfer')
                    {
                        $PARTICULARS = $row['voucher'].' No:'.$row['Reference'].'--No Particulars--';
                    };
?>
                    <tr>
                        <td class="action-td"><?php echo $i;?></td>
                        <td><?php echo $row['date'];?></td>
                        <td><?php echo $PARTICULARS;?>
                        <td class="action-td"><?php echo $ob;?></td>
                        <td class="action-td"><?php echo $row['qty_in'];?></td>
                        <td class="action-td"><?php echo $row['qty_out'];?></td>
                        <td class="action-td"><?php echo $ob + $row['qty_in'] - $row['qty_out'];?></td>
                    </tr>
<?php 
                $qty_in = $row['qty_in'];
                $qty_out = $row['qty_out'];
            };
        };

?>
        <tr>
            <td class="action-td"></td>
            <td></td>
            <td><strong>CLOSING BALANCE</strong></td>
            <td class="amt-td"></td>
            <td class="amt-td"></td>
            <td class="amt-td"></td>
            <td class="action-td"><strong><?php echo $ob = $ob + $qty_in - $qty_out;?></strong></td>
        </tr>
        <tr>
            <td class="action-td" colspan = "7">
                <?php 
                    if($row_item['img_url'] !='')
                    {
                        echo '<img src="'.$row_item['img_url'].'" alt="image" style="width:150px; height:100px"><br>'.$item_desc;
                    };
                ?>
            </td>
        </tr>
    </tbody>
</table>
<?php
    };
?>
</div>
<div 
    class="modal fade bd-example-modal-xl" 
    id="sales_invoice_delete_modal" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="sales_invoice_delete_modal" 
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sales_invoice_delete_modal_title">Sales Invoice Deletion</h5>
            </div>
            <form action="#" method="POST">
                <div class="modal-body">
                    <p id="sales_invoice_delete_question"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="sales_delete_yes" name="sales_delete_yes" class="btn btn-danger">Yes</button>
                    <button type="button" id="sales_delete_no" name="sales_delete_no" class="btn btn-primary" data-dismiss="modal">No</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>