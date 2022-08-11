

<!DOCTYPE html>
<html>
<head>
	<style>
		body{
		background: #18191a;
	}
	H1{
		border: 1px solid #e4e6eb;
	display: inline-block;
	padding: 15px 30px;
	color: black;
	text-transform: uppercase;
	letter-spacing: 4px;
	text-decoration: none;
	font-size: 24px;
	overflow: hidden;
	transition: 0.2s;
	color: White;
	background: #242526;
	font-family: Segoe UI;

}
H3{
	border: 1px solid #e4e6eb;
	display: inline-block;
	padding: 15px 30px;
	color: black;
	text-transform: uppercase;
	letter-spacing: 4px;
	text-decoration: none;
	font-size: 24px;
	overflow: hidden;
	transition: 0.2s;
	color: White;
	background: #242526;
	font-family: Segoe UI;

}
p
{
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


   input {

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
	text-decoration: none;
	
}
tr{
	background: 	#e4e6eb;

color: black;

border-style: outset;

border-color: 	#3a3b3c;

height: auto;

width: auto;

	font-family: Segoe UI;

text-shadow:none;


	text-decoration: none;
}
a{
		border: 1px solid #e4e6eb;
	display: inline-block;
	padding: 15px 30px;
	color: black;
	text-transform: uppercase;
	letter-spacing: 4px;
	text-decoration: none;
	font-size: 24px;
	overflow: hidden;
	transition: 0.2s;
	color: White;
	background: #242526;
	font-family: Segoe UI;
	}
	</style>

</head>
<body>
    <center>    <h1>GIVEN-KUN COOPERATIVE INCORPORATED</h1><br>
       
                          <h3><b>Given-kun St.Given<br>
                           Telephone:1-800-225-5324</b> </h3></center>

 <hr>
 <center>
  	<p>MEMBER INFORMATION</p>
  </center>
 <table style="width:50%" align="center"class="table table-hover" border=1 cellpadding="2" cellspacing="1">

 
	<tr>
	<center><td>NAME:</td></center>
	<td><?php 
    echo $_POST['txtLName']."\n".$_POST['txtFName']."\n".$_POST['txtMName'];
	?></td></tr>
	<tr>
	<td>ADDRESS:</td>
	<td><?php 
    echo $_POST['Address'];
	?></td></tr>
	<tr>
	<td>Telephone#:</td>
	<td><?php 
    echo $_POST['phone'];
	?></td></tr>
	<td>Date of Birth:</td>
	<td><?php 
    echo $_POST['Birth'];
	?></td></tr>
    <td>Gender:</td>
	<td><?php 
    echo $_POST['gender'];
	?></td></tr>
	<tr>
	<td>OFFICE ADDRESS:</td>
	<td><?php 
    echo $_POST['OAddress'];
	?></td></tr>
	<tr>
	<td>Phone#:</td>
	<td><?php 
    echo $_POST['phone2'];
	?></td></tr>
	<tr>
	<td>Position:</td>
	<td><?php 
    echo $_POST['Position'];
	?></td></tr>
	<tr>
	<td>Employment Status:</td>
	<td><?php 
    echo $_POST['ES'];
	?></td></tr>
	<tr>
	<td>Monthly Salary:</td>
	<td><?php 
    echo $_POST['MS'];
	?></td></tr>
	<tr>
	<td>Co-Borrower:</td>
	<td><?php 
    echo $_POST['CB'];
	?></td></tr>

</tr>

 </table>
 <center>
 	<br>
 	<br>
 	<br>
<a href="http://localhost/Exam/OnLineCooperativeRegistrationValenzuelaGiven.php">👈BACK TO FORM</a></center>
<right>
<a href="http://localhost/Exam/OnLineValenzuelaGiven.php">🍕</a></right>
</body>
</html>