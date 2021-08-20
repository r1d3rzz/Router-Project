<?php
    $tasks=$quary->selectAll("tasks");
    require "views/index.view.php";
?>