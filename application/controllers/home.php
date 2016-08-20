<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('include/head');
		$this->load->view('include/nav');
		$this->load->view('home/home');
		$this->load->view('include/footer');
	}

	public function teste()
	{
		echo "Gabriel";
	}
}
