<?php
error_reporting(0);
?>
<?php
    $mysqli = new mysqli('localhost','root','','bookingcalendar');
if(isset($_GET['date'])){
	$date = $_GET['date'];
    $stmt = $mysqli->prepare('select * from bookings where Date =?');
    $stmt->bind_param('s',$date);
    $bookings=array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $bookings[]=$row['Timeslots'];
            }
            $stmt->close();
        }
    }
}

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$hall = $_POST['venue'];
	$timeslot = $_POST['timeslot'];
        $stmt = $mysqli->prepare('select * from bookings where Date =? AND Timeslots =?');
    $stmt->bind_param('ss',$date,$timeslot);
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            $msg="<div class='alert alert-danger'>Already Booked</div>";           
        }else{
            $stmt = $mysqli->prepare("INSERT INTO bookings(Name, Email, Hall, Date, Timeslots) VALUES(?,?,?,?,?)");
            $stmt->bind_param('sssss',$name,$email,$hall,$date,$timeslot);
            $stmt->execute();
            $msg="<div class='alert alert-success'>Booking Successfull</div>";
            $bookings[] = $timeslot;
            $stmt->close();
            $mysqli->close();
        }
    }
	$stmt = $mysqli->prepare("INSERT INTO bookings(Name, Email, Hall, Date, Timeslots) VALUES(?,?,?,?,?)");
	$stmt->bind_param('sssss',$name,$email,$hall,$date,$timeslot);
	$stmt->execute();
	$msg="<div class='alert alert-success'>Booking Successfull</div>";
    header('location:booking.php');
    $bookings[] = $timeslot;
	$stmt->close();
	$mysqli->close();
}


$duration = 60;
$cleanup = 0;
$start = "09:00";
$end = "16:00";

function timeslots($duration, $cleanup, $start, $end){
	$start = new DateTime($start);
	$end = new DateTime($end);
	$interval = new DateInterval("PT".$duration."M");
	$cleanupInterval = new DateInterval("PT".$cleanup."M");
	$slots = array();

	for($intStart = $start; $intStart<$end; $intStart->add($interval)->add($cleanupInterval)){
		$endPeriod = clone $intStart;
		$endPeriod->add($interval);
		if($endPeriod>$end){
			break;
		}

		$slots[] = $intStart->format("H:iA")."-".$endPeriod->format("H:iA");

	}
	return $slots;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/main.css">
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
<div class="container">
	<h1 class="text-center">Book for Date: <?php echo date('d/m/Y', strtotime($date)); ?></h1><hr>
	<div class="row">
		<div class="col-md-12">
			<script><?php echo isset($msg)?$msg:""; ?></script>
		</div>
		<?php $timeslots = timeslots($duration, $cleanup, $start, $end);
		foreach ($timeslots as $ts) {
			?>
			<div class="col-md-2">
				<div class="form-group">
                    <?php if(in_array($ts, $bookings)){ ?>
                                <button class="btn btn-danger"><?php echo $ts;?></button>
                    <?php }else{?>
                                <button class="btn btn-success book" data-timeslot="<?php echo $ts;?>"><?php echo $ts;?></button>
                    <?php }?>
				
				</div>
			</div>
		<?php  } ?>

	</div>

</div>

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Booking: <span id="slot"></span></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
        	<div class="col-md-12">
        		<form action="" method="post" autocomplete="off">
        		<div class="form-group">
        			<label for="">Timeslot</label>
        			<input required type="text" readonly name="timeslot" id="timeslot" class="form-control">
        		</div>
        		<div class="form-group">
        			<label for="">Name</label>
        			<input required type="text"  name="name" class="form-control">
        		</div>
        		<div class="form-group">
        			<label for="">Email</label>
        			<input required type="Email" name="email" class="form-control">
        		</div>
        		<div class="form-group">
        			<label>Select Your Hall</label>
        			<select name='venue'>
        				<option id="Tata Hall">Tata Hall</option>
        				<option id="Cyrus Poonawala">Cyrus Poonawala</option>
        				<option id="Pittie Hall">Pittie Hall</option>
        				<option id="AV Room">AV Room</option>
        			</select>
        		</div>
        		<div class="form-group pull-right">
        			<button class="btn btn-primary" type="submit" name="submit">Submit</button>
        		</div>
        </div>
        </div>
      </div>
   </div>
  </div>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
    	$(".book").click(function(){
    		var timeslot = $(this).attr('data-timeslot');
    		$("#slot").html(timeslot);
    		$("#timeslot").val(timeslot);
    		$("#myModal").modal("show");
    	})
    </script>


    <footer style="background-color: black; text-align: center; color: white;">
  Created by Anubhav Arora, Shubham Sapkal and Yuvraj Gavhane. All © rights reserved
</footer>
</body>
</html>