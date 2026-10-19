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
    //Cell(width, height, text, border, end line, align)
    if(isset($_SESSION['nds_sales_id']))
    {
        $company_id = $_SESSION['company_id'];
        $nds_sales_id = $_SESSION['nds_sales_id'];
        //$customer_name = $_SESSION['customer_name'];

        $sql_company = "SELECT * FROM company WHERE company_id = '$company_id'";
        $result_company = mysqli_query($con,$sql_company);
        $row_company = mysqli_fetch_array($result_company);

        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(200,5,$row_company['trading_name'],0,1,'C');
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(200,5,$row_company['location'],0,1,'C');
        $pdf->Cell(200,5,$row_company['telephone'],0,1,'C');
        //$pdf->Cell(75,10,'LOGO',0,1,'C');
        $pdf->Cell(75,5,'',0,1);

        $pdf->SetFont('Arial','BU',14);
        $pdf->Cell(200,8,'SALES INVOICE',0,1,'C');
        $pdf->Cell(200,5,'',0,1,'C');

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

            $pdf->SetFont('Arial','',10);
            $pdf->Cell(100,7,'Invoice No: '.$row['sno'],0,0);
            $pdf->Cell(100,7,'Date: '.$row['date'],0,1,'R');
            $pdf->Cell(100,7,'Customer: '.$customer_name,0,0);
            $pdf->Cell(100,7,'Telephone: '.$customer_phone,0,1,'R');
            $pdf->Cell(200,7,'Narration: ',0,1);

            $query_sales_items = "SELECT * FROM customer_warehouse WHERE nds_sales_id = '$nds_sales_id'";
            $query_run_sales_items = mysqli_query($con, $query_sales_items);
            if (mysqli_num_rows($query_run_sales_items) > 0)
            {
                $pdf->SetFont('Arial','B',10);
                $pdf->Cell(115,10,'Description',1,0,'C');
                $pdf->Cell(25,10,'Qty',1,0,'C');
                $pdf->Cell(30,10,'Price',1,0,'C');
                $pdf->Cell(30,10,'Amount',1,1,'C');
                $total_amount = 0;
                while($row_sales_items = mysqli_fetch_assoc($query_run_sales_items))
                {
                    $stock_item_id = $row_sales_items['stock_item_id'];
                    $query_nds_item = "SELECT * FROM stock_items WHERE stock_item_id = '$stock_item_id'";
                    $query_run_nds_item = mysqli_query($con, $query_nds_item);
                    $row_nds_item = mysqli_fetch_assoc($query_run_nds_item);
                    $pdf->SetFont('Arial','I',10);
                    $pdf->Cell(115,7,$row_nds_item['stock_item'],1,0);
                    $pdf->Cell(25,7,$row_sales_items['qty_in'],1,0,'C');
                    $pdf->Cell(30,7,$row_sales_items['price'],1,0,'R');
                    $pdf->Cell(30,7,$row_sales_items['amount'],1,1,'R');
                    $total_amount = $total_amount + $row_sales_items['amount'];
                };
                $total_amount_f = number_format($total_amount, 2, '.', ',');

                $pdf->SetFont('Arial','B',12);
                $pdf->Cell(115,10,'Total:',1,0,'R');
                $pdf->Cell(85,10,$row_company['currency'].''.$total_amount_f,1,1,'R');
            };
            $pdf->SetFont('Arial','I',10);
            $pdf->Cell(200,5,'',0,0,'C');
            $pdf->Cell(200,5, 'Thanks for doing business with us!',0,1,'C');
        };
    };

    $pdf->Output();
?>