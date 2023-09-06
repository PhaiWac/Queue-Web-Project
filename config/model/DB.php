<?php 

class DB {
    public $conn ; 

    public function Join($table = 'user') {
        $this->conn = new mysqli('localhost:3306','root','','project') ;

        if ($this->conn->connect_error) {
            die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM $table" ;

        return mysqli_query($this->conn,$sql)  ;

    }

    public function Update() {

    }

    public function GetData() {

    }

    public function GetRow() {
        $this->Join('user') ;
        
        // $sql = "SELECT * FROM user WHERE email"
    }
}