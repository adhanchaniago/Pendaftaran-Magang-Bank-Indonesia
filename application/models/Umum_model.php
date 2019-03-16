<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Umum_model extends CI_Model {

	public function dataKota()
	{
		$this->db->select('kota_nama');
		return $this->db->get('kota')->result_array();
	}

	public function tambahPendaftaran()
	{
		$a = $this->tambahProposal();
		$b = $this->tambahSurat();
		$c = $this->tambahCv();
		$d = $this->tambahPhoto();
		$data = array(
			'nama' => $this->input->post('nama'),
			'ttl' => $this->input->post('ttl'),
			'jeniskelamin' => $this->input->post('jeniskelamin'),
			'nohp' => $this->input->post('nohp'),
			'kota' => $this->input->post('kota'),
			'alamat_asal' => $this->input->post('alamat_asal'),
			'alamat_sekarang' => $this->input->post('alamat_sekarang'),
			'asal_sekolah' => $this->input->post('asal_sekolah'),
			'jurusan_sekolah' => $this->input->post('jurusan_sekolah'),
			'berkas_magang' => $a['file_name'],
			'berkas_rekomendasi' => $b['file_name'],
			'cv' => $c['file_name'],
			'pasphoto' => $d['file_name'],
			'tanggal_magang' => $this->input->post('tanggal_magang'),
			'lama_magang' => $this->input->post('lama_magang'),
            'email' => $this->session->userdata('email'),
            'status' => 'Belum Dikonfirmasi',
 		);
		$this->db->insert('datapendaftar', $data);
	}

	public function tambahProposal()
	{
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png|jpeg|pdf';
        $config['max_size']             = 1024;
        $config['remove_spaces']		= TRUE;
        $config['overwrite']			= TRUE;
        $config['file_name']			= $this->input->post('nama')."_proposal";

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('berkas_magang'))
        {
            echo "Error";
        }
        else
        {
        	return $this->upload->data();
        }
	}

	public function tambahSurat()
	{
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png|jpeg|pdf';
        $config['max_size']             = 1024;
        $config['remove_spaces']		= TRUE;
        $config['overwrite']			= TRUE;
        $config['file_name']			= $this->input->post('nama')."_surat";

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('berkas_rekomendasi'))
        {
            echo "Error";
        }
        else
        {
        	return $this->upload->data();
        }
	}

	public function tambahCv()
	{
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png|jpeg|pdf';
        $config['max_size']             = 1024;
        $config['remove_spaces']		= TRUE;
        $config['overwrite']			= TRUE;
        $config['file_name']			= $this->input->post('nama')."_cv";

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('cv'))
        {
            echo "Error";
        }
        else
        {
        	return $this->upload->data();
        }
	}

	public function tambahPhoto()
	{
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 1024;
        $config['remove_spaces']		= TRUE;
        $config['overwrite']			= TRUE;
        $config['file_name']			= $this->input->post('nama')."_photo";

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('pasphoto'))
        {
            echo "Error";
        }
        else
        {
        	return $this->upload->data();
        }
	}
}
 