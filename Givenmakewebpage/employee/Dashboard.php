
<!DOCTYPE html>
<html>
<head>
<!---Case Study Web-Program Written by: Valenzuela Given G.--->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="New Project (21).png">
   <title>ABCS Institute "DASHBOARD"</title>
</head>
<style type="text/css">
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




H1{
   font-family: 'Rowdies', cursive;
   font-size: 40px;
   background-color: #ffffff;
}
H2{
font-family: 'Bebas Neue', cursive;
   font-size: 40px;
   background-color: #ffffff;
}

.body{
   background-color: #fff;
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
#clockContainer {
    position: relative;
    margin: auto;
    height: 40vw;
    /*to make the height and width responsive*/
    width: 40vw;
    background: url(clock.png) no-repeat;
    /*setting our background image*/
    background-size: 100%;
}
  
#hour,
#minute,
#second {
    position: absolute;
    background: black;
    border-radius: 10px;
    transform-origin: bottom;
}
  
#hour {
    width: 1.8%;
    height: 25%;
    top: 25%;
    left: 48.85%;
    opacity: 0.8;
}
  
#minute {
    width: 1.6%;
    height: 30%;
    top: 19%;
    left: 48.9%;
    opacity: 0.8;
}
  
#second {
    width: 1%;
    height: 40%;
    top: 9%;
    left: 49.25%;
    opacity: 0.8;
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
    align-content: center;
    margin:0 auto;
}

</style>
<body>
<section class="header">
   <nav>
     
 <img src="New Project (21).png" alt="ABCS Institute"> 
   <H1>ABCS Institute</H1> </nav>

 
</section>
<nav>

<a href="#"><img  src="New Project (22).png"></a>
<a href="EPMANAGER.php"><img  class="img1" src="New Project (26).png" alt="Employee/ Personnel Manager" onmouseover="this.src='img_4520002.png'" onmouseout="this.src='New Project (26).png'" /></a>
<a href="Payroll.php"><img class="img1" src="New Project (23).png" alt="Employee/Personnel Payroll Manager" onmouseover="this.src='New Project (24).png'" onmouseout="this.src='New Project (23).png'" /></a>
</nav>


<section class="body">
   <H2>DASHBOARD</H2>

</section>
<form>
<table border="1">
     <tr>
      <td><marquee>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</marquee></td>
         <th>ANNOUNCEMENT!</th>
         
   </tr>



</table>
<div>
 <table border="1" >
   <tbody>

 <th width="250px">EMPLOYEE NAME</th>
      <th width="250px">EMPLOYEE ID</th>
      <th width="250px">POSITION</th>
      <th width="250px">TEACHING HOURS</th>
      <th width="250px">PAYRATE</th>
       <th width="250px">OVERTIME</th>
      <th width="250px">ALLOWANCE</th>
      <th width="250px">ABSENCES/DEDUCTION</th>
       <th width="250px">TOTAL</th>
  
   
       <?php

      include('payrolldb.php');
      $sql = "SELECT * FROM `payrollemployee`";
      $query = mysqli_query($conn, $sql) or die( mysqli_error($conn));
      while($row=mysqli_fetch_array($query)){
         ?>
         <tr>
            <td width="150px" align="center"><label name="td1" ><?php echo $row['EmployeeName']; ?><label></label></td>
            <td width="150px" align="center"><label name="td2" > <?php echo $row['EmployeeID']; ?></label></td>
            <td width="150px" align="center"><label name="td3" ><?php echo $row['Position']; ?></label></td>
            <td width="150px" align="center"><label name="td4" ><?php echo $row['THours']; ?></label></td>
            <td width="150px" align="center"><label name="td5" ><?php echo $row['payrate']; ?></label></td>
            <td width="150px" align="center"><label name="td6" ><?php echo $row['overtime']; ?></label></td>
            <td width="150px" align="center"><label name="td7" ><?php echo $row['allowance']; ?></label></td>
            <td width="150px" align="center"><label name="td8" ><?php echo $row['absence']; ?></label></td>
            <td width="150px" align="center"><label name="td8" ><?php echo $row['total']; ?></label></td>
            <td> <a href="edit.php?id=<?php echo $row['EmployeeID']; ?>" >Edit</a>
                        <a href="Paydelete.php?id=<?php echo $row['EmployeeID']; ?>">Delete</a></td></td>
         </tr>

            </tbody>
           
         <?php
      }

      ?>
<?php?>

 </table>
</div>
<nav>
   <script type="text/javascript">
      setInterval(() => {
    d = new Date(); //object of date()
    hr = d.getHours();
    min = d.getMinutes();
    sec = d.getSeconds();
    hr_rotation = 30 * hr + min / 2; //converting current time
    min_rotation = 6 * min;
    sec_rotation = 6 * sec;
  
    hour.style.transform = `rotate(${hr_rotation}deg)`;
    minute.style.transform = `rotate(${min_rotation}deg)`;
    second.style.transform = `rotate(${sec_rotation}deg)`;
}, 1000);
   </script>
   <div id="clockContainer" >
        <div id="hour"></div>
        <div id="minute"></div>
        <div id="second"></div>
    </div>
</nav>

</nav></table>

</form>
</body>
</html>