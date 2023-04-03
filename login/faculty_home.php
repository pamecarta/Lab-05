<!DOCTYPE html>
<?php
session_start();

if(($_SESSION['role'] !="F"))
{
echo "You are trying to access a BAD Page. <a href='login.php' >Login Again</a> ";
session_destroy();

}
else{



?>
<html>
<head>
	<title>University System</title>

	<!-- Including Bootstrap Necessary Files -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<LINK REL="stylesheet" HREF="css/styles.css" TYPE="text/css">
<script type="text/javascript" src="chat/js/jquery.js"></script>
<script type="text/javascript" src="chat/js/chat.js"></script>	
<link type="text/css" rel="stylesheet" media="all" href="chat/css/chat.css" />
<link type="text/css" rel="stylesheet" media="all" href="chat/css/screen.css" />

	<script>
	  function coordinator_report()
	  {
		alert ("Please upload the Coordinator's Report under Uploads->Coordinator's Report. Then only you will be able to submit your Appraisal");
	  }
	</script>
</head>
<body >
<?php 
	$uid=($_SESSION['id']);
	include ("header_page.php"); 
	include ("faculty_menu.php");
	?>

<div id="wrapper">
<table align=center bgcolor="#FFFFFF" width=1000px>
<tr><td>

<?php
if(isset($_SESSION['id']))

{
?>

<?php 
		include ("db_connection.php");
		$uid=($_SESSION['id']);
?>
      
 



	

<?php

}
else
{
   echo "session expired";

}
?> 
<?php }?>  
</form>

</td></tr></table>

<?php include ("footer_page.php"); ?>
</div>


      </body>
</html>