<?php

/**
 * Created by PhpStorm.
 * User: ahand
 * Date: 2/4/16
 * Time: 4:56 PM
 */
class Item
{

    private $name;
    private $description;
    private $price;

    /**
     * Item constructor.
     * @param $name
     * @param $description
     * @param $price
     */
    public function __construct($name, $description, $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
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



}