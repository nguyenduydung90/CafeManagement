<?php


namespace App\controller;




use App\model\BeverageModel;
use App\model\OrderdetailsModel;

class OrderdetailsController
{
private $orderdetailsModel;
private $beverageModer;
public function __construct()
{
    $this->orderdetailsModel=new OrderdetailsModel();
    $this->beverageModer=new BeverageModel();
}

    public function showOrderdetails()
    {
        $orderdetails=$this->orderdetailsModel->getAllOrderdetails();
        include_once 'src/view/orderList.php';
}

    public function addOrderdetail()
    {
        $id=$_REQUEST['id'];
        $data=$this->beverageModer->getBeverageById($id);
        var_dump($data);
        die();
        $this->orderdetailsModel->add($data);
}
}