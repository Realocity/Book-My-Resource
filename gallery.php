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
	.btn {
    background: #39b7dd;
    text-align: center;
    padding: 15px;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    text-transform: uppercase;
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
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
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

   

  
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<div style="background-color: #696969;">
<style>

body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
  background: #39b7dd;
}

/* Hide the images by default */
.mySlides {
  display: none;
 
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;

  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
 
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
<body>


<div class="container" style="width: 10000px; margin: auto; background-color: chartreuse; ">
  <div class="mySlides">
    <div class="numbertext">1 / 16</div>
    <img src="gal1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 16</div>
    <img src="gal2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 16</div>
    <img src="gal3.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 16</div>
    <img src="gal4.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 16</div>
    <img src="gal5.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 16</div>
    <img src="gal6.jpg" style="width:100%">
  </div>
    
    
  <div class="mySlides">
    <div class="numbertext">7 / 16</div>
    <img src="gal7.jpg" style="width:100%">
  </div>


  <div class="mySlides">
    <div class="numbertext">8 / 16</div>
    <img src="gal8.jpg" style="width:100%">
  </div>

  
  <div class="mySlides">
    <div class="numbertext">9 / 16</div>
    <img src="gal9.jpg" style="width:100%">
  </div>

  
  <div class="mySlides">
    <div class="numbertext">10 / 16</div>
    <img src="gal10.jpg" style="width:100%">
  </div>

  
 <!-- <div class="mySlides">
    <div class="numbertext">11 / 16</div>
    <img src="gal11.jpg" style="width:100%">
  </div> -->

  
  <div class="mySlides">
    <div class="numbertext">12/ 16</div>
    <img src="gal12.jpg" style="width:100%">
  </div>

  
  <div class="mySlides">
    <div class="numbertext">13 / 16</div>
    <img src="gal13.jpg" style="width:100%">
  </div>

  
  <div class="mySlides">
    <div class="numbertext">14 / 16</div>
    <img src="gal14.jpg" style="width:100%">
  </div>

  
  <div class="mySlides">
    <div class="numbertext">15 / 16</div>
    <img src="gal15.jpg" style="width:100%">
  </div>

  
  <div class="mySlides">
    <div class="numbertext">16 / 16</div>
    <img src="gal16.jpg" style="width:100%">
  </div>


  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

 <!-- <div class="row">
    <div class="column">
      <img class="demo cursor" src="gal1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column">
      <img class="demo cursor" src="gal2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
    </div>
    <div class="column">
      <img class="demo cursor" src="gal3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="gal4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="gal5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>    
    
    <div class="column">
      <img class="demo cursor" src="gal6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="gal7.jpg" style="width:100%" onclick="currentSlide(7)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="gal8.jpg" style="width:100%" onclick="currentSlide(8)" alt="Snowy Mountains">
    </div>
      <div class="column">
      <img class="demo cursor" src="gal9.jpg" style="width:100%" onclick="currentSlide(9)" alt="Snowy Mountains">
    </div>
      <div class="column">
      <img class="demo cursor" src="gal10.jpg" style="width:100%" onclick="currentSlide(10)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="gal11.jpg" style="width:100%" onclick="currentSlide(11)" alt="Snowy Mountains">
    </div>
      <div class="column">
      <img class="demo cursor" src="gal12.jpg" style="width:100%" onclick="currentSlide(12)" alt="Snowy Mountains">
    </div>
      <div class="column">
      <img class="demo cursor" src="gal13.jpg" style="width:100%" onclick="currentSlide(13)" alt="Snowy Mountains">
    </div>
      <div class="column">
      <img class="demo cursor" src="gal14.jpg" style="width:100%" onclick="currentSlide(14)" alt="Snowy Mountains">
    </div>
      <div class="column">
      <img class="demo cursor" src="gal15.jpg" style="width:100%" onclick="currentSlide(15)" alt="Snowy Mountains">
    </div>
      <div class="column">
      <img class="demo cursor" src="gal16.jpg" style="width:100%" onclick="currentSlide(16)" alt="Snowy Mountains">
    </div> -->

  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
   
</body>
</div>
</html>


<div class="clearfix"></div>




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