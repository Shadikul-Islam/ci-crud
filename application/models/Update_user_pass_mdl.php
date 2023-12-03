<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_user_pass_mdl extends CI_Model {
    public function updates($fullname, $oldUser, $newUser, $pass){
        $sql = "UPDATE users SET fullname = '$fullname', username = '$newUser', pssword = '$pass' WHERE username = '$oldUser' ";
        $query = $this->db->query($sql);
        $sql = "SELECT * FROM users WHERE username='$newUser' AND pssword='$pass' AND fullname='$fullname' ";
        $query = $this->db->query($sql);
        if($query->num_rows() == 1)
        {
            return true;
        }
        else
            return false;

    }

}

?>