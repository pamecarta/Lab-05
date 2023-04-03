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
		<b><a href="courses.php" class="drp">My Courses</a></b>
    </li>
	
	<li class="menu-item">
		<b><a href="myInfo.php" class="drp">My Info</a></b>
    </li>
	
	<li class="menu-item">
		<b><a href="registered.php" class="drp">Registered</a></b>
    </li>
</ul>
</div><table style="width:50%">
<?php	
	session_start();
	if(isset($_SESSION['id']) && $_SESSION['id'] == $_SESSION['id']) {
		$id = $_SESSION['id']; 
		$sql="SELECT * FROM faculty_tab WHERE fac_id='$id'";
		$result=$connect1->query($sql);
		
		echo "<tr>";
		while($row=$result->fetch_assoc())
		{
			echo "<td>";
			echo "<br>";
			echo "<img align=right src='img/".$row['img1']."'/>";
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
		}
		echo "</tr>";
	} else {
		echo "You are not authorized to view this page.";
	}
	?>
</table>
</html>