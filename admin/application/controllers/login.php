<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$this->load->view('include/head');
		$this->load->view('login/index');
		$this->load->view('include/footer');
	}

	public function verificar_login()
	{
		$login = strip_tags(trim($this->input->post('email')));
		$senha = trim(md5($this->input->post('senha')));




		$novaSessao = array(
		        'username'  => 'johndoe',
		        'email'     => 'johndoe@some-site.com',
		        'logged_in' => TRUE
		);

		$this->session->set_userdata($novaSessao);



		$teste = $this->session->userdata();
		echo "<pre>";
		var_dump($teste);
		echo "</pre>";


	}
}
