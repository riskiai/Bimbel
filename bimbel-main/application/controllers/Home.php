<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	/* Logic yang dibuat untuk saling menghubungkan */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model', 'home_model');
		$this->load->model('admin/kelas_model', 'kelas_model');
	}


	public function index()
	{
		$data['title'] = 'Home';
		$data['kelas'] = get_testimoni();
		$data['layout'] = 'home/landing';
		$this->load->view('layout', $data);
	}

	public function tentang()
	{
		$data['total_user'] = $this->home_model->total('xx_users');

		$data['total_kelas'] = $this->home_model->total('xx_kelas');
		$data['total_pendaftar'] = $this->home_model->total('xx_pendaftaran');
		$data['total_admin'] = $this->home_model->total('xx_admin');
		$data['title'] = 'tentang';
		$data['layout'] = 'home/tentang';
		$this->load->view('layout', $data);
	}

	/* untuk daftar kelas nya  */

	public function landing()
	{
		$data['title'] = 'landing';
		$data['layout'] = 'home/landing';
		$data['kelas'] = get_testimoni();
		$this->load->view('layout', $data);
	}

	public function harga()
	{
		$data['title'] = 'kursus';
		$data['layout'] = 'home/harga';
		$data['kelas'] = $this->kelas_model->list_kelas();
		$this->load->view('layout', $data);
	}

	public function kursus()
	{
		$data['title'] = 'kursus';
		$data['layout'] = 'home/kursus';
		$this->load->view('layout', $data);
	}

	public function kelas()
	{	
		//var_dump (get_kelas()); die;
		$data['kelas'] = get_kelas();
		$data['title'] = 'kelas';
		$data['layout'] = 'home/harga';
		$this->load->view('layout', $data);
	}

	public function testimoni()
	{	
		//var_dump (get_kelas()); die;
		$data['kelas'] = get_testimoni();
		$data['title'] = 'kelas';
		$data['layout'] = 'home/landing';
		$this->load->view('layout', $data);
	}

	public function kontak()
	{
		$data['title'] = 'kontak';
		$data['layout'] = 'home/kontak';
		$this->load->view('layout', $data);
	}
	public function galeri()
	{
		$data['title'] = 'galeri';
		$data['layout'] = 'home/galeri';
		$this->load->view('layout', $data);
	}
	public function programA()
	{
		$data['title'] = 'program';
		$data['layout'] = 'home/programA';
		$this->load->view('layout', $data);
	}

	public function riwayat()
	{
		if ($this->session->userdata('is_admin_login') == TRUE) {
			redirect('admin/dashboard', 'refresh');
		} elseif (!$this->session->userdata('is_admin_login') && !$this->session->userdata('is_user_login')) {
			redirect('auth/login');
		}
		$data['title'] = 'riwayat';
		$data['layout'] = 'home/riwayat';
		$this->load->view('layout', $data);
	}

	public function form()
	{
		if ($this->session->userdata('is_admin_login') == TRUE) {
			redirect('admin/dashboard', 'refresh');
		} elseif (!$this->session->userdata('is_admin_login') && !$this->session->userdata('is_user_login')) {
			redirect('auth/login');
		}

		if ($this->input->post('submit')) {

			$this->form_validation->set_rules('nama', 'nama', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('no_hp', 'no_hp', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'trim|required');
			$this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'trim|required');
			$this->form_validation->set_rules('umur', 'umur', 'trim|required');
			$this->form_validation->set_rules('pendidikan', 'pendidikan', 'trim|required');
			$this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
			$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
			$this->form_validation->set_rules('kelas', 'kelas', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);

				$this->session->set_flashdata('abort', $data['errors']);
				redirect(base_url('home/form'), 'refresh');
			} else {
				$data = array(
					'id_user' => $this->session->userdata('id_user'),
					'nama' => $this->security->xss_clean($this->input->post('nama')),
					'no_hp' => $this->security->xss_clean($this->input->post('no_hp')),
					'tempat_lahir' => $this->security->xss_clean($this->input->post('tempat_lahir')),
					'tanggal_lahir' => $this->security->xss_clean($this->input->post('tanggal_lahir')),
					'umur' => $this->security->xss_clean($this->input->post('umur')),
					'pendidikan' => $this->security->xss_clean($this->input->post('pendidikan')),
					'jenis_kelamin' => $this->security->xss_clean($this->input->post('jenis_kelamin')),
					'alamat' => $this->security->xss_clean($this->input->post('alamat')),
					'created_at' => date('Y-m-d : h:m:s')
				);

				$data2 = array(
					'id_user' => $this->session->userdata('id_user'),
					'id_kelas' => $this->security->xss_clean($this->input->post('kelas')),
					'nomor_pendaftaran' => get_kode_kelas($this->input->post('kelas')) . $this->session->userdata('id_user') . strtotime(date('yy-m-d')),
					'created_at' => date('Y-m-d : h:m:s')
				);

				$check = $this->home_model->check_already_regis($this->session->userdata('id_user'), $this->input->post('kelas'));

				if ($check) {

					$this->session->set_flashdata('abort', 'Sudah terdaftar');
					redirect(base_url('home/form'), 'refresh');
				} else {
					$jumlah = $this->home_model->check_jumlah_pendaftar($this->input->post('kelas'));


					if ($jumlah < 10 ) 
					{
						$result = $this->home_model->insert_profile($data, $this->session->userdata('id_user'));
						$result2 = $this->home_model->insert_pendaftaran($data2);
						if ($result && $result2) {
							$this->session->set_flashdata('message', 'sukses daftar lanjutkan pembayaran');
							redirect(base_url('siswa/riwayat'), 'refresh');
						} else {
							$this->session->set_flashdata('abort', 'Gagal daftar, ulangi pendaftaran atau hubungi admin.');
							redirect(base_url('home/form'), 'refresh');
						}
					} else {
						$this->session->set_flashdata('abort', 'Gagal daftar, Kuota Penuh.');
						redirect(base_url('home/form'), 'refresh');
					}
				}
			}
		} else {
			$id_user = $this->session->userdata('id_user');
			$data['title'] = 'form';
			$data['layout'] = 'home/form';
			$data['kelas'] = get_kelas();
			$data['jenis_kelamin'] = get_jenis_kelamin();
			// var_dump($data['jenis_kelamin']);
			// exit();
			$data['profile'] = $this->home_model->get_profile($id_user);

			$this->load->view('layout', $data);
		}
	}

	public function coba ()
	{
		for ($i=0; $i < 15 ; $i++) { 
			$data2 = array(
				'id_user' => '2',
				'id_kelas' => '18' ,
				'nomor_pendaftaran' =>  '123',
				'created_at' => date('Y-m-d : h:m:s')
			);
			$result2 = $this->home_model->insert_pendaftaran($data2);
		} 
	} 
}
