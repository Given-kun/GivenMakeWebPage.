<?php
	$id=$_GET['id'];
	include('payrolldb.php');
	$del=" DELETE FROM `payrollemployee` WHERE `EmployeeID`='$id'";
	mysqli_query($conn,$del);
	header('location:Dashboard.php');
?>
