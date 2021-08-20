<?php
    class Connection
    {
        public static function make()
        {
            try {
                return $pdo=new PDO("mysql:host=localhost;dbname=todo","admin","123456");
            } catch (PDOException $th) {
                echo $th->getMessage();
            }
        }
    }
?>