<?php


namespace app\models;


class Country extends ModelObject
{
    public int $id;
    public string $name;
    
    
    /**
     * __construct
     *
     * @param  mixed $country
     * @return void
     */
    public function __construct(array $country)
    {
        $this->id = $country['id'];
        $this->name = $country['name'];
        
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
     * set_name
     *
     * @param  mixed $name
     * @return void
     */
    public function set_name(string $name)
    {
        $this->name = $name;
    }
    
}