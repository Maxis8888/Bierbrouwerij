<?php

namespace Bierbrouwerij\Models;


abstract class Model
{
    /**
     * The table name.
     *
     * @var String
     */
    protected $table;

    /**
     * Set the columns.
     *
     * @param $column
     * @param $value
     */
    public function __set($column, $value)
    {
        $this->$column = $value;
    }


    public function save()
    {
        
    }
}