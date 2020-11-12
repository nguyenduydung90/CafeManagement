<?php


namespace App\model;


class Order
{
protected $id;
protected $staffID;
protected $orderDate;
protected $status;

    /**
     * Order constructor.
     * @param $staffID
     * @param $orderDate
     * @param $status
     */
    public function __construct($staffID, $orderDate, $status)
    {
        $this->staffID = $staffID;
        $this->orderDate = $orderDate;
        $this->status = $status;
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
    public function getStaffID()
    {
        return $this->staffID;
    }

    /**
     * @param mixed $staffID
     */
    public function setStaffID($staffID): void
    {
        $this->staffID = $staffID;
    }

    /**
     * @return mixed
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @param mixed $orderDate
     */
    public function setOrderDate($orderDate): void
    {
        $this->orderDate = $orderDate;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

}