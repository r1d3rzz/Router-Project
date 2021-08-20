<?php
    class Connection
    {
        public static function make($config)
        {
            try {
                return $pdo=new PDO("{$config['mysql']};
                                dbname={$config['dbname']}",
                                        "{$config['username']}",
                                            "{$config['password']}");
            } catch (PDOException $th) {
                echo $th->getMessage();
            }
        }
    }
?>