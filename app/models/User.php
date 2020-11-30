<?php

//* 
namespace app\models;

//* Class User extended of ModelObject
class User extends ModelObject
{
    public int $id;
    public string $name;
    public string $email;
    public string $password;
    public string $phone;
    public string $register_at;
    public int $payment_id;
    /**
     * __construct
     *
     * @param  mixed $user
     * @return void
     */
    public function __construct(array $user)
    {
        $this->id = $user['id'];
        $this->name = $user['name'];
        $this->password = $user['password'];
        $this->email = $user['email'];
        $this->register_at = $user['register_at'];
        $this->phone = $user['phone'];
        $this->payment_id = $user['payment_id'];
       
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
     * get_name
     *
     * @return string
     */
    public function get_name(): string
    {
        return $this->name;
    }
    /**
     * get_email
     *
     * @return string
     */
    public function get_email(): string
    {
        return $this->email;
    }
    /**
     * get_password
     *
     * @return string
     */
    public function get_password(): string
    {
        return $this->password;
    }
    /**
     * get_phone
     *
     * @return string
     */
    public function get_phone(): string
    {
        return $this->phone;
    }
    
 /**
     * get_register_at
     *
     * @return string
     */
    public function get_register_at(): string
    {
        return $this->register_at;
    }
    
     /**
     * get_payment_id
     *
     * @return int
     */
    public function get_payment_id(): int
    {
        return $this->payment_id;
    }
    

    /**
     * set_name
     *
     * @param  mixed $name
     * @return void
     */
    public function set_name(string $name)
    {
        $this->name = $name;
    }
/**
     * set_password
     *
     * @param  mixed $password
     * @return void
     */
    public function set_password(string $password)
    {
        $this->password = $password;
    }
 /**
     * set_email
     *
     * @param  mixed $email
     * @return void
     */
    public function set_email(string $email)
    {
        $this->email = $email;
    }
    /**
     * set_phone
     *
     * @param  mixed $phone
     * @return void
     */
    public function set_phone(string $phone)
    {
        $this->phone = $phone;
    }

       /**
     * set_register_at
     *
     * @param  mixed $register_at
     * @return void
     */
    public function set_register_at(string $register_at)
    {
        $this->phone = $register_at;
    }
       /**
     * set_payment_id
     *
     * @param  mixed $payment_id
     * @return void
     */
    public function set_payment_id(int $payment_id)
    {
        $this->phone = $payment_id;
    }
    
    
}