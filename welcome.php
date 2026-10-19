<?php
    //session_start();
    ini_set('session.cookie_lifetime', 0);
    require($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/auth.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/header_main.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/navbar_main.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/access_log.php');
	log_access();
?>
<style type="text/css">
    input {
            border-top-style: hidden;
            border-right-style: hidden;
            border-left-style: hidden;
            border-bottom-style: hidden;
            background-color: #ffffff;
          }
    .amt-td {text-align:right;}
    .action-td {text-align:center;}
  </style>
    <div class="container-fluid py-5">
        <div class="card shadow md-4 mx-auto" style="width: 95%;">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">
                    <a href="">Welcome</a>
                </h3>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-12 mb-12 text-right">
                        <?php
                            if($_SESSION['company_type_id'] < 6)
                            {
                                echo '<a id="goldbod_price_link" href="#"><strong>Goldbod Price</strong></a>';
                            };
                        ?>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3 mb-3 align-items-center">
                        <a id="receipt_list_btn" href="/layout/vouchers/receipt_list.php" class="btn btn-primary btn-lg btn-block text-white">Receipt</a>
                    </div>
                    <div class="col-md-3 mb-3">
                        <a id="payment_list_btn" href="/layout/vouchers/payment_list.php" class="btn btn-primary btn-lg btn-block text-white">Payment</a>
                    </div>
                    <?php
                    if($_SESSION['company_type_id'] != 6 && $_SESSION['company_type_id'] != 7 && $_SESSION['company_type_id'] != 8 && $_SESSION['company_type_id'] != 9)
                    {
                        echo '<div class="col-md-3 mb-3">
                            <a id="purchase_list_btn" href="/layout/vouchers/purchases_list.php" class="btn btn-primary btn-lg btn-block">Purchases</a>
                        </div>
                        <div class="col-md-3 mb-3">
                            <a id="sales_list_btn" href="/layout/vouchers/sales_list.php" class="btn btn-primary btn-lg btn-block">Sales</a>
                        </div>';
                    }
                    else
                    {
                        if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Stock_Sales'] == 'Yes')) 
                        {
                            echo '<div class="col-md-3 mb-3">
                                <a id="job_card_list_btn" href="/layout/vouchers/job_card_list.php" class="btn btn-primary btn-lg btn-block">Job Card</a>
                            </div>';
                        };

                        if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Stock_Sales'] == 'Yes')) 
                        {
                            echo '<div class="col-md-3 mb-3">
                                <a id="stock_sales_list_btn" href="/layout/vouchers/stock_sales_list.php" class="btn btn-primary btn-lg btn-block">Sales</a>
                            </div>';
                        };
                    };
                echo '</div>';
                
                if($_SESSION['company_type_id'] != 6 && $_SESSION['company_type_id'] != 7 && $_SESSION['company_type_id'] != 8 && $_SESSION['company_type_id'] != 9)
                {
                    if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Profitability_Report'] == 'Yes')) 
                    {
                        echo '<div class="form-row">
                            <div class="col-md-12 mb-12">
                                <div class="form-row">
                                    <div class="col-md-2 mb-2 align-items-center">
                                    </div>
                                    <div class="col-md-4 mb-4 text-center">
                                        <label for="welcome_start_date">Start Date</label>
                                        <input type="date" name="welcome_start_date" class="form-control bg-light text-center" id="welcome_start_date">
                                    </div>
                                    <div class="col-md-4 mb-4 text-center">
                                        <label for="welcome_end_date">End Date</label>
                                        <input type="date" name="welcome_end_date" class="form-control bg-light text-center" id="welcome_end_date">
                                    </div>
                                    <div class="col-md-2 mb-2 align-items-center">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-12 align-items-center" id="welcome_branch_detail_div">
                                    </div>
                                </div>

                                <br>
                                
                                <div class="form-row">
                                    <div class="col-md-12 mb-12 align-items-center" id="welcome_net_worth_div">
                                    </div>
                                </div>
                                </br>
                                <div class="form-row">
                                    <div class="col-md-4 mb-4 align-items-center" id="welcome_cash_balance_div">
                                    </div>
                                    <div class="col-md-4 mb-4 align-items-center" id="welcome_momo_balance_div">
                                    </div>
                                    <div class="col-md-4 mb-4 align-items-center" id="welcome_bank_balance_div">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-4 align-items-center" id="welcome_refine_balance_div">
                                    </div>
                                    <div class="col-md-4 mb-4 align-items-center" id="welcome_balls_balance_div">
                                    </div>
                                    <div class="col-md-4 mb-4 align-items-center" id="welcome_profitability_div">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-4 align-items-center" id="welcome_customers_balance_div">
                                    </div>
                                    <div class="col-md-4 mb-4 align-items-center" id="welcome_suppliers_balance_div">
                                    </div>
                                    <div class="col-md-4 mb-4 align-items-center" id="welcome_expenses_balance_div">
                                    </div>
                                </div>
                            </div>
                        </div>';
                    };
                };
                ?>
            </div>
        </div>
    </div>

<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/footer_main.php');?>
