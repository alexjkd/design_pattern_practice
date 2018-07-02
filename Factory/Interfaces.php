<?php
/**
 * Created by PhpStorm.
 * User: melon
 * Date: 2018/7/2
 * Time: 7:25 PM
 */

Interface IIngredientFactory
{
    public function createDough();
    public function createSauce();
    public function createVeggies();
    public function createPepperoni();
    public function createClans();
}
abstract class Pizza
{
    protected $Dough;
    protected $Sauce;
    protected $Veggies;
    protected $Pepperoni;
    protected $Clans;
    protected $ingredientFactory;

    public abstract function prepare();

    public function __construct($ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function getClans()
    {
        return $this->Clans;
    }

    public function bake()
    {
        printf("baking the pizza...\n");
    }

    public function cut()
    {
        printf("cutting the pizza...\n");
    }

    public function box()
    {
        printf("boxing the pizza...");
    }
}

class ClamPizza extends Pizza
{
    public function prepare()
    {
        // TODO: Implement prepare() method.
        $this->Clans = $this->ingredientFactory->createClans();
    }
}

class DoughPizza extends Pizza
{
    public function prepare()
    {
        // TODO: Implement prepare() method.
    }
}


abstract class PizzaStore
{
    public abstract function createPizza($type);

    private $Pizza;
    public function order($type)
    {
        $this->Pizza = $this->createPizza($type);
        $this->Pizza->prepare();
        $this->Pizza->bake();
        $this->Pizza->cut();
        $this->Pizza->box();
    }

    public function getPizza()
    {
        return $this->Pizza;
    }
}

