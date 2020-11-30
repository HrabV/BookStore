<?php

//* 
namespace app\models;

//* Class Publishing_house extended of ModelObject
class Publishing_house extends ModelObject
{
    public int $id;
    public string $name;
    public string $description;
    public string $email;
    public string $website;
    /**
     * __construct
     *
     * @param  mixed $publishing_house
     * @return void
     */
    public function __construct(array $publishing_house)
    {
        $this->id = $publishing_house['id'];
        $this->name = $publishing_house['name'];
        $this->description = $publishing_house['description'];
        $this->email = $publishing_house['email'];
        $this->website = $publishing_house['website'];
       
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
     * get_description
     *
     * @return string
     */
    public function get_description(): string
    {
        return $this->description;
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
     * get_website
     *
     * @return string
     */
    public function get_website(): string
    {
        return $this->website;
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
     * set_description
     *
     * @param  mixed $description
     * @return void
     */
    public function set_description(string $description)
    {
        $this->description = $description;
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
     * set_website
     *
     * @param  mixed $website
     * @return void
     */
    public function set_website(string $website)
    {
        $this->website = $website;
    }
    
    
}