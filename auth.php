<?php

$dbusername = "root";
$dbpassword = "";
$dbhost = "localhost";
$dbname = "genesis";

$conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
$query = "SELECT * FROM genesis WHERE username='$dbusername' AND passwd='$dbpassword'

if ($conn->error){
   echo "Connection Failed";
}
else {
   echo "Welcome "username"";
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
   $username = $_REQUEST["username"];
   $passwd = $_REQUEST["passwd"];
}
echo $username , $passwd;

$conn->close();
?>