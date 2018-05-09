<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargo extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Cargo_model')	;
	}

	public function index()
	{
		$data = array(
			'title' => 'Gestão de cargo',
			'navegacao' => 'cargo',
			'cargos' => $this->Cargo_model->select_all()

		);
		$this->load->view('template/inicio', $data);
		$this->load->view('cargo/index_v');
		$this->load->view('template/final');	
	}


	public function novo()
	{
		$data = array(
			'title' => 'Gestão de cargo',
			'navegacao' => 'Adicionar novo cargo'

		);
		$this->load->view('template/inicio', $data);
		$this->load->view('cargo/formulario_add_v');
		$this->load->view('template/final');	
	}


	public function form_novo()
	{

		$this->form_validation->set_rules('cargo','Cargo','required|trim');

		if($this->form_validation->run() == true){
			// SALVA NO BANCO DE DADOS
			$dados = $this->input->post();
			$stmt = $this->Cargo_model->new_cargo($dados);
			if($stmt){
				$this->session->set_flashdata('msg', msg('ok','O cargo <b>'.$dados['cargo'].'</b> foi adicionado com sucesso!'));
				redirect('cargo/novo');
			}else{
				$this->session->set_flashdata('msg', msg('erro','O cargo <b>'.$dados['cargo'].'</b> não pode ser adicionado.'));
				redirect('cargo/novo');
			}	
		}else{
			$this->novo();
		}
		
	}

	public function edit()
	{
		$id = $this->uri->segment(3);
		if(!$this->Cargo_model->select_id($id)){
			redirect('cargo');
		}else{
		$data = array(
			'title' => 'Gestão de cargo',
			'navegacao' => 'Editar o cargo',
			'cargos' => $this->Cargo_model->select_id($id)

		);
		$this->load->view('template/inicio', $data);
		$this->load->view('cargo/formulario_edit_v');
		$this->load->view('template/final');
		}	
	}

	public function form_edit()
	{
		$id = $this->input->post('id');
		$dados = $this->input->post();
		$stmt = $this->Cargo_model->edit($id,$dados);
		if($stmt){
			$this->session->set_flashdata('msg', msg('ok','O cargo foi atualizado com sucesso!'));
			redirect('cargo');
		}else{
			$this->session->set_flashdata('msg', msg('erro','O cargo não pode ser atualizado.'));
			redirect('cargo');
		}
	}
	


	public function delete()
	{

		$id = $this->uri->segment(3);
		$stmt = $this->Cargo_model->delete($id);

		if($stmt){
			$this->session->set_flashdata('msg', msg('ok','O cargo foi deletado com sucesso!'));
			redirect('cargo');
		}else{
			$this->session->set_flashdata('msg', msg('erro','O cargo não pode ser deletado.'));
			redirect('cargo');
		}

	}
}

