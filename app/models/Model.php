<?php

namespace Bierbrouwerij\Models;

use Exception;

class Model extends CRUD
{
    private $table;

    private $primaryKey;

    private $id;

    private $columns = [];

    /**
     * Set the columns.
     *
     * @param $column
     * @param $value
     */
    public function __set($column, $value)
    {
        $this->$column = $value;
        $this->columns[$column] = $value;
    }

    /**
     * Set the table name.
     *
     * @param $table
     * @throws Exception
     */
    protected function setTable($table)
    {
        if (is_integer($table) || is_string($table))
            $this->table = $table;
        else
            throw new Exception("The table name must be an integer or string!");
    }

    /**
     * Set the primary key.
     *
     * @param $primaryKey
     * @throws Exception
     */
    protected function setPrimaryKey($primaryKey)
    {
        if (is_integer($primaryKey) || is_string($primaryKey))
            $this->primaryKey = $primaryKey;
        else
            throw new Exception("Primary key must be an integer of string!");
    }

    /**
     * Set the identifier.
     *
     * @param $id
     * @throws Exception
     */
    private function setId($id)
    {
        if (is_integer($id) || is_string($id))
            $this->id = $id;
        else
            throw new Exception("Identifier must be an integer or string!");
    }

    protected static function find($id)
    {
        $this->setId($id);

        $model = new self();
        $model->select($this->primaryKey);
        $model->from($this->table);
        $model->where($this->columns);

        return $model->get();
    }
}