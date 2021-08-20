<?php
    require "core/Router.php";
    require "core/Request.php";
    require "core/function.php";
    $config=require "config.php";
    require "core/databases/Connection.php";
    require "core/databases/QuaryBuilder.php";
    $quary=new QuaryBuilder($pdo=Connection::make($config['database']));
?>