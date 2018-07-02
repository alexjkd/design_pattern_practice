<?php
/**
 * Created by PhpStorm.
 * User: melon
 * Date: 2018/7/2
 * Time: 8:54 PM
 */

require_once 'NYPizzaStore.php';

use PHPUnit\Framework\TestCase;

class NYPizzaStoreTest extends TestCase
{
    public function testOrderPizza()
    {
        $NYpizzaStore = new NYPizzaStore();
        $NYpizzaStore->order('Clam');

        $this->assertEquals($NYpizzaStore->getPizza()->getClans(),10);
    }
}
