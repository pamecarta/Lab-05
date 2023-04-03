<!DOCTYPE html>
<html>


<body>

<?php
session_start();
include ("db_connection.php");

		$uid=$_POST['userid'];
		$pwd=$_POST['password'];


		$sql="SELECT * FROM users_tab where userid='$uid' AND password='$pwd'";
		$result=$connect->query($sql);
		$row = $result->fetch_assoc(); 
 
      if($row['role']==='S')  //Students
      {

        $_SESSION['id']=$uid;
        $_SESSION['pwd']=$pwd;
		$_SESSION['role'] = "S";
        header('location: students/index.php');
		 
     }
	 elseif($row['role']==='F')  //Faculty
      {

        $_SESSION['id']=$uid;
        $_SESSION['pwd']=$pwd;
		$_SESSION['role'] = "F";
         header('location: faculty/index.php');
		 
     }
	 elseif($row['role']==='A')  //Admin
      {

        $_SESSION['id']=$uid;
        $_SESSION['pwd']=$pwd;
		$_SESSION['role'] = "A";
         header('location: admin/index.php');
		 
     }

     
	 else
	 {
		   header('location: login-error.php');
	 }
 

//-------------------------------Login Failed---------------------
     


?>




</html>