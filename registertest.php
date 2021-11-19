<?php
$username = "root";
$password = "";
$dbname = "genesis";

$conn = new mysqli('localhost', 'root', '', 'genesis');
if ($conn->connect_error) {
	echo 'Connection failed<br>';
}
else {
	echo 'connection successfull<br>';
}
$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$password_1 = $_REQUEST['password_1'];
$password_2 = $_REQUEST['password_2'];

echo $username, $password_2, $password_1, $email;
$stmt ="INSERT INTO genesis (username, email, password_1, password_2) VALUES ('$username', '$email', '$password_1', '$password_2')";

if ($conn->query($stmt) == True){
	header('location: index.php');
}else{
	header('location: register.php');
}

// echo "registration successfull";
$conn->close();

?>