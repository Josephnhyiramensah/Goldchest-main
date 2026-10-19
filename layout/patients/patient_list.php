<?php
    //session_start(); 
    include($_SERVER['DOCUMENT_ROOT'] .'/health/includes/functions.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/health/includes/auth.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/health/includes/header_main.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/health/includes/navbar_main.php');
?>
<style type="text/css">
    input {
            border-top-style: hidden;
            border-right-style: hidden;
            border-left-style: hidden;
            border-bottom-style: hidden;
            background-color: #ffffff;
          }
  </style>
<div class="container-fluid">
    <div class="card shadow md-4">
        <div class="card-header py-3">
        	<div class="float-left">
	            <h4 class="m-0 font-weight-bold text-primary">
	                Patient List
	            </h4>
            </div>
            <div class="float-right">
		        <form class="form-inline mr-auto w-100 navbar-search">
		        	<div class="input-group">
		                <a href="patient_setup.php">
		                  <i class="fas fa-user-plus fa-lg"></i>
		                </a>
		            </div>
		            <div class="input-group">
		              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" name="search_patient" id="search_patient">
		              <div class="input-group-append">
		                <button class="btn btn-primary" type="button">
		                  <i class="fas fa-search fa-sm"></i>
		                </button>
		              </div>
		            </div><!-- -->
		        </form>
	        </div>
        </div>
        <div class="card-body">
            <?php
                if(isset($_SESSION['success']) && $_SESSION['success'] !='')
                {
                    echo '<h2>'.$_SESSION['success'].'</h2>';
                    unset($_SESSION['success']);
                };
                if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                {
                    echo '<h2>'.$_SESSION['status'].'</h2>';
                    unset($_SESSION['status']);
                };
            ?>
            <?php
                
                $query = "SELECT * FROM patients";
                $query_run = mysqli_query($con, $query);
            ?>
            <div class="table-responsive" id="patient-table">
                <table class="table table-hover table-bordered table-sm table-condensed" id="patientTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Folder No</th>
                            <th>Patient Name</th>
                            <th>Date of Birth</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Telephone</th>
                            <th>Add</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody class="pv-table-body">
                        <?php
                            if (mysqli_num_rows($query_run) > 0)
                            {
                                while($row=mysqli_fetch_assoc($query_run))
                                {
                        ?>
                            <tr>
	                            <td><?php echo $row['folderNo'];?></td>
	                            <td><a href="#" id="btn_edit_patient" data-id1="<?php echo $row['patient_id'];?>"><?php echo $row['firstName']." ". $row['lastName'] ?></a></td>
	                            <td><?php echo $row['DOB'];?></td>
	                            <td><?php echo age($row['DOB']);?></td>
                                <?php
                                    $gender = $row['gender'];
                                    $query_gender = "SELECT gender FROM gender WHERE gender_id='$gender'";
                                    $query_run_gender = mysqli_query($con, $query_gender);
                                    $row_gender=mysqli_fetch_assoc($query_run_gender);
                                    if (isset($row_gender["gender"])) {
                                        $gender = $row_gender["gender"];
                                    } else {
                                        $gender = 'Not Specified';
                                    };
                                ?>
	                            <td><?php echo $gender;?></td>
                                <td><?php echo $row['telephone'];?></td>
	                            <td>
									<a href="#" id="btn_new_attend" data-id="<?php echo $row['patient_id'];?>"><i class="fa fa-address-card fa-sm"></i></a>
	                            </td>
	                            <td>
									<a href="#" id="btn_delete_patient" data-id2="<?php echo $row['patient_id'];?>"><i class="fa fa-trash fa-sm"></i></a>
	                            </td>
                            </tr>
                        <?php
                                }
                            }
                            else
                            {
                                    echo 'Data Not Found';
                            };
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('patient_edit_modal.php');?>
<?php include('patient_create_attend_modal.php');?>
<?php include('patient_attend_dialogue_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/health/includes/scripts_main.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/health/includes/footer_main.php');?>