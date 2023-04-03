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
<body bgcolor="#ecf9fc">
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
</div><br>

<table style="width:50%">
	<?php
	$sql="SELECT * FROM courses_tab";
	$result=$connect1->query($sql);
	$count=1;
	echo "<tr>";
	while($row=$result->fetch_assoc())
	{
		echo "<td>";
		echo "<br>";
		echo "<br>";
		echo "<b>"."CourseID:"."</b>"."<br>".$row['course_id']."<br>";
		echo "<br>";
		echo "<b>"."Course name:"."</b>"."<br>".$row['course_name']."<br>";
		echo "<br>";
		echo "<b>"."FacultyID:"."</b>"."<br>".$row['fac_id']."<br>";
		echo "<br>";
		echo "<b>"."Offered in:"."</b>"."<br>".$row['offered_in']."<br>";
		echo "<br>";
		echo "<b>"."Credits:"."</b>"."<br>".$row['credits']."<br>";
		echo "<br>";
		echo "<b>"."Pre-requesites:"."</b>"."<br>".$row['pre_req']."<br>";
		echo "<br>";
		echo "<b>"."Type:"."</b>"."<br>".$row['type']."<br>";
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

</html>