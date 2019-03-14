<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function dataUser()
	{
		return $this->db->get('user')->result_array();
	}

	public function dataPendaftar()
	{
		return $this->db->get('datapendaftar')->result_array();
	}
}
