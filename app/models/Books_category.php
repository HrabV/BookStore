<?php


namespace app\models;


class Books_category extends ModelObject
{
    public int $id;
    public string $name;
    public int $main_books_category_id;
    
    
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
        $this->main_books_category_id = $books_category['main_books_category_id'];
        
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
     * get_main_books_category_id
     *
     * @return int
     */
    public function get_main_books_category_id(): int
    {
        return $this->main_books_category_id;
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
     * set_main_books_category_id
     *
     * @param  mixed $main_books_category_id
     * @return void
     */
    public function set_main_books_category_id(int $main_books_category_id)
    {
        $this->main_books_category_id = $main_books_category_id;
    }
    
}