<?php 
    require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    global $con;
    $start_date = stripslashes($_POST['start_date']);
    $start_date = mysqli_real_escape_string($con,$start_date);
    $end_date = stripslashes($_POST['end_date']);
    $end_date = mysqli_real_escape_string($con,$end_date);
    $company_id = stripslashes($_SESSION['company_id']);
    $company_id = mysqli_real_escape_string($con,$company_id);
    $dashboard = array();

    //BRANCH DETAILS
        $branch_goods = '<div class="card" style="background-color:#D6EEEE">
            <div class="card-body">
                <table class="table table-hover table-bordered table-sm" id="bookingTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="color:black">
                            <th>BRANCH</th>
                            <th class = "action-td">GRAMS</th>
                            <th class = "action-td">VOLUME</th>
                            <th class = "action-td">RATE</th>
                            <th class = "action-td">AMOUNT</th>
                            <th class = "action-td">CASH</th>
                            <th class = "action-td">MOMO</th>
                            <th class = "action-td">BANK</th>
                        </tr>
                    </thead>
                    <tbody class="pv-table-body">';
                        if ($_SESSION['user_type_id'] != 3) 
                        {
                            $query_branch = "SELECT * FROM branch WHERE company_id = '$company_id'";
                        }
                        else
                        {
                            $user_branch_id = $_SESSION['branch_id'];
                            $query_branch = "SELECT * FROM branch WHERE company_id = '$company_id'
                            AND branch_id = '$user_branch_id'";
                        };
                        $total_grams = 0;
                        $total_volume = 0;
                        $total_amount = 0;
                        $total_cash = 0;
                        $total_momo = 0;
                        $total_bank = 0;
                        $book_grams = 0;
                        $query_run_branch = mysqli_query($con, $query_branch);
                        if (mysqli_num_rows($query_run_branch) > 0)
                        {
                            while($row_branch = mysqli_fetch_assoc($query_run_branch))
                            {
                                $cash_balance = 0;
                                $momo_balance = 0;
                                $bank_balance = 0;
                                $branch_id = $row_branch['branch_id'];
                                //PENDING_GOODS
                                    $query_goods = "SELECT SUM(a.weight) AS grams, SUM(a.pounds) AS volume, AVG(a.price) AS rate, SUM(a.amount) 
                                    AS amount, COALESCE(a.branch_id, b.branch_id) AS group_branch_id FROM purchases a 
                                    LEFT JOIN sold_items b ON a.purchase_id = b.purchase_id WHERE a.company_id = '$company_id' 
                                    AND ((a.branch_id = '$branch_id' AND a.branch_id_to = '') OR 
                                    (a.branch_id = '' AND a.branch_id_to = '$branch_id')) AND a.date BETWEEN 
                                    '$start_date' AND '$end_date' GROUP BY group_branch_id";
                        
                                    $query_run_goods = mysqli_query($con, $query_goods);
                                    if (mysqli_num_rows($query_run_goods) > 0)
                                    {
                                        while($row_goods = mysqli_fetch_assoc($query_run_goods))
                                        {
                                            $rate = $row_goods['rate'];
                                            $amount = $row_goods['amount'];
                                            $grams = $row_goods['grams'];
                                            $volume = $row_goods['volume'];

                                            $total_grams = $total_grams + $grams;
                                            $total_volume = $total_volume + $volume;
                                            $total_amount = $total_amount + $amount;
                                        }
                                    }
                                    else
                                    {
                                        $rate = 0;
                                        $amount = 0;
                                        $grams = 0;
                                        $volume = 0;
                                    };
                                //CASH
                                    $query_cash = "SELECT SUM(t.amount_debit) - SUM(t.amount_credit) AS balance FROM 
                                    transactions t LEFT JOIN ledgers l ON t.ledger_id=l.ledger_id WHERE l.tb_5 = 8 AND 
                                    l.branch_id = '$branch_id' AND t.company_id = '$company_id' GROUP BY l.branch_id";
                                    $query_run_cash = mysqli_query($con, $query_cash);
                                    if($query_run_cash)
                                    {
                                        while($row_cash = mysqli_fetch_assoc($query_run_cash))
                                        {
                                            $cash_balance = $row_cash['balance'];
                                        };
                                    }
                                    else
                                    {
                                        $cash_balance = 0;
                                    };
                                    $f_cash_balance = number_format($cash_balance, 2, '.', ',');

                                //MOMO
                                    $query_momo = "SELECT SUM(t.amount_debit) - SUM(t.amount_credit) AS balance FROM 
                                    transactions t LEFT JOIN ledgers l ON t.ledger_id=l.ledger_id WHERE l.tb_5 = 9 AND 
                                    l.branch_id = '$branch_id' AND t.company_id = '$company_id'
                                    GROUP BY l.branch_id";
                                    $query_run_momo = mysqli_query($con, $query_momo);
                                    if($query_run_momo)
                                    {
                                        while($row_momo = mysqli_fetch_assoc($query_run_momo))
                                        {
                                            $momo_balance = $row_momo['balance'];
                                        };
                                    }
                                    else
                                    {
                                        $momo_balance = 0;
                                    };
                                    $f_momo_balance = number_format($momo_balance, 2, '.', ',');

                        
                                //BANK
                                    $query_bank = "SELECT SUM(t.amount_debit) - SUM(t.amount_credit) AS balance FROM 
                                    transactions t LEFT JOIN ledgers l ON t.ledger_id=l.ledger_id WHERE l.tb_5 = 7 AND 
                                    l.branch_id = '$branch_id' AND t.company_id = '$company_id'
                                    GROUP BY l.branch_id";
                                    $query_run_bank = mysqli_query($con, $query_bank);
                                    if($query_run_bank)
                                    {
                                        while($row_bank = mysqli_fetch_assoc($query_run_bank))
                                        {
                                            $bank_balance = $row_bank['balance'];
                                        };
                                    }
                                    else
                                    {
                                        $bank_balance = 0;
                                    };
                                    $f_bank_balance = number_format($bank_balance, 2, '.', ',');
                                
                                $f_rate = number_format($rate, 2, '.', ',');
                                $f_amount = number_format($amount, 2, '.', ',');
                                $branch_goods .= '<tr>
                                    <th>'.$row_branch['branch_name'].'</th>
                                    <th class = "action-td">'.$grams.'</th>
                                    <th class = "action-td">'.$volume.'</th>
                                    <th class = "action-td">'.$f_rate.'</th>
                                    <th class = "action-td">'.$f_amount.'</th>
                                    <th class = "action-td">'.$f_cash_balance.'</th>
                                    <th class = "action-td">'.$f_momo_balance.'</th>
                                    <th class = "action-td">'.$f_bank_balance.'</th>
                                </tr>';
                                $total_cash = $total_cash + $cash_balance;
                                $total_momo = $total_momo + $momo_balance;
                                $total_bank = $total_bank + $bank_balance;
                            }
                            $f_total_amount = number_format($total_amount, 2, '.', ',');
                            $f_total_cash = number_format($total_cash, 2, '.', ',');
                            $f_total_momo = number_format($total_momo, 2, '.', ',');
                            $f_total_bank = number_format($total_bank, 2, '.', ',');
                            $branch_goods .= '<tr style="color:black">
                                <th>GRAND TOTAL</th>
                                <th class = "action-td">'.$total_grams.'</th>
                                <th class = "action-td">'.$total_volume.'</th>
                                <th class = "action-td"></th>
                                <th class = "action-td">'.$f_total_amount.'</th>
                                <th class = "action-td">'.$f_total_cash.'</th>
                                <th class = "action-td">'.$f_total_momo.'</th>
                                <th class = "action-td">'.$f_total_bank.'</th>
                            </tr>';
                        }

                    //BOOKINGS
                        $branch_goods .= '<tr style="color:black">
                            <th colspan ="8">BOOKINGS</th>
                        </tr>';
                        
                            $query_book = "SELECT SUM(a.weight) AS grams, l.ledger_desc FROM booking a 
                            LEFT JOIN ledgers l ON a.ledger_credit=l.ledger_id WHERE a.company_id = '$company_id' 
                            AND NOT EXISTS (SELECT b.booking_id FROM purchases b WHERE a.booking_id = b.booking_id)
                            AND a.date BETWEEN '$start_date' AND '$end_date' GROUP BY a.ledger_credit";
                
                            $query_run_book = mysqli_query($con, $query_book);
                            if (mysqli_num_rows($query_run_book) > 0)
                            {
                                while($row_book = mysqli_fetch_assoc($query_run_book))
                                {	
                                    $branch_goods .= '<tr>
                                        <th>'.$row_book['ledger_desc'].'</th>
                                        <th class = "action-td">'.$row_book['grams'].'</th>
                                        <th class = "action-td"></th>
                                        <th class = "action-td"></th>
                                        <th class = "action-td"></th>
                                        <th class = "action-td"></th>
                                        <th class = "action-td"></th>
                                        <th class = "action-td"></th>
                                    </tr>';

                                    $book_grams = $book_grams + $row_book['grams'];
                                }
                            };

                            $branch_goods .= '<tr style="color:black">
                                <th>TOTAL BOOKINGS</th>
                                <th class = "action-td">'.$book_grams.'</th>
                                <th class = "action-td"></th>
                                <th class = "action-td"></th>
                                <th class = "action-td"></th>
                                <th class = "action-td"></th>
                                <th class = "action-td"></th>
                                <th class = "action-td"></th>
                            </tr>';

                            $branch_goods .= '<tr style="color:black">
                                <th>STOCK + BOOKINGS</th>
                                <th class = "action-td">'.$total_grams + $book_grams.'</th>
                                <th class = "action-td"></th>
                                <th class = "action-td"></th>
                                <th class = "action-td"></th>
                                <th class = "action-td"></th>
                                <th class = "action-td"></th>
                                <th class = "action-td"></th>
                            </tr>';
                    $branch_goods .= '</tbody>
                </table>
            </div>
        </div>';
    /*
    //NET WORTH
        //ASSETS
            //STOCK
                //REFINED
                    
                    $query_nw_refined_purchased = "SELECT SUM(amount) AS amount FROM purchases WHERE product_id=1 AND 
                    date BETWEEN '2000-01-01' AND '$end_date' AND company_id = '$company_id'";
                    $query_run_nw_refined_purchased = mysqli_query($con, $query_nw_refined_purchased);
                    if (mysqli_num_rows($query_run_nw_refined_purchased) > 0)
                    {
                        $row_nw_refined_purchased = mysqli_fetch_assoc($query_run_nw_refined_purchased);
                        $nw_refined_purchased_amount = $row_nw_refined_purchased['amount'];
                    }
                    else
                    {
                        $nw_refined_purchased_amount = 0;
                    };
                    
                    $query_nw_refined_sold = "SELECT SUM(si.amount) AS amount FROM sold_items si JOIN
                    purchases p ON si.purchase_id=p.purchase_id WHERE  p.product_id=1 AND 
                    si.date BETWEEN '2000-01-01' AND '$end_date' AND si.company_id = '$company_id'";
                    $query_run_nw_refined_sold = mysqli_query($con, $query_nw_refined_sold);
                    if (mysqli_num_rows($query_run_nw_refined_sold) > 0)
                    {
                        $row_nw_refined_sold = mysqli_fetch_assoc($query_run_nw_refined_sold);
                        $nw_refined_sold_amount = $row_nw_refined_sold['amount'];
                    }
                    else
                    {
                        $nw_refined_sold_amount = 0;
                    };
                    $nw_refined_closing = $nw_refined_purchased_amount - $nw_refined_sold_amount;
                    $nw_refined_closing_f = number_format($nw_refined_closing, 2, '.', ',');

                //BALLS
                    
                    $query_nw_balls_purchased = "SELECT SUM(amount) AS amount FROM purchases WHERE product_id=2 AND 
                    date BETWEEN '2000-01-01' AND '$end_date' AND company_id = '$company_id'";
                    $query_run_nw_balls_purchased = mysqli_query($con, $query_nw_balls_purchased);
                    if (mysqli_num_rows($query_run_nw_balls_purchased) > 0)
                    {
                        $row_nw_balls_purchased = mysqli_fetch_assoc($query_run_nw_balls_purchased);
                        $nw_balls_purchased_amount = $row_nw_balls_purchased['amount'];
                    }
                    else
                    {
                        $nw_balls_purchased_amount = 0;
                    };
                    
                    $query_nw_balls_sold = "SELECT SUM(si.amount) AS amount FROM sold_items si JOIN
                    purchases p ON si.purchase_id=p.purchase_id WHERE  p.product_id=2 AND 
                    si.date BETWEEN '2000-01-01' AND '$end_date' AND si.company_id = '$company_id'";
                    $query_run_nw_balls_sold = mysqli_query($con, $query_nw_balls_sold);
                    if (mysqli_num_rows($query_run_nw_balls_sold) > 0)
                    {
                        $row_nw_balls_sold = mysqli_fetch_assoc($query_run_nw_balls_sold);
                        $nw_balls_sold_amount = $row_nw_balls_sold['amount'];
                    }
                    else
                    {
                        $nw_balls_sold_amount = 0;
                    };
                    $nw_balls_closing = $nw_balls_purchased_amount - $nw_balls_sold_amount;
                    $nw_balls_closing_f = number_format($nw_balls_closing, 2, '.', ',');
            //BANK

                $sum_nw_bank_balance = 0;
                $query_nw_bank = "SELECT * FROM ledgers WHERE (tb_5 = 7 AND company_id = '$company_id') 
                OR (tb_5 = 7 AND default_status = 'Yes')";
                $query_run_nw_bank = mysqli_query($con, $query_nw_bank);
                if($query_run_nw_bank)
                {
                    while($row_nw_bank = mysqli_fetch_assoc($query_run_nw_bank))
                    {
                        $ledger_id = $row_nw_bank['ledger_id'];
                        $query_nw_bank_trans = "SELECT SUM(amount_debit) AS receipts, SUM(amount_credit) AS payments FROM 
                        transactions WHERE ledger_id = '$ledger_id' AND date BETWEEN '2000-01-01' AND '$end_date' AND deleted='' 
                        AND company_id = '$company_id'";
                        $query_run_nw_bank_trans = mysqli_query($con, $query_nw_bank_trans);
                        if($query_run_nw_bank_trans)
                        {
                            while($row_nw_bank_trans = mysqli_fetch_assoc($query_run_nw_bank_trans))
                            {
                                $nw_bank_balance = $row_nw_bank_trans['receipts']-$row_nw_bank_trans['payments'];
                            };
                        }
                        else
                        {
                            $nw_bank_balance = 0;
                        };
                        $sum_nw_bank_balance = $sum_nw_bank_balance + $nw_bank_balance;
                    };
                }
                else
                {
                    $nw_bank_balance = 0;
                };
                $sum_nw_bank_balance_f = number_format($sum_nw_bank_balance, 2, '.', ',');

            //CASH

                $sum_nw_cash_balance = 0;
                $query_nw_cash = "SELECT * FROM ledgers WHERE (tb_5 = 8 AND company_id = '$company_id') 
                OR (tb_5 = 8 AND default_status = 'Yes')";
                $query_run_nw_cash = mysqli_query($con, $query_nw_cash);
                if($query_run_nw_cash)
                {
                    while($row_nw_cash = mysqli_fetch_assoc($query_run_nw_cash))
                    {
                        $ledger_id = $row_nw_cash['ledger_id'];
                        $query_nw_cash_trans = "SELECT SUM(amount_debit) AS receipts, SUM(amount_credit) AS payments FROM 
                        transactions WHERE ledger_id = '$ledger_id' AND date BETWEEN '2000-01-01' AND '$end_date' AND deleted='' 
                        AND company_id = '$company_id'";
                        $query_run_nw_cash_trans = mysqli_query($con, $query_nw_cash_trans);
                        if($query_run_nw_cash_trans)
                        {
                            while($row_nw_cash_trans = mysqli_fetch_assoc($query_run_nw_cash_trans))
                            {
                                $nw_cash_balance = $row_nw_cash_trans['receipts']-$row_nw_cash_trans['payments'];
                            };
                        }
                        else
                        {
                            $nw_cash_balance = 0;
                        };
                        $sum_nw_cash_balance = $sum_nw_cash_balance + $nw_cash_balance;
                    };
                }
                else
                {
                    $nw_cash_balance = 0;
                };
                $sum_nw_cash_balance_f = number_format($sum_nw_cash_balance, 2, '.', ',');
                
            //MOMO

                $sum_nw_momo_balance = 0;
                $query_nw_momo = "SELECT * FROM ledgers WHERE (tb_5 = 9 AND company_id = '$company_id') 
                OR (tb_5 = 9 AND default_status = 'Yes')";
                $query_run_nw_momo = mysqli_query($con, $query_nw_momo);
                if($query_run_nw_momo)
                {
                    while($row_nw_momo = mysqli_fetch_assoc($query_run_nw_momo))
                    {
                        $ledger_id = $row_nw_momo['ledger_id'];
                        $query_nw_momo_trans = "SELECT SUM(amount_debit) AS receipts, SUM(amount_credit) AS payments FROM 
                        transactions WHERE ledger_id = '$ledger_id' AND date BETWEEN '2000-01-01' AND '$end_date' AND deleted='' AND company_id = '$company_id'";
                        $query_run_nw_momo_trans = mysqli_query($con, $query_nw_momo_trans);
                        if($query_run_nw_momo_trans)
                        {
                            while($row_nw_momo_trans = mysqli_fetch_assoc($query_run_nw_momo_trans))
                            {
                                $nw_momo_balance = $row_nw_momo_trans['receipts']-$row_nw_momo_trans['payments'];
                            };
                        }
                        else
                        {
                            $nw_momo_balance = 0;
                        };
                        $sum_nw_momo_balance = $sum_nw_momo_balance + $nw_momo_balance;
                    };
                }
                else
                {
                    $nw_momo_balance = 0;
                };
                $sum_nw_momo_balance_f = number_format($sum_nw_momo_balance, 2, '.', ',');

            //DEBTORS

                $sum_nw_debtors_balance = 0;
                $query_nw_debtors = "SELECT * FROM ledgers WHERE (tb_4 = 4 AND company_id = '$company_id') 
                OR (tb_4 = 4 AND default_status = 'Yes') OR (tb_4 = 5 AND company_id = '$company_id') 
                OR (tb_4 = 5 AND default_status = 'Yes')";
                $query_run_nw_debtors = mysqli_query($con, $query_nw_debtors);
                if($query_run_nw_debtors)
                {
                    while($row_nw_debtors = mysqli_fetch_assoc($query_run_nw_debtors))
                    {
                        $ledger_id = $row_nw_debtors['ledger_id'];
                        $query_nw_debtors_trans = "SELECT SUM(amount_debit) AS receipts, SUM(amount_credit) AS payments FROM 
                        transactions WHERE ledger_id = '$ledger_id' AND date BETWEEN '2000-01-01' AND '$end_date' AND deleted='' AND  company_id = '$company_id'";
                        $query_run_nw_debtors_trans = mysqli_query($con, $query_nw_debtors_trans);
                        if($query_run_nw_debtors_trans)
                        {
                            while($row_nw_debtors_trans = mysqli_fetch_assoc($query_run_nw_debtors_trans))
                            {
                                $nw_debtors_balance = $row_nw_debtors_trans['receipts']-$row_nw_debtors_trans['payments'];
                            };
                        }
                        else
                        {
                            $nw_debtors_balance = 0;
                        };
                        $sum_nw_debtors_balance = $sum_nw_debtors_balance + $nw_debtors_balance;
                    };
                }
                else
                {
                    $nw_debtors_balance = 0;
                };
                $sum_nw_debtors_balance_f = number_format($sum_nw_debtors_balance, 2, '.', ',');

        //LIABILITIES
            //CREDITORS

                $sum_nw_creditors_balance = 0;
                $query_nw_creditors = "SELECT * FROM ledgers WHERE (tb_4 = 7 AND company_id = '$company_id') 
                OR (tb_4 = 7 AND default_status = 'Yes') OR (tb_4 = 8 AND company_id = '$company_id') 
                OR (tb_4 = 8 AND default_status = 'Yes')";
                $query_run_nw_creditors = mysqli_query($con, $query_nw_creditors);
                if($query_run_nw_creditors)
                {
                    while($row_nw_creditors = mysqli_fetch_assoc($query_run_nw_creditors))
                    {
                        $ledger_id = $row_nw_creditors['ledger_id'];
                        $query_nw_creditors_trans = "SELECT SUM(amount_debit) AS receipts, SUM(amount_credit) AS payments FROM 
                        transactions WHERE ledger_id = '$ledger_id' AND date BETWEEN '2000-01-01' AND '$end_date' AND deleted='' AND company_id = '$company_id'";
                        $query_run_nw_creditors_trans = mysqli_query($con, $query_nw_creditors_trans);
                        if($query_run_nw_creditors_trans)
                        {
                            while($row_nw_creditors_trans = mysqli_fetch_assoc($query_run_nw_creditors_trans))
                            {
                                $nw_creditors_balance = $row_nw_creditors_trans['payments']-$row_nw_creditors_trans['receipts'];
                            };
                        }
                        else
                        {
                            $nw_creditors_balance = 0;
                        };
                        $sum_nw_creditors_balance = $sum_nw_creditors_balance + $nw_creditors_balance;
                    };
                }
                else
                {
                    $nw_creditors_balance = 0;
                };
                $sum_nw_creditors_balance_f = number_format($sum_nw_creditors_balance, 2, '.', ',');

        //PROFIT
        $total_assets = $nw_refined_closing + $nw_balls_closing + $sum_nw_bank_balance + $sum_nw_cash_balance + $sum_nw_momo_balance +
        $sum_nw_debtors_balance;
        $total_liabilities = $sum_nw_creditors_balance;
        $total_net_worth = $total_assets - $total_liabilities;
        $total_assets_f = number_format($total_assets, 2, '.', ',');
        $total_liabilities_f = number_format($total_liabilities, 2, '.', ',');
        $total_net_worth_f = number_format($total_net_worth, 2, '.', ',');
        $net_worth = '<div class="card" style="background-color:#D6EEEE">
            <div class="card-body">
                <h5 class="card-title">Net Worth</h5>
                <table class="table table-hover table-borderless table-sm" id="net_worth_table" width="100%" cellspacing="0">
                    <thead>
                        <tr style="color:black">
                            <th class="action-td" colspan="2">ASSETS</th>
                            <th class="action-td" colspan="2">LIABILITIES</th>
                        </tr>
                        <tr>
                            <th>CLOSING REFINED</th>
                            <th class="amt-td">'.$nw_refined_closing_f.'</th>
                            <th>CLOSING CREDITORS</th>
                            <th class="amt-td">'.$sum_nw_creditors_balance_f.'</th>
                        </tr>
                        <tr>
                            <th>CLOSING BALLS</th>
                            <th class="amt-td">'.$nw_balls_closing_f.'</th>
                            <th>RETAINED PRIFIT</th>
                            <th class="amt-td">0.00</th>
                        </tr>
                        <tr>
                            <th>CLOSING BANK</th>
                            <th class="amt-td">'.$sum_nw_bank_balance_f.'</th>
                        </tr>
                        <tr>
                            <th>CLOSING CASH</th>
                            <th class="amt-td">'.$sum_nw_cash_balance_f.'</th>
                        </tr>
                        <tr>
                            <th>CLOSING MOMO</th>
                            <th class="amt-td">'.$sum_nw_momo_balance_f.'</th>
                        </tr>
                        <tr>
                            <th>CLOSING DEBTORS/CUSTOMERS</th>
                            <th class="amt-td">'.$sum_nw_debtors_balance_f.'</th>
                        </tr>
                        <tr style="color:black">
                            <th>TOTAL ASSETS</th>
                            <th class="amt-td">'.$total_assets_f.'</th>
                            <th>TOTAL LIABILITIES</th>
                            <th class="amt-td">'.$total_liabilities_f.'</th>
                        </tr>
                        <tr style="color:black">
                            <th>NET WORTH</th>
                            <th class="amt-td"></th>
                            <th></th>
                            <th class="amt-td">'.$total_net_worth_f.'</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>';

    
    //PROFITABILITY
        $weight_sold = 0;
        $weight_purchased = 0;
        $amount_sold = 0;
        $amount_purchased = 0;
        $query_sales = "SELECT * FROM sales WHERE date BETWEEN '$start_date' AND '$end_date'
        AND company_id = '$company_id'";
        $query_run_sales = mysqli_query($con, $query_sales);
        if($query_run_sales)
        {
            while($row_sales = mysqli_fetch_assoc($query_run_sales))
            {
                $weight_sold = $weight_sold + $row_sales['weight'];
                $amount_sold = $amount_sold + $row_sales['amount'];
            };
        }
        else
        {
            $weight_sold = 0;
            $amount_sold = 0;
        };

        $query_sold = "SELECT * FROM sold_items WHERE  date BETWEEN '$start_date' AND '$end_date'
        AND company_id = '$company_id'";
        $query_run_sold = mysqli_query($con, $query_sold);
        if (mysqli_num_rows($query_run_sold) > 0)
        {
            while($row_sold = mysqli_fetch_assoc($query_run_sold))
            {
                $weight_purchased = $weight_purchased + $row_sold['grams'];
                $amount_purchased = $amount_purchased + $row_sold['amount'];
            };
        }
        else
        {
            $weight_purchased = 0;
            $amount_purchased = 0;
        };
        $profit = $amount_sold - $amount_purchased;
        $amount_sold_f = number_format($amount_sold, 2, '.', ',');
        $amount_purchased_f = number_format($amount_purchased, 2, '.', ',');
        $profit_f = number_format($profit, 2, '.', ',');
        $profitability = '<div class="card" style="background-color:#D6EEEE">
            <div class="card-body">
                <h5 class="card-title">Profitability</h5>
                <table class="table table-hover table-borderless table-sm" id="momo_balance_table" width="100%" cellspacing="0">
                    <thead>
                        <tr style="color:black">
                            <th>Total Sales</th>
                            <th class="amt-td">'.$amount_sold_f.'</th>
                        </tr>
                        <tr>
                            <th>C.O.G.S</th>
                            <th class="amt-td">'.$amount_purchased_f.'</th>
                        </tr>
                        <tr style="color:black">
                            <th>Profit</th>
                            <th class="amt-td">'.$profit_f.'</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>';

    //REFINED
        $refined_opening = 0;
        $refined_closing = 0;
        $refined_weight_sold_op = 0;
        $refined_amount_sold_op = 0;
        $refined_water_sold_op = 0;
        $refined_weight_sold = 0;
        $refined_amount_sold = 0;
        $refined_water_sold = 0;
        $refined_weight_purchased_op = 0;
        $refined_amount_purchased_op = 0;
        $refined_water_purchased_op = 0;
        $refined_weight_purchased = 0;
        $refined_amount_purchased = 0;
        $refined_water_purchased = 0;

        $query_sales = "SELECT SUM(weight) AS weight_sold, SUM(amount) AS amount_sold, SUM(water) AS water 
        FROM sales WHERE date < '$start_date' AND company_id = '$company_id' AND product_id=1 GROUP BY product_id";
        $query_run_sales = mysqli_query($con, $query_sales);
        if($query_run_sales)
        {
            while($row_sales = mysqli_fetch_assoc($query_run_sales))
            {
                $refined_weight_sold_op = $refined_weight_sold_op + $row_sales['weight_sold'];
                $refined_amount_sold_op = $refined_amount_sold_op + $row_sales['amount_sold'];
                $refined_water_sold_op = $refined_water_sold_op + $row_sales['water'];
            };
        }
        else
        {
            $refined_weight_sold_op = 0;
            $refined_amount_sold_op = 0;
            $refined_water_sold_op = 0;
        };
        
        $query_sales = "SELECT SUM(weight) AS weight_sold, SUM(amount) AS amount_sold, SUM(water) AS water 
        FROM sales WHERE date BETWEEN '$start_date' AND '$end_date' AND company_id = '$company_id' AND product_id=1 GROUP BY product_id";
        $query_run_sales = mysqli_query($con, $query_sales);
        if($query_run_sales)
        {
            while($row_sales = mysqli_fetch_assoc($query_run_sales))
            {
                $refined_weight_sold = $refined_weight_sold + $row_sales['weight_sold'];
                $refined_amount_sold = $refined_amount_sold + $row_sales['amount_sold'];
                $refined_water_sold = $refined_water_sold + $row_sales['water'];
            };
        }
        else
        {
            $refined_weight_sold = 0;
            $refined_amount_sold = 0;
            $refined_water_sold = 0;
        };

        $query_sales = "SELECT SUM(weight) AS weight_purchased, SUM(amount) AS amount_purchased, SUM(water) AS water_purchased 
        FROM purchases WHERE date < '$start_date' AND company_id = '$company_id' AND product_id=1 GROUP BY product_id";
        $query_run_sales = mysqli_query($con, $query_sales);
        if($query_run_sales)
        {
            while($row_sales = mysqli_fetch_assoc($query_run_sales))
            {
                $refined_weight_purchased_op = $refined_weight_purchased_op + $row_sales['weight_purchased'];
                $refined_amount_purchased_op = $refined_amount_purchased_op + $row_sales['amount_purchased'];
                $refined_water_purchased_op = $refined_water_purchased_op + $row_sales['water_purchased'];
            };
        }
        else
        {
            $refined_weight_purchased_op = 0;
            $refined_amount_purchased_op = 0;
            $refined_water_purchased_op = 0;
        };
        
        $query_sales = "SELECT SUM(weight) AS weight_purchased, SUM(amount) AS amount_purchased, SUM(water) AS water_purchased 
        FROM purchases WHERE date BETWEEN '$start_date' AND '$end_date' AND company_id = '$company_id' AND product_id=1 GROUP BY product_id";
        $query_run_sales = mysqli_query($con, $query_sales);
        if($query_run_sales)
        {
            while($row_sales = mysqli_fetch_assoc($query_run_sales))
            {
                $refined_weight_purchased = $refined_weight_purchased + $row_sales['weight_purchased'];
                $refined_amount_purchased = $refined_amount_purchased + $row_sales['amount_purchased'];
                $refined_water_purchased = $refined_water_purchased + $row_sales['water_purchased'];
            };
        }
        else
        {
            $refined_weight_purchased = 0;
            $refined_amount_purchased = 0;
            $refined_water_purchased = 0;
        };
        $refined_opening = round(($refined_weight_purchased_op - $refined_weight_sold_op),2);
        $refined_closing = $refined_opening + $refined_weight_purchased - $refined_weight_sold;
        
        $refined_amount_purchased_f = number_format($refined_amount_purchased, 2, '.', ',');
        $refined = '<div class="card" style="background-color:#D6EEEE">
            <div class="card-body">
                <h5 class="card-title">Refined</h5>
                <table class="table table-hover table-borderless table-sm" id="refined_balance_table" width="100%" cellspacing="0">
                    <thead>
                        <tr style="color:black">
                            <th>Opening Grams</th>
                            <th class="amt-td">'.$refined_opening.'</th>
                            <th class="amt-td">0.00</th>
                        </tr>
                        <tr>
                            <th>Total Purchases</th>
                            <th class="amt-td">'.$refined_weight_purchased.'</th>
                            <th class="amt-td">'.$refined_amount_purchased_f.'</th>
                        </tr>
                        <tr>
                            <th>Total Sales</th>
                            <th class="amt-td">'.$refined_weight_sold.'</th>
                            <th class="amt-td"></th>
                        </tr>
                        <tr style="color:black">
                            <th>Closing Grams</th>
                            <th class="amt-td">'.$refined_closing.'</th>
                            <th class="amt-td"></th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>';

    //BALLS
        $balls_opening = 0;
        $balls_closing = 0;
        $balls_weight_sold_op = 0;
        $balls_amount_sold_op = 0;
        $balls_water_sold_op = 0;
        $balls_weight_sold = 0;
        $balls_amount_sold = 0;
        $balls_water_sold = 0;
        $balls_weight_purchased_op = 0;
        $balls_amount_purchased_op = 0;
        $balls_water_purchased_op = 0;
        $balls_weight_purchased = 0;
        $balls_amount_purchased = 0;
        $balls_water_purchased = 0;

        $query_sales = "SELECT SUM(weight) AS weight_sold, SUM(amount) AS amount_sold, SUM(water) AS water 
        FROM sales WHERE date < '$start_date' AND company_id = '$company_id' AND product_id=2 GROUP BY product_id";
        $query_run_sales = mysqli_query($con, $query_sales);
        if($query_run_sales)
        {
            while($row_sales = mysqli_fetch_assoc($query_run_sales))
            {
                $balls_weight_sold_op = $balls_weight_sold_op + $row_sales['weight_sold'];
                $balls_amount_sold_op = $balls_amount_sold_op + $row_sales['amount_sold'];
                $balls_water_sold_op = $balls_water_sold_op + $row_sales['water'];
            };
        }
        else
        {
            $balls_weight_sold_op = 0;
            $balls_amount_sold_op = 0;
            $balls_water_sold_op = 0;
        };
        
        $query_sales = "SELECT SUM(weight) AS weight_sold, SUM(amount) AS amount_sold, SUM(water) AS water 
        FROM sales WHERE date BETWEEN '$start_date' AND '$end_date' AND company_id = '$company_id' AND product_id=2 GROUP BY product_id";
        $query_run_sales = mysqli_query($con, $query_sales);
        if($query_run_sales)
        {
            while($row_sales = mysqli_fetch_assoc($query_run_sales))
            {
                $balls_weight_sold = $balls_weight_sold + $row_sales['weight_sold'];
                $balls_amount_sold = $balls_amount_sold + $row_sales['amount_sold'];
                $balls_water_sold = $balls_water_sold + $row_sales['water'];
            };
        }
        else
        {
            $balls_weight_sold = 0;
            $balls_amount_sold = 0;
            $balls_water_sold = 0;
        };

        $query_sales = "SELECT SUM(weight) AS weight_purchased, SUM(amount) AS amount_purchased, SUM(water) AS water_purchased 
        FROM purchases WHERE date < '$start_date' AND company_id = '$company_id' AND product_id=2 GROUP BY product_id";
        $query_run_sales = mysqli_query($con, $query_sales);
        if($query_run_sales)
        {
            while($row_sales = mysqli_fetch_assoc($query_run_sales))
            {
                $balls_weight_purchased_op = $balls_weight_purchased_op + $row_sales['weight_purchased'];
                $balls_amount_purchased_op = $balls_amount_purchased_op + $row_sales['amount_purchased'];
                $balls_water_purchased_op = $balls_water_purchased_op + $row_sales['water_purchased'];
            };
        }
        else
        {
            $balls_weight_purchased_op = 0;
            $balls_amount_purchased_op = 0;
            $balls_water_purchased_op = 0;
        };
        
        $query_sales = "SELECT SUM(weight) AS weight_purchased, SUM(amount) AS amount_purchased, SUM(water) AS water_purchased 
        FROM purchases WHERE date BETWEEN '$start_date' AND '$end_date' AND company_id = '$company_id' AND product_id=2 GROUP BY product_id";
        $query_run_sales = mysqli_query($con, $query_sales);
        if($query_run_sales)
        {
            while($row_sales = mysqli_fetch_assoc($query_run_sales))
            {
                $balls_weight_purchased = $balls_weight_purchased + $row_sales['weight_purchased'];
                $balls_amount_purchased = $balls_amount_purchased + $row_sales['amount_purchased'];
                $balls_water_purchased = $balls_water_purchased + $row_sales['water_purchased'];
            };
        }
        else
        {
            $balls_weight_purchased = 0;
            $balls_amount_purchased = 0;
            $balls_water_purchased = 0;
        };

        $balls_opening = round(($balls_weight_purchased_op - $balls_weight_sold_op),2);
        $balls_closing = $balls_opening + $balls_weight_purchased - $balls_weight_sold;
        $balls = '<div class="card" style="background-color:#D6EEEE">
            <div class="card-body">
                <h5 class="card-title">Balls</h5>
                <table class="table table-hover table-borderless table-sm" id="balls_balance_table" width="100%" cellspacing="0">
                    <thead>
                        <tr style="color:black">
                            <th>Opening Grams</th>
                            <th class="amt-td">'.$balls_opening.'</th>
                        </tr>
                        <tr>
                            <th>Total Purchases</th>
                            <th class="amt-td">'.$balls_weight_purchased.'</th>
                        </tr>
                        <tr>
                            <th>Total Sales</th>
                            <th class="amt-td">'.$balls_weight_sold.'</th>
                        </tr>
                        <tr style="color:black">
                            <th>Closing Grams</th>
                            <th class="amt-td">'.$balls_closing.'</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>';

    //CASH
        $opening_balance = 0;
        $closing_balance = 0;
        $total_receipts = 0;
        $total_payments = 0;
        $sum_opening_balance = 0;
        $sum_closing_balance = 0;
        $sum_total_receipts = 0;
        $sum_total_payments = 0;

        $query_cash = "SELECT * FROM ledgers WHERE (tb_5 = 8 AND company_id = '$company_id') 
        OR (tb_5 = 8 AND default_status = 'Yes')";
        $query_run_cash = mysqli_query($con, $query_cash);
        if($query_run_cash)
        {
            while($row_cash = mysqli_fetch_assoc($query_run_cash))
            {
                $ledger_id = $row_cash['ledger_id'];
                $query_trans_op = "SELECT SUM(amount_debit) AS receipts, SUM(amount_credit) AS payments FROM 
                transactions WHERE ledger_id = '$ledger_id' AND date < '$start_date' AND deleted='' AND company_id = '$company_id'";
                $query_run_trans_op = mysqli_query($con, $query_trans_op);
                if($query_run_trans_op)
                {
                    while($row_trans_op = mysqli_fetch_assoc($query_run_trans_op))
                    {
                        $opening_balance = $row_trans_op['receipts']-$row_trans_op['payments'];
                    };
                }
                else
                {
                    $opening_balance = 0;
                };

                $query_trans_cur = "SELECT SUM(amount_debit) AS receipts, SUM(amount_credit) AS payments FROM 
                transactions WHERE ledger_id = '$ledger_id' AND date BETWEEN '$start_date' AND '$end_date' 
                AND deleted='' AND  company_id = '$company_id'";
                $query_run_trans_cur = mysqli_query($con, $query_trans_cur);
                if($query_run_trans_cur)
                {
                    while($row_trans_cur = mysqli_fetch_assoc($query_run_trans_cur))
                    {
                        $total_receipts = $row_trans_cur['receipts'];
                        $total_payments = $row_trans_cur['payments'];
                    };
                }
                else
                {
                    $total_receipts = 0;
                    $total_payments = 0;
                };
                $closing_balance = $opening_balance + $total_receipts - $total_payments;
                $sum_opening_balance = $sum_opening_balance + $opening_balance;
                $sum_total_receipts = $sum_total_receipts + $total_receipts;
                $sum_total_payments = $sum_total_payments + $total_payments;
                $sum_closing_balance = $sum_closing_balance + $closing_balance;
            };
        }
        else
        {
            $opening_balance = 0;
            $total_receipts = 0;
            $total_payments = 0;
            $closing_balance = 0;
            $sum_opening_balance = 0;
            $sum_total_receipts = 0;
            $sum_total_payments = 0;
            $sum_closing_balance = 0;
        };
        $sum_opening_balance_f = number_format($sum_opening_balance, 2, '.', ',');
        $sum_total_receipts_f = number_format($sum_total_receipts, 2, '.', ',');
        $sum_total_payments_f = number_format($sum_total_payments, 2, '.', ',');
        $sum_closing_balance_f = number_format($sum_closing_balance, 2, '.', ',');
        
        $cash = '<div class="card" style="background-color:#D6EEEE">
            <div class="card-body">
                <h5 class="card-title">Cash</h5>
                <table class="table table-hover table-borderless table-sm" id="cash_balance_table" width="100%" cellspacing="0">
                    <thead>
                        <tr style="color:black">
                            <th>Opening Bal</th>
                            <th class="amt-td">'.$sum_opening_balance_f.'</th>
                        </tr>
                        <tr>
                            <th>Total Receipts</th>
                            <th class="amt-td">'.$sum_total_receipts_f.'</th>
                        </tr>
                        <tr>
                            <th>Total Payments</th>
                            <th class="amt-td">'.$sum_total_payments_f.'</th>
                        </tr>
                        <tr style="color:black">
                            <th>Closing Bal</th>
                            <th class="amt-td">'.$sum_closing_balance_f.'</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>';

    //MOMO
        $opening_balance = 0;
        $closing_balance = 0;
        $total_receipts = 0;
        $total_payments = 0;
        $sum_opening_balance = 0;
        $sum_closing_balance = 0;
        $sum_total_receipts = 0;
        $sum_total_payments = 0;

        $query_cash = "SELECT * FROM ledgers WHERE (tb_5 = 9 AND company_id = '$company_id') 
        OR (tb_5 = 9 AND default_status = 'Yes')";
        $query_run_cash = mysqli_query($con, $query_cash);
        if($query_run_cash)
        {
            while($row_cash = mysqli_fetch_assoc($query_run_cash))
            {
                $ledger_id = $row_cash['ledger_id'];
                $query_trans_op = "SELECT SUM(amount_debit) AS receipts, SUM(amount_credit) AS payments FROM 
                transactions WHERE ledger_id = '$ledger_id' AND date < '$start_date' AND deleted='' AND  company_id = '$company_id'";
                $query_run_trans_op = mysqli_query($con, $query_trans_op);
                if($query_run_trans_op)
                {
                    while($row_trans_op = mysqli_fetch_assoc($query_run_trans_op))
                    {
                        $opening_balance = $row_trans_op['receipts']-$row_trans_op['payments'];
                    };
                }
                else
                {
                    $opening_balance = 0;
                };

                $query_trans_cur = "SELECT SUM(amount_debit) AS receipts, SUM(amount_credit) AS payments FROM 
                transactions WHERE ledger_id = '$ledger_id' AND date BETWEEN '$start_date' AND '$end_date' 
                AND deleted='' AND company_id = '$company_id'";
                $query_run_trans_cur = mysqli_query($con, $query_trans_cur);
                if($query_run_trans_cur)
                {
                    while($row_trans_cur = mysqli_fetch_assoc($query_run_trans_cur))
                    {
                        $total_receipts = $row_trans_cur['receipts'];
                        $total_payments = $row_trans_cur['payments'];
                    };
                }
                else
                {
                    $total_receipts = 0;
                    $total_payments = 0;
                };
                $closing_balance = $opening_balance + $total_receipts - $total_payments;
                $sum_opening_balance = $sum_opening_balance + $opening_balance;
                $sum_total_receipts = $sum_total_receipts + $total_receipts;
                $sum_total_payments = $sum_total_payments + $total_payments;
                $sum_closing_balance = $sum_closing_balance + $closing_balance;
            };
        }
        else
        {
            $opening_balance = 0;
            $total_receipts = 0;
            $total_payments = 0;
            $closing_balance = 0;
            $sum_opening_balance = 0;
            $sum_total_receipts = 0;
            $sum_total_payments = 0;
            $sum_closing_balance = 0;
        };
        $sum_opening_balance_f = number_format($sum_opening_balance, 2, '.', ',');
        $sum_total_receipts_f = number_format($sum_total_receipts, 2, '.', ',');
        $sum_total_payments_f = number_format($sum_total_payments, 2, '.', ',');
        $sum_closing_balance_f = number_format($sum_closing_balance, 2, '.', ',');
        
        $momo = '<div class="card" style="background-color:#D6EEEE">
            <div class="card-body">
                <h5 class="card-title">MoMo</h5>
                <table class="table table-hover table-borderless table-sm" id="momo_balance_table" width="100%" cellspacing="0">
                    <thead>
                        <tr style="color:black">
                            <th>Opening Bal</th>
                            <th class="amt-td">'.$sum_opening_balance_f.'</th>
                        </tr>
                        <tr>
                            <th>Total Receipts</th>
                            <th class="amt-td">'.$sum_total_receipts_f.'</th>
                        </tr>
                        <tr>
                            <th>Total Payments</th>
                            <th class="amt-td">'.$sum_total_payments_f.'</th>
                        </tr>
                        <tr style="color:black">
                            <th>Closing Bal</th>
                            <th class="amt-td">'.$sum_closing_balance_f.'</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>';
        
    //BANK
        $opening_balance = 0;
        $closing_balance = 0;
        $total_receipts = 0;
        $total_payments = 0;
        
        $sum_opening_balance = 0;
        $sum_closing_balance = 0;
        $sum_total_receipts = 0;
        $sum_total_payments = 0;

        $query_cash = "SELECT * FROM ledgers WHERE (tb_5 = 7 AND company_id = '$company_id') 
        OR (tb_5 = 7 AND default_status = 'Yes')";
        $query_run_cash = mysqli_query($con, $query_cash);
        if($query_run_cash)
        {
            while($row_cash = mysqli_fetch_assoc($query_run_cash))
            {
                $ledger_id = $row_cash['ledger_id'];
                $query_trans_op = "SELECT SUM(amount_debit) AS receipts, SUM(amount_credit) AS payments FROM 
                transactions WHERE ledger_id = '$ledger_id' AND date < '$start_date' AND deleted='' AND company_id = '$company_id'";
                $query_run_trans_op = mysqli_query($con, $query_trans_op);
                if($query_run_trans_op)
                {
                    while($row_trans_op = mysqli_fetch_assoc($query_run_trans_op))
                    {
                        $opening_balance = $row_trans_op['receipts']-$row_trans_op['payments'];
                    };
                }
                else
                {
                    $opening_balance = 0;
                };

                $query_trans_cur = "SELECT SUM(amount_debit) AS receipts, SUM(amount_credit) AS payments FROM 
                transactions WHERE ledger_id = '$ledger_id' AND date BETWEEN '$start_date' AND '$end_date' 
                AND deleted='' AND  company_id = '$company_id'";
                $query_run_trans_cur = mysqli_query($con, $query_trans_cur);
                if($query_run_trans_cur)
                {
                    while($row_trans_cur = mysqli_fetch_assoc($query_run_trans_cur))
                    {
                        $total_receipts = $row_trans_cur['receipts'];
                        $total_payments = $row_trans_cur['payments'];
                    };
                }
                else
                {
                    $total_receipts = 0;
                    $total_payments = 0;
                };
                $closing_balance = $opening_balance + $total_receipts - $total_payments;
                $sum_opening_balance = $sum_opening_balance + $opening_balance;
                $sum_total_receipts = $sum_total_receipts + $total_receipts;
                $sum_total_payments = $sum_total_payments + $total_payments;
                $sum_closing_balance = $sum_closing_balance + $closing_balance;
            };
        }
        else
        {
            $opening_balance = 0;
            $total_receipts = 0;
            $total_payments = 0;
            $closing_balance = 0;
            $sum_opening_balance = 0;
            $sum_total_receipts = 0;
            $sum_total_payments = 0;
            $sum_closing_balance = 0;
        };
        $sum_opening_balance_f = number_format($sum_opening_balance, 2, '.', ',');
        $sum_total_receipts_f = number_format($sum_total_receipts, 2, '.', ',');
        $sum_total_payments_f = number_format($sum_total_payments, 2, '.', ',');
        $sum_closing_balance_f = number_format($sum_closing_balance, 2, '.', ',');
        
        $bank = '<div class="card" style="background-color:#D6EEEE">
            <div class="card-body">
                <h5 class="card-title">Bank</h5>
                <table class="table table-hover table-borderless table-sm" id="bank_balance_table" width="100%" cellspacing="0">
                    <thead>
                        <tr style="color:black">
                            <th>Opening Bal</th>
                            <th class="amt-td">'.$sum_opening_balance_f.'</th>
                        </tr>
                        <tr>
                            <th>Total Receipts</th>
                            <th class="amt-td">'.$sum_total_receipts_f.'</th>
                        </tr>
                        <tr>
                            <th>Total Payments</th>
                            <th class="amt-td">'.$sum_total_payments_f.'</th>
                        </tr>
                        <tr style="color:black">
                            <th>Closing Bal</th>
                            <th class="amt-td">'.$sum_closing_balance_f.'</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>';

    //DEBTORS
        $opening_balance = 0;
        $closing_balance = 0;
        $total_receipts = 0;
        $total_payments = 0;
        $sum_opening_balance = 0;
        $sum_closing_balance = 0;
        $sum_total_receipts = 0;
        $sum_total_payments = 0;

        $query_cash = "SELECT * FROM ledgers WHERE (tb_4 = 4 AND company_id = '$company_id') 
        OR (tb_4 = 4 AND default_status = 'Yes')";
        $query_run_cash = mysqli_query($con, $query_cash);
        if($query_run_cash)
        {
            while($row_cash = mysqli_fetch_assoc($query_run_cash))
            {
                $ledger_id = $row_cash['ledger_id'];
                $query_trans_op = "SELECT SUM(amount_debit) AS receipts, SUM(amount_credit) AS payments FROM 
                transactions WHERE ledger_id = '$ledger_id' AND date < '$start_date' AND deleted='' AND company_id = '$company_id'";
                $query_run_trans_op = mysqli_query($con, $query_trans_op);
                if($query_run_trans_op)
                {
                    while($row_trans_op = mysqli_fetch_assoc($query_run_trans_op))
                    {
                        $opening_balance = $row_trans_op['receipts']-$row_trans_op['payments'];
                    };
                }
                else
                {
                    $opening_balance = 0;
                };

                $query_trans_cur = "SELECT SUM(amount_debit) AS receipts, SUM(amount_credit) AS payments FROM 
                transactions WHERE ledger_id = '$ledger_id' AND date BETWEEN '$start_date' AND '$end_date' 
                AND deleted='' AND company_id = '$company_id'";
                $query_run_trans_cur = mysqli_query($con, $query_trans_cur);
                if($query_run_trans_cur)
                {
                    while($row_trans_cur = mysqli_fetch_assoc($query_run_trans_cur))
                    {
                        $total_receipts = $row_trans_cur['receipts'];
                        $total_payments = $row_trans_cur['payments'];
                    };
                }
                else
                {
                    $total_receipts = 0;
                    $total_payments = 0;
                };
                $closing_balance = $opening_balance + $total_receipts - $total_payments;
                $sum_opening_balance = $sum_opening_balance + $opening_balance;
                $sum_closing_balance = $sum_closing_balance + $closing_balance;
                $sum_total_receipts = $sum_total_receipts + $total_receipts;
                $sum_total_payments = $sum_total_payments + $total_payments;
            };
        }
        else
        {
            $opening_balance = 0;
            $total_receipts = 0;
            $total_payments = 0;
            $closing_balance = 0;
            $sum_opening_balance = 0;
            $sum_closing_balance = 0;
            $sum_total_receipts = 0;
            $sum_total_payments = 0;
        };
        $sum_opening_balance_f = number_format($sum_opening_balance, 2, '.', ',');
        $sum_total_receipts_f = number_format($sum_total_receipts, 2, '.', ',');
        $sum_total_payments_f = number_format($sum_total_payments, 2, '.', ',');
        $sum_closing_balance_f = number_format($sum_closing_balance, 2, '.', ',');
        
        $debtors = '<div class="card" style="background-color:#D6EEEE">
            <div class="card-body">
                <h5 class="card-title">Debtors</h5>
                <table class="table table-hover table-borderless table-sm" id="debtors_balance_table" width="100%" cellspacing="0">
                    <thead>
                        <tr style="color:black">
                            <th>Opening Bal</th>
                            <th class="amt-td">'.$sum_opening_balance_f.'</th>
                        </tr>
                        <tr>
                            <th>Total Receipts</th>
                            <th class="amt-td">'.$sum_total_receipts_f.'</th>
                        </tr>
                        <tr>
                            <th>Total Payments</th>
                            <th class="amt-td">'.$sum_total_payments_f.'</th>
                        </tr>
                        <tr style="color:black">
                            <th>Closing Bal</th>
                            <th class="amt-td">'.$sum_closing_balance_f.'</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>';
        
    //CREDITORS
        $opening_balance = 0;
        $closing_balance = 0;
        $total_receipts = 0;
        $total_payments = 0;
        $sum_opening_balance = 0;
        $sum_closing_balance = 0;
        $sum_total_receipts = 0;
        $sum_total_payments = 0;

        $query_cash = "SELECT * FROM ledgers WHERE (tb_4 = 7 AND company_id = '$company_id') 
        OR (tb_4 = 7 AND default_status = 'Yes') OR (tb_4 = 8 AND company_id = '$company_id') 
        OR (tb_4 = 8 AND default_status = 'Yes')";
        $query_run_cash = mysqli_query($con, $query_cash);
        if($query_run_cash)
        {
            while($row_cash = mysqli_fetch_assoc($query_run_cash))
            {
                $ledger_id = $row_cash['ledger_id'];
                $query_trans_op = "SELECT SUM(amount_debit) AS receipts, SUM(amount_credit) AS payments FROM 
                transactions WHERE ledger_id = '$ledger_id' AND date < '$start_date' AND deleted='' AND company_id = '$company_id'";
                $query_run_trans_op = mysqli_query($con, $query_trans_op);
                if($query_run_trans_op)
                {
                    while($row_trans_op = mysqli_fetch_assoc($query_run_trans_op))
                    {
                        $opening_balance = $row_trans_op['payments'] - $row_trans_op['receipts'];
                    };
                }
                else
                {
                    $opening_balance = 0;
                };
                
                $query_trans_cur = "SELECT SUM(amount_debit) AS receipts, SUM(amount_credit) AS payments FROM 
                transactions WHERE ledger_id = '$ledger_id' AND date BETWEEN '$start_date' AND '$end_date' 
                AND deleted='' AND  company_id = '$company_id'";
                $query_run_trans_cur = mysqli_query($con, $query_trans_cur);
                if($query_run_trans_cur)
                {
                    while($row_trans_cur = mysqli_fetch_assoc($query_run_trans_cur))
                    {
                        $total_receipts = $row_trans_cur['receipts'];
                        $total_payments = $row_trans_cur['payments'];
                    };
                }
                else
                {
                    $total_receipts = 0;
                    $total_payments = 0;
                };
                $sum_opening_balance = $sum_opening_balance + $opening_balance;
                $sum_total_receipts = $sum_total_receipts + $total_receipts;
                $sum_total_payments = $sum_total_payments + $total_payments;
                $closing_balance = $opening_balance + $total_payments - $total_receipts;
                $sum_closing_balance = $sum_closing_balance + $closing_balance;
            };
        }
        else
        {
            $opening_balance = 0;
            $total_receipts = 0;
            $total_payments = 0;
            $closing_balance = 0;
            $sum_opening_balance = 0;
            $sum_total_receipts = 0;
            $sum_total_payments = 0;
            $sum_closing_balance = 0;
        };

        $sum_opening_balance_f = number_format($sum_opening_balance, 2, '.', ',');
        $sum_total_receipts_f = number_format($sum_total_receipts, 2, '.', ',');
        $sum_total_payments_f = number_format($sum_total_payments, 2, '.', ',');
        $sum_closing_balance_f = number_format($sum_closing_balance, 2, '.', ',');
        
        $creditors = '<div class="card" style="background-color:#D6EEEE">
            <div class="card-body">
                <h5 class="card-title">Creditors</h5>
                <table class="table table-hover table-borderless table-sm" id="creditors_balance_table" width="100%" cellspacing="0">
                    <thead>
                        <tr style="color:black">
                            <th>Opening Bal</th>
                            <th class="amt-td">'.$sum_opening_balance_f.'</th>
                        </tr>
                        <tr>
                            <th>Total Receipts</th>
                            <th class="amt-td">'.$sum_total_payments_f.'</th>
                        </tr>
                        <tr>
                            <th>Total Payments</th>
                            <th class="amt-td">'.$sum_total_receipts_f.'</th>
                        </tr>
                        <tr style="color:black">
                            <th>Closing Bal</th>
                            <th class="amt-td">'.$sum_closing_balance_f.'</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>';
        
    //EXPENSES
        $opening_balance = 0;
        $closing_balance = 0;
        $total_receipts = 0;
        $total_payments = 0;
        $sum_opening_balance = 0;
        $sum_closing_balance = 0;
        $sum_total_receipts = 0;
        $sum_total_payments = 0;

        $sql = "SELECT * FROM ledgers WHERE ((tb_3 = ? OR tb_3 = ? AND tb_3 = ?) AND company_id = ?) 
        OR ((tb_3 = ? OR tb_3 = ? AND tb_3 = ?) AND default_status = ?)";
        $tb_3_a = 7;
        $tb_3_b = 8;
        $tb_3_c = 9;
        $default_status ='Yes';
        $stmt = $con->prepare($sql); 
        $stmt->bind_param("iiiiiiis", $tb_3_a,$tb_3_b, $tb_3_c, $company_id,$tb_3_a, $tb_3_b, $tb_3_c, $default_status);
        $stmt->execute();
        $query_run_cash = $stmt->get_result();

        if($query_run_cash->num_rows > 0)
        {
            while($row_cash = $query_run_cash->fetch_assoc())
            {
                $ledger_id = $row_cash['ledger_id'];
                $sql = "SELECT SUM(amount_debit) AS receipts, SUM(amount_credit) AS payments FROM 
                transactions WHERE ledger_id = ? AND date < ? AND deleted=? AND company_id = ?";
                $deleted ='';
                $stmt = $con->prepare($sql); 
                $stmt->bind_param("issi", $ledger_id,$start_date,$deleted,$company_id);
                $stmt->execute();
                $query_run_trans_op = $stmt->get_result();

                if($query_run_trans_op->num_rows > 0)
                {
                    while($row_trans_op = $query_run_trans_op->fetch_assoc())
                    {
                        $opening_balance = $row_trans_op['payments'] - $row_trans_op['receipts'];
                    };
                }
                else
                {
                    $opening_balance = 0;
                };

                $sql = "SELECT SUM(amount_debit) AS receipts, SUM(amount_credit) AS payments FROM 
                transactions WHERE ledger_id = ? AND date BETWEEN ? AND ? 
                AND deleted=? AND company_id = ?";
                $deleted ='';
                $stmt = $con->prepare($sql); 
                $stmt->bind_param("isssi", $ledger_id,$start_date,$end_date,$deleted,$company_id);
                $stmt->execute();
                $query_run_trans_cur = $stmt->get_result();

                if($query_run_trans_cur->num_rows > 0)
                {
                    while($row_trans_cur = $query_run_trans_cur->fetch_assoc())
                    {
                        $total_receipts = $row_trans_cur['receipts'];
                        $total_payments = $row_trans_cur['payments'];
                    };
                }
                else
                {
                    $total_receipts = 0;
                    $total_payments = 0;
                };
                $closing_balance = $opening_balance + $total_receipts - $total_payments;
                $sum_opening_balance = $sum_opening_balance + $opening_balance;
                $sum_total_receipts = $sum_total_receipts + $total_receipts;
                $sum_total_payments = $sum_total_payments + $total_payments;
                $sum_closing_balance = $sum_closing_balance + $closing_balance;
            };
        }
        else
        {
            $opening_balance = 0;
            $total_receipts = 0;
            $total_payments = 0;
            $closing_balance = 0;
            $sum_opening_balance = 0;
            $sum_total_receipts = 0;
            $sum_total_payments = 0;
            $sum_closing_balance = 0;
        };
        $sum_opening_balance_f = number_format($sum_opening_balance, 2, '.', ',');
        $sum_total_receipts_f = number_format($sum_total_receipts, 2, '.', ',');
        $sum_total_payments_f = number_format($sum_total_payments, 2, '.', ',');
        $sum_closing_balance_f = number_format($sum_closing_balance, 2, '.', ',');
        
        $expenses = '<div class="card" style="background-color:#D6EEEE">
            <div class="card-body">
                <h5 class="card-title">Expenses</h5>
                <table class="table table-hover table-borderless table-sm" id="expenses_balance_table" width="100%" cellspacing="0">
                    <thead>
                        <tr style="color:black">
                            <th>Opening Bal</th>
                            <th class="amt-td">'.$sum_opening_balance_f.'</th>
                        </tr>
                        <tr>
                            <th>Total Refund</th>
                            <th class="amt-td">'.$sum_total_receipts_f.'</th>
                        </tr>
                        <tr>
                            <th>Total Expenses</th>
                            <th class="amt-td">'.$sum_total_payments_f.'</th>
                        </tr>
                        <tr style="color:black">
                            <th>Closing Bal</th>
                            <th class="amt-td">'.$sum_closing_balance_f.'</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>';
    array_push($dashboard, $profitability, $refined, $balls, $cash, $momo, $bank, $debtors,
    $creditors, $expenses, $net_worth, $branch_goods);
    */
    array_push($dashboard, $branch_goods);
    echo json_encode($dashboard);