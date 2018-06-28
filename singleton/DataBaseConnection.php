<?php
/**
 * Created by PhpStorm.
 * User: Melon Bao
 * Date: 2018/6/28
 * Time: 15:33
 */

namespace dataBaseConnection;


class dataBaseConnection
{
    private static $conn;

    private function __construct()
    {
        $this->conn= mysqli_connect('localhost','root','');
        printf("data base connection has been created<br/>");
    }

    //return obj is a mysql object
    public static function getInstance()
    {
        if(!(self::$conn instanceof self))
        {
            self::$conn = new self;
        }
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
        trigger_error("Clone is not allowed!");
    }
}