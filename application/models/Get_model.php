<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_model extends CI_Model {

	public function __construct(){
      parent::__construct();
     
	}

	
	public function get_table($table)
	{
		return $this->db->select('*')
                 ->from($table)
                 ->get()->result_array();
   
	}
  public function get_city($table)
	{
		return $this->db->select('*')
                 ->from($table)
                 ->order_by('city', 'ASC')
                 ->get()->result_array();
   
	}

    

  public function rows_count($table, $where){
    $this->db->where($where);
    $result = $this->db->get($table)->num_rows();
    return $result; 
  }

	public function get_by_id($table, $where)
{
    $this->db->from($table);
    $this->db->where($where);
    $query = $this->db->get();
    return $query->row();
}


public function get_by_id_all($table, $where)
{
    $this->db->from($table);
    $this->db->where($where);
    $query = $this->db->get();
    return $query->result();
}

public function num_row($table){
       
        $this->db->select('count(*) as allcount');
        $this->db->from($table);
        $query = $this->db->get();
        $result = $query->result_array();     
        return $result[0]['allcount'];
        
    }

    public function list($limit,$offset, $table){
		
           $this->db->limit($limit,$offset);
           $this->db->select('*');
           $this->db->from($table);
           return $this->db->get()->result_array();
    }


    public function get_all($table, $where)
	{
	
	$this->db->from($table);
    $this->db->where($where);
    $query = $this->db->get();
    return $query->result_array();
   
	}



  public function get_verify_otp($table, $where1, $where2)
{
    $this->db->from($table);
    $this->db->where($where1);
    $this->db->where($where2);
    $query = $this->db->get();
    return $query->num_rows();
}

public function get_count($table, $where)
{
    $this->db->from($table);
    $this->db->where($where);
    $query = $this->db->get();
    return $query->num_rows();
}

public function num_row_by_id($table, $where){
       
  $this->db->select('count(*) as allcount');
  $this->db->from($table);
  $this->db->where($where);
  $query = $this->db->get();
  $result = $query->result_array();     
  return $result[0]['allcount'];
  
}


public function row_getById($table, $where)
{
  $this->db->from($table);
  $this->db->where($where);
  $query = $this->db->get(); 
  return $query->row();
}


public function list_by_id($limit,$offset, $table, $where){
		
  $this->db->limit($limit,$offset);
  $this->db->select('*');
  $this->db->from($table);
  $this->db->where($where);
  return $this->db->get()->result_array();
}


public function get_product_by_cat($cat_id)
    {
      
      $this->db->select('*');
      $this->db->from('tbl_product p');
      //$this->db->join('tbl_product_varient v', 'p.p_id = v.p_id','left');
      $this->db->where('p.cat_id', $cat_id);
     
      $data = $this->db->get()->result_array();
 
        return $data;
      // echo "<pre>";
      // print_r($data); exit(); 
    
    }


    public function get_by_id_limit($table, $where)
    {

    
       // $this->db->limit(1);
        $this->db->from($table);
        $this->db->where($where);
      //  $this->db->order_by('price', 'ASC');
        $query = $this->db->get();
        
        $data =  $query->row_array();
        return $data;

        // echo "<pre>";
        // print_r($data); exit();

    }
    


		
}