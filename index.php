<?php
/**
 * Created by PhpStorm.
 * User: ahand
 * Date: 2/4/16
 * Time: 5:04 PM
 */


session_start();
include_once '_include/functions.php';
include_once '_include/Item.php';
include_once '_include/menuItems.php';
include '_include/header.html';




if(isset($_POST['submit'])){
    displayForm();
    displayOrder();


}else{
    displayForm();

}


include '_include/footer.html';







