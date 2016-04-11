<?php
/**
 * Created by PhpStorm.
 * User: stef
 * Date: 8-4-16
 * Time: 11:04
 */

namespace Bierbrouwerij\Libraries\Database;


class CRUD
{
    private $select;
    private $table;
    private $where;

    /**
     * Database object.
     *
     * @var PDO
     */
    private $db;

    public function __construct()
    {
        /*$connectionManager = new ConnectionManager();
        $this->db = $connectionManager->connect();*/

        $this->select = '';
        $this->table = '';
        $this->where = '';
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