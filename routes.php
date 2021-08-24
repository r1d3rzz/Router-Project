<?php
    $router->get("","PagesController@home");
    $router->get("about","PagesController@about");
    $router->get("order","PagesController@order");
    $router->post("names","PagesController@createUsers");
?>