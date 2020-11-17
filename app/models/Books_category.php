<?php


namespace app\models;


class Books_category extends ModelObject
{
    public int $id;
    public string $name;
    
    
    /**
     * __construct
     *
     * @param  mixed $books_category
     * @return void
     */
    public function __construct(array $books_category)
    {
        $this->id = $books_category['id'];
        $this->name = $books_category['name'];
        
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