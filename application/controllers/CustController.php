<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustController extends CI_Controller {

    public function __construct() {
        parent::__construct();
       
        $this->load->model('Customer_model');
    }

    
    public function index() {
        $data['users'] = $this->Customer_model->select('users_tbl');
        // You can load a view to display the data
        $this->load->view('pages/index', $data);
    }

    
    public function get_user($id) {
       
        $user = $this->Customer_model->get_user(['user_id' => $id]);
        if ($user) {
          
            echo json_encode($user);
        } else {
            echo json_encode(['error' => 'User not found']);
        }
    }

    
    public function create() {
       
        $data = [
            'user_mobile_number'   => $this->input->post('mobile_number'),
            'user_password_hash'   => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'user_name'            => $this->input->post('name'),
            'user_email'           => $this->input->post('email')
        ];

        $insert_id = $this->Customer_model->insert('users_tbl', $data);

       
        echo json_encode(['user_id' => $insert_id]);
    }

    
    public function update($id) {
        $data = [
            'user_name'  => $this->input->post('name'),
            'user_email' => $this->input->post('email')
        ];
        $this->Customer_model->update('users_tbl', ['user_id' => $id], $data);
        echo json_encode(['status' => 'success']);
    }

    public function delete($id) {
        $this->Customer_model->delete('users_tbl', ['user_id' => $id]);
        echo json_encode(['status' => 'deleted']);
    }
}
