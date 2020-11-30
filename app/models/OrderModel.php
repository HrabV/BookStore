<?php


namespace app\models;

use app\db\BaseSQLOperations;
use app\db\DbConnection;


class OrderModel extends Model
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
        return BaseSQLOperations::select($this->connection, "order", null, "Order");
    }
    /**
     ** 
     ** get
     *
     * @param  mixed $id
     * @return Order
     */
    public function get(int $id): Order
    {
        return BaseSQLOperations::select($this->connection, "order", "id = $id", "Order");
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