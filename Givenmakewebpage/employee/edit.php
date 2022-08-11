<?
	include('EPMANAGER.php');
	$id=$_GET['id'];
	 $sql = "SELECT * FROM `manageemployee` WHERE 'EmployeeID' = '$id'";
      $query = mysqli_query($conn, $sql) or die( mysqli_error($conn));
      while($row=mysqli_fetch_array($query)
?>



<!DOCTYPE html>
<html>
<head>
<title>ABCS Institute "EMPLOYEE / PERSONNEL RECORD MANAGER" EDIT</title>
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
   color: #fff;
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
    align-items: center;
}
.button{
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
    background: #242526;
    font-family: Segoe UI;
    text-decoration: none;
}
</style>
<body>
	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		
	<section class="EPRM">
   <form action="EPMANAGER.php" method="POST">
   <table>
      <tr>
 <td>  <input type="text" name="EmployeeID" value="<?php if (isset($_POST["submit"])) { echo $_POST['td1']; } ?>" placeholder="EMPLOYEE ID"   required></td></tr>
    <tr> <td> <input type="text" name="Surname" value="<?php if (isset($_POST["submit"])) {  echo $_POST['td2']; } ?>" placeholder="SURNAME" required></td></tr>
    <tr> <td> <input type="text" name="Firstname" value="<?php if (isset($_POST["submit"])) { echo $_POST['td3']; } ?>" placeholder="FIRSTNAME" required></td></tr>
      <tr><td>  <input type="text" name="MiddleInitial" value="<?php if (isset($_POST["submit"])) { echo $_POST['td4']; } ?>" placeholder="MIDDLE INITIAL" required></td></tr>
</tr>  
     <tr> <td>   <label>BIRTH DATE:</label><br></td></tr>
       <tr> <td> <input type="date" name="Birthdate" value="<?php if (isset($_POST["submit"])) { echo $_POST['td5']; } ?>" required><br></td></tr>
      <tr><td>  <input type="text" name="Department" value="<?php if (isset($_POST["submit"])) { echo $_POST['td6']; } ?>"  placeholder="DEPARTMENT" required></td></tr>
       <tr><td> <select name="Position" value="<?php if (isset($_POST["submit"])) { echo $_POST['td7']; } ?>" required>
         <option>---Select Position---</option>
         <option>Teaching Employee</option>
           <option>Non-Teaching Employee</option>
      </select></td>
   </tr>
   <tr><td> <select name="Gender" value="<?php if (isset($_POST["submit"])) { echo $_POST['td8']; } ?>" required>
         <option>---Select Gender---</option>
         <option>Male</option>
           <option>Female</option>
           
      </select></td>
   </tr>
</table>
<br>

<input type="submit" name="submit" value="Save Change">
  <input type="reset" class="button"  value="RESET"> 
		<a href="EPMANAGER.php">BACK</a>
</section>
</form>
</body>
</html>