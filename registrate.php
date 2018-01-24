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
<body>
 <form class="frmm" action="validate.php" method="POST" enctype="multiparte/formdata">
   <label><span>Name:</span> <br><input type="text" class="user" name="user" placeholder="Name"></label><br>
   <label><span>Surname:</span> <br><input type="text" class="surname" name="surname" placeholder="Surname"></label><br>
   <label><span>Email:</span> <br><input type="email" class="email" name="email" placeholder="Email"></label><br>
   <label><span>Username:</span> <br><input type="text" class="username" name="username" placeholder="Username"></label><br>
   <label><span>Password:</span> <br><input type="password" class="password" name="pswd" placeholder="Passord"></label><br>
   <label><span>Repeat password:</span> <br><input type="text" class="repeat" name="reppswd" placeholder="Prepeat password"></label><br>
   <label>
   <span>Gender:</span><br>
   <sapn>Male</sapn><input type="radio" name="gender" calss="male">
   <span>Famale</span><input type="radio" name="gender" calss="famale">
   </label><br>
   <label class='capchalbl'><span>Recapcha:</span><div class="g-recaptcha" data-sitekey="6LfZC0IUAAAAAK55XXxLebUwg6LZcsCYp7zOQWpM"></div></label><br>
   <label><input type="submit" class="send" value="Send" name="send"></label>

 </form>
 <script tyle="text/javascript" src="validate.js"></script>
</body>
</html>
