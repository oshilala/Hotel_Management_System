<?php 
// session_start();
// ob_start();
include("dbbook.php");

$username = $_SESSION['username'];
$email = $_SESSION['email'];
$phone_no = $_SESSION['phone_no'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="header">
		<h1>Oshi Hotel & Suites</h1>
	</div>

	<div id="nav">
		<ul>
			<li><a href="home.php">HOME</a></li>
			<li><a href="service.php">SERVICES</a></li>
			<li><a href="gallery.php">GALLERY</a></li>
			<li><a href="contact.php">CONTACT US</a></li>
			<li><a href="about.php">ABOUT US</a></li>
		</ul>
		
	</div>

	<h5>Room Category</h5>
	<div id="pics">
	
			<div class="img"><a href="deluxe.jpg" target="_blank"><img src="deluxe.jpg" alt="Deluxe Room"></a>
			<div class="des">Deluxe Room = 40$/day</div></div>
			<div class="img"><a href="club.jpg" target="_blank"><img src="club.jpg" alt="Club Twin Room"></a>
			<div class="des">Club Twin Room = 60$/day</div></div>
			<div class="img"><a href="executive.jpg" target="_blank"><img src="executive.jpg" alt="Executive Suites"></a>
			<div class="des">Executive Suites = 100$/day</div></div>
			<div class="img"><a href="junior.jpg" target="_blank"><img src="junior.jpg" alt="Junior Suites"></a>
			<div class="des">Junior Suites = 150$/day</div></div>
			<div class="img"><a href="senior.jpg" target="_blank"><img src="senior.jpg" alt="Senior Suites"></a>
			<div class="des">Senior Suites = 200$/day</div></div>
			<div class="img"><a href="home.jpg" target="_blank"><img src="home.jpg" alt="Home Suites"></a>
			<div class="des">Home Suites = 250$/day</div></div>
		
	</div>
	<div class="body">
	<form method="post" action="dbbook.php">
		<div class="leftbar">
<label>Username:
<input type="text" name="username" value='<?php echo $username ?>' readonly="readonly"></label><br /><br />
<label>Phone No:
<input type="tel" name="phone_no" value='<?php echo $phone_no ?>'  readonly="readonly"></label><br /><br />
<label>Check In:
<input type="date" name="checkin"></label>
</div>
<div class="rightbar">
<label>Email:
<input type="email" name="email" value='<?php echo $email ?>' readonly="readonly"></label><br /><br />

<label>Category</label>
<select  style="width: 350px; height: 40px; margin: 10px; font-size: 100%; text-align: center; background-color: black; color: white" name="room_category">
	<option>Please select Room Category</option>
	<option>DELUXE ROOM</option>
	<option>CLUB TWIN ROOM</option>
	<option>EXECUTIVE SUITES</option>
	<option>JUNIOR SUITES</option>
	<option>SENIOR SUITES</option>
	<OPTION>HOME SUITES</OPTION>
</select><br /><br />
<label>Check Out:
<input type="date" name="checkout"></label>
</div>
<div class="la">
<label>please check for child/children
<input type="checkbox" name="check"></label>
<label>No of Rooms:
<input type="number" name="no_of_rooms"></label>
</div>
<div style="margin: auto; width: 350px;">
<input type="submit" name="submit" value="Book">
</div>


</form>
</div>
<div id="footer">
		
	</div>
</body>
</html>