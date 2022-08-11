<!DOCTYPE html>
<html>
<body>
	
<style>
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
	<p>
<?php
    $r= 23;
    $d = NULL;
    $C = NULL;
    $a = NULL;
    $d= 2*$r;
    $c=2 *pi() *$r;
    $a = pi() * $r * $r;
    $far=50;
    $cel=($far - 32)*(5/9);
    $base = 10;
    $height = 15;
    $PHP = 1500;
    $USD = 54.24;




    echo "Name:"."\n".strtoupper("<b>Given G.Valenzuela</b>");
    echo "<br>";
    echo "Today's date is December 19 2020";
     echo "<br>";
     echo "The time is 5:56";
      echo "<br>";
      echo "<br>";
      echo  "<b>Area,Circumference,and Diameter of a circle</b>";
       echo "<br>";
     echo "The area of the circle is $a";
      echo "<br>";
     echo "The circumference of the circle is $c";
      echo "<br>";
      echo "The diameter of the circle is $d";
       echo "<br>";
       echo "<br>";
       echo "<b>Conversion of Fahrenheit to Celsius</b>";
       echo "<br>";
       echo "$far degrees Fahrenheit is equal to $cel degrees Celsius.";
       echo "<br>";
       echo "<br>";
      echo "<b>Area of a Triangle</b>"; 
       echo "<br>";
       echo "The area of the triangle whose base is $base and height is 12 is \n".(1/2 * $base * $height);
        echo "<br>";
        echo "<b>Dollar Conversion</b>"; 
       echo "<br>";
        echo "<br>";
       echo "1500 pesos is equal $ \n".($PHP/$USD);


    ?></p>

    <a href="MP02_ValenzuelaGiven.php"><b>Next Page</b></a>
</body>
</html>