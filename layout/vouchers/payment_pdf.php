<?php
    require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/pdf/fpdf.php');
    
    $company_id = $_SESSION['company_id'];
    $payment_id = $_SESSION['payment_id'];

    function amount_in_words($amount)
    { 
        global $con;
        $payment_id = $_SESSION['payment_id'];
        $query = "SELECT * FROM payment WHERE payment_id = '$payment_id'";
        $query_run = mysqli_query($con, $query);
        if (mysqli_num_rows($query_run) > 0)
        {
            $row = mysqli_fetch_assoc($query_run);
            /*$currency_id = $row['currency_id'];
            $query_currency = "SELECT * FROM currency WHERE currency_id = '$currency_id'";
            $query_run_currency = mysqli_query($con, $query_currency);
            if(!empty($query_run_currency) && mysqli_num_rows($query_run_currency) > 0)
            {
                $row_currency = mysqli_fetch_assoc($query_run_currency);
                $currency = $row_currency['currency'];
                $decimals = $row_currency['decimals'];
            }
            else
            {
                $currency = 'N/A';
                $decimals = 'N/A';
            };*/
        }
        else
        {
            $currency = 'N/A';
            $decimals = 'N/A';
        };
    
        //$amount = number_format($amount,2,".",","); 
        $num_arr = explode(".",$amount);
        $number = $num_arr[0];
        if(isset($num_arr[1]))
        {
            $decnum = $num_arr[1];
        }
        else
        {
            $decnum = 0;
        };
        $result = "";
        function convert_number($number)
        {
            if (($number < 0) || ($number > 9999999999999))
            {
                return "$number";
            };

            $Tn = floor($number / 1000000000000); /* Trillions (giga) */
            $number -= $Tn * 1000000000000;
            $Bn = floor($number / 1000000000); /* Billions (giga) */
            $number -= $Bn * 1000000000;
            $Gn = floor($number / 1000000); /* Millions (giga) */
            $number -= $Gn * 1000000;
            $kn = floor($number / 1000); /* Thousands (kilo) */
            $number -= $kn * 1000;
            $Hn = floor($number / 100); /* Hundreds (hecto) */
            $number -= $Hn * 100;
            $Dn = floor($number / 10); /* Tens (deca) */
            $n = $number % 10; /* Ones */
            
            $res = "";
            
            if ($Tn){$res .= convert_number($Tn) . " Trillion";};
            if ($Bn){$res .= (empty($res) ? "" : " ") .convert_number($Bn) . " Billion";};
            if ($Gn){$res .= (empty($res) ? "" : " ") .convert_number($Gn) . " Million";};
            if ($kn){$res .= (empty($res) ? "" : " ") .convert_number($kn) . " Thousand";};
            if ($Hn){$res .= (empty($res) ? "" : " ") .convert_number($Hn) . " Hundred";};
            
            $ones = array("", "One", "Two", "Three", "Four", "Five", "Six","Seven", "Eight", "Nine", 
            "Ten", "Eleven", "Twelve", "Thirteen","Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eightteen",
            "Nineteen");

            $tens = array("", "", "Twenty", "Thirty", "Fourty", "Fifty", "Sixty", "Seventy", "Eigthy", "Ninety");

            $decones = array( '01' => "One", '02' => "Two", '03' => "Three", '04' => "Four", 
                '05' => "Five", '06' => "Six", '07' => "Seven", '08' => "Eight", '09' => "Nine", 
                10 => "Ten", 11 => "Eleven", 12 => "Twelve", 13 => "Thirteen",14 => "Fourteen", 
                15 => "Fifteen", 16 => "Sixteen", 17 => "Seventeen", 18 => "Eighteen", 19 => "Nineteen" 
            );
            
            if ($Dn || $n)
            {
                if (!empty($res)){$res .= " and ";};
                if ($Dn < 2)
                {$res .= $ones[$Dn * 10 + $n];}
                else{$res .= $tens[$Dn];if ($n){$res .= "-" . $ones[$n];};};
            };
            
            if (empty($res)){$res = "zero";};
        
            return $res;
        }

        function convert_decimals($decnum)
        {
            $ones = array("", "One", "Two", "Three", "Four", "Five", "Six","Seven", "Eight", "Nine", 
            "Ten", "Eleven", "Twelve", "Thirteen","Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eightteen",
            "Nineteen");

            $tens = array("", "", "Twenty", "Thirty", "Fourty", "Fifty", "Sixty", "Seventy", "Eigthy", "Ninety");

            $decones = array( '01' => "One", '02' => "Two", '03' => "Three", '04' => "Four", 
                '05' => "Five", '06' => "Six", '07' => "Seven", '08' => "Eight", '09' => "Nine", 
                10 => "Ten", 11 => "Eleven", 12 => "Twelve", 13 => "Thirteen",14 => "Fourteen", 
                15 => "Fifteen", 16 => "Sixteen", 17 => "Seventeen", 18 => "Eighteen", 19 => "Nineteen" 
            );
            $deci = "";
            if($decnum > 0)
            {
                if($decnum < 20)
                { 
                    $deci .= $decones[$decnum]; 
                }
                elseif($decnum < 100)
                { 
                    $deci .= $tens[substr($decnum,0,1)]; 
                    $deci .= "-".$ones[substr($decnum,1,1)]; 
                };
            };
            return $deci; 
        }
        $number_output = convert_number($number);
        $decimal_output = convert_decimals($decnum);
        if($decnum > 0)
        {
            $result = $number_output.' '.$decimal_output.' '.$decimals;
        }
        else
        {
            $result = $number_output.' Ghana Cedis';
        };
        return $result;
    }
    
    //$image = $_SERVER['DOCUMENT_ROOT'] .'/img/company_logo.png';
    class PDF extends FPDF
    {
        function Header()
        {
            //Put the watermark
        }
        function Footer()
        {
            // Go to 1.5 cm from bottom
            //$this->SetY(-15);
            
            $this->SetFont('Arial','I',8);
            $this->Cell(50,5,'...........................................',0,0,'C');
            $this->Cell(50,5,'...........................................',0,0,'C');
            $this->Cell(50,5,'...........................................',0,0,'C');
            $this->Cell(50,5,'...........................................',0,1,'C');
            $this->Cell(50,5,'Prepared By:',0,0,'C');
            $this->Cell(50,5,'Authorised By',0,0,'C');
            $this->Cell(50,5,'Approved By',0,0,'C');
            $this->Cell(50,5,'Received By',0,1,'C');
        }
    }

    $pdf = new PDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',8);
    //$pdf->Image($image,10,5,20,20);

    $sql_company = "SELECT * FROM company WHERE company_id = '$company_id'";
    $result_company = mysqli_query($con,$sql_company);
    $row_company = mysqli_fetch_array($result_company);

    $pdf->SetFont('Arial','B',18);
    $pdf->Cell(189,5,$row_company['trading_name'],0,1,'C');
    $pdf->SetFont('Arial','I',8);
    $pdf->Cell(189,5,$row_company['address'],0,1,'C');
    $pdf->Cell(189,5,$row_company['location'],0,1,'C');
    $pdf->Cell(189,5,$row_company['telephone'],0,1,'C');
    if(isset($payment_id))
    {
        $query = "SELECT * FROM payment WHERE payment_id = '$payment_id'";
        $query_run = mysqli_query($con, $query);
        if (mysqli_num_rows($query_run) > 0)
        {
            $row = mysqli_fetch_assoc($query_run);
            $pdf->SetFont('Arial','BI',8);
            $pdf->Cell(94,5,'PV No:'.$row['payment_id'],0,0);
            $pdf->Cell(95,5,'Date:'.$row['date'],0,1,'R');
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(189,5,'Payment Voucher',0,1,'C');
            $pdf->Cell(189,10,'',0,1,'C');

            $ledger_credit = $row['ledger_credit'];
            $query_ledger_cr = "SELECT * FROM ledgers WHERE ledger_id = '$ledger_credit'";
            $query_run_ledger_cr = mysqli_query($con, $query_ledger_cr);
            if(!empty($query_run_ledger_cr) && mysqli_num_rows($query_run_ledger_cr) > 0)
            {
                $row_ledger_cr = mysqli_fetch_assoc($query_run_ledger_cr);
                $ledger_cr = $row_ledger_cr['ledger_desc'];
            }
            else
            {
                $ledger_cr = 'N/A';
            };

            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(49,5,'Cash/Bank Account:',0,0);
            $pdf->SetFont('Arial','I',10);
            $pdf->Cell(140,5,$ledger_cr,0,1);
            $pdf->Cell(189,5,'',0,1,'C');

            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(80,5,'Description:',1,0);
            $pdf->Cell(69,5,'Receiving Ledger:',1,0);
            $pdf->Cell(40,5,'Amount',1,1,'R');
            $X=10;
            $Y=65;
            
            $query_amount_cr = "SELECT * FROM transactions WHERE payment_id = '$payment_id' AND amount_debit > 0";
            $query_run_amount_cr = mysqli_query($con, $query_amount_cr);
            if(!empty($query_run_amount_cr) && mysqli_num_rows($query_run_amount_cr) > 0)
            while ($row_amount_cr = mysqli_fetch_assoc($query_run_amount_cr))
            {
                $pdf->SetXY($X,$Y);

                $ledger_debit = $row_amount_cr['ledger_id'];
                $query_ledger_dr = "SELECT * FROM ledgers WHERE ledger_id = '$ledger_debit'";
                $query_run_ledger_dr = mysqli_query($con, $query_ledger_dr);
                if(!empty($query_run_ledger_dr) && mysqli_num_rows($query_run_ledger_dr) > 0)
                {
                    $row_ledger_dr = mysqli_fetch_assoc($query_run_ledger_dr);
                    $ledger_dr = $row_ledger_dr['ledger_desc'];
                }
                else
                {
                    $ledger_dr = 'N/A';
                };

                $amount = $row_amount_cr['amount_debit'];
                $amount_f = number_format($amount, 2, '.', ',');
                $pdf->SetFont('Arial','I',8);
                $pdf->MultiCell(80,5,$row_amount_cr['narration'],1,1);
                $X=$X+80;
                $H = $pdf->GetY();
                $height= $H-$Y;
                $pdf->SetXY($X,$Y);
                $pdf->MultiCell(69,$height,$ledger_dr,1,1);
                $X=$X+69;
                $pdf->SetXY($X,$Y);
                $pdf->MultiCell(40,$height,$amount_f,1,'R',false);
                $X=10;
                $Y=$Y+5;
            };

            $total_amount = $row['amount'];
            $amount_paid = round(($total_amount),2);
            $amount_paid_f = number_format($amount_paid, 2, '.', ',');

            $total_amount_f = number_format($total_amount, 2, '.', ',');
            $pdf->SetFont('Arial','BI',10);
            $pdf->Cell(149,5,'TOTAL AMOUNT:',1,0,'C');
            $pdf->Cell(40,5,$total_amount_f,1,1,'R');

            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(149,10,'AMOUNT PAYABLE',1,0,'C');
            $pdf->Cell(40,10,$amount_paid_f,1,1,'R');

            $pdf->SetFont('Arial','I',7);

            $amount_in_words = amount_in_words($amount_paid);

            $amount_total = $row['amount'];
            $amount_total_f = number_format($amount_total, 2, '.', ',');
            
            $pdf->Cell(189,5,'',0,1); 
            $pdf->SetFont('Arial','',8);
            $pdf->SetLineWidth(0.1);
            $pdf->Cell(189,10,'Amount in words:',0,1);
            $pdf->SetFont('Arial','I',10);
            $pdf->Cell(189,5,$amount_in_words,'B',1);
            $pdf->Cell(189,5,'',0,1);
            $pdf->SetFont('Arial','',8);
            $pdf->Cell(189,10,'Remarks:',0,1);
            $pdf->SetFont('Arial','I',10);
            $pdf->MultiCell(189,5,$row['narration'],'B',1);
            $pdf->Cell(189,5,'',0,1);
            $pdf->SetFont('Arial','',9);
            $pdf->Cell(63,5,'Cheque No:'.$row['inst_no'],0,0,'C');
            $pdf->Cell(63,5,'Bank:'.$row['bank'],0,0,'C');
            $pdf->Cell(63,5,'Branch:'.$row['branch'],0,1,'C');
        };
        $pdf->Output();
    };