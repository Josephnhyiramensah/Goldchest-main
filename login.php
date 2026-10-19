<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel = "icon" href ="/img/goldchest_2.png" type ="image/x-icon">
	<link rel="stylesheet" href="/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/css/floating-labels.css" />
	</head>
	<body>
		<form class="form-signin" id="user_sign_in_form" action="" method="post" name="user_sign_in_form">
		  <div class="text-center mb-4">
		    <!--<img class="mb-4" src="/img/goldchest_2.png" alt="" width="72" height="72">-->
		    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
		  </div>

		  <div id="user_sign_in_msg"></div>

		  <div class="form-label-group">
		    <input type="email" name="user_email" id="user_email" class="form-control" placeholder="Email" required autofocus>
		    <label for="user_email">Email</label>
		  </div>

		  <div class="form-label-group">
		    <input type="password" name="user_password" id="user_password" class="form-control" placeholder="Password" required>
		    <label for="user_password">Password</label>
		  </div>

		  <button class="btn btn-lg btn-primary btn-block" id="user_sign_in" name="submit" type="submit">Sign in</button>
		  <div class="checkbox mb-3">
		  	<p><small>Do Not Have An Account? Email: techorientltd@gmail.com <!--<a href='/layout/items/user_admin_sheet.php'>Sign Up</a>--></small></p>
		    <!--<label>
		      <input type="checkbox" value="remember-me"> Remember me
		    </label>-->
		  </div>
		  <p class="mt-5 mb-3 text-muted text-center">Copyright &copy; Goldchest <?php echo date("Y");?></p>
		</form>
		<?php include($_SERVER['DOCUMENT_ROOT'] .'/includes/scripts_main.php');?>
	</body>
</html>