<?php


namespace App\controller;


use App\model\Beverage;
use App\model\OrderModel;

class OrderController
{
protected $orderModel;
public function __construct()
{
    $this->orderModel=new OrderModel();
}

    public function showOrder()
    {
        $this->orderModel->getAllOrder();
        include_once 'src/view/orderList.php';
}

//    public function addOrder()
//    {
//        if ($_SERVER['REQUEST_METHOD']=='GET'){
//            include_once 'src/view/test.php';
//        }else{
//            $id=$_REQUEST['id'];
//               $beverage=new Beverage()
//        }
//}
}