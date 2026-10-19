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
    $hiring_id = $_SESSION['hiring_id'];

    $sql_company = "SELECT * FROM company WHERE company_id = '$company_id'";
    $result_company = mysqli_query($con,$sql_company);
    $row_company = mysqli_fetch_array($result_company);

    $pdf->SetFont('Arial','B',18);
    $pdf->Cell(189,10,$row_company['trading_name'],0,1,'C');
    $pdf->SetFont('Arial','I',8);
    $pdf->Cell(189,5,$row_company['address'].', '.$row_company['location'].', '.$row_company['telephone'],0,1,'C');
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(189,5,'',0,1,'C');
    $pdf->Cell(189,5,'Hiring Invoice',0,1,'C');
    $pdf->Cell(189,10,'',0,1,'C');
    
    if(isset($hiring_id))
    {
        $query = "SELECT * FROM hiring WHERE hiring_id = '$hiring_id'";
        $query_run = mysqli_query($con, $query);
        if (mysqli_num_rows($query_run) > 0)
        {
            $row = mysqli_fetch_assoc($query_run);

            $ledger_debit = $row['ledger_debit'];
            $query_ledger = "SELECT * FROM ledgers WHERE ledger_id = '$ledger_debit'";
            $query_run_ledger = mysqli_query($con, $query_ledger);
            $row_ledger = mysqli_fetch_assoc($query_run_ledger);

            $pdf->SetFont('Arial','I',8);
            $pdf->Cell(189,10,'Address To:',0,1);
            $pdf->SetFont('Arial','B',12);
            $pdf->SetLineWidth(0.1);
            $pdf->Cell(10,5,'',0,0);
            $pdf->Cell(179,5,$row_ledger['ledger_desc'],0,1);
            $pdf->SetFont('Arial','I',10);
            $pdf->Cell(10,5,'',0,0);
            $pdf->Cell(179,5,$row['address'],0,1);
            $pdf->Cell(10,5,'',0,0);
            $pdf->Cell(179,5,$row['telephone'],0,1);
            $pdf->Cell(189,10,'',0,1,'C');

            $pdf->SetFont('Arial','B',9);
            $pdf->Cell(47,5,'Invoice No',1,0,'C');
            $pdf->Cell(47,5,'Date',1,0,'C');
            $pdf->Cell(47,5,'Operator',1,0,'C');
            $pdf->Cell(48,5,'Foreman',1,1,'C');
            $pdf->SetFont('Arial','I',9);
            $pdf->Cell(47,5,$row['hiring_id'],1,0,'C');
            $pdf->Cell(47,5,$row['date'],1,0,'C');
            $pdf->Cell(47,5,$row['operator'],1,0,'C');
            $pdf->Cell(48,5,$row['foreman'],1,1,'C');
            $pdf->Cell(189,10,'',0,1,'C');

            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(79,5,'Asset',1,0,'C');
            $pdf->Cell(30,5,'Site',1,0,'C');
            $pdf->Cell(15,5,'Start',1,0,'C');
            $pdf->Cell(15,5,'End',1,0,'C');
            $pdf->Cell(15,5,'Hours',1,0,'C');
            $pdf->Cell(15,5,'Rate',1,0,'C');
            $pdf->Cell(20,5,'Amount',1,1,'C');

            $query_hiring_list = "SELECT * FROM hiring_list WHERE hiring_id = '$hiring_id'";
            $query_run_hiring_list = mysqli_query($con, $query_hiring_list);
            if (mysqli_num_rows($query_run) > 0)
            {
                while($row_hiring_list = mysqli_fetch_assoc($query_run_hiring_list))
                {
                    $asset_id = $row_hiring_list['asset_id'];
                    $query_asset = "SELECT * FROM assets WHERE asset_id = '$asset_id'";
                    $query_run_asset = mysqli_query($con, $query_asset);
                    $row_asset = mysqli_fetch_assoc($query_run_asset);

                    $site_id = $row_hiring_list['site_id'];
                    $query_site = "SELECT * FROM site WHERE site_id = '$site_id'";
                    $query_run_site = mysqli_query($con, $query_site);
                    $row_site = mysqli_fetch_assoc($query_run_site);

                    $pdf->SetFont('Arial','I',7);
                    $rate = $row_hiring_list['rate'];
                    $amount = $row_hiring_list['amount'];
                    $rate_f = number_format($rate, 2, '.', ',');
                    $amount_f = number_format($amount, 2, '.', ',');

                    $pdf->Cell(79,10,$row_asset['brand'].''.$row_asset['model'],1,0);
                    $pdf->SetFont('Arial','I',8);
                    $pdf->Cell(30,10,$row_site['site'],1,0,'C');
                    $pdf->Cell(15,10,$row_hiring_list['start'],1,0,'C');
                    $pdf->Cell(15,10,$row_hiring_list['end'],1,0,'C');
                    $pdf->Cell(15,10,$row_hiring_list['qty'],1,0,'C');
                    $pdf->Cell(15,10,$rate_f,1,0,'R');
                    $pdf->Cell(20,10,$amount_f,1,1,'R');
                }
            };
            $pdf->SetFont('Arial','B',10);
            $amount_total = $row['amount'];
            $amount_total_f = number_format($amount_total, 2, '.', ',');

            $pdf->Cell(154,10,'Total',1,0,'C');
            $pdf->Cell(35,10,$amount_total_f,1,1,'R');
            
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