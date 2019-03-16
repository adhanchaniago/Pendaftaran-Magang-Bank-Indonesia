<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Umum extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Umum_model');
	}
	public function index()
	{
		$this->load->view('Umum/index');
	}

	public function dashboard()
	{
		$data1 = $this->Umum_model->cekStatus($this->session->userdata('email'));
		$data = array(
			'hasilstatus' => $data1,
		);
		$this->load->view('Umum/dashboard', $data);
	}

	public function pendaftaran()
	{
		$data1 = $this->Umum_model->dataKota();
		$data = array(
			'kota' => $data1,
		);
		$this->load->view('Umum/pendaftaran', $data);
	}

	public function tambahPendaftaran()
	{
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required|xss_clean');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('Umum/pendaftaran');
		}
		else
		{
			$this->Umum_model->tambahPendaftaran();
			$this->session->set_flashdata('sukses', 'Berhasil Melakukan Pendaftaran');
			redirect(base_url('umum/dashboard'));

		}
	}
}
