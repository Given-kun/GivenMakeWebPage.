<!DOCTYPE html>
<html>
<head>
   <!---Case Study Web-Program Written by: Valenzuela Given G.--->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employeepay Confirm Reciept</title>
</head>
<style type="text/css">
   @import url('https://fonts.googleapis.com/css2?family=Rowdies:wght@700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Rowdies:wght@700&display=swap');
   @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
*{
   margin: 0;
   padding: 0;
}
body{
   background-color: #ccc;
}
.header{
   display: inline-block;
   padding: 8px 12px;
   position: relative;
   width: 1640px;

   background-color: #a5a5f3;
   background-position: center;
   background-size: cover;
   position: relative;
}

H2{
font-family: 'Bebas Neue', cursive;
   font-size: 40px;
   background-color: #ffffff;
}


nav img{
   width: 150px;
}


 
nav-links ul, li, a{
   color: #black;
   text-decoration: none;
   line-height: 50px;
   position: relative;
   z-index: 1;
   display: inline-block;

 
}

.img1{
   width: 150px;
}

.body{
   background-color: #fff;
}


H1{
   font-family: 'Rowdies', cursive;
   font-size: 40px;
   background-color: #ffffff;
}
input {
    display: inline-block;
    padding: 15px 30px;
    color: black;
    font-family: Arial;
    display: inline-block;
    padding: 15px 30px;
    color: black;
    letter-spacing: 4px;
    text-decoration: none;
    font-size: 15px;
    overflow: hidden;
    transition: 0.2s;
    color:  #242526;
    background:White;
    font-family: Segoe UI;
    text-decoration: none;
}
select{
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
    color:  #242526;
    background:White;
    font-family: Segoe UI;
    text-decoration: none; 
}
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
    background: #3a3b3c;
    font-family: Segoe UI;
    border-collapse: collapse;
   margin:0 auto;

}
.center {
  margin-left: auto;
  margin-right: auto;
}
td,
th {
  margin: 0;
  white-space: nowrap;
  border-top-width: 0px;
}
.button{
   display: inline-block;
    padding: 15px 30px;
    color: black;
    font-family: Arial;
    display: inline-block;
    padding: 15px 30px;
    color: black;
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
tbody{
   display: inline-block;s
    color: black;
    font-family: Arial;
    border: 1px solid White;
    display: inline-block;
    color: black;
    letter-spacing: 4px;
    text-decoration: none;
    font-size: 15px;
    overflow: hidden;
    transition: 0.2s;
    color:  #242526;
    background:White;
    font-family: Segoe UI;
    text-decoration: none;
}
marquee {
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
    border-collapse: collapse;
    align-items: center;
}
</style>
<body>
      <form action="Pay.php" method="POST">
    <?php

      include('payrolldb.php');
      $sql = "SELECT * FROM `payrollemployee`";
      $query = mysqli_query($conn, $sql) or die( mysqli_error($conn));
      while($row=mysqli_fetch_array($query)){
         ?>
         <?php
      }
      ?>


	<table>
		<tr>
			<td><marquee width="150px">Details</marquee></td>
		</tr>
      <tr><td>Employee Name:</td></tr>
		<tr>
			<td>
             <input type="text"  name="EmployeeName" value="
<?php
if (isset($_POST["submit"])){
	echo $_POST['Firstname'];
   echo "\n";
	echo $_POST['Surname'];
}

?>">
</td>
</tr>
<tr><td>"EMPLOYEE ID:</td></tr>
<tr><td>
   <input type="text"  name="EmployeeID" value="
	<?php
	echo $_POST['EmployeeID'];

	?>"></td>
</tr>
	<tr><td>Position:</td></tr>
<tr><td>
   <input type="text"  name="Position" value="
	<?php

   echo $_POST['Position'];


	
	?>">
</td>
<tr><td>
   Teaching Hours:
</td></tr>
<tr><td>
   <input type="text"  name="THours" value="
   <?php
   if ($_POST['Position'] == "Non-Teaching Employee"){
//Teaching Hours only applicable to Teaching Employee Only 
//If the Employee is in Non Teaching this will always be in 0 even if you input anything on it 
//it wii always be 0
echo "0";
      
}
else{
   echo $_POST['TH'];
   echo "Hours";
}



   ?>">
</td></tr>
<tr>
   <td>
      Pay Rate:
   </td>
</tr>
<tr>
<td>
	<input type="text"  name="payrate" value="
   <?php
	echo $_POST['PR'];
?>">
	</td></tr>
   <tr><td>Overtime Pay:</td></tr>
	<tr>
<td>
   <input type="text" name="overtime" value="
	<?php
	echo $_POST['OP'];
?>">
	</td></tr>
   <tr><td>Allowance:</td></tr>
	<tr>
<td>
   <input type="text"  name="allowance" value="
	<?php
	echo $_POST['AL'];
?>">
	</td></tr>
   <tr><td>No. of Absences:</td></tr>
	<td>
      <input type="text"  name="absence" value="
	<?php
	echo $_POST['AB'];
?>">
	</td></tr>

</table>

<table>
	<tr>
		<th>Total Computation</th>

<tr>
   <td>
      Total:
   </td>
</tr>
<tr>
   <td>
      <input type="text"  name="total" value="
      <?php

   echo (($_POST["TH"]*$_POST["PR"])+($_POST["OP"]*$_POST["AL"])/140)-($_POST['AB']/10);

      ?>">
   </td>
</tr>
</table>
<input type="submit" name="submit" value="Confirm">


</form>

</body>
</html>