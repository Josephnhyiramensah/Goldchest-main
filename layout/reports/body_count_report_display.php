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
            $this->Cell(190,5,'Printed by: '.$user_name.' on '.date('Y-m-d h:m:sa'),0,1,'C');
        }
    }

	date_default_timezone_set("Africa/Accra");

    $pdf = new PDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',8);
    //$pdf->Image($image,10,10,15,15);
    
    if(isset($_SESSION['body_count_report_start_date']))
    {
        $company_id = $_SESSION['company_id'];
        $branch = $_SESSION['body_count_report_branch_id'];
        $type = $_SESSION['body_count_report_type'];
        $start_date = date($_SESSION['body_count_report_start_date']);
        $end_date = date($_SESSION['body_count_report_end_date']);
    
        $sql_company = "SELECT * FROM company WHERE company_id = '$company_id'";
        $result_company = mysqli_query($con,$sql_company);
        $row_company = mysqli_fetch_array($result_company);

        $pdf->SetFont('Arial','B',18);
        $pdf->Cell(190,5,$row_company['trading_name'],0,1,'C');
        $pdf->SetFont('Arial','I',8);
        $pdf->Cell(190,5,$row_company['address'].', '.$row_company['location'],0,1,'C');
        $pdf->Cell(190,5,$row_company['telephone'],0,1,'C');
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(190,5,$type.' REPORT FROM '.$start_date.' TO '.$end_date,0,1,'C');

        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(50,5,'Date',1,0,'C');
        $pdf->Cell(35,5,'Opening Balance',1,0,'C');
        $pdf->Cell(35,5,'Admissions',1,0,'C');
        $pdf->Cell(35,5,'Discharges',1,0,'C');
        $pdf->Cell(35,5,'Closing Balance',1,1,'C');
        $pdf->SetFont('Arial','I',8);

        $i=0;
        $grand_total_admissions = 0;
        $grand_total_discharges = 0;

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
                $branch_admissions = 0;
                $branch_discharges = 0;
                $branch_id = $row_branch['branch_id'];
                $branch_name = $row_branch['branch_name'];
                
                $pdf->SetFont('Arial','B',8);
                $pdf->Cell(190,5,$branch_name,1,1);

                $date_start = new DateTime($start_date);
                $date_end = new DateTime($end_date);
                $days = $date_end->diff($date_start)->format('%a');

                $query_prev_adm = "SELECT COUNT(admission_id) AS admissions FROM admission WHERE 
                branch_id='$branch_id' AND date_admitted < '$start_date'";
                /*$query_prev_adm = "SELECT COUNT(admission_id) AS admissions FROM admission WHERE 
                branch_id='$branch_id' AND date(date_admitted) < '$start_date'";*/
                $result_prev_adm = mysqli_query($con,$query_prev_adm);
                if(!empty($result_prev_adm) && mysqli_num_rows($result_prev_adm) > 0)
                {
                    $row_prev_adm = mysqli_fetch_assoc($result_prev_adm);
                    $previous_admissions = $row_prev_adm['admissions'];
                }
                else
                {
                    $previous_admissions = 0;
                };

                $query_prev_disch = "SELECT COUNT(admission_id) AS discharges FROM admission WHERE 
                branch_id='$branch_id' AND date_admitted < '$start_date' AND 
                (date_discharged < '$start_date' AND date_discharged !='')";
                /*$query_prev_disch = "SELECT COUNT(admission_id) AS discharges FROM admission WHERE 
                branch_id='$branch_id' AND date(date_admitted) < '$start_date' AND 
                date(date_discharged) < '$start_date'";*/
                $result_prev_disch = mysqli_query($con,$query_prev_disch);
                if(!empty($result_prev_disch) && mysqli_num_rows($result_prev_disch) > 0)
                {
                    $row_prev_disch = mysqli_fetch_assoc($result_prev_disch);
                    $previous_discharges = $row_prev_disch['discharges'];
                }
                else
                {
                    $previous_discharges = 0;
                };

                $opening_bal = $previous_admissions - $previous_discharges;
                $opening_balance = $previous_admissions - $previous_discharges;

                if($days > 0)  
                {  
                    for($i = 0; $i < $days; $i++)
                    {  
                        $query_adm = "SELECT COUNT(admission_id) AS admissions FROM admission WHERE 
                        branch_id='$branch_id' AND date_admitted='$start_date'";
                        $result_adm = mysqli_query($con,$query_adm);
                        if(!empty($result_adm) && mysqli_num_rows($result_adm) > 0)
                        {
                            $row_adm = mysqli_fetch_assoc($result_adm);
                            $admissions = $row_adm['admissions'];
                        }
                        else
                        {
                            $admissions = 0;
                        };

                        $query_disch = "SELECT COUNT(admission_id) AS discharges  FROM admission WHERE 
                        branch_id='$branch_id' AND date_discharged='$start_date'";
                        $result_disch = mysqli_query($con,$query_disch);
                        if(!empty($result_disch) && mysqli_num_rows($result_disch) > 0)
                        {
                            $row_disch = mysqli_fetch_assoc($result_disch);
                            $discharges = $row_disch['discharges'];
                        }
                        else
                        {
                            $discharges = 0;
                        };
                        $closing_bal = $opening_bal + $admissions - $discharges;

                        if($admissions > 0 || $discharges > 0)
                        {
                            $pdf->SetFont('Arial','I',8);
                            $pdf->Cell(50,5,$start_date,1,0,'C');
                            $pdf->Cell(35,5,$opening_bal,1,0,'C');
                            $pdf->Cell(35,5,$admissions,1,0,'C');
                            $pdf->Cell(35,5,$discharges,1,0,'C');
                            $pdf->Cell(35,5,$closing_bal,1,1,'C');
                        };

                        $branch_admissions = $branch_admissions + $admissions;
                        $branch_discharges = $branch_discharges + $discharges;
                        $grand_total_admissions = $grand_total_admissions + $admissions;
                        $grand_total_discharges = $grand_total_discharges + $discharges;

                        $repeat = strtotime("+1 day",strtotime($start_date));
                        $start_date = date('Y-m-d',$repeat);
                        $opening_bal = $closing_bal;
                    }; 
                };

                $pdf->SetFont('Arial','B',8);
                $pdf->Cell(50,5,$branch_name.' TOTAL',1,0);
                $pdf->Cell(35,5,$opening_balance,1,0,'C');
                $pdf->Cell(35,5,$branch_admissions,1,0,'C');
                $pdf->Cell(35,5,$branch_discharges,1,0,'C');
                $pdf->Cell(35,5,$opening_balance + $branch_admissions - $branch_discharges,1,1,'C');
            };
            /*$pdf->SetFont('Arial','B',8);
            $pdf->Cell(50,5,'GRAND TOTAL',1,0);
            $pdf->Cell(35,5,$opening_balance,1,0,'C');
            $pdf->Cell(35,5,$grand_total_admissions,1,0,'C');
            $pdf->Cell(35,5,$grand_total_discharges,1,0,'C');*/
        };
        $pdf->Output();
    };