<?php
    try {
        $pdo=new PDO("mysql:host=localhost;dbname=todo","admin","123456");
    } catch (PDOException $th) {
        echo $th->getMessage();
    }

    $statement=$pdo->prepare("select * from tasks");
    $statement->execute();
    $tasks=$statement->fetchAll(PDO::FETCH_OBJ);

    require "index.view.php";
?>