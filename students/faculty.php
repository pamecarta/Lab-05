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
		</div>
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
	$sql="SELECT * FROM faculty_tab WHERE department='Computer Science'";
	$result=$connect1->query($sql);
	$count=1;
	echo "<tr>";
	while($row=$result->fetch_assoc())
	{
		echo "<td>";
		echo "<br>";
		echo "<img src='img/".$row['img1']."'/>";
		echo "<br>";
		echo "<br>";
		echo "<b>"."FacultyID:"."</b>"."<br>".$row['fac_id']."<br>";
		echo "<br>";
		echo "<b>"."Faculty name:"."</b>"."<br>".$row['fac_name']."<br>";
		echo "<br>";
		echo "<b>"."Date of Joining:"."</b>"."<br>".$row['fac_DOJ']."<br>";
		echo "<br>";
		echo "<b>"."Qualification:"."</b>"."<br>".$row['qualification']."<br>";
		echo "<br>";
		echo "<b>"."Department:"."</b>"."<br>".$row['department']."<br>";
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