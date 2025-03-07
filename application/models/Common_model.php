<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model {

	public function __construct(){

      parent::__construct();
  
	}

	
	public function update($table, $data, $where)
	{

     $this->db->where($where);
     $this->db->update($table, $data);

	}


	public function update_data($table, $data, $where)
	{

     $this->db->where($where);
     $this->db->update($table, $data);
     $afftectedRows = $this->db->affected_rows();
     return $afftectedRows; 

	}

 
    public function delete($table, $where)
	{

	$this->db->where($where);
  $this->db->delete($table);
  $query=$this->db->get($table);
  return $query->result();
   
   }

   public function deleteDynamicRow($table,$where){ 
         
    $this->db->where($where);
    $delete = $this->db->delete($table);
    return $delete?true:false; 
    } 


    public function insert_or_update($table,$where, $data){ 
     $this->db->where($where);
     $q = $this->db->get($table);

     

   if( $q->num_rows() > 0 ) 
   {
      $this->db->where($where);
      $this->db->update($table,$data);
      return $q->row()->user_id; 

   } else {
      $this->db->set($where);
      $this->db->insert($table, $data);
      $insert_id = $this->db->insert_id();
      return  $insert_id;

   }

    } 

    
    public function set_token($email, $randon)
{
  $where = array('email' => $email);
  $this->db->update('tbl_user', $randon, $where);
  return $this->db->affected_rows();
}


public function set_otp($mobile, $otp)
{
  $where = array('mobile' => $mobile);
  $this->db->update('tbl_user', $otp, $where);
  return $this->db->affected_rows();
}

public function set_otp_cc($mobile, $otp)
{
  $where = array('mobile' => $mobile);
  $this->db->update('credit_card_request', $otp, $where);
  return $this->db->affected_rows();
}

public function set_otp_cs($mobile, $otp)
{
  $where = array('mobile' => $mobile);
  $this->db->update('tbl_credit_score', $otp, $where);
  return $this->db->affected_rows();
}


public function set_data($table, $where, $data)
{
 
  $this->db->update($table, $data, $where);
  return $this->db->affected_rows();
}


public function insert_or_update_cc($table,$where, $data){ 
  $this->db->where($where);
  $q = $this->db->get($table);

if( $q->num_rows() > 0 ) 
{
   $this->db->where($where);
   $this->db->update($table,$data);
   return $q->row()->cc_request_id ; 

} else {
   $this->db->set($where);
   $this->db->insert($table, $data);
   $insert_id = $this->db->insert_id();
   return  $insert_id;

}

 } 

 


 public function insert_or_update_cs($table,$where, $data){ 
  $this->db->where($where);
  $q = $this->db->get($table);

  

if( $q->num_rows() > 0 ) 
{
   $this->db->where($where);
   $this->db->update($table,$data);
   return $q->row()->id ; 

} else {
   $this->db->set($where);
   $this->db->insert($table, $data);
   $insert_id = $this->db->insert_id();
   return  $insert_id;

}

 } 

		
}