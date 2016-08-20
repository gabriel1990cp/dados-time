<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}


	public function verificar_usuario($login, $senha)
	{

		$this->db->select('id, nome, usuario, permissao, senha');
		$this->db->where('id', $id);
		$this->db->limit(1);
		return $this->db->get('tb_usuarios')->result();

	}


}