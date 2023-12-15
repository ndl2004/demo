<?php
class database {
    private $host='localhost';
    private $username='root';
    private $password ='';
    private $dbname='nguyendinhloi';

    public $conn;

    function __construct()
    {
        $this->conn = new mysqli($this->host,$this->username,$this->password,$this->dbname);

        if($this->conn->connect_error){
            die("connect failed: " . $this->conn->connect_error);
        }else{
        echo "ket noi thanh cong";
        }
    }
}
?>