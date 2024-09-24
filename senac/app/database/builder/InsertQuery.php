<?php

namespace app\database\builder;

use app\database\Connection;

class InsertQuery
{
    private static $table;
    public static function table(string $tableName = '')
    {
        $classe_atual = new self;
        $classe_atual->table = $tableName;
        return $classe_atual;
    }
    public function save(array $valores = []): bool
    {
        try {
            $keys = implode(',', array_keys($valores));
            $params = ':' . implode(',:', array_keys($valores));
            $sql = "insert into {$this->table} ({$keys}) values ({$params})";
            $con = Connection::open();
            $prepare = $con->prepare($sql);
            return $prepare->execute($valores);
        } catch (\PDOException $e) {
            var_dump($e->getMessage());
            throw new \Exception("Restrição :" . $e->getMessage(), 1);
        }
    }
}
