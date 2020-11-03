<?php
function build_calendar($month, $year){
	$mysqli = new mysqli('localhost','root','','bookingcalendar');
	/*$stmt = $mysqli->prepare('select * from bookings where MONTH(date)=? AND YEAR(date)=?');
	$stmt->bind_param('ss',$month, $year);
	$bookings=array();
	if($stmt->execute()){
		$result = $stmt->get_result();
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$bookings[]=$row['Date'];
			}
			$stmt->close();
		}
	}*/

	$daysOfWeek = array('Sunday','Monday','Teusday','Wednesday','Thrusday','Friday','Saturday');
	$firstDayOfMonth = mktime(0,0,0, $month, 1, $year);
	$numberDays = date('t',$firstDayOfMonth);
	$dateComponents = getdate($firstDayOfMonth);
	$monthName = $dateComponents['month'];
	$dayOfWeek = $dateComponents['wday'];
	$dateToday = date('Y-m-d');

	$prev_month = date('m',mktime(0,0,0,$month-1,1,$year));
	$prev_year = date('Y',mktime(0,0,0,$month-1,1,$year));
	$next_month = date('m',mktime(0,0,0,$month+1,1,$year));
	$next_year = date('Y',mktime(0,0,0,$month+1,1,$year));
	$calendar = "<center><h2>$monthName $year</h2>";
	$calendar.="<a class='btn btn-primary btn-sm' href='?month=".$prev_month."&year=".$prev_year."'>Previous Month</a>";
	$calendar.="<a class='btn btn-primary btn-sm' href='?month=".date('m')."&year=".date('Y')."'>Current Month</a>";
	$calendar.="<a class='btn btn-primary btn-sm' href='?month=".$next_month."&year=".$next_year."'>Next Month</a></center>";
	$calendar.="<table class='table table-bordered'>";
	$calendar.="<tr>";
	foreach ($daysOfWeek as $day) {

		$calendar.="<th class='header'>$day</th>";

	}
	$calendar.="</tr><tr>";
	$currentDay = 1;
	if($dayOfWeek>0){
		for($k=0; $k<$dayOfWeek; $k++){
			$calendar.="<td class='empty'></td>";
		}
	}

	$month = str_pad($month,2,"0",STR_PAD_LEFT);
	while($currentDay<=$numberDays){
		if($dayOfWeek==7){
			$dayOfWeek=0;
			$calendar.="</tr><tr>";
		}
		$currentDayRel = str_pad($currentDay,2,"0",STR_PAD_LEFT);
		$date = "$year-$month-$currentDayRel";

		$dayName = strtolower(date('l',strtotime($date)));
		$eventNum = 0;
		$today = $date ==date('Y-m-d')?'today':'';
		if($date<date('Y-m-d')){
						$calendar.="<td class='$today'><h4>$currentDay</h4><a class='btn btn-danger btn-xs'>N/A</a> </td>";
		}
		else{ $calendar.="<td class='$today'><h4>$currentDay</h4><a class='btn
btn-success btn-xs' href='book.php?date=".$date."'>Book</a> </td>";

		}
		$currentDay++;
		$dayOfWeek++;

	}

	if($dayOfWeek<7){
		$remainingDays = 7-$dayOfWeek;
		for($i=0; $i<$remainingDays; $i++){
			$calendar.="<td class='empty'></td>";
		}
	}

	$calendar.= "</tr></table>";
	return $calendar;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="widht=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title></title>
	<style>
		@media only screen and (max-width: 760px),
		(min-device-width:802px) and (max-device-width:1020px){
			table,
			thead,
			tbody,
			th,
			td,
			tr{
				display: block;
			}
			.empty{
				display: none;
			}
			th{
				position: absolute;
				top: -9999px;
				left: -9999px;
			}
			tr{
				border: 1px solid #ccc;
			}
			td{
				border: none;
				'border-bottom: 1px solid #eee;
				position: relative;
				padding-left: 50%;
			}
			td:nth-of-type(1):before{
				content: "Sunday";
			}
			td:nth-of-type(2):before{
				content: "Monday";
			}
			td:nth-of-type(3):before{
				content: "Teusday";
			}
			td:nth-of-type(4):before{
				content: "Wednesday";
			}
			td:nth-of-type(5):before{
				content: "Thrusday";
			}
			td:nth-of-type(6):before{
				content: "Friday";
			}
			td:nth-of-type(7):before{
				content: "Saturday";
			}
		}
		@media (min-width: 641px){
			table{
				table-layout: fixed;
			}
			td{
				width: 33%;
			}
		}
		.row{
			margin-top: 20px;
		}
		.today{
			background: yellow;
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
          <label>Notifications</label>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown"><select>
          <a class="dropdown-item" href="http://localhost/Project/index_new.php"><option>Dates</option></a>
          <a class="dropdown-item" href="http://localhost/Project/hols.php"><option>Holidays</option></a></select>
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
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
					$dateComponents = getdate();
					if(isset($_GET['month']) && isset($_GET['year'])){
						$month = $_GET['month'];
						$year = $_GET['year'];
					}else{
						$month = $dateComponents['mon'];
						$year = $dateComponents['year'];
					}
					echo build_calendar($month, $year);
				?>
			</div>
		</div>
	</div>
<footer style="background-color: black; text-align: center; color: white;">
  Created by Anubhav Arora, Shubham Sapkal and Yuvraj Gavhane. All © rights reserved
</footer>
</body>
</html>