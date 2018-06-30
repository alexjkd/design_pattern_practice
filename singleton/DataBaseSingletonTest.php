<?php
/**
 * Created by PhpStorm.
 * User: melon
 * Date: 2018/6/28
 * Time: 9:27 PM
 */

namespace DataBaseSingleton;
require_once 'DataBaseSingleton.php';


class DataBaseSingletonTest extends \PHPUnit\Framework\TestCase
{

    public function testGetInstance()
    {
        $connection1 = DataBaseSingleton::getInstance();
        $connection2 = DataBaseSingleton::getInstance();
        $connection1->setLable("Database1");
        $connection2->setLable("Database2");

        $this->assertEquals($connection1,$connection2);
        $this->assertNotEquals($connection1->getLable(),"Database1");
        $this->assertEquals($connection2->getLable(),"Database2");
    }
}