<?php
    require "core/boostrap.php";
    require Router::load("routes.php")->direct(Request::uri(),$_SERVER['REQUEST_METHOD']);
?>