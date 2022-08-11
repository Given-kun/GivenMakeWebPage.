<?php 

?>
<html>
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
	font-size: 15px;
	overflow: hidden;
	transition: 0.2s;
	color: White;
	background: #242526;
	font-weight: bold;
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
table{
   border: 1px solid black;
   border: 1px solid #e4e6eb;
	 font-size: 15px;
	 font-weight: bold;
	 margin:30px;
	 border-radius: 25px;
	  font-family:Arial;

   }

   input {

background: #b0b3b8;

color: black;

border-style: outset;

border-color: 	#3a3b3c;

height: auto;

width: auto;

	font-family: Segoe UI;

text-shadow:none;


	text-decoration: none;
	
}
select{
	background: #b0b3b8;

color: black;

border-style: outset;

border-color: 	#3a3b3c;

height: auto;

width: auto;

	font-family: Segoe UI;

text-shadow:none;


	text-decoration: none;

}

 </style>
<body>
            <center>    <h1>GIVEN-KUN COOPERATIVE INCORPORATED</h1><br>
       
                          <h3><b>Given-kun St.Given<br>
                           Telephone:1-800-225-5324</b> </h3></center>

 <hr>
   <form action="OnLineMemberInformationValenzuelaGiven.php" method=post>
    <CENTER>
<Table>
	<tr><td><h1>REGISTRATION FORM</h1></td></tr>
</Table>
</CENTER>
<center>
<p><b>Complete Name :<br> <input type=text name=txtLName placeholder="Last"> <input type=text name=txtFName placeholder="First"> <input type=text name=txtMName placeholder="Mid" maxlength="1" size="4"></p>
<br>

<p>Address:<br> <input type="Text" name=Address placeholder="Enter your Address"></p><br>
<p>Contact Number:<br><input type="Telephone" id="phone" name="phone" maxlength="40"size="40" placeholder="Enter your Contact Number"></p>
<br>
<p>Date of Birth <br> <input type=Date name=Birth></p>
<br>
<p>Gender: <br><tr><td> <label class="radio"><span class="radio__input"><input type="radio" name="gender" value="Male"> Male
  <input type="radio" name="gender" value="Female"> Female
  <input type="radio" name="gender" value="Other"> Other</p><span class="radio_control"></span></span></label></td></tr>
  <br>

<p>Office Address:<br> <input type="Text" name=OAddress placeholder="Office Address"></p><p>Phone Number:<br><input type="Telephone" id="phone" name="phone2" maxlength="40"size="40" placeholder="Enter your Phone Number"></p><br>
<p>Position <br> <input type="Text" name=Position placeholder="Enter your Position"></p><br><p>Employment Status:<br> <select name="ES">
	<option></option>
	<option value="Permanent">Permanent</option>
	<option value="Casual">Casual</option>
</select><br>
<p>Monthly Salary:<br> <select name="MS">
	<option></option>
	<option>PHP 1,000 - PHP2,000</option>
	<option >PHP10,000 - PHP20,000</option>
	<option>PHP20,000 - PHP30,000</option>
	<option>PHP30,000 - PHP40,000</option>
	<option>PHP40,000 - PHP50,000</option>
	<option>PHP50,000 - PHP60,000</option>
	<option>PHP60,000 - PHP70,000</option>
	<option>PHP70,000 - PHP80,000</option>
	<option>PHP80,000 - PHP90,000</option>
	<option>PHP90,000 - PHP100,000</option>
	<option>PHP100,000 - PHP1,000,000</option>
</select>
</center>
<center>
	<p>Co-Borrower:<br><input type="text" name="CB" placeholder="Enter Name of Co-Borrower"></p>
	</center>
<center>
<input type=submit name=btnSubmit>
<input type=reset>
</center>
</form>
</body>
</html>