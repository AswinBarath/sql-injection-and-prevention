<?php
$uname = $_GET['uname'];
$pass = $_GET['pass'];
$servername = "localhost";
$username = 'root';
$password = '';
$conn = new mysqli($servername, $username, $password, 'testdb');

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM login_details WHERE username = '$uname' AND password = '$pass'";
$result = mysqli_query($conn, $sql);
$check = mysqli_fetch_array($result);

if(isset($check)){
	echo '<h1>success</h1>';
}
else {
	echo '<h1>failure</h1>';
}

?>
