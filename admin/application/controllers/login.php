<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{


	public function index()
	{
		$this->load->view('include/head');
		$this->load->view('login/index');
		$this->load->view('include/footer');
	}

	public function verificar_login()
	{

		$this->load->model('Login_model', 'login_model');

		$login = strip_tags(trim($this->input->post('email')));
		$senha = trim(md5($this->input->post('senha')));


		$verificarUsuario = $this->verificar_login($login,$senha);


		$usuarioLogado = array(
			'nome' => 'johndoe',
			'email' => 'johndoe@some-site.com',
			'logged_in' => TRUE
		);

		$this->session->set_userdata($usuarioLogado);


		$teste = $this->session->userdata();
		echo "<pre>";
		var_dump($teste);
		echo "</pre>";


	}
}
