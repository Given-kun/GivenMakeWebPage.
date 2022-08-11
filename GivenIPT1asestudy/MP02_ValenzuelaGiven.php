<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
table{
   display: inline-block;
	padding: 15px 30px;
	color: black;
	text-transform: uppercase;
	font-family: Arial;
	border: 1px solid White;
	display: inline-block;
	padding: 15px 30px;
	color: black;
	text-transform: uppercase;
	letter-spacing: 4px;
	text-decoration: none;
	font-size: 15px;
	overflow: hidden;
	transition: 0.2s;
	color: White;
	background: #3a3b3c;
	font-family: Segoe UI;
   }
   	body{
		background: #18191a;
		size: 150%;
	}

	p{
		display: inline-block;
	padding: 15px 30px;
	color: black;
	text-transform: uppercase;
	font-family: Arial;
	border: 1px solid White;
	display: inline-block;
	padding: 15px 30px;
	color: black;
	text-transform: uppercase;
	letter-spacing: 4px;
	text-decoration: none;
	font-size: 15px;
	overflow: hidden;
	transition: 0.2s;
	color: White;
	background: #242526;
	font-family: Segoe UI;
	}
	a{
		display: inline-block;
	padding: 15px 30px;
	color: black;
	text-transform: uppercase;
	font-family: Arial;
	border: 1px solid White;
	display: inline-block;
	padding: 15px 30px;
	color: black;
	text-transform: uppercase;
	letter-spacing: 4px;
	text-decoration: none;
	font-size: 15px;
	overflow: hidden;
	transition: 0.2s;
	color: White;
	background: #242526;
	font-family: Segoe UI;
	}
   
 </style>

<body>
	 <table>
	 	<td>
<?php
$NAME="Given Valenzuela";
$RPH=   100;
$NHW=8;
$OT=0;

$Pay= $RPH*$NHW;

echo "Employee name:\n".("<u>$NAME</u>");
    echo "<br>";
echo "Rate per hour:\n". ("<u>$RPH</u>");
 echo "<br>";
echo "No. of hours worked:\n". ("<u> $NHW</u>");
 echo "<hr>";
 echo "<center>PAYSLIP</center>";
  echo "<br>"; 
 echo "Employee name:\n".("$NAME");
    echo "<br>";
echo "Rate per hou:\n". ("$RPH");
 echo "<br>";
echo "No. of hours worked:\n". ("$NHW");

 echo "<br>";
  echo "<br>";

   echo "Overtime(hrs):\n".("$OT");
echo "<br>";
echo "<br>";
    echo "Basic Pay\n".("$Pay");
    echo "<br>";
    echo "Overtime Pay:\n".("$OT");
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "Wage Pay:\n".("$Pay");
 
?>
</td>
</table>
<table>
<right>	<td>
<?php
$NAME="Given Valenzuela";
$RPH=   100;
$NHW=10;
$OT=2;

$Pay=800;
$OTPay=$OT*$RPH+$NHW+50;

echo "Employee name:\n".("<u>$NAME</u>");
    echo "<br>";
echo "Rate per hou:\n". ("<u>$RPH</u>");
 echo "<br>";
echo "No. of hours worked:\n". ("<u> $NHW</u>");
 echo "<hr>";
 echo "<center>PAYSLIP</center>";
  echo "<br>";
 echo "Employee name:\n".("$NAME");
    echo "<br>";
echo "Rate per hou:\n". ("$RPH");
 echo "<br>";
echo "No. of hours worked:\n". ("$NHW");

 echo "<br>";
  echo "<br>";

   echo "Overtime(hrs):\n".("$OT");
echo "<br>";
echo "<br>";
    echo "Basic Pay\n".("$Pay");
    echo "<br>";
    echo "Overtime Pay:\n".("$OTPay");
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "Wage Pay:\n".($Pay+$OTPay);





?>
</td>
</table>
<a href="http://localhost/Exam/OnLineCooperativeRegistrationValenzuelaGiven.php">Next Page</a>
</body>
</html>