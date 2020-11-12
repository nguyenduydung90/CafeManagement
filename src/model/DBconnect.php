<?php
namespace App\model;
use PDO;
class DBconnect
{
protected $dsn;
protected $user;
protected $passWord;
public function __construct()
{
    $this->dsn='mysql:host=localhost;dbname=cafeShop;charset=utf8';
    $this->user='root';
    $this->passWord='123456@Abc';
}

    public function connect()
    {
        return new PDO($this->dsn,$this->user,$this->passWord);
}
}