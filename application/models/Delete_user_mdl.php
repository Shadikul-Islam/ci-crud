<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete_user_mdl extends CI_Model {
    public function delete($user){
        $sql = "DELETE FROM users WHERE username = '$user' ";
        $query = $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        else
            return false;
    }

}
?>