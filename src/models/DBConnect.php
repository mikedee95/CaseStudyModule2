<?php
namespace App\models;
use PDO;

class DBConnect
{
    public $dsn;
    public $username;
    public $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=restaurantmanagement";
        $this->username = 'root';
        $this->password ='Dx_111895';
    }

    public function connect()
    {
        return new PDO($this->dsn,$this->username,$this->password);
    }
}