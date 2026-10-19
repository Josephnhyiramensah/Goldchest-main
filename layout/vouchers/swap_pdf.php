<?php
    require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/pdf/fpdf.php');
    global $con;

    class PDF extends FPDF
    {
        function Footer()
        {
            // Go to 1.5 cm from bottom
            $this->SetY(-20);
            
            $this->SetFont('Arial','I',9);
            $this->Cell(66,5,'..............................................................',0,0,'C');
            $this->Cell(66,5,'..............................................................',0,0,'C');
            $this->Cell(68,5,'..............................................................',0,1,'C');
            $this->Cell(66,5,'PREPARED BY',0,0,'C');
            $this->Cell(66,5,'CHECKED BY',0,0,'C');
            $this->Cell(68,5,'APPROVED BY',0,1,'C');
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
    if(isset($_SESSION['swap_id']))
    {
        $company_id = $_SESSION['company_id'];
        $swap_id = $_SESSION['swap_id'];

        $sql_company = "SELECT * FROM company WHERE company_id = '$company_id'";
        $result_company = mysqli_query($con,$sql_company);
        $row_company = mysqli_fetch_array($result_company);

        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(200,5,'',0,1,'C');
        $pdf->Cell(200,5,$row_company['trading_name'],0,1,'C');
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(200,5,$row_company['location'],0,1,'C');
        $pdf->Cell(200,5,$row_company['telephone'],0,1,'C');
        $pdf->Cell(200,5,'',0,1);

        $pdf->SetFont('Arial','BU',14);
        $pdf->Cell(200,8,'SWAP VOUCHER',0,1,'C');
        $pdf->Cell(200,5,'',0,1,'C');

        $query = "SELECT * FROM swap WHERE swap_id = '$swap_id'";
        $query_run = mysqli_query($con, $query);
        if (mysqli_num_rows($query_run) > 0)
        {
            $row = mysqli_fetch_assoc($query_run);
            $customer_id = $row['customer_id'];

            $query_customer = "SELECT * FROM customer WHERE customer_id = '$customer_id'";
            $query_run_customer = mysqli_query($con, $query_customer);
            if (mysqli_num_rows($query_run_customer) > 0)
            {
                $row_customer = mysqli_fetch_assoc($query_run_customer);
                $customer_name = $row_customer['first_name'].' '.$row_customer['last_name'];
            }
            else
            {
                $customer_name = 'Not Specified';
            };
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(100,7,'Invoice No: '.$row['sno'],0,0);
            $pdf->Cell(100,7,'Date: '.$row['date'],0,1);
            $pdf->Cell(200,7,'Sold To:'.$customer_name,0,1);
            $pdf->Cell(200,7,'Narration:'.$row['narration'],0,1);
            $pdf->Cell(200,5,'',0,1);

            $query_sales_items = "SELECT * FROM customer_warehouse WHERE swap_id = '$swap_id' AND qty_out > 0";
            $query_run_sales_items = mysqli_query($con, $query_sales_items);
            if (mysqli_num_rows($query_run_sales_items) > 0)
            {
                $pdf->SetFont('Arial','B',10);
                $pdf->Cell(200,10,'CONSUMPTION',1,1);
                $pdf->SetFont('Arial','B',10);
                $pdf->Cell(160,5,'Stock Item',1,0,'C');
                $pdf->Cell(40,5,'Qty',1,1,'C');
                $total_amount = 0;
                while($row_sales_items = mysqli_fetch_assoc($query_run_sales_items))
                {
                    $stock_item_id = $row_sales_items['stock_item_id'];
                    $query_stock_item = "SELECT * FROM stock_items WHERE stock_item_id = '$stock_item_id'";
                    $query_run_stock_item = mysqli_query($con, $query_stock_item);
                    $row_stock_item = mysqli_fetch_assoc($query_run_stock_item);
                    $pdf->SetFont('Arial','I',10);
                    $pdf->Cell(160,5,$row_stock_item['stock_item'],1,0);
                    $pdf->Cell(40,5,$row_sales_items['qty_out'],1,1,'C');
                };
            };

            $query_sales_items = "SELECT * FROM customer_warehouse WHERE swap_id = '$swap_id' AND qty_in > 0";
            $query_run_sales_items = mysqli_query($con, $query_sales_items);
            if (mysqli_num_rows($query_run_sales_items) > 0)
            {
                $pdf->SetFont('Arial','B',10);
                $pdf->Cell(200,10,'PRODUCTION',1,1);
                $pdf->SetFont('Arial','B',10);
                $pdf->Cell(160,5,'Stock Item',1,0,'C');
                $pdf->Cell(40,5,'Qty',1,1,'C');
                $total_amount = 0;
                while($row_sales_items = mysqli_fetch_assoc($query_run_sales_items))
                {
                    $stock_item_id = $row_sales_items['stock_item_id'];
                    $query_stock_item = "SELECT * FROM stock_items WHERE stock_item_id = '$stock_item_id'";
                    $query_run_stock_item = mysqli_query($con, $query_stock_item);
                    $row_stock_item = mysqli_fetch_assoc($query_run_stock_item);
                    $pdf->SetFont('Arial','I',10);
                    $pdf->Cell(160,5,$row_stock_item['stock_item'],1,0);
                    $pdf->Cell(40,5,$row_sales_items['qty_in'],1,1,'C');
                };
            };
        };
    };

    $pdf->Output();
?>