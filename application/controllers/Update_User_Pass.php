<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_User_Pass extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('update_user_pass');
    }
    public function update(){
        $fullname = $this->input->post('fullname');
        $oldUser = $this->input->post('old-username');
        $newUser = $this->input->post('new-username');
        $password = $this->input->post('password');

        $this->load->model('Update_user_pass_mdl');
        $result = $this->Update_user_pass_mdl->updates($fullname, $oldUser, $newUser, $password);
        if($result == 1)
        {
            echo "Update Sucess!";
        }
        else
        {
            echo "Update Failed";
        }

    }

}

?>