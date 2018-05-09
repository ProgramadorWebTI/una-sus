<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Funcionario_model');
		$this->load->model('Cargo_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data = array(
			'title' => 'Gestão de Funcionário',
			'navegacao' => 'Funcionario',
			'funcionarios' => $this->Funcionario_model->select_all(),
			'cargos' => $this->Cargo_model->select_all()

		);
		$this->load->view('template/inicio', $data);
		$this->load->view('funcionario/index_v');
		$this->load->view('template/final');
	}


	public function novo()
	{
		$data = array(
			'title' => 'Adicionar novo funcionário',
			'navegacao' => 'Adicionar novo funcionário',
			'cargos' => $this->Cargo_model->select_all()
		);
		$this->load->view('template/inicio', $data);
		$this->load->view('funcionario/formulario_add_v');
		$this->load->view('template/final');

	}


	public function delete()
	{
		$id = $this->uri->segment(3);
		$stmt = $this->Funcionario_model->delete_id($id);

		if($stmt){
			$this->session->set_flashdata('msg', msg('ok','O funcionario foi deletado com sucesso.'));
			redirect('funcionario');
		}else{
			$this->session->set_flashdata('msg', msg('erro','Error, o Funcionario não pode ser deletado.'));
			redirect('funcionario');
		}

	}
	


	public function form_novo()
	{

		// VALIDAR OS CAMPOS DA VIWE LOGIN
		$this->form_validation->set_rules('nome','Nome','required|trim');
		$this->form_validation->set_rules('cpf','CPF','required|trim|min_length[11]');
		$this->form_validation->set_rules('email','E-mail','required|trim');
		$this->form_validation->set_rules('telefone','Telefone','required|trim');
		$this->form_validation->set_rules('cargo_id','Cargo','required|trim');

		if($this->form_validation->run() == true){

			$dados = $this->input->post();
			$stmt = $this->Funcionario_model->new_user($dados);
			if($stmt){
				$this->session->set_flashdata('msg', msg('ok','O funcionario <b>'.$dados['nome'].'</b> foi adicionado com sucesso!'));
				redirect('funcionario/novo');
			}else{
				$this->session->set_flashdata('msg', msg('erro','O funcionario <b>'.$dados['nome'].'</b> não pode ser adicionado.'));
				redirect('funcionario/novo');
			}	
		}else{
			$this->novo();
		}
	}
	

	public function edit()
	{
		$id = $this->uri->segment(3);

		$data = array(
			'title' => 'Adicionar novo funcionário',
			'navegacao' => 'Editar o funcionário',
			'funcionarios' => $this->Funcionario_model->select_id($id),
			'cargos' => $this->Cargo_model->select_all()
		);

		$this->load->view('template/inicio', $data);		
		$this->load->view('funcionario/formulario_edit_v');
		$this->load->view('template/final');
	}


	public function form_edit()
	{
		$id    = $this->input->post('id');
		$dados = array(
			'nome' => $this->input->post('nome'),
			'cpf' => $this->input->post('cpf'),
			'email' => $this->input->post('email'),
			'telefone' => $this->input->post('telefone'),
			'cargo_id' => $this->input->post('cargo')

);

		// echo "<pre>";
		// print_r($dados); die();
		$stmt  = $this->Funcionario_model->edit($id,$dados);
		
		if($stmt){
			$this->session->set_flashdata('msg', msg('ok','O funcionario foi atualizado com sucesso!'));
			redirect('funcionario');
		}else{
			$this->session->set_flashdata('msg', msg('erro','O funcionario  não pode ser atualizado.'));
			redirect('funcionario');
		}	

	}
	
	
	

}

