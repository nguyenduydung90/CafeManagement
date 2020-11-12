<?php

namespace App\controller;
use App\model\Beverage;
use App\model\BeverageModel;

class BeverageConttroller
{
protected $beverageModel;
public function __construct()
{
    $this->beverageModel=new BeverageModel();
}

    public function showMenu()
    {
        $beverage=$this->beverageModel->getAll();
//        include_once 'src/view/list.php';
        include_once 'src/view/order.php';
}


    public function delete()
    {
        $id=$_REQUEST['id'];
        $this->beverageModel->delete($id);
        header('location:index.php');
}

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD']=="GET"){
            include_once 'src/view/add.php';
        }else{
            $id=$_REQUEST['id'];
            $beverageName=$_REQUEST['BeverageName'];
            $priceEach=$_REQUEST['priceEach'];
            $file=$_FILES['image']['tmp_name'];
            $path='image/'.$_FILES['image']['name'];
            if (move_uploaded_file($file,$path)){
                echo 'success';
            }else{
                echo 'fail';
            }
            $image=$path=='image/'?'image/cafe_den.jpg':$path;
            $beverage=new Beverage($id,$beverageName,$priceEach,$image);
            $this->beverageModel->add($beverage);
            header('location:index.php');
        }
}



}