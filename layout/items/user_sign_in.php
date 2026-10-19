<?php 
    include($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
    /*include($_SERVER['DOCUMENT_ROOT'] .'/includes/functions.php');
    user_sign_in();*/

			function log_access() 
			{
				global $con;
				if(isset($_SESSION['user_id'])){$user_id = $_SESSION['user_id'];}else{$user_id = 0;};
				// Get access details
				$page_url = $_SERVER['REQUEST_URI'];
				$ip_address = $_SERVER['REMOTE_ADDR'];
				$user_agent = $_SERVER['HTTP_USER_AGENT'];

				// Prepare an SQL statement
				$stmt = $con->prepare("INSERT INTO access_log (user_id, page_url, ip_address, user_agent) VALUES (?, ?, ?, ?)");
				
				// Bind parameters
				$stmt->bind_param("isss", $user_id, $page_url, $ip_address, $user_agent);
				
				// Execute the statement
				$stmt->execute();
				
				// Close the statement
				$stmt->close();
			}
				$user_sign_in_detail = array();
				$type = '';
				$email = stripslashes($_POST['user_email']);
				$email = mysqli_real_escape_string($con,$email);
				$password = stripslashes($_POST['user_password']);
				$password = mysqli_real_escape_string($con, $password);
				$password = md5($password);

				if(!filter_var($email,FILTER_VALIDATE_EMAIL))
				{
					$type='Invalid_Address_Email';
				}
				else
				{
					$_SESSION['company_type_id'] = 0;
					$company_type_id = 0;
					$sql = "SELECT * FROM `users` WHERE `email` =? AND user_password =?";
					$stmt = $con->prepare($sql); 
					$stmt->bind_param("ss", $email, $password);
					$stmt->execute();
					$stmt_result = $stmt->get_result();

					if($stmt_result->num_rows == 1)
					{
						$user_row = $stmt_result->fetch_assoc();
						$user_status = $user_row['user_status'];
						$company_id = $user_row['company_id'];
						$user_warehouse = $user_row['warehouse_id'];
						$_SESSION['user_warehouse'] = $user_row['warehouse_id'];

						/*$query_sub_bill = "SELECT * FROM `subscription_bill` WHERE `company_id` ='$company_id'
						ORDER BY date_end DESC";
						$result_sub_bill = mysqli_query($con,$query_sub_bill);
						$row_sub_bill = mysqli_fetch_assoc($result_sub_bill);*/

						$query_sub_bill = "SELECT * FROM `subscription_bill` WHERE `company_id` =? ORDER BY date_end DESC";
						$result_sub_bill = $con->prepare($query_sub_bill); 
						$result_sub_bill->bind_param("i", $company_id);
						$result_sub_bill->execute();
						$stmt_result = $result_sub_bill->get_result();
						$row_sub_bill = $stmt_result->fetch_assoc();
						
						$date_grace = $row_sub_bill['date_grace'];
						$date_end = $row_sub_bill['date_end'];
						if ($user_status == "Accepted")
						{
							$date = date("Y-m-d");
							
							if($row_sub_bill['date_grace'] < $date)
							{
								$type = "Expired_Closed";
							}
							else if($row_sub_bill['date_grace'] >= $date)
							{
								if($row_sub_bill['date_end'] >= $date)
								{
									/*$query_company = "SELECT * FROM `company` WHERE `company_id` ='$company_id'";
									$result_company = mysqli_query($con,$query_company);
									$row_company = mysqli_fetch_assoc($result_company);*/

									$query_company = "SELECT * FROM `company` WHERE `company_id` =?";
									$result_company = $con->prepare($query_company); 
									$result_company->bind_param("i", $company_id);
									$result_company->execute();
									$result_company = $result_company->get_result();
									$row_company = $result_company->fetch_assoc();
									$status = $row_company['status'];

									if($status == 'Active')
									{
										$_SESSION['user_super_id'] = '';
										$_SESSION['user_id'] = $user_row['id'];
										$_SESSION['user_telephone'] = $user_row['telephone'];
										$_SESSION['user_type'] = 'Normal_User';
										$_SESSION['user_type_id'] = $user_row['user_type_id'];
										$_SESSION['full_name'] = $user_row['first_name'].' '.$user_row['last_name'];
										$_SESSION['company_id'] = $user_row['company_id'];
										$_SESSION['email'] = $email;
										$_SESSION['vat_type'] = $row_company['vat_type'];
										$_SESSION['vat_calc_type'] = $row_company['vat_calc_type'];
										$_SESSION['covid_perc'] = $row_company['covid_perc'];
										$_SESSION['nhil_perc'] = $row_company['nhil_perc'];
										$_SESSION['getfund_perc'] = $row_company['getfund_perc'];
										$_SESSION['vat_perc'] = $row_company['vat_perc'];
										if(isset($user_row['branch_id']))
										{
											$branch_id = $user_row['branch_id'];
											/*$query_branch = "SELECT * FROM branch WHERE branch_id='$branch_id'";
											$result_branch = mysqli_query($con,$query_branch);
											$row_branch = mysqli_fetch_assoc($result_branch);*/

											$query_branch = "SELECT * FROM `branch` WHERE `branch_id` =?";
											$result_branch = $con->prepare($query_branch); 
											$result_branch->bind_param("i", $branch_id);
											$result_branch->execute();
											$result_branch = $result_branch->get_result();
											$row_branch = $result_branch->fetch_assoc();

											$_SESSION['warehouse_id'] = $row_branch['warehouse_id'];
											$_SESSION['cash_ledger_id'] = $row_branch['cash_ledger_id'];
											$_SESSION['branch_id'] = $user_row['branch_id'];
										}
										else
										{
											$company_no = $_POST['company_id'];
											/*$query_branch = "SELECT * FROM branch WHERE company_id='".$_POST['company_id']."'
											ORDER BY branch_id ASC";
											$result_branch = mysqli_query($con,$query_branch);
											$row_branch = mysqli_fetch_assoc($result_branch);*/
											
											$query_branch = "SELECT * FROM `branch` WHERE `company_id` =? ORDER BY branch_id ASC";
											$result_branch = $con->prepare($query_branch); 
											$result_branch->bind_param("i", $company_no);
											$result_branch->execute();
											$result_branch = $result_branch->get_result();
											$row_branch = $result_branch->fetch_assoc();

											$_SESSION['branch_id'] = $row_branch['branch_id'];
											$_SESSION['warehouse_id'] = $row_branch['warehouse_id'];
											$_SESSION['cash_ledger_id'] = $row_branch['cash_ledger_id'];
										};
										$_SESSION['company_type_id'] = $row_company['company_type_id'];
										$company_type_id = $row_company['company_type_id'];
										$_SESSION['company_sms'] = $row_company['sms'];
										$user_id = $user_row['id'];

										/*$query = "SELECT * FROM `user_privilege_set` WHERE `user_id` ='$user_id'";
										$result = mysqli_query($con,$query);
										if(mysqli_num_rows($result) > 0)
										{
											while($user_priv_set_row = mysqli_fetch_assoc($result))
											{*/

										$query = "SELECT * FROM `user_privilege_set` WHERE `user_id` =?";
										$result = $con->prepare($query); 
										$result->bind_param("i", $user_id);
										$result->execute();
										$stmt_result_ups = $result->get_result();

										if($stmt_result_ups->num_rows > 0)
										{
											while($user_priv_set_row = $stmt_result_ups->fetch_assoc())
											{
												$user_priv_id = $user_priv_set_row['user_priv_id'];
												/*$query_priv = "SELECT * FROM `user_privilege` WHERE `user_priv_id` ='$user_priv_id'";
												$result_priv = mysqli_query($con,$query_priv);
												$user_priv_row = mysqli_fetch_assoc($result_priv);*/
												
												$query_priv = "SELECT * FROM `user_privilege` WHERE `user_priv_id` =?";
												$result_priv = $con->prepare($query_priv); 
												$result_priv->bind_param("i", $user_priv_id);
												$result_priv->execute();
												$stmt_result_up = $result_priv->get_result();
												$user_priv_row = $stmt_result_up->fetch_assoc();

												$privilege = $user_priv_row['user_privilege'];
												$_SESSION[$privilege] = $user_priv_set_row['user_privilege_set'];
											};
										};
										$type = "Normal_User";
									}
									else
									{
										$type = "Closed";
									};
								}
								else
								{
									$type = "Expired_Grace";
								};
							};
						} 
						else if($user_status == "Pending")
						{
							$type = "Pending";
						}
						else if($user_status == "Rejected")
						{
							$type = "Rejected";
						}
						else if($user_status == "Revoked")
						{
							$type = "Revoked";
						};
					}
					else
					{
						$date_grace = 'N/A';
						$date_end = 'N/A';

						$sql = "SELECT * FROM `user_super` WHERE `email` =? AND `password` =?";
						$stmt = $con->prepare($sql); 
						$stmt->bind_param("ss", $email, $password);
						$stmt->execute();
						$stmt_result = $stmt->get_result();

						if($stmt_result->num_rows == 1)
						{
							$user_row = $stmt_result->fetch_assoc();
							$_SESSION['user_super_id'] = $user_row['user_super_id'];
							$_SESSION['user_id'] = $user_row['user_super_id'];
							$_SESSION['user_type'] = 'Super_User';
							$_SESSION['user_type_id'] = '';
							$_SESSION['full_name'] = $user_row['name'];
							$_SESSION['company_id'] = '';
							$_SESSION['email'] = $email;
							$_SESSION['company_type_id'] = 0;
							$company_type_id = 0;
							$_SESSION['user_warehouse'] = 0;
							$type = "Super_User";
						}
						else
						{
							$sql = "SELECT * FROM `user_ultra_super` WHERE `email` =? AND `password` =?";
							$stmt = $con->prepare($sql); 
							$stmt->bind_param("ss", $email, $password);
							$stmt->execute();
							$stmt_result = $stmt->get_result();

							if($stmt_result->num_rows == 1)
							{
								$user_row = $stmt_result->fetch_assoc();
								$_SESSION['user_ultra_super_id'] = $user_row['user_ultra_super_id'];
								$_SESSION['user_type'] = 'Ultra_Super_User';
								$_SESSION['user_type_id'] = '';
								$_SESSION['full_name'] = $user_row['name'];
								$_SESSION['email'] = $email;
								$type = "Ultra_Super_User";
								$_SESSION['company_type_id'] = 0;
								$company_type_id = 0;
								$_SESSION['user_warehouse'] = 0;
							}
							else
							{
								$type = "User_Not_Registered";
							};
						};
					};
				};
				array_push($user_sign_in_detail, 
					$date_grace,
					$date_end,
					$type,
					$company_type_id
				);
				log_access();
				echo json_encode($user_sign_in_detail);