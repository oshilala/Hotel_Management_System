<?php
//connection statement//
session_start();
ob_start();

$server_name = "localhost";
$database_user = "root";
$database_password ="";
$database_name ="hotel";

$conn = new mysqli($server_name,$database_user,$database_password,$database_name);
if ($conn->connect_error) {
	die("connection error".$conn->connect_error);
}
else{
	// echo "<script>
 //         alert('connected successfully')
	// </script>";
}

if (isset($_POST["book"])) {
	$mail =$_POST["email"] or $_POST["username"];
	$password=$_POST["password"];
	// $username=$_POST["username"];
	$sel ="SELECT * FROM details WHERE email='$mail'or username='$mail' and password='$password'";
	$result = $conn->query($sel);
	if ($result->num_rows > 0) {
		# code...
		//echo "you are now logged In successfully";
		echo "<script> alert ('you are now logged in successfully')</script>";

		while ($row = $result->fetch_assoc()) {
		# code...
	echo $_SESSION["id"] = $row['id'];
	echo $_SESSION["username"] = $row['username'];
    echo $_SESSION["email"] = $row['email'];
    echo $_SESSION["phone_no"] = $row['phone_no'];

 //        $_SESSION["id"] = $row['id'];
	// $_SESSION["email"] = $row['email'];
 //     $_SESSION["username"] = $row['username'];
     // $_SESSION['fullname'] = $row['fullname'];
 //    if ('email'==="damilolabanjo53@gmail.com" or 'username'==="oshilala" and 'password'==="lala") {
	// 	# code...
	// 	 header('location:admin.php');

	// }
	
     header('location:book.php');

	// IS USED TO FETCH INFORMATION FROM THE DATABASE TO THE PAGE YPOU ARE REFERRRING TO//


	}
	}
	else{
		echo "Error".$conn->error;
	}

}


?>