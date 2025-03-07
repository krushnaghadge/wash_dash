<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_model extends CI_Model {

	public function __construct(){

      parent::__construct();
    
	}

	
	// public function insert($table, $data)
	// {
	// 	return $this->db->insert($table,$data);
   
	// }

	public function insert($table, $data)
	{
		$this->db->insert($table,$data);
		$insert_id = $this->db->insert_id();
        return  $insert_id;
   
	}

	public function insert_or_update($table,$where, $data){ 
		$this->db->where($where);
		$q = $this->db->get($table);
   
	  if( $q->num_rows() > 0 ) 
	  {
		 $this->db->where($where);
		 $this->db->update($table,$data);
	  } else {
		 $this->db->set($where);
		 $this->db->insert($table, $data);
	  }

	}

		
}