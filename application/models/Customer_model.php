<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
   
    function insert($tname, $data)
    {
        $this->db->insert($tname, $data);
        return $this->db->insert_id();
    }

    function select($tname)
    {
        return $this->db->get($tname)->result_array();
    }

    function delete($tname, $cond)
    {
        $this->db->where($cond)->delete($tname);
    }

    function select_where($tname, $cond)
    {
        return $this->db->where($cond)->get($tname)->result_array();
    }

    function update($tname, $cond, $data)
    {
        $this->db->where($cond)->update($tname, $data);
    }

    function get_vendors_with_users() {
        $this->db->select('vendors_tbl.*, users_tbl.user_name, users_tbl.user_email'); // choose the fields you need
        $this->db->from('vendors_tbl');
        $this->db->join('users_tbl', 'vendors_tbl.vendor_user_id = users_tbl.user_id', 'inner');
        $query = $this->db->get();
        return $query->result_array();
    }
    
}
