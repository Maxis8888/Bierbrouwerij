<?php

namespace Bierbrouwerij\Libraries\Database;

use Bierbrouwerij\Libraries\Config\Config;

class QueryBuilder
{
    /**
     * SELECT statements.
     *
     * @var string
     */
    private $select;

    /**
     * FROM Statement.
     *
     * @var string
     */
    private $table;

    /**
     * WHERE clause.
     *
     * @var string
     */
    private $where;

    /**
     * AND WHERE clauses.
     *
     * @var array
     */
    private $andWhere = [];

    /**
     * OR WHERE clauses.
     *
     * @var array
     */
    private $orWhere = [];

    /**
     * INNER JOIN clauses.
     *
     * @var array
     */
    private $innerJoin = [];

    /**
     * Database object.
     *
     * @var PDO
     */
    private $db;

    public function __construct()
    {
        $config = Config::get('db');

        $connectionManager = new ConnectionManager(
            $config['host'],
            $config['user'],
            $config['pass'],
            $config['name'],
            $config['engine']
        );
        $this->db = $connectionManager->connect();
    }

    public function create($select, $table, $where)
    {
        "SELECT {$select} FROM {$table} WHERE {$where}";
    }

    public function read()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}