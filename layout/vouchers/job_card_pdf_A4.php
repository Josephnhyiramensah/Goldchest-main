<?php
    require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/pdf/fpdf.php');
    
    //$_SESSION['user_id'] = 2;

    //$image = $_SERVER['DOCUMENT_ROOT'] .'/img/aflia-head.jpg';
    class PDF extends FPDF
    {
        function Header()
        {
            //Put the watermark
            //$image = $_SERVER['DOCUMENT_ROOT'] .'/img/aflia watermark.png';
            //$this->Image($image,55,110,100,95);
        }
        function Footer()
        {
            // Go to 1.5 cm from bottom
            //$this->SetY(-15);
            // Select Arial italic 8
            
            /*$sign = $_SERVER['DOCUMENT_ROOT'] .'/img/ac_sign.png';
            $this->Image($sign,80,250,50,30);
            $this->SetFont('Arial','I',8);
            $this->Cell(189,5,'Please send payment notification to the Accountant via accountant@aflia.net ',0,1,'C');
            $this->Cell(189,5,"Connecting Africa's library communities",0,1,'C');*/
        }
    }
    $pdf = new PDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',8);
    //$pdf->Image($image,5,5,199,30);
    
    $company_id = $_SESSION['company_id'];
    $job_card_id = $_SESSION['job_card_id'];

    $sql_company = "SELECT * FROM company WHERE company_id = '$company_id'";
    $result_company = mysqli_query($con,$sql_company);
    $row_company = mysqli_fetch_array($result_company);

    $pdf->SetFont('Arial','B',18);
    $pdf->Cell(189,10,$row_company['trading_name'],0,1,'C');
    $pdf->SetFont('Arial','I',8);
    $pdf->Cell(189,5,$row_company['address'].', '.$row_company['location'].', '.$row_company['telephone'],0,1,'C');
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(189,5,'',0,1,'C');
    $pdf->Cell(189,5,'SERVICE INVOICE',0,1,'C');
    $pdf->Cell(189,10,'',0,1,'C');
    
    if(isset($job_card_id))
    {

        $query = "SELECT * FROM job_card WHERE job_card_id = '$job_card_id'";
        $query_run = mysqli_query($con, $query);
        if (mysqli_num_rows($query_run) > 0)
        {
            $row = mysqli_fetch_assoc($query_run);
            $ledger_debit = $row['ledger_debit'];
            $query_ledger = "SELECT * FROM ledgers WHERE ledger_id = '$ledger_debit'";
            $query_run_ledger = mysqli_query($con, $query_ledger);
            if(!empty($query_run_ledger) && mysqli_num_rows($query_run_ledger) > 0)
            {
                $row_ledger = mysqli_fetch_assoc($query_run_ledger);
                $customer_ledger = $row_ledger['ledger_desc'];
                $address = $row_ledger['address'];
                $telephone = $row_ledger['telephone'];
            }
            else
            {
                $customer_ledger = $row['customer'];
                $address = 'N/A';
                $telephone = 'N/A';
            };

            $pdf->SetFont('Arial','I',8);
            $pdf->Cell(189,10,'Address To:',0,1);
            $pdf->SetFont('Arial','B',12);
            $pdf->SetLineWidth(0.1);
            $pdf->Cell(10,5,'',0,0);
            $pdf->Cell(179,5,$customer_ledger,0,1);
            $pdf->SetFont('Arial','I',10);
            $pdf->Cell(10,5,'',0,0);
            $pdf->Cell(179,5,$address,0,1);
            $pdf->Cell(10,5,'',0,0);
            $pdf->Cell(179,5,$telephone,0,1);
            $pdf->Cell(189,10,'',0,1,'C');
            $pdf->Cell(94,5,'Invoice No:'.$row['sno'],0,0,'C');
            $pdf->Cell(95,5,'Date:'.$row['date'],0,1,'C');
            $pdf->Cell(189,10,'',0,1,'C');

            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(119,5,'Service',1,0,'C');
            $pdf->Cell(20,5,'Qty',1,0,'C');
            $pdf->Cell(20,5,'Price',1,0,'C');
            $pdf->Cell(30,5,'Amount',1,1,'C');

            $query_sales_items = "SELECT * FROM job_card_items WHERE job_card_id = '$job_card_id'";
            $query_run_sales_items = mysqli_query($con, $query_sales_items);
            if (mysqli_num_rows($query_run_sales_items) > 0)
            {
                $total_amount = 0;
                while($row_sales_items = mysqli_fetch_assoc($query_run_sales_items))
                {
                    $service_id = $row_sales_items['service_id'];
                    $query_stock_item = "SELECT * FROM service WHERE service_id = '$service_id'";
                    $query_run_stock_item = mysqli_query($con, $query_stock_item);
                    $row_stock_item = mysqli_fetch_assoc($query_run_stock_item);

                    $pdf->SetFont('Arial','I',7);
                    $rate = $row_sales_items['price'];
                    $amount = $row_sales_items['amount'];
                    $rate_f = number_format($rate, 2, '.', ',');
                    $amount_f = number_format($amount, 2, '.', ',');

                    $pdf->Cell(119,10,$row_stock_item['service'],1,0);
                    $pdf->SetFont('Arial','I',8);
                    $pdf->Cell(20,10,$row_sales_items['qty'],1,0,'C');
                    $pdf->Cell(20,10,$rate_f,1,0,'R');
                    $pdf->Cell(30,10,$amount_f,1,1,'R');
                }
            };
            $pdf->SetFont('Arial','B',10);
            $amount_total = $row['amount'];
            $amount_total_f = number_format($amount_total, 2, '.', ',');

            $pdf->Cell(159,10,'Total',1,0,'C');
            $pdf->Cell(30,10,$amount_total_f,1,1,'R');
            
            $pdf->Cell(189,15,'',0,1);
            $pdf->SetFont('Arial','',8);
            $pdf->SetLineWidth(0.1);
            $pdf->Cell(189,10,'Narration:',0,1);
            $pdf->Cell(189,5,$row['narration'],'B',1);
            $pdf->Cell(189,25,'',0,1);
            $pdf->Cell(95,5,'..............................................................',0,0,'C');
            $pdf->Cell(94,5,'..............................................................',0,1,'C');
            $pdf->Cell(95,5,'',0,0);
            $pdf->Cell(94,5,'',0,1);
            $pdf->Cell(95,5,'Client Signature',0,0,'C');
            $pdf->Cell(94,5,'Manager Signature',0,1,'C');
            $pdf->Cell(189,5,'',0,1);
        };
        $pdf->Output();
    };
?>