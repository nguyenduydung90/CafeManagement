<?php


namespace App\model;




class TableModel
{
protected $database;
public function __construct()
{
    $db=new DBconnect();
    $this->database=$db->connect();
}

    public function getAllTable()
    {
        $sql="SELECT * FROM `tables`";
        $stmt=$this->database->query($sql);
        $data=$stmt->fetchAll();
        $tables=[];
        foreach ($data as $item){
            $table=new Tables($item['TableName'],$item['Status']);
            $table->setId($item['Table_ID']);
            array_push($tables,$table);
        }return $tables;
        var_dump($tables);
        die();
}
}