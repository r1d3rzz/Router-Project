<?php
    function dbCollection()
    {
        
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