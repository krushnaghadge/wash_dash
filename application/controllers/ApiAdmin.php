<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ApiAdmin  extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('Customer_model');
    }
    public function fetch_orders()
    {
        $this->load->model('Customer_model');
        $orders = $this->Customer_model->select('orders_tbl');
        
       // header('Content-Type: application/json');
        echo json_encode($orders);
        exit;
    }


    public function get_all_vendor()
    {
        $this->load->model('Customer_model');
        $vendors = $this->Customer_model->select('vendors_tbl');
    
        
        $response = [
            'status'  => 'success',
            'data'    => $vendors,
            'message' => count($vendors) ? 'Vendors retrieved successfully.' : 'No vendors found.'
        ];
    
        
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }

     // to get status    inprocess order
    public function inprocess_order()
    {
        $this->load->model('Customer_model');
         $condition = array('order_status' => 'processing'); 
        $data['vendors'] = $this->Customer_model->select_where('orders_tbl', $condition);
      $inprocess_order = $data['vendors'] ;
    
        
        $response = [
            'status'  => 'success',
            'data'    => $inprocess_order,
            'message' => count($inprocess_order) ? 'inprocess order retrieved successfully.' : 'No processing order found.'
        ];
    
        
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }



     // to get status    ready to deliver  order
     public function readytodeliver_order()
     {
        $this->load->model('Customer_model');
        $condition = array('order_status' => 'picked_up'); 
       $readytodeliver= $this->Customer_model->select_where('orders_tbl', $condition);
      $response = [
           'status'  => 'success',
           'data'    => $readytodeliver,
           'message' => count($readytodeliver) ? 'picked_up order retrieved successfully.' : 'No picked_up found.'
       ];
   
       
       header('Content-Type: application/json');
       echo json_encode($response);
       exit;
     }


     // to get status    ready to deliver  order
     public function complited_order()
     {
        $this->load->model('Customer_model');
        $condition = array('order_status' => 'completed'); 
        $completed= $this->Customer_model->select_where('orders_tbl', $condition);
     //$completed = $data['vendors'] ;
   
       
       $response = [
           'status'  => 'success',
           'data'    => $completed,
           'message' => count($completed) ? 'completed order retrieved successfully.' : 'No completed order found.'
       ];
   
       
       header('Content-Type: application/json');
       echo json_encode($response);
       exit;
     }


    
     // customer details by ID
     public function get_customer_det_by_id()
     {
        $user_id = $this->input->post('user_id');
         $this->load->model('Customer_model');
         $condition = array('user_id' => $user_id); 
         $user_det = $this->Customer_model->select_where('users_tbl', $condition);
     
         $response = [
             'status'  => 'success',
             'data'    => $user_det,
             'message' => count($user_det) ? 'user details retrieved successfully.' : 'No user details found.'
         ];
     
         //header('Content-Type: application/json');
         echo json_encode($response);
         exit;
     }
     
     // new order for perticular customer 
     public function get_new_order_perticular_cust()
     {
        $user_id = $this->input->post('user_id');
         $this->load->model('Customer_model');
         $condition = array('order_user_id' => $user_id); 
         $neworder = $this->Customer_model->select_where('orders_tbl', $condition);
     
         $response = [
             'status'  => 'success',
             'data'    => $neworder,
             'message' => count($neworder) ? 'user orders retrieved successfully.' : 'No oders  found.'
         ];
     
         //header('Content-Type: application/json');
         echo json_encode($response);
         exit;
     }

    //   fech all order perticular customer   using user id   
     public function get_new_order_particular_cust()
     {
        $user_id = $this->input->post('user_id');
         $this->load->model('Customer_model');
         $condition = array('order_user_id' => $user_id, 'order_status' => 'processing');
         $user_det = $this->Customer_model->select_where('orders_tbl', $condition);
     
         $response = [
             'status'  => 'success',
             'data'    => $user_det,
             'message' => count($user_det) ? 'inprocess order retrieved successfully.' : 'No inprocess order found.'
         ];
     
         //header('Content-Type: application/json');
         echo json_encode($response);
         exit;
     }

     public function get_readytodilever_particular_cust()
     {
        $user_id = $this->input->post('user_id');
         $this->load->model('Customer_model');
         $condition = array('order_user_id' => $user_id, 'order_status' => 'picked_up');
         $user_det = $this->Customer_model->select_where('orders_tbl', $condition);
     
         $response = [
             'status'  => 'success',
             'data'    => $user_det,
             'message' => count($user_det) ? 'ready to deliver order feched successfully.' : 'Dont have any ready to deliver order found.'
         ];
     
         //header('Content-Type: application/json');
         echo json_encode($response);
         exit;
     }

     // get all complited order details for perticular customer   
     public function get_customer_complited_order()
     {
        $user_id = $this->input->post('user_id');
         $this->load->model('Customer_model');
         $condition = array('order_user_id' => $user_id, 'order_status' => 'cancelled');
         $cancelled = $this->Customer_model->select_where('orders_tbl', $condition);
     
         $response = [
             'status'  => 'success',
             'data'    => $cancelled,
             'message' => count( $cancelled) ? 'cancelled order feched successfully.' : 'Dont have any cancelled order found.'
         ];
     
         //header('Content-Type: application/json');
         echo json_encode($response);
         exit;
     }
    


     // get all transacrtion   from user  
    
     public function get_all_revenue()
     {
         $this->load->model('Customer_model');
         $revenue = $this->Customer_model->select('payments_tbl');
     
         
         $response = [
             'status'  => 'success',
             'data'    => $revenue,
             'message' => count($revenue) ? 'Transaction retrieved successfully.' : 'No Transaction found.'
         ];
     
         
         header('Content-Type: application/json');
         echo json_encode($response);
         exit;
     }
    
     // get all user wallet  ammount 
     public function get_all_user_wallet_amt()
     {
         $this->load->model('Customer_model');
         $wallet = $this->Customer_model->select('wallet_tbl');
     
         
         $response = [
             'status'  => 'success',
             'data'    => $wallet,
             'message' => count($wallet) ? 'Wallet Ammount retrieved successfully.' : 'wallet Transaction not found.'
         ];
     
         
         header('Content-Type: application/json');
         echo json_encode($response);
         exit;
     }


     // add privacy policy from admin dashboard
     public function add_privacy_policy()
     {
         
         $this->load->model('Customer_model');
         $policy_for = $this->input->post('policy_for');
         $policy_text = $this->input->post('policy_text');
         $data = [
             'policy_for' => $policy_for,
             'policy_text' => $policy_text,
             //'status' => 'active',  
         ];
      $insert_id = $this->Customer_model->insert('privacy_policy_tbl', $data);
         if ($insert_id) {
             $response = [
                 'status' => 'success',
                 'data' => $insert_id,
                 'message' => 'Privacy policy added successfully.',
             ];
         } else {
             $response = [
                 'status' => 'error',
                 'message' => 'Failed to add privacy policy.',
             ];
         }
         header('Content-Type: application/json');
         echo json_encode($response);
         exit;
     }

 // get_privacy_policy for admin dashboard
     public function get_privacy_policy()
     {
        $this->load->model('Customer_model');
        $wallet = $this->Customer_model->select('privacy_policy_tbl');
    
        
        $response = [
            'status'  => 'success',
            'data'    => $wallet,
            'message' => count($wallet) ? 'privacy policy retrieved successfully.' : 'privacy policy not found.'
        ];
    
        
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;

     }



      // add terms condition from admin dashboard
      public function add_terms_condition()
      {
          
          $this->load->model('Customer_model');
          $policy_for = $this->input->post('terms_for');
          $policy_text = $this->input->post('terms_text');
          $data = [
              'terms_for' => $policy_for,
              'terms_text' => $policy_text,
              //'status' => 'active',  
          ];
       $insert_id = $this->Customer_model->insert('terms_cond_tbl', $data);
          if ($insert_id) {
              $response = [
                  'status' => 'success',
                  'data' => $insert_id,
                  'message' => 'terms and condition added successfully.',
              ];
          } else {
              $response = [
                  'status' => 'error',
                  'message' => 'Failed to add terms and condition.',
              ];
          }
          header('Content-Type: application/json');
          echo json_encode($response);
          exit;
      }
 
  // get terms condition for admin dashboard
      public function get_terms_condition()
      {
         $this->load->model('Customer_model');
         $wallet = $this->Customer_model->select('terms_cond_tbl');
     
         
         $response = [
             'status'  => 'success',
             'data'    => $wallet,
             'message' => count($wallet) ? 'terms and condition retrieved successfully.' : 'terms and condition not found.'
         ];
     
         
         header('Content-Type: application/json');
         echo json_encode($response);
         exit;
 
      }
     

      //add_faq

      public function add_faq()
      {
         
          $this->load->model('Customer_model');
      
         
          $faq_for      = $this->input->post('faq_for', true);
          $faq_question = $this->input->post('faq_question', true);
         
          $faq_answer   = $this->input->post('faq_answer');
      
        
          if (empty($faq_for) || empty($faq_question) || empty($faq_answer)) {
              $response = [
                  'status'  => 'error',
                  'message' => 'All fields are required.'
              ];
              header('Content-Type: application/json');
              echo json_encode($response);
              exit;
          }
      
          
          $data = [
              'faq_for'      => $faq_for,
              'faq_question' => $faq_question,
              'faq_answer'   => $faq_answer,
          ];
      
         
          $insert_id = $this->Customer_model->insert('faq_tbl', $data);
      
         
          if ($insert_id) {
              $response = [
                  'status'  => 'success',
                  'data'    => $insert_id,
                  'message' => 'FAQ added successfully.'
              ];
          } else {
              $response = [
                  'status'  => 'error',
                  'message' => 'Failed to add FAQ.'
              ];
          }
      
          
          header('Content-Type: application/json');
          echo json_encode($response);
          exit;
      }


      // for    support_center  Admin Dashbord API
   

      public function get_faq()  {
        $this->load->model('Customer_model');
        $wallet = $this->Customer_model->select('faq_tbl');
    
        
        $response = [
            'status'  => 'success',
            'data'    => $wallet,
            'message' => count($wallet) ? 'faq retrieved successfully.' : 'faq not found.'
        ];
    
        
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;

      }
      
 

    
}