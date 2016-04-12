<?php

namespace Bierbrouwerij\Libraries\Model;

use Bierbrouwerij\Libraries\Database\QueryBuilder;
use Exception;

class Model extends QueryBuilder
{
    /**
     * The table name.
     *
     * @var String|Integer
     */
    protected $table;

    /**
     * The primary key.
     *
     * @var String|Integer
     */
    protected $primaryKey;

    /**
     * Identifier.
     *
     * @var String|Integer
     */
    private $id;

    /**
     * The columns.
     *
     * @var array
     */
    private $columns = [];

    /**
     * Set the columns.
     *
     * @param $column
     * @param $value
     */
    public function __set($column, $value)
    {
        //$this->$column = $value; Probably not needed
        $this->columns[$column] = $value;
    }

    /**
     * Retrieve a model by it's identifier.
     *
     * @param $id
     * @return mixed
     */
    protected static function find($id)
    {
        $model = new self();
        $model->id = $id;

        $model->setSelect(['id', 'name']);
        $model->setFrom($this->table);
        $model->setWhere($this->columns);
        $model->setAndWhere($this->columns, '=', $this->alsjdfl);

        return $model->get();
    }
}