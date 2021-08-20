<?php
    function dbCollection()
    {
        try {
            return $pdo=new PDO("mysql:host=localhost;dbname=todo","admin","123456");
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
    function fetchTask($pdo)
    {
        $statement=$pdo->prepare("select * from tasks");
        $statement->execute();
        return $tasks=$statement->fetchAll(PDO::FETCH_OBJ);
    }

    function dd($data)
    {
        echo "<pre>";
        die(var_dump($data));
    }
?>