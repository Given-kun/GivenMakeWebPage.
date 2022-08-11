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
    background: url(BowedUnsteadyDutchsmoushond-size_restricted.gif);
    font-family: Segoe UI;
    border-collapse: collapse;
   
}
body {
    background: url(BowedUnsteadyDutchsmoushond-size_restricted.gif);
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
<center><table><tr><td><B>St. Vincent de Ferrer College <br>of Information Technology</B></td></tr></table></center>
<hr>
<table border="0">
<form action="index2.php" method="post" >
	<tr><td>Faculty Name</td></tr>
	<tr><td><input type="text" name="Fname"></td></tr>
	<tr><td>Position</td></tr>
	<tr><td><input type="text" name="Pos"></td></tr>
	<tr><td>Number of Hours Worked</td></tr>
	<tr><td><input type="text" name="Noh"></td></tr>
	<tr><td>Rate per Hour</td></tr>
	<tr><td><input type="text" name="Rph"></td></tr>
	<tr><td>Overtime Hour</td></tr>
	<tr><td><input type="text" name="Oh"></td></tr>
	<tr><td>Loan</td></tr>
	<tr><td><input type="text" name="Loan"></td></tr>
	<tr><td><input type="submit" name="submit" value="Submit"></td></tr>

</form>
</table>

</body>
</html>