<?php


namespace App\model;


class BeverageModel
{
protected $database;
public function __construct()
{
    $db=new DBconnect();
    $this->database=$db->connect();
}

    public function getAll()
    {
        $sql="SELECT * FROM Beverage";
        $stmt=$this->database->query($sql);
        $data=$stmt->fetchAll();
        $beverages=[];
        foreach ($data as $item){
            $beverage=new Beverage($item['BeverageName'],$item['PriceEach'],$item['image']);
            $beverage->setId($item['Beverage_ID']);
            array_push($beverages,$beverage);
        }return $beverages;
}

    public function delete($id)
    {
        $sql="DELETE FROM Beverage WHERE Beverage_ID=:id";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
}

    public function getId($id)
    {
        $sql="SELECT * FROM Beverage WHERE Beverage_ID=:id";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $item=$stmt->fetch();
        $beverage=new Beverage($item['BeveragaName'],$item['PriceEach'],$item['image']);
        $beverage->setId($item['Beverage_ID']);
        return $beverage;
}

    public function add($beverage)
    {
        $sql="INSERT INTO Beverage(`Beverage_ID`,`BeverageName`,`PriceEach`,`image`) VALUES ':id,:BeverageName,:price,:img'";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':id',$beverage->getId());
        $stmt->bindParam(':BeverageName',$beverage->getBeverageName());
        $stmt->bindParam(':price',$beverage->getPriceEach());
        $stmt->bindParam(':img',$beverage->getImg());
        $stmt->execute();

}

    public function getBeverageById($id)
    {
        $sql="SELECT * FROM Beverage WHERE Beverage_ID=$id";
        $stmt=$this->database->prepare($sql);
        $stmt->execute();
        $data=$stmt->fetchAll();
        $berages=[];
        foreach ($data as $item){
            $beverage=new Beverage($item['BeverageName'],$item['PriceEach'],$item['image']);
            $beverage->setId($item['Beverage_ID']);
            array_push($berages,$beverage);
        }
        return $berages;
}
}