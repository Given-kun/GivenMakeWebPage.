<?php
	include('epmanagerdb.php');
	$id= $_GET['id'];

$EmployeeID = $_POST['EmployeeID'];
$Surname = $_POST['Surname'];
$Firstname = $_POST['Firstname'];
$MiddleInitial = $_POST['MiddleInitial'];
$Birthdate = $_POST['Birthdate'];
$Department = $_POST['Department'];
$Position = $_POST['Position'];
$Gender = $_POST['Gender'];
 
 
	mysqli_query($conn,"UPDATE `manageemployee` SET `EmployeeID`=[$EmployeeID],`Surname`=[$Surname],`Firstname`=[$Firstname],`MiddleInitial`=[$MiddleInitial],`Birthdate`=[$Birthdate],`Department`=[$Department],`Position`=[$Position],`Gender`=[$Gender] WHERE `EmployeeID`=[$id]");
	header('location:EPMANAGER.php');
?>