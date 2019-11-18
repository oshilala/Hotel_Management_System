<?php
include("dbsign.php");


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
	<form method="post" action="dbsign.php">
		<div class="leftbar">
		<label>First Name:
			<input type="text" name="first_name" placeholder="Your First Name" required></label><br /><br />
			<label>Username:
			<input type="text" name="username" placeholder="Your Username" required></label><br /><br />
			<label>Country:</label>
		<select name="country" style="width: 350px; height: 40px; margin: 10px; font-size: 100%; text-align: center; background-color: black; color: white">
			<option>-----select your country-----</option>
			<option>Nigeria</option>
		</select>
	</div>
	<div class="rightbar">
		<label>Last Name:
			<input type="text" name="last_name" placeholder="Your Last Name" required></label><br /><br />
		
		<label>Email:
			<input type="email" name="email" placeholder="name@usermail.com" required></label><br /><br />
		
		<label>Phone No:
			<input type="tel" name="phone_no" required placeholder="Phone Number"></label>
		</div>
		<div class="bottom">
			<label>Address</label><br />
			<input type="text" name="address" required>
		</div>
		<div class="password">
		<label>Password:
			<input type="password" name="password" placeholder="password" required></label>
		<label>Confirm Password:
			<input type="password" name="confirmpassword" required placeholder="Re-type Password"></label>
		</div>
		<div class="submit">
			<input type="submit" value="Register" name="submit">
			</div>
	</form>
</div>

<div id="footer">

	</div>
</body>
</html>