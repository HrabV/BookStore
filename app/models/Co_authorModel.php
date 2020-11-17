<?php


namespace app\models;

use app\db\BaseSQLOperations;
use app\db\DbConnection;


class Co_authorModel extends Model
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
        return BaseSQLOperations::select($this->connection, "co_author", null, "Co_author");
    }
    /**
     ** 
     ** get
     *
     * @param  mixed $id
     * @return Book
     */
    public function get(int $id): Co_author
    {
        return BaseSQLOperations::select($this->connection, "co_author", "id = $id", "Co_author");
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
