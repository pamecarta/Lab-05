
<?php
	session_start();
	include("db_connection.php");
	$sid = $_POST['stu_id'];
	$snm = $_POST['stu_name'];
	$sy = $_POST['stu_year_of_enrollement'];
	$sm = $_POST['stu_major'];
	$gpa = $_POST['CGPA'];
	$yg = $_POST['year_of_graduation'];
	

	$sql = "INSERT INTO student_tab (sid, img2, stu_id, stu_name, stu_year_of_enrollement, stu_major,CGPA,year_of_graduation) 
			VALUES (0, null, '$sid', '$snm', '$sy', '$sm', '$gpa', '$yg')";

	$result = $connect->query($sql);

	if ($result == FALSE)
	{
		mysqli_error($connect);
		include("addStudent.php");
	}
	else{
		include("students.php");
	}
	?>

