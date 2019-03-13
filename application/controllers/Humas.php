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
		$data = array(
			'umum' => $data1,
		);
		$this->load->view('Humas/index', $data);
	}
}
