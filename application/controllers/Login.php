<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index(){
        $this->load->helper('url');
    
        $this->load->view('login');
    }

    public function user_login_post()
        {
            $user = $this->input->post('username');
            $pass = $this->input->post('password');
            $this->load->model('Users');
            $result = $this->Users->get_username($user,$pass);
            // echo $result;
            if($result == 1){
                echo "Login Success!";
            }
            else
                echo "Invalid Username or Password";
        }

    }

?>