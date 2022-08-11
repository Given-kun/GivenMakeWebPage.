<!DOCTYPE html>
<html>
<head>
	<script>
		function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
	</script>
	<style>
	*
	{
		margin: 0;
		padding: 0;
	}
header
{
	background-image: url(hotel.png);
	height: 100vh;
	background-size: cover;
	background-position: center;
}
footer
{
	background-image: url(bed.png);
	height: 100vh;
	background-size: cover;
	background-position: center;
}

h2{
	  width:100%;
  height: 100px;
  background: #006491;
  font-family: One Dot Condensed Bold,Arial Narrow,Arial,Helvetica,sans-serif;
  color: #fff;
     font-size: 80px;
    letter-spacing: .05rem;
    min-width: 12.375rem;
    padding: .1875rem .5rem .1875rem 4rem;
    text-transform: uppercase;
    -webkit-font-smoothing: antialiased;
        text-align: center;
}
h3{
	text-align: center;
	font-size: 80px;

}
.main-nav
{
	float: left;
	list-style: none;
	margin-top: 30px;
}
.nav
{
	float: right;
	list-style: none;
	margin-top: 40px;
	color: white;
	text-decoration: none;
	padding: 5px 20px;
	font-family: Segoe UI;
	font-size: 15px;
	background-color: black;
}
.main-nav li
{
	display: table-row;
}
.main-nav li a
{
	color: white;
	text-decoration: none;
	padding: 5px 20px;
	font-family: Segoe UI;
	font-size: 15px;
	background-color: black;

}
.main-nav li.active a
{
	border: 3px solid white;
	background-color: yellow;
	color: black;
}
.main-nav li a:hover
{
	border: 1px solid white;
	background-color: yellow;
	color: black;
}
.logo img
{
	width: 482px;
	height: auto;
	float: right;
}
body
{
	font-family: monospace;

}

}
.hero{
position: relative;
float: right;

}

h1{
	border: 3px solid white;
	background-color: black;
	color: white;
	font-family: Segoe UI;


}
   table{
  display: inline-block;
  color: black;
  text-transform: uppercase;
  font-family: Arial;
  border: 2px solid White;
  display: inline-block;
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

 input{
 	border: 3px solid white;
	background-color: white;
	color: black;
	
 }

 .submit{
 	background-color: black;
	color: white;

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
<?php

$sr=100.00;
$sd=300.00;
$ss=500.00;
$dr=200.00;
$dd=500.00;
$ds=800.00;
$fs=500.00;
$fd=750.00;
$fs=1000.00;
$cq=5;
$cc=10;
?>
	<h2>GIVEN-KUN's 5Star HOTEL</h2>
	<h3>⭐️⭐️⭐️⭐️⭐️</h3>
<header>

	  <div class="hero">
   	<h1>RESERVATION:BILLING INFORMATION</h1>
   	
</div>
<div class="logo">
			<img src="logo.gif">
		</div>&nbsp;&nbsp;&nbsp;&nbsp;
<div class="form-popup" id="myForm"><table>
		
	<td>
	<?php 

	if($_POST["Payment"]=="Cash")
	{
      
      echo "“Enjoy  our 10% Discount for";
      echo "<br>";

       echo "3-5 days of reservation or";
  }
    ?>
    <br>
<?php
if($_POST["Payment"]=="Cash")
	{
      echo "Enjoy our 15% Discount for";  

      echo "<br>";

      echo "6days or above  of reservation”";
	} 

	
?>


	</td>
</table></right>

	<br>
	<table>
<tr>
	<td>Customer Name:<?php
    
    echo $_POST["Rname"];

	?></td>
</tr>
<br>
<tr>
	<td>Contact Number:<?php
    
    echo $_POST["Rphone"];

	?></td>
</tr>
<br>
<tr>
	<td>Date Reserved:<?php
	echo $_POST["Date"];
	?></td>
</tr>
<br><br>
	<td>Date of Reservation</td>
	<tr>
	<td><?php
	echo "From:";
echo $_POST['from'];
echo "<br>";
    echo "To:";
 echo $_POST['to'];

	?>
</tr>
<br><br>
<tr>
	<td>Room Type:
	<?php 
    echo $_POST["Type"];
	?>
	<br>
	Room Capacity:
	<?php 
    echo $_POST["Capacity"];
	?>
<br>
	Payment Type:
	<?php 
    echo $_POST["Payment"];
	?></td>
</tr>
</table></center>
<br>
<table>
<tr><td>
	<?php
function dateDifference($start_date, $end_date)
{
    
    $diff = strtotime($start_date) - strtotime($end_date);
     
  
    return ceil(abs($diff / 86400));
}
 
$start_date = $_POST['from'];
 
$end_date = $_POST['to'];
 

$dateDiff = dateDifference($start_date, $end_date);
 
echo "No of Days: " . $dateDiff . " Days ";
?> 

</td></tr>

<tr><td>
Sub-total:
	<?php 
    
    if($_POST["Capacity"]=="Single")
     {
      if($_POST["Type"]=="Regular")
      {
      	if($_POST["Payment"]=="Cash")

     
       if ($dateDiff = 3 . 4 . 5)
       {
       	echo $dd; 
       }
       elseif ($dateDiff = 6 . 7 . 8 . 9 . 10) {
       	
       	 echo $dd; 
       }
       if($_POST["Payment"]=="Cheque")
       {

       	echo $sr + $cq;
       }
       if($_POST["Payment"]=="Credit Card")
       {

       	echo $sr + $cc;
       }
       if($_POST["Payment"]==Null)
       {

       	echo "No selected type of payment";
       }

     
      
       	
       }
        if($_POST["Type"]=="Deluxe")
      {
      	if($_POST["Payment"]=="Cash")

     
       if ($dateDiff = 3 . 4 . 5)
       {
       	echo $dd; 
       }
       elseif ($dateDiff = 6 . 7 . 8 . 9 . 10) {
       	
       	 echo $dd; 
       }
       if($_POST["Payment"]=="Cheque")
       {

       	echo $sd + $cq;
       }
       if($_POST["Payment"]=="Credit Card")
       {

       	echo $sd + $cc;
       }
       if($_POST["Payment"]==Null)
       {

       	echo "No selected type of payment";
       }

     
      
       	
       }
        if($_POST["Type"]=="Suite")
      {
      	if($_POST["Payment"]=="Cash")

     
       if ($dateDiff = 3 . 4 . 5)
       {
       	echo $dd; 
       }
       elseif ($dateDiff = 6 . 7 . 8 . 9 . 10) {
       	
       	 echo $dd; 
       }
       if($_POST["Payment"]=="Cheque")
       {

       	echo $ss + $cq;
       }
       if($_POST["Payment"]=="Credit Card")
       {

       	echo $ss + $cc;
       }
       if($_POST["Payment"]==Null)
       {

       	echo "No selected type of payment";
       }


     
      
       	
       }


     }
     if($_POST["Capacity"]=="Double")
     {
      if($_POST["Type"]=="Regular")
      {
      	if($_POST["Payment"]=="Cash")

     
       if ($dateDiff = 3 . 4 . 5)
       {
       	echo $dd; 
       }
       elseif ($dateDiff = 6 . 7 . 8 . 9 . 10) {
       	
       	 echo $dd;
       }
       if($_POST["Payment"]=="Cheque")
       {

       	echo $dr + $cq;
       }
       if($_POST["Payment"]=="Credit Card")
       {

       	echo $dr + $cc;
       }
       if($_POST["Payment"]==Null)
       {

       	echo "No selected type of payment";
       }

     
      
       	
       }
        if($_POST["Type"]=="Deluxe")
      {
      	if($_POST["Payment"]=="Cash")

     
       if ($dateDiff = 3 . 4 . 5)
       {
       	echo $dd;
       }
       elseif ($dateDiff = 6 . 7 . 8 . 9 . 10) {
       	
       	 echo $dd;
       }
       if($_POST["Payment"]=="Cheque")
       {

       	echo $dd + $cq;
       }
       if($_POST["Payment"]=="Credit Card")
       {

       	echo $dd + $cc;
       }
       if($_POST["Payment"]==Null)
       {

       	echo "No selected type of payment";
       }

     
      
       	
       }
        if($_POST["Type"]=="Suite")
      {
      	if($_POST["Payment"]=="Cash")

     
       if ($dateDiff = 3 . 4 . 5)
       {
       	echo $dd;
       }
       elseif ($dateDiff = 6 . 7 . 8 . 9 . 10) {
       	
       	 echo $dd;
       }
       if($_POST["Payment"]=="Cheque")
       {

       	echo $ds + $cq;
       }
       if($_POST["Payment"]=="Credit Card")
       {

       	echo $ds + $cc;
       }
       if($_POST["Payment"]==Null)
       {

       	echo "No selected type of payment";
       }

     
      
       	
       }


     }
      if($_POST["Capacity"]=="Family")
     {
      if($_POST["Type"]=="Regular")
      {
      	if($_POST["Payment"]=="Cash")

     
       if ($dateDiff = 3 . 4 . 5)
       {
       	echo $fd;
       }
       elseif ($dateDiff = 6 . 7 . 8 . 9 . 10) {
       	
       	 echo $fd;
       }
       if($_POST["Payment"]=="Cheque")
       {

       	echo $fr + $cq;
       }
       if($_POST["Payment"]=="Credit Card")
       {

       	echo $fr + $cc;
       }

       if($_POST["Payment"]==Null)
       {

       	echo "No selected type of payment";
       }

     
      
       	
       }
        if($_POST["Type"]=="Deluxe")
      {
      	if($_POST["Payment"]=="Cash")

     
       if ($dateDiff = 3 . 4 . 5)
       {
       	echo $fd;
       }
       elseif ($dateDiff = 6 . 7 . 8 . 9 . 10) {
       	
       	 echo $fd;
       }
       if($_POST["Payment"]=="Cheque")
       {

       	echo $fd + $cq;
       }
       if($_POST["Payment"]=="Credit Card")
       {

       	echo $fd + $cc;
       }

       if($_POST["Payment"]==Null)
       {

       	echo "No selected type of payment";
       }

     
      
       	
       }
        if($_POST["Type"]=="Suite")
      {
      	if($_POST["Payment"]=="Cash")

     
       if ($dateDiff = 3 . 4 . 5)
       {
       	echo $fs;
       }
       elseif ($dateDiff = 6 . 7 . 8 . 9 . 10) {
       	
       	 echo $fs;
       }
       if($_POST["Payment"]=="Cheque")
       {

       	echo $fs + $cq;
       }
       if($_POST["Payment"]=="Credit Card")
       {

       	echo $fs + $cc;
       }
       if($_POST["Payment"]==Null)
       {

       	echo "No selected type of payment";
       }

     
      
       	
       }


     }

     if($_POST["Capacity"]==Null)
     {
     	echo "No selected room capacity";
     }

     if($_POST["Type"]==Null)
     {
     	echo "No selected room type";
     }


	?>
</td>
</tr>
<br>
<tr>
<td>
	Discount:300
	

</td>
</tr>
<br><br><br>
<tr>
<td>
	Total Bill:
	<?php 
    
    if($_POST["Capacity"]=="Single")
     {
      if($_POST["Type"]=="Regular")
      {
      	if($_POST["Payment"]=="Cash")

     
       if ($dateDiff = 3 . 4 . 5)
       {
       	echo $dd - 10;
       }
       elseif ($dateDiff = 6 . 7 . 8 . 9 . 10) {
       	
       	 echo $dd - 15;
       }
       if($_POST["Payment"]=="Cheque")
       {

       	echo $sr + $cq;
       }
       if($_POST["Payment"]=="Credit Card")
       {

       	echo $sr + $cc;
       }

     
      
       	
       }
        if($_POST["Type"]=="Deluxe")
      {
      	if($_POST["Payment"]=="Cash")

     
       if ($dateDiff = 3 . 4 . 5)
       {
       	echo $dd - 10;
       }
       elseif ($dateDiff = 6 . 7 . 8 . 9 . 10) {
       	
       	 echo $dd - 15;
       }
       if($_POST["Payment"]=="Cheque")
       {

       	echo $sd + $cq;
       }
       if($_POST["Payment"]=="Credit Card")
       {

       	echo $sd + $cc;
       }

     
      
       	
       }
        if($_POST["Type"]=="Suite")
      {
      	if($_POST["Payment"]=="Cash")

     
       if ($dateDiff = 3 . 4 . 5)
       {
       	echo $dd - 10;
       }
       elseif ($dateDiff = 6 . 7 . 8 . 9 . 10) {
       	
       	 echo $dd - 15;
       }
       if($_POST["Payment"]=="Cheque")
       {

       	echo $ss + $cq;
       }
       if($_POST["Payment"]=="Credit Card")
       {

       	echo $ss + $cc;
       }

     
      
       	
       }


     }
     if($_POST["Capacity"]=="Double")
     {
      if($_POST["Type"]=="Regular")
      {
      	if($_POST["Payment"]=="Cash")

     
       if ($dateDiff = 3 . 4 . 5)
       {
       	echo $dd - 10;
       }
       elseif ($dateDiff = 6 . 7 . 8 . 9 . 10) {
       	
       	 echo $dd - 15;
       }
       if($_POST["Payment"]=="Cheque")
       {

       	echo $dr + $cq;
       }
       if($_POST["Payment"]=="Credit Card")
       {

       	echo $dr + $cc;
       }

     
      
       	
       }
        if($_POST["Type"]=="Deluxe")
      {
      	if($_POST["Payment"]=="Cash")

     
       if ($dateDiff = 3 . 4 . 5)
       {
       	echo $dd - 10;
       }
       elseif ($dateDiff = 6 . 7 . 8 . 9 . 10) {
       	
       	 echo $dd - 15;
       }
       if($_POST["Payment"]=="Cheque")
       {

       	echo $dd + $cq;
       }
       if($_POST["Payment"]=="Credit Card")
       {

       	echo $dd + $cc;
       }

     
      
       	
       }
        if($_POST["Type"]=="Suite")
      {
      	if($_POST["Payment"]=="Cash")

     
       if ($dateDiff = 3 . 4 . 5)
       {
       	echo $dd - 10;
       }
       elseif ($dateDiff = 6 . 7 . 8 . 9 . 10) {
       	
       	 echo $dd - 15;
       }
       if($_POST["Payment"]=="Cheque")
       {

       	echo $ds + $cq;
       }
       if($_POST["Payment"]=="Credit Card")
       {

       	echo $ds + $cc;
       }

     
      
       	
       }


     }
      if($_POST["Capacity"]=="Family")
     {
      if($_POST["Type"]=="Regular")
      {
      	if($_POST["Payment"]=="Cash")

     
       if ($dateDiff = 3 . 4 . 5)
       {
       	echo $fd - 10;
       }
       elseif ($dateDiff = 6 . 7 . 8 . 9 . 10) {
       	
       	 echo $fd - 15;
       }
       if($_POST["Payment"]=="Cheque")
       {

       	echo $fr + $cq;
       }
       if($_POST["Payment"]=="Credit Card")
       {

       	echo $fr + $cc;
       }

     
      
       	
       }
        if($_POST["Type"]=="Deluxe")
      {
      	if($_POST["Payment"]=="Cash")

     
       if ($dateDiff = 3 . 4 . 5)
       {
       	echo $fd - 10;
       }
       elseif ($dateDiff = 6 . 7 . 8 . 9 . 10) {
       	
       	 echo $fd - 15;
       }
       if($_POST["Payment"]=="Cheque")
       {

       	echo $fd + $cq;
       }
       if($_POST["Payment"]=="Credit Card")
       {

       	echo $fd + $cc;
       }

     
      
       	
       }
        if($_POST["Type"]=="Suite")
      {
      	if($_POST["Payment"]=="Cash")

     
       if ($dateDiff = 3 . 4 . 5)
       {
       	echo $fs - 10;
       }
       elseif ($dateDiff = 6 . 7 . 8 . 9 . 10) {
       	
       	 echo $fs - 15;
       }
       if($_POST["Payment"]=="Cheque")
       {

       	echo $fs + $cq;
       }
       if($_POST["Payment"]=="Credit Card")
       {

       	echo $fs + $cc;
       }

     
      
       	
       }


     }


	?>



</td>
	</tr>

	</table> </form></div>
<a href="MP01_ValenzuelaGiven.php">Home</a>
<a href="ReservationValenzuelaGiven.php">Back</a>
	
</header>
<footer>


	</footer>

</body>
</html>