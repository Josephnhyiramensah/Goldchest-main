<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel = "icon" href ="/user_email/img/goldchest_2.png" type ="image/x-icon">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/floating-labels.css" />
	</head>
	<body>
	<?php
		/*require($_SERVER['DOCUMENT_ROOT'] .'/includes/db.php');
		if (isset($_POST['username']))
		{
			$username = stripslashes($_REQUEST['username']);
			$username = mysqli_real_escape_string($con,$username);
			$password = stripslashes($_REQUEST['password']);
			$password = mysqli_real_escape_string($con,$password);
			$query = "SELECT * FROM `users` WHERE username ='$username' and password ='".md5($password)."'";
			$result = mysqli_query($con,$query) or die(mysql_error());
			//$rows = mysqli_num_rows($result);
			if(mysqli_num_rows($result) == 1)
			{
				$user_row = mysqli_fetch_assoc($result);
				$_SESSION['user_super_id'] = '';
				$_SESSION['user_id'] = $user_row['id'];
				$_SESSION['full_name'] = $user_row['full_name'];
				$_SESSION['company_id'] = $user_row['company_id'];
				$_SESSION['username'] = $username;
				header("Location: /welcome.php");
			}
			else
			{
				$query = "SELECT * FROM `user_super` WHERE `email` ='$email' and password ='".md5($password)."'";
				$result = mysqli_query($con,$query) or die(mysql_error());
				//$rows = mysqli_num_rows($result);
				if(mysqli_num_rows($result) == 1)
				{
					$user_row = mysqli_fetch_assoc($result);
					$_SESSION['user_super_id'] = $user_row['user_super_id'];
					$_SESSION['user_id'] = '';
					$_SESSION['full_name'] = $user_row['name'];
					$_SESSION['company_id'] = '';
					$_SESSION['username'] = $username;
					header("Location: /layout/items/user_super_welcome.php");
				}
				else
				{
					echo "<div class='form'>
					<h3>Username/password is incorrect.</h3>
					<br/>Click here to <a href='index.php'>Login</a></div>";
			 	};
		 	};
		}
	    else
	    {*/
		?>
			<form class="form-signin" id="user_sign_in_form" action="" method="post" name="login">
			  <div class="text-center mb-4">
			    <img class="mb-4" src="/user_email/img/goldchest_2.png" alt="" width="72" height="72">
			    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
			  </div>

			  <div class="text-center mb-4" id="user_sign_in_msg">
					
			  </div>

			  <div class="form-label-group">
			    <input type="text" name="user_email" id="" class="form-control" placeholder="Email" required autofocus>
			    <label for="user_email">Email</label>
			  </div>

			  <div class="form-label-group">
			    <input type="password" name="user_password" id="user_password" class="form-control" placeholder="Password" required>
			    <label for="user_password">Password</label>
			  </div>

			  <button class="btn btn-lg btn-primary btn-block" id="user_sign_in" name="submit" type="submit">Sign in</button>
			  <div class="checkbox mb-3">
			  	<p>Do Not Have An Account? <a href='/layout/items/user_create_modal.php'>Sign Up</a></p>
			    <!--<label>
			      <input type="checkbox" value="remember-me"> Remember me
			    </label>-->
			  </div>

			  <p class="mt-5 mb-3 text-muted text-center">Copyright &copy; Goldchest <?php echo date("Y");?></p>
			</form>
		<?php 
		//};
		?>
		<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>
	</body>
</html>