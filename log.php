<?php
include("dblog.php");
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

	<div class="bod">
<form method="post" action="dblog.php" enctype="multipart/form-data">
	<div class="log">
	<label>Username/Email
		<input type="text" name="email" required></label><br /><br />
	<label>Password
		<input type="password" name="password" required></label>
	<div class="book">
		<input type="submit" name="book" value="Book a stay">
	</div>
		</div>
</form>
</div>
<div id="footer">
		
	</div>
</body>
</html>