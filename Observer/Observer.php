<?php
/**
 * Created by PhpStorm.
 * User: melon
 * Date: 2018/6/30
 * Time: 8:03 PM
 */

interface IObserver
{
    public function update($data):void;
}


class Observer implements IObserver
{
    private $Lable;
    private $data;

    public function __construct()
    {
        $this->Lable = 'unknown';
    }

    public function update($data): void
    {
        $this->data = $data;

    }

    public function setLable($strLable):void
    {
        $this->Lable = $strLable;
    }

    public function getLable():string
    {
        return $this->Lable;
    }

    public function getData()
    {
        return $this->data;
    }
}