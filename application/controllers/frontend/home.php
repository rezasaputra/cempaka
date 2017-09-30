<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('frontend/head');
		$this->load->view('frontend/menu');
		$this->load->view('frontend/beranda/isi');
		$this->load->view('frontend/foot');
	}

	public function gayahidup()
	{
		$this->load->view('frontend/head');
		$this->load->view('frontend/menu');
		$this->load->view('frontend/beranda/isi');
		$this->load->view('frontend/foot');
	}
}
