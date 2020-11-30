<?php


namespace app\models;


class Language extends ModelObject
{
    public int $id;
    public string $name;
    
    
    /**
     * __construct
     *
     * @param  mixed $language
     * @return void
     */
    public function __construct(array $language)
    {
        $this->id = $language['id'];
        $this->name = $language['name'];
        
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