<?php
require_once 'db.php';
$sql='SELECT * FROM user';
$re=$conn->query($sql);

session_start() ;

while($row=$re->fetch_assoc()){
    if ($row["email"]==$_POST["email"] && $row["password"]==$_POST["Password"]) {
        $_SESSION['Logged'] = true ;
        $_SESSION['row'] = $row ;
        if ($row["role"]=='user') {
            return header('location: ../user/main.php');
        } else if ($row["role"]=='res') {
            return header('location: ../res/mainres.php');
        } else if ($row["role"]=='admin') {
            return header('location: ../admin/mainadmin.php');
        }
    } 
}
?>