<?php defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni_model extends CI_Model
{


	// login function
	public function insert_kelas($data)
	{
		$this->db->insert('testimonials', $data);
		return true;
	}

	// login function
	public function update_kelas($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('testimonials', $data);
		return true;
	}

	public function list_kelas()
	{
		$this->db->select('*');
		$this->db->from('testimonials');
		$this->db->order_by('id', 'asc');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function detail_kelas($id)
	{
		$this->db->select('*');
		$this->db->from('testimonials');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row_array();
	}

	// login function
	public function delete_kelas($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('testimonials', );
		return true;
	}

	
}
