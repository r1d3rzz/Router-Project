<?php
    require "boostrap.php";
    
    $tasks=$quary->selectAll("tasks");
    
    require "index.view.php";
?>