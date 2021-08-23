<?php
    App::get("database")->insert([
        "names"=>$_POST['name'],
    ],"users");

    header("location: /");
?>