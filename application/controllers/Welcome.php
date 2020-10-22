<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		// load file welcome
		$this->load->view('welcome_message');
	}

	public function coba()
	{
		echo 'Hasil coba coba';
	}
}
