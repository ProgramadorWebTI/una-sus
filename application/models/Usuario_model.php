<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	
	public function autentica_usuario_login($usuario,$senha)
	{
		$this->db->where('usuario',$usuario);	
		$this->db->where('senha',$senha);	
		return $this->db->get('tb_usuario')->result();
	}


	public function selecionar_todos_usuarios()
	{
		return $this->db->get('tb_usuario')->result();	
	}
	
	

}
