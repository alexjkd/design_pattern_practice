<?php
/**
 * Created by PhpStorm.
 * User: melon
 * Date: 2018/6/29
 * Time: 8:20 PM
 */

namespace SingletonTemplate;
require_once 'Singleton.php';


class Foo extends Singleton {};
class Bar extends Singleton {};

class SingletonTest extends \PHPUnit\Framework\TestCase
{

    public function testGetInstance()
    {
        $foo1 = Foo::getInstance();
        $foo2 = Foo::getInstance();
        $bar1 = Bar::getInstance();
        $bar2 = Bar::getInstance();

        $this->assertEquals($foo1, $foo2);
        $this->assertEquals($bar1,$bar2);

        $this->assertNotEquals($foo1, $bar1);
        $this->assertNotEquals($foo2, $bar2);
        $this->assertNotEquals($foo1, $bar2);
        $this->assertNotEquals($foo2, $bar1);

        //$this->assertTrue(true);
    }
}
