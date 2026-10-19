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
        if(isset($_SESSION['ledger_report_start_date']))
        {           
            $company_id = $_SESSION['ledger_report_company_id'];
            $user_id = $_SESSION['ledger_report_user_id'];
            $user_super_id = $_SESSION['ledger_report_user_super_id'];
            $ledger_id = $_SESSION['ledger_report_ledger_id'];
            $start_date = $_SESSION['ledger_report_start_date'];
            $end_date = $_SESSION['ledger_report_end_date'];

            $sql_company = "SELECT * FROM company WHERE company_id = '$company_id'";
            $result_company = mysqli_query($con,$sql_company);
            $row_company = mysqli_fetch_array($result_company);
    ?>
                    <table class="table table-hover table-bordered table-sm" id="ledger_report_list_table" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class = "action-td" colspan="8"><H2><?php echo $row_company['trading_name'];?></H2></th>
                                </tr>
                                <tr>
                                    <th class = "action-td" colspan="8"><H6>LEDGER REPORT FROM <?php echo $start_date;?> TO <?php echo $end_date;?></H6></th>
                                </tr>
                                <?php
                                    $sql_ledger = "SELECT * FROM ledgers WHERE ledger_id = '$ledger_id'";
                                    $result_ledger = mysqli_query($con,$sql_ledger);
                                    $row_ledger = mysqli_fetch_array($result_ledger);
                                ?>
                                <tr>
                                    <th colspan="8">
                                        <H4>
                                            <strong>
                                                <?php echo '<a href="#" id="btn_ledger_report_display_with_item_detail" 
                                                    data-id="'.$_SESSION['ledger_report_company_id'].'"
                                                    data-id1="'.$_SESSION['ledger_report_user_id'].'"
                                                    data-id2="'.$_SESSION['ledger_report_user_super_id'].'"
                                                    data-id3="'.$_SESSION['ledger_report_ledger_id'].'"
                                                    data-id4="'.$_SESSION['ledger_report_start_date'].'"
                                                    data-id5="'.$_SESSION['ledger_report_end_date'].'"
                                                    >
                                                    '.$row_ledger['ledger_desc'].'
                                                    </a>';
                                                ?>
                                            </strong>
                                        </H4>
                                    </th>
                                </tr>
                                <?php
                                    $sql_ledger_ob = "SELECT SUM(amount_debit) AS total_debit, SUM(amount_credit) AS total_credit FROM 
                                    transactions WHERE ledger_id = '$ledger_id' AND date < '$start_date' AND company_id = '$company_id'";
                                    $result_ledger_ob = mysqli_query($con,$sql_ledger_ob);
                                    $row_ledger_ob = mysqli_fetch_array($result_ledger_ob);
                                    if ($row_ledger['tb_2'] == 1 OR $row_ledger['tb_2'] == 4)
                                    {
                                        $Opening_balance = $row_ledger_ob['total_debit'] - $row_ledger_ob['total_credit'];
                                    }
                                    else if ($row_ledger['tb_2'] == 2 OR $row_ledger['tb_2'] == 3)
                                    {
                                        $Opening_balance = $row_ledger_ob['total_credit'] - $row_ledger_ob['total_debit'];
                                    };

                                    $Opening_balance_f = number_format($Opening_balance, 2, '.', ',');
                                ?>
                                <tr>
                                    <th class="amt-td" colspan="6">OPENING BALANCE</th>
                                    <th class="action-td"><?php echo $Opening_balance_f;?></th>
                                    <th class="action-td"></th>
                                </tr>
                                <tr>
                                    <th class="action-td">S/NO</th>
                                    <th class="action-td">DATE</th>
                                    <th class="action-td">PARTICULARS</th>
                                    <th class="action-td">OPENING</th>
                                    <th class="action-td">DEBIT</th>
                                    <th class="action-td">CREDIT</th>
                                    <th class="action-td">CLOSING</th>
                                    <th class="action-td">NARRATION</th>
                                </tr>
                            </thead>
                            <tbody class="pv-table-body" id="ledger_report_list_table_body">
                                <?php
                                    $sql_ledger_trans = "SELECT * FROM transactions WHERE ledger_id = '$ledger_id' AND date BETWEEN 
                                    '$start_date' AND '$end_date' AND company_id = '$company_id' ORDER BY date ASC";
                                    $result_ledger_trans = mysqli_query($con,$sql_ledger_trans);
                                    if (mysqli_num_rows($result_ledger_trans) > 0)
                                    {
                                        $i = 0;
                                        $total_debit = 0;
                                        $total_credit = 0;
                                        while($row_ledger_trans = mysqli_fetch_array($result_ledger_trans))
                                        {
                                            $i = ++$i;

                                            $ledger_id_contra = $row_ledger_trans['ledger_id_contra'];
                                            $sql_ledger_contra = "SELECT * FROM ledgers WHERE ledger_id = '$ledger_id_contra'";
                                            $result_ledger_contra = mysqli_query($con,$sql_ledger_contra);
                                            if(mysqli_num_rows($result_ledger_contra) > 0)
                                            {
                                                $row_ledger_contra = mysqli_fetch_array($result_ledger_contra);
                                                $ledger_contra = $row_ledger_contra['ledger_desc'];
                                            }
                                            else
                                            {
                                                $ledger_contra = 'N/A';
                                            };

                                            $Opening_balance_running = $Opening_balance;
                                            $Opening_balance_running_f = number_format($Opening_balance_running, 2, '.', ',');

                                            $amount_debit = $row_ledger_trans['amount_debit'];
                                            $amount_debit_f = number_format($amount_debit, 2, '.', ',');

                                            $amount_credit = $row_ledger_trans['amount_credit'];
                                            $amount_credit_f = number_format($amount_credit, 2, '.', ',');

                                            if ($row_ledger['tb_2'] == 1 OR $row_ledger['tb_2'] == 4)
                                            {
                                                $closing_balance = $Opening_balance + $row_ledger_trans['amount_debit'] - $row_ledger_trans['amount_credit'];
                                            }
                                            else if ($row_ledger['tb_2'] == 2 OR $row_ledger['tb_2'] == 3)
                                            {
                                                $closing_balance = $Opening_balance + $row_ledger_trans['amount_credit'] - $row_ledger_trans['amount_debit'];
                                            };

                                            $closing_balance_f = number_format($closing_balance, 2, '.', ',');

                                            if($row_ledger_trans['purchase_id'] > 0)
                                            {
                                                $voucher_id = $row_ledger_trans['purchase_id'];
                                                $link_id = 'btn_edit_purchase';
                                                
                                                $purchase_id = $row_ledger_trans['purchase_id'];
                                                $sql_purchase = "SELECT * FROM purchases WHERE purchase_id = '$purchase_id'";
                                                $result_purchase = mysqli_query($con,$sql_purchase);
                                                if (mysqli_num_rows($result_purchase) > 0)
                                                {
                                                    $row_purchase = mysqli_fetch_array($result_purchase);
                                                    $purchase_top = $row_purchase['weight'];
                                                    $purchase_down = $row_purchase['water'];
                                                    $purchase_price = $row_purchase['price'];
                                                    $narration = 'TOP:'.$purchase_top.', DOWN:'.$purchase_down.', PRICE:'.$purchase_price.', Supplied By:'.$row_purchase['supplier'];
                                                }
                                                else
                                                {
                                                    $narration = 'GOODS PURCHASED';
                                                };

                                                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Purchases'] == 'Yes')) 
                                                {
                                                    $ledger_description = '<a href="#" id="'.$link_id.'" data-id="'.$voucher_id.'">'.$ledger_contra.'</a>';
                                                }
                                                else
                                                {
                                                    $ledger_description = $ledger_contra;
                                                };
                                            }
                                            else if($row_ledger_trans['stock_purchase_id'] > 0)
                                            {
                                                $voucher_id = $row_ledger_trans['stock_purchase_id'];
                                                $link_id = 'btn_edit_stock_purchase';
                                                
                                                $stock_purchase_id = $row_ledger_trans['stock_purchase_id'];
                                                $sql_stock_purchase = "SELECT * FROM stock_purchases WHERE stock_purchase_id = '$stock_purchase_id'";
                                                $result_stock_purchase = mysqli_query($con,$sql_stock_purchase);
                                                if (mysqli_num_rows($result_stock_purchase) > 0)
                                                {
                                                    $row_stock_purchase = mysqli_fetch_array($result_stock_purchase);
                                                    $narration = $row_stock_purchase['narration'];
                                                }
                                                else
                                                {
                                                    $narration = 'INVENTORY PURCHASED';
                                                };

                                                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Stock_Purchase'] == 'Yes')) 
                                                {
                                                   $ledger_description = '<a href="#" id="'.$link_id.'" data-id="'.$voucher_id.'">'.$ledger_contra.'</a>';
                                                }
                                                else
                                                {
                                                    $ledger_description = $ledger_contra;
                                                };
                                            }
                                            else if($row_ledger_trans['stock_sales_id'] > 0)
                                            {
                                                $voucher_id = $row_ledger_trans['stock_sales_id'];
                                                $link_id = 'btn_edit_stock_sales';
                                                
                                                $stock_sales_id = $row_ledger_trans['stock_sales_id'];
                                                $sql_stock_sales = "SELECT * FROM stock_sales WHERE stock_sales_id = '$stock_sales_id'";
                                                $result_stock_sales = mysqli_query($con,$sql_stock_sales);
                                                if (mysqli_num_rows($result_stock_sales) > 0)
                                                {
                                                    $row_stock_sales = mysqli_fetch_array($result_stock_sales);
                                                    $narration = $row_stock_sales['supplied_by'].':-'.$row_stock_sales['received_by'].', '.$row_stock_sales['reference_no'].': '.$row_stock_sales['narration'];
                                                }
                                                else
                                                {
                                                    $narration = 'INVENTORY SOLD';
                                                };

                                                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Stock_Sales'] == 'Yes')) 
                                                {
                                                    $ledger_description = '<a href="#" id="'.$link_id.'" data-id="'.$voucher_id.'">'.$ledger_contra.'</a>';
                                                }
                                                else
                                                {
                                                    $ledger_description = $ledger_contra;
                                                };
                                            }
                                            else if($row_ledger_trans['nds_sales_id'] > 0)
                                            {
                                                $voucher_id = $row_ledger_trans['nds_sales_id'];
                                                $link_id = 'btn_edit_nds_sales';
                                                
                                                $nds_sales_id = $row_ledger_trans['nds_sales_id'];
                                                $sql_stock_sales = "SELECT * FROM nds_sales WHERE nds_sales_id = '$nds_sales_id'";
                                                $result_stock_sales = mysqli_query($con,$sql_stock_sales);
                                                if (mysqli_num_rows($result_stock_sales) > 0)
                                                {
                                                    $row_stock_sales = mysqli_fetch_array($result_stock_sales);
                                                    
                                                    $customer_id = $row_stock_sales['customer_id'];
                                                    $sql_customer= "SELECT * FROM customer WHERE customer_id = '$customer_id'";
                                                    $result_customer = mysqli_query($con,$sql_customer);
                                                    if (mysqli_num_rows($result_customer) > 0)
                                                    {
                                                        $row_customer = mysqli_fetch_array($result_customer);
                                                        $customer = $row_customer['first_name'].''.$row_customer['last_name'];
                                                    }
                                                    else
                                                    {
                                                        $customer = 'Not Specified';
                                                    }
                                                    $narration = $customer.':- '.$row_stock_sales['narration'];
                                                }
                                                else
                                                {
                                                    $narration = 'Deposit Sales';
                                                };

                                                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Stock_Sales'] == 'Yes')) 
                                                {
                                                    $ledger_description = '<a href="#" id="'.$link_id.'" data-id="'.$voucher_id.'">'.$ledger_contra.'</a>';
                                                }
                                                else
                                                {
                                                    $ledger_description = $ledger_contra;
                                                };
                                            }
                                            else if($row_ledger_trans['sales_id'] > 0)
                                            {
                                                $voucher_id = $row_ledger_trans['sales_id'];
                                                $link_id = 'btn_edit_sales';
                                                
                                                $sales_id = $row_ledger_trans['sales_id'];
                                                $sql_sales = "SELECT * FROM sales WHERE sales_id = '$sales_id'";
                                                $result_sales = mysqli_query($con,$sql_sales);
                                                if (mysqli_num_rows($result_sales) > 0)
                                                {
                                                    $row_sales = mysqli_fetch_array($result_sales);
                                                    $sales_top = $row_sales['weight'];
                                                    $sales_down = $row_sales['water'];
                                                    $sales_price = $row_sales['price'];
                                                    $narration = 'TOP:'.$sales_top.', DOWN:'.$sales_down.', PRICE:'.$sales_price;
                                                }
                                                else
                                                {
                                                    $narration = 'GOODS SOLD';
                                                };

                                                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Sales'] == 'Yes')) 
                                                {
                                                    $ledger_description = '<a href="#" id="'.$link_id.'" data-id="'.$voucher_id.'">'.$ledger_contra.'</a>';
                                                }
                                                else
                                                {
                                                    $ledger_description = $ledger_contra;
                                                };
                                            }
                                            else if($row_ledger_trans['payment_id'] > 0)
                                            {
                                                $voucher_id = $row_ledger_trans['payment_id'];
                                                $link_id = 'btn_edit_payment';
                                                
                                                $payment_id = $row_ledger_trans['payment_id'];
                                                $sql_payment = "SELECT * FROM payment WHERE payment_id = '$payment_id'";
                                                $result_payment = mysqli_query($con,$sql_payment);
                                                if (mysqli_num_rows($result_payment) > 0)
                                                {
                                                    $row_payment = mysqli_fetch_array($result_payment);
                                                    $narration = $row_payment['narration'];
                                                }
                                                else
                                                {
                                                    $narration = 'CASH PAID';
                                                };

                                                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Payment'] == 'Yes')) 
                                                {
                                                    $ledger_description = '<a href="#" id="'.$link_id.'" data-id="'.$voucher_id.'">'.$ledger_contra.'</a>';
                                                }
                                                else
                                                {
                                                    $ledger_description = $ledger_contra;
                                                };
                                            }
                                            else if($row_ledger_trans['receipt_id'] > 0)
                                            {
                                                $voucher_id = $row_ledger_trans['receipt_id'];
                                                $link_id = 'btn_edit_receipt';
                                                
                                                $receipt_id = $row_ledger_trans['receipt_id'];
                                                $sql_receipt = "SELECT * FROM receipt WHERE receipt_id = '$receipt_id'";
                                                $result_receipt = mysqli_query($con,$sql_receipt);
                                                if (mysqli_num_rows($result_receipt) > 0)
                                                {
                                                    $row_receipt = mysqli_fetch_array($result_receipt);
                                                    $narration = $row_receipt['narration'];
                                                }
                                                else
                                                {
                                                    $narration = 'CASH RECEIPT';
                                                };

                                                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Receipt'] == 'Yes')) 
                                                {
                                                    $ledger_description = '<a href="#" id="'.$link_id.'" data-id="'.$voucher_id.'">'.$ledger_contra.'</a>';
                                                }
                                                else
                                                {
                                                    $ledger_description = $ledger_contra;
                                                };
                                            }
                                            else if($row_ledger_trans['contra_id'] > 0)
                                            {
                                                $voucher_id = $row_ledger_trans['contra_id'];
                                                $link_id = 'btn_edit_contra';
                                                
                                                $contra_id = $row_ledger_trans['contra_id'];
                                                $sql_contra = "SELECT * FROM contra WHERE contra_id = '$contra_id'";
                                                $result_contra = mysqli_query($con,$sql_contra);
                                                if (mysqli_num_rows($result_contra) > 0)
                                                {
                                                    $row_contra = mysqli_fetch_array($result_contra);
                                                    $narration = $row_contra['narration'];
                                                }
                                                else
                                                {
                                                    $narration = 'CASH TRANSFERRED';
                                                };

                                                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Contra'] == 'Yes')) 
                                                {
                                                    $ledger_description = '<a href="#" id="'.$link_id.'" data-id="'.$voucher_id.'">'.$ledger_contra.'</a>';
                                                }
                                                else
                                                {
                                                    $ledger_description = $ledger_contra;
                                                };
                                            }
                                            else if($row_ledger_trans['journal_id'] > 0)
                                            {
                                                $voucher_id = $row_ledger_trans['journal_id'];
                                                $link_id = 'btn_edit_journal';
                                                
                                                $journal_id = $row_ledger_trans['journal_id'];
                                                $sql_journal = "SELECT * FROM journal WHERE journal_id = '$journal_id'";
                                                $result_journal = mysqli_query($con,$sql_journal);
                                                if (mysqli_num_rows($result_journal) > 0)
                                                {
                                                    $row_journal = mysqli_fetch_array($result_journal);
                                                    $narration = $row_journal['narration'];
                                                }
                                                else
                                                {
                                                    $narration = 'JV ENTRY';
                                                };

                                                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Journal'] == 'Yes')) 
                                                {
                                                    $ledger_description = '<a href="#" id="'.$link_id.'" data-id="'.$voucher_id.'">'.$ledger_contra.'</a>';
                                                }
                                                else
                                                {
                                                    $ledger_description = $ledger_contra;
                                                };
                                            }
                                            else if($row_ledger_trans['hiring_id'] > 0)
                                            {
                                                $voucher_id = $row_ledger_trans['hiring_id'];
                                                $link_id = 'btn_edit_hiring';
                                                
                                                $hiring_id = $row_ledger_trans['hiring_id'];
                                                $sql_hiring = "SELECT * FROM hiring WHERE hiring_id = '$hiring_id'";
                                                $result_hiring = mysqli_query($con,$sql_hiring);
                                                if (mysqli_num_rows($result_hiring) > 0)
                                                {
                                                    $row_hiring = mysqli_fetch_array($result_hiring);
                                                    $narration = $row_hiring['narration'];
                                                }
                                                else
                                                {
                                                    $narration = 'EQUIPMENT HIRED';
                                                };

                                                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Hiring_Invoice'] == 'Yes')) 
                                                {
                                                    $ledger_description = '<a href="#" id="'.$link_id.'" data-id="'.$voucher_id.'">'.$ledger_contra.'</a>';
                                                }
                                                else
                                                {
                                                    $ledger_description = $ledger_contra;
                                                };
                                            }
                                            else if($row_ledger_trans['mtce_sheet_id'] > 0)
                                            {
                                                $voucher_id = $row_ledger_trans['mtce_sheet_id'];
                                                $link_id = 'btn_edit_mtce';
                                                
                                                $mtce_sheet_id = $row_ledger_trans['mtce_sheet_id'];
                                                $sql_mtce_sheet = "SELECT * FROM mtce_sheet WHERE mtce_sheet_id = '$mtce_sheet_id'";
                                                $result_mtce_sheet = mysqli_query($con,$sql_mtce_sheet);
                                                if (mysqli_num_rows($result_mtce_sheet) > 0)
                                                {
                                                    $row_mtce_sheet = mysqli_fetch_array($result_mtce_sheet);
                                                    $narration = $row_mtce_sheet['narration'];
                                                }
                                                else
                                                {
                                                    $narration = 'EQUIPMENT MAINTENANCE';
                                                };

                                                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Mtce_Sheet'] == 'Yes')) 
                                                {
                                                    $ledger_description = '<a href="#" id="'.$link_id.'" data-id="'.$voucher_id.'">'.$ledger_contra.'</a>';
                                                }
                                                else
                                                {
                                                    $ledger_description = $ledger_contra;
                                                };
                                            };
                                            ?>
                                            <tr>
                                                <td class="action-td"><?php echo $i;?></td>
                                                <td class="action-td"><?php echo $row_ledger_trans['date'];?></td>
                                                <td ><?php echo $ledger_description;?></td>
                                                <td class="amt-td"><?php echo $Opening_balance_running_f;?></td>
                                                <td class="amt-td"><?php echo $amount_debit_f;?></td>
                                                <td class="amt-td"><?php echo $amount_credit_f;?></td>
                                                <td class="amt-td"><?php echo $closing_balance_f;?></td>
                                                <td><?php
                                                        if($row_ledger_trans['narration'] =='')
                                                        {
                                                            echo $narration;
                                                        }
                                                        else
                                                        {
                                                            echo $row_ledger_trans['narration'];
                                                        };
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php
                                            if ($row_ledger['tb_2'] == 1 OR $row_ledger['tb_2'] == 4)
                                            {
                                                $Opening_balance = $Opening_balance + $row_ledger_trans['amount_debit'] - $row_ledger_trans['amount_credit'];
                                            }
                                            else if ($row_ledger['tb_2'] == 2 OR $row_ledger['tb_2'] == 3)
                                            {
                                                $Opening_balance = $Opening_balance + $row_ledger_trans['amount_credit'] - $row_ledger_trans['amount_debit'];
                                            };
                                            $total_debit = $total_debit + $row_ledger_trans['amount_debit'];
                                            $total_credit = $total_credit + $row_ledger_trans['amount_credit'];
                                        }
                                    }
                                    else
                                    {
                                        $closing_balance = 0;
                                        $closing_balance_f = number_format($closing_balance, 2, '.', ',');
                                        $total_debit = 0;
                                        $total_credit = 0;
                                    };
                                    $total_debit_f = number_format($total_debit, 2, '.', ',');
                                    $total_credit_f = number_format($total_credit, 2, '.', ',');
                                ?>
                                <tr>
                                    <th class="amt-td" colspan="3">TOTAL</th>
                                    <th class="action-td"></th>
                                    <th class="action-td"><?php echo $total_debit_f;?></th>
                                    <th class="action-td"><?php echo $total_credit_f;?></th>
                                    <th class="action-td"></th>
                                    <th class="action-td"></th>
                                </tr>
                                <tr>
                                    <th class="amt-td" colspan="3">CLOSING BALANCE</th>
                                    <th class="action-td"></th>
                                    <th class="action-td"></th>
                                    <th class="action-td"></th>
                                    <th class="action-td"><?php echo $closing_balance_f;?></th>
                                    <th class="action-td"></th>
                                </tr>
                            </tbody>
                    </table>
    <?php
    };
    ?>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/contra_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/hiring_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/journal_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/mtce_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/payment_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/receipt_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/sales_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/stock_purchases_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/stock_sales_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/vouchers/purchases_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>