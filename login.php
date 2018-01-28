<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>
	</head>
	<body>
		<h1 class="text-center">Hello World</h1>
		<?
		if(isset($_GET['success']) && $_GET['success'] == 'true'): ?>
		<span>You are registered successfully, please login bellow</span>
		<form action="" method="POST">
			<input type="text" class="name" name="log_usr">
			<br>
			<input type="password" class="name" name="pas_usr">
		</form>
		<?endif;?>

	</body>
</html>
