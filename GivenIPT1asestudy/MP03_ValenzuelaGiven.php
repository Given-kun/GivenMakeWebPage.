<?php 

?>
<html>
<style>
	body{
		background: #031321;
	}
	H1{
		display: inline-block;
	padding: 15px 30px;
	color: black;
	text-transform: uppercase;
	font-family: Segoe UI;
	border: 3px solid black;
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
	background: #2196f3;
	font-family: Segoe UI;

}
H3{
	display: inline-block;
	padding: 15px 30px;
	color: black;
	text-transform: uppercase;
	font-family: Segoe UI;
	border: 3px solid black;
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
	background: #2196f3;
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
	font-family: Segoe UI;
	border: 3px solid black;
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
	background: #2196f3;
	font-family: Segoe UI;
	}
	
table{
   border: 3px solid black;
   border: 2px solid #fff;
	 font-size: 15px;
	 font-weight: bold;
	 margin:30px;
	 border-radius: 25px;
	  font-family:Arial;

   }

   input {

display: inline-block;
	padding: 15px 30px;
	color: black;
	text-transform: uppercase;
	font-family: Segoe UI;
	border: 3px solid black;
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
	background: #2196f3;
	font-family: Segoe UI;
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
<p><b>Complete Name :<br> <input type=text name=txtLName value="Last"> <input type=text name=txtFName value="First"> <input type=text name=txtMName value="Mid" maxlength="1" size="4"></p>
<br>

<p>Address:<br> <input type="Text" name=Address value="Enter your Address"></p><br>
<p>Contact Number:<br><input type="Telephone" id="phone" name="phone" maxlength="40"size="40"></p>
<br>
<p>Date of Birth <br> <input type=Date name=Birth></p>
<br>
<p>Gender: <br><tr><td> <label class="radio"><span class="radio__input"><input type="radio" name="gender" value="male"> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other</p><span class="radio_control"></span></span></label></td></tr>
  <br>

<p>Office Address:<br> <input type="Text" name=OAddress value="Office Address"></p><p>Phone Number:<br><input type="Telephone" id="phone" name="phone2" maxlength="40"size="40"></p><br>
<p>Position <br> <input type="Text" name=Position value="Position"></p><br><p>Employment Status:<br> <select name="ES">
	<option value="Permanent">Permanent</option>
	<option value="Permanent">Casual</option>
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
	<p>Co-Borrower:<br><input type="text" name="CB" value="Enter Name of Co-Borrower"></p>
	</center>
<center>
<input type=submit name=btnSubmit>
<input type=reset>
</center>
</form>
</body>
</html>