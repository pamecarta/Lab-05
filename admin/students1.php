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
<form name="dep" method="POST" action="students1.php">
<input type="text"  name="dep" value=""><br><br>
<input type="submit" value="Submit"><br><br></form></center>
</div><table style="width:50%">
<?php	

	include ("db_connection.php");

	session_start();
		$dep=$_POST['dep'];
		$sql="SELECT * FROM student_tab WHERE stu_major='$dep'";
		$result=$connect->query($sql);
		echo "<tr>";
		while($row=$result->fetch_assoc())
		{
			echo "<td>";
			echo "<br>";
			echo "<img align=right src='img/".$row['img2']."'/>";
			echo "<br>";
			echo "<br>";
			echo "<b>"."StudentID:"."</b>"."<br>".$row['stu_id']."<br>";
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
		}
		echo "</tr>";
	?>
</table>
</html>