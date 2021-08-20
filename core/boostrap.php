<?php
    require "core/function.php";
    require "core/databases/Connection.php";
    require "core/databases/QuaryBuilder.php";
    $quary=new QuaryBuilder($pdo=Connection::make());
?>