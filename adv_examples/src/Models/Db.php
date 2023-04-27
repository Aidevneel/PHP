<?php

namespace App\Models;

use \PDO;

class Db
{
    private $host = 'localhost';
    private $user = 'neel';
    private $pass = 'home1234';
    private $dbname = 'customers_api';

    public function __construct()
    {
        echo "construct";
    }

    public function connect()
    {
        echo "connecting";
        $conn_str = "mysql:host=$this->host;dbname=$this->dbname";
        $conn = new PDO($conn_str, $this->user, $this->pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connection success";
        return $conn;
    }
}
