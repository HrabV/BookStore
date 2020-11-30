<?php


namespace app\models;


class Main_books_category extends ModelObject
{
    public int $id;
    public string $name;
    
    
    /**
     * __construct
     *
     * @param  mixed $main_books_category
     * @return void
     */
    public function __construct(array $main_books_category)
    {
        $this->id = $main_books_category['id'];
        $this->name = $main_books_category['name'];
        
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