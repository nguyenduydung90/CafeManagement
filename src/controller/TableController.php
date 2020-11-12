<?php


namespace App\controller;




use App\model\TableModel;

class TableController
{
protected $tableModel;
public function __construct()
{
    $this->tableModel=new TableModel();
}

    public function showTable()
    {
        $tables=$this->tableModel->getAllTable();
        include_once 'src/view/tables.php';
}
}