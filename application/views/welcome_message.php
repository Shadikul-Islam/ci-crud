<?php
defined('BASEPATH') OR exit('No direct script access allowed');
echo "This is my CodeIgniter App";

$this->load->database();
if ($this->db->initialize())
{
	echo "success";
}
else{
	echo "failed";
}


?>