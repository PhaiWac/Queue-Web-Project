<?php 

// session_start() ;

$conn = new mysqli('localhost:3306','root','','teenoy_db') ;

if ($conn->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
}
