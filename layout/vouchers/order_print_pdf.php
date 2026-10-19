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
    $pdf = new PDF('P','mm',array(80,145));
    $pdf->SetMargins(2.5,2.5,2.5);
    //$pdf->AliasNbPages('{pages}');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',8);
    //Cell(width, height, text, border, end line, align)
    if(isset($_SESSION['table_order_id']))
    {
        $company_id = $_SESSION['company_id'];
        $table_order_id = $_SESSION['table_order_id'];

        $sql_company = "SELECT * FROM company WHERE company_id = '$company_id'";
        $result_company = mysqli_query($con,$sql_company);
        $row_company = mysqli_fetch_array($result_company);

        $pdf->Cell(75,5,$row_company['trading_name'],0,1,'C');
        $pdf->Cell(75,5,$row_company['location'],0,1,'C');
        $pdf->Cell(75,5,$row_company['telephone'],0,1,'C');
        //$pdf->Cell(75,10,'LOGO',0,1,'C');
        $pdf->Cell(75,5,'',0,1);

        $pdf->SetFont('Arial','BU',10);
        $pdf->Cell(75,8,'ORDER RECEIPT',0,1,'C');

        $query = "SELECT * FROM table_order WHERE table_order_id = '$table_order_id'";
        $query_run = mysqli_query($con, $query);
        if (mysqli_num_rows($query_run) > 0)
        {
            $row = mysqli_fetch_assoc($query_run);
            $creator_id = $row['created_by'];
            $query_waiter = "SELECT * FROM users WHERE id = '$creator_id'";
            $query_run_waiter = mysqli_query($con, $query_waiter);
            if(!empty($query_run_waiter) && mysqli_num_rows($query_run_waiter) > 0)
            {
                $row_waiter = mysqli_fetch_assoc($query_run_waiter);
                $waiter = $row_waiter['first_name'].' '.$row_waiter['last_name'];
            }
            else
            {
                $waiter = 'N/A';
            };

            $dining_table_id = $row['dining_table_id'];
            $query_dining_table = "SELECT * FROM dining_table WHERE dining_table_id = '$dining_table_id'";
            $query_run_dining_table = mysqli_query($con, $query_dining_table);
            if(!empty($query_run_dining_table) && mysqli_num_rows($query_run_dining_table) > 0)
            {
                $row_dining_table = mysqli_fetch_assoc($query_run_dining_table);
                $dining_table = $row_dining_table['dining_table'];
            }
            else
            {
                $dining_table = 'N/A';
            };
            $pdf->SetFont('Arial','',8);
            $pdf->Cell(38,5,'Order No: '.$row['sno'],0,0);
            $pdf->Cell(37,5,'Date: '.$row['date'],0,1);
            $pdf->Cell(75,5,'Waiter:'.$waiter,0,1);
            $pdf->Cell(75,5,'Table No:'.$dining_table,0,1);

            $query_order_items = "SELECT * FROM table_order_list WHERE table_order_id = '$table_order_id'";
            $query_run_order_items = mysqli_query($con, $query_order_items);
            if (mysqli_num_rows($query_run_order_items) > 0)
            {
                $pdf->SetFont('Arial','B',8);
                $pdf->Cell(35,5,'Ordered Items',1,0);
                $pdf->Cell(10,5,'Qty',1,0,'C');
                $pdf->Cell(10,5,'Price',1,0,'C');
                $pdf->Cell(15,5,'Amount',1,1,'C');
                $total_amount = 0;
                while($row_order_items = mysqli_fetch_assoc($query_run_order_items))
                {
                    $stock_item_id = $row_order_items['stock_item_id'];
                    $query_stock_item = "SELECT * FROM stock_items WHERE stock_item_id = '$stock_item_id'";
                    $query_run_stock_item = mysqli_query($con, $query_stock_item);
                    $row_stock_item = mysqli_fetch_assoc($query_run_stock_item);
                    $pdf->SetFont('Arial','BI',6);
                    $pdf->Cell(35,5,$row_stock_item['stock_item'],1,0);
                    $pdf->Cell(10,5,$row_order_items['qty'],1,0,'C');
                    $pdf->Cell(10,5,$row_order_items['price'],1,0,'R');
                    $pdf->Cell(15,5,$row_order_items['amount'],1,1,'R');
                    $total_amount = $total_amount + $row_order_items['amount'];
                };
                $total_amount_f = number_format($total_amount, 2, '.', ',');

                $pdf->SetFont('Arial','B',6);
                $pdf->Cell(45,5,'Total',1,0);
                $pdf->Cell(25,5,$row_company['currency'].''.$total_amount_f,1,1,'R');
                $pdf->Cell(75,5,'',0,1,'C');
            };
            $query_receipt = "SELECT * FROM receipt WHERE table_order_id = '$table_order_id'";
            $query_run_receipt = mysqli_query($con, $query_receipt);
            if (mysqli_num_rows($query_run_receipt) > 0)
            {
                $pdf->SetFont('Arial','B',8);
                $pdf->Cell(75,5,'RECEIPT ANALYSIS',1,1,'C');
                $pdf->Cell(50,5,'Cash Ledger',1,0);
                $pdf->Cell(25,5,'Amount',1,1,'C');
                $total_receipt_amount = 0;
                while($row_receipt = mysqli_fetch_assoc($query_run_receipt))
                {
                    $ledger_id = $row_receipt['ledger_credit'];
                    $query_cash_ledger = "SELECT * FROM ledgers WHERE ledger_id = '$ledger_id'";
                    $query_run_cash_ledger = mysqli_query($con, $query_cash_ledger);
                    if(!empty($query_run_cash_ledger) && mysqli_num_rows($query_run_cash_ledger) > 0)
                    {
                        $row_cash_ledger = mysqli_fetch_assoc($query_run_cash_ledger);
                        $cash_ledger = $row_cash_ledger['ledger_desc'];
                    }
                    else
                    {
                        $cash_ledger = 'Not Specified';
                    };
                    $pdf->SetFont('Arial','I',6);
                    $pdf->Cell(50,5,$cash_ledger,1,0);
                    $pdf->Cell(25,5,$row_receipt['amount'],1,1,'R');
                    $total_receipt_amount = $total_receipt_amount + floatval($row_receipt['amount']);
                };
                $total_receipt_amount_f = number_format($total_receipt_amount, 2, '.', ',');

                $pdf->SetFont('Arial','B',6);
                $pdf->Cell(50,5,'Total',1,0);
                $pdf->Cell(25,5,$row_company['currency'].''.$total_receipt_amount_f,1,1,'R');
            };
            $pdf->SetFont('Arial','I',5);
            $pdf->Cell(75,5, 'Thanks for doing business with us!',0,1,'C');
        };
    };

    $pdf->Output();
?>