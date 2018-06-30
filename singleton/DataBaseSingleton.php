<?php
/**
 * Created by PhpStorm.
 * User: Melon Bao
 * Date: 2018/6/28
 * Time: 15:33
 */

namespace DataBaseSingleton;


class DataBaseSingleton
{
    private static $sql_conn;
    private static $instance;
    private static $Lable;

    /**
     * @return mixed
     */
    public static function getLable()
    {
        return self::$Lable;
    }

    /**
     * @param mixed $Lable
     */
    public static function setLable($Lable): void
    {
        self::$Lable = $Lable;
    }

    protected function __construct()
    {
        self::$sql_conn= mysqli_connect('localhost','root','root');
        printf("Connected to the mysql localhost.\n");

    }
    protected function __clone() {}
    public function __wakeup()
    {
        throw new Exception("Cannot unserialize singleton");
    }

    //return obj is a mysql object
    public static function getInstance():DataBaseSingleton
    {
        if(self::$instance === null)
        {
            self::$instance = new static();
        }
        return self::$instance;
    }
}