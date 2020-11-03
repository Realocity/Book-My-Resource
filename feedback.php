


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
  width: 600px;
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
#footer {
   position: relative;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #CC6600;
   color: #02051A;
   text-align: center;
}

.form-container
{
  background-color: #fff;
    box-shadow: 0 16px 24px 2px rgba(0,0,0,0.14), 0 20px 30px 5px rgba(0,0,0,0.12), 0 8px 10px -5px rgba(0,0,0,0.3);
    border-radius: 8px; 
    font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  left: 300px;
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

 <div class="wrapper" style="margin-left: 550px;">
        <div class="contact-form" style="">
              <div class="input-fields" style="color:#c5ecfd;">
                    <h2>Feedback</h2> 
                    <p> Please provide your feedback below: </p>
                    <form role="form" method="post" id="reused_form">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>How do you rate your overall experience?</label>
                                <p>
                                    <label  class="radio-inline">
                                        <input type="radio" id="feedback_1" name="experience" id="radio_experience" value="bad" >
                                        Bad 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" id="feedback_1" name="experience" id="radio_experience" value="average" >
                                        Average 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" id="feedback_1" name="experience" id="radio_experience" value="good" >
                                        Good 
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group" >
                                <label for="comments"> Comments:</label>
                                <textarea class="form-control" id="comment" type="textarea" name="comments"  placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> Your Name:</label>
                                <input type="text" class="form-control" id="namefdbk" name="name" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> Email:</label>
                                <input type="email" class="form-control" id="emailfdbk" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                              <div id="submitfdbk" class="btn btn-primary">Send</div>                            </div>
                        </div>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your feedback successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            </div>
        </div>
		<br>
		<br>
		<br>
      <div id="footer">
        <p style="font-size:20px;">Copyright Anubhav Arora---Shubham Sapkal---Yuvraj Gavhane</p>
    </div>
		
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-firestore.js"></script>
  
      <script src="feed.js"></script>
</body>
</html>
