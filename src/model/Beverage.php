<?php


namespace App\model;


class Beverage
{
protected $id;
protected $beverageName;
protected $priceEach;
protected $img;

    /**
     * Beverage constructor.
     * @param $beverageName
     * @param $priceEach
     * @param $img
     */
    public function __construct($beverageName, $priceEach, $img)
    {
        $this->beverageName = $beverageName;
        $this->priceEach = $priceEach;
        $this->img = $img;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getBeverageName()
    {
        return $this->beverageName;
    }

    /**
     * @param mixed $beverageName
     */
    public function setBeverageName($beverageName): void
    {
        $this->beverageName = $beverageName;
    }

    /**
     * @return mixed
     */
    public function getPriceEach()
    {
        return $this->priceEach;
    }

    /**
     * @param mixed $priceEach
     */
    public function setPriceEach($priceEach): void
    {
        $this->priceEach = $priceEach;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img): void
    {
        $this->img = $img;
    }


}