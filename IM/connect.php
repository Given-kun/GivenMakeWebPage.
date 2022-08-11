
<html>
<head>
<title>WELCOME NEW MEMBER</title>
</head>
 <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
 <link rel="shortcut icon" href="Logo.png">
<style>
		
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
	  *{font-family: 'Oswald', sans-serif;}body { background-color: #212121 ;transform: perspective(1400px) matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
        transform-style: preserve-3d;}.login-div {margin: 100px auto;width: 350px;background-color: #fff;padding: 60px;}.logo{background-color: #212121;width: 150px;height: 150px;border-radius: 50%;margin: 0 auto;margin-buttom: 10px;}.logo img{width: 100%;}.title, .sub-title {color: #212121;}.title{font-weight: bolder;font-size: 35px;text-align: center;}.sub-title{font-size: 10px;}.form {width: 100%margin-top: 30px;}.form-input {font-size: 10px;padding: 10px 20px 10px 5px;border: none;outline: none;background: none;align-self: center;}.username .password {display: block;border-radius: 30px;border: 1px solid rgb(0, 0, 0, 0, 2);margin: 10px 0;}.form svg{height: 25px;margin-bottom: -5;margin-left: 10px;margin-right: 5px;}.option{display: flex;flex-direction: row;justify-content: space-between;padding: 5px 0px;margin-bottom: 30px;}input.signin-btn{width: 100%;padding: 12px 10px;border: none;font-size: 10px;border-radius: 30px;background-color: #720e9e;color: #FFF;margin-bottom: 5px;
cursor: pointer;

    }
    H1{
width: 100%;padding: 12px 10px;border: none;font-size: 10px;border-radius: 30px;background-color: #FFF ;color: #720e9e;margin-bottom: 5px;    }
	</style>
<body>
<table style="width:50%" align="center"class="table table-hover" border=1 cellpadding="2" cellspacing="1">
<tr>

<td><div class="title"><div class="logo"><img src="logo.png" alt="" width="150"></div>Welcome! New <?php
echo $_POST['position'];
?></div></td>

</tr>
<td>
<H1><?php
echo $_POST['position'];
?>'s  Credential Login Information:</H1>
</td>
<tr>

<td>Your Username is:
<?php


echo $_POST['username'];
?></td>
	</tr>
	<tr>
	
<td>Your Email is:
<?php
echo $_POST['email'];

?></td>
	</tr>
	<tr>
	
<td>Your Password is:
<?php
echo $_POST['password'];

?></td>
	</tr>
	</table>
	<br>
	<hr>
	<table style="width:50%" align="center"class="table table-hover" border=1 cellpadding="2" cellspacing="1">

	<tr>
		<td>Your Profile:</td>
	</tr>
	<tr>
<td>Username:
<?php
echo $_POST['username'];

?>
<br>	
Fullname:
<?php
echo $_POST['fullname'];
?></td>
	</tr>
</table>

<H1> Thank you for registering into our system and wait for the admin to admit you.</H1>

</body>

</html>



