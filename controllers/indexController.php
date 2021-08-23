<?php
    $users=App::get("database")->selectAll("users");
    
    view("index",["users"=>$users]);
?>