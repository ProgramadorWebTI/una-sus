<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends MY_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Panel adiministrativo',
			'navegacao' => 'Panel adiministrativo'
		);
		$this->load->view('template/inicio', $data);
		$this->load->view('home/index');
		$this->load->view('template/final');
	}

}
