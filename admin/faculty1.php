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
		<b><a href="students.php" class="drp">Students</a></b>
    </li>
	
	<li class="menu-item">
		<b><a href="faculty1.php" class="drp">Faculty</a></b>
    </li>
	
	<li class="menu-item">
		<b><a href="addStudent.php" class="drp">Add Student</a></b>
    </li>
</ul><center><br>
<h1>Please specify the department.</h1><br>
<form name="dep" method="POST" action="faculty.php">
<input type="text"  name="dep" value=""><br><br>
<input type="submit" value="Submit"><br><br></form></center>
</html>