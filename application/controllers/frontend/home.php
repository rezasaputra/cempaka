<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['aktif']=1;
		$this->load->view('frontend/head');
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/beranda/isi');
		$this->load->view('frontend/foot');
	}

	public function selebriti()
	{
		$data['aktif']=2;
		$this->load->view('frontend/head');
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/beranda/isi');
		$this->load->view('frontend/foot');
	}

	public function gayahidup()
	{
		$data['aktif']=3;
		$this->load->view('frontend/head');
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/beranda/isi');
		$this->load->view('frontend/foot');
	}

	public function kesehatan()
	{
		$data['aktif']=4;
		$this->load->view('frontend/head');
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/beranda/isi');
		$this->load->view('frontend/foot');
	}

	public function kuliner()
	{
		$data['aktif']=5;
		$this->load->view('frontend/head');
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/beranda/isi');
		$this->load->view('frontend/foot');
	}

	public function insani()
	{
		$data['aktif']=6;
		$this->load->view('frontend/head');
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/beranda/isi');
		$this->load->view('frontend/foot');
	}

	public function solusi()
	{
		$data['aktif']=7;
		$this->load->view('frontend/head');
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/beranda/isi');
		$this->load->view('frontend/foot');
	}

	

	public function senyum()
	{
		$data['aktif']=10;
		$this->load->view('frontend/head');
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/beranda/isi');
		$this->load->view('frontend/foot');
	}
}
