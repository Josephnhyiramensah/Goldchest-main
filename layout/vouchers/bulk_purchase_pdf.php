<?php
    require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/pdf/fpdf.php');
    global $con;

    class PDF extends FPDF
    {
        function Footer()
        {
            // Go to 1.5 cm from bottom
            $this->SetY(-15);
            // Select Arial italic 8
            $this->SetFont('Arial','I',8);
            // Print centered page number
            //$this->Cell(0,10,'Page '.$this->PageNo().' - {pages}',0,0,'C');
        }
    }
    //A4 width: 219mm
    //default margin: 10mm each side
    //Writable horizontal: 219mm - (10mm*2) = 189mm
    $pdf = new PDF('P','mm','A4');
    $pdf->SetMargins(2.5,2.5,2.5);
    //$pdf->AliasNbPages('{pages}');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',12);
    //Cell(width, height, text, border, end line, align)
    if(isset($_SESSION['bulk_purchase_id']))
    {
        $company_id = $_SESSION['company_id'];
        $user_id = $_SESSION['user_id'];
        $bulk_purchase_id = $_SESSION['bulk_purchase_id'];

        $sql_company = "SELECT * FROM company WHERE company_id = '$company_id'";
        $result_company = mysqli_query($con,$sql_company);
        $row_company = mysqli_fetch_array($result_company);

        $pdf->Cell(189,5,$row_company['trading_name'],0,1,'C');
        $pdf->Cell(189,5,$row_company['location'].', '. $row_company['telephone'],0,1,'C');
        //$pdf->Cell(75,10,'LOGO',0,1,'C');
        $pdf->Cell(189,5,'',0,1);

        $pdf->SetFont('Arial','BU',10);
        $pdf->Cell(189,8,'BULK PURCHASE INVOICE',0,1,'C');

        $pdf->Cell(189,10,'',0,1,'C');

        $query_bulk_purchase = "SELECT * FROM bulk_purchases WHERE bulk_purchase_id = '$bulk_purchase_id'";
        $query_run_bulk_purchase = mysqli_query($con, $query_bulk_purchase);
        if (mysqli_num_rows($query_run_bulk_purchase) > 0)
        {
            $row_bulk_purchase = mysqli_fetch_assoc($query_run_bulk_purchase);
            
            /*$cash_ledger_id = $row_bulk_purchase['cash_ledger_id'];
            $sql_ledger = "SELECT * FROM ledgers WHERE ledger_id = '$cash_ledger_id'";
            $result_ledger = mysqli_query($con,$sql_ledger);
            $row_ledger = mysqli_fetch_array($result_ledger);*/

            $customer_ledger_id = $row_bulk_purchase['ledger_credit'];
            $sql_customer_ledger = "SELECT * FROM ledgers WHERE ledger_id = '$customer_ledger_id'";
            $result_customer_ledger = mysqli_query($con,$sql_customer_ledger);
            $row_customer_ledger = mysqli_fetch_array($result_customer_ledger);
            
            /*$query_payment = "SELECT * FROM payment WHERE bulk_purchase_id ='$bulk_purchase_id'";
            $query_run_payment = mysqli_query($con, $query_payment);
            $row_payment = mysqli_fetch_assoc($query_run_payment);
            $cash_amount = $row_payment['amount'];
            $cash_amount_f = number_format($cash_amount, 2, '.', ',');*/

            $pdf->SetFont('Arial','B',8);

            $pdf->Cell(83,10,'Customer: '.$row_customer_ledger['ledger_desc'],0,0);
            $pdf->Cell(63,10,'Telephone: '.$row_bulk_purchase['phone'],0,0);
            $pdf->Cell(63,10,'Location: '.$row_bulk_purchase['location'],0,1);

            $pdf->Cell(83,10,'Narration: '.$row_bulk_purchase['narration'],0,0);
            $pdf->Cell(63,10,'Date: '.$row_bulk_purchase['date'],0,0);
            $pdf->Cell(63,10,'Invoice No: '.$row_bulk_purchase['sno'],0,1);

            $pdf->Cell(189,15,'',0,1,'C');

            $query = "SELECT * FROM purchases WHERE bulk_purchase_id = '$bulk_purchase_id'";
            $query_run = mysqli_query($con, $query);
            if (mysqli_num_rows($query_run) > 0)
            {
                $total_purch_weight = 0;
                $total_purch_water = 0;
                $total_purch_pounds = 0;
                $total_purch_amount = 0;

                $pdf->SetFont('Arial','B',8);
                $pdf->Cell(20,10,'S/NO',1,0,'C');
                $pdf->Cell(20,10,'GRAMS',1,0,'C');
                $pdf->Cell(20,10,'WATER',1,0,'C');
                $pdf->Cell(20,10,'DENSITY',1,0,'C');
                $pdf->Cell(20,10,'POUNDS',1,0,'C');
                $pdf->Cell(20,10,'KARAT',1,0,'C');
                $pdf->Cell(20,10,'PURITY',1,0,'C');
                $pdf->Cell(15,10,'PIECES',1,0,'C');
                $pdf->Cell(20,10,'PRICE',1,0,'C');
                $pdf->Cell(25,10,'AMOUNT('.$row_company['currency'].')',1,1,'C');
                $i = 0;
                while($row = mysqli_fetch_assoc($query_run))
                {
                    $i++;
                    $product_id = $row['product_id'];
                    $sql_product = "SELECT * FROM product WHERE product_id = '$product_id'";
                    $result_product = mysqli_query($con,$sql_product);
                    $row_product = mysqli_fetch_array($result_product);

                    $price_purchase = $row['price'];
                    $price_purchase = number_format($price_purchase, 2, '.', ',');
                    $ppp_purchase = $row['price_per_pound'];
                    $ppp_purchase = number_format($ppp_purchase, 2, '.', ',');
                    $amount_purchase = $row['amount'];
                    $amount_purchase = number_format($amount_purchase, 2, '.', ',');

                    $pdf->SetFont('Arial','',8);
                    
                    $pdf->Cell(20,5,$i,1,0,'C');
                    $pdf->Cell(20,5,$row['weight_both'],1,0,'C');
                    $pdf->Cell(20,5,$row['water'],1,0,'C');
                    $pdf->Cell(20,5,$row['density'],1,0,'C');
                    $pdf->Cell(20,5,$row['pounds'],1,0,'C');
                    $pdf->Cell(20,5,$row['karat'],1,0,'C');
                    $pdf->Cell(20,5,$row['purity'],1,0,'C');
                    $pdf->Cell(15,5,$row['pieces'],1,0,'C');
                    $pdf->Cell(20,5,$price_purchase,1,0,'R');
                    $pdf->Cell(25,5,$amount_purchase,1,1,'R');

                    $total_purch_weight = $total_purch_weight + $row['weight_both'];
                    $total_purch_water = $total_purch_water + $row['water'];
                    $total_purch_pounds = $total_purch_pounds + $row['pounds'];
                    $total_purch_amount = $total_purch_amount + $row['amount'];
                };

                $total_purch_amount_f = number_format($total_purch_amount, 2, '.', ',');
                $pdf->SetFont('Arial','B',8);
                $pdf->Cell(20,10,'TOTAL',1,0, 'C');
                $pdf->Cell(20,10,$total_purch_weight,1,0,'C');
                $pdf->Cell(20,10,$total_purch_water,1,0,'C');
                $pdf->Cell(20,10,'',1,0,'C');
                $pdf->Cell(20,10,$total_purch_pounds,1,0,'C');
                $pdf->Cell(20,10,'',1,0,'C');
                $pdf->Cell(20,10,'',1,0,'C');
                $pdf->Cell(15,10,'',1,0,'C');
                $pdf->Cell(20,10,'',1,0,'R');
                $pdf->Cell(25,10,$total_purch_amount_f,1,1,'R');
                
                $pdf->Cell(189,20,'',0,1,'C');


                $total_amount_paid = 0;
                $pdf->SetFont('Arial','B',8);
                $pdf->Cell(111,10,'LEDGER',1,0,'C');
                $pdf->Cell(30,10,'MODE',1,0,'C');
                $pdf->Cell(59,10,'AMOUNT',1,1,'C');
    
                $query_journal = "SELECT * FROM journal WHERE bulk_purchase_id = '$bulk_purchase_id'";
                $query_run_journal = mysqli_query($con, $query_journal);
                if (mysqli_num_rows($query_run_journal) > 0)
                {
                    while($row_journal = mysqli_fetch_assoc($query_run_journal))
                    {
                        $customer_ledger_id = $row_journal['ledger_credit'];
                        $sql_customer_ledger = "SELECT * FROM ledgers WHERE ledger_id = '$customer_ledger_id'";
                        $result_customer_ledger = mysqli_query($con,$sql_customer_ledger);
                        if (mysqli_num_rows($result_customer_ledger) > 0)
                        {
                            $row_customer_ledger = mysqli_fetch_array($result_customer_ledger);
                            $customer_name = $row_customer_ledger['ledger_desc'];
                        }
                        else
                        {
                            $customer_name = 'No Name';
                        };
    
                        $amount_paid = $row_journal['amount'];
                        $total_amount_paid = $total_amount_paid + $row_journal['amount'];
                        $amount_paid_f = number_format($amount_paid, 2, '.', ',');
    
                        $pdf->SetFont('Arial','',8);
                        
                        $pdf->Cell(111,5,$customer_name,1,0,'L');
                        $pdf->Cell(30,5,$row_journal['mode'],1,0,'C');
                        $pdf->Cell(59,5,$amount_paid_f,1,1,'R');
                    };
                };
    
                $query_payment = "SELECT * FROM payment WHERE bulk_purchase_id = '$bulk_purchase_id'";
                $query_run_payment = mysqli_query($con, $query_payment);
                if (mysqli_num_rows($query_run_payment) > 0)
                {
                    while($row_payment = mysqli_fetch_assoc($query_run_payment))
                    {
                        $customer_ledger_id = $row_payment['ledger_credit'];
                        $sql_customer_ledger = "SELECT * FROM ledgers WHERE ledger_id = '$customer_ledger_id'";
                        $result_customer_ledger = mysqli_query($con,$sql_customer_ledger);
                        if (mysqli_num_rows($result_customer_ledger) > 0)
                        {
                            $row_customer_ledger = mysqli_fetch_array($result_customer_ledger);
                            $customer_name = $row_customer_ledger['ledger_desc'];
                        }
                        else
                        {
                            $customer_name = 'No Name';
                        };
    
                        $amount_paid = $row_payment['amount'];
                        $total_amount_paid = $total_amount_paid + $row_payment['amount'];
                        $amount_paid_f = number_format($amount_paid, 2, '.', ',');
    
                        $pdf->SetFont('Arial','',8);
                        
                        $pdf->Cell(111,5,$customer_name,1,0,'L');
                        $pdf->Cell(30,5,$row_payment['mode'],1,0,'C');
                        $pdf->Cell(59,5,$amount_paid_f,1,1,'R');
                    };
                };
    
                    $total_amount_paid_f = number_format($total_amount_paid, 2, '.', ',');
                    $pdf->SetFont('Arial','B',8);
                    $pdf->Cell(141,10,'TOTAL',1,0, 'C');
                    $pdf->Cell(59,10,$total_amount_paid_f,1,0,'R');
                    $pdf->Cell(189,20,'',0,1,'C');

                $pdf->SetFont('Arial','',8);
                $pdf->Cell(100,5,'..............................................................',0,0,'C');
                $pdf->Cell(100,5,'..............................................................',0,1,'C');
                $pdf->Cell(100,5,'Client Signature',0,0,'C');
                $pdf->Cell(100,5,'Manager Signature',0,1,'C');
                $pdf->Cell(189,5, 'Thanks for doing business with us!',0,1,'C');
            };
        };
    };

    $pdf->Output();
?>