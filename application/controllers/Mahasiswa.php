<?php

class Mahasiswa extends CI_Controller
{
	public function index()
	{
		// Load dari folder view
		$this->load->view('mahasiswa/v_index');
	}

	public function create()
	{
		$this->load->view('mahasiswa/v_create');
	}
}
