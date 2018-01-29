<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1 class="text-center">Hello World</h1>
		<? //if(isset($_GET['success']) && $_GET['success'] == 'true'): ?>
		<span>You are registered successfully, please login bellow</span>
		<form class="form" action="" method="POST">
			<label>
			<input type="email" class="name" name="input_email" placeholder="Email,Username or"></label>
			<br>
			<input type="password" class="password" name="input_password" placeholder="Password">
			<br>
			<input type="submit" class="send" name="submit" value="send" placeholder="Password">
		</form>
		<?//endif;?>
		<script type="text/javascript" src="validate.js"></script>
	</body>
</html>
<?php
	if(isset($_POST['send'])){
		$login_email = $_POST['input_email'];
		$login_password = $_POST['input_password'];
		if($login_email == "" || $login_password == ""){
			$email = ['email'=>''];
			$current_url= "{$_SERVER['REQUEST_SCHEME']}"."://"."{$_SERVER['HTTP_HOST']}";

			$attrs = http_build_query($email);
			header("Location:{$current_url}?{$attrs}");

		}

	}
 ?>
