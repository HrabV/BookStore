<?php

//* 
namespace app\models;

//* Class Order_items extended of ModelObject
class Order_items extends ModelObject
{
    public int $id;
    public int $order_id;
    public int $book_id;
    public int $count;
    public float $bill;
    /**
     * __construct
     *
     * @param  mixed $book
     * @return void
     */
    public function __construct(array $order_items)
    {
        $this->id = $order_items['id'];
        $this->order_id = $order_items['order_id'];
        $this->book_id = $order_items['book_id'];
        $this->count = $order_items['count'];
        $this->bill = $order_items['bill'];
       
    }
    /**
     * get_id
     *
     * @return int
     */
    public function get_id(): int
    {
        return $this->id;
    }
    /**
     * get_order_id
     *
     * @return int
     */
    public function get_order_id(): int
    {
        return $this->order_id;
    }
    /**
     * get_book_id
     *
     * @return int
     */
    public function get_book_id(): int
    {
        return $this->book_id;
    }
    /**
     * get_count
     *
     * @return int
     */
    public function get_count(): int
    {
        return $this->count;
    }
    /**
     * get_bill
     *
     * @return float
     */
    public function get_bill(): float
    {
        return $this->bill;
    }
    
    /**
     * set_order_id
     *
     * @param  mixed $order_id
     * @return void
     */
    public function set_order_id(int $order_id)
    {
        $this->order_id = $order_id;
    }
    /**
     * set_book_id
     *
     * @param  mixed $book_id
     * @return void
     */
    public function set_book_id(int $book_id)
    {
        $this->book_id = $book_id;
    }
/**
     * set_count
     *
     * @param  mixed $count
     * @return void
     */
    public function set_count(int $count)
    {
        $this->count = $count;
    }

    /**
     * set_bill
     *
     * @param  mixed $bill
     * @return void
     */
    public function set_bill(float $bill)
    {
        $this->bill = $bill;
    }
    
    
}
