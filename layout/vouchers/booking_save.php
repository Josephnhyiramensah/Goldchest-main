<?php 
    require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    global $con;
    $booking_id = $_POST['booking_id'];
    $company_id = $_SESSION['company_id'];
    $user_id = $_SESSION['user_id'];
    $booking_credit = $_POST['booking_credit'];
    $booking_date = $_POST['booking_date'];
    $phone_no = $_POST['booking_phone_no'];
    $booking_location = $_POST['booking_location'];
    $booking_product = $_POST['booking_product'];
    $booking_amount = $_POST['booking_amount'];
    $booking_gram = $_POST['booking_gram'];
    $booking_gram_both = $_POST['booking_gram_both'];
    $booking_water = $_POST['booking_water'];
    $booking_price = $_POST['booking_price'];
    $booking_pounds = $_POST['booking_pounds'];
    $booking_density = $_POST['booking_density'];
    $booking_karat = $_POST['booking_karat'];
    $booking_purity = $_POST['booking_purity'];
    $booking_ppp = $_POST['booking_ppp'];
    $booking_pieces = $_POST['booking_pieces'];
    $booking_narration = addslashes($_POST['booking_narration']);
    $branch_id = $_SESSION['branch_id'];

    $query_last_sno = "SELECT `sno` FROM `booking` WHERE `company_id` = '$company_id' ORDER BY `sno` DESC";
    $result_last_sno = mysqli_query($con,$query_last_sno);
    $row_last_sno = mysqli_fetch_assoc($result_last_sno);
    $last_sno = $row_last_sno['sno'];
    $next_sno = $last_sno + 1;

    $query = "INSERT INTO `booking`(
    `sno`,`company_id`,`user_id`,`date`,`ledger_credit`, 
    `amount`, `phone`, `location`, `narration`, `weight_both`,`product_id`, 
    `weight`, `water`, `density`, `pounds`, `karat`, `price`, `purity`, `price_per_pound`, 
    `pieces`, `branch_id`) 
    VALUES (
    '$next_sno','$company_id','$user_id','$booking_date',
    '$booking_credit','$booking_amount','$phone_no','$booking_location',
    '$booking_narration','$booking_gram_both','$booking_product','$booking_gram','$booking_water',
    '$booking_density','$booking_pounds','$booking_karat','$booking_price','$booking_purity',
    '$booking_ppp','$booking_pieces','$branch_id')";
    mysqli_query($con, $query);