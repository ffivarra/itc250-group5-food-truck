<?php

/**
 * Created by PhpStorm.
 * User: ahand
 * Date: 1/21/16
 * Time: 10:01 PM
 */
 
 //array to hold items
$items[] = new Item("Burrito", "Includes awesome sauce!", 7.95);
$items[] = new Item("Taco", "Includes cheese and lettuce", 3.95);
$items[] = new Item("Fried Ice Cream", "Includes free sprinkles!", 2.95);


class Item
{
    public $name = '';
    public $description = '';
    public $price = 0;
    public $quantity = '';

    /**
     * Item constructor.
     * @param $name
     * @param $description
     * @param $price
     * @param $quantity
     */
    public function __construct($name, $description, $price, $quantity)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }



}