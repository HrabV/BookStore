<?php


namespace app\models;

use app\db\BaseSQLOperations;
use app\db\DbConnection;


class Main_books_categoryModel extends Model
{
    private DbConnection $connection;
    public function __construct(DbConnection $connection)
    {
        $this->connection = $connection;
    }

    /**
     ** 
     ** get_all
     *
     * @return array
     */
    public function get_all(): array
    {
        return BaseSQLOperations::select($this->connection, "main_books_category", null, "Main_books_category");
    }
    /**
     ** 
     ** get
     *
     * @param  mixed $id
     * @return Book
     */
    public function get(int $id): Author
    {
        return BaseSQLOperations::select($this->connection, "main_books_category", "id = $id", "Main_books_category");
    }
    /**
     ** 
     ** write
     *
     * @return void
     */
    public function write()
    {
    }
    /**
     ** 
     ** update
     *
     * @return void
     */
    public function update()
    {
    }
    /**
     
     ** delete
     *
     * @return void
     */
    public function delete()
    {
    }
}
