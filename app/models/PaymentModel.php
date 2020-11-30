<?php


namespace app\models;

use app\db\BaseSQLOperations;
use app\db\DbConnection;


class PaymentModel extends Model
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
        return BaseSQLOperations::select($this->connection, "payment", null, "Payment");
    }
    /**
     ** 
     ** get
     *
     * @param  mixed $id
     * @return Payment
     */
    public function get(int $id): Payment
    {
        return BaseSQLOperations::select($this->connection, "payment", "id = $id", "Payment");
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