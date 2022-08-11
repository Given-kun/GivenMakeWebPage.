<!DOCTYPE html>
<html>
<style type="text/css">
html {
    position: relative;
    min-width: 1024px;
    min-height: 768px;
    height: 110%;
}
 table {
    display: inline-block;
    padding: 15px 30px;
    color: black;
    text-transform: uppercase;
    font-family: Arial;
    border: 1px solid White;
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
}
body {
    background: #18191a;
    size: 150%}
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
    color: White;
    background: #242526;
    font-family: Segoe UI;
    text-decoration: none;
    cursor: pointer;
}
html, body {
    height: 100%;
}

html {
    display: table;
    margin: auto;
}

body {
    display: table-cell;
    vertical-align: middle;
}

#imageUpload
{
    display: none;
}

#profileImage
{
    cursor: pointer;
}

#profile-container {
    width: 150px;
    height: 150px;
    overflow: hidden;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
}

#profile-container img {
    width: 150px;
    height: 150px;
}

</style>
<body>
   <form action="loop02.php">
        <input type="submit" name="loop2" value="02">
    </form>

 <a href="loop.php">
<table>
  <tr><td>Write the source code of the output below:</td></tr>
  <tr>
    <td>
      <marquee  direction="up" height="80" scrollamount="5">
      <?php
$i = 10;
while($i>0) {
  echo "$i <br>";
  $i--;
}
   ?>
 </marquee>
    </td>
  </tr>

</table>
</a>
</body>
</html>
