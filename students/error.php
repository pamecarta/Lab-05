<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles1.css">
</head>
<?php include ("db_connection.php")?>
<div class="header" style="background-color:#1d44b8;">
	<h1>Education Management System</h1>
</div>
<div class="menu_pop" id="menu_desc" style="display:none">
    Menu
</div>
<body style="background-color:white;">
<ul>
    <li class="menu-item">
		<b><a href="index.php" class="drp">Home</a></b>
	</li>
	
	<li class="menu-item">
		<b><a href="faculty.php" class="drp">Faculty</a></b>
    </li>
	
	<li class="menu-item">
		<b><a href="courses.php" class="drp">Courses</a></b>
    </li>
	
	<li class="menu-item">
		<b><a href="myInfo.php" class="drp">My Info</a></b>
    </li>
	
	<li class="menu-item">
		<b><a href="register.php" class="drp">Register</a></b>
    </li>
</ul>
<center><h3>Error. Please, try again.</h3>
<a href="register.php"><input type="button" id="home" style="background-color:#1d44b8;color:white;" value="Try again"/></a><br><br>
<a href="index.php"><input type="button" id="home" style="background-color:#1d44b8;color:white;" value="Homepage"/></a></center>
</body>
</html>