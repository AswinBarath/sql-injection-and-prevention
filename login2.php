<?php
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$servername = "localhost";
$username = 'root';
$password = '';
$conn = new mysqli($servername, $username, $password, 'test');

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM login_details WHERE username = '$uname' AND password = '$pass'";
$result = mysqli_query($conn, $sql);
$check = mysqli_fetch_array($result);

if(isset($check)){
	echo 'success';
}
else {
	echo 'failure';
}

?>
