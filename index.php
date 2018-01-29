<?php ini_set('display_errors', '1');
error_reporting(E_ALL);?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="style.css">
 <title>Registration</title>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body><?  //var_dump(isset($_REQUEST['user']) && $_REQUEST['user']);  ?>
 <form class="form" action="validate.cgi" method="POST" enctype="multiparte/formdata">
   <label><span class="title">Name:</span> <br><input type="text" class="user" name="user" value="<?=isset($_GET['user']) && $_GET['user'] ? $_GET['user'] : "" ?>" placeholder="Name"></label><span class="warning"></span><br>
   <label><span class="title">Surname:</span> <br><input type="text" class="surname" name="surname" value="<?=isset($_GET['surname']) && $_GET['surname'] ? $_GET['surname'] : "";?>" placeholder="Surname"></label><span class="warning"></span><br>
   <label><span class="title">Email:</span> <br><input type="em`ail" class="email" name="email" value="<?=isset($_GET['email']) && $_GET['email'] ? $_GET['email'] : "";?>" placeholder="Email"></label><br>
   <span class="warning"></span><label><span class="title">Username:</span><br><input type="text" class="username" name="username" value="<?= isset($_GET['username']) && $_GET['username'] ? $_GET['username'] : "";?>" placeholder="Username"></label><span class="warning"></span><br>
   <label><span class="title">Password:</span> <br><input type="password" class="password" name="pswd" placeholder="Passord"></label><span class="warning"></span><br>
   <label><span class="title">Repeat password:</span> <br><input type="password" class="repeat" name="reppswd" placeholder="Repeat password"></label><span class="warning"></span><br>
   <label><br>
   <span>Gender:</span><br>
   <sapn>Male</sapn><input type="radio" name="gender" calss="male" value="Male">
   <span>Famale</span><input type="radio" name="gender" calss="famale" value="Famale">
   </label><br><br>
   <label><span>Image Upload:</span><br><input type="file" class="file--upload" nmae="upload_img" ></label><br><br>
   <label class='capchalbl'><span>Recapcha:</span><div class="g-recaptcha" data-sitekey="6LfZC0IUAAAAAK55XXxLebUwg6LZcsCYp7zOQWpM"></div></label><br>
   <label><input type="submit" class="send" value="Send" name="send"></label>
 </form>

 <script tyle="text/javascript" src="validate.js"></script>
</body>
</html>
