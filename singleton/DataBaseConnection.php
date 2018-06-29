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
    private static $sql_conn;
    private static $instance;
    private static $counter;

    /**
     * @param mixed $counter
     */
    public function setCounter($counter): void
    {
        self::$counter = $counter;
    }

    /**
     * @return mixed
     */
    public function getCounter()
    {
        return self::$counter;
    }

    private function __construct(){}

    //return obj is a mysql object
    public static function getInstance():dataBaseConnection
    {
        if(self::$instance == null)
        {
            self::$instance = new self();
            self::$sql_conn= mysqli_connect('localhost','root','root');
            printf("Connected to the mysql localhost.\n");
        }
        return self::$instance;
    }
}