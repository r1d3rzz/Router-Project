<?php
    require "function.php";
    require "Connection.php";
    
    $pdo=Connection::make();

    $tasks=fetchTask($pdo);

    require "index.view.php";
?>