<?php

namespace Bierbrouwerij\Models;


abstract class Model
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
     * Set the primary key.
     *
     * @param $primaryKey
     * @throws Exception
     */
    abstract protected function setPrimaryKey($primaryKey)
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
            throw new Exception("ID must be an integer or string!");
    }

    protected function find($id)
    {
        $this->setId($id);
    }

    protected function save()
    {

    }
}