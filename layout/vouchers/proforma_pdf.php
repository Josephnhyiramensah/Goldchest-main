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
            $this->Cell(60,5,'.............................................................',0,0,'C');
            $this->Cell(80,5,'',0,0,'C');
            $this->Cell(60,5,'.............................................................',0,1,'C');
            $this->Cell(60,5,'MANAGERS SIGNATURE',0,0,'C');
            $this->Cell(80,5,'',0,0,'C');
            $this->Cell(60,5,'CIENT SIGNATURE',0,1,'C');
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
    $pdf->SetFont('Arial','B',8);
    //Cell(width, height, text, border, end line, align)
    if(isset($_SESSION['proforma_id']))
    {
        $company_id = $_SESSION['company_id'];
        $proforma_id = $_SESSION['proforma_id'];
        //$customer_name = $_SESSION['customer_name'];

        $sql_company = "SELECT * FROM company WHERE company_id = '$company_id'";
        $result_company = mysqli_query($con,$sql_company);
        $row_company = mysqli_fetch_array($result_company);

    $pdf->SetFont('Arial','B',18);
    $pdf->Cell(200,10,$row_company['trading_name'],0,1,'C');
    $pdf->SetFont('Arial','I',8);
    $pdf->Cell(200,5,$row_company['address'].', '.$row_company['location'].', '.$row_company['telephone'],0,1,'C');
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(200,5,'',0,1,'C');
    $pdf->Cell(200,5,'Proforma Invoice',0,1,'C');
    $pdf->Cell(200,10,'',0,1,'C');

        $query = "SELECT * FROM proforma WHERE proforma_id = '$proforma_id'";
        $query_run = mysqli_query($con, $query);
        if (mysqli_num_rows($query_run) > 0)
        {
            $row = mysqli_fetch_assoc($query_run);
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(100,5,'Invoice No: '.$row['sno'],0,0);
            $pdf->Cell(100,5,'Date: '.$row['date'],0,1,'R');
            $pdf->Cell(200,5,'',0,1,'C');
            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(200,5,'Customer Details:',0,1);
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(10,5,'',0,0);
            $pdf->Cell(190,5,$row['customer'],0,1);
            $pdf->Cell(10,5,'',0,0);
            $pdf->Cell(190,5,$row['address'],0,1);
            $pdf->Cell(10,5,'',0,0);
            $pdf->Cell(190,5,$row['telephone'],0,1);
            $pdf->Cell(200,10,'',0,1,'C');

            $query_sales_items = "SELECT * FROM proforma_items WHERE proforma_id = '$proforma_id'";
            $query_run_sales_items = mysqli_query($con, $query_sales_items);
            if (mysqli_num_rows($query_run_sales_items) > 0)
            {
                $pdf->SetFont('Arial','B',10);
                $pdf->Cell(120,10,'Stock Item',1,0,'C');
                $pdf->Cell(25,10,'Qty',1,0,'C');
                $pdf->Cell(25,10,'Price',1,0,'C');
                $pdf->Cell(30,10,'Amount',1,1,'C');
                $total_amount = 0;
                while($row_sales_items = mysqli_fetch_assoc($query_run_sales_items))
                {
                    $stock_item_id = $row_sales_items['stock_item_id'];
                    $query_stock_item = "SELECT * FROM stock_items WHERE stock_item_id = '$stock_item_id'";
                    $query_run_stock_item = mysqli_query($con, $query_stock_item);
                    $row_stock_item = mysqli_fetch_assoc($query_run_stock_item);
                    $pdf->SetFont('Arial','I',8);
                    $pdf->Cell(120,7,$row_stock_item['stock_item'],1,0);
                    $pdf->Cell(25,7,$row_sales_items['qty'],1,0,'C');
                    $pdf->Cell(25,7,$row_sales_items['price'],1,0,'R');
                    $pdf->Cell(30,7,$row_sales_items['amount'],1,1,'R');
                    $total_amount = $total_amount + $row_sales_items['amount'];
                };
                $total_amount_f = number_format($total_amount, 2, '.', ',');

                $pdf->SetFont('Arial','B',10);
                $pdf->Cell(170,7,'Total',1,0,'C');
                $pdf->Cell(30,7,$total_amount_f,1,1,'R');
            };
            $pdf->SetFont('Arial','I',8);
            $pdf->Cell(200,5, 'Thanks for doing business with us!',0,1,'C');
        };
    };

    $pdf->Output();