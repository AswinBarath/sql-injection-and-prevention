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

$stmt = $dbConnection->prepare(SELECT * FROM login_details WHERE username = '$uname' AND password = '$pass');
$stmt->bind_param('s', $uname);
$stmt->bind_param('s', $pass);
$stmt->execute();
$check = mysqli_fetch_array($result);
$result = $stmt->get_result();

if(isset($check)){
	echo 'success';
}
else {
	echo 'failure';
}

?>
