<?php 
    require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    global $con;
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $company_id = $_SESSION['company_id'];
    $value = "";

    $query = "SELECT b.*, l.ledger_desc FROM booking b LEFT JOIN ledgers l ON
    b.ledger_id=l.ledger_id WHERE b.date BETWEEN '$start_date' AND 
    '$end_date' AND  b.company_id = '$company_id' ORDER BY b.date ASC";
    $query_run = mysqli_query($con, $query);
        
    $value = '<div class="table-responsive" id="booking_list_table">
        <table class="table table-hover table-bordered table-sm" id="bookingTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th class = "action-td" width="5%">No</th>
                    <th class = "action-td" width="10%">Date</th>
                    <th width="20%">Customer</th>
                    <th width="10%">Supplied By</th>
                    <th class = "action-td" width="10%">Grams</th>
                    <th class = "action-td" width="10%">Water</th>
                    <th class = "action-td" width="10%">Price</th>
                    <th class = "action-td" width="5%">Karat</th>
                    <th class = "action-td" width="10%">Amount</th>
                    <th class = "action-td" width="10%">Action</th>
                </tr>
            </thead>
            <tbody class="pv-table-body">';
                $i = 0;
                if (mysqli_num_rows($query_run) > 0)
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                        $i++;
                        $price_booking = $row['price'];
                        $price_booking = number_format($price_booking, 2, '.', ',');
                        $amount_booking = $row['amount'];
                        $amount_booking = number_format($amount_booking, 2, '.', ',');
            
                        $value.='<tr>
                            <td class = "action-td">'.$i.'</td>
                            <td class = "action-td">'.$row['date'].'</td>
                            <td>'.$row['ledger_desc'].'</td>
                            <td>'.$row['supplier'].':- '.$row['phone'].'</td>
                            <td class = "action-td">'.$row['weight'].'</td>
                            <td class = "action-td">'.$row['water'].'</td>
                            <td class = "action-td">'.$price_booking.'</td>
                            <td class = "action-td">'.$row['karat'].'</td>
                            <td class = "amt-td">'.$amount_booking.'</td>
                            <td class = "action-td">';
                                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Purchases'] == 'Yes')) 
                                {
                                    $value.='<a href="#" id="btn_edit_booking" data-id="'.$row['booking_id'].'">Edit</a> | ';
                                };
                                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Create_Purchases'] == 'Yes')) 
                                {
                                    $value.='<a href="#" id="btn_purchase_booking" data-id="'.$row['booking_id'].'">Purchase</a>';
                                };
                                if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Delete_Purchases'] == 'Yes')) 
                                {
                                    $value.=' | <a href="#" id="btn_delete_booking" data-id="'.$row['booking_id'].'"><i class="fa fa-trash fa-sm"></i></a>';
                                };
                            $value.='</td>
                        </tr>';
                        $created_id = $row['created_by'];
                        $query_creator = "SELECT first_name, last_name FROM users WHERE id='$created_id'";
                        $result_creator = mysqli_query($con,$query_creator);
                        if(!empty($result_creator) && mysqli_num_rows($result_creator) > 0)
                        {
                            $row_creator = mysqli_fetch_assoc($result_creator);
                            $creator_name = $row_creator['first_name'].' '.$row_creator['last_name'];
                        }
                        else
                        {
                            $creator_name = 'Not Specified';
                        };
                        
                        $altered_id = $row['altered_by'];
                        $query_alter = "SELECT first_name, last_name FROM users WHERE id='$altered_id'";
                        $result_alter = mysqli_query($con,$query_alter);
                        if(!empty($result_alter) && mysqli_num_rows($result_alter) > 0)
                        {
                            $row_alter = mysqli_fetch_assoc($result_alter);
                            $alter_name = $row_alter['first_name'].' '.$row_alter['last_name'];
                        }
                        else
                        {
                            $alter_name = 'Not Specified';
                        };
                        $value.='<tr>
                            <td class = "action-td" colspan="7"><small>Entered By:'.$creator_name.': '.$row['created_datetime'].' 
                            Altered By:'.$alter_name.': '.$row['altered_datetime'].'</small></td>
                        </tr>';
                    }
                }
                else
                {
                    $value.='<tr><td colspan="10">No booking Not Found</td></tr>';
                };
                
            $value.='</tbody>
        </table>
    </div>';
    echo $value;