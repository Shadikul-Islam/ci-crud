<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		echo "This is my CodeIgniter App </br>";

		$this->load->database();
		if ($this->db->initialize())
			{
				echo "success </br>";
			}
		else
			{
				echo "failed </br>";
			}

		$this->load->model('User');
		$username = $this->User->get_username();

		echo "Fetching data from db, User is: " . $username;
	}

	
}
