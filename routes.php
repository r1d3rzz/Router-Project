<?php
    $router->get("","controllers/indexController.php");
    $router->get("about","controllers/aboutController.php");
    $router->get("order","controllers/orderController.php");
    $router->post("names","controllers/nameController.php");
?>