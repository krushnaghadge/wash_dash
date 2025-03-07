<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PageController  extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
    }

    //login page
    public function login()
    {
       // $this->load->view('pages/login');
       $this->load->view('pages/dashboard');
    }

    //forgot_password page
    public function forgot_password()
    {
        $this->load->view('pages/forgot_password');
    }

    //profile page
    public function profile()
    {
        $this->load->view('pages/profile');
    }

    //dashboard page
    public function dashboard()
    {
        $this->load->view('pages/dashboard');
    }


    //user a/c management page
    public function user_management()
    {
        $this->load->model('Customer_model');
    
       
        //$condition = array('user_role' => 'customer'); 
    //$data['users'] = $this->Customer_model->select_where('users_tbl', $condition);
    $data['users'] = $this->Customer_model->select('users_tbl'); 
       // echo $this->db->last_query(); 
       // exit();
        $this->load->view('pages/user_management', $data);
    }
    
 
    
    //user_details page
    public function user_details()
    {
        $this->load->view('pages/user_details');
    }

    //vendor_management page
    public function vendor_management()
    {    
        $this->load->model('Customer_model');
        //$condition = array('user_role' => 'vendor'); 
       // $data['vendors'] = $this->Customer_model->select_where('vendors_tbl', $condition);
        $data['vendors'] = $this->Customer_model->select('vendors_tbl'); 
       // echo $this->db->last_query(); 
      //  exit();
        $this->load->view('pages/vendor_management', $data);
    }


    
    //vendor_details page
    public function vendor_details()
    {
        $this->load->view('pages/vendor_details');
    }

    //vendor_completed_order page
    public function vendor_completed_order()
    {
        $this->load->view('pages/vendor_completed_order');
    }

    //driver_management page
    public function driver_management()
    {
        $this->load->model('Customer_model');
        $data['drivers'] = $this->Customer_model->select('drivers_tbl'); 
        // echo $this->db->last_query(); 
        // exit();
         $this->load->view('pages/driver_management', $data);
    }

    //driver_current_order page
    public function driver_current_order()
    {
        $this->load->view('pages/driver_current_order');
    }

    //driver_pending_order page
    public function driver_pending_order()
    {
        $this->load->view('pages/driver_pending_order');
    }

    //driver_completed_order page
    public function driver_completed_order()
    {
        $this->load->view('pages/driver_completed_order');
    }

    //driver_details page
    public function driver_details()
    {
        $this->load->view('pages/driver_details');
    }

    //privacy_policy page
    public function privacy_policy()
    {
        $this->load->view('pages/privacy_policy');
    }

    //terms_condition page
    public function terms_condition()
    {
        $this->load->view('pages/terms_condition');
    }

    //manage_commission page
    public function manage_points()
    {
        $this->load->view('pages/manage_points');
    }

    //user_cancelled_order page
    public function user_cancelled_order()
    {
        $this->load->view('pages/user_cancelled_order');
    }

    //user_completed_order page
    public function user_completed_order()
    {
        $this->load->view('pages/user_completed_order');
    }

    //manage driver_charges page
    public function driver_charges()
    {
        $this->load->view('pages/driver_charges');
    }

    //wallet_management page
    public function wallet_management()
    {
        $this->load->view('pages/wallet_management');
    }

    //wallet_history page
    public function wallet_history()
    {
        $this->load->view('pages/wallet_history');
    }

    public function add_service_type()
    {
        $this->load->view('pages/add_service_type');
    }

    public function services()
    {
        $this->load->view('pages/services');
    }

    public function sub_services()
    {
        $this->load->view('pages/sub_services');
    }

    public function manage_language()
    {
        $this->load->view('pages/manage_language');
    }

    public function faq()
    {
        $this->load->view('pages/faq');
    }

    public function add_state()
    {
        $this->load->view('pages/add_state');
    }

    public function add_city()
    {
        $this->load->view('pages/add_city');
    }

    public function add_vehicle_type()
    {
        $this->load->view('pages/add_vehicle_type');
    }

    public function new_order()
    {

      //  $this->load->model('Customer_model');
      //  $data['orders'] = $this->Customer_model->select('orders_tbl'); 
        $this->load->view('pages/new_order');
    }

    public function fetch_orders()
    {
        $this->load->model('Customer_model');
        $orders = $this->Customer_model->select('orders_tbl');
        
        header('Content-Type: application/json');
        echo json_encode($orders);
        exit;
    }
    


    public function order_details()
    {
        $this->load->view('pages/order_details');
    }

    public function coupon_code()
    {
        $this->load->view('pages/coupon_code');
    }

    public function ongoing_orders()
    {
        $this->load->view('pages/ongoing_orders');
    }
    public function ready_to_delivered()
    {
        $this->load->view('pages/ready_to_delivered');
    }

    public function completed_orders()
    {
        $this->load->view('pages/completed_orders');
    }

    public function ratings()
    {
        $this->load->view('pages/ratings');
    }

    public function manage_wallet()
    {
        $this->load->view('pages/manage_wallet');
    }

    public function vendor_wallet()
    {
        $this->load->view('pages/vendor_wallet');
    }
    public function driver_wallet()
    {
        $this->load->view('pages/driver_wallet');
    }

    public function create_invitation_code()
    {
        $this->load->view('pages/create_invitation_code');
    }

    public function auto_rating()
    {
        $this->load->view('pages/auto_rating');
    }

    public function vendor_commision()
    {
        $this->load->view('pages/vendor_commision');
    }

    public function support_center()
    {
        $this->load->view('pages/support_center');
    }

    public function promo_code()
    {
        $this->load->view('pages/promo_code');
    }

    public function commision_agreement()
    {
        $this->load->view('pages/commision_agreement');
    }

    public function vendor_details_assign_order()
    {
        $this->load->view('pages/vendor_details_assign_order');
    }

    public function vendor_details_inprocess_order()
    {
        $this->load->view('pages/vendor_details_inprocess_order');
    }

    public function vendor_details_readytodeliverd_order()
    {
        $this->load->view('pages/vendor_details_readytodeliverd_order');
    }

    public function vendor_details_completed_order()
    {
        $this->load->view('pages/vendor_details_completed_order');
    }

    public function vendor_details_rating()
    {
        $this->load->view('pages/vendor_details_rating');
    }

    public function vendor_details_transaction_history()
    {
        $this->load->view('pages/vendor_details_transaction_history');
    }

    public function driver_details_new_order()
    {
        $this->load->view('pages/driver_details_new_order');
    }

    public function driver_details_ongoing_order()
    {
        $this->load->view('pages/driver_details_ongoing_order');
    }

    public function driver_details_completed_order()
    {
        $this->load->view('pages/driver_details_completed_order');
    }

    public function driver_details_rating()
    {
        $this->load->view('pages/driver_details_rating');
    }

    public function user_details_new_order()
    {
        $this->load->view('pages/user_details_new_order');
    }

    public function user_details_inprocess_order()
    {
        $this->load->view('pages/user_details_inprocess_order');
    }

    public function user_details_ready_deliver()
    {
        $this->load->view('pages/user_details_ready_deliver');
    }

    public function user_details_completed_order()
    {
        $this->load->view('pages/user_details_completed_order');
    }

    public function user_details_wallet()
    {
        $this->load->view('pages/user_details_wallet');
    }
  
   public function revenue_management()
    {
        $this->load->view('pages/revenue_management');
    }
}
