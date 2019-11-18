<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
	
	<h1 style="background-color:#b30000 ">Welcome Admin</h1>
	<table>
		 <?php 
include ("config.php");
$sel = "SELECT * FROM booking WHERE username='$username' and email='$email' and phone_no='$phone_no' and checkin='$checkin' and checkout='checkout' and room_category='$room_category' and no_of_rooms='$no_of_rooms'";
$result = $conn->query($sel);
if ($result->num_rows > 0){
  while ($row = $result->fetch_assoc()) {
?>
	<h5>Booking History</h5>
		<thead style="width:100%">
			<td>Id</td>
			<td>Username</td>
			<td>Email</td>
			<td>Phone No</td>
			<td>Check-In Date</td>
			<td>Check-Out Date</td>
			<td>Room Category</td>
			<td>No of Rooms</td>
			<td>Time Booked</td>
		</thead>
		<tbody>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['username'] ?></td>
			<td><?php echo $row['email'] ?></td>
			<td><?php echo $row['phone_no'] ?></td>
			<td><?php echo $row['checkin'] ?></td>
			<td><?php echo $row['checkout'] ?></td>
			<td><?php echo $row['room_category'] ?></td>
			<td><?php echo $row['no_of_rooms'] ?></td>
			<td><?php echo $row['time'] ?></td>
		</tbody>
		<?php
    # code...
  }
  
}
?>
	</table>


	<table>
		<?php 
include ("config.php");
$sel = "SELECT * FROM details WHERE id='$id',first_name='$first_name',last_name='$last_name',username='$username',email='email',country='$country',phone_no='$phone_no',address='$address',password='$password'";
$result = $conn->query($sel);
if ($result->num_rows > 0){
  while ($row = $result->fetch_assoc()) {
?>
	<h5>Customer Details</h5>
		<thead style="width:100%">
			<td>Id</td>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Username</td>
			<td>Email</td>
			<td>Country</td>
			<td>Phone No</td>
			<td>Address</td>
			<td>Password</td>
		</thead>
		<tbody>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['first_name'] ?></td>
			<td><?php echo $row['last_name'] ?></td>
			<td><?php echo $row['username'] ?></td>
			<td><?php echo $row['email'] ?></td>
			<td><?php echo $row['country'] ?></td>
			<td><?php echo $row['phone_no'] ?></td>
			<td><?php echo $row['address'] ?></td>
			<td><?php echo $row['password'] ?></td>
		</tbody>
		<?php
    # code...
  }
  
}
?>
	</table>

</body>
</html>