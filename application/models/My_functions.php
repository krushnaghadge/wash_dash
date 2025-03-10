<?php
class My_functions extends CI_Model
{
    // Inserts data into a specified table and returns the inserted record's ID.
    function insert($tname, $data)
    {
        $this->db->insert($tname, $data);
        return $this->db->insert_id();
    }

    // Retrieves all records from a specified table.
    function select($tname)
    {
        return $this->db->get($tname)->result_array();
    }

    // Retrieves records from a specified table that match given conditions.
    function select_where($tname, $cond)
    {
        return $this->db->where($cond)->get($tname)->result_array();
    }

    // Deletes records from a specified table that match given conditions.
    function delete($tname, $cond)
    {
        $this->db->where($cond)->delete($tname);
    }

    // Updates records in a specified table that match given conditions.
    function update($tname, $cond, $data)
    {
        $this->db->where($cond)->update($tname, $data);
        
        return $this->db->affected_rows();
    }

    // Creates a new table dynamically with given columns.
    function create_table($tname, $arr)
    {
        $sql = "CREATE TABLE " . $tname . "(" . $tname . "_id int auto_increment primary key";
        foreach ($arr as $key => $value) {
            $sql .= ", " . $key . " text";
        }
        $sql .= ");";
        return ($this->db->query($sql));
    }

    // Retrieves records that match a specific pattern in a column using LIKE.
    function select_like($tname, $column, $value)
    {
        return $this->db->like($column, $value)->get($tname)->result_array();
    }

    // Retrieves records that do not match a specific pattern in a column using NOT LIKE.
    function select_not_like($tname, $column, $value)
    {
        return $this->db->not_like($column, $value)->get($tname)->result_array();
    }

    // Retrieves records that match at least one condition using OR LIKE.
    function select_or_like($tname, $conds)
    {
        $this->db->or_like($conds);
        return $this->db->get($tname)->result_array();
    }

    // Retrieves records that match at least one condition using OR WHERE.
    function select_or_where($tname, $conds)
    {
        $this->db->or_where($conds);
        return $this->db->get($tname)->result_array();
    }

    // Retrieves records where a column value is within a given array.
    function select_where_in($tname, $column, $values)
    {
        return $this->db->where_in($column, $values)->get($tname)->result_array();
    }

    // Retrieves records where a column value is NOT within a given array.
    function select_where_not_in($tname, $column, $values)
    {
        return $this->db->where_not_in($column, $values)->get($tname)->result_array();
    }

    // Retrieves records where a column value is NULL.
    function select_is_null($tname, $column)
    {
        return $this->db->where($column, NULL)->get($tname)->result_array();
    }

    // Retrieves records where a column value is NOT NULL.
    function select_is_not_null($tname, $column)
    {
        return $this->db->where($column . " IS NOT NULL")->get($tname)->result_array();
    }

    // Retrieves records based on mathematical conditions (>, <, >=, <=).
    function select_math_operator($tname, $column, $operator, $value)
    {
        if (in_array($operator, ['>', '<', '>=', '<='])) {
            return $this->db->where($column . ' ' . $operator, $value)->get($tname)->result_array();
        }
        return [];
    }

    // Retrieves records ordered by multiple columns.
    function select_order_by_multiple($tname, $columns)
    {
        foreach ($columns as $column => $order) {
            $this->db->order_by($column, $order);
        }
        return $this->db->get($tname)->result_array();
    }

    // Retrieves a limited number of records with an offset.
    function select_limit_offset($tname, $limit, $offset)
    {
        return $this->db->limit($limit, $offset)->get($tname)->result_array();
    }

    // Retrieves grouped records based on a specific column.
    function select_group_by($tname, $column)
    {
        return $this->db->group_by($column)->get($tname)->result_array();
    }

    // Retrieves aggregated sum of a column.
    function select_sum($tname, $column)
    {
        $this->db->select_sum($column);
        return $this->db->get($tname)->row_array();
    }

    // Retrieves average value of a column.
    function select_avg($tname, $column)
    {
        $this->db->select_avg($column);
        return $this->db->get($tname)->row_array();
    }

    // Retrieves minimum value of a column.
    function select_min($tname, $column)
    {
        $this->db->select_min($column);
        return $this->db->get($tname)->row_array();
    }

    // Retrieves maximum value of a column.
    function select_max($tname, $column)
    {
        $this->db->select_max($column);
        return $this->db->get($tname)->row_array();
    }

    // Retrieves distinct column values.
    function select_distinct($tname, $column)
    {
        return $this->db->distinct()->select($column)->get($tname)->result_array();
    }

    // Retrieves records within a range using BETWEEN.
    function select_between($tname, $column, $min, $max)
    {
        return $this->db->where("$column BETWEEN $min AND $max")->get($tname)->result_array();
    }

    // Begins a database transaction.
    function start_transaction()
    {
        $this->db->trans_start();
    }

    // Commits a transaction.
    function commit_transaction()
    {
        $this->db->trans_complete();
    }

    // Rolls back a transaction.
    function rollback_transaction()
    {
        $this->db->trans_rollback();
    }

    // Executes a raw SQL query.
    function execute_raw_query($query)
    {
        return $this->db->query($query)->result_array();
    }
}
?>