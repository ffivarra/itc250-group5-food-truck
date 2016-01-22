<?php

/**
 * Created by PhpStorm.
 * User: ahand
 * Date: 1/21/16
 * Time: 10:15 PM
 */

define('SALES_TAX',0.9);


class Order
{


    private $items = [];
    private $subtotal;


    /**
     * Order constructor.
     * @param $items array
     */
    public function __construct($items)
    {
        $this->items = $items;
    }

    /**
     * @return mixed
     */
    public function getSubTotal(){
        foreach($this->items as $key => $value){
            $this->subtotal += $value;
        }
        return $this->subtotal;
    }

    /**
     * @return mixed
     */
    public function getTotal(){
        return $this->getSubTotal() * SALES_TAX;
    }


}