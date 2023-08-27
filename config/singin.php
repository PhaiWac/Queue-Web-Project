<?php
require_once 'db.php';
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$number=$_POST['number'];
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];

if ($pass!=$cpass) return header('location:../admin/usersing.php');
$sql = "INSERT INTO user (firstname, lastname, email, number, password) VALUES ('$fname', '$lname', '$email', '$number', '$pass')";
// ฟังชั่นก์
mysqli_query($conn, $sql) ;
return header('location:../admin/test.php');
?>