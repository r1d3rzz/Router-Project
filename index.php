<?php
    require "core/boostrap.php";
    
    $tasks=$quary->selectAll("tasks");
    
    require "index.view.php";
?>