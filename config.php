<?php
// session_start();
// ob_start();

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
 //         console.log('connected successfully')
	// </script>";
}

?>