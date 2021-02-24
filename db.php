<?php

use function PHPUnit\Framework\isNull;

class DB
{
    public $table;
    public static $prefix;
    public function all()
    {
        return "SELECT * FROM {$this->table}";
    }
    public function find($id, $columns = null)
    {
        $columns = ($columns != null) ? implode(',', $columns) : '*';
        return "SELECT {$columns} FROM {$this->table} WHERE id={$id}";
    }
    public function delete($id)
    {
        return "DELETE FROM {$this->table} WHERE id={$id}";
    }
    public static function export()
    {
    }

    private function sort()
    {
    }
}
$connection = new DB();
$connection->table = "users";
$connection->find(3, array('id', 'name'));
db::export();
