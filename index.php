<?php
$username = $_POST['Username'];
$email = $_POST['email'];
$password_1 = $_POST['password_1'];
$password_2 = $_POST['password_2'];

$conn = new mysqli('localhost', 'root', '', 'genesis');
if ($conn->connect_error) {
	echo 'Connection failed<br>';
}
else {
	echo 'connection successfull<br>';
}

$stmt = $conn->prepare('INSERT INTO registration (username, email, password_1,password_2) VALUES (?, ?, ?, ?)');
$stmt->bind_param('ssss', $username,$email,$password_1,$password_2);
$stmt->execute();
echo "registration succesifull";
$stmt->close();
$conn->close();
header('location: index.html');
?>