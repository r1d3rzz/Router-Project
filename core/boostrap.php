<?php
    require "vendor/autoload.php";
    require "core/function.php";
    $config=require "config.php";
    $database=new QuaryBuilder($pdo=Connection::make($config['database']));
?>