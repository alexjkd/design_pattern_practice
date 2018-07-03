<?php
/**
 * Created by PhpStorm.
 * User: melon
 * Date: 2018/7/3
 * Time: 2:50 PM
 */

require_once 'Interfaces.php';

class OnCommand implements Icommand
{
    private $receiver;

    public function __construct($receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->on();
    }

    public function undo()
    {
        $this->receiver->off();
    }
}

class OffCommand implements Icommand
{
    private $receiver;

    public function __construct($receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->off();
    }

    public function undo()
    {
        $this->receiver->on();
    }
}
class NoCommand implements Icommand
{
    public function execute()
    {
        printf("There is no command for this slot\n");
    }
    public function undo()
    {
        // TODO: Implement undo() method.
    }
}
class Light extends Receiver
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function off()
    {
        printf("The light ".$this->name." is off\n");
    }
    public function on()
    {
        printf("The light ".$this->name." is on\n");
    }
}

class RemoteController extends Invoker
{
    private $onCommand;
    private $offCommand;

    public function setCommand($index, $onCommand, $offCommand)
    {
        $this->onCommand = $onCommand;
        $this->offCommand = $offCommand;
    }
    public function onButtonPushed($index)
    {
        $this->onCommand->execute();
    }
    public function offButtonPushed($index)
    {
        $this->offCommand->execute();
    }
}

$noCommand = new NoCommand();
$light1 = new Light('light1');
$light1_on = new OnCommand($light1);
$light1_off = new OffCommand($light1);

$remoteController = new RemoteController();
$remoteController->setCommand(1, $light1_on, $light1_off);
$remoteController->offButtonPushed(1);
$remoteController->onButtonPushed(1);
