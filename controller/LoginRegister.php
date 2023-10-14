<?php 


class LoginRegister {

    public function ViewLogin() {

    }

    public function ViewRegister() {
        $role = $_GET['role'] ;

        if ($role == "shop" ) {
            include('../view/shop.register.php') ;
        } else {
            include('../view/user.register.php') ;
        } ;
    }

    public function Login() {
        
    }

    public function Register() {

    }

}

$id = $_GET['id'] ;

$func = new LoginRegister ;

switch ($id) {
    case 'view-register' : return $func->ViewRegister() ;
    case 'view-login' : return $func->ViewLogin() ;
}