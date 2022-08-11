<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CAKE ORDERING WEBSITE</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
  .marquee {
  width: 2480;
  height: 350px;
  overflow: hidden;
  position: relative;
    background-color: black;
  
}
.marquee:before, .marquee:after{
  position: relative;
  top:  0;
  width: 10rem;
  height: 100%;
  content: "";
  z-index: 1;
}
.marquee:before{
  left: 0;
  background: linear-gradient(to right, #111 0%, transparent 100%);
}
:root{
  --marquee-width: 80vw;
  --marquee-width: 30vh;
/*  --marquee-elements: 7; */
  --marquee-width-displayed: 4;
  --marquee-element-width: calc(var(--marquee-width)/var(--marquee-width-displayed));
  --marquee-animation-duration: cal(var(--marquee-element)*4s);

}
.marquee-content li img{
  width: 100%;
  border: 2px solid #eee;
}
@media(max-width: 600px){
  html{ font-size: 12px; }
  :root{
    --marquee-width: 100vw;
    --marquee-heidth: 16vh;
    --marquee-elements-displayed: 3;
  }
}
.marquee:after{
  right: 0;
  background: linear-gradient(to left, #111 0%, transparent 100%);
}
.marquee-content:hover{
  animation-play-state: paused;
}
@keyframes scrolling{
  0% {transform: translateX(80vw);}
  100% {transform: translateX(calc(-1*20vw*9));}
}
.marquee-content{
  list-style: none;
  height: 100%;
  display: flex;
  animation: scrolling 10s linear infinite;
}
.marquee-content li{
  border: 30x solid teal;
  width: 20vw;
  flex-shrink: 0;
  align-items: center;
  justify-content: center;
  font-size: 5rem;
  white-space: nowrap;


}

radio {
	padding: 0;
		margin: 0;
		box-sizing: border-box;
		font-family: 'Kdam Thmor Pro', sans-serif
}
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <div class="logo">
      <img src="Image.png"  class="rounded float-start"  width="100px" height="100px">
    </div>
    <a class="navbar-brand" href="#"><span>Cake</span>Ordering System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
    </div>
  </div>
</nav>
<form action="index2.php" method="Post">
 <span class="input-group-text" id="basic-addon1">ORDER CAKE HERE:</span>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Name</span>
  <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Address</span>
  <input type="text" class="form-control" placeholder="Address" aria-label="Username" aria-describedby="basic-addon1" name="address">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Contact Number</span>
  <input type="text" name="contact" class="form-control" placeholder="Contact Number" aria-label="Contact Number" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Event</span>
  <input type="text" name="event" class="form-control" placeholder="Event" aria-label="Event" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Celebrant</span>
  <input type="text" name="Celebrant" class="form-control" placeholder="Celebrant" aria-label="Celebrant" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Theme</span>
  <input type="text" name="theme" class="form-control" placeholder="Theme" aria-label="Theme" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Cake Size</span>
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">2 TIER CUSTOMIZE CAKE</span>
</div>
   <select class="form-select"  Name="Csize" multiple aria-label="multiple select example">
  <option value="6x3 & 4x3 = 1000">6x3 & 4x3 = 1000</option>
  <option value="7x3 & 5x3 = 1100">7x3 & 5x3 = 1100</option>
  <option value="8x3 & 6x3 = 1500">8x3 & 6x3 = 1500</option>
</select>
</div>
<div class= "marquee">
  <ul class="marquee-content">
    <li><img src="1.png" width="652px" height="281px"></li>
    <li><img src="2.png" width="652px" height="281px"></li>
    <li><img src="3.png" width="652px" height="281px"></li>
    <li><img src="4.png" width="652px" height="281px"></li>
  </ul>
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">1 TIER CUSTOMIZE CAKE EDIBLE TOPPINGS</span>
</div>
   <select class="form-select"  Name="Csize" multiple aria-label="multiple select example">
  <option value="4x2=250">4x2=250</option>
  <option value="5x3= 350">5x3= 350</option>
  <option value="6x3=550">6x3=550</option>
   <option value="8x3= 850">8x3= 850</option>
</select>

</div>
<div class= "marquee">
  <ul class="marquee-content">
    <li><img src="5.png"  width="652px" height="281px"></li>
    <li><img src="6.png"  width="652px" height="281px"></li>
      <li><img src="7.png"  width="652px" height="281px"></li>
        <li><img src="8.png"  width="652px" height="281px"></li>
        <li><img src="9.png"  width="652px" height="281px"></li>
  </ul>
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">1 TIER CUSTOMIZE CAKE NON EDIBLE TOPPINGS</span>
</div>
   <select class="form-select"  Name="Csize" multiple aria-label="multiple select example">
  <option value="4x2=600">4x2=600</option>
  <option value="5x3= 850">5x3= 850</option>
  <option value="6x3=550">6x3=550</option>
   <option value="8x3= 850">8x3= 850</option>
</select>
</div>
<div class= "marquee">
  <ul class="marquee-content">
    <li><img src="11.png"></li>
    <li><img src="12.png"></li>
    <li><img src="13.png"></li>
    <li><img src="14.png"></li>
    <li><img src="15.png"></li>
    <li><img src="16.png"></li>
  </ul>
</div>
  <span class="input-group-text" id="basic-addon1">Mode of payment</span>
<select class="form-select" name="pay" multiple aria-label="multiple select example">
  <option selected>Select Mode of Payment</option>
  <option value="GCASH">GCASH</option>
  <option value="BPI">BPI</option>
  <option value="UNION BANK">UNION BANK</option>
</select>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Mode of payment Number:</span>
  <input type="text" name="Mode" class="form-control" placeholder="GCASH/BPI/UNION BANK" aria-label="Cake Size" aria-describedby="basic-addon1">
</div>
 <span class="input-group-text" id="basic-addon1">CAKE FLAVORS</span>
<select class="form-select"  Name="flavor" multiple aria-label="multiple select example">
  <option selected>Select Cake Menu</option>
  <option value="Chocolate">Chocolate</option>
  <option value="Ube">Ube</option>
  <option value="Mocha">Mocha</option>
</select>
 <span class="input-group-text"  id="basic-addon1">CHIFFON</span>
<select class="form-select" name="chiffon" multiple aria-label="multiple select example">
  <option selected>Select Chiffon Menu</option>
  <option value="Ube">Ube</option>
  <option value="Mocha">Mocha</option>
  <option value="Vanilla">Vanilla</option>
  <option value="Strawberry">Strawberry</option>
</select>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>