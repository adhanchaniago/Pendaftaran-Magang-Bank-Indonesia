<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Umum_model');
	}
	public function index()
	{
		$this->load->view('Umum/index');
	}

	public function pendaftaran()
	{
		$this->load->view('Umum/pendaftaran');
	}

	public function tambahPendaftaran()
	{
		$this->Umum_model->tambahPendaftaran();
		$this->session->set_flashdata('sukses', 'Berhasil Melakukan Pendaftaran');
	}
}
