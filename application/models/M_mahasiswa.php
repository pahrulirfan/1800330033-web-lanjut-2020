<?php

class M_mahasiswa extends CI_Model
{
	private $tabel = 'mahasiswa';

	public function semuaData()
	{
		// select * from mahasiswa
		// mysqli_fetch_object()
		return $this->db->get($this->tabel)->result();
	}

	public function simpanData($data)
	{
		// insert into mahasiswa values ('$data[nim]');
		$this->db->insert($this->tabel, $data);
	}
}
