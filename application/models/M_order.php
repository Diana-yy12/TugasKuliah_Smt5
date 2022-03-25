<?php 
	/**
	 * 
	 */
	class M_order extends CI_Model
	{
		
		// function __construct(argument)
		// {
			
		// }
		public function lihat_data($where, $table)
		{
			$this->db->join('menu', 'menu.id_menu=order.id_menu');
			$this->db->where($where);
			return $this->db->get($table);
		}

		public function tambah_data($data, $table)
		{
			$this->db->insert($table, $data);
		}
		public function edit_data($where, $table)
		{
			$this->db->where($where);
			return $this->db->get($table);
		}
		public function update_data($where, $data, $table)
		{
			$this->db->where($where);
			$this->db->update($table, $data);
		}

		public function hapus_data($where, $table)
		{
			$this->db->where($where);
			$this->db->delete($table);
		}
	}