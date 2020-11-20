<?php

class Mahasiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_mahasiswa');
	}

	public function index()
	{
		$data['tabel'] = $this->M_mahasiswa->semuaData();
		// Load dari folder view
		$this->load->view('mahasiswa/v_index', $data);
	}

	public function tambah()
	{
		$this->load->view('mahasiswa/v_tambah');
	}

	public function proses_tambah()
	{
//		var_dump($this->input->post());
		$data = [
			'nim' => $this->input->post('txtnim'),
			'nama' => $this->input->post('txtnama'),
			'alamat' => $this->input->post('txtalamat')
		];

		$this->M_mahasiswa->simpanData($data);
		redirect('mahasiswa/index');
	}
}
