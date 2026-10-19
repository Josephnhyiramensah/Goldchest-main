<?php
    require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/pdf/fpdf.php');
    global $con;

    class PDF extends FPDF
    {
        function Footer()
        {
            // Go to 1.5 cm from bottom
            //$this->SetY(-15);
            // Select Arial italic 8
            //$this->SetFont('Arial','I',8);
            // Print centered page number
            //$this->Cell(0,10,'Page '.$this->PageNo().' - {pages}',0,0,'C');
        }
    }
    //A4 width: 219mm
    //default margin: 10mm each side
    //Writable horizontal: 219mm - (10mm*2) = 189mm
    $pdf = new PDF('P','mm',array(80,200));
    $pdf->SetMargins(2.5,2.5,2.5);
    //$pdf->AliasNbPages('{pages}');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',8);
    //Cell(width, height, text, border, end line, align)
    if(isset($_SESSION['admission_id']))
    {
        $company_id = $_SESSION['company_id'];
        $admission_id = $_SESSION['admission_id'];

        $sql_company = "SELECT * FROM company WHERE company_id = '$company_id'";
        $result_company = mysqli_query($con,$sql_company);
        $row_company = mysqli_fetch_array($result_company);

        $pdf->Cell(75,5,$row_company['trading_name'],0,1,'C');
        $pdf->Cell(75,5,$row_company['location'].', '. $row_company['telephone'],0,1,'C');
        //$pdf->Cell(75,10,'LOGO',0,1,'C');
        $pdf->Cell(75,5,'',0,1);

        $pdf->SetFont('Arial','BU',12);
        $pdf->Cell(75,8,'STATEMENT',0,1,'C');

        $query = "SELECT * FROM admission WHERE admission_id = '$admission_id'";
        $query_run = mysqli_query($con, $query);
        if (!empty($query_run) && mysqli_num_rows($query_run) > 0)
        {
            $row = mysqli_fetch_assoc($query_run);
            $adm_date_admitted = $row['date_admitted'];
            $adm_date_discharged = $row['date_discharged'];
            $adm_date_disch = new DateTime($adm_date_discharged);
            $adm_date_admit = new DateTime($adm_date_admitted);
            $total_days = $adm_date_disch->diff($adm_date_admit)->format('%a');

            $pdf->SetFont('Arial','',8);
            $pdf->Cell(38,5,'No: '.$row['admission_id'],0,0);
            $pdf->Cell(37,5,'Date: '.$row['date_admitted'],0,1);
            $pdf->Cell(75,5,'Deseased:'.$row['deceased'],0,1);
            $pdf->Cell(38,5,'Relative:'.$row['relative'],0,0);
            $pdf->Cell(37,5,'Telephone:'.$row['relative_phone_no'],0,1);

            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(50,5,'BILLS',1,0,'C');
            $pdf->Cell(25,5,'AMOUNT',1,1,'C');
            $pdf->SetFont('Arial','I',8);

            //TOTAL BILL
                //SERVICE LIST
                    $amount_service = 0;
                    $amount_service_f = 0;
                    $query_service = "SELECT * FROM admission_service WHERE admission_id = '$admission_id'";
                    $query_run_service = mysqli_query($con, $query_service);
                    if (!empty($query_run_service) && mysqli_num_rows($query_run_service) > 0)
                    {
                        while($row_service = mysqli_fetch_assoc($query_run_service))
                        {
                            $ledger_id = $row_service['ledger_id'];
                            $sql_ledger = "SELECT * FROM ledgers WHERE ledger_id = '$ledger_id'";
                            $result_ledger = mysqli_query($con,$sql_ledger);
                            if(!empty($result_ledger) && mysqli_num_rows($result_ledger) > 0)
                            {
                                $row_ledger = mysqli_fetch_array($result_ledger);
                                $service_ledger = $row_ledger['ledger_desc'];
                            }
                            else
                            {
                                $service_ledger = 'Not Specified';
                            };
                            
                            $amt_service = $row_service['amount'];
                            $amt_service_f = number_format($amt_service, 2, '.', ',');
                            $pdf->Cell(50,5,$service_ledger,1,0);
                            $pdf->Cell(25,5,$amt_service_f,1,1,'R');
                            $amount_service = $amount_service + $row_service['amount'];
                        };
                    };

                //INVENTORY LIST
                    $amount_stock = 0;
                    $amount_stock_f = 0;
                    $query_stock = "SELECT * FROM admission_stock WHERE admission_id = '$admission_id'";
                    $query_run_stock = mysqli_query($con, $query_stock);
                    if (!empty($query_run_stock) && mysqli_num_rows($query_run_stock) > 0)
                    {
                        while($row_stock = mysqli_fetch_assoc($query_run_stock))
                        {
                            $stock_item_id = $row_stock['stock_item_id'];
                            $sql_stock_item = "SELECT * FROM stock_items WHERE stock_item_id = '$stock_item_id'";
                            $result_stock_item = mysqli_query($con,$sql_stock_item);
                            $row_stock_item = mysqli_fetch_array($result_stock_item);
                            
                            $amt_stock = $row_stock['amount'];
                            $amt_stock_f = number_format($amt_stock, 2, '.', ',');
                            $pdf->Cell(50,5,$row_stock_item['stock_item'],1,0);
                            $pdf->Cell(25,5,$amt_stock_f,1,1,'R');
                            $amount_stock = $amount_stock + $row_stock['amount'];
                        };
                    };

                $total = $amount_service + $amount_stock;
                $total_f = number_format($total, 2, '.', ',');
                $pdf->SetFont('Arial','B',8);
                $pdf->Cell(50,5,'TOTAL BILL',1,0);
                $pdf->Cell(25,5,$total_f,1,1,'R');
                $pdf->Cell(50,5,'RECEIPT',1,0,'C');
                $pdf->Cell(25,5,'',1,1);
                $pdf->SetFont('Arial','I',8);

            //RECEIPT
                $total_receipt = 0;
                $total_refund = 0;
                $query_receipt = "SELECT * FROM receipt WHERE admission_id = '$admission_id'";
                $query_run_receipt = mysqli_query($con, $query_receipt);
                if (!empty($query_run_receipt) && mysqli_num_rows($query_run_receipt) > 0)
                {
                    while($row_receipt = mysqli_fetch_assoc($query_run_receipt))
                    {
                        $amount_receipt = $row_receipt['amount'];
                        $amount_receipt_f = number_format($amount_receipt, 2, '.', ',');
                        $pdf->Cell(50,5,$row_receipt['date'],1,0);
                        $pdf->Cell(25,5,$amount_receipt_f,1,1,'R');
                        $total_receipt = $total_receipt + $row_receipt['amount'];

                        //REFUND
                            $receipt_id = $row_receipt['receipt_id'];
                            $query_refund = "SELECT * FROM refund WHERE receipt_id = '$receipt_id'";
                            $query_run_refund = mysqli_query($con, $query_refund);
                            if (!empty($query_run_refund) && mysqli_num_rows($query_run_refund) > 0)
                            {
                                while($row_refund = mysqli_fetch_assoc($query_run_refund))
                                {
                                    //$amount_refund = $row_refund['amount'];
                                    $total_refund = $total_refund + $row_refund['amount'];
                                };
                            };
                    };
                };
                $total_receipt_f = number_format($total_receipt, 2, '.', ',');
                $total_refund_f = number_format($total_refund, 2, '.', ',');
                $pdf->SetFont('Arial','B',8);
                $pdf->Cell(50,5,'TOTAL RECEIPT',1,0);
                $pdf->Cell(25,5,$total_receipt_f,1,1,'R');
                $pdf->Cell(50,5,'TOTAL REFUND',1,0);
                $pdf->Cell(25,5,$total_refund_f,1,1,'R');

            //DISCOUNT
                $total_discount = 0;
                $query_discount = "SELECT * FROM discount WHERE admission_id = '$admission_id'";
                $query_run_discount = mysqli_query($con, $query_discount);
                if (!empty($query_run_discount) && mysqli_num_rows($query_run_discount) > 0)
                {
                    while($row_discount = mysqli_fetch_assoc($query_run_discount))
                    {
                        $amount_discount = $row_discount['amount'];
                        $amount_discount_f = number_format($amount_discount, 2, '.', ',');
                        $pdf->SetFont('Arial','I',8);
                        $pdf->Cell(50,5,$row_discount['date'],1,0);
                        $pdf->Cell(25,5,$amount_discount_f,1,1,'R');
                        $total_discount = $total_discount + $row_discount['amount'];
                    };
                };
                $total_discount_f = number_format($total_discount, 2, '.', ',');
                $pdf->SetFont('Arial','B',8);
                $pdf->Cell(50,5,'TOTAL DISCOUNT',1,0);
                $pdf->Cell(25,5,$total_discount_f,1,1,'R');

            //BALANCE
                $balance = $total - $total_receipt - $total_refund - $total_discount;
                $balance_f = number_format($balance, 2, '.', ',');
                $pdf->SetFont('Arial','B',8);
                $pdf->Cell(50,5,'BALANCE',1,0,'C');
                $pdf->Cell(25,5,$balance_f,1,1,'R');

            //REFRIGERATOR ANALYSIS
                $pdf->Cell(75,2,'',0,1);
                $pdf->SetFont('Arial','B',6);
                $pdf->Cell(75,5,'REFRIGERATOR ANALYSIS',1,1,'C');
                $pdf->Cell(15,5,'DATE IN',1,0,'C');
                $pdf->Cell(15,5,'DATE OUT',1,0,'C');
                $pdf->Cell(10,5,'DAYS',1,0,'C');
                $pdf->Cell(10,5,'PRICE',1,0,'C');
                $pdf->Cell(25,5,'AMOUNT',1,1,'C');
                
                $total_freeze = 0;
                $query_ref = "SELECT * FROM refrigerator_list WHERE admission_id='$admission_id'";
                $result_ref = mysqli_query($con,$query_ref);
                if(!empty($result_ref) && mysqli_num_rows($result_ref) > 0)
                {
                    while($row_ref = mysqli_fetch_assoc($result_ref))
                    {
                        $refrigerator_id = $row_ref['refrigerator_id'];
                        $sql_ref_select = "SELECT * FROM refrigerator WHERE refrigerator_id = '$refrigerator_id'";
                        $result_ref_select = mysqli_query($con,$sql_ref_select);
                        $row_ref_select = mysqli_fetch_assoc($result_ref_select);
                        $refrigerator = $row_ref_select['refrigerator'];
                        $pdf->SetFont('Arial','B',6);
                        $pdf->Cell(75,5,$refrigerator,1,1);
                        $pdf->SetFont('Arial','I',6);

                        $date_admitted = $row_ref['date_admitted'];
                        if(isset($row_ref['date_discharged']) && $row_ref['date_discharged'] > 0)
                        {
                            $date_discharged = $row_ref['date_discharged'];
                        }
                        else
                        {
                            if(isset($row['date_discharged']) && $row['date_discharged'] > 0)
                            {
                                $date_discharged = $row['date_discharged'];
                            }
                            else
                            {
                                $date_discharged = date('Y-m-d');
                            };
                        };
                        $discharged_date = new DateTime($date_discharged);
                        $admission_date = new DateTime($date_admitted);
                        $days = $discharged_date->diff($admission_date)->format('%a');
                        
                        //RETROSPECTIVE
                            $query_ref_pl = "SELECT * FROM refrigerator_price WHERE refrigerator_id='$refrigerator_id'
                            AND date <= '$date_admitted' ORDER BY date DESC";
                            $result_ref_pl = mysqli_query($con,$query_ref_pl);
                            if(!empty($result_ref_pl) && mysqli_num_rows($result_ref_pl) > 0)
                            {
                                $row_ref_pl = mysqli_fetch_assoc($result_ref_pl);
                                $start_price = $row_ref_pl['price'];
                            }
                            else
                            {
                                $start_price = 0;
                            };

                            $total_refrigerator_cost = 0;
                            $start_date = $date_admitted;

                            $date_start = $date_admitted;
                            $date_end = $date_discharged;
                            $sp = $start_price;
                            $pricelist_count = 1;
                            $x=0;
                            if($days > 0)  
                            {
                                for($i = 0; $i < $days; $i++)
                                {  
                                    $x++;
                                    $total_freeze = $total_freeze + $start_price;
                                    $total_refrigerator_cost = $total_refrigerator_cost + $start_price;
                                    $repeat = strtotime("+1 day",strtotime($start_date));
                                    $start_date = date('Y-m-d',$repeat);
                                    //echo $start_date.', '.$start_price.'</br>';
                                    $query_pl = "SELECT * FROM refrigerator_price WHERE refrigerator_id='$refrigerator_id'
                                    AND date = '$start_date'";
                                    $result_pl = mysqli_query($con,$query_pl);
                                    if(!empty($result_pl) && mysqli_num_rows($result_pl) > 0)
                                    {
                                        $row_pl = mysqli_fetch_assoc($result_pl);
                                        $amount_list = $x * $start_price;
                                        $start_price_f = number_format($start_price, 2, '.', ',');
                                        $amount_list_f = number_format($amount_list, 2, '.', ',');

                                        $date_end = $row_pl['date'];
                                        $pdf->Cell(15,5,$date_start,1,0,'C');
                                        $pdf->Cell(15,5,$date_end,1,0,'C');
                                        $pdf->Cell(10,5,$x,1,0,'C');
                                        $pdf->Cell(10,5,$start_price_f,1,0,'R');
                                        $pdf->Cell(25,5,$amount_list_f,1,1,'R');

                                        $start_price = $row_pl['price'];
                                        $date_start = $row_pl['date'];
                                        $pricelist_count++;
                                        $x=0;
                                    };
                                }; 
                                if($pricelist_count < 2)
                                {
                                    $amount_list = $days * $start_price;
                                    $start_price_f = number_format($start_price, 2, '.', ',');
                                    $amount_list_f = number_format($amount_list, 2, '.', ',');

                                    $pdf->Cell(15,5,$date_start,1,0,'C');
                                    $pdf->Cell(15,5,$date_end,1,0,'C');
                                    $pdf->Cell(10,5,$days,1,0,'C');
                                    $pdf->Cell(10,5,$start_price,1,0,'R');
                                    $pdf->Cell(25,5,$amount_list_f,1,1,'R');
                                }
                                else
                                {
                                    $date_end = $date_discharged;
                                    $amount_list = $x * $start_price;
                                    $start_price_f = number_format($start_price, 2, '.', ',');
                                    $amount_list_f = number_format($amount_list, 2, '.', ',');
                                    $pdf->Cell(15,5,$date_start,1,0,'C');
                                    $pdf->Cell(15,5,$date_end,1,0,'C');
                                    $pdf->Cell(10,5,$x,1,0,'C');
                                    $pdf->Cell(10,5,$start_price_f,1,0,'R');
                                    $pdf->Cell(25,5,$amount_list_f,1,1,'R');
                                };
                            };
                    };
                };
                $total_freeze_f = number_format($total_freeze, 2, '.', ',');
                $pdf->SetFont('Arial','B',6);
                $pdf->Cell(30,5,'TOTAL',1,0,'C');
                $pdf->Cell(10,5,$total_days,1,0,'C');
                $pdf->Cell(10,5,'',1,0,'R');
                $pdf->Cell(25,5,$total_freeze_f,1,1,'R');

            //FOOTER
                $pdf->SetFont('Arial','I',6);
                $pdf->Cell(75,5,'Have our condolence!',0,1,'C');
                
                $created_id = $row['created_by'];
                $created_datetime = $row['created_datetime'];
                $query_created = "SELECT * FROM users WHERE id = '$created_id'";
                $query_run_created = mysqli_query($con, $query_created);
                if(!empty($query_run_created) && mysqli_num_rows($query_run_created) > 0)
                {
                    $row_created = mysqli_fetch_assoc($query_run_created);
                    $created_by = $row_created['first_name'].' '.$row_created['last_name'];
                }
                else
                {
                    $created_by = 'Not Specified';
                };
                $pdf->Cell(75,5,$created_by.':'.$created_datetime,0,1,'C');
        };
    };

    $pdf->Output();