<?php
/**
 * Created by PhpStorm.
 * User: melon
 * Date: 2018/7/2
 * Time: 8:20 PM
 */
require_once 'Interfaces.php';

class NYIngredientFactory implements IIngredientFactory
{
    public function createClans():int
    {
        printf("This is NY style with Clans for Pizza\n");
        return 10;
    }
    public function createDough()
    {
        // TODO: Implement createDough() method.
    }
    public function createPepperoni()
    {
        // TODO: Implement createPepperoni() method.
    }
    public function createSauce()
    {
        // TODO: Implement createSauce() method.
    }
    public function createVeggies()
    {
        // TODO: Implement createVeggies() method.
    }
}

class NYPizzaStore extends PizzaStore
{
    protected function createPizza($type)
    {
        $ingredientFactory = new NYIngredientFactory();
        if($type === 'Clam')
        {
            return new ClamPizza($ingredientFactory);
        }
    }
}
