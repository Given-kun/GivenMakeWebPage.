<?php
//Case Study Web-Program Written by: Valenzuela Given G.
	include('epmanagerdb.php');
 
	$EmployeeID=$_POST['EmployeeID'];
	$Surname=$_POST['Surname'];
	$Firstname=$_POST['Firstname'];
	$MiddleInitial=$_POST['MiddleInitial'];
	$Birthdate=$_POST['Birthdate'];
	$Department=$_POST['Department'];
	$Position=$_POST['Position'];
	$Gender=$_POST['Gender'];
 
	mysqli_query($conn,"INSERT INTO `manageemployee` (`EmployeeID`, `Surname`, `Firstname`, `MiddleInitial`, `Birthdate`, `Department`, `Position`, `Gender`) VALUES ('$EmployeeID', '$Surname', '$Firstname', '$MiddleInitial', '$Birthdate', '$Department', '$Position', '$Gender')");



	header('location:EPMANAGER.php');
 
?>