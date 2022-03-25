<?php 
	/**
	 * 
	 */
	class M_login extends CI_Model
	{
		
		// function __construct(argument)
		// {
			
		// }
		public function cekuser($email, $password)
		{
			$this->db->where('email', $email);
			$this->db->where('password', $password);
			return $this->db->get('users');
		}

	}