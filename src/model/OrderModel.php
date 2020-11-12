<?php


namespace App\model;


class OrderModel
{
protected $database;
public function __construct()
{
    $db=new DBconnect();
    $this->database=$db->connect();
}

    public function getAllOrder()
    {
        $sql="SELECT * FROM orders";
        $stmt=$this->database->query($sql);
        $data=$stmt->fetchAll();
        $orders=[];
        foreach ($data as $item){
            $order=new Order($item['staffID'],$item['orderDate'],$item['status']);
            $order->setId($item['orderID']);
            array_push($orders,$order);
        }return $orders;
}

    public function addOrder($order)
    {
        $sql="INSERT INTO `orders`( `staffID`, `orderDate`, `status`) VALUES (:staffID,:orderDate,:status)";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':staffID',$order->getStaffID());
        $stmt->bindParam(':orderDate',$order->getOrderDate());
        $stmt->bindParam(':orderDate',$order->getStatus());
        $stmt->execute();
}

    public function getIDOrder($id)
    {
        $sql = "SELECT * FROM orders WHERE orderID=:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $data = $stmt->fetch();
        foreach ($data as $item) {
            $order = new Order($item['staffID'], $item['orderDate'], $item['status']);
            $order->setId($item['orderID']);
            return $order;
        }
    }

    public function deleteOrder($id)
    {
        $sql="DELETE FROM orders WHERE orderID=:id";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
    }
}