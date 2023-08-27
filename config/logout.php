<?php
session_start();
session_destroy();
return header('location:../admin/test.php');

?>