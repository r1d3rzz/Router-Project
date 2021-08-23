<?php
    $users=$database->selectAll("users");
    
    view("index",["users"=>$users]);
?>