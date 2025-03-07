<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_api extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('Customer_model');
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

    public function user_sign_in()
    {
       
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        // Your API logic here

        $this->success_response("User signed in successfully.");
    }

    public function user_sign_up()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        // Your API logic here

        $this->success_response("User registered successfully.");
    }

    public function user_verify()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        // Your API logic here

        $this->success_response("User verification successful.");
    }

    public function user_create_password()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        // Your API logic here

        $this->success_response("Password created successfully.");
    }

    public function user_forgot_password()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        // Your API logic here

        $this->success_response("Password reset link sent.");
    }

    public function user_create_new_password()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        // Your API logic here

        $this->success_response("New password created successfully.");
    }

    public function user_add_address()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        // Your API logic here

        $this->success_response("Address added successfully.");
    }

    public function user_profile()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
            $this->method_not_allowed();
        }

        // Your API logic here

        $this->success_response("User profile fetched successfully.");
    }

    public function user_change_password()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        // Your API logic here

        $this->success_response("Password changed successfully.");
    }

    public function user_accept_terms()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        // Your API logic here

        $this->success_response("Terms and conditions accepted.");
    }

    public function user_support_post()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        // Your API logic here

        $this->success_response("Support request submitted.");
    }

    public function user_show_category()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
            $this->method_not_allowed();
        }

        // Your API logic here

        $this->success_response("Categories fetched successfully.");
    }

    public function user_show_sub_category()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
            $this->method_not_allowed();
        }

        // Your API logic here

        $this->success_response("Subcategories fetched successfully.");
    }

    public function user_show_products()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
            $this->method_not_allowed();
        }

        // Your API logic here

        $this->success_response("Products fetched successfully.");
    }

    public function user_add_to_cart()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        // Your API logic here

        $this->success_response("Product added to cart.");
    }

    public function user_cart_to_buy()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        // Your API logic here

        $this->success_response("Cart items moved to checkout.");
    }

    public function user_schedule_pickup()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        // Your API logic here

        $this->success_response("Pickup scheduled successfully.");
    }

    public function user_schedule_delivery()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        // Your API logic here

        $this->success_response("Delivery scheduled successfully.");
    }

    public function user_rate_driver()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        // Your API logic here

        $this->success_response("Driver rated successfully.");
    }

    public function user_select_pickup_time()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        // Your API logic here

        $this->success_response("Pickup time selected.");
    }

    public function user_add_pickup_address()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        // Your API logic here

        $this->success_response("Pickup address added.");
    }

    public function user_order_summary()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
            $this->method_not_allowed();
        }

        // Your API logic here

        $this->success_response("Order summary retrieved.");
    }

    public function user_confirm_payment()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->method_not_allowed();
        }

        // Your API logic here

        $this->success_response("Payment confirmed.");
    }

    public function user_driver_details()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
            $this->method_not_allowed();
        }

        // Your API logic here

        $this->success_response("Driver details fetched.");
    }
}
