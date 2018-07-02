<?php
/**
 * Created by PhpStorm.
 * User: melon
 * Date: 2018/7/2
 * Time: 2:34 PM
 */

require_once 'Interfaces.php';
require_once 'StarbuzzCoffee.php';

use PHPUnit\Framework\TestCase;

class StarbuzzCoffeeTest extends TestCase
{
    public function testCoffeeWithoutCondiment()
    {
        $coffee1 = new Espresso();
        $this->assertEquals($coffee1->cost(), 1.5);
        $this->assertEquals($coffee1->getDescription(),'Espresso');
    }

    public function testCoffeeWithCondiment()
    {
        $coffee1 = new HouseBlend();
        $coffee1 = new Milk($coffee1);

        $this->assertEquals($coffee1->cost(),0.5); //0.3 + 0.2
        $this->assertEquals($coffee1->getDescription(),'HouseBlend, Milk');

        $coffee1 = new Soy($coffee1);
        $this->assertEquals($coffee1->cost(),0.8); //0.3 + 0.2 + 0.3
        $this->assertEquals($coffee1->getDescription(),'HouseBlend, Milk, Soy');
    }

}
