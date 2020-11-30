<?php


namespace app\models;

use app\db\BaseSQLOperations;
use app\db\DbConnection;


class AuthorModel extends Model
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
        return BaseSQLOperations::select($this->connection, "author", null, "Author");
    }
    /**
     ** 
     ** get
     *
     * @param  mixed $id
     * @return Author
     */
    public function get(int $id): Author
    {
        return BaseSQLOperations::select($this->connection, "author", "id = $id", "Author");
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
