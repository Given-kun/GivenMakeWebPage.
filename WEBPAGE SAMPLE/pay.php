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

</style>
<body>
	<form action="index2.php" method="Post">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <div class="logo">
      <img src="286491711_1252374921967052_6017420971152853283_n.png"  class="rounded float-start"  width="100px" height="100px">
    </div>
    <a class="navbar-brand" href="#"><span>Cake</span>Ordering System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
           <form class="d-flex">
       <button type="submit">Next</button>
      </form>
    </div>
  </div>
</nav>
  <span class="input-group-text" id="basic-addon1">Mode of payment</span>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
   GCASH
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    BPI 
  </label>
</div>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
   UNION BANK
  </label>
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Mode of payment Number:</span>
  <input type="text" name="Mode" class="form-control" placeholder="GCASH/BPI/UNION BANK" aria-label="Cake Size" aria-describedby="basic-addon1">
</div>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>