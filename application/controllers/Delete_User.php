<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete_User extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('delete_user');
    }

    public function delete(){
        $user = $this->input->post('username');
        $this->load->model('Delete_user_mdl');
        $result = $this->Delete_user_mdl->delete($user);
        if ($result==1) {
            echo "Deleted Successfully";
        }
        else
            echo "Failed to Delete";
    }
}

?>