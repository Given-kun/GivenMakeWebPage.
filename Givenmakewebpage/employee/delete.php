<?php
//Case Study Web-Program Written by: Valenzuela Given G.
	$id=$_GET['id'];
	include('epmanagerdb.php');
	$del=" DELETE FROM `manageemployee` WHERE `EmployeeID`='$id'";
	mysqli_query($conn,$del);
	header('location:EPMANAGER.php');
?>