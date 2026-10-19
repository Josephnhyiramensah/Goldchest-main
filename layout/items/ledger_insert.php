<?php 
require($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
//include($_SERVER['DOCUMENT_ROOT'] .'/includes/auth.php');

if(isset($_POST['ledgerdesc']))
{
    $company_id = $_SESSION['company_id'];
	$branch_id = $_POST['ledger_branch_id'];
    $user_id = $_SESSION['user_id'];
    $user_super_id = $_SESSION['user_id'];
    $code = $_POST['ledgerCode'];
    $ledger_desc = $_POST['ledgerdesc'];
    //$ledgertype = $_POST['ledgertype'];
    $tb_1 = $_POST['tb_1'];
    $tb_2 = $_POST['tb_2'];
    $tb_3 = $_POST['tb_3'];
    $tb_4 = $_POST['tb_4'];
    $tb_5 = $_POST['tb_5'];
    $address = $_POST['ledgeraddress'];
    $telephone = $_POST['ledgerphone'];
    $email = $_POST['ledgeremail'];
    $status = $_POST['ledgerstatus'];
    $show_balance = $_POST['show_balance'];
    $opening_amount = $_POST['ledger_opening_balance'];
    $opening_date = $_POST['ledger_opening_date'];
    $opening_state = $_POST['ledger_opening_state'];

    $query_last_com_led_id = "SELECT * FROM ledgers WHERE company_id = '$company_id' ORDER BY comp_led_id DESC";
    $result_last_com_led_id = mysqli_query($con,$query_last_com_led_id);
    $row_last_com_led_id = mysqli_fetch_assoc($result_last_com_led_id);
    $last_com_led_id = $row_last_com_led_id['comp_led_id'];
    $next_com_led_id = $last_com_led_id + 1;
    
    $query = "INSERT INTO ledgers (
    code, ledger_desc, tb_1, tb_2, tb_3, tb_4, tb_5, address, telephone, email, status, 
    company_id, user_id, user_super_id, comp_led_id, show_balance, opening_amount, opening_date,
    branch_id) 
    VALUES (
    '$code','$ledger_desc','$tb_1','$tb_2','$tb_3','$tb_4','$tb_5','$address',
    '$telephone','$email','$status','$company_id','$user_id','$user_super_id',
    '$next_com_led_id', '$show_balance', '$opening_amount', '$opening_date',
    '$branch_id')";
    $query_run = mysqli_query($con, $query);

    if ($query_run)
    {
        if($opening_amount > 0)
        {
            $query_ledger = "SELECT * FROM `ledgers` WHERE `company_id` = '$company_id' 
            ORDER BY `ledger_id` DESC";
            $result_ledger = mysqli_query($con,$query_ledger);
            $row_ledger = mysqli_fetch_assoc($result_ledger);

            $ledger_id = $row_ledger['ledger_id'];
            //$company_id = $_SESSION['company_id'];
            //$branch_id = $_SESSION['branch_id'];
            //$user_id = $_SESSION['user_id'];
            if($opening_state == 'Dr')
            {
                $journal_debit_ledger = $ledger_id;
                $journal_credit_ledger = 1;
            }
            elseif($opening_state == 'Cr')
            {
                $journal_debit_ledger = 1;
                $journal_credit_ledger = $ledger_id;
            }
            elseif($opening_state != 'Dr' && $opening_state != 'Cr')
            {
                if($tb_2 == 1)/*ASSET*/
                {
                    $journal_debit_ledger = $ledger_id;
                    $journal_credit_ledger = 1;
                    $opening_state = 'Dr';
                }
                elseif($tb_2 == 2)/*LIABILITIES*/
                {
                    $journal_debit_ledger = 1;
                    $journal_credit_ledger = $ledger_id;
                    $opening_state = 'Cr';
                }
                elseif($tb_2 == 3)/*REVENUE*/
                {
                    $journal_debit_ledger = 1;
                    $journal_credit_ledger = $ledger_id;
                    $opening_state = 'Cr';
                }
                elseif($tb_2 == 4)/*EXPENDITURE*/
                {
                    $journal_debit_ledger = $ledger_id;
                    $journal_credit_ledger = 1;
                    $opening_state = 'Dr';
                };
                $query_ledger_up = "UPDATE `ledgers` SET `opening_state` = '$opening_state' WHERE `ledger_id` = '$ledger_id'";
                mysqli_query($con,$query_ledger_up);
            };
            $journal_date = $_POST['ledger_opening_date'];
            $journal_amount = $_POST['ledger_opening_balance'];
            $journal_ref = 1;
            $journal_narration = 'OPENING BALANCE';

            $query_last_sno = "SELECT `sno` FROM `journal` WHERE `company_id` = '$company_id' 
            ORDER BY `sno` DESC";
            $result_last_sno = mysqli_query($con,$query_last_sno);
            $row_last_sno = mysqli_fetch_assoc($result_last_sno);
            $last_sno = $row_last_sno['sno'];
            $next_sno = $last_sno + 1;

            $query = "INSERT INTO `journal`(
                `sno`, `company_id`, `user_id`, `ledger_opening`, `reference_no`, `narration`, 
                `ledger_debit`, `ledger_credit`, `amount`, `date`, `branch_id`, `created_by`, 
                `created_datetime`) VALUES (
                '$next_sno','$company_id','$user_id','$ledger_id','$journal_ref','$journal_narration',
                '$journal_debit_ledger','$journal_credit_ledger','$journal_amount','$journal_date','$branch_id','$user_id',NOW())";
                $query_run = mysqli_query($con, $query);
                if ($query_run) 
                {
                    //POST TRANSACTION
                        $query = "SELECT * FROM journal WHERE `company_id`='$company_id' ORDER BY journal_id DESC";
                        $result = mysqli_query($con,$query);
                        $row = mysqli_fetch_assoc($result);
                        $journal_id = $row['journal_id'];
                        
                        $query_dr = "INSERT INTO `transactions`(
                        `journal_id`,`ledger_id`, `ledger_id_contra`, `company_id`, `user_id`, `date`, `amount`, 
                        `amount_debit`, `amount_credit`, `narration`, `created_by`, `created_datetime`, `branch_id`) VALUES (
                        '$journal_id','$journal_debit_ledger','$journal_credit_ledger','$company_id','$user_id',
                        '$journal_date','$journal_amount','$journal_amount',0,'$journal_narration','$user_id',NOW(),'$branch_id')";
                        mysqli_query($con, $query_dr);

                        $query_cr = "INSERT INTO `transactions`(
                        `journal_id`,`ledger_id`, `ledger_id_contra`, `company_id`, `user_id`, `date`, `amount`, 
                        `amount_debit`, `amount_credit`, `narration`, `created_by`, `created_datetime`, `branch_id`) VALUES (
                        '$journal_id','$journal_credit_ledger','$journal_debit_ledger','$company_id','$user_id',
                        '$journal_date','$journal_amount',0,'$journal_amount','$journal_narration','$user_id',NOW(),'$branch_id')";
                        mysqli_query($con, $query_cr);
                };
        };
        echo "Ledger Added Successfully";
    }
    else
    {
        echo "Ledger NOT Added";
    };
};