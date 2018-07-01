<?php
/**
 * Created by PhpStorm.
 * User: melon
 * Date: 2018/6/30
 * Time: 7:56 PM
 */
require_once 'Subject.php';
require_once 'Observer.php';

class SubjectTest extends PHPUnit\Framework\TestCase
{
    private $station;

    public function __construct(?string $name = null, array $data = [], string $dataName = '')
    {
        $this->station = new Subject();
        parent::__construct($name, $data, $dataName);
    }

    private function regObserverObj($strLable):void
    {
        $obj = new Observer();
        $obj->setLable($strLable);
        $this->station->registerObserver($obj);
    }
    public function testRegisterObserver()
    {
        $obj1= "this is a test string";
        $this->station->registerObserver($obj1);
        $obj2 = $this->station->getObserver('obj1');
        $this->assertNotTrue($obj2 instanceof IObserver);
        $this->assertEquals($this->station->getObserverCount(), 0);

        $this->regObserverObj('obj3');
        $obj4= $this->station->getObserver('obj3');
        $this->assertTrue($obj4 instanceof IObserver);
        $this->assertEquals($this->station->getObserverCount(), 1);
    }

    public function testRemoveObserver()
    {

        $this->regObserverObj('obj3');

        $this->station->removeObserver('unknown');
        $this->assertEquals($this->station->getObserverCount(), 1);

        $this->station->removeObserver('obj3');
        $this->assertEquals($this->station->getObserverCount(), 0);
    }

    public function testNotifyObserver()
    {
        $this->regObserverObj('obj1');
        $this->regObserverObj('obj2');
        $this->regObserverObj('obj3');

        $this->station->notifyObserver('1');
        $obj1 = $this->station->getObserver('obj1');
        $obj2 = $this->station->getObserver('obj2');
        $obj3 = $this->station->getObserver('obj3');

        $this->assertEquals($obj1->getData(), 1);
        $this->assertEquals($obj2->getData(), 1);
        $this->assertEquals($obj3->getData(), 1);

    }
}
