<?php 
	/**
	 * 
	 */
	class M_home extends CI_Model
	{
		
		// function __construct(argument)
		// {
			
		// }
		public function lihatdata($table)
		{
			return $this->db->get($table);
		}

		public function tambahdata($data, $table)
		{
			$this->db->insert($table, $data);
		}
		public function editdata($where, $table)
		{
			$this->db->where($where);
			return $this->db->get($table);
		}
		public function updatedata($where, $data, $table)
		{
			$this->db->where($where);
			$this->db->update($table, $data);
		}
	}