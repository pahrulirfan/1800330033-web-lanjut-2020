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

	public function create()
	{
		$this->load->view('mahasiswa/v_create');
	}
}
