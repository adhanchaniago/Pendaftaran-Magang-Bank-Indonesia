<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function dataUser()
	{
		return $this->db->get('user')->result_array();
	}

	public function detailUser($where)
	{
		$this->db->where('id', $where);
		return $this->db->get('user')->result_array();
	}

	public function tambahUser()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			'email' => $this->input->post('email'),
			'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
			'level' => $this->input->post('level'),
			'tanggal' => date('Y-m-d'),
		);
		return $this->db->insert('user', $data);
	}

	public function editUser($where)
	{
		$data = array(
			'email' => $this->input->post('email'),
			'level' => $this->input->post('level'),
		);
		$this->db->where('id', $where);
		return $this->db->update('user', $data);
	}

	public function passwordUser($where)
	{
		$data = array(
			'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
		);
		$this->db->where('id', $where);
		return $this->db->update('user', $data);
	}

	public function hapusUser($where)
	{
		$this->db->where('id', $where);
		return $this->db->delete('user');
	}

	public function dataPendaftar()
	{
		return $this->db->get('datapendaftar')->result_array();
	}

	// JUMLAH
	public function jumlahPendaftar()
	{
		return $this->db->get('datapendaftar')->num_rows();
	}
}
