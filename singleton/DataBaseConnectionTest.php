<?php
/**
 * Created by PhpStorm.
 * User: melon
 * Date: 2018/6/28
 * Time: 9:27 PM
 */

namespace dataBaseConnection;


class dataBaseConnectionTest extends \PHPUnit\Framework\TestCase
{

    public function testGetInstance()
    {
        $connection1 = dataBaseConnection::getInstance();
        $connection2 = dataBaseConnection::getInstance();

        $this->assertEquals($connection1,$connection2);
    }
}