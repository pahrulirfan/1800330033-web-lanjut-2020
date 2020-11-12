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
}
