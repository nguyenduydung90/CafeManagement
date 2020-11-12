<?php
require __DIR__ . "/vendor/autoload.php";
$controller = new \App\controller\BeverageConttroller();
$tableController = new \App\controller\TableController();
$orderdetailController=new \App\controller\OrderdetailsController();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
switch ($page) {
    case 'order':
        $controller->showMenu();
        break;
    case'orderList':
        $orderdetailController->addOrderdetail();
        $orderdetailController->showOrderdetails();
        break;


    default:
        $tableController->showTable();
}
