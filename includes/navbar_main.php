
<?php 
  if (isset($_SESSION['user_id'])) {$user_id = $_SESSION['user_id'];}else{$user_id = '';};
  if (isset($_SESSION['user_super_id'])) {$user_super_id = $_SESSION['user_super_id'];}else{$user_super_id = '';};
  if (isset($_SESSION['company_id'])) {$company_id = $_SESSION['company_id'];}else{$company_id = '';};
?>
<input type='hidden' id='session_user_id' value="<?php echo $user_id;?>">
<input type='hidden' id='session_user_super_id' value="<?php echo $user_super_id;?>">
<input type='hidden' id='session_company_id' value="<?php echo $company_id;?>">
 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
    <?php
        
      $today_date = date('Y-m-d');
      if($_SESSION['company_type_id'] == 9)
      {
        echo '<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/layout/items/dining_table_display.php">';
      }
      else
      {
        echo '<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/welcome.php">';
      };
          echo '<div class="sidebar-brand-icon rotate-n-15">
            <img src="/img/TOL.jpg" alt="goldchest" class="img-thumbnail">
          </div>
          <div class="sidebar-brand-text mx-3">';
              $sql="SELECT * FROM company WHERE company_id = '".$_SESSION['company_id']."' ORDER BY trading_name ASC";
              $result=mysqli_query($con,$sql);
              $row=mysqli_fetch_array($result);
              echo($row['trading_name']);
          echo '</div>
        </a>';
    ?>

<!-- Divider -->
    <hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="/index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>GoldChest</span></a>
  </li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Interface
</div>

<!-- Nav Item - Setup Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetup" aria-expanded="true" aria-controls="collapseSetup">
    <i class="fas fa-fw fa-folder-plus"></i>
    <span>Setup</span>
  </a>
  <div id="collapseSetup" class="collapse" aria-labelledby="headingSetup" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Setup:</h6>
        <?php
          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Ledger'] == 'Yes')) 
          {
            echo '<a class="collapse-item" href="/layout/items/ledger_list.php">Ledgers</a>';
            if($_SESSION['company_type_id'] == 7)
            {
              echo '<a class="collapse-item" href="/layout/items/customer_list.php">Customers</a>';
            };
          };
          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Stock_Item'] == 'Yes')) 
          {
            if(
              $_SESSION['company_type_id'] != 5 && 
              $_SESSION['company_type_id'] != 6 && 
              $_SESSION['company_type_id'] != 7 && 
              $_SESSION['company_type_id'] != 8 && 
              $_SESSION['company_type_id'] != 9)
            {
              echo '<a class="collapse-item" href="/layout/items/component_list.php">Component</a>';};
            echo '<a class="collapse-item" href="/layout/items/stock_item_list.php">Stock Items</a>
            <a class="collapse-item" href="/layout/items/stock_item_type_list.php">Stock Type</a>';
            if($_SESSION['company_id'] != 11)
            {
              echo '<a class="collapse-item" href="/layout/items/price_level_list.php">Price Level</a>';
            };
            if($_SESSION['company_type_id'] == 6 && $_SESSION['company_type_id'] != 7 && $_SESSION['company_type_id'] != 8 && $_SESSION['company_type_id'] != 9){echo '<a class="collapse-item" href="/layout/items/service_list.php">Service Items</a>';};
          };
          if($_SESSION['company_type_id'] == 9 )
          {
            if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Dining_Table'] == 'Yes')) 
            {
              echo '<a class="collapse-item" href="/layout/items/dining_table_list.php">Dining Table</a>';
            };
          };
          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Warehouse'] == 'Yes')) 
          {
            echo '<a class="collapse-item" href="/layout/items/warehouse_list.php">Warehouses</a>';
          };
          
          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Refrigerator'] == 'Yes')) 
          {
            if($_SESSION['company_type_id'] == 8)
            {
              echo '<a class="collapse-item" href="/layout/items/refrigerator_list.php">Refrigerator</a>';
            };
          };
          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Tag'] == 'Yes')) 
          {
            if($_SESSION['company_type_id'] == 8)
            {
              echo '<a class="collapse-item" href="/layout/items/tag_list.php">Tag</a>';
            };
          };

          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['company_type_id'] == 3 OR $_SESSION['company_type_id'] == 5) 
          {
            if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Site'] == 'Yes')) 
            {
              echo '<a class="collapse-item" href="/layout/items/site_list.php">Sites</a>';
            };
          };

          
          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['company_type_id'] == 4 OR $_SESSION['company_type_id'] == 5) 
          {
            if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Asset'] == 'Yes')) 
            {
              echo '<a class="collapse-item" href="/layout/items/asset_list.php">Assets</a>';
            };
          };
        ?>
      </div>
  </div>
</li>
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Accounting Vouchers Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAccountVouchers" aria-expanded="true" aria-controls="collapseAccountVouchers">
    <i class="fas fa-fw fa-book"></i>
    <span>Vouchers</span>
  </a>
  <div id="collapseAccountVouchers" class="collapse" aria-labelledby="headingAccountVouchers" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Accounting Vouchers:</h6>
        <?php

          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User') 
          {
              echo '<a class="collapse-item" href="/layout/items/sms_list.php" id="open_sms_nav">Send SMS</a>';
          };

          /*if ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Send_SMS'] == 'Yes') 
          {
              echo '<a class="collapse-item" href="#" id="send_sms_nav">Send SMS</a>';
          };*/
          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Admission'] == 'Yes')) 
          {
            if($_SESSION['company_type_id'] == 8)
            {
              echo '<a class="collapse-item" href="/layout/vouchers/admission_list.php">Admissions</a>';
              echo '<a class="collapse-item" href="/layout/vouchers/discount_list.php">Discount</a>';
            };
          };
          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Receipt'] == 'Yes')) 
          {
            echo '<a class="collapse-item" href="/layout/vouchers/receipt_list.php">Receipt Voucher</a>';
            if($_SESSION['company_id'] != 11){echo '<a class="collapse-item" href="/layout/vouchers/refund_list.php">Refund Voucher</a>';};
          };

          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Payment'] == 'Yes')) 
          {
            echo '<a class="collapse-item" href="/layout/vouchers/payment_list.php">Payment Voucher</a>';
          };

          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Contra'] == 'Yes')) 
          {
            if($_SESSION['company_id'] != 11){echo '<a class="collapse-item" href="/layout/vouchers/contra_list.php">Contra Voucher</a>';};
          };

          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Journal'] == 'Yes')) 
          {
            echo '<a class="collapse-item" href="/layout/vouchers/journal_list.php">Journal Voucher</a>';
          };

          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Purchases'] == 'Yes')) 
          {
            if($_SESSION['company_type_id'] != 6 && $_SESSION['company_type_id'] != 7 && $_SESSION['company_type_id'] != 8 && $_SESSION['company_type_id'] != 9)
            {
              if(
                $_SESSION['company_type_id'] != 6 && 
                $_SESSION['company_type_id'] != 7 && 
                $_SESSION['company_type_id'] != 8 && 
                $_SESSION['company_type_id'] != 9){
                if($_SESSION['company_id'] != 11){echo '<a class="collapse-item" href="/layout/vouchers/booking_list.php">Booking</a>
                <a class="collapse-item" href="/layout/vouchers/purchases_list.php">Purchase Invoice</a>
              <a class="collapse-item" href="/layout/vouchers/bulk_purchases_list.php">Bulk Purchase Invoice</a>';};};
            };
          };

          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Stock_Purchase'] == 'Yes')) 
          {
            echo '<a class="collapse-item" href="/layout/vouchers/stock_purchases_list.php">Stock Purchase Invoice</a>';
          };

          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Sales'] == 'Yes')) 
          {
            if($_SESSION['company_type_id'] != 6 && $_SESSION['company_type_id'] != 7 && $_SESSION['company_type_id'] != 8 && $_SESSION['company_type_id'] != 9)
            {
              if($_SESSION['company_type_id'] != 6 && $_SESSION['company_type_id'] != 7 && $_SESSION['company_type_id'] != 8 && $_SESSION['company_type_id'] != 9)
              {
                if($_SESSION['company_id'] != 11){echo '<a class="collapse-item" href="/layout/vouchers/sales_list.php">Sales Invoice</a>
              <a class="collapse-item" href="/layout/vouchers/bulk_sales_list.php">Bulk Sales Invoice</a>';};};
            };
          };

          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Stock_Sales'] == 'Yes')) 
          {
            echo '<a class="collapse-item" href="/layout/vouchers/stock_sales_list.php">Stock Sales Invoice</a>';
            if($_SESSION['company_id'] != 11){echo '<a class="collapse-item" href="/layout/vouchers/proforma_list.php">Proforma Invoice</a>';};
            if($_SESSION['company_type_id'] == 7)
            {
              echo '<a class="collapse-item" href="/layout/vouchers/nds_sales_list.php">Sales (NDS)</a> 
              <a class="collapse-item" href="/layout/vouchers/waybill_list.php">Waybill</a>
              <a class="collapse-item" href="/layout/vouchers/swap_list.php">Swap</a>';
            };
            if($_SESSION['company_type_id'] == 9)
            {
              if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Order'] == 'Yes')) 
              {
                echo '<a class="collapse-item" href="/layout/vouchers/order_list.php">Order</a> ';
              };
            };
            //if($_SESSION['company_type_id'] == 6)
            //{
              if($_SESSION['company_type_id'] == 6 && $_SESSION['company_type_id'] != 7 && $_SESSION['company_type_id'] != 8){echo '<a class="collapse-item" href="/layout/vouchers/job_card_list.php">Job Card</a>';};
            //};
          };

          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['company_type_id'] == 4 OR $_SESSION['company_type_id'] == 5) 
          {
            
              if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Hiring_Invoice'] == 'Yes')) 
              {
                if($_SESSION['company_type_id'] != 6 && $_SESSION['company_type_id'] != 7 && $_SESSION['company_type_id'] != 8 && $_SESSION['company_type_id'] != 9){echo '<a class="collapse-item" href="/layout/vouchers/hiring_list.php">Hiring Invoice</a>';};
              };

              if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Mtce_Sheet'] == 'Yes')) 
              {
                if($_SESSION['company_type_id'] != 6 && $_SESSION['company_type_id'] != 7 && $_SESSION['company_type_id'] != 8 && $_SESSION['company_type_id'] != 9){echo '<a class="collapse-item" href="/layout/vouchers/mtce_list.php">Maintenance Sheet</a>';};
              };
          };
        ?>
        
        
      </div>
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Inventory Vouchers:</h6>
      <?php
          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Stock_Requisition'] == 'Yes')) 
          {
            echo '<a class="collapse-item" href="/layout/vouchers/stock_requisition_list.php">Stock Requisition</a>';
          };
          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Stock_Transfer'] == 'Yes')) 
          {
            echo '<a class="collapse-item" href="/layout/vouchers/stock_transfer_list.php">Stock Transfer</a>';
          };
          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Stock_Adjustment'] == 'Yes')) 
          {
            echo '<a class="collapse-item" href="/layout/vouchers/stock_adjustment_list.php">Stock Adjustment</a>';
          };
      ?>
      </div>
  </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Accounting Reports Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseActReports" aria-expanded="true" aria-controls="collapseActReports">
    <i class="fas fa-fw fa-book-reader"></i>
    <span>Reports</span>
  </a>
  <div id="collapseActReports" class="collapse" aria-labelledby="headingActReports" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Reports:</h6>
        <?php
          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Profitability_Report'] == 'Yes')) 
          {
            if($_SESSION['company_type_id'] != 6 && $_SESSION['company_type_id'] != 7 && $_SESSION['company_type_id'] != 8 && $_SESSION['company_type_id'] != 9){echo '<a class="collapse-item" id="profitability_report_link" href="#">Profitability Report</a>';};
            echo '<a class="collapse-item" id="profit_and_loss_link" href="#">Profit and Loss Account</a>
            <a class="collapse-item" id="balance_sheet_link" href="#">Balance Sheet</a>';
          };
          
          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Purchases_Report'] == 'Yes')) 
          {
            if ($_SESSION['user_type_id'] != 3) 
            {
              if($_SESSION['company_type_id'] != 6 && $_SESSION['company_type_id'] != 7 && $_SESSION['company_type_id'] != 8 && $_SESSION['company_type_id'] != 9){echo '<a class="collapse-item" id="purchase_report_link" href="#">Purchase Report</a>';};
            };
              $query_bpr = "SELECT * FROM branch WHERE company_id = '".$_SESSION['company_id']."'";
            $query_run_bpr = mysqli_query($con, $query_bpr);
            if (mysqli_num_rows($query_run_bpr) > 1)
            {
              if($_SESSION['company_type_id'] != 6 && $_SESSION['company_type_id'] != 7 && $_SESSION['company_type_id'] != 8 && $_SESSION['company_type_id'] != 9){echo '<a class="collapse-item" id="purchase_report_by_branch_link" href="#">Purchase Report By Branch</a>
                    <a class="collapse-item" id="cash_report_link" href="#">Cash Report</a>';};
            };
          };

          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Sales_Report'] == 'Yes')) 
          {
            if($_SESSION['company_type_id'] != 6 && $_SESSION['company_type_id'] != 7 && $_SESSION['company_type_id'] != 8 && $_SESSION['company_type_id'] != 9){echo '<a class="collapse-item" id="sales_report_link" href="#">Sales Report</a>';};
          };

          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Ledger_Report'] == 'Yes')) 
          {
            echo '<a class="collapse-item" id="ledger_report_link" href="#">Ledger Report</a>';
          };

          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Ledger_Summary_Report'] == 'Yes')) 
          {
            echo '<a class="collapse-item" id="ledger_group_report_link" href="#">Group Report</a>';
            echo '<a class="collapse-item" id="ledger_summary_report_link" href="#">Summary</a>';
            if($_SESSION['company_type_id'] == 8)
            {
              echo '<a class="collapse-item" id="admission_report_link" href="#">Admissions Report</a>';
              echo '<a class="collapse-item" id="body_count_report_link" href="#">Body Count Report</a>';
            };
          };

          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Ledger_Detail_Report'] == 'Yes')) 
          {
            echo '<a class="collapse-item" id="ledger_detail_report_link" href="#">Details</a>';
          };


          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Stock_Summary'] == 'Yes')) 
          {
            echo '<a class="collapse-item" href="#" id="stock_report_link">Stock Summary</a>
            <a class="collapse-item" href="#" id="sales_summary_report_link">Sales Summary</a>';
            if($_SESSION['company_type_id'] == 7)
            {
              echo '<a class="collapse-item" href="#" id="customer_stock_report_link">Customer Stock Summary</a>';
            };
          };
          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Tally_Card'] == 'Yes')) 
          {
            echo '<a class="collapse-item" href="#" id="stock_item_tally_card_link">Tally Card</a>';
          };

          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['company_type_id'] == 3 OR $_SESSION['company_type_id'] == 5) 
          {
            if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Site_Report'] == 'Yes')) 
            {
              echo '<a class="collapse-item" href="#" id="site_report_link">Site Report</a>';
              echo '<a class="collapse-item" href="#" id="customer_report_link">Site/Customer Sales</a>';
            };
          };

          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['company_type_id'] == 4 OR $_SESSION['company_type_id'] == 5) 
          {
            if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Asset_Report'] == 'Yes')) 
            {
              echo '<a class="collapse-item" href="#" id="asset_report_link">Asset Report</a>';
            };
          };
        ?>
      </div>
  </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Settings Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSettings" aria-expanded="true" aria-controls="collapseSettings">
    <i class="fas fa-fw fa-tools"></i>
    <span>Settings</span>
  </a>
  <div id="collapseSettings" class="collapse" aria-labelledby="headingSettings" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Custom Settings:</h6>
      <?php
          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_Company'] == 'Yes')) 
          {
            echo '<a class="collapse-item" id="company_list_link" href="/layout/items/company_list.php">Company</a>';
          };
          if ($_SESSION['user_type'] == 'Ultra_Super_User') 
          {
            echo '<a class="collapse-item" id="branch_list_link" href="/layout/items/branch_list.php">Branch</a>';
          };

          if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['View_User'] == 'Yes')) 
          {
            echo '<a class="collapse-item" id="users_list_link" href="/layout/items/user_list.php">Users List</a>';
          };

          if ($_SESSION['user_type'] == 'Ultra_Super_User') 
          {
            echo '<a class="collapse-item" id="users_ultra_super_link" href="/layout/items/user_ultra_super_list.php">User Ultra-Super</a>
              <a class="collapse-item" id="users_admin_link" href="/layout/items/user_admin_list.php">User Admin</a>
              <a class="collapse-item" id="users_type_link" href="/layout/items/user_type_list.php">User Type</a>
              <a class="collapse-item" id="users_privileges_link" href="/layout/items/user_privileges_list.php">Privileges</a>
              <a class="collapse-item" id="sms_link" href="/layout/vouchers/sms_list.php">SMS</a>';
          };
      ?>
      <a class="collapse-item" id="new_user_link">New User</a>
      <a class="collapse-item" id="change_password_link">Change Password</a>
    </div>
  </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
      <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search fa-sm"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
          <form class="form-inline mr-auto w-100 navbar-search">
            <div class="input-group">
              <input type="text" id="basic-addon2" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Nav Item - Alerts -->
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <!-- Counter - Alerts -->
          <span class="badge badge-danger badge-counter">3+</span>
        </a>
        <!-- Dropdown - Alerts -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
          <h6 class="dropdown-header">
            Alerts Center
          </h6>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="mr-3">
              <div class="icon-circle bg-primary">
                <i class="fas fa-file-alt text-white"></i>
              </div>
            </div>
            <div>
              <div class="small text-gray-500">December 12, 2019</div>
              <span class="font-weight-bold">A new monthly report is ready to download!</span>
            </div>
          </a>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="mr-3">
              <div class="icon-circle bg-success">
                <i class="fas fa-donate text-white"></i>
              </div>
            </div>
            <div>
              <div class="small text-gray-500">December 7, 2019</div>
              $290.29 has been deposited into your account!
            </div>
          </a>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="mr-3">
              <div class="icon-circle bg-warning">
                <i class="fas fa-exclamation-triangle text-white"></i>
              </div>
            </div>
            <div>
              <div class="small text-gray-500">December 2, 2019</div>
              Spending Alert: We've noticed unusually high spending for your account.
            </div>
          </a>
          <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
        </div>
      </li>

      <!-- Nav Item - Messages -->
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <!-- Counter - Messages -->
          <span class="badge badge-danger badge-counter">7</span>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
          <h6 class="dropdown-header">
            Message Center
          </h6>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="/img/girl.jpg" alt="">
              <div class="status-indicator bg-success"></div>
            </div>
            <div class="font-weight-bold">
              <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
              <div class="small text-gray-500">Emily Fowler · 58m</div>
            </div>
          </a>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="/img/girl.jpg" alt="">
              <div class="status-indicator"></div>
            </div>
            <div>
              <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
              <div class="small text-gray-500">Jae Chun · 1d</div>
            </div>
          </a>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="/img/girl.jpg" alt="">
              <div class="status-indicator bg-warning"></div>
            </div>
            <div>
              <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
              <div class="small text-gray-500">Morgan Alvarez · 2d</div>
            </div>
          </a>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="/img/girl.jpg" alt="">
              <div class="status-indicator bg-success"></div>
            </div>
            <div>
              <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
              <div class="small text-gray-500">Chicken the Dog · 2w</div>
            </div>
          </a>
          <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
        </div>
      </li>

      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">
            <?php 
              if (isset($_SESSION['full_name'])) {
                echo $_SESSION['full_name'];
              }
            ?>
        </span>
          <img class="img-profile rounded-circle" src="/img/girl.jpg">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
          </a>
          <a class="dropdown-item" href="#">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            Settings
          </a>
          <a class="dropdown-item" href="#">
            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
            Activity Log
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </div>
      </li>

    </ul>

  </nav>
  <!-- End of Topbar -->


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" id="btn_logout" href="/logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/reports/goldbod_price_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/reports/profitability_report_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/items/sms_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/reports/asset_report_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/reports/site_report_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/reports/stock_item_tally_card_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/reports/stock_report_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/reports/customer_stock_report_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/reports/customer_report_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/reports/sales_summary_report_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/reports/purchase_report_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/reports/purchase_report_by_branch_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/reports/profit_and_loss_report_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/reports/balance_sheet_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/reports/cash_report_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/reports/sales_report_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/reports/ledger_report_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/reports/ledger_detail_report_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/reports/admission_report_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/reports/body_count_report_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/reports/ledger_summary_report_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/reports/ledger_group_report_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/items/user_personal_create_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/items/user_personal_change_password_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/layout/items/user_ultra_super_create_modal.php');?>
