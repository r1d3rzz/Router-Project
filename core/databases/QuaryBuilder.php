<?php
class QuaryBuilder
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from $table");
        $statement->execute();
        return $tasks = $statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function insert($dataArr, $table)
    {
        $getdataKeys = array_keys($dataArr);
        $cols = implode(",", $getdataKeys);
        $questionMarks = "";
        foreach ($getdataKeys as $key) {
            $questionMarks .= "?,";
        }
        $questionMarks = rtrim($questionMarks, ",");
        $sql = "insert into $table ($cols) values ($questionMarks)";
        $statement = $this->pdo->prepare($sql);
        $getdataValues = array_values($dataArr);
        $statement->execute($getdataValues);
    }

    public function delete($data, $table)
    {
        $sql = "DELETE FROM $table WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$data['id']]);
    }
}
