<?php 
    require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    global $con;
    $booking_id = $_POST['booking_id'];
    $booking_details=array();
    $query = "SELECT * FROM booking WHERE booking_id='$booking_id'";
    $result = mysqli_query($con,$query);
    while($row=mysqli_fetch_assoc($result))
    {
        array_push($booking_details, 
            $row['booking_id'],$row['date'],$row['ledger_debit'],$row['ledger_credit'],$row['amount'],$row['company_id'],$row['supplier'],$row['phone'],
            $row['narration'],$row['product_id'],$row['weight'],$row['water'],$row['price'],$row['pounds'],$row['density'],$row['karat'],
            $row['purity'],$row['price_per_pound'],$row['pieces'],$row['location'],$row['user_id'],$row['site_id'],$row['branch_id'],$row['weight_both']
        );
    }
    echo json_encode($booking_details);