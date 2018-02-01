<?php require_once(__DIR__.'/classes.php'); ?>
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
		<? if(isset($_GET['success']) && $_GET['success'] == 'true'):	header("Location:validate.php");?>
		<span>You are registered successfully, please login bellow</span>
		<form class="form" action="" method="POST">
			<label><span>Email:</span><br><input type="email" class="email" name="input_email" placeholder="Email"></label>
			<br>
			<label><span>Password:</span><br><input type="password" class="password" name="input_password" placeholder="Password"></label>
			<br>
			<input type="submit" class="send" name="login" value="send">
		</form>
		<?endif;?>
		<script type="text/javascript" src="validate.js"></script>
	</body>
</html>

