<?php
    require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/pdf/fpdf.php');
    
    //$image = $_SERVER['DOCUMENT_ROOT'] .'/img/logo.png';

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
            $this->SetY(-15);
            // Select Arial italic 8
            
            /*$sign = $_SERVER['DOCUMENT_ROOT'] .'/img/ac_sign.png';
            $this->Image($sign,80,250,50,30);*/
            global $con;
            $user_id = $_SESSION['user_id'];
            $sql_users = "SELECT * FROM users WHERE id = '$user_id'";
            $result_users = mysqli_query($con,$sql_users);
            if(!empty($result_users) && mysqli_num_rows($result_users) > 0)
            {
                $row_users = mysqli_fetch_array($result_users);
                $user_name = $row_users['first_name'].' '.$row_users['last_name'];
            }
            else 
            {
                $user_name = 'No User';
            };
            $this->SetFont('Arial','I',8);
            $this->Cell(273,5,'Printed by: '.$user_name.' on '.date('Y-m-d h:m:sa'),0,1,'C');
        }
    }

	date_default_timezone_set("Africa/Accra");

    $pdf = new PDF('L','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',8);
    //$pdf->Image($image,10,10,15,15);
    
    if(isset($_SESSION['admission_report_start_date']))
    {
        $company_id = $_SESSION['company_id'];
        $branch = $_SESSION['admission_report_branch_id'];
        $type = $_SESSION['admission_report_type'];
        $start_date = $_SESSION['admission_report_start_date'];
        $end_date = $_SESSION['admission_report_end_date'];
    
        $sql_company = "SELECT * FROM company WHERE company_id = '$company_id'";
        $result_company = mysqli_query($con,$sql_company);
        $row_company = mysqli_fetch_array($result_company);

        $pdf->SetFont('Arial','B',18);
        $pdf->Cell(280,10,$row_company['trading_name'],0,1,'C');
        $pdf->SetFont('Arial','I',8);
        $pdf->Cell(280,5,$row_company['address'].', '.$row_company['location'],0,1,'C');
        $pdf->Cell(280,5,$row_company['telephone'],0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(280,5,'',0,1,'C');
        $pdf->Cell(280,5,$type.' REPORT FROM '.$start_date.' TO '.$end_date,0,1,'C');
        $pdf->Cell(280,5,'',0,1,'C');

        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(10,5,'S/No',1,0,'C');
        $pdf->Cell(50,5,'Deseased',1,0,'C');
        $pdf->Cell(25,5,'Adm. Date',1,0,'C');
        $pdf->Cell(25,5,'Disch. Date',1,0,'C');
        $pdf->Cell(20,5,'Aging',1,0,'C');
        $pdf->Cell(25,5,'Total Bill',1,0,'C');
        $pdf->Cell(25,5,'Total Receipt',1,0,'C');
        $pdf->Cell(25,5,'Balance',1,0,'C');
        $pdf->Cell(45,5,'Relative',1,0,'C');
        $pdf->Cell(30,5,'Telephone',1,1,'C');
        $pdf->SetFont('Arial','I',8);

        $i=0;
        $sub_total_bill = 0;
        $sub_total_receipt = 0;
        $sub_total_balance = 0;
        $total_bill = 0;
        $total_receipt = 0;
        $total_balance = 0;

        if($branch == 'ALL')
        {
            $sql_branch = "SELECT * FROM branch WHERE company_id = '$company_id'";
        }
        else
        {
            $sql_branch = "SELECT * FROM branch WHERE branch_id = '$branch'";
        };
        $result_branch = mysqli_query($con,$sql_branch);
        if(!empty($result_branch) && mysqli_num_rows($result_branch) > 0)
        {
            while($row_branch = mysqli_fetch_array($result_branch))
            {
                $sub_total_bill = 0;
                $sub_total_receipt = 0;
                $sub_total_balance = 0;
                $branch_id = $row_branch['branch_id'];
                $branch_name = $row_branch['branch_name'];

                if($type == 'ALL')
                {
                    $sql_admission = "SELECT * FROM admission WHERE ((date_admitted BETWEEN
                    '$start_date' AND '$end_date') OR (date_discharged BETWEEN
                    '$start_date' AND '$end_date')) AND branch_id = '$branch_id'";
                }
                else if($type == 'ADMISSIONS')
                {
                    $sql_admission = "SELECT * FROM admission WHERE date_admitted BETWEEN
                    '$start_date' AND '$end_date' AND branch_id = '$branch_id'";
                }
                else if($type == 'DISCHARGES')
                {
                    $sql_admission = "SELECT * FROM admission WHERE date_discharged BETWEEN
                    '$start_date' AND '$end_date' AND branch_id = '$branch_id'";
                }
                else if($type == 'ON-ADMISSION')
                {
                    $sql_admission = "SELECT * FROM admission WHERE date_discharged=''
                    AND branch_id = '$branch_id'";
                };

                $result_admission = mysqli_query($con,$sql_admission);
                if(!empty($result_admission) && mysqli_num_rows($result_admission) > 0)
                {
                    $pdf->SetFont('Arial','B',8);
                    $pdf->Cell(280,5,$branch_name,1,1);

                    while($row_admission = mysqli_fetch_array($result_admission))
                    {
                        $i++;
                        if(isset($row_admission['date_discharged']) && $row_admission['date_discharged'] > 0)
                        {
                            $date_discharged = $row_admission['date_discharged'];
                            $discharged_date = new DateTime($date_discharged);
                        }
                        else
                        {
                            $discharged_date = new DateTime();
                        };
                        $date_admitted = $row_admission['date_admitted'];
                        $admission_date = new DateTime($date_admitted);
                        $days = $discharged_date->diff($admission_date)->format('%a');
                        
                        $refrigerator_id = $row_admission['refrigerator_id'];
                        $query_refrigerator = "SELECT * FROM refrigerator WHERE refrigerator_id='$refrigerator_id'";
                        $result_refrigerator = mysqli_query($con,$query_refrigerator);
                        if(!empty($result_refrigerator) && mysqli_num_rows($result_refrigerator) > 0)
                        {
                            $row_refrigerator = mysqli_fetch_assoc($result_refrigerator);
                            $refrigerator_price = $row_refrigerator['price'];
                        }
                        else
                        {
                            $refrigerator_price = 0;
                        };
                        $fridge_cost = $days * $refrigerator_price;

                        $admission_id = $row_admission['admission_id'];
                        $amount_service = 0;
                        $amount_service_f = 0;
                        $query_service = "SELECT * FROM admission_service WHERE admission_id = '$admission_id'";
                        $query_run_service = mysqli_query($con, $query_service);
                        if (!empty($query_run_service) && mysqli_num_rows($query_run_service) > 0)
                        {
                            while($row_service = mysqli_fetch_assoc($query_run_service))
                            {
                                $amount_service = $amount_service + $row_service['amount'];
                            };
                        };
            
                        $amount_stock = 0;
                        $amount_stock_f = 0;
                        $query_stock = "SELECT * FROM admission_stock WHERE admission_id = '$admission_id'";
                        $query_run_stock = mysqli_query($con, $query_stock);
                        if (!empty($query_run_stock) && mysqli_num_rows($query_run_stock) > 0)
                        {
                            while($row_stock = mysqli_fetch_assoc($query_run_stock))
                            {
                                $amount_stock = $amount_stock + $row_stock['amount'];
                            };
                        };
                        
                        $sum_receipt = 0;
                        $query_receipt = "SELECT * FROM receipt WHERE admission_id = '$admission_id'";
                        $query_run_receipt = mysqli_query($con, $query_receipt);
                        if (!empty($query_run_receipt) && mysqli_num_rows($query_run_receipt) > 0)
                        {
                            while($row_receipt = mysqli_fetch_assoc($query_run_receipt))
                            {
                                $sum_receipt = $sum_receipt + $row_receipt['amount'];
                            };
                        };
                        $total = $amount_service + $amount_stock;
                        $balance = $total - $sum_receipt;

                        $sub_total_bill = $sub_total_bill + $total;
                        $sub_total_receipt = $sub_total_receipt + $sum_receipt;
                        $sub_total_balance = $sub_total_balance + $balance;
                        $total_bill = $total_bill + $total;
                        $total_receipt = $total_receipt + $sum_receipt;
                        $total_balance = $total_balance + $balance;

                        $total_f = number_format($total, 2, '.', ',');
                        $sum_receipt_f = number_format($sum_receipt, 2, '.', ',');
                        $balance_f = number_format($balance, 2, '.', ',');
                        $fridge_cost_f = number_format($fridge_cost, 2, '.', ',');

                        $pdf->SetFont('Arial','I',8);
                        $pdf->Cell(10,5,$i,1,0,'C');
                        $pdf->Cell(50,5,$row_admission['deceased'],1,0);
                        $pdf->Cell(25,5,$row_admission['date_admitted'],1,0,'C');
                        $pdf->Cell(25,5,$row_admission['date_discharged'],1,0,'C');
                        $pdf->Cell(20,5,$days,1,0,'C');
                        $pdf->Cell(25,5,$total_f,1,0,'R');
                        $pdf->Cell(25,5,$sum_receipt_f,1,0,'R');
                        $pdf->Cell(25,5,$balance_f,1,0,'R');
                        $pdf->Cell(45,5,$row_admission['relative'],1,0);
                        $pdf->Cell(30,5,$row_admission['relative_phone_no'],1,1,'C');
                    };
                };
            };
            $sub_total_bill_f = number_format($sub_total_bill, 2, '.', ',');
            $sub_total_receipt_f = number_format($sub_total_receipt, 2, '.', ',');
            $sub_total_balance_f = number_format($sub_total_balance, 2, '.', ',');
            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(130,5,$branch_name.' SUB TOTAL',1,0,'R');
            $pdf->Cell(25,5,$sub_total_bill_f,1,0,'R');
            $pdf->Cell(25,5,$sub_total_receipt_f,1,0,'R');
            $pdf->Cell(25,5,$sub_total_balance_f,1,0,'R');
            $pdf->Cell(75,5,'',1,1);
        };
        
        $total_bill_f = number_format($total_bill, 2, '.', ',');
        $total_receipt_f = number_format($total_receipt, 2, '.', ',');
        $total_balance_f = number_format($total_balance, 2, '.', ',');
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(130,5,'GRAND TOTAL',1,0,'R');
        $pdf->Cell(25,5,$total_bill_f,1,0,'R');
        $pdf->Cell(25,5,$total_receipt_f,1,0,'R');
        $pdf->Cell(25,5,$total_balance_f,1,0,'R');
        $pdf->Cell(75,5,'',1,1);

        $pdf->Output();
    };
?>