<?php 

require_once('../model/DB.php');
require_once('../model/User.php');

$UserClass = new User ; 

$Get = $_GET['id'] ;

if (!$Get) return ; 

switch ($Get) {
    case 'editprofile' : return $UserClass->EditProfile()  ;
}