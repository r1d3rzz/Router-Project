<?php
    require "core/boostrap.php";
    
    $router=new Router();
    
    require "routes.php";

    require $router->direct(trim($_SERVER['REQUEST_URI'],"/"));
?>