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
		<div class="menu-content">
			<a href="register.php" class=linktext>Register a course</a><br>
			<a href="registered.php" class=linktext>Recently registered courses</a><br>
		</div>
    </li>
</ul>

</div><form name="reg-form" method="POST" action="register_process.php">
	<center>
	<label>RegistrationID:</label>
	<input type="text" name="reg_id"/><br><br></td>
	<label>CourseID:</label>
	<input type="text" name="course_id" /><br><br>
	<label>StudentID:</label>
	<input type="text" name="stu_id" /><br><br>
	<label>FacultyID:</label>
	<input type="text" name="fac_id" /><br><br>
	<label>Semester:</label>
	<input type="text" name="semester" /><br><br>
	<input type="submit" id="but" style="background-color:#1d44b8;color:white;" value="Register"/></td></center></form>
</body>
</html>