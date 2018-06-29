<?php
/**
 * Created by PhpStorm.
 * User: melon
 * Date: 2018/6/28
 * Time: 9:27 PM
 */

namespace dataBaseConnection;
require_once 'DataBaseConnection.php';


class dataBaseConnectionTest extends \PHPUnit\Framework\TestCase
{

    public function testGetInstance()
    {
        $connection1 = dataBaseConnection::getInstance();
        $connection2 = dataBaseConnection::getInstance();
        $connection1->setCounter(1);
        $connection2->setCounter(2);

        $this->assertEquals($connection1,$connection2);

        $connection3 = clone $connection2;
        $connection3->setCounter(3);

        $this->assertNotEquals($connection1->getCounter(),1);
        $this->assertNotEquals($connection2->getCounter(),2);
        $this->assertEquals($connection3->getCounter(),3);
        $this->assertEquals($connection2,$connection3);
    }
}