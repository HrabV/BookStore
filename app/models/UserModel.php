<?php


namespace app\models;

use app\db\BaseSQLOperations;
use app\db\DbConnection;


class UsertModel extends Model
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
        return BaseSQLOperations::select($this->connection, "user", null, "User");
    }
    /**
     ** 
     ** get
     *
     * @param  mixed $id
     * @return User
     */
    public function get(int $id): User
    {
        return BaseSQLOperations::select($this->connection, "user", "id = $id", "User");
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