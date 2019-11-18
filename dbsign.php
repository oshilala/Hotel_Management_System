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
	$first_name=$_POST ["first_name"];
	$username=$_POST ["username"];
	$country=$_POST ["country"];
	$last_name=$_POST ["last_name"];
	$email=$_POST ["email"];
	$phone_no=$_POST ["phone_no"];
	$address=$_POST ["address"];
	$password=$_POST ["password"];
	$confirmpassword=$_POST ["confirmpassword"];


if($password!=$confirmpassword){
	echo "<script>
	alert ('password mismatched')
	</script>";
	header('location:sign.php');
}else {
	$ins="INSERT into details VALUES(null,'$first_name','$last_name','$username','$email','$country','$phone_no','$address','$password',null)";
	$result=$conn->query($ins);
	if($result==true){
		$login="record inserted successfully";
		echo "record inserted successfully";

	} else{
		echo "error".$conn->error;
	}
	header('location:log.php');

}

}
?>