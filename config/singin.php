<?php
require_once 'db.php';
$username=$_POST['username'];
$number=$_POST['number'];
$email=$_POST['email'];
$pass=$_POST['password'];

$sql = "INSERT INTO user (username, number, email, password,role) VALUES ('$username',  '$number','$email', '$pass', 'user')";
// ฟังชั่นก์
mysqli_query($conn, $sql) ;
echo $sql ;
return header('location:../abject/login.php');
?>