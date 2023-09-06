<?php
session_start();
session_destroy();
return header('location:../abject/login.php');

?>