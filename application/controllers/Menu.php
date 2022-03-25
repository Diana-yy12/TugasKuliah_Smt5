<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	function __construct()
	{
		parent:: __construct();

		if (!isset($this->session->userdata['email'])) {
			$this->session->set_flashdata('pesann', '<div>Harap login terlebih dahulu</div>');
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('v_menu');
		$this->load->view('template/footer');
	}
	
}
