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
    //A4 width: 219mm
    //default margin: 10mm each side
    //Writable horizontal: 219mm - (10mm*2) = 189mm
    $pdf = new PDF('P','mm','A4');
    $pdf->SetMargins(2.5,2.5,2.5);
    //$pdf->AliasNbPages('{pages}');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',8);
    //Cell(width, height, text, border, end line, align)
    if(isset($_SESSION['stock_sales_id']))
    {
        $company_id = $_SESSION['company_id'];
        $stock_sales_id = $_SESSION['stock_sales_id'];
        $customer_name = $_SESSION['customer_name'];
        $query = "SELECT * FROM stock_sales WHERE stock_sales_id = '$stock_sales_id'";
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

            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(200,5,'',0,1,'C');
            $pdf->Cell(200,5,$row_company['trading_name'],0,1,'C');
            $pdf->SetFont('Arial','B',6);
            $pdf->Cell(200,5,$location,0,1,'C');
            $pdf->Cell(200,5,$telephone,0,1,'C');
            $pdf->Cell(200,5,'',0,1);

            $pdf->SetFont('Arial','',8);
            $pdf->Cell(50,4,'Invoice No: '.$row['sno'],0,0);
            $pdf->SetFont('Arial','BU',10);
            $pdf->Cell(100,4,'SALES INVOICE',0,0,'C');
            $pdf->SetFont('Arial','',8);
            $pdf->Cell(50,4,'Date: '.$row['date'],0,1,'R');
            $pdf->Cell(200,4,'Sold To:'.$customer_name.' ('.$row['reference_no'].')',0,1);
            $pdf->Cell(200,4,'Narration:'.$row['narration'],0,1);

            $query_sales_items = "SELECT * FROM stock_sales_items WHERE stock_sales_id = '$stock_sales_id'";
            $query_run_sales_items = mysqli_query($con, $query_sales_items);
            if (mysqli_num_rows($query_run_sales_items) > 0)
            {
                $pdf->SetFont('Arial','B',8);
                $pdf->Cell(115,4,'Description',1,0,'C');
                $pdf->Cell(25,4,'Qty',1,0,'C');
                $pdf->Cell(30,4,'Price',1,0,'C');
                $pdf->Cell(30,4,'Amount',1,1,'C');
                $total_amount = 0;
                while($row_sales_items = mysqli_fetch_assoc($query_run_sales_items))
                {
                    $stock_item_id = $row_sales_items['stock_item_id'];
                    $query_stock_item = "SELECT * FROM stock_items WHERE stock_item_id = '$stock_item_id'";
                    $query_run_stock_item = mysqli_query($con, $query_stock_item);
                    $row_stock_item = mysqli_fetch_assoc($query_run_stock_item);
                    $pdf->SetFont('Arial','',12);
                    $pdf->Cell(115,5,$row_stock_item['stock_item'],1,0);
                    $pdf->Cell(25,5,$row_sales_items['qty'],1,0,'C');
                    $pdf->Cell(30,5,$row_sales_items['price'],1,0,'R');
                    $pdf->Cell(30,5,$row_sales_items['amount'],1,1,'R');
                    $total_amount = $total_amount + $row_sales_items['amount'];
                };
                $discount_perc = ($row['discount_perc']*100).'%';
                $covid_perc = ($row['covid_perc']*100).'%';
                $nhil_perc = ($row['nhil_perc']*100).'%';
                $getfund_perc = ($row['getfund_perc']*100).'%';
                $vat_perc = ($row['vat_perc']*100).'%';
                $total = $row['total'];
                $discount = $row['discount'];
                $covid = $row['covid'];
                $nhil = $row['nhil'];
                $getfund = $row['getfund'];
                $vat = $row['vat'];
                $net_amount = $row['amount'];

                $total_amount_f = number_format($total_amount, 2, '.', ',');
                $total_f = number_format($total, 2, '.', ',');
                $discount_f = number_format($discount, 2, '.', ',');
                $covid_f = number_format($covid, 2, '.', ',');
                $nhil_f = number_format($nhil, 2, '.', ',');
                $getfund_f = number_format($getfund, 2, '.', ',');
                $vat_f = number_format($vat, 2, '.', ',');
                $net_amount_f = number_format($net_amount, 2, '.', ',');

                $pdf->SetFont('Arial','B',8);
                $pdf->Cell(115,4,'Sub Total:',1,0,'R');
                $pdf->Cell(25,4,'',1,0,'R');
                $pdf->Cell(60,4,$total_amount_f,1,1,'R');
                $pdf->SetFont('Arial','I',5);
                $pdf->Cell(115,3,'Discount',1,0,'R');
                $pdf->Cell(25,3,$discount_perc,1,0,'C');
                $pdf->Cell(60,3,$discount_f,1,1,'R');
                $pdf->SetFont('Arial','B',5);
                $pdf->Cell(115,3,'Total',1,0,'R');
                $pdf->Cell(25,3,'',1,0,'C');
                $pdf->Cell(60,3,$total_f,1,1,'R');
                $pdf->SetFont('Arial','I',5);
                $pdf->Cell(115,3,'COVID',1,0,'R');
                $pdf->Cell(25,3,$covid_perc,1,0,'C');
                $pdf->Cell(60,3,$covid_f,1,1,'R');
                $pdf->Cell(115,3,'GETFund',1,0,'R');
                $pdf->Cell(25,3,$getfund_perc,1,0,'C');
                $pdf->Cell(60,3,$getfund_f,1,1,'R');
                $pdf->Cell(115,3,'NHIL',1,0,'R');
                $pdf->Cell(25,3,$nhil_perc,1,0,'C');
                $pdf->Cell(60,3,$nhil_f,1,1,'R');
                $pdf->SetFont('Arial','B',5);
                $pdf->Cell(115,3,'Total Levies',1,0,'R');
                $pdf->Cell(25,3,'',1,0,'C');
                $pdf->Cell(60,3,'',1,1,'R');
                $pdf->SetFont('Arial','I',5);
                $pdf->Cell(65,3,'VAT Type:'.$row['vat_type'].':'.$row['vat_calc_type'],1,0);
                $pdf->SetFont('Arial','I',5);
                $pdf->Cell(50,3,'VAT:',1,0,'R');
                $pdf->Cell(25,3,$vat_perc,1,0,'C');
                $pdf->Cell(60,3,$vat_f,1,1,'R');
                $pdf->SetFont('Arial','B',12);
                $pdf->Cell(115,5,'Net Amount',1,0,'R');
                $pdf->Cell(25,5,'',1,0,'C');
                $pdf->Cell(60,5,$net_amount_f,1,1,'R');
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
            
            $pdf->SetFont('Arial','I',7);
            $pdf->Cell(200,4,'Thanks for doing business with us! Goods Sold Out Under Good Conditions Are Not Returnable  And Monies Paid Are Not Refundable.',0,1,'C');
            $pdf->Cell(200,4,'Created by:'.$creator_name.': '.$row['created_datetime'],0,1,'C');
            $pdf->Cell(200,4,'Printed by:'.$current_user.': '.$datetime,0,1,'C');
            
            /*$pdf->SetFont('Arial','I',9);
            $pdf->Cell(66,5,'..............................................................',0,0,'C');
            $pdf->Cell(66,5,'..............................................................',0,0,'C');
            $pdf->Cell(68,5,'..............................................................',0,1,'C');
            $pdf->Cell(66,5,'PREPARED BY',0,0,'C');
            $pdf->Cell(66,5,'CHECKED BY',0,0,'C');
            $pdf->Cell(68,5,'APPROVED BY',0,1,'C');*/
        };
    };

    $pdf->Output();