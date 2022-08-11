
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="New Project (21).png">
   <title>ABCS Institute "EMPLOYEE / PERSONNEL RECORD MANAGER"</title>
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
</style>
<body>
<section class="header">
   <nav>
     
 <img src="New Project (21).png" alt="ABCS Institute">
   <H1>ABCSインスティテュート</H1> </nav>
  <a href="EPMANAGER.php">English</a>
  <a>Japanese</a>
</section>
<nav>

<a href="Dashboard.php"><img class="img1"  src="New Project (25).png" alt="Dashboard" onmouseover="this.src='New Project (22).png'" onmouseout="this.src='New Project (25).png'" /></a>
<a href="#"><img  class="img1" src="img_4520002.png"></a>
<a href="Payroll.php"><img class="img1" src="New Project (23).png" alt="Employee/Personnel Payroll Manager" onmouseover="this.src='New Project (24).png'" onmouseout="this.src='New Project (23).png'" /></a>
</nav>
<section class="body">
   <H2>従業員/人事レコードマネージャー</H2>

</section>
<div>
<section class="EPRM">
   <form action="add.php" method="POST">
   <table>
      <tr>
 <td>  <input type="text" name="EmployeeID" placeholder="従業員 ID" required></td></tr>
    <tr> <td> <input type="text" name="Surname" placeholder="名字" required></td></tr>
    <tr> <td> <input type="text" name="Firstname" placeholder="名" required></td></tr>
      <tr><td>  <input type="text" name="MiddleInitial" placeholder="ミドルイニシャル" required></td></tr>
</tr>  
     <tr> <td>   <label>生年月日：</label><br></td></tr>
       <tr> <td> <input type="date" name="Birthdate" required><br></td></tr>
      <tr><td>  <input type="text" name="Department" placeholder="部" required></td></tr>
       <tr><td> <select name="Position" required>
         <option>---位置の選択---</option>
         <option>教育従業員</option>
           <option>非教育従業員</option>
            <option>ボス/マネージャー</option>
      </select></td>
   </tr>
   <tr><td> <select name="Gender" required>
         <option>---性別の選択---</option>
         <option>男性</option>
           <option>女性</option>
           
      </select></td>
   </tr>
</table>
<br>

 <input type="Submit" class="button" name="Submit"  value="足す"> 
  <input type="reset" class="button"  value="リセット"> 
  
</section>
</form>
</div>
<br>
<div>
 <table border="1" >
   <tbody>

      <th width="150px">従業員 ID</th>
      <th width="150px">名字</th>
      <th width="150px">名</th>
      <th width="150px">ミドルイニシャル</th>
      <th width="150px">生年月日</th>
      <th width="150px">部</th>
      <th width="150px">立場</th>
      <th width="150px">ジェンダー</th>
  
   
       <?php

      include('epmanagerdb.php');
      $sql = "SELECT * FROM `manageemployee`";
      $query = mysqli_query($conn, $sql) or die( mysqli_error($conn));
      while($row=mysqli_fetch_array($query)){
         ?>
         <tr>
            <td width="150px"><label name="td1" ><?php echo $row['EmployeeID']; ?><label></label></td>
            <td width="150px"><label name="td2" > <?php echo $row['Surname']; ?></label></td>
            <td width="150px"><label name="td3" ><?php echo $row['Firstname']; ?></label></td>
            <td width="150px"><label name="td4" ><?php echo $row['MiddleInitial']; ?></label></td>
            <td width="150px"><label name="td5" ><?php echo $row['Birthdate']; ?></label></td>
            <td width="150px"><label name="td6" ><?php echo $row['Department']; ?></label></td>
            <td width="150px"><label name="td7" ><?php echo $row['Position']; ?></label></td>
            <td width="150px"><label name="td8" ><?php echo $row['Gender']; ?></label></td>
            <td>
                        <a href="edit.php?id=<?php echo $row['EmployeeID']; ?>">Edit</a>
                        <a href="delete.php?id=<?php echo $row['EmployeeID']; ?>">Delete</a></td>
         </tr>
            </tbody>
           
         <?php
      }

      ?>


 </table>
</div>
            
</body>
</html>