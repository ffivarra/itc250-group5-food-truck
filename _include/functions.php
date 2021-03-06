<?php
/**
 * Created by PhpStorm.
 * User: ahand
 * Date: 2/4/16
 * Time: 5:05 PM
 */


define('PAGE', basename($_SERVER['PHP_SELF']));


/**
 * Display form
 */
function displayForm()
{
    $items = menuItems::getItems();
    $toppings = menuItems::getToppings();
    printf(<<<'FORM'
    <form action="%s" method="post">
    <h3>Choose your flavor</h3>
FORM
, PAGE);


    /** @var menuItems $items */
    foreach ($items as $item) {
        $name = $item->getName();
        $price = $item->getPrice();
        $desc = $item->getDescription();

        printf(<<<'FORM'
        <input type="radio" name="flavor" value="%s" checked> %s : $%s <br><i>%s</i><br>
FORM
            , $name, $name, $price, $desc
        );
    }


    /** Quantity Button */

    echo <<<'FORM'
    <br><br>
    <tr><td><h3>Choose a Quantity</h3></td>
    <br>
    <td><div>
    <span><button id="q-down" class="myButtonQ" type="button" data-index="1-1-4" data-sign="-">-</button></span>
    <input id="quantity" type="number" name="quantity" value="0">
    <span><button id="q-up" class="myButtonQ" type="button" data-index="1-1-4" data-sign="+">+</button></span>
    </div></td></tr><hr><h3>Choose your topping</h3>
FORM;

    /** @var menuItems $toppings */
    foreach ($toppings as $item) {
        $name = $item->getName();
        $price = $item->getPrice();
        $desc = $item->getDescription();

        printf(<<<'FORM'
        <input type="checkbox" name="topping[]" value="%s" > %s : $%s <br><i>%s</i><br>
FORM
            , $name, $name, $price, $desc);
    }

    echo <<<'FORM'
    <br>
    <input class="myButton" name="submit" type="submit" >
</form></section>
FORM;
}


/**
 * @param string $orderDetail
 */
function displayOrder()
{
    $items = menuItems::getItems();
    $quantity = $_POST['quantity'];
    $toppings = menuItems::getToppings();
    $subtotal = 0;


    /**
     *
     *  Display item + price
     *
     */

    echo '<section id="secondcontent">';
    foreach ($items as $item) {
        if ($_POST['flavor'] == $item->getName()) {
            $name = $item->getName();
            $price = $item->getPrice();
            $subtotal += $price * $quantity;
            printf("(%d) %s  <span>$%.2f</span><br>", $quantity, $name, $price * $quantity);
        }
    }

    /**
     *
     * Display each topping
     *
     */

    foreach ($toppings as $topping) {
        foreach ($_POST['topping'] as $orderTop) {
            if ($orderTop == $topping->getName()) {
                $name = $topping->getName();
                $price = $topping->getPrice();
                $subtotal += $price;
                printf(" + %s  <span>$%.2f</span><br>", $name, $price);
            }
        }
    }

    /**
     *
     *
     * Display order totals
     *
     */

    echo "<hr>";
    printf("SUBTOTAL  <span>$%.2f</span><br>", $subtotal);
    printf("TAX  <span>$%.2f</span><br>", $subtotal * .09);
    printf("TOTAL  <span>$%.2f</span><br>", $subtotal * 1.09);
    echo "<section>";
}
