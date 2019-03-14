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
		$this->load->view('Admin/index');
	}

	public function user()
	{
		$data1 = $this->Admin_model->dataUser();
		$data = array(
			'user' => $data1,
		);
		$this->load->view('Admin/user', $data);
	}

	public function pendaftar()
	{
		$data1 = $this->Admin_model->dataPendaftar();
		$data = array(
			'pendaftar' => $data1,
		);
		$this->load->view('Admin/pendaftar', $data);
	}
}
