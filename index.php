<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>BookMyResource.com</title>
	<style>
	body{
		background-color: #d3d3d3;
	}
	.btn {
    background: #39b7dd;
    text-align: center;
    padding: 15px;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    text-transform: uppercase;
}
#container {
  position: relative;
  font-family: Arial;
  height: 80%;
  width:80%;
  left: 150px;
  
}
.text-block {
  position: absolute;
  top: 380px;
  left: 290px;
  background-color: #2f4f4f;
  color: #d3d3d3;
  padding-left: 20px;
  padding-right: 20px;
  width: 800px;
  height: 250px;
  opacity: 0.9;
}
#hea1
{
	color: #02051A;
}
#pp
{
	font-size: 28px;
}
#cont{
  position: relative;
  font-family: Arial;
  height: 170px;
  width:100%;
  
  background-color: #2f4f4f;
}
.containe
{
	width: 80%;
	height: 300px;
	background:  #2f4f4f;
	margin: 0 auto;
	border: 2px solid #fff;
	border-radius:15px;
	opacity: 0.9;
}
.containe .ulta
{
	float: right;
	width: 50%;
	height: 300px;
	background: url(vis.jpg);
	background-size: cover;
	box-sizing: border-box;
	padding-right:20px;
	padding-left:20px;
	border-radius:15px;
}
.containe .pulta
{
	float: left;
	width: 50%;
	height: 300px;
	box-sizing: border-box;
	color: white;
	text-align: left;
	padding-right:20px;
	padding-left:20px;
}
#footer {
   position: relative;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #CC6600;
   color: #02051A;
   text-align: center;
}

	</style>
  </head>
  <body>
     
 
<nav class="navbar navbar-light" style="background-color: #696969;">
  <a class="navbar-brand" style="font-size:50px; color:#fff; " href="#">
    <img src="logod.png" width="80" height="80" class="d-inline-block align-top" alt="">
    Book My Resource
  </a>
  <form class="form-inline">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color:#fff;">Login</button>
  </form>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/Project/index.php#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Project/gallery.php#">Gallery</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Places
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/Project/halls.php">Halls</a>
          <a class="dropdown-item" href="http://localhost/Project/labs.php">Labs</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="http://localhost/Project/others.php">Other Rooms</a>
        </div>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Notifications
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/Project/index_new.php">Dates</a>
          <a class="dropdown-item" href="http://localhost/Project/hols.php">Holidays</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="http://localhost/Project/othNotif.php">Others</a>
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="http://localhost/Project/booking.php">Book Now</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="http://localhost/Project/feedback.php#">Feedback</a>
      </li>
    </ul>
  </div>
</nav>

<div id="container">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="car1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="car2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="car3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="text-block">
  <br>
    <h1 id="hea1"><b>Where excellent events thrive</b></h1>
    <p id="pp">Spaces to carry out your events, community to help you create memories, and support to help you focus on and fulfill your plans.</p><br><br>
</div><br>

<div id="cont">
<br>
<h1 style="text-align: center; color:#CC6600; font-size: 58px;">Our Services</h1>
<p style="text-align: center; font-size: 22px; padding-left: 20px; padding-right: 20px; color:#fff">Whether you need a few hours or a few days for your events, our services give you the flexibility to enjoy on your terms.</p>
</div>
<br>
<br>

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
   <div class="card-deck">
  <div class="card">
    <img src="ser1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="color: #CC6600; text-align:center"><b>Event Venues</b></h5>
      <p class="card-text">The large and spacious places at BMCC will be the most well structured venues for your events, accomodating all you needs</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Do Visit</small>
    </div>
  </div>
  <div class="card">
    <img src="ser2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="color: #CC6600; text-align:center"><b>On Demand Labour</b></h5>
      <p class="card-text">An efficient and well equipped team of workers at your service. Services and workers provided according to the need of your events</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Do Visit</small>
    </div>
  </div>
  <div class="card">
    <img src="ser3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="color: #CC6600; text-align:center"><b>On Demand Organisers</b></h5>
      <p class="card-text">Kick back and relax as we provide you with a complete spectacularly organized event just according to your plans</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Do Visit</small>
    </div>
  </div>
</div>
	<br><br>
	 <div class="card text-center" style="background-color:#696969; opacity: 0.9;">
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p style="color:black; font-size:28px;">“I feel incredibly fortunate to have the opportunity to plan for my events in such a professional, well run environment. There is a collaborative atmosphere, which is amazing for independent organizers, in-house teachers and alumni.”</p>
      <footer style="color:black; class="blockquote-footer">Dr. Someone Whoever <cite title="Source Title">Financial Computing & Core Marketing</cite></footer>
    </blockquote>
  </div>
</div><br><br>
<div class="containe">
 <div class="ulta"></div>
<div class="pulta">
<br><br>
<h1 style="font-size:80px; color: #CC6600">Visit BMCC</h1>
<br>
<a class="btn btn-light" style="font-size:35px;" href="http://localhost/Project/map.html" role="button">See Locations</a>
</div>
 </div>
	<br>
	<br>
	<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Pune, India</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 0909090909</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br>
<div id="footer">
  <p style="font-size:20px;">Copyright Anubhav Arora---Shubham Sapkal---Yuvraj Gavhane</p>
</div>
<br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>