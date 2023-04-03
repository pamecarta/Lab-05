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
		<b><a href="#" class="drp">Register</a></b>
		<div class="menu-content">
			<a href="register.php" class=linktext>Register a course</a><br>
			<a href="registered.php" class=linktext>Recently registered courses</a><br>
		</div>
    </li>
</ul>
<center>
<p>Recently registered courses:</p></center>
<table>
<?php
	$sql="SELECT * FROM registration_tab";
	$result=$connect1->query($sql);
	$count=1;
	echo "<tr>";
	while($row=$result->fetch_assoc())
	{
		echo "<td>";
		echo "<br>";
		echo "<br>";
		echo "<b>"."RegID:"."</b>"."<br>".$row['reg_id']."<br>";
		echo "<br>";
		echo "<b>"."CourseID:"."</b>"."<br>".$row['course_id']."<br>";
		echo "<br>";
		echo "<b>"."StudentID:"."</b>"."<br>".$row['stu_id']."<br>";
		echo "<br>";
		echo "<b>"."FacultyID:"."</b>"."<br>".$row['fac_id']."<br>";
		echo "<br>";
		echo "<b>"."Semester registered for:"."</b>"."<br>".$row['semester']."<br>";
		echo "<br>";
		echo "</td>";
		$count++;
			if($count==6){
			echo "</tr><tr>";
			$count=1;
		}
	}
	echo "</tr>";
	
	?>
</table>
</body>
</html>