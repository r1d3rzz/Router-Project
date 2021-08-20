<?php
    require "function.php";
    
    $pdo=dbCollection();

    $tasks=fetchTask($pdo);

    require "index.view.php";
?>