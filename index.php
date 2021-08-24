<?php
    require "core/boostrap.php";
    Router::load("routes.php")->direct(Request::uri(),$_SERVER['REQUEST_METHOD']);
?>