<?php
    require "function.php";
    require "Connection.php";
    require "QuaryBuilder.php";
    $quary=new QuaryBuilder($pdo=Connection::make());
?>