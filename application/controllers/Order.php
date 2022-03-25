<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

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
		$where = array('id_user' =>$this->session->userdata['id_user']);
		$data['order'] = $this->m_order->lihat_data($where, 'order')->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('v_order');
		$this->load->view('template/footer');
	}

	public function tambah_data()
	{
		$id_user = $this->session->userdata['id_user'];
		$id_menu = $this->input->post('id_menu');
		$qty = $this->input->post('qty');
		$jmldata = count($id_menu);
		for ($i=0; $i < $jmldata ; $i++) { 
			$data = array(
				'id_user' => $id_user,
				'id_menu' => $id_menu[$i],
				'qty' => $qty[$i],
			);
			$this->m_order->tambah_data($data, 'order');
			$this->session->set_flashdata('pesan', '1');
		}
		redirect('order');
	}

	public function show_edit()
	{
		$id_order = $this->input->post('id_order');
		$where = array('id_order'=>$id_order);
		$cekdata = $this->m_order->edit_data($where,'order')->row();
		$data = array('cek'=>$cekdata);
		echo json_encode($data);
	}
	
	public function update_data()
	{
		$this->form_validation->set_rules('id_menu_edit', 'menu', 'required');
		$this->form_validation->set_rules('qty_edit', 'menu', 'required');
		if ($this->form_validation->run()==false) {
			$msg = ['error' => [
			'id_menu' => form_error('id_menu_edit'),
			'qty' => form_error('qty_edit'),
		]];
			
		}else{
			$where = array('id_order' => $this->input->post('id_order'));
			$data = array(
				'id_menu' => $this->input->post('id_menu_edit'),
				'qty' => $this->input->post('qty_edit')
			);
			$this->m_order->update_data($where, $data, 'order');
			$msg=['success'];
		}
		echo json_encode($msg);
	}

	public function hapus_data()
	{
		$id_order = $this->input->post('id_order');
		$where = array('id_order'=>$id_order);
		$this->m_order->hapus_data($where,'order');
		$msg= ['sukses'];
		echo json_encode($msg);
	}
}
