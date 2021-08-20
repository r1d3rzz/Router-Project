<?php
    try {
        $pdo=new PDO("mysql:host=localhost;dbname=todo","admin","123456");
    } catch (PDOException $th) {
        echo $th->getMessage();
    }
?>