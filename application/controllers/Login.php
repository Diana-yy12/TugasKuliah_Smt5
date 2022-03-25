<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		// $this->load->view('template/header');
		$this->load->view('v_login');
		$this->session->set_flashdata('pesan','0');
	}

	public function register()
	{
		// $this->load->view('template/header');
		$this->load->view('v_register');
		$this->session->set_flashdata('pesan','0');
	}

	public function tambah_user()
	{
		$this->form_validation->set_rules('username','Username', 'required|is_unique[users.username]');
		$this->form_validation->set_rules('nama','Nama Lengkap', 'required');
		$this->form_validation->set_rules('no_telp','Nomor Telepon', 'required');
		$this->form_validation->set_rules('alamat','Alamat', 'required');
		$this->form_validation->set_rules('email','Email', 'required');
		$this->form_validation->set_rules('password','Password', 'required');
		$this->form_validation->set_rules('cpassword','Confirm Password', 'required|matches[password]');

		if($this->form_validation->run() == false){
			$this->register();
		}else{
			$data = array(
				'nama' 		=> $this->input->post('nama'),
				'no_telp' 	=> $this->input->post('no_telp'),
				'alamat' 	=> $this->input->post('alamat'),
				'username' 	=> $this->input->post('username'),
				'email' 	=> $this->input->post('email'),
				'password' 	=> md5($this->input->post('password')),
			);

			$this->m_order->tambah_data($data, 'users');
			$this->session->set_flashdata('pesan', '2');
			redirect('login');
		}
	}
	
	public function proseslogin()
	{
		$this->form_validation->set_rules('email', 'Email', 'required',['required' => 'Email Wajib Diisi!']);
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('v_login');
		}else{
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$cekuser = $this->m_login->cekuser($email, $password);
			$this->session->set_flashdata('pesan','0');

			if ($cekuser->num_rows() > 0) {
				foreach($cekuser->result() as $ck)
				{
					$sess_data['id_user'] 	= $ck->id_user;
					$sess_data['username'] 	= $ck->username;
					$sess_data['email'] 	= $ck->email;
					$sess_data['password'] 	= $ck->password;
					$this->session->set_userdata($sess_data);
					redirect('home');
				}
			}else{
				$this->session->set_flashdata('pesan','1');
				$this->load->view('v_login');
				// redirect('login');
			}
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
