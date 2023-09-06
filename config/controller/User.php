<?php 

require_once('../model/DB.php');
require_once('../model/User.php');

class UserClass extends User {

    public function View_request_verify() {
       $data = parent::GetDataVerify() ;
       include('../../admin/request.php') ;
    }

    public function EditProfile() {
        return parent::EditProfile() ;
    }

    public function Register() {
        $result = parent::Register() ;

        if ($result) {
            include('../../abject/login.php') ;
            exit() ;
        } 

        // return include('../../abject/sing.php');
    }
} 
$UserClass = new UserClass ; 

$Get = $_GET['id'] ;

if (!$Get) return ; 

switch ($Get) {
    case 'view_request' : return $UserClass->View_request_verify()   ;
    case 'editprofile' : return $UserClass->EditProfile()  ;
    case 'register' : return $UserClass->Register() ;
}