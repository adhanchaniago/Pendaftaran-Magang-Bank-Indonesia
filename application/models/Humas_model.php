<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Humas_model extends CI_Model {

	public function dataPendaftar()
	{
		return $this->db->get('datapendaftar')->result_array();
	}
}
