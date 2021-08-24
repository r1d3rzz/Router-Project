<?php
    use core\App;
    require "vendor/autoload.php";
    require "core/function.php";
    App::bind("config",require "config.php");
    App::bind("database",new QuaryBuilder(
        Connection::make(App::get("config")['database'])));
?>