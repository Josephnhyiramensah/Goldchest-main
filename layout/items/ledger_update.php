<?php 
require($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
include($_SERVER['DOCUMENT_ROOT'] .'/includes/auth.php');

if(isset($_POST['ledgerdesc_up']))
{
    $company_id = $_SESSION['company_id'];
    $user_id = $_SESSION['user_id'];
    $user_super_id = $_SESSION['user_id'];
    $ledger_id = $_POST['ledgerid_up'];
    $code = $_POST['ledgerCode_up'];
    $ledger_desc = $_POST['ledgerdesc_up'];
    //$ledgertype = $_POST['ledgertype_up'];
    $tb_1 = $_POST['tb_1_up'];
    $tb_2 = $_POST['tb_2_up'];
    $tb_3 = $_POST['tb_3_up'];
    $tb_4 = $_POST['tb_4_up'];
    $tb_5 = $_POST['tb_5_up'];
    $address = $_POST['ledgeraddress_up'];
    $telephone = $_POST['ledgerphone_up'];
    $email = $_POST['ledgeremail_up'];
    $status = $_POST['ledgerstatus_up'];
    $show_balance = $_POST['show_balance_up'];
    $opening_amount = $_POST['ledger_opening_balance_up'];
    $opening_date = $_POST['ledger_opening_date_up'];
    $opening_state = $_POST['ledger_opening_state_up'];
    
    $query = "UPDATE `ledgers` SET `code`='$code', `ledger_desc`='$ledger_desc',
    `tb_1`='$tb_1', `tb_2`='$tb_2', `tb_3`='$tb_3', `tb_4`='$tb_4', `tb_5`='$tb_5', 
    `address`='$address', `telephone`='$telephone', `email`='$email', `status`='$status',
    `show_balance`='$show_balance', `opening_amount`='$opening_amount', `opening_date`='$opening_date', 
    `opening_state`='$opening_state' WHERE ledger_id='$ledger_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run)
    {
        $query_sj = "SELECT * FROM `journal` WHERE `ledger_opening` = '$ledger_id'";
        $result_sj = mysqli_query($con,$query_sj);
        $row_sj = mysqli_fetch_assoc($result_sj);
        $journal_id = $row_sj['journal_id'];

        $query_del = "DELETE FROM `journal` WHERE `journal_id` = '$journal_id'";
        mysqli_query($con,$query_del);
        $query_del = "DELETE FROM `transactions` WHERE `journal_id` = '$journal_id'";
        mysqli_query($con,$query_del);

        if($opening_amount > 0)
        {
            /*$query_ledger = "SELECT * FROM `ledgers` WHERE `company_id` = '$company_id' 
            ORDER BY `ledger_id` DESC";
            $result_ledger = mysqli_query($con,$query_ledger);
            $row_ledger = mysqli_fetch_assoc($result_ledger);

            $ledger_id = $row_ledger['ledger_id'];*/
            $company_id = $_SESSION['company_id'];
            $branch_id = $_SESSION['branch_id'];
            $user_id = $_SESSION['user_id'];
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
            $journal_date = $_POST['ledger_opening_date_up'];
            $journal_amount = $_POST['ledger_opening_balance_up'];
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
                `ledger_debit`, `ledger_credit`, `amount`, `date`, `branch_id`, `created_by`, `created_datetime`) VALUES (
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
                        `amount_debit`, `amount_credit`, `narration`, `created_by`, `created_datetime`) VALUES (
                        '$journal_id','$journal_debit_ledger','$journal_credit_ledger','$company_id','$user_id','$journal_date',
                        '$journal_amount','$journal_amount',0,'$journal_narration','$user_id',NOW())";
                        mysqli_query($con, $query_dr);

                        $query_cr = "INSERT INTO `transactions`(
                        `journal_id`,`ledger_id`, `ledger_id_contra`, `company_id`, `user_id`, `date`, `amount`, 
                        `amount_debit`, `amount_credit`, `narration`, `created_by`, `created_datetime`) VALUES (
                        '$journal_id','$journal_credit_ledger','$journal_debit_ledger','$company_id','$user_id','$journal_date',
                        '$journal_amount',0,'$journal_amount','$journal_narration','$user_id',NOW())";
                        mysqli_query($con, $query_cr);
                };
        };
        echo "Ledger Updated Successfully";
    }
    else
    {
        echo "Ledger NOT Updated";
    };
};
    
?>
