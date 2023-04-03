<?php
	
	include("db_connection.php");
	$bid = $_POST['register_id'];
	$uid = $_POST['course_id'];
	$dol = $_POST['stu_id'];
	$dor = $_POST['fac_id'];
	$status = $_POST['semester'];
	
	$lid=rand(1,10000);

	$sql = "INSERT INTO lending_tab (sid,register_id, course_id, stu_id, fac_id,semester) 
			VALUES (0,'$lid', '$bid', '$uid', '$dol', '$dor', '$status', '$remarks')";

	$result = $connect->query($sql);

	if ($result == FALSE)
	{
		include("error.php");
	}
	else{
		include("courses.php");
	}
	?>