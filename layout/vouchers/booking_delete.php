<?php
    require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    global $con;
    $userdetail = $_SESSION['full_name'].':-'.time();
    if(isset($_POST['booking_id']) && $_POST['booking_id'] > 0)
    {
        $booking_id = $_POST['booking_id'];
        $query = "DELETE FROM `booking`WHERE `booking_id`='$booking_id'";
        $query_run = mysqli_query($con, $query);

        if ($query_run) {
            echo "booking DELETED Successfully";  
        }  
        else  
        {  
            echo "booking NOT DELETED";  
        };
    };