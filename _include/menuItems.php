<?php

/**
 * Created by PhpStorm.
 * User: ahand
 * Date: 2/4/16
 * Time: 5:12 PM
 */
class menuItems extends Item
{
    /**
     *  MENU ITEMS
     *
     *  Main Menu
     *      'Chocolate','Rich Chocolatey Goodness',2.49
     *      'Banana','Right Off The Tree',2.99
     *      'Vanilla','Plain Ol' Vanilla',1.99
     *
     *  Toppings:
     *      'Nuts', 1.09
     *      'Fudge', 1.49
     *      'Sprinkles', 0.25
     */

    public static function getItems()
    {
        return [
            $chocolate = new Item('Chocolate', 'Rich Chocolaty Goodness', 2.49),
            $banana = new Item('Banana', 'Right Off The Tree', 2.99),
            $vanilla = new Item('Vanilla', 'Plain Ol\' Vanilla', 1.99)
        ];
    }

    public static function getToppings()
    {
        return [
            $nuts = new Item('Nuts', 'Crunchy.', 0.39),
            $sprinkles = new Item('Sprinkles', 'Colorful Flakes.', 0.24),
            $fudge = new Item('Fudge', 'Brown and Sugary', 0.99)
        ];
    }
}
