<?php defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/testimoni_model', 'testimoni_model');

		if ($this->session->userdata('is_user_login') == TRUE) {
			redirect('home');
		} elseif (!$this->session->userdata('is_admin_login') && !$this->session->userdata('is_user_login')) {
			redirect('admin/auth/login');
		} elseif ($this->session->userdata('is_admin_login') == TRUE && $this->session->userdata('status') != 1) {
			redirect('admin/dashboard');
		}
	}

	public function index()
	{

		$data['title'] = 'testimoni';
		$data['list_testimoni'] = $this->testimoni_model->list_kelas();

		$data['layout'] = 'admin/testimoni/list_testimoni';
		$this->load->view('admin/layout_admin', $data);
	}

	

	public function add_testimoni()
	{
	


		if ($this->input->post('add_testimoni')) {

			$this->form_validation->set_rules(
				'picture',
				'Picture',
				'trim|required|min_length[3]',
				array(
					'required'    => '%s harus diisi!',
					'min_length'  => '%s minimal 3 karakter!',
				)
			);
			$this->form_validation->set_rules(
				'name',
				'Name',
				'trim|required|min_length[3]',
				array(
					'required'    => '%s harus diisi!',
					'min_length'  => '%s minimal 3 karakter!',
				)
			);
			$this->form_validation->set_rules(
				'designation',
				'Designation',
				'trim|required|min_length[3]',
				array(
					'required'    => '%s harus diisi!',
					'min_length'  => '%s minimal 3 karakter!' //edited by wahid
				)
			);
		

			

			if ($this->form_validation->run() == FALSE) {


				$data['title'] = 'kelas';
				$data['layout'] = 'admin/add_testimoni';

				$this->load->view('admin/layout_admin', $data);
			} else {
		
				$data = array(
					'picture' => $this->security->xss_clean($this->input->post('picture')),
					'name' => $this->security->xss_clean($this->input->post('name')),
					'designation' => $this->security->xss_clean($this->input->post('designation')),
					'comment' => $this->security->xss_clean($this->input->post('comment')),
					'created_at' => date('Y-m-d'),

				);



				$result = $this->testimoni_model->insert_kelas($data);
				if ($result) {
					$this->session->set_flashdata('message', 'Kelas Berhasil DiTambahkan');
					redirect(base_url('admin/testimoni'));
				} else {
					$this->session->set_flashdata('abort', 'Failed');
					redirect(base_url('admin/testimoni/add_testimoni'));
				}
			}
		} else {

			$data['title'] = 'testimoni';
			$data['layout'] = 'admin/testimoni/add_testimoni';
			$this->load->view('admin/layout_admin', $data);
		}
	}

	public function edit_kelas($id)
	{

		if ($this->input->post('edit_kelas')) {

			$this->form_validation->set_rules(
				'kode_kelas',
				'Kode Kelas',
				'trim|required|min_length[3]',
				array(
					'required'    => '%s harus diisi!',
					'min_length'  => '%s minimal 3 karakter!',
				)
			);
			$this->form_validation->set_rules(
				'judul_kelas',
				'Judul Kelas',
				'trim|required|min_length[3]',
				array(
					'required'    => '%s harus diisi!',
					'min_length'  => '%s minimal 3 karakter!',
				)
			);
			$this->form_validation->set_rules(
				'komentar',
				'Komentar',
				'trim|required|min_length[3]',
				array(
					'required'    => '%s harus diisi!',
					'min_length'  => '%s minimal 3 karakter!' 
				)
			);
			$this->form_validation->set_rules(
				'harga_kelas',
				'Harga Kelas',
				'trim|required',
				array(
					'required'    => '%s harus diisi!' 
				)
			);

			$this->form_validation->set_rules('jadwal_kelas', 'Jadwal Kelas', 'trim|required');
			$this->form_validation->set_rules('waktu_kelas', 'Waktu Kelas', 'required');
			$this->form_validation->set_rules('biaya_pendaftaran', 'Biaya Pendaftaran', 'required');



			if ($this->form_validation->run() == FALSE) {

				$data['title'] = 'kelas';
				$data['layout'] = "admin/edit_kelas/" . $id;
				$this->load->view('admin/layout_admin', $data);
			} else {
				$string = str_replace('.', ',', $this->input->post('harga_kelas')); // Replaces all spaces with hyphens.

				$harga_kelas = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

				$string2 = str_replace('.', ',', $this->input->post('biaya_pendaftaran'));

				$biaya_pendaftaran = preg_replace('/[^A-Za-z0-9\-]/', '', $string2);
				$data = array(
					'kode_kelas' => $this->security->xss_clean($this->input->post('kode_kelas')),
					'harga_kelas' => $this->security->xss_clean($harga_kelas),
					'biaya_pendaftaran' => $this->security->xss_clean($biaya_pendaftaran),
					
					'judul_kelas' => $this->security->xss_clean($this->input->post('judul_kelas')),
					'deskripsi_kelas' => $this->security->xss_clean($this->input->post('deskripsi_kelas')),
					
					'created_by' => $this->session->userdata('nama'),
					

				);

				$result = $this->testimoni_model->update_kelas($data, $id);

				if ($result) {
					$this->session->set_flashdata('message', 'Berhasil');
					redirect(base_url('admin/kelas'));
				} else {

					$this->session->set_flashdata('abort', 'Failed');
					redirect(base_url("admin/kelas/edit_kelas/" . $id));
				}
			}
		} else {

			$data['title'] = 'kelas';
			$data['kelas'] = $this->testimoni_model->detail_kelas($id);

			$data['layout'] = "admin/kelas/edit_kelas";
			$this->load->view('admin/layout_admin', $data);
		}
	}

	public function delete_kelas($id = 0)
	{
		$this->testimoni_model->delete_kelas($id);
		$this->testimoni_model->delete_pendaftaran($id);
		$this->session->set_flashdata('message', 'Kelas berhasil dihapus!');
		redirect(base_url('admin/kelas/'));
	}
}