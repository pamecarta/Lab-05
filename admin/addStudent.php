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
<h1>Please enter student details:</h1><br>
<form name="dep" method="POST" action="addStudent1.php">
<br><br>
	<label>StudentID:</label>
	<input type="text" name="stu_id"/><br><br>
	<label>Student name:</label>
	<input type="text" name="stu_name"/><br><br>
	<label>Year of Enrollement:</label>
	<input type="text" name="stu_year_of_enrollement"/><br><br>
	<label>Major:</label>
	<input type='text' name="stu_major"/><br><br>
	<label>Current GPA:</label>
	<input type='text' name="CGPA"/><br><br>
	<label>Year of Graduation:</label>
	<input type="text" name="year_of_graduation"/><br><br>
	<input id="enter" type="submit" style="background-color:green;color:white;" value="Add Student"/></form><br><br></center>
</div>
</html>