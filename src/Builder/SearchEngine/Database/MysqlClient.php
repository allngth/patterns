<?php

namespace App\Builder\SearchEngine\Database;

class MysqlClient
{
    private $from;
    private $where;
    private $limit;

    public function from($from)
    {
        $this->from = $from;
    }

    public function where($where)
    {
        $this->where = $where;
    }

    public function limit($limit)
    {
        $this->limit = $limit;
    }

    public function search()
    {
        return new MysqlResponse();
    }
}
