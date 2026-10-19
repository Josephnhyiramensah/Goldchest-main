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
    $pdf = new PDF('P','mm',array(80,135));
    $pdf->SetMargins(2.5,2.5,2.5);
    //$pdf->AliasNbPages('{pages}');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',8);
    //Cell(width, height, text, border, end line, align)
    if(isset($_SESSION['nds_sales_id']))
    {
        $company_id = $_SESSION['company_id'];
        $nds_sales_id = $_SESSION['nds_sales_id'];
        //$customer_name = $_SESSION['customer_name'];

        $sql_company = "SELECT * FROM company WHERE company_id = '$company_id'";
        $result_company = mysqli_query($con,$sql_company);
        $row_company = mysqli_fetch_array($result_company);

        $pdf->Cell(75,5,$row_company['trading_name'],0,1,'C');
        $pdf->Cell(75,5,$row_company['location'],0,1,'C');
        $pdf->Cell(75,5,$row_company['telephone'],0,1,'C');
        //$pdf->Cell(75,10,'LOGO',0,1,'C');

        $query = "SELECT * FROM nds_sales WHERE nds_sales_id = '$nds_sales_id'";
        $query_run = mysqli_query($con, $query);
        if (mysqli_num_rows($query_run) > 0)
        {
            $row = mysqli_fetch_assoc($query_run);

            $customer_id = $row['customer_id'];
            $query_customer = "SELECT * FROM customer WHERE customer_id = '$customer_id'";
            $query_run_customer = mysqli_query($con, $query_customer);
            if(!empty($query_run_customer) && mysqli_num_rows($query_run_customer) > 0)
            {
                $row_customer = mysqli_fetch_assoc($query_run_customer);
                $customer_name = $row_customer['first_name'].''.$row_customer['last_name'];
                $customer_phone = $row_customer['phone_number'];
            }
            else
            {
                $customer_name = 'Not Specified';
                $customer_phone = 'Not Specified';
            };

            $pdf->SetFont('Arial','',8);
            $pdf->Cell(20,5,'Invoice No: '.$row['sno'],0,0);
            $pdf->SetFont('Arial','BU',10);
            $pdf->Cell(35,5,'SALES INVOICE',0,0);
            $pdf->SetFont('Arial','',8);
            $pdf->Cell(20,5,'Date: '.$row['date'],0,1);
            $pdf->Cell(38,5,'Customer:'.$customer_name,0,0);
            $pdf->Cell(37,5,'Telephone:'.$customer_phone,0,1);
            $pdf->Cell(75,5,'Narration:',0,1);

            $query_sales_items = "SELECT * FROM customer_warehouse WHERE nds_sales_id = '$nds_sales_id'";
            $query_run_sales_items = mysqli_query($con, $query_sales_items);
            if (mysqli_num_rows($query_run_sales_items) > 0)
            {
                $pdf->SetFont('Arial','B',8);
                $pdf->Cell(40,5,'Item',1,0,'C');
                $pdf->Cell(10,5,'Qty',1,0,'C');
                $pdf->Cell(10,5,'Price',1,0,'C');
                $pdf->Cell(15,5,'Amount',1,1,'C');
                $total_amount = 0;
                while($row_sales_items = mysqli_fetch_assoc($query_run_sales_items))
                {
                    $stock_item_id = $row_sales_items['stock_item_id'];
                    $query_nds_item = "SELECT * FROM stock_items WHERE stock_item_id = '$stock_item_id'";
                    $query_run_nds_item = mysqli_query($con, $query_nds_item);
                    $row_nds_item = mysqli_fetch_assoc($query_run_nds_item);
                    $pdf->SetFont('Arial','I',6);
                    $pdf->Cell(40,5,$row_nds_item['stock_item'],1,0);
                    $pdf->Cell(10,5,$row_sales_items['qty_in'],1,0,'C');
                    $pdf->Cell(10,5,$row_sales_items['price'],1,0,'R');
                    $pdf->Cell(15,5,$row_sales_items['amount'],1,1,'R');
                    $total_amount = $total_amount + $row_sales_items['amount'];
                };
                $total_amount_f = number_format($total_amount, 2, '.', ',');

                $pdf->SetFont('Arial','B',6);
                $pdf->Cell(50,5,'Total',1,0);
                $pdf->Cell(25,5,$row_company['currency'].''.$total_amount_f,1,1,'R');
            };
            $pdf->SetFont('Arial','I',5);
            $pdf->Cell(75,5, 'Thanks for doing business with us!',0,1,'C');
        };
    };

    $pdf->Output();