<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances] = however] = you /y want to/emap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example] = the "welcome" c/ss
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route] = but allows you / automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character] = so it requires /anslation.
| When you set this option to TRUE] = it will replace/LL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'PageController/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// index page 
$route['login'] = 'PageController/login';


// forgot_password page 
$route['forgot_password'] = 'PageController/forgot_password';

// profile page 
$route['profile'] = 'PageController/profile';

// dashboard page 
$route['dashboard'] = 'PageController/dashboard';

// user a/c management page 
$route['user_management'] = 'PageController/user_management';

// user_details page 
$route['user_details'] = 'PageController/user_details';

// vendor_management page 
$route['vendor_management'] = 'PageController/vendor_management';

// vendor_details page 
$route['vendor_details'] = 'PageController/vendor_details';

// vendor_completed_order page 
$route['vendor_completed_order'] = 'PageController/vendor_completed_order';

// driver_management page 
$route['driver_management'] = 'PageController/driver_management';

// driver_current_order page 
$route['driver_current_order'] = 'PageController/driver_current_order';

// driver_pending_order page 
$route['driver_pending_order'] = 'PageController/driver_pending_order';

// driver_completed_order page 
$route['driver_completed_order'] = 'PageController/driver_completed_order';

// driver_details page 
$route['driver_details'] = 'PageController/driver_details';

// privacy_policy page 
$route['privacy_policy'] = 'PageController/privacy_policy';

// terms_condition page 
$route['terms_condition'] = 'PageController/terms_condition';

// manage_commission page 
$route['manage_points'] = 'PageController/manage_points';

// user_cancelled_order page 
$route['user_cancelled_order'] = 'PageController/user_cancelled_order';

// user_completed_order page 
$route['user_completed_order'] = 'PageController/user_completed_order';

//manage driver_charges page 
$route['driver_charges'] = 'PageController/driver_charges';

// wallet_management page 
$route['wallet_management'] = 'PageController/wallet_management';

// wallet_history page 
$route['wallet_history'] = 'PageController/wallet_history';

$route['add_service_type'] = 'PageController/add_service_type';

$route['services'] = 'PageController/services';

$route['sub_services'] = 'PageController/sub_services';
$route['manage_language'] = 'PageController/manage_language';

$route['faq'] = 'PageController/faq';

$route['add_state'] = 'PageController/add_state';

$route['add_city'] = 'PageController/add_city';

$route['add_vehicle_type'] = 'PageController/add_vehicle_type';

$route['new_order'] = 'PageController/new_order';

$route['order_details'] = 'PageController/order_details';

$route['coupon_code'] = 'PageController/coupon_code';

$route['ongoing_orders'] = 'PageController/ongoing_orders';

$route['ready_to_delivered'] = 'PageController/ready_to_delivered';

$route['completed_orders'] = 'PageController/completed_orders';

$route['ratings'] = 'PageController/ratings';

$route['manage_wallet'] = 'PageController/manage_wallet';

$route['vendor_wallet'] = 'PageController/vendor_wallet';

$route['driver_wallet'] = 'PageController/driver_wallet';

$route['create_invitation_code'] = 'PageController/create_invitation_code';

$route['auto_rating'] = 'PageController/auto_rating';

$route['vendor_commision'] = 'PageController/vendor_commision';

$route['support_center'] = 'PageController/support_center';

$route['promo_code'] = 'PageController/promo_code';

$route['commision_agreement'] = 'PageController/commision_agreement';

$route['vendor_details_assign_order'] = 'PageController/vendor_details_assign_order';

$route['vendor_details_inprocess_order'] = 'PageController/vendor_details_inprocess_order';

$route['vendor_details_readytodeliverd_order'] = 'PageController/vendor_details_readytodeliverd_order';

$route['vendor_details_completed_order'] = 'PageController/vendor_details_completed_order';

$route['vendor_details_rating'] = 'PageController/vendor_details_rating';

$route['vendor_details_transaction_history'] = 'PageController/vendor_details_transaction_history';

$route['driver_details_new_order'] = 'PageController/driver_details_new_order';

$route['driver_details_ongoing_order'] = 'PageController/driver_details_ongoing_order';

$route['driver_details_completed_order'] = 'PageController/driver_details_completed_order';

$route['driver_details_rating'] = 'PageController/driver_details_rating';

$route['user_details_new_order'] = 'PageController/user_details_new_order';

$route['user_details_inprocess_order'] = 'PageController/user_details_inprocess_order';

$route['user_details_ready_deliver'] = 'PageController/user_details_ready_deliver';

$route['user_details_completed_order'] = 'PageController/user_details_completed_order';

$route['user_details_wallet'] = 'PageController/user_details_wallet';

$route['revenue_management'] = 'PageController/revenue_management';


// Api For Admin Dashboard
$route['fetch_orders'] = 'ApiAdmin/fetch_orders';
$route['get_vendor'] = 'ApiAdmin/get_all_vendor';
$route['inprocess_order'] = 'ApiAdmin/inprocess_order';
$route['readytodeliver_order'] = 'ApiAdmin/readytodeliver_order';
$route['complited_order'] = 'ApiAdmin/complited_order';
$route['cust_det_by_id'] = 'ApiAdmin/get_customer_det_by_id';
$route['customer_new_order'] = 'ApiAdmin/get_new_order_perticular_cust';
$route['customer_inprocess_order'] = 'ApiAdmin/get_new_order_particular_cust';
$route['customer_readydeliver_order'] = 'ApiAdmin/get_readytodilever_particular_cust';
$route['customer_complited_order'] = 'ApiAdmin/get_customer_complited_order';
$route['get_all_revenue'] = 'ApiAdmin/get_all_revenue';
$route['get_user_wallet_amt'] = 'ApiAdmin/get_all_user_wallet_amt';
$route['add_privacy_policy'] = 'ApiAdmin/add_privacy_policy';
$route['get_privacy_policy'] = 'ApiAdmin/get_privacy_policy';
$route['add_terms_condition'] = 'ApiAdmin/add_terms_condition';
$route['get_terms_condition'] = 'ApiAdmin/get_terms_condition';
$route['add_faq'] = 'ApiAdmin/add_faq';





// Routes for User API
$route['user_sign_in'] = 'User_api/user_sign_in';
$route['user_sign_up'] = 'User_api/user_sign_up';
$route['user_verify'] = 'User_api/user_verify';
$route['user_create_password'] = 'User_api/user_create_password';
$route['user_forgot_password'] = 'User_api/user_forgot_password';
$route['user_create_new_password'] = 'User_api/user_create_new_password';
$route['user_add_address'] = 'User_api/user_add_address';
$route['user_profile'] = 'User_api/user_profile';
$route['user_change_password'] = 'User_api/user_change_password';
$route['user_accept_terms'] = 'User_api/user_accept_terms';
$route['user_support_post'] = 'User_api/user_support_post';
$route['user_show_category'] = 'User_api/user_show_category';
$route['user_show_sub_category'] = 'User_api/user_show_sub_category';
$route['user_show_products'] = 'User_api/user_show_products';
$route['user_add_to_cart'] = 'User_api/user_add_to_cart';
$route['user_cart_to_buy'] = 'User_api/user_cart_to_buy';
$route['user_schedule_pickup'] = 'User_api/user_schedule_pickup';
$route['user_schedule_delivery'] = 'User_api/user_schedule_delivery';
$route['user_rate_driver'] = 'User_api/user_rate_driver';
$route['user_select_pickup_time'] = 'User_api/user_select_pickup_time';
$route['user_add_pickup_address'] = 'User_api/user_add_pickup_address';
$route['user_order_summary'] = 'User_api/user_order_summary';
$route['user_confirm_payment'] = 'User_api/user_confirm_payment';
$route['user_driver_details'] = 'User_api/user_driver_details';


