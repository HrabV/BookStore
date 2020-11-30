<?php


namespace app\models;

use app\db\BaseSQLOperations;
use app\db\DbConnection;


class Order_itemsModel extends Model
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
        return BaseSQLOperations::select($this->connection, "order_items", null, "Order_items");
    }
    /**
     ** 
     ** get
     *
     * @param  mixed $id
     * @return Order_items
     */
    public function get(int $id): Order_items
    {
        return BaseSQLOperations::select($this->connection, "order_items", "id = $id", "Order_items");
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