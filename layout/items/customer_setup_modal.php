<div 
class="modal fade bd-example-modal-lg" 
id="customer_create_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="customer_create_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
  <div class="modal-dialog modal-lg" role="document">
	   <div class="modal-content">
        <div class="modal-header">
        		<h5 class="modal-title m-0 font-weight-bold text-primary" id="customer_create_modal_header">Branch Setup</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span>
        		</button>
  		  </div>
          <form id="customer_create_form" method="POST">
              <div class="modal-body">
                <div class="form-row">
                  <div class="col-md-12 mb-12">
                    <div id="customer_create_form_msg"></div>
                    <input type="hidden" class="form-control" name="customer_id" id="customer_id">
                    <input type="hidden" class="form-control" name="customer_entry_type" id="customer_entry_type">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-5 mb-5">
                    <label for="customer_first_name">First Name</label>
                    <input type="text" class="form-control" name="customer_first_name" id="customer_first_name">
                  </div>
                  <div class="col-md-5 mb-5">
                    <label for="customer_last_name">Last Name</label>
                    <input type="text" class="form-control" name="customer_last_name" id="customer_last_name">
                  </div>
                  <div class="col-md-2 mb-2">
                    <label for="customer_branch">Branch</label>
                      <select class="form-control bg-light" name="customer_branch" id="customer_branch"> 
                        <option value="0">Please Select</option>
                        <?php
                          $company_id = $_SESSION['company_id'];
                          $branch_id = $_SESSION['branch_id'];
                          $sql="SELECT * FROM branch WHERE company_id = '$company_id' ORDER BY branch_name ASC";
                          $result=mysqli_query($con,$sql);
                          while($row=mysqli_fetch_array($result))
                          {
                            if($row['branch_id'] == $branch_id)
                            {
                              echo '<option value = "'.$row['branch_id'].'" selected="selected">'.$row['branch_name'].'</option>';
                            }
                            else
                            {
                              echo '<option value = "'.$row['branch_id'].'">'.$row['branch_name'].'</option>';
                            }
                          };
                        ?>
                      </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-3 mb-3">
                    <label for="customer_sex">Sex</label>
                    <select class="form-control bg-light" name="customer_sex" id="customer_sex"> 
                        <option value="0">Please Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                  </div>
                  <div class="col-md-4 mb-4">
                    <label for="customer_dob">Date of Birth</label>
                    <input type="date" class="form-control" name="customer_dob" id="customer_dob">
                  </div>
                  <div class="col-md-5 mb-5">
                    <label for="customer_email">Email</label>
                    <input type="text" class="form-control" name="customer_email" id="customer_email">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-4">
                    <label for="customer_phone_number">Phone Number</label>
                    <input type="text" class="form-control" name="customer_phone_number" id="customer_phone_number">
                  </div>
                  <div class="col-md-4 mb-4">
                    <label for="customer_id_number">ID Number</label>
                    <input type="text" class="form-control" name="customer_id_number" id="customer_id_number">
                  </div>
                  <div class="col-md-4 mb-4">
                    <label for="customer_id_type">ID Type</label>
                    <select class="form-control bg-light" name="customer_id_type" id="customer_id_type"> 
                        <option value="0">Please Select</option>
                        <option value="Ghanacard">Ghanacard</option>
                        <option value="Voter Card">Voter Card</option>
                        <option value="Driver License">Driver License</option>
                        <option value="Passport">Passport</option>
                        <option value="Insurance Card">Insurance Card</option>
                        <option value="Staff Card">Staff Card</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-4">
                    <label for="customer_marital_status">Marital</label>
                    <select class="form-control bg-light" name="customer_marital_status" id="customer_marital_status"> 
                        <option value="0">Please Select</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Widow">Widow</option>
                    </select>
                  </div>
                  <div class="col-md-4 mb-4">
                    <label for="customer_address">Address</label>
                    <input type="text" class="form-control" name="customer_address" id="customer_address">
                  </div>
                  <div class="col-md-4 mb-4">
                    <label for="customer_location">Location</label>
                    <input type="text" class="form-control" name="customer_location" id="customer_location">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-4">
                    <label for="customer_religion">Religion</label>
                    <select class="form-control bg-light" name="customer_religion" id="customer_religion"> 
                        <option value="0">Please Select</option>
                        <option value="Christian">Christian</option>
                        <option value="Muslim">Muslim</option>
                        <option value="Traditional">Traditional</option>
                        <option value="Atheist">Atheist</option>
                        <option value="Buddhist">Buddhist</option>
                        <option value="Judaism">Judaism</option>
                        <option value="Judaism">Others</option>
                    </select>
                  </div>
                  <div class="col-md-4 mb-4">
                    <label for="customer_occupation">Occupation</label>
                    <input type="text" class="form-control" name="customer_occupation" id="customer_occupation">
                  </div>
                  <div class="col-md-4 mb-4">
                    <label for="customer_other_info">Other Info</label>
                    <input type="text" class="form-control" name="customer_other_info" id="customer_other_info">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12 mb-12">
                    <label for="customer_allergies">Allergies</label>
                    <textarea class="form-control" id="customer_allergies" name="customer_allergies" rows="4"></textarea>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                  <button type="button" name="customer_save_btn" id="customer_save_btn" class="btn btn-primary">Save</button>
                  <button type="button" name="customer_update_btn" id="customer_update_btn" class="btn btn-primary">Update</button>
                  <button type="submit" name="customer_cancel_btn" id="customer_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              </div>
          <?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/foot.php');?>
          </form>
	   </div>
  </div>
</div>