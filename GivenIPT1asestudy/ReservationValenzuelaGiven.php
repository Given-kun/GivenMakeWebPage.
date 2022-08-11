<!DOCTYPE html>
<html>
<head>
	<title>Given-kun Five Star Hotel</title>
</head>
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
</style>
<body>

	<h2>GIVEN-KUN's 5Star HOTEL</h2>
	<h3>⭐️⭐️⭐️⭐️⭐️</h3>
<header>

	  <div class="hero">
   	<h1>RESERVATION:(Supply the neccesary information below)</h1>
   	
   </div>
	<div class="row">
		
		<ul class="main-nav">
			<li ><a href="MP01_ValenzuelaGiven.php">Home</a></li><br>
			<li><a href="">Company's Profile</a></li><br>
			<li class="active"><a href="">Reservation</a></li><br>
			<li><a href="">Contacts</a></li>
			
	</ul>
</div>

<div class="logo">
			<img src="logo.gif">
		</div>



</header>
<footer>

	<form action="Reservation02ValenzuelaGiven.php" method=post>
&nbsp;

&nbsp;


&nbsp;

&nbsp;

&nbsp;

&nbsp;

&nbsp;

&nbsp;

&nbsp;

&nbsp;

&nbsp;
<table>
	<tr><td><div id="clockbox"></div>
<ul>

<script type="text/javascript">
var tday=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
var tmonth=["January","February","March","April","May","June","July","August","September","October","November","December"];

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

var clocktext=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
document.getElementById('clockbox').innerHTML=clocktext;
}

GetClock();
setInterval(GetClock,1000);
</script>
<input type="Date" name="Date">
</td></tr>

<div class="table-responsive">
  <table class="table table-hover" border=1 cellpadding="2" cellspacing="1">
	<div class="container">
			<tr><td>Costumer Name:<input type="text" name="Rname"></td></tr>
			<tr><td>Contact Number:<input type="text" name="Rphone"></td></tr>
	</table></div>
<br>
<table>
	<tr>
		<th>Reservation Date:</th>
</tr>
<td>From: <div> 
	<input type="date" name="from">
    </div><br>
    To: <div>
	<input type="date" name="to">
    </div>
</td>
</table>
<br><br><br><br>
<table>
	<tr>
		<th>Room Type</th>
	</tr>
	<tr>
		<td><input type="radio"  name="Type" value="Suite">Suite</td>
	</tr>
	<tr>
		<td><input type="radio"  name="Type" value="Deluxe">Deluxe</td>
	</tr>
	<tr>
		<td><input type="radio"  name="Type" value="Regular">Regular</td>
	</tr>
	<tr>
		<th>Room Capacity</th>
	</tr>
	<tr>
		<td><input type="radio"  name="Capacity" value="Family">Family</td>
	</tr>
	<tr>
		<td><input type="radio"  name="Capacity" value="Double">Double</td>
	</tr>
	<tr>
		<td><input type="radio"  name="Capacity" value="Single">Single</td>
	</tr>
	<tr>
		<th>Payment Type</th>
	</tr>
	<tr>
		<td><input type="radio"  name="Payment" value="Cash">Cash</td>
	</tr>
	<tr>
		<td><input type="radio"  name="Payment" value="Cheque">Cheque</td>
	</tr>
	<tr>
		<td><input type="radio"  name="Payment" value="Credit Card">Credit Card</td>
	</tr>
</table>
<br>
<input type="submit" value="Submit Reservation">
<input type="reset" value="Clear Entry">
</form>


	
 


</footer>
</body>
</html>