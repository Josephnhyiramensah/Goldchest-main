<?php 
    require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    global $con;
    $userdetail = $_SESSION['full_name'].':-'.time();
    $booking_id = $_POST['booking_id'];
    $company_id = $_SESSION['company_id'];
    $branch_id = $_SESSION['branch_id'];
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

    $query = "UPDATE `booking`SET `company_id`='$company_id',`user_id`='$user_id',`date`='$booking_date', 
    `ledger_credit`='$booking_credit', `amount`='$booking_amount', `phone`='$phone_no', 
    `location`='$booking_location', `narration`='$booking_narration',`product_id`='$booking_product', 
    `weight`='$booking_gram',`weight_both`='$booking_gram_both', `water`='$booking_water', 
    `density`='$booking_density', `pounds`='$booking_pounds', `karat`='$booking_karat',`price`='$booking_price', 
    `purity`='$booking_purity', `price_per_pound`='$booking_ppp', 
    `pieces`='$booking_pieces', `branch_id`='$branch_id' WHERE `booking_id`='$booking_id'";
    mysqli_query($con, $query);