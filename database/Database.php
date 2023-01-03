<?php

class Database{
    private $dbHost = "localhost";
    private $userName = "root";
    private $password = "";
    private $dbName = "portfolio";

    public $con;

    public function __construct()
    {
       $this->con = new mysqli($this->dbHost, $this->userName, $this->password, $this->dbName);

       if(!$this->con){
           echo "db connectin error";
       }
    }
}
new Database();


