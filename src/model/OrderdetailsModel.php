<?php


namespace App\model;


class OrderdetailsModel
{
protected $database;
public function __construct()
{
    $db=new DBconnect();
    $this->database=$db->connect();
}

    public function getAllOrderdetails()
    {
        $sql="SELECT * FROM orderdetails";
        $stmt=$this->database->query($sql);
        $data=$stmt->fetchAll();
        $orderdetails=[];
        foreach ($data as $item){
            $orderdetail=new Orderdetails($item['orderID'],$item['BeverageID'],$item['BeverageName'],$item['PriceEach'],$item['image']);
            array_push($orderdetails,$orderdetail);
        }
        return $orderdetails;
}

    public function add($orderdetail)
    {
        $sql="INSERT INTO `orderdetails`( `orderID`,`BeverageID`, `BeverageName`, `PriceEach`, `image`) VALUES(:id,:BeverageID,:BeverageName,:PriceEach,:image)";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':id',$orderdetail->getId());
        $stmt->bindParam(':BeverageID',$orderdetail->getBeverageID());
        $stmt->bindParam(':BeverageName',$orderdetail->getBeverageName());
        $stmt->bindParam(':PriceEach',$orderdetail->getPriceEach());
        $stmt->bindParam(':image',$orderdetail->getImg());
        $stmt->execute();

}
}