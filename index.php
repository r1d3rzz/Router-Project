<?php
    require "core/boostrap.php";

    require Router::load("routes.php")->direct(Request::uri());
?>