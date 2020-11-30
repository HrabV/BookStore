<?php


namespace app\models;

use app\db\BaseSQLOperations;
use app\db\DbConnection;


class Publishing_houseModel extends Model
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
        return BaseSQLOperations::select($this->connection, "publishing_house", null, "Publishing_house");
    }
    /**
     ** 
     ** get
     *
     * @param  mixed $id
     * @return Publishing_house
     */
    public function get(int $id): Publishing_house
    {
        return BaseSQLOperations::select($this->connection, "publishing_house", "id = $id", "Publishing_house");
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