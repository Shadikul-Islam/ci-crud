<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    public function get_username($username, $pass) {
        $this->load->database();
        $sql = "SELECT username FROM users WHERE = '$username' AND pssword = '$pass' ";
        $hello = $this->db->query($sql);
        return $hello->row();
    }
}

?>