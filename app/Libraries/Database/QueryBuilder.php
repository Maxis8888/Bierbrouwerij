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
    private $andWhere;

    /**
     * OR WHERE clauses.
     *
     * @var array
     */
    private $orWhere;

    /**
     * INNER JOIN clauses.
     *
     * @var array
     */
    private $innerJoin;

    /**
     * Database object.
     *
     * @var PDO
     */
    private $db;

    /**
     * QueryBuilder constructor.
     */
    public function __construct()
    {
        $config = Config::get('database', 'db');

        $connectionManager = new ConnectionManager(
            $config['host'],
            $config['user'],
            $config['pass'],
            $config['name'],
            $config['engine']
        );
        $this->db = $connectionManager->connect();
    }

    /**
     * Columns to array.
     *
     * @param $columns
     * @return string
     */
    private static function toArray($columns)
    {
        return implode(', ', $columns);
    }

    /**
     * Create the SELECT statement.
     *
     * @param array $columns
     */
    public function setSelect(array $columns)
    {
        $columns = QueryBuilder::toArray($columns);

        $this->select = "SELECT ";
        $this->select =+ $columns;
    }

    /**
     * Create the FROM statement.
     *
     * @param $table
     */
    public function setFrom($table)
    {
        $this->table = " FROM ";
        $this->table =+ $table;
    }

    /**
     * Set the WHERE statement.
     *
     * @param array $columns
     */
    public function setWhere(array $columns)
    {
        // ['col1', '=', 'col2']

        $this->where = " WHERE ";
        $this->where =+ $columns[0];
        $this->where =+ " {$columns[1]} ";
        $this->where =+ $columns[2];
    }

    public function setOrWhere(array $columns)
    {

    }
}