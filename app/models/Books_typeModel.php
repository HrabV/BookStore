<?php


namespace app\models;

use app\db\BaseSQLOperations;
use app\db\DbConnection;


class Books_typeModel extends Model
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
        return BaseSQLOperations::select($this->connection, "books_type", null, "Books_type");
    }
    /**
     ** 
     ** get
     *
     * @param  mixed $id
     * @return Books_type
     */
    public function get(int $id): Books_type
    {
        return BaseSQLOperations::select($this->connection, "books_type", "id = $id", "Books_type");
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
