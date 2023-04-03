<?php
	
	include("db_connection.php");
	$regid = $_POST['reg_id'];
	$cid = $_POST['course_id'];
	$stuid = $_POST['stu_id'];
	$facid = $_POST['fac_id'];
	$semester = $_POST['semester'];
	

	$sql = "INSERT INTO registration_tab (sid,reg_id, course_id, stu_id, fac_id,semester) 
			VALUES (0, '$regid', '$cid', '$stuid', '$facid', '$semester')";

	$result = $connect1->query($sql);

	if ($result == FALSE)
	{
		include("error.php");
	}
	else{
		echo '<script>alert("Succesfully registered.")</script>';
		include("registered.php");
	}
	?>