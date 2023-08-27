<?php
require_once 'db.php';
$sql='SELECT * FROM user';
$re=$conn->query($sql);
print_r($re);
while($row=$re->fetch_assoc()){
    if ($row["email"]==$_POST["email"] && $row["password"]==$_POST["Password"]) {
        $_SESSION['Logged'] = true ;
        if ($row["role"]=='user') {
            return header('location: ../admin/mainadmin.php');
        } else if ($row["role"]=='res') {

        } else if ($row["role"]=='admin') {

        }
    } 
}
?>