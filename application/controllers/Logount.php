<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logount extends CI_Controller {

	public function index()
	{
		foreach ($_SESSION as $key => $value) {
			unset($key);
			session_destroy();
			
		}
		
		redirect('login');
	}

}

/* End of file Logount.php */
/* Location: ./application/controllers/Logount.php */