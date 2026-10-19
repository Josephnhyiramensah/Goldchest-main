<?php 
include($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    $ledger_search = $_POST['ledger_search'];
    $company_id = $_POST['company_id'];
    $value = "";

    if($_SESSION['user_type'] == 'Ultra_Super_User')
    {
        $query = "SELECT * FROM ledgers WHERE 
        (ledger_desc LIKE '%".$ledger_search."%') ORDER BY ledger_desc ASC";
    }
    else
    {
        $query = "SELECT * FROM ledgers WHERE (company_id = '$company_id' AND 
        ledger_desc LIKE '%".$ledger_search."%') ORDER BY ledger_desc ASC";
    };
    
    $query_run = mysqli_query($con, $query);

    $value = '<div class="table-responsive" id="ledger-table">
    <table class="table table-hover table-bordered table-sm" id="ledgerTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Description</th>
                <th>TB Group 1</th>
                <th>TB Group 2</th>
                <th>TB Group 3</th>
                <th>TB Group 4</th>
                <th>TB Group 5</th>
                <th>Last Date</th>
                <th>No of Days</th>';

                if($_SESSION['user_type'] == 'Ultra_Super_User')
                {
                    $value.='<th>Company</th>';
                };
                
                $value.='<th class = "action-td">Action</th>
            </tr>
        </thead>
        <tbody class="pv-table-body">';
                
    if (mysqli_num_rows($query_run) > 0)
    {
        while($row = mysqli_fetch_assoc($query_run))
        {
            $tb_1_id = $row['tb_1'];
            $querytb_1 = "SELECT tb_1_desc FROM trial_bal_group_1 WHERE id='$tb_1_id'";
            $querytb_1_run = mysqli_query($con, $querytb_1);
            $row_tb_1=mysqli_fetch_assoc($querytb_1_run);

            $tb_2_id = $row['tb_2'];
            $querytb_2 = "SELECT tb_2_desc FROM trial_bal_group_2 WHERE id='$tb_2_id'";
            $querytb_2_run = mysqli_query($con, $querytb_2);
            $row_tb_2=mysqli_fetch_assoc($querytb_2_run);

            $tb_3_id = $row['tb_3'];
            $querytb_3 = "SELECT tb_3_desc FROM trial_bal_group_3 WHERE id='$tb_3_id'";
            $querytb_3_run = mysqli_query($con, $querytb_3);
            $row_tb_3=mysqli_fetch_assoc($querytb_3_run);

            $tb_4_id = $row['tb_4'];
            $querytb_4 = "SELECT tb_4_desc FROM trial_bal_group_4 WHERE id='$tb_4_id'";
            $querytb_4_run = mysqli_query($con, $querytb_4);
            $row_tb_4=mysqli_fetch_assoc($querytb_4_run);

            $tb_5_id = $row['tb_5'];
            $querytb_5 = "SELECT tb_5_desc FROM trial_bal_group_5 WHERE id='$tb_5_id'";
            $querytb_5_run = mysqli_query($con, $querytb_5);
            $row_tb_5=mysqli_fetch_assoc($querytb_5_run);

            $ledger_id = $row['ledger_id'];
            $query_trans = "SELECT * FROM transactions WHERE ledger_id='$ledger_id' AND company_id='$company_id'
            AND deleted='' ORDER BY date DESC";
            $query_run_trans = mysqli_query($con, $query_trans);
            $row_trans = mysqli_fetch_assoc($query_run_trans);
            if(isset($row_trans['date']) && $row_trans['date'] > 0)
            {
                $last_visit = $row_trans['date'];
            }
            else
            {
                $last_visit = Date('Y-m-d');
            };

            $last_visit_date = new DateTime($last_visit);
            $today = new DateTime();
            $days = $today->diff($last_visit_date)->format('%a');
            
                $value.='<tr>
                    <td>'.$row['comp_led_id'].'</td>
                    <td>'.$row['ledger_desc'].'</td>
                    <td>';

                        if (isset($row_tb_1['tb_1_desc']))
                        {
                            $value.=''.$row_tb_1['tb_1_desc'].'';
                        };

            $value.='</td>
                    <td>';
                        if (isset($row_tb_2['tb_2_desc']))
                        {
                            $value.=''.$row_tb_2['tb_2_desc'].'';};
                    $value.='</td>
                    <td>';
                        if (isset($row_tb_3['tb_3_desc'])){$value.=''.$row_tb_3['tb_3_desc'].'';};
                    $value.='</td>
                    <td>'; 
                        if (isset($row_tb_4['tb_4_desc'])){$value.=''.$row_tb_4['tb_4_desc'].'';};
                    $value.='</td>
                    <td>'; 
                        if (isset($row_tb_5['tb_5_desc'])){$value.=''.$row_tb_5['tb_5_desc'].'';};
                    $value.='</td>
                    <td>'.$last_visit.'</td>
                    <td>'.$days.' day(s)</td>';
                    if($_SESSION['user_type'] == 'Ultra_Super_User')
                    {
                        $ledger_company_id = $row['company_id'];
                        if($ledger_company_id > 0)
                        {
                            $query_lc = "SELECT * FROM company WHERE company_id = '$ledger_company_id'";
                            $query_run_lc = mysqli_query($con, $query_lc);
                            $row_lc = mysqli_fetch_assoc($query_run_lc);
                            $value.='<td>'.$row_lc['trading_name'].'</td>';
                        }
                        else
                        {
                            $value.='<td></td>';
                        };
                    };
                    $value.='<td class = "action-td">';
                        
                            if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Edit_Ledger'] == 'Yes')) 
                            {
                            $value.='<a href="#" id="btn_edit_ledger" data-id="'.$row['ledger_id'].'"><i class="fa fa-edit fa-sm"></i></a>';
                            };

                            if ($_SESSION['user_type'] == 'Ultra_Super_User' OR $_SESSION['user_type'] == 'Super_User' OR ($_SESSION['user_type'] == 'Normal_User' AND $_SESSION['Delete_Ledger'] == 'Yes')) 
                            {
                            $value.=' | <a href="#" id="btn_delete_ledger" data-id="'.$row['ledger_id'].'"><i class="fa fa-trash fa-sm"></i></a>';
                            };
                        
            $value.='</td>
                </tr>';
            
        }
    }
    else
    {
            $value.='Data Not Found';
    };
                
            $value.='</tbody>
        </table>
    </div>';
    echo $value;