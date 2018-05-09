<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipamento_model extends CI_Model {


	public function insert($dados)
	{
		return $this->db->insert('tb_equipamento', $dados);
	}


	public function select_all()
	{
		return $this->db->get('tb_equipamento')->result();
	}


	public function select_id($id)
	{
		$this->db->where('id', $id);	
		return $this->db->get('tb_equipamento')->result();
	}

	
	
	
	
	

}
