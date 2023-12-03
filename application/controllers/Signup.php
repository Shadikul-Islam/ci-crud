<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('signup.php');
    }

    public function save_credentials_post()
        {
            $this->load->database();
            $fullname = $this->input->post('fullname');
            $username = $this->input->post('username');
            $pass = $this->input->post('password');
            $data = array(
                'fullname' => $fullname,
                'username' => $username,
                'pssword'=> $pass
            );
           
            $this->db->insert('users', $data);
            echo "Credentials saved to the database!";
        }

    }

?>