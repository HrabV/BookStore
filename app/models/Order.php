<?php

//* 
namespace app\models;

//* Class Order extended of ModelObject
class Order extends ModelObject
{
    public int $id;
    public string $order_begin;
    public string $order_end;
    public int $user_id;
    public float $bill;
    /**
     * __construct
     *
     * @param  mixed $order
     * @return void
     */
    public function __construct(array $order)
    {
        $this->id = $order['id'];
        $this->order_begin = $order['order_begin'];
        $this->book_end = $order['book_end'];
        $this->user_id = $order['user_id'];
        $this->bill = $order['bill'];
       
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
     * get_order_begin
     *
     * @return string
     */
    public function get_order_begin(): string
    {
        return $this->order_begin;
    }
    /**
     * get_order_end
     *
     * @return string
     */
    public function get_order_end(): string
    {
        return $this->order_end;
    }
    /**
     * get_user_id
     *
     * @return int
     */
    public function get_user_id(): int
    {
        return $this->user_id;
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
     * set_order_begin
     *
     * @param  mixed $order_begin
     * @return void
     */
    public function set_order_begin(string $order_begin)
    {
        $this->order_begin = $order_begin;
    }
/**
     * set_order_end
     *
     * @param  mixed $order_end
     * @return void
     */
    public function set_order_end(string $order_end)
    {
        $this->order_end = $order_end;
    }
 /**
     * set_user_id
     *
     * @param  mixed $user_id
     * @return void
     */
    public function set_user_id(int $user_id)
    {
        $this->user_id = $user_id;
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