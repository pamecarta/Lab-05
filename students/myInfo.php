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
		<b><a href="register.php" class="drp">Register</a></b>
    </li>
</ul>
</div><br>

<table style="width:50%">
	<?php
	$sql="SELECT * FROM student_tab";
	$result=$connect1->query($sql);
	$count=1;
	echo "<tr>";
	while($row=$result->fetch_assoc())
	{
		echo "<td>";
		echo "<br>";
		echo "<img align=right src='img/".$row['img2']."'/>";
		echo "<br>";
		echo "<br>";
		echo "<b>"."UserID:"."</b>"."<br>".$row['stu_id']."<br>";
		echo "<br>";
		echo "<b>"."Student name:"."</b>"."<br>".$row['stu_name']."<br>";
		echo "<br>";
		echo "<b>"."Year of Enrollement:"."</b>"."<br>".$row['stu_year_of_enrollement']."<br>";
		echo "<br>";
		echo "<b>"."Major:"."</b>"."<br>".$row['stu_major']."<br>";
		echo "<br>";
		echo "<b>"."Current GPA:"."</b>"."<br>".$row['CGPA']."<br>";
		echo "<br>";
		echo "<b>"."Year of Graduation:"."</b>"."<br>".$row['year_of_graduation']."<br>";
		echo "<br>";
		echo "</td>";
		$count++;
			if($count==5){
			echo "</tr><tr>";
			$count=1;
		}
	}
	echo "</tr>";
	
	?>
	</table>

</html>