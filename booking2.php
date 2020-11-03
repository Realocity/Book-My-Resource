<?php  
    $email = $_POST['email'];
    $conn = mysqli_connect("localhost", "root", "", "bookingcalendar");  
$sql = "SELECT * FROM bookings WHERE Email = '$email'";  
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result);
?>


<!DOCTYPE html>
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
  background-size: cover;
  height: 100vh;
}
	.wrapper{
  position: relative;
  top: 2%;
  width: 100%;
  padding: 0 20px;
}

.contact-form{
  display: flex;
  max-width: 770px;
  margin: 0 auto;
  background: rgba(0,0,0,0.8);
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0,0,0,0.3);
}

.input-fields{
  display: flex;
  flex-direction: column;
  margin-right: 4%;
}

.input-fields,
.msg{
  width: 48%;
}

.input-fields .input,
.msg textarea{
  margin: 10px 0;
  background: transparent;
  border: 0px;
  border-bottom: 2px solid #c5ecfd;
  padding: 10px;
  color: #c5ecfd;
  width: 100%;
}

.msg textarea{
  height: 212px;
}

::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  color: #c5ecfd;
}
::-moz-placeholder {
  /* Firefox 19+ */
  color: #c5ecfd;
}
:-ms-input-placeholder {
  /* IE 10+ */
  color: #c5ecfd;
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

@media screen and (max-width: 700px){
  .contact-form{
    flex-direction: column;
  }
  .msg textarea{
    height: 300px;
  }
  .input-fields,
  .msg{
    width: 100%;
  }
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
        <a class="nav-link" href="#">Gallery</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Places
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Halls</a>
          <a class="dropdown-item" href="#">Labs</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Other Rooms</a>
        </div>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Notifications
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Dates</a>
          <a class="dropdown-item" href="#">Holidays</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Others</a>
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
<br><br>

<div class="wrapper">
  <div class="contact-form">
    <div class="input-fields">
      <input type="text" id="name" class="input" placeholder="name" value="<?php echo $_POST['name']; ?>">
	  <input type="text" id="add" class="input" placeholder="address" value="<?php echo $_POST['add']; ?>">
      <input type="email" id="email" class="input"  placeholder="email" value="<?php echo $_POST['email']; ?>">
      <input type="number" id="contact" class="input" placeholder="contact" minlength="10" maxlength="10" value="<?php echo $_POST['contact']; ?>">
	  <input type="text" id="serv" class="input" placeholder="services" value="<?php echo $_POST['serv']; ?>">
	 <input type="text" id="venue" class="input" placeholder="venue" value="<?php echo $row["Hall"]?>">
   <input type="date" id="date" class="input" placeholder="date" value="<?php echo $row["Date"]; ?>">
      <input type="text" id="time" class="input" placeholder="time" value="<?php echo $row["Timeslots"] ?>">

    </div>

    <div class="msg"  >
      <textarea id="msg" placeholder="Purpose" required></textarea>
      <div id="submit" class="btn">SUBMIT</div>
      
    </div>
  </div>
</div>	
<br>
<br>
<br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-firestore.js"></script>
  
      <script src="main.js"></script>
      <footer style="background-color: black; text-align: center; color: white;">
  Created by Anubhav Arora, Shubham Sapkal and Yuvraj Gavhane. All © rights reserved
</footer>
</body>
</html>
