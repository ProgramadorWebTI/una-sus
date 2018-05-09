<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipamento extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Equipamento_model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Gestão de cargo',
			'navegacao' => 'lista de equipamento',
			'equipamentos' => $this->Equipamento_model->select_all()

		);
		$this->load->view('template/inicio', $data);
		$this->load->view('equipamento/index_v');
		$this->load->view('template/final');		
	}

	public function novo()
	{
		$data = array(
			'title' => 'Gestão de Equipamento',
			'navegacao' => 'Adicionar novo quipamento'

		);
		
		$this->load->view('template/inicio', $data);
		$this->load->view('equipamento/formulario_add_v');
		$this->load->view('template/final');			
	}


	public function form_novo()
	{

		

		$this->form_validation->set_rules('descricao','Produto','required|trim');
		$this->form_validation->set_rules('modelo','Modelo','required|trim');
		$this->form_validation->set_rules('serial','Serial','required|trim');
		$this->form_validation->set_rules('nota_fiscal','Nota fiscal','required|trim');
		$this->form_validation->set_rules('data_compra','data da compra','required|trim');
		$this->form_validation->set_rules('patrimonio','Patrimonio','required|trim');
		$this->form_validation->set_rules('observacao','Observação','required|trim');
		$this->form_validation->set_rules('data_cadastro','data do cadastro','required|trim');

		if($this->form_validation->run() == true){
			$dados = $this->input->post();
			$stmt = $this->Equipamento_model->insert($dados);
			if($stmt){
				$this->session->set_flashdata('msg', msg('ok','O Equipamento <b>'.$dados['descricao'].'</b> foi adicionado com sucesso!'));
				redirect('equipamento/novo');
			}else{
				$this->session->set_flashdata('msg', msg('erro','O Equipamento <b>'.$dados['descricao'].'</b> não pode ser adicionado.'));
				redirect('equipamento/novo');
			}	
		}else{
			$this->novo();			
		}
	}


	public function view()
	{
		$id = $this->uri->segment(3);
		
		$data = array(
			'title' => 'Gestão de Equipamento',
			'navegacao' => 'Visualização de Equipamento',
			'equipamentos' => $this->Equipamento_model->select_id($id)

		);
		
		$this->load->view('template/inicio', $data);
		$this->load->view('equipamento/view_v');
		$this->load->view('template/final');	

	}
	
	
	

}
