<?php

class DBController{
    // DB connection properties
    protected $host='localhost';
    protected $user='root';
    protected $pass='root';
    protected $DBName='shopee';


    // connection property 
    public $conn=null;
    //constructor
    public function __construct(){
        $this->conn=mysqli_connect($this->host,$this->user,$this->pass,$this->DBName);
        if($this->conn->connect_error){
            echo 'fail'.$this->conn->connect_error;
        }
        
    }

    public function __destruct(){
        $this->closeConnection();
    }
    public function closeConnection(){
        if($this->conn!=null){
            $this->conn->close();
            $this->conn=null;
        }
    }
}


?>