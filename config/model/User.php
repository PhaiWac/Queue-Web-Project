<?php 

class User extends DB {

    public function EditProfile() {
        session_start() ;

        $Datas = $_POST ?? null ;

        if (!$Datas) return ;

        $NewDatas = [] ;
        
        foreach ($Datas as $key => $value) {
            if (!is_numeric($value)) {
                $value = "'".$value."'" ;
            }; 
            $NewDatas[] = "$key = $value" ;
        }

        $for = implode(",",array_values($NewDatas));

        $sql = "UPDATE user SET $for WHERE email = "."'".$_SESSION['row']['email']."'" ;

        parent::Join() ;

        if (strlen($Datas["username"]) > 0 )  {
            if (mysqli_query($this->conn,$sql)) {
                $_SESSION['row']['email'] = $Datas['email'] ;
                $_SESSION['row']['username'] = $Datas['username'] ;
                $_SESSION['row']['number'] = $Datas['number'] ;
                echo "Success" ;
            }else {
                echo "Error Someting" .$sql ;
            }
        }

        $img = $_FILES['img'] ;

        if ($img) {
            $path = '../img/' ;

            $img_name = $path.basename($img['name']); 

            move_uploaded_file($img['tmp_name'],$img_name) ;

            $sql = "UPDATE user SET `file` = '$img_name' WHERE email = "."'".$_SESSION['row']['email']."'" ;

            if (mysqli_query($this->conn,$sql)) {
                echo "Succes Image" ;
            }else {
                echo "ERROR SOMGTING"."<br>".$sql ;
            }
        }

        return header('location: ../../user/profile.php');
    }

    public function GetDataVerify() {
        $get = parent::Join('resrequest') ;

        $requests = [] ;

        while ($row = mysqli_fetch_assoc($get)) {
            $requests[] = $row ;
        }
        return $requests ;
    }

    public function Register() {
        parent::Join() ;

        $Data = [] ;

        $_POST['role'] =  $_GET['role'] ;

        $key = implode(",",array_keys($_POST));

        $value = "'".implode("','",array_values($_POST))."'" ;

        $sql = "INSERT INTO user ($key) VALUES ($value)" ;


        echo $sql;
        // $result = mysqli_query($this->conn,$sql) ;
        
        // if ($result) return true ;

        // return ;

    }

}


