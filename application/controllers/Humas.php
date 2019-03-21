<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Humas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Humas_model');
	}

	public function index()
	{
		$data1 = $this->Humas_model->dataPendaftar();
		$data2 = $this->Humas_model->jumlahPendaftar();
		$data3 = $this->Humas_model->jumlahPendaftarDiterima();
		$data = array(
			'umum' => $data1,
			'jumlahpendaftar' => $data2,
			'jumlahditerima' => $data3,
		);
		$this->load->view('Humas/index', $data);
	}

	public function detailpendaftaran($id)
	{
		$data1 = $this->Humas_model->detailPendaftar($id)->row_array();
		$data = array(
			'detail' => $data1,
		);
		$this->load->view('Humas/detailpendaftar', $data);
	}

	public function konfirmasipendaftar($id)
	{
		$this->hUMAS_model->konfirmasiPendaftar($id);
		$this->session->set_flashdata('sukses', 'Berhasil Dikonfirmasi');
		redirect(base_url('humas'));
	}
}
