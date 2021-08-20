<?php
    class QuaryBuilder
    {
        protected $pdo;
        public function __construct($pdo)
        {
            $this->pdo=$pdo;
        }
        public function selectAll($table)
        {
            $statement=$this->pdo->prepare("select * from $table");
            $statement->execute();
            return $tasks=$statement->fetchAll(PDO::FETCH_OBJ);
        }
    }
?>