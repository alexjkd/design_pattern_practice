<?php
/**
 * Created by PhpStorm.
 * User: melon
 * Date: 2018/7/2
 * Time: 11:35 AM
 */

abstract class Beverage
{
    protected $description='unknown beverage';

    public function getDescription():string
    {
        return $this->description;
    }
    public abstract function cost():float;
}