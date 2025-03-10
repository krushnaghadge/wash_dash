<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_api extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('Customer_model');
        $this->load->model('My_functions');
        $My_functions =  $this->load->model('My_functions');
    }

    // Success Response
    private function success_response($message, $data = [])
    {
        echo json_encode([
            "status" => "success",
            "message" => $message,
            "data" => $data
        ]);
        exit;
    }

    // Error Response
    private function error_response($message, $error_code = 400)
    {
        echo json_encode([
            "status" => "error",
            "message" => $message,
            "error_code" => $error_code
        ]);
        exit;
    }

    // Method Not Allowed Response
    private function method_not_allowed()
    {
        echo json_encode([
            "status" => "error",
            "message" => "Method Not Allowed. The requested method is not supported for this endpoint.",
            "error_code" => 405
        ]);
        exit;
    }

    public function user_sign_inn()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        // Get input data
        $mobile_no = $this->input->post('mobile_no');
        $password = $this->input->post('password');

        if (empty($mobile_no) || empty($password)) {
            $this->error_response("Mobile number and password are required.");
            return;
        }

        // Query to check user credentials
        $this->db->where('user_mobile_number', $mobile_no);
        $this->db->where('user_password_hash', $password);
        $query = $this->db->get('users_tbl');
        $user = $query->row();

        if ($user) {

            $response_data = [
                'user_id' => $user->user_id
            ];

            $this->success_response("User signed in successfully.", $response_data);
        } else {
            $this->error_response("Invalid mobile number or password.");
        }
    }


    public function user_sign_in()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        // Get input data
        $mobile_no = $this->input->post('mobile_no');
        $password = $this->input->post('password');

        if (empty($mobile_no) || empty($password)) {
            $this->error_response("Mobile number and password are required.");
            return;
        }

        // Load the model
        // $this->load->model('My_functions');


        $conditions = [
            'user_mobile_number' => $mobile_no,
            'user_password_hash' => $password
        ];

        $user = $this->My_functions->select_where('users_tbl', $conditions);

        if (!empty($user)) {
            $response_data = [
                'user_id' => $user[0]['user_id']
            ];
            $this->success_response("User signed in successfully.", $response_data);
        } else {
            $this->error_response("Invalid mobile number or password.");
        }
    }


    public function user_sign_up()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        $mobile_no = $this->input->post('mobile_no');

        if (empty($mobile_no)) {
            $this->error_response("Mobile number is required.");
            return;
        }



        //  mobile number already exists or not
        $conditions = ['user_mobile_number' => $mobile_no];
        $existing_user = $this->My_functions->select_where('users_tbl', $conditions);

        if (!empty($existing_user)) {
            $this->error_response("Mobile number already registered.");
            return;
        }

        $otp = rand(100000, 999999);


        $user_data = ['user_mobile_number' => $mobile_no, 'user_otp' => $otp];
        $insert_id = $this->My_functions->insert('users_tbl', $user_data);

        if ($insert_id) {
            $response_data = [
                'user_id' => $insert_id,
                'otp' => $otp
            ];
            $this->success_response("User registered successfully.", $response_data);
        } else {
            $this->error_response("Failed to register user.");
        }
    }


    public function user_verify()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        // Get input data
        $user_id = $this->input->post('user_id');
        $otp = $this->input->post('user_otp');

        if (empty($user_id) || empty($otp)) {
            $this->error_response("user_id and user_otp are required.");
            return;
        }

        // Load the model
        // $this->load->model('My_functions');


        $conditions = [
            'user_id' => $user_id,
            'user_otp' => $otp
        ];

        $user = $this->My_functions->select_where('users_tbl', $conditions);

        if (!empty($user)) {
            $response_data = [
                'user_id' => $user[0]['user_id']
            ];
            $this->success_response("User verified successfully.", $response_data);
        } else {
            $this->error_response("Invalid mobile number or password.");
        }
    }

    public function user_create_password()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
            return;
        }

        $create_pass = $this->input->post('create_pass');
        $confirm_pass = $this->input->post('confirm_pass');
        $user_id = $this->input->post('user_id');

        if (empty($create_pass) || empty($confirm_pass) || empty($user_id)) {
            $this->error_response("create_pass, confirm_pass, and user_id are required.");
            return;
        }

        if ($create_pass !== $confirm_pass) {
            $this->error_response("Passwords do not match.");
            return;
        }

        // Hash the password before storing
        // $hashed_password = password_hash($create_pass, PASSWORD_BCRYPT);

        // Update password for the user
        $user_data = ['user_password_hash' => $create_pass];

        $update_status = $this->My_functions->update('users_tbl', ['user_id' => $user_id], $user_data);

        if ($update_status) {
            $response_data = ['user_id' => $user_id];
            $this->success_response("Password created successfully.", $response_data);
        } else {
            $this->error_response("Failed to create password or no changes made.");
        }
    }





    public function user_forgot_password()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        //logic start

        $this->success_response("Password reset link sent.");
    }

    public function user_create_new_password()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }
    
        $old_pass = $this->input->post('old_pass');
        $new_pass = $this->input->post('new_pass');
        $confirm_pass = $this->input->post('confirm_pass');
        $user_id = $this->input->post('user_id');
    
        if (empty($old_pass) || empty($new_pass) || empty($confirm_pass) || empty($user_id)) {
            $this->error_response("All fields are required.");
            return;
        }
    
        if ($new_pass !== $confirm_pass) {
            $this->error_response("New password and confirm password do not match.");
            return;
        }
    
        // Fetch user details
        $user = $this->My_functions->select_where('users_tbl', ['user_id' => $user_id]);
    
        if (!$user || empty($user)) {
            $this->error_response("User not found.");
            return;
        }
    
        $user = (object) $user[0];
    
        // Verify old password
        if ($old_pass !== $user->user_password_hash)
         {
            $this->error_response("Old password is incorrect.");
            return;
        }
        
    
        // Hash the new password before updating
       // $hashed_password = password_hash($new_pass, PASSWORD_DEFAULT);
    
        // Update the new password in the database
        $update_status = $this->My_functions->update('users_tbl', ['user_id' => $user_id], ['user_password_hash' => $new_pass]);
    
        if ($update_status) {
            $this->success_response("Password updated successfully.", ['user_id' => $user_id]);
        } else {
            $this->error_response("Failed to update password or no changes made.");
        }
    }
    




    public function user_add_address()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        //logic start

        $this->success_response("Address added successfully.");
    }

    public function user_profile()
    {

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
            return;
        }

        $user_id =  $this->input->post('user_id');

        if (empty($user_id)) {
            $this->error_response("User ID is required.");
            return;
        }

        $users = $this->My_functions->select_where('users_tbl', ['user_id' => $user_id]);
        // print_r($users);
        if (!empty($users)) {
            $user_data = [];
            foreach ($users as $user) {
                $user_data[] = [
                    'user_role'          => $user['user_role'],
                    'user_mobile_number' => $user['user_mobile_number'],
                    'user_name'          => $user['user_name'],
                    'user_email'         => $user['user_email'],
                ];
            }
            $this->success_response("User profiles fetched successfully.", $user_data);
        } else {
            $this->error_response("No users found.");
        }
    }




    public function user_change_password()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        //logic start

        $this->success_response("Password changed successfully.");
    }

    public function user_accept_terms()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        //logic start

        $this->success_response("Terms and conditions accepted.");
    }

    public function user_support_post()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        //logic start

        $this->success_response("Support request submitted.");
    }

    public function user_show_category()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
            $this->method_not_allowed();
        }

        //logic start

        $this->success_response("Categories fetched successfully.");
    }

    public function user_show_sub_category()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
            $this->method_not_allowed();
        }

        //logic start

        $this->success_response("Subcategories fetched successfully.");
    }

    public function user_show_products()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
            $this->method_not_allowed();
        }

        //logic start

        $this->success_response("Products fetched successfully.");
    }

    public function user_add_to_cart()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        //logic start

        $this->success_response("Product added to cart.");
    }

    public function user_cart_to_buy()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        //logic start

        $this->success_response("Cart items moved to checkout.");
    }

    public function user_schedule_pickup()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        //logic start

        $this->success_response("Pickup scheduled successfully.");
    }

    public function user_schedule_delivery()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        //logic start

        $this->success_response("Delivery scheduled successfully.");
    }

    public function user_rate_driver()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        //logic start

        $this->success_response("Driver rated successfully.");
    }

    public function user_select_pickup_time()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        //logic start

        $this->success_response("Pickup time selected.");
    }

    public function user_add_pickup_address()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        //logic start

        $this->success_response("Pickup address added.");
    }

    public function user_order_summary()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
            $this->method_not_allowed();
        }

        //logic start

        $this->success_response("Order summary retrieved.");
    }

    public function user_confirm_payment()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        //logic start

        $this->success_response("Payment confirmed.");
    }

    public function user_driver_details()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
            $this->method_not_allowed();
        }

        //logic start

        $this->success_response("Driver details fetched.");
    }
}
