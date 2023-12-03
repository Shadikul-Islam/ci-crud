<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model {
    public function get_username($username, $pass) {
        $this->load->database();
        $sql = "SELECT * FROM users WHERE username = '$username' AND pssword = '$pass' ";
        $query = $this->db->query($sql);
        if($query->num_rows()==1){
            return true;
        }
    }
}

?>