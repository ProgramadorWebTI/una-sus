<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emprestimo_model extends CI_Model {


	public function insert_new($dados)
	{
			return  $this->db->insert('tb_emprestimo', $dados);
	}
		

	public function select_all()
	{
			return $this->db->query(
				"
				select 
				E.id as idEmprestimo,
				E.data_emprestimo,
				E.pessoas_id,
				E.usuario_id,
				P.id as idPessoa,
				P.nome,
				P.cpf,
				P.email,
				P.telefone,
				P.cargo_id,
				U.id as idUsuario,
				U.usuario
				from tb_emprestimo E
				INNER JOIN tb_pessoa P
				on P.id = E.pessoas_id
				INNER JOIN tb_usuario U
				on U.id = E.usuario_id
				"
			)->result();
	}
	
	

}

/* End of file Emprestimo_model.php */
/* Location: ./application/models/Emprestimo_model.php */