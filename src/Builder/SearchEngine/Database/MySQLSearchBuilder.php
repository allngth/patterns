<?php

namespace App\Builder\SearchEngine\Database;

use App\Builder\SearchEngine\SearchBuilder;

class MySQLSearchBuilder extends SearchBuilder
{
    /** @var MysqlClient */
    protected $mysqlClient;

    public function reset()
    {
        $this->mysqlClient = new MysqlClient();
    }

    public function setFrom($from)
    {
        $this->mysqlClient->from($from);
    }

    public function setConditions($conditions = [])
    {
        $this->mysqlClient->where($conditions);
    }

    public function setLimit($limit)
    {
        $this->mysqlClient->limit($limit);
    }

    public function build()
    {
        return $this->mysqlClient->search();
    }
}
