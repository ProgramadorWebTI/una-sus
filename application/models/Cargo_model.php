<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargo_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();		
	}
	
	public function select_all()
	{
		return $this->db->get('tb_cargo')->result();
	}

	public function select_id($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('tb_cargo')->result();		
	}

	public function edit($id,$dados)
	{
		$this->db->where('id',$id);
		return $this->db->update('tb_cargo', $dados);		
	}
	

	public function delete($id)
	{
		$this->db->where('id',$id);
		return $this->db->delete('tb_cargo');	
	}
	

	public function new_cargo($dados)
	{
		return $this->db->insert('tb_cargo', $dados);		
	}
	
	

}
