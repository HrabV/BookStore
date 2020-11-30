<?php

//* 
namespace app\models;

//* Class Order extended of ModelObject
class Payment extends ModelObject
{
    public int $id;
    public string $card_number;
    public string $card_expired;
    public int $discount_card;
    
    /**
     * __construct
     *
     * @param  mixed $payment
     * @return void
     */
    public function __construct(array $payment)
    {
        $this->id = $payment['id'];
        $this->card_namber = $payment['card_number'];
        $this->card_expired = $payment['card_expired'];
        $this->discount_card = $payment['discount_card'];
       
       
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
     * get_card_number
     *
     * @return string
     */
    public function get_card_number(): string
    {
        return $this->card_number;
    }
    /**
     * get_card_expired
     *
     * @return string
     */
    public function get_card_expired(): string
    {
        return $this->card_expired;
    }
    /**
     * get_discount_card
     *
     * @return int
     */
    public function get_discount_card(): int
    {
        return $this->discount_card;
    }
   
    
    /**
     * set_card_number
     *
     * @param  mixed $card_number
     * @return void
     */
    public function set_card_number(string $card_number)
    {
        $this->card_number = $card_number;
    }
/**
     * set_card_expired
     *
     * @param  mixed $card_expired
     * @return void
     */
    public function set_card_expired(string $card_expired)
    {
        $this->card_expired = $card_expired;
    }
 /**
     * set_discount_card
     *
     * @param  mixed $discount_card
     * @return void
     */
    public function set_discount_card(int $discount_card)
    {
        $this->discount_card = $discount_card;
    }
   
    
}