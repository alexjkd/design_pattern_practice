<?php
/**
 * Created by PhpStorm.
 * User: melon
 * Date: 2018/7/2
 * Time: 11:47 AM
 */

require_once 'Interfaces.php';

class HouseBlend extends Beverage
{
    public function __construct()
    {
        $this->description = 'HouseBlend';
    }

    public function cost(): float
    {
        // TODO: Implement cost() method.
        return 0.3;
    }
}

class DarkRost extends Beverage
{
    public function __construct()
    {
        $this->description = 'DarkRost';
    }

    public function cost(): float
    {
        // TODO: Implement cost() method.
        return 0.4;
    }
}

class Espresso extends  Beverage
{
    public function __construct()
    {
        $this->description = 'Espresso';
    }

    public function cost(): float
    {
        // TODO: Implement cost() method.
        return 1.5;
    }
}

class Decaf extends Beverage
{
    public function __construct()
    {
        $this->description = 'Decaf';
    }

    public function cost(): float
    {
        // TODO: Implement cost() method.
        return 0.6;
    }
}

class Milk extends Beverage
{
    private $bever;

    public function __construct($bever)
    {
        $this->bever = $bever;
        $this->description = 'Milk';
    }

    public function cost(): float
    {
        // TODO: Implement cost() method.
        return $this->bever->cost() + 0.2;
    }

    public function getDescription(): string
    {
        // TODO: Implement getDescription() method.
        return $this->bever->getDescription() . ', Milk';
    }
}

class Soy extends Beverage
{
    private $bever;

    public function __construct($bever)
    {
        $this->bever = $bever;
        $this->description = 'Soy';
    }

    public function cost(): float
    {
        // TODO: Implement cost() method.
        return $this->bever->cost() + 0.3;
    }

    public function getDescription(): string
    {
        // TODO: Implement getDescription() method.
        return $this->bever->getDescription() . ', Soy';
    }
}
