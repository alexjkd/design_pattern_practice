<?php
/**
 * Created by PhpStorm.
 * User: melon
 * Date: 2018/7/3
 * Time: 2:45 PM
 */

Interface Icommand
{
    public function execute();
    public function undo();
}

abstract class Invoker
{
    public abstract function setCommand($index, $onCommand, $offCommand);
    public abstract function onButtonPushed($index);
    public abstract function offButtonPushed($index);
}

abstract class Receiver
{
    public abstract function on();
    public abstract function off();
}