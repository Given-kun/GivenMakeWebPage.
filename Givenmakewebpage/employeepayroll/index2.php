<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Employee Form</title>
</head>
<style type="text/css">
	table {
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
    background: url(84a2a3986485e475485dee4a327f8541.gif);
    font-family: Segoe UI;
    border-collapse: collapse;
}
body {
    background: url(84a2a3986485e475485dee4a327f8541.gif);
    size: 150%}
input {
    display: inline-block;
    padding: 15px 30px;
    color: black;
    font-family: Arial;
    border: 1px solid White;
    display: inline-block;
    padding: 15px 30px;
    color: black;
    letter-spacing: 4px;
    text-decoration: none;
    font-size: 15px;
    overflow: hidden;
    transition: 0.2s;
    color: White;
    background: url(BowedUnsteadyDutchsmoushond-size_restricted.gif);
    font-family: Segoe UI;
    text-decoration: none;
}
html, body {
    height: 100%;
}

html {
    display: table;
    margin: auto;
}

body {
    display: table-cell;
    vertical-align: middle;
}


</style>
<body>
<center><table><tr><td><B>School Employee Pay System</B></td></tr></table></center>
<hr>
<table border="0">
<tr><td>
<?php
if (isset($_POST["submit"])){
	echo "Faculty Name: <br>";
	echo $_POST['Fname']."<br>";
	?></td></tr>
	<tr><td>
	<?php
	echo "Position:";
	echo $_POST['Pos'];
	?>
	</td></tr>
	<tr><td>
	<?php
		echo "Basic Salary: <br>";
		echo "¥";
	echo ($_POST["Noh"]* $_POST["Rph"])."<br>"; ?>
	</td></tr>
	<tr><td>
	<?php
	echo "Overtime Pay: <br>";
	echo "¥";
	echo (($_POST["Rph"]* $_POST["Oh"])/30)*($_POST["Rph"]* $_POST["Oh"])."<br>"; ?>
	</td></tr>
	<tr><td>
	<?php
	echo "Gross Pay: <br>";
	echo "¥";
	echo ($_POST["Noh"]* $_POST["Rph"])*(($_POST["Rph"]* $_POST["Oh"])/30)*($_POST["Rph"]* $_POST["Oh"])."<br>"; ?>
	</td></tr>
	<tr><td>
	<?php echo "SSS: <br>";
	echo "¥";
	echo (($_POST["Noh"]* $_POST["Rph"])*(($_POST["Rph"]* $_POST["Oh"])/30)*($_POST["Rph"]* $_POST["Oh"])/10)."<br>"; ?>
	</td></tr>
	<tr><td>
 <?php echo "Tax: <br>";
 echo "¥";
	echo (($_POST["Noh"]* $_POST["Rph"])*(($_POST["Rph"]* $_POST["Oh"])/30)*($_POST["Rph"]* $_POST["Oh"])/10 /12)."<br>"; ?>
	</td></tr>
	<tr><td>
	<?php echo "PAGIBIG: <br>";
	echo "¥";
	echo (($_POST["Noh"]* $_POST["Rph"])*(($_POST["Rph"]* $_POST["Oh"])/30)*($_POST["Rph"]* $_POST["Oh"])/10 /12 /12)."<br>"; ?>
	</td></tr>
	<tr><td>
	<?php echo "Total Deduction: <br>";
	echo "¥";
	echo (($_POST["Noh"]* $_POST["Rph"])*(($_POST["Rph"]* $_POST["Oh"])/30)*($_POST["Rph"]* $_POST["Oh"])/10 /12)+(($_POST["Noh"]* $_POST["Rph"])*(($_POST["Rph"]* $_POST["Oh"])/30)*($_POST["Rph"]* $_POST["Oh"])/10)+(($_POST["Noh"]* $_POST["Rph"])*(($_POST["Rph"]* $_POST["Oh"])/30)*($_POST["Rph"]* $_POST["Oh"])/10 /12 /12)+($_POST["Loan"])."<br>"; ?>
	</td></tr>
	<tr><td>
<?php	echo "Net Pay: <br>";
echo "¥";
	echo ($_POST["Noh"]* $_POST["Rph"])*(($_POST["Rph"]* $_POST["Oh"])/30)*($_POST["Rph"]* $_POST["Oh"]) - (($_POST["Noh"]* $_POST["Rph"])*(($_POST["Rph"]* $_POST["Oh"])/30)*($_POST["Rph"]* $_POST["Oh"])/10 /12)+(($_POST["Noh"]* $_POST["Rph"])*(($_POST["Rph"]* $_POST["Oh"])/30)*($_POST["Rph"]* $_POST["Oh"])/10)+(($_POST["Noh"]* $_POST["Rph"])*(($_POST["Rph"]* $_POST["Oh"])/30)*($_POST["Rph"]* $_POST["Oh"])/10 /12 /12)+($_POST["Loan"])."<br>";

}

?>

</td></tr>

	
</table>
</body>
</html>