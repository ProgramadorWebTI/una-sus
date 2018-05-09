<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario_model extends CI_Model {

	
	public function new_user($dados)
	{
		return $this->db->insert('tb_pessoa',$dados);	
	}


	public function delete_id($id)
	{

		 $this->db->where('id',$id);
		 return $this->db->delete('tb_pessoa');
	}
	


	public function select_all()
	{
		return $this->db->query(
			'
			SELECT 
			P.id AS idpessoa,
			P.nome,
			P.email,
			P.telefone,
			P.cpf,
			P.cargo_id,
			C.id as idcargo,
			C.cargo
			FROM tb_pessoa P, tb_cargo C 
			WHERE P.cargo_id = C.id
			'
		)->result();	
	}

	public function select_id($id)
	{		
		return $this->db->query(
			"
				SELECT 
				P.id AS idpessoa,
				P.nome,
				P.email,
				P.telefone,
				P.cpf,
				P.cargo_id,
				C.id as idcargo,
				C.cargo
				FROM tb_pessoa P, tb_cargo C 
				WHERE P.cargo_id = C.id
				AND P.id = '$id'
			"			
		)->result();	
	}
	


	public function edit($id,$dados)
	{
		$this->db->where('id',$id);
		return $this->db->update('tb_pessoa',$dados);
	}
	
	

}
