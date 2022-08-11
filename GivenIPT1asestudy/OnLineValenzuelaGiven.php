<?php ?>
<!DOCTYPE html>
<html>
<head>
  <script>
$('input').on('change', function(){
  var func = 'removeClass';
  if($(this).is(':checked')) {
    func = 'addClass';
  }
  
  $('label[for="'+$(this).attr('id')+'"]')[func]('checked');
});
  </script>
  <script>
    $("form").bind('submit',function(e){
  e.preventDefault();
  var hiddenData=$("input[name=P1]").val();
  // or var hiddenData=jQuery('#rout_markers').val(); 
  $("input[type=hidden][name=P1]").val(hiddenData);  
});
  </script>
   <script>
    $("form").bind('submit',function(e){
  e.preventDefault();
  var hiddenData=$("input[name=C1]").val();
  // or var hiddenData=jQuery('#rout_markers').val(); 
  $("input[type=hidden][name=C1]").val(hiddenData);  
});
  </script>
  <script>
       function submitform()
    {
        var hiddenData = document.getElementById('Psize').value;
        document.getElementById('P1').value = hiddenData;
        document.myform.submit();
    }
       function submitform()
    {
        var hiddenData = document.getElementById('Psize').value;
        document.getElementById('P2').value = hiddenData;
        document.myform.submit();
    }
       function submitform()
    {
        var hiddenData = document.getElementById('Psize').value;
        document.getElementById('P3').value = hiddenData;
        document.myform.submit();
    }
  </script>

  <style>
    H1{
    -webkit-text-stroke-width: 1px;
 -webkit-text-stroke-color: black;
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


  </style>





</head>
<body>

<form  action="OrderValenzuelaGiven.php" method=post name="myform" id="myform">



  
  <div class="header">
    <img src="image.png" height="100" width="100" position="margin-right" alt="GIVEN-KUN">
   <center> <H1>GIVEN-KUN's PIZZRIA ORDER ONLINE</H1><hr> </center>
 </div> 
 <h3>#01 Given-kun Pizzeria Street</h3>
 <h4>Tel #:734-930-3030</h4>


<div class="container">
  <tr>
    <td>
<p>Complete all entries below:(Customer Information)</p><br>
<p>Customer Name:<input type="Text" Name="CName"></p><br>
<p>Address:<input type="Text" Name="CAddress"></p> <br>
<p>Contact Number:<input type="Telephone" Name="Cphone"></p> 
</td>
</tr>
</div>
<hr>
<div class="table-responsive">
  <table class="table table-hover" border=1 cellpadding="2" cellspacing="1"><thead>
  <p> CHOOSE YOUR ORDER:</P>
<br>
<tr> 
<th><center>Pizza Size</th>
<th><center>Amount</th>
</tr>

<tr> 
  <div class="row">
  <div class="col-sm-4">
<td><input type="radio" id="P1" name="Psize" value="Small">Small</td>
<td><input type="hidden" name="P1" id="P1" value="100.00" />100.00</td>
</div>
</div>
</tr>

<tr> 
<td><input type="radio" id="P2" name="Psize" value="Medium">Medium</td>
<td><input type="hidden" name="P2" id="P2" value="200.00" />200.00</td>
</tr>

<tr> 
<td><input type="radio" id="P3" name="Psize" value="Large">Large</td>
<td><input type="hidden" name="P3" id="P3" value="300.00" />300.00</td>
</tr>
</table>



<table  border=1 cellpadding="2" cellspacing="1">
<th><center>Crust Type</th>
<th><center>Amount</th>

<tr> 
<td><input type="radio" id="C1" name="C" value="Thin">Thin</td>
<td>less 25% to Pizza </td>
</tr>

<tr> 
<td><input type="radio" id="C1" name="C" value="Regular">Regular</td>
<td>Same size as Pizza</td>
</tr>

<tr> 
<td><input type="radio" id="C1" name="C" value="Thick">Thick</td>
<td>Add 25% to Pizza Size </td>
</tr>
</table>


<table  border=1 cellpadding="2" cellspacing="1">
<th><center>Drinks</th>
<th><center>Amount</th>

<tr> 
<td><input type="radio" id="D" name="Dio" value="SoftDrink">Soft Drinks</td>
<td>20.00 </td>
</tr>

<tr> 
<td><input type="radio" id="D" name="Dio" value="Iced Tea">Iced Tea</td>
<td>30.00</td>
</tr>

<tr> 
<td><input type="radio" id="D" name="Dio" value="Fruit Juice">Fruit Juice</td>
<td>30.00</td>
</tr>
</table>

<table>
<tr>
<th> <b>Extra Toppings:</b></th>
<th> &nbsp;&nbsp;<select name=Toppings>
<option value=""></option>
<option value="Pepperoni">Pepperoni</option>
<option value="Mushroom">Mushroom</option>
<option value="Black Olive">Black Olive</option>
<option value="Onions">Onions</option>
<option value="Tomatoes">Tomatoes</option>
<option value="Cheese">Cheese</option>>
</select></th>
<td>Php 20.00 <br>
Additional for<br>
extra toppings</td>
</tr>
</table>
  </table>
  <br>


  <p> Enter your comments and suggestions here:
  <textarea name="comment" rows=5 cols=80 value="No Comments"></textarea><br>
<br>
<input type=submit name=btnSubmit value="Order" onclick="submitform()" />
<input type=reset value="Clear Order"></p>
</form>
</body>
</html>