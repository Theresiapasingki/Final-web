<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_mahasiswabaru extends CI_Model {

	function getDataMahasiswa() {
		$query = $this->db->get('mahasiswa');
		return $query->result();
	}

	function insertDataMahasiswa($data) {
		$this->db->insert('mahasiswa', $data);
	}

	function getDataMahasiswaDetail() {
		$this->db->where('nim');
		$query = $this->db->get('mahasiswa');
		return $query->row();
	}

	function updateDataMahasiswa($nim, $data) {
		$this->db->where('nim', $nim);
		$this->db->update('mahasiswa', $data);
	}

	function deleteDataMahasiswa($id) {
		$this->db->where('id', $id);
		$this->db->delete('mahasiswa');
	}

}

/* End of file M_Mahasiswa.php */
/* Location: ./application/models/M_Mahasiswa.php */