<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GIVENMAKEWEBPAGE</title>
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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <div class="logo">
    </div>
    <a class="navbar-brand" href="#">
      <span>GIVENMAKEWEBPAGE SAMPLE:</span>

      <span>Cake</span>Ordering System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
           <form class="d-flex">
        <a class="btn btn-outline-success" href="indexorder.php">Next</a>
      </form>
    </div>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i0.wp.com/veenaazmanov.com/wp-content/uploads/2012/11/Chocolate-Ganache-Cake9.jpg" class="d-block w-100" alt="CHOCOLATE">
      <div class="carousel-caption d-none d-md-block">
        <h5>CHOCOLATE</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://cdn.shopify.com/s/files/1/0596/1134/9175/files/home-we-ship.jpg?v=1633980829&width=1080" class="d-block w-100" alt="UBE">
      <div class="carousel-caption d-none d-md-block">
        <h5>UBE</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://i.redd.it/7behlwnb37o11.jpg" class="d-block w-100" alt="MOCHA">
      <div class="carousel-caption d-none d-md-block">
        <h5>MOCHA</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>