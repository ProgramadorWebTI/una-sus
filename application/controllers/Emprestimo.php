<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emprestimo extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Funcionario_model');
		$this->load->model('Usuario_model');
		$this->load->model('Emprestimo_model');
		$this->load->model('Equipamento_model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Gestão de Emprestimo',
			'navegacao' => 'Emprestimo'

		);

		$this->load->view('template/inicio', $data);
		$this->load->view('emprestimo/index_v');
		$this->load->view('template/final');		
	}

	public function novo() {
		$data = array(
			'title' => 'Gestão de Emprestimo',
			'navegacao' => 'Adicionar Emprestimo',
			'usuarios'  => $this->Usuario_model->selecionar_todos_usuarios(),
			'funcionarios'  => $this->Funcionario_model->select_all()

		);

		$this->load->view('template/inicio', $data);
		$this->load->view('emprestimo/formulario_add_v');
		$this->load->view('template/final');		
	}

	public function form_novo()
	{
		$dados =  $this->input->post();
		$stmt =   $this->Emprestimo_model->insert_new($dados);
		if($stmt){
			$this->session->set_flashdata('msg', msg('ok','O emprestimo foi adicionado com sucesso!'));
			redirect('emprestimo/novo');
		}else{
			$this->session->set_flashdata('msg', msg('erro','O emprestimo não pode ser adicionado.'));
			redirect('emprestimo/novo');
		}	
	}

	public function executa_emprestimo()
	{
		

		$data = array(
			'title' => 'Gestão de Emprestimo',
			'navegacao' => 'Emprestar material',
			'usuarios'  => $this->Usuario_model->selecionar_todos_usuarios(),
			'funcionarios'  => $this->Funcionario_model->select_all(),
			'equipamentos'  => $this->Equipamento_model->select_all(),
			'emprestimos' => $this->Emprestimo_model->select_all()

		);

		$this->load->view('template/inicio', $data);
		$this->load->view('emprestimo/formulario_emprestimo_add_v');
		$this->load->view('template/final');		
	}
}
