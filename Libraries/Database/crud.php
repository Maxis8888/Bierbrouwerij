<?php
/**
 * Created by PhpStorm.
 * User: stef
 * Date: 8-4-16
 * Time: 11:42
 */

namespace Bierbrouwerij\Libraries\Database;


class crud
{
    public $select;

     public $from;

     public $whereClause = [];

     public $andWhereClause = [];

     public $orWhereClause = [];

     public $query = null;

     public function __construct()
     {
     }

     public function get()
     {
        $this->orderQuery();

        $connection = new ConnectionManager();
        $connection = $connection->connect();

        return $this->result();
     }

     public function setSelect(array $columns)
     {
        $this->select = $columns;
     }

     public function setFrom($from)
     {
        $this->from = $from;
     }

     public function setWhere($column, $operator, $value)
     {
        $this->whereClause['column'][] = $column;
        $this->whereClause['operator'][] = $operator;
        $this->whereClause['value'][] = $value;
     }

     public function setAndWhere($column, $operator, $value)
     {
        $this->AndWhereClause['column'][] = $column;
        $this->AndWhereClause['operator'][] = $operator;
        $this->AndWhereClause['value'][] = $value;
     }

     public function setOrWhere($column, $operator, $value)
     {
        $this->OrWhereClause['column'][] = $column;
        $this->OrWhereClause['operator'][] = $operator;
        $this->OrWhereClause['value'][] = $value;
     }

     private function reindexArray()
     {
         unset($this->whereClause['column'][0]);
         unset($this->whereClause['operator'][0]);
         unset($this->whereClause['value'][0]);

         $this->whereClause = array_values($this->whereClause);
     }

     protected function select()
     {
        $select = implode(", ", $this->select);
        $this->query =+ "SELECT " . $select;
      }
    protected function from()
    {
        $this->query =+ " FROM " . $this->from;
    }

     protected function where()
     {
        $this->query =+ " WHERE " . $this->whereClause['column'][0] . $this->whereClause['operator'][0] . $this->whereClause['value'][0];
        $this->reindexArray();
     }

    protected function andWhere()
    {
        $this->query =+ " AND WHERE " . $this->andWhereClause['column'][0] . $this->andWhereClause['operator'][0] . $this->andWhereClause['value'][0];
        $this->reindexArray();
    }

    protected function orWhere()
    {
        $this->query =+ " OR WHERE " . $this->OrWhereClause['column'][0] . $this->OrWhereClause['operator'][0] . $this->OrWhereClause['value'][0];
        $this->reindexArray();
    }

    private function orderQuery()
    {
         if ( ! empty($this->select))
                $this->select();
         if ( ! empty($this->from))
                $this->from();
         if ( ! empty($this->whereClause))
                $this->where();
         if ( ! empty($this->andWhereClause))
                $this->andWhere();
         if ( ! empty($this->orWhereClause))
                $this->orWhere();
     }

     private function result()
     {

     }
 }