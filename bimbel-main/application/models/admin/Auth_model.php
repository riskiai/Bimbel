<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{


	// login function
	public function login($data)
	{
		$query = $this->db->get_where('xx_admin', array('username' => $data['username']));
		if ($query->num_rows() == 0) {
			return false;
		} else {
			//Compare the password attempt with the password we have stored.
			$result = $query->row_array();
			$validPassword = password_verify($data['password'], $result['password']);
			if ($validPassword) {
				return $result = $query->row_array();
			}
		}
	}

	// total jumlah data 
	public function data_user($data)
	{
		$query = $this->db->get_where('xx_admin', array('username' => $data));
		if ($query->num_rows() == 0) {
			return false;
		} else {
			return $result = $query->row_array();
		}
	}

	public function total($from)
	{
		$this->db->select('*');
		$this->db->from($from);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function total_pendaftaran()
	{
		$this->db->select('xx_pendaftaran.id_kelas,xx_pendaftaran.id_pendaftaran, xx_pendaftaran.status ,xx_pendaftaran.created_at, xx_users.nama,, xx_profile.no_hp, xx_pendaftaran.status_pembayaran');
		$this->db->from('xx_pendaftaran');
		$this->db->join('xx_users', 'xx_users.id_user = xx_pendaftaran.id_user');
		$this->db->join('xx_profile', 'xx_profile.id_user = xx_users.id_user');
		// $this->db->where('xx_pendaftaran.status', 1);
		$this->db->order_by('xx_pendaftaran.created_at', 'desc');
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->num_rows();
	}
	
	
	public function total_admin()
	{
		$this->db->select('*');
		$this->db->from('xx_admin');
		$this->db->where('status', '1');
		$this->db->order_by('id_admin', 'asc');
		$query = $this->db->get();
		return $query->num_rows();
	}

}
