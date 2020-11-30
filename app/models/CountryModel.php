<?php


namespace app\models;

use app\db\BaseSQLOperations;
use app\db\DbConnection;


class CountryModel extends Model
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
        return BaseSQLOperations::select($this->connection, "country", null, "Country");
    }
    /**
     ** 
     ** get
     *
     * @param  mixed $id
     * @return Country
     */
    public function get(int $id): Country
    {
        return BaseSQLOperations::select($this->connection, "country", "id = $id", "Country");
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