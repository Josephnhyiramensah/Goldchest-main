<?php
    require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/pdf/fpdf.php');
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
    //Cell(width, height, text, border, end line, align)
    if(isset($_SESSION['stock_transfer_id']))
    {
        $company_id = $_SESSION['company_id'];
        $stock_transfer_id = $_SESSION['stock_transfer_id'];
        //$customer_name = $_SESSION['customer_name'];

        $query = "SELECT * FROM stock_transfer WHERE stock_trans_id = '$stock_transfer_id'";
        $query_run = mysqli_query($con, $query);
        if (mysqli_num_rows($query_run) > 0)
        {
            $i=0;
            $row = mysqli_fetch_assoc($query_run);
            $sql_company = "SELECT * FROM company WHERE company_id = '$company_id'";
            $result_company = mysqli_query($con,$sql_company);
            $row_company = mysqli_fetch_array($result_company);

            $pdf->SetFont('Arial','B',16);
            $pdf->Cell(200,5,$row_company['trading_name'],0,1,'C');
            $pdf->SetFont('Arial','B',10);

            $branch_id = $row['branch_id'];
            $sql_branch = "SELECT * FROM branch WHERE branch_id = '$branch_id'";
            $result_branch = mysqli_query($con,$sql_branch);
            $row_branch = mysqli_fetch_array($result_branch);
            if(isset($row_branch['branch_address']) && $row_branch['branch_address'] !=''){$address = $row_branch['branch_address'];}else{$address = $row_company['address'];};
            if(isset($row_branch['branch_telephone']) && $row_branch['branch_telephone'] !=''){$telephone = $row_branch['branch_telephone'];}else{$telephone = $row_company['telephone'];};
            if(isset($row_branch['branch_location']) && $row_branch['branch_location'] !=''){$location = $row_branch['branch_location'];}else{$location = $row_company['location'];};
            $pdf->Cell(200,5,$location,0,1,'C');
            $pdf->SetFont('Arial','B',9);
            $pdf->Cell(200,5,$telephone,0,1,'C');
            $pdf->Cell(200,5,'',0,1,'C');
            //$pdf->Cell(75,10,'LOGO',0,1,'C');
        
            $warehouse_from_id = $row['warehouse_from'];
            $query_wf = "SELECT * FROM warehouse WHERE warehouse_id = '$warehouse_from_id'";
            $query_run_wf = mysqli_query($con, $query_wf);
            if(!empty($query_run_wf) && mysqli_num_rows($query_run_wf) > 0)
            {
                $row_wf = mysqli_fetch_assoc($query_run_wf);
                $warehouse_from = $row_wf['warehouse_desc'];
            }
            else
            {
                $warehouse_from = 'Not Specified';
            };
        
            $warehouse_to_id = $row['warehouse_to'];
            $query_wt = "SELECT * FROM warehouse WHERE warehouse_id = '$warehouse_to_id'";
            $query_run_wt = mysqli_query($con, $query_wt);
            if(!empty($query_run_wt) && mysqli_num_rows($query_run_wt) > 0)
            {
                $row_wt = mysqli_fetch_assoc($query_run_wt);
                $warehouse_to = $row_wt['warehouse_desc'];
            }
            else
            {
                $warehouse_to = 'Not Specified';
            };

            $pdf->SetFont('Arial','',8);
            $pdf->Cell(50,5,'Voucher No: '.$row['sno'],0,0);
            $pdf->SetFont('Arial','BU',12);
            $pdf->Cell(100,5,'STOCK TRANSFER VOUCHER',0,0,'C');
            $pdf->SetFont('Arial','',8);
            $pdf->Cell(50,5,'Date: '.$row['date'],0,1,'R');
            $pdf->Cell(200,5,'',0,1);
            $pdf->Cell(100,5,'Warehouse (Source): '.$warehouse_from,0,0);
            $pdf->Cell(100,5,'Warehouse (Destination): '.$warehouse_to,0,1,'R');
            $pdf->Cell(200,5,'Narration: ',0,1);
            $pdf->Cell(200,5,'',0,1);

            $query_sales_items = "SELECT * FROM stock_transfer_items WHERE stock_trans_id = '$stock_transfer_id'
            AND qty_transferred > 0";
            $query_run_sales_items = mysqli_query($con, $query_sales_items);
            if (mysqli_num_rows($query_run_sales_items) > 0)
            {
                $pdf->SetFont('Arial','B',8);
                $pdf->Cell(10,5,'S/No',1,0,'C');
                $pdf->Cell(150,5,'Description',1,0);
                $pdf->Cell(40,5,'Qty',1,1,'C');
                $total_amount = 0;
                while($row_sales_items = mysqli_fetch_assoc($query_run_sales_items))
                {
                    $i++;
                    $stock_item_id = $row_sales_items['stock_item_id'];
                    $query_nds_item = "SELECT * FROM stock_items WHERE stock_item_id = '$stock_item_id'";
                    $query_run_nds_item = mysqli_query($con, $query_nds_item);
                    $row_nds_item = mysqli_fetch_assoc($query_run_nds_item);
                    $pdf->SetFont('Arial','I',8);
                    $pdf->Cell(10,5,$i,1,0,'C');
                    $pdf->Cell(150,5,$row_nds_item['stock_item'],1,0);
                    $pdf->Cell(40,5,$row_sales_items['qty_transferred'],1,1,'C');
                    //$total_amount = $total_amount + $row_sales_items['amount'];
                };
            };
            $created_id = $row['created_by'];
            $query_creator = "SELECT * FROM users WHERE id='$created_id'";
            $result_creator = mysqli_query($con,$query_creator);
            $row_creator = mysqli_fetch_assoc($result_creator);
            $pdf->SetFont('Arial','I',7);
            $pdf->Cell(200,10,'',0,1,'C');
            $pdf->Cell(50,5,'..............................................................',0,0,'C');
            $pdf->Cell(50,5,'..............................................................',0,0,'C');
            $pdf->Cell(50,5,'..............................................................',0,0,'C');
            $pdf->Cell(50,5,'..............................................................',0,1,'C');
            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(50,5,$row['transferred_by'],0,0,'C');
            $pdf->Cell(50,5,$row['collected_by'],0,0,'C');
            $pdf->Cell(50,5,$row['requested_by'],0,0,'C');
            $pdf->Cell(50,5,$row['approved_by'],0,1,'C');
            $pdf->SetFont('Arial','I',7);
            $pdf->Cell(50,5,'(TRANSFERRED BY)',0,0,'C');
            $pdf->Cell(50,5,'(COLLECTED BY)',0,0,'C');
            $pdf->Cell(50,5,'(REQUESTED BY)',0,0,'C');
            $pdf->Cell(50,5,'(APPROVED BY)',0,1,'C');
        };
    };
    $pdf->Output();