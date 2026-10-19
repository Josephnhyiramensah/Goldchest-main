<?php
    require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/pdf/fpdf.php');
	date_default_timezone_set("Africa/Accra");
	//$date_today = date('Y-m-d');
	//$time = date('H-i-sa');
    $datetime = date('Y-m-d h:i:s a');
    global $con;

    class PDF extends FPDF
    {
        function Footer()
        {
            // Go to 1.5 cm from bottom
            //$this->SetY(-20);
            
        }
    }
    $pdf = new PDF('P','mm','A4');
    $pdf->SetMargins(2.5,2.5,2.5);
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    if(isset($_SESSION['waybill_id']))
    {
        $company_id = $_SESSION['company_id'];
        $waybill_id = $_SESSION['waybill_id'];

        $query = "SELECT * FROM waybill WHERE waybill_id = '$waybill_id'";
        $query_run = mysqli_query($con, $query);
        if (mysqli_num_rows($query_run) > 0)
        {
            $row = mysqli_fetch_assoc($query_run);

            $branch_id = $row['branch_id'];
            $sql_branch = "SELECT * FROM branch WHERE branch_id = '$branch_id'";
            $result_branch = mysqli_query($con,$sql_branch);
            $row_branch = mysqli_fetch_array($result_branch);

            $sql_company = "SELECT * FROM company WHERE company_id = '$company_id'";
            $result_company = mysqli_query($con,$sql_company);
            $row_company = mysqli_fetch_array($result_company);
            if(isset($row_branch['branch_address']) && $row_branch['branch_address'] !=''){$address = $row_branch['branch_address'];}else{$address = $row_company['address'];};
            if(isset($row_branch['branch_telephone']) && $row_branch['branch_telephone'] !=''){$telephone = $row_branch['branch_telephone'];}else{$telephone = $row_company['telephone'];};
            if(isset($row_branch['branch_location']) && $row_branch['branch_location'] !=''){$location = $row_branch['branch_location'];}else{$location = $row_company['location'];};

            $pdf->Cell(200,5,'',0,1,'C');
            $pdf->Cell(200,5,$row_company['trading_name'],0,1,'C');
            $pdf->SetFont('Arial','B',7);
            $pdf->Cell(200,5,$location,0,1,'C');
            $pdf->Cell(200,5,$telephone,0,1,'C');
            //$pdf->Cell(75,10,'LOGO',0,1,'C');
            $pdf->Cell(200,5,'',0,1);

            $pdf->SetFont('Arial','BU',14);
            $pdf->Cell(200,8,'WAYBILL',0,1,'C');

            $customer_id = $row['customer_id'];
            $query_customer = "SELECT * FROM customer WHERE customer_id = '$customer_id'";
            $query_run_customer = mysqli_query($con, $query_customer);
            if(!empty($query_run_customer) && mysqli_num_rows($query_run_customer) > 0)
            {
                $row_customer = mysqli_fetch_assoc($query_run_customer);
                $customer_name = $row_customer['first_name'].''.$row_customer['last_name'];
                $customer_phone = $row_customer['phone_number'];
            }
            else
            {
                $customer_name = 'Not Specified';
                $customer_phone = 'Not Specified';
            };
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(100,7,'Waybill No: '.$row['sno'],0,0);
            $pdf->Cell(100,7,'Date: '.$row['date'],0,1);
            $pdf->Cell(200,7,'Customer:'.$customer_name.' ('.$customer_phone.')',0,1);
            $pdf->Cell(100,7,'Driver:'.$row['drivers_name'],0,0);
            $pdf->Cell(100,7,'Car No:'.$row['car_number'],0,1);

            $query_sales_items = "SELECT * FROM stock_sales_items WHERE waybill_id = '$waybill_id'";
            $query_run_sales_items = mysqli_query($con, $query_sales_items);
            if (mysqli_num_rows($query_run_sales_items) > 0)
            {
                $pdf->SetFont('Arial','B',8);
                $pdf->Cell(150,7,'ITEM DESCRIPTION',1,0,'C');
                $pdf->Cell(50,7,'QTY',1,1,'C');
                $total_amount = 0;
                while($row_sales_items = mysqli_fetch_assoc($query_run_sales_items))
                {
                    $stock_item_id = $row_sales_items['stock_item_id'];
                    $query_stock_item = "SELECT * FROM stock_items WHERE stock_item_id = '$stock_item_id'";
                    $query_run_stock_item = mysqli_query($con, $query_stock_item);
                    $row_stock_item = mysqli_fetch_assoc($query_run_stock_item);
                    $pdf->SetFont('Arial','I',10);
                    $pdf->Cell(150,7,$row_stock_item['stock_item'],1,0);
                    $pdf->Cell(50,7,$row_sales_items['qty'],1,1,'C');
                };
            };
            $created_id = $row['created_by'];
            $query_creator = "SELECT first_name, last_name FROM users WHERE id='$created_id'";
            $result_creator = mysqli_query($con,$query_creator);
            if(!empty($result_creator) && mysqli_num_rows($result_creator) > 0)
            {
                $row_creator = mysqli_fetch_assoc($result_creator);
                $creator_name = $row_creator['first_name'].' '.$row_creator['last_name'];
            }
            else
            {
                $creator_name = 'Not Specified';
            };

            $user_id = $_SESSION['user_id'];
            $query_cu = "SELECT first_name, last_name FROM users WHERE id='$user_id'";
            $result_cu = mysqli_query($con,$query_cu);
            if(!empty($result_cu) && mysqli_num_rows($result_cu) > 0)
            {
                $row_cu = mysqli_fetch_assoc($result_cu);
                $current_user = $row_cu['first_name'].' '.$row_cu['last_name'];
            }
            else
            {
                $current_user = 'Not Specified';
            };
            $pdf->SetFont('Arial','I',8);
            $pdf->Cell(200,4,'Thanks for doing business with us! Goods Sold Out Under Good Conditions Are Not Returnable  And Monies Paid Are Not Refundable.',0,1,'C');
            $pdf->Cell(200,4,'Created by:'.$creator_name.': '.$row['created_datetime'],0,1,'C');
            $pdf->Cell(200,4,'Printed by:'.$current_user.': '.$datetime,0,1,'C');
            $pdf->SetFont('Arial','I',9);
            $pdf->Cell(66,5,'..............................................................',0,0,'C');
            $pdf->Cell(66,5,'..............................................................',0,0,'C');
            $pdf->Cell(68,5,'..............................................................',0,1,'C');
            $pdf->Cell(66,5,'PREPARED BY',0,0,'C');
            $pdf->Cell(66,5,'CHECKED BY',0,0,'C');
            $pdf->Cell(68,5,'DRIVER',0,1,'C');
        };
    };

    $pdf->Output();