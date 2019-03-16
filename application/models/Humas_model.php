<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Humas_model extends CI_Model {

	public function dataPendaftar()
	{
		return $this->db->get('datapendaftar')->result_array();
	}

	// JUMLAH
	public function jumlahPendaftar()
	{
		return $this->db->get('datapendaftar')->num_rows();
	}

	public function jumlahPendaftarDiterima()
	{
		$this->db->where('status', 'Diterima');
		return $this->db->get('datapendaftar')->num_rows();
	}

	public function jumlahUser()
	{
		return $this->db->get('user')->num_rows();
	}
}
