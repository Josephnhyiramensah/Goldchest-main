<?php
    require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/pdf/fpdf.php');
    global $con;

    $company_id = $_SESSION['company_id'];
    $receipt_id = $_SESSION['receipt_display_receipt_id'];
    if(isset($receipt_id))
    {
        $query = "SELECT * FROM receipt WHERE receipt_id = '$receipt_id'";
        $query_run = mysqli_query($con, $query);
        if (mysqli_num_rows($query_run) > 0)
        {
            $row = mysqli_fetch_assoc($query_run);

            function amount_in_words($amount)
            {
                global $con;
                /*$receipt_id = $_SESSION['receipt_display_receipt_id'];
                $query = "SELECT * FROM receipt WHERE receipt_id = '$receipt_id'";
                $query_run = mysqli_query($con, $query);
                if (mysqli_num_rows($query_run) > 0)
                {
                    $row = mysqli_fetch_assoc($query_run);
                    //$currency_id = $row['currency_id'];
                    $currency_id = 1;
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
                    };
                }
                else
                {*/
                        $currency = 'Ghana Cedi';
                        $decimals = 'Pesewa';
                //};
        
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
                    $result = $number_output;
                };
                return $result;
            }
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
            $pdf = new PDF('P','mm',array(80,150));
            $pdf->SetMargins(2.5,2.5,2.5);
            //$pdf->AliasNbPages('{pages}');
            $pdf->AddPage();
            $pdf->SetFont('Arial','B',8);
            //Cell(width, height, text, border, end line, align)

            $sql_company = "SELECT * FROM company WHERE company_id = '$company_id'";
            $result_company = mysqli_query($con,$sql_company);
            $row_company = mysqli_fetch_array($result_company);

            /*$pdf->Cell(75,5,$row_company['trading_name'],0,1,'C');
            $pdf->Cell(75,5,$row_company['location'],0,1,'C');
            $pdf->Cell(75,5,$row_company['telephone'],0,1,'C');*/
            
            $pdf->Cell(70,5,$row_company['trading_name'],0,1,'C');
            $pdf->SetFont('Arial','B',6);
            $pdf->Cell(70,5,$row_company['location'],0,1,'C');
            $pdf->MultiCell(70,5,$row_company['telephone'],0,'C',false);
            //$pdf->Cell(75,10,'LOGO',0,1,'C');

            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(75,5,'Official Receipt',0,1,'C');
            $pdf->Cell(75,5,'',0,1,'C');
            $pdf->SetFont('Arial','BI',8);
            $pdf->Cell(37,5,'Receipt No:'.$row['receipt_id'],0,0);
            $pdf->Cell(38,5,'Date:'.$row['date'],0,1,'R');
            $pdf->Cell(75,5,'',0,1,'C');

            $pdf->SetFont('Arial','I',8);
            $pdf->Cell(75,5,'Received From:'.$row['received_from'],0,1);
            $pdf->Cell(75,5,'',0,1,'C');

            $pdf->SetFont('Arial','I',5);
            $amount = $row['amount'];
            $amount_in_words = amount_in_words($amount);
            $amount_f = number_format($amount, 2, '.', ',');
            
            $pdf->SetFont('Arial','',8);
            $pdf->SetLineWidth(0.1);
            $pdf->Cell(75,5,'Amount in words:',0,1);
            $pdf->SetFont('Arial','I',8);
            $pdf->MultiCell(75,5,$amount_in_words,'B','L',false);
            $pdf->Cell(75,5,'',0,1,'C');
            $pdf->SetFont('Arial','',8);
            $pdf->Cell(75,5,'Remarks:',0,1);
            $pdf->Cell(75,5,$row['narration'],'B',1);
            $pdf->Cell(75,5,'',0,1);
            $pdf->SetFont('Arial','B',10);
            $pdf->SetLineWidth(0.5);
            $pdf->Cell(35,5,$amount_f,1,0,'C');
            
            
            $created_id = $row['created_by'];
            $created_datetime = $row['created_datetime'];
            $query_created = "SELECT * FROM users WHERE id = '$created_id'";
            $query_run_created = mysqli_query($con, $query_created);
            if(!empty($query_run_created) && mysqli_num_rows($query_run_created) > 0)
            {
                $row_created = mysqli_fetch_assoc($query_run_created);
                $created_by = $row_created['first_name'].''.$row_created['last_name'];
            }
            else
            {
                $created_by = 'Not Specified';
            };

            $pdf->SetFont('Arial','',8);
            $pdf->Cell(40,5,'........................................',0,1,'C');
            
            $pdf->Cell(35,5,'',0,0,'C');
            $pdf->Cell(40,5,'Manager Signature',0,1,'C');
            $pdf->SetFont('Arial','I',7);
            $pdf->Cell(75,5,'',0,1);
            $pdf->Cell(75,5,$created_by.':'.$created_datetime,0,1,'C');
            $pdf->Output();
        };
    };
?>