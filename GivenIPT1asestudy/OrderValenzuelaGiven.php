<htmL>
<head>
	</head>
	 <style>
    H1{
    -webkit-text-stroke-width: 1px;
 -webkit-text-stroke-color: black;

 H2{
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


  }
    input[type='radio']:after {
        width: 9px;
        height: 9px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #d1d3d1;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }
      input[type='radio']:checked:after {
        width: 9px;
        height: px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #ffa500;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }
    body{
    background: #18191a;
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
  font-size: 9px;
  overflow: hidden;
  transition: 0.2s;
  color: White;
  background: #242526;
  font-family: Segoe UI;

   }
   H3{
  text-transform: uppercase;
  letter-spacing: 4px;
  text-decoration: none;
  font-size: 15px;
  overflow: hidden;
  transition: 0.2s;
  color: White;
  -webkit-text-stroke-width: 1px;
 -webkit-text-stroke-color: red;
  font-weight: bold;
    font-family: Segoe UI;
    justify-content: center;

}
 H4{
  text-transform: uppercase;
  letter-spacing: 4px;
  text-decoration: none;
  font-size: 13px;
  overflow: hidden;
  transition: 0.2s;
  color: White;
  -webkit-text-stroke-width: 1px;
 -webkit-text-stroke-color: red;
  font-weight: bold;
    font-family: Segoe UI;
    justify-content: center;

}
body{
  margin: 0;
  padding:0;
  box-sizing: border-box;
}
.container
{
    width:300%;
  height: 300px;
  background: #b0b3b8;
}
.header{
  width:100%;
  height: 100px;
  background: #006491;
  font-family: One Dot Condensed Bold,Arial Narrow,Arial,Helvetica,sans-serif;
  color: #fff;
     font-size: .875rem;
    letter-spacing: .05rem;
    line-height: 1rem;
    min-width: 12.375rem;
    padding: .1875rem .5rem .1875rem 4rem;
    text-transform: uppercase;
    -webkit-font-smoothing: antialiased;
    display: flex;
        text-align: center;

 
}
  input {

background: #b0b3b8;

color: black;

border-style: outset;

border-color:   #3a3b3c;

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
	<body>
	
 <div class="header">
    <img src="image.png" height="100" width="100" position="margin-right" alt="GIVEN-KUN">
   <center> <H1>GIVEN-KUN's PIZZRIA ORDER ONLINE</H1><hr> </center>
 </div> 
 <h3>#01 Given-kun Pizzeria Street</h3>
 <h4>Tel #:734-930-3030</h4>





<?


$prod="";
$price=0;
$tp=0;


	if($_POST['Psize']=="Small")
	{
		$prod="Small";
		$srp = $_POST['P1'];
		$price = number_format($p,2);
		
		$tp = $tp + $p;
		$tprice1 = number_format($tp,2);
	}
	if($_POST['Psize']=="Medium")
	{
		$prod="Medium";
		$srp = $_POST['P2']; 
		$price = number_format($p,2);

		
	}
	if($_POST['Psize']=="Large")
	{
		$prod="Large";
		$srp = $_POST['P3']; 
		$price = number_format($p,2);	
	}
	
//Crust Type

	if($_POST['crust']=="Thin")
	{
		$prod="Thin";
		$p1= 25.00;
		$price2 = number_format($p,2);

		$tp = $tp + $p;
		$tprice = number_format($tp,2);
	}
	if($_POST['crust']=="Regular")
	{
		$prod="Regular";
		$p1= 50.00;
		$price = number_format($p,2);
		
	}
	if($_POST['crust']=="Thick")
	{
		$prod="Thick";
		$p1= 75.00;
		$price = number_format($p,2);
	}
	
//Drinks

	if($_POST['drink']=="Soft Drinks")
	{
		$prod="Soft Drinks";
		$p2= 25.00;
		$price = number_format($p,2);		
	}
	
	if($_POST['drink']=="Iced Tea")
	{
		$prod="Iced Tea";
		$p2= 30.00;
		$price = number_format($p,2);
		
	}
	if($_POST['drink']=="Fruit Juice")
	{
		$prod="Fruit Juice";
		$p2= 30.00;
		$price = number_format($p,2);
		
	}
	
//Toppings 

	if($_POST['Toppings']=="Pepperoni")
	{
		$prod="Pepperoni";
		$p3= 20.00;
		$price = number_format($p,2);
		
	}

	

{

?>


  <table class="table table-hover" border=1 cellpadding="2" cellspacing="1">
<th><h2> ORDER INFORMATION </h2></th>
	<tr>
	<center><td>Customer Name:</td></center>
	<td><?php 
    echo $_POST['CName'];
	?></td></tr>
	<tr>
	<td>Customer Address:</td>
	<td><?php 
    echo $_POST['CAddress'];
	?></td></tr>
	<tr>
	<td>Contact Number:</td>
	<td><?php 
    echo $_POST['Cphone'];
	?></td></tr>
</table><br><br>
  <table class="table table-hover" border=1 cellpadding="2" cellspacing="1">
<br>
<tr>
<td>Your Pizza</td>
<td></td>
<td>Amount</td>
</tr>
</center>

<tr>
<td width=152> Size: </td>
<td width=120><?php
echo $_POST['Psize'];
 ?></td>
<td width=120><?php 

if($_POST['Psize']=="Small")
	
{
	echo $p=100.00;
		
		
		
	}
	if($_POST['Psize']=="Medium")
	{
		
	echo $p=200.00; 
		

		
	}
	if($_POST['Psize']=="Large")
	{
		
	echo $p=300.00; 
			
	}

?></td>


</tr>
<tr>
<td width=152> Crust: </td>
<td width=120><?php
echo $_POST['C']
 ?></td>
<td width=120><?php 

if($_POST['C']=="Thin")
	
{
	echo $c=25.00;
		
		
		
	}
	if($_POST['C']=="Regular")
	{
		
	echo $c=50.00; 
		

		
	}
	if($_POST['C']=="Thick")
	{
		
	echo $c=75.00; 
			
	}


?></td>


</tr>;
<tr>
<td width=152> Drink: </td>
<td width=120><?php
echo $_POST['Dio'];
 ?></td>
<td width=120><?php 


if($_POST['Dio']=="SoftDrink")
	
{
	echo $d=25.00;
		
		
		
	}
	if($_POST['Dio']=="Iced Tea")
	{
		
	echo $d=30.00; 
		

		
	}
	if($_POST['Dio']=="Fruit Juice")
	{
		
	echo $d=30.00; 
			
	}



?></td>


</tr>
<tr>
<td width=152> Toppings: </td>
<td width=120><?php
echo $_POST['Toppings']
 ?></td>
<td width=120><?php 

if($_POST['Toppings']=="")
	
{
	echo $t=0;
		
		
		
	}
	if($_POST['Toppings']=="Pepperoni")
	{
		
	echo $t=20.00; 
		

		
	}
	if($_POST['Toppings']=="Mushroom")
	{
		
	echo $t=20.00; 
			
	}

	if($_POST['Toppings']=="Black Olive")
	{
		
	echo $t=20.00; 
		

		
	}
	if($_POST['Toppings']=="Onions")
	{
		
	echo $t=20.00; 
			
	}

	if($_POST['Toppings']=="Tomatoes")
	{
		
	echo $t=20.00; 
			
	}
if($_POST['Toppings']=="Cheese")
	{
		
	echo $t=20.00; 
			
	}


?></td>


</tr>
<tr>
<td width=152> </td>
<td width=120>Sub-Total
</td>
<td width=120><?php 

echo $p+$c+$d+$t;

?></td>


</tr>
</tr>
<tr>
<td width=152> </td>
<td width=120>12%VAT
</td>
<td width=120><?php 

echo $v=51.00;



?></td>


</tr>
</tr>
<tr>
<td width=152> </td>
<td width=120>Total Amount
</td>
<td width=120><?php 

echo $p+$c+$d+$t+$v;


?></td>

 

</tr>
</table>
<br><br>
<a href="ConfirmValenzuelaGiven.php">Confirm Order</a>
<a href="OnlineValenzuelaGiven.php">Back</a>
</body>
</htmL>
