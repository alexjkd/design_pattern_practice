<?php
/**
 * Created by PhpStorm.
 * User: melon
 * Date: 2018/6/30
 * Time: 7:42 PM
 */

interface ISubject
{
    public function registerObserver($observer):bool;
    public function removeObserver($observer):void;
    public function notifyObserver($observerList):void;
}

class Subject implements ISubject
{
    public $observerList;

    public function __construct()
    {
        $this->observerList = array();
    }

    public function registerObserver($observer): bool
    {
        if(!($observer instanceof Observer))
        {
            printf("The object is not observer!\n");
            return false;
        }
        $this->observerList[] = $observer;

        return true;
    }
    public function removeObserver($strLable): void
    {
        if(empty($this->observerList))
        {
            printf("the observer list is empty\n");
            return ;
        }
        foreach($this->observerList as $key=>$val)
        {
            if(is_object($val) && $val->getLable()===$strLable)
            {
                unset($this->observerList[$key]);
                break;
            }
        }
    }
    public function notifyObserver($data): void
    {
        foreach($this->observerList as $key=>$val)
        {
            if($val instanceof IObserver)
            {
                $val->update($data);
            }
        }

    }
    public function getObserverCount():int
    {
        return count($this->observerList);
    }

    public function getObserver($strLable)
    {
        $ret = null;

        if(empty($this->observerList))
        {
            printf("the observer list is empty");
            return $ret;
        }

        foreach($this->observerList as $key=>$val)
        {
            if(is_object($val) && $val->getLable()===$strLable)
            {
                $ret = ($this->observerList[$key]);
                break;
            }
        }
        return $ret;
    }
}