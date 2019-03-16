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
}
