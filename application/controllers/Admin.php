<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function index()
	{
		$data1 = $this->Admin_model->jumlahPendaftar();
		$data2 = $this->Admin_model->jumlahUser();
		$data3 = $this->Admin_model->jumlahPendaftarDiterima();
		$data = array(
			'jumlahpendaftar' => $data1,
			'jumlahuser' => $data2,
			'jumlahditerima' => $data3,
		);
		$this->load->view('Admin/index', $data);
	}

	public function user()
	{
		$data1 = $this->Admin_model->dataUser();
		$data = array(
			'user' => $data1,
		);
		$this->load->view('Admin/user', $data);
	}

	public function tambahuser()
	{
		$this->load->view('Admin/user_tambah');
	}

	public function prosestambahuser()
	{
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|valid_emails|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		$this->form_validation->set_rules('level', 'Jabatan', 'trim|required|xss_clean');
		$this->form_validation->set_message('required', 'Maaf! <b>%s</b> Tidak Boleh Kosong.');
		$this->form_validation->set_message('valid_email', 'Maaf! <b>%s</b> Tidak Valid.');
		$this->form_validation->set_message('valid_emails', 'Maaf! <b>%s</b> Tidak Valid.');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('Admin/user_tambah');
		}
		else
		{
			$this->Admin_model->tambahUser();
			$this->session->set_flashdata('sukses', 'Berhasil Menambahkan User');
			redirect(base_url('admin/user'));
		}
	}

	public function edituser($id)
	{
		$data1 = $this->Admin_model->detailUser($id);
		$data = array(
			'user' => $data1,
		);
		$this->load->view('Admin/user_edit', $data);
	}

	public function prosesedituser()
	{
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|valid_emails|xss_clean');
		$this->form_validation->set_rules('level', 'Jabatan', 'trim|required|xss_clean');
		$this->form_validation->set_message('required', 'Maaf! <b>%s</b> Tidak Boleh Kosong.');
		$this->form_validation->set_message('valid_email', 'Maaf! <b>%s</b> Tidak Valid.');
		$this->form_validation->set_message('valid_emails', 'Maaf! <b>%s</b> Tidak Valid.');

		$id = $this->input->post('id');
		
		if($this->form_validation->run() == FALSE)
		{
			$data1 = $this->Admin_model->detailUser($id);
			$data = array(
				'user' => $data1,
			);
			$this->load->view('Admin/user_edit', $data);
		}
		else
		{
			$this->Admin_model->editUser($id);
			$this->session->set_flashdata('sukses', 'Berhasil Mengubah User');
			redirect(base_url('admin/user'));
		}
	}

	public function prosespassworduser()
	{
		$this->form_validation->set_rules('password', 'Password', 'trim|xss_clean');
		$this->form_validation->set_message('required', 'Maaf! <b>%s</b> Tidak Boleh Kosong.');

		$id = $this->input->post('id');
		
		if($this->form_validation->run() == FALSE)
		{
			$data1 = $this->Admin_model->detailUser($id);
			$data = array(
				'user' => $data1,
			);
			$this->load->view('Admin/user_edit', $data);
		}
		else
		{
			$this->Admin_model->passwordUser($id);
			$this->session->set_flashdata('sukses', 'Berhasil Mengubah Password User');
			redirect(base_url('admin/user'));
		}
	}

	public function hapususer($id)
	{
		$this->Admin_model->hapusUser($id);
		$this->session->set_flashdata('sukses', 'Berhasil Menghapus User');
		redirect(base_url('admin/user'));
	}

	public function pendaftar()
	{
		$data1 = $this->Admin_model->dataPendaftar();
		$data = array(
			'pendaftar' => $data1,
		);
		$this->load->view('Admin/pendaftar', $data);
	}

	public function konfirmasipendaftar($id)
	{
		$this->Admin_model->konfirmasiPendaftar($id);
		$this->session->set_flashdata('sukses', 'Berhasil Dikonfirmasi');
		redirect(base_url('admin/pendaftar'));
	}
}
