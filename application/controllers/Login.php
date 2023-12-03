<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index(){
        $this->load->helper('url');
    
        $this->load->view('login');
    }

    public function user_login_post()
        {
            $this->load->database();
            $this->load->model('User');
            $user = $this->input->post('username');
            $pass = $this->input->post('password');
            $data = array(
                'username' => $user,
                'password'=> $pass
            );
            $result = $this->User->get_username($user,$pass);
            print_r ($result);
            // echo "Credentials saved to the database!";
        }

    }

?>