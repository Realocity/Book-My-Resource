

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
  max-width: 570px;
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
  width: 100%;
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

/*.btn {
    background: #39b7dd;
    text-align: center;
    width: 200px;
    border-radius: 5px;
    border:30px;
    color: #fff;
    cursor: hand;
    text-transform: uppercase;
    margin-left: 150px;
}*/
.butt{
  display: inline-block;
  margin-left: 150px;
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
<br><br>

<div class="wrapper">

<form class="contact-form" action="booking2.php" method="post" id="bk">
  <div class="input-fields">
    <div class="butt"><a href="index_new.php" class="btn btn-lg btn-primary">Book Date & Time</a></div>
    <input type="text" class="input" name="name" placeholder="NAME"  required><br>
  <input type="text" class="input" name="add" placeholder="Res. Address"  required><br>
   <input type="email" class="input" name="email" placeholder="EMAIL"  required><br>
    <input type="text" class="input" name="contact" placeholder="CONTACT" minlength="10" maxlength="10" required><br>
    <div class="input">
              <label>Select Service</label>
              <select  class="input" name="serv" required>
                <option id="Peons">Peons</option>
                <option id="Technician">Technician</option>
                <option id="Water Service">Water Service</option>
                <option id="Miscellaneous">Miscellaneous(Mention it in purpose section)</option>
              </select>
            </div>
<!--      <textarea class="input" name="msg" placeholder="PURPOSE"  required></textarea><br>
 -->      <div class="butt">
      <input type="submit"  class="btn btn-primary" value="Submit">
            <input type="submit" onclick="reset()" class="btn btn-primary" value="RESET FORM"></div>

  </div>
</form>
  </div>

<br>
<br>
<br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-firestore.js"></script>
  
      <script>
function reset() {

 document.getElementById("bk").reset();
}
</script>
<footer style="background-color: black; text-align: center; color: white;">
  Created by Anubhav Arora, Shubham Sapkal and Yuvraj Gavhane. All © rights reserved
</footer>
</body>
</html>
