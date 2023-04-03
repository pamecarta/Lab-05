<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<?php
	include ("db_connection.php")
	?>
<div class="header" style="background-color:#1d44b8;">
	<h1>Welcome!</h1>
	<p>Please enter your userid and password to login.</p>		
	</div><br>
<body style="background-color:white;">
<div class="center">
<form name="login-form" method="POST" action="login_process_red.php"><body bgcolor="white" align=center width="10%">
	<br><br>
	<label>Name:</label>
	<input name="userid"/><br><br>
	<label>Password:</label>
	<input name="password"/><br><br>
	<input id="login" type="submit" style="background-color:#FFC300;color:white;" value="Login"/></form></body><br><br>
<img src="captcha.php" style="width:15%;height:15%;"><br>
<input type="text" size="6" maxlength="5" name="vercode" value=""><br>
<input id="submitButton" type="submit" style="background-color:#50C878;color:white;">
<center><h1>Correct! You can now login.</h1>
</div>
</body>
</html>