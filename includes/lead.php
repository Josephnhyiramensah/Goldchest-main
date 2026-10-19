<?php
    require($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/auth.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/header_main.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/navbar_consulting.php');

		$attend_id = $_SESSION['attend_id'];
		$patient_id = $_SESSION['patient_id'];
		$folderno = $_SESSION['folderno'];
		$name = $_SESSION['name'];
		$age = $_SESSION['age'];
		$gender = $_SESSION['gender'];
		$Schname = $_SESSION['Schname'];
		//$nhis_led_id = $_SESSION['nhis_led_id'];
        $nhismemberno = $_SESSION['nhismemberno'];
        $nhisexpirydate = $_SESSION['nhisexpirydate'];
		$serial_no = $_SESSION['serial_no'];
		$ghanacard = $_SESSION['ghanacard'];
        $nhisccc = $_SESSION['nhisccc'];
        //$prvt_led_id = $_SESSION['prvt_led_id'];
        $prtinsname = $_SESSION['prtinsname'];
        $prtmemberno = $_SESSION['prtmemberno'];
        $prtexpirydate = $_SESSION['prtexpirydate'];
        $sponsor_attd = $_SESSION['sponsor'];
        $clinic = $_SESSION['clinic'];
        $typeofservice_attd = $_SESSION['typeofservice_attd'];
        $dateofadmission_attd = $_SESSION['dateofadmission_attd'];
        $dateofdischarge_attd = $_SESSION['dateofdischarge_attd'];

        $sql_sponsor="SELECT * FROM ledgers WHERE ledger_id='$sponsor_attd'";
		$result_sponsor=mysqli_query($con,$sql_sponsor);
        $row_sponsor=mysqli_fetch_array($result_sponsor);
        $sponsor_desc = $row_sponsor['ledger_desc'];

        $sql_tos="SELECT * FROM type_of_service WHERE tos_id='$typeofservice_attd'";
		$result_tos=mysqli_query($con,$sql_tos);
        $row_tos=mysqli_fetch_array($result_tos);
        $tos_desc = $row_tos['description'];

        $sql_clinic="SELECT * FROM clinics WHERE  clinic_id='$clinic'";
		$result_clinic=mysqli_query($con,$sql_clinic);
        $row_clinic=mysqli_fetch_array($result_clinic);
        $clinic_desc = $row_clinic['clinic_desc'];
        
        function set_sponsor_list(){
        	global $con;
        	$nhis_led_id = $_SESSION['Schname'];
        	$prvt_led_id = $_SESSION['prtinsname'];
        	$sponsor_attd = $_SESSION['sponsor'];
        	$sponsor_option = "";
        	if ($nhis_led_id > 0) {
        		$sql="SELECT * FROM ledgers WHERE ledger_id='$nhis_led_id'";
				$result_nhis=mysqli_query($con,$sql);
	            while($row_nhis=mysqli_fetch_array($result_nhis))
	            {
	            	$sponsor_option.='<option value = "'.$row_nhis['ledger_id'].'"';
	            	if ($row_nhis['ledger_id']==$sponsor_attd){$sponsor_option.='selected="selected"';}
	            	$sponsor_option.='>'.$row_nhis['ledger_desc'].'</option>';
	            }
        	};
        	if ($prvt_led_id > 0) {
        		$sql="SELECT * FROM ledgers WHERE ledger_id='$prvt_led_id'";
				$result_prvt=mysqli_query($con,$sql);
	            while($row_prvt=mysqli_fetch_array($result_prvt))
	            {
	            	$sponsor_option.='<option value = "'.$row_prvt['ledger_id'].'"';
	            	if ($row_prvt['ledger_id']==$sponsor_attd){$sponsor_option.='selected="selected"';}
	            	$sponsor_option.='>'.$row_prvt['ledger_desc'].'</option>';
	            }
        	};
	            $sql="SELECT * FROM ledgers WHERE ledger_id=1";
				$result_cash=mysqli_query($con,$sql);
	            while($row_cash=mysqli_fetch_array($result_cash))
	            {
	            	$sponsor_option.='<option value = "'.$row_cash['ledger_id'].'"';
	            	if ($row_cash['ledger_id']==$sponsor_attd){$sponsor_option.='selected="selected"';}
	            	$sponsor_option.='>'.$row_cash['ledger_desc'].'</option>';
	            }
	            return $sponsor_option;
        };
?>
<input type='hidden' id='session_user_telephone' value="<?php echo $_SESSION['user_telephone'];?>">
<input type='hidden' id='session_search_clinic' value="<?php echo $_SESSION['search_clinic'];?>">
<input type='hidden' id='session_search_from' value="<?php echo $_SESSION['search_from'];?>">
<input type='hidden' id='session_search_to' value="<?php echo $_SESSION['search_to'];?>">
<input type='hidden' id='session_page' value="<?php echo $_SESSION['page'];?>">
<input type='hidden' id='session_remember_state' value="<?php echo $_SESSION['remember_state'];?>">
<input type='hidden' id='session_preg_id' value="<?php echo $_SESSION['preg_id'];?>">
<input type='hidden' id='session_delivery_state' value="<?php echo $_SESSION['delivery_state'];?>">
<input type='hidden' id='session_delivery_id' value="<?php echo $_SESSION['delivery_id'];?>">
<input type='hidden' id='session_gravida' value="<?php echo $_SESSION['gravida'];?>">
<input type='hidden' id='session_para' value="<?php echo $_SESSION['para'];?>">
<input type='hidden' id='session_abortions' value="<?php echo $_SESSION['abortions'];?>">
<input type='hidden' id='session_induced' value="<?php echo $_SESSION['induced'];?>">
<input type='hidden' id='session_spontaneous' value="<?php echo $_SESSION['spontaneous'];?>">
<input type='hidden' id='session_LMP' value="<?php echo $_SESSION['LMP'];?>">
<input type='hidden' id='session_EDD' value="<?php echo $_SESSION['EDD'];?>">
<input type='hidden' id='session_BloodGroup' value="<?php echo $_SESSION['BloodGroup'];?>">
<input type='hidden' id='session_sickling' value="<?php echo $_SESSION['sickling'];?>">
<input type='hidden' id='session_geno_type' value="<?php echo $_SESSION['geno_type'];?>">
<input type='hidden' id='session_attend_id' value="<?php echo $attend_id;?>">
<input type='hidden' id='session_patient_id' value="<?php echo $patient_id;?>">
<input type='hidden' id='session_folderno' value="<?php echo $folderno;?>">
<input type='hidden' id='session_name' value="<?php echo $name;?>">
<input type='hidden' id='session_age' value="<?php echo $age;?>">
<input type='hidden' id='session_gender' value="<?php echo $gender;?>">
<input type='hidden' id='session_Schname' value="<?php echo $Schname;?>">
<input type='hidden' id='session_nhis_led_id' value="<?php echo $nhis_led_id;?>">
<input type='hidden' id='session_nhismemberno' value="<?php echo $nhismemberno;?>">
<input type='hidden' id='session_nhisexpirydate' value="<?php echo $nhisexpirydate;?>">
<input type='hidden' id='session_serial_no' value="<?php echo $serial_no;?>">
<input type='hidden' id='session_nhisccc' value="<?php echo $nhisccc;?>">
<input type='hidden' id='session_ghanacard' value="<?php echo $ghanacard;?>">
<input type='hidden' id='session_prvt_led_id' value="<?php echo $prvt_led_id;?>">
<input type='hidden' id='session_prtinsname' value="<?php echo $prtinsname;?>">
<input type='hidden' id='session_prtmemberno' value="<?php echo $prtmemberno;?>">
<input type='hidden' id='session_prtexpirydate' value="<?php echo $prtexpirydate;?>">
<input type='hidden' id='session_sponsor' value="<?php echo $sponsor_attd;?>">
<input type='hidden' id='session_clinic' value="<?php echo $clinic;?>">
<input type='hidden' id='session_typeofservice_attd' value="<?php echo $typeofservice_attd;?>">
<input type='hidden' id='session_dateofadmission_attd' value="<?php echo $dateofadmission_attd;?>">
<input type='hidden' id='session_dateofdischarge_attd' value="<?php echo $dateofdischarge_attd;?>">
<style type="text/css">
    .scroll-card-body {
            max-height: 700px;
            overflow-y: auto;
          }
    .amt-td {
            text-align:right;
          }
    .action-td {
            text-align:center;
          }
</style>

<div class="container-fluid">
    <div class="card shadow md-4">
        <div class="card-header py-0">
            <!--<h3 class="m-0 font-weight-bold text-primary">
                <?php echo $name;?>
            </h3>-->
        	<div class="table-responsive no-padding">
	        	<table width="100%" cellpadding="3" cellspacing="3">
		            <tr>
		                <td>
		                	<table id="attend_patient_table" width="100%">
			                    <tr>
			                    	<td><u>Folder No:</u><?php echo $folderno;?></td>
			                    	<td><u>Date of Birth:</u></td>
			                    	<td><u>Age:</u><?php echo $age;?></td>
			                    	<?php
				                    	$query_gender = "SELECT * FROM gender WHERE gender_id='$gender'";
	                                    $query_gender_run = mysqli_query($con, $query_gender);
	                                    $row_gender=mysqli_fetch_assoc($query_gender_run);
                                    ?>
			                    	<td><u>Gender:</u><?php echo $row_gender['gender']?></td>
			                    	<td><u>Sponsor:</u><?php echo $sponsor_desc .'('.$sponsor_attd.')'?></td>
			                    </tr>
			                    <tr>
			            			<td><u>Date of Admission:</u><?php echo $dateofadmission_attd;?></td>
			            			<td><u>Date of Discharge:</u><?php echo $dateofdischarge_attd;?></td>
			            			<td><u>Type of Service:</u><?php echo $tos_desc;?></td>
			            			<td><u>Clinic:</u><?php echo $clinic_desc;?></td>
			            			<td><u>Clinic:</u><?php echo $clinic_desc;?></td>
			            		</tr>
		                    </table>
		                </td>
		            </tr>
	            </table>
	        </div>
	        <?php
			    $query = "SELECT * FROM vitals WHERE attend_id='$attend_id' ORDER BY date DESC";
			    $query_run = mysqli_query($con, $query);
			?>
			<div class="table-responsive">
			    <table class="table table-hover table-bordered table-sm" width="100%" cellspacing="0">
			        <thead>
			            <tr>
			                <th>Date</th>
			                <th>Temp</th>
			                <th>BP</th>
			                <th>Pulse</th>
			                <th>R.Rate</th>
			                <th>Weight</th>
			                <th>Height</th>
			                <th>Oxygen</th>
			                <th>H.Circ.</th>
			                <th>A.Circ.</th>
			            </tr>
			        </thead>
			        <tbody class="pv-table-body">
			            <?php
				            if (mysqli_num_rows($query_run) > 0)
				            	{
				            		$row=mysqli_fetch_assoc($query_run);
			            ?>
			                <tr>
			                    <td><?php echo $row['date'];?></td>
			                    <td><?php echo $row['temp'];?></td>
			                    <td><?php echo $row['bp_systolic'];?>/<?php echo $row['bp_diastolic'];?></td>
			                    <td><?php echo $row['pulse'];?></td>
			                    <td><?php echo $row['resp_rate'];?></td>
			                    <td><?php echo $row['weight'];?></td>
			                    <td><?php echo $row['height'];?></td>
			                    <td><?php echo $row['oxygen_sat'];?></td>
			                    <td><?php echo $row['circ_hip'];?></td>
			                    <td><?php echo $row['circ_abdo'];?></td>
			                </tr>
			            <?php
			                }
			                else
			                {
			                        echo '';
			                };
			            ?>
			        </tbody>
			    </table>
			</div>
        </div>
        <div class="card-body">