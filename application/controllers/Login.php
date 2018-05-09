<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(isset($_SESSION['autenticado'])==1){
			redirect('panel');
		}
		$this->load->library('form_validation');$this->load->model('Usuario_model');
	}

	public function index()
	{		
		$this->load->view('login/index');
	}


	public function auth()
	{
		// VALIDAR OS CAMPOS DA VIWE LOGIN
		$this->form_validation->set_rules('usuario','Usuário','required|trim');
		$this->form_validation->set_rules('senha','Senha','required|trim');

		// EXECUTAR A VALIDAÇÃO;
		if($this->form_validation->run() == true){
			
			$usuario = $this->input->post('usuario');
			$senha = $this->input->post('senha');

			// EXECUTAR A QUERY NO BANCO DE DADOS MYSQL
			$stmt = $this->Usuario_model->autentica_usuario_login($usuario,$senha);
			if($stmt){				
				$this->session->set_userdata('autenticado',1);
				$this->session->set_userdata('user',$stmt);
				redirect('panel');
			}else{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger">usuário ou senha inválidos.</div>');
				redirect('login');
			}

		}else{
			// CASO HAJA ERRO NA VALIDAÇÃO, IRÁ CHAMAR O METODO INDEX, QUE RETORNARÁ A MESMA VIEW
			$this->index();
		}


	}
}