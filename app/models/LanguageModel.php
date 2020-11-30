<?php


namespace app\models;

use app\db\BaseSQLOperations;
use app\db\DbConnection;


class LanguageModel extends Model
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
        return BaseSQLOperations::select($this->connection, "language", null, "Language");
    }
    /**
     ** 
     ** get
     *
     * @param  mixed $id
     * @return Language
     */
    public function get(int $id): Language
    {
        return BaseSQLOperations::select($this->connection, "language", "id = $id", "Language");
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