<?php
	$connect1 = new mysqli("localhost", "root", "", "ems_db");
	if ($connect1->connect_errno)
	{
		die('Could not connect: '.$connect->connect_errno);
	}
?>