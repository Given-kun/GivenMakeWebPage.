<?php
//Case Study Web-Program Written by: Valenzuela Given G.
	include('payrolldb.php');
 
	$EmployeeName=$_POST['EmployeeName'];
	$EmployeeID=$_POST['EmployeeID'];
	$Position=$_POST['Position'];
	$THours=$_POST['THours'];
	$payrate=$_POST['payrate'];
	$overtime=$_POST['overtime'];
	$allowance=$_POST['allowance'];
	$absence=$_POST['absence'];
	$total=$_POST['total'];
 
	mysqli_query($conn,"INSERT INTO `payrollemployee` (`EmployeeName`, `EmployeeID`, `Position`, `THours`, `payrate`, `overtime`, `allowance`, `absence`, `total`) VALUES ('$EmployeeName', 
		'$EmployeeID', '$Position', '$THours', '$payrate','$overtime', '$allowance', '$absence', 
		'$total')");



	header('location:Payroll.php');
 
?>