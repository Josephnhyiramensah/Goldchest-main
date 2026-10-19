<?php 
	require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
				global $con;
				$ledger_id = $_POST['ledger_id'];
				$Ledger_data=array();
				$query = "SELECT * FROM ledgers WHERE ledger_id='$ledger_id'";
				$result = mysqli_query($con,$query);
				while($row=mysqli_fetch_assoc($result))
				{
					$tb_1_id = $row['tb_1'];
			        $querytb_1 = "SELECT tb_1_desc FROM trial_bal_group_1 WHERE id='$tb_1_id'";
			        $querytb_1_run = mysqli_query($con, $querytb_1);
			        $row_tb_1=mysqli_fetch_assoc($querytb_1_run);
			        if (isset($row_tb_1['tb_1_desc'])) {
			        	$tb_1_desc = $row_tb_1['tb_1_desc'];
			        }
			        else
			        {
			        	$tb_1_desc = 0;
			        }

			        $tb_2_id = $row['tb_2'];
			        $querytb_2 = "SELECT tb_2_desc FROM trial_bal_group_2 WHERE id='$tb_2_id'";
			        $querytb_2_run = mysqli_query($con, $querytb_2);
			        $row_tb_2=mysqli_fetch_assoc($querytb_2_run);
			        if (isset($row_tb_2['tb_2_desc'])) {
			        	$tb_2_desc = $row_tb_2['tb_2_desc'];
			        }
			        else
			        {
			        	$tb_2_desc = 0;
			        }

			        $tb_3_id = $row['tb_3'];
			        $querytb_3 = "SELECT tb_3_desc FROM trial_bal_group_3 WHERE id='$tb_3_id'";
			        $querytb_3_run = mysqli_query($con, $querytb_3);
			        $row_tb_3=mysqli_fetch_assoc($querytb_3_run);
			        if (isset($row_tb_3['tb_3_desc'])) {
			        	$tb_3_desc = $row_tb_3['tb_3_desc'];
			        }
			        else
			        {
			        	$tb_3_desc = 0;
			        }

			        $tb_4_id = $row['tb_4'];
			        $querytb_4 = "SELECT tb_4_desc FROM trial_bal_group_4 WHERE id='$tb_4_id'";
			        $querytb_4_run = mysqli_query($con, $querytb_4);
			        $row_tb_4=mysqli_fetch_assoc($querytb_4_run);
			        if (isset($row_tb_4['tb_4_desc'])) {
			        	$tb_4_desc = $row_tb_4['tb_4_desc'];
			        }
			        else
			        {
			        	$tb_4_desc = 0;
			        }

			        $tb_5_id = $row['tb_5'];
			        $querytb_5 = "SELECT tb_5_desc FROM trial_bal_group_5 WHERE id='$tb_5_id'";
			        $querytb_5_run = mysqli_query($con, $querytb_5);
			        $row_tb_5=mysqli_fetch_assoc($querytb_5_run);
			        if (isset($row_tb_5['tb_5_desc'])) {
			        	$tb_5_desc = $row_tb_5['tb_5_desc'];
			        }
			        else
			        {
			        	$tb_5_desc = 0;
			        }
					array_push($Ledger_data, 
						$row['ledger_id'],
						$row['ledger_desc'],
						$row['code'],
						$row['tb_1'],
						$tb_1_desc,
						$row['tb_2'],
						$tb_2_desc,
						$row['tb_3'],
						$tb_3_desc,
						$row['tb_4'],
						$tb_4_desc,
						$row['tb_5'],
						$tb_5_desc,
						$row['type'],
						$row['address'],
						$row['email'],
						$row['telephone'],
						$row['status'],
						$row['show_balance'],
						$row['opening_amount'],
						$row['opening_date'],
						$row['opening_state'],
						$row['branch_id']
					);
				}
				echo json_encode($Ledger_data);