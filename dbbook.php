<?php
session_start();
ob_start();
$server_name = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "hotel";
$conn = new mysqli ($server_name,$db_user,$db_pass,$db_name);
if($conn->connect_error) {
	echo "error in connection";
} else {
	// echo "connection successful";
}
if(isset($_POST["submit"])){
	$username=$_POST ["username"];
	$email=$_POST ["email"];
	$phone_no=$_POST ["phone_no"];
	$checkin=$_POST ["checkin"];
	$checkout=$_POST ["checkout"];
	$room_category=$_POST ["room_category"];
	$no_of_rooms=$_POST ["no_of_rooms"];



	$ins="INSERT into booking VALUES(null,'$username','$email','$phone_no','$checkin','$checkout','$room_category','$no_of_rooms',null)";
	$result=$conn->query($ins);
	if($result==true){
		$login="reservation completed";
		echo "reservation completed";

	} else{
		echo "error".$conn->error;
	}
	
	header('location:home.php');



}
?>