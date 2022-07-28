<?php

class Kontak_c extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kontak_m');
		$this->load->model('M_tentang');
	}

	public function index()
	{
		$title = $this->M_tentang->getTitle();
		$descAbout = $this->M_tentang->getDesc();
		$desc = $this->Kontak_m->getDesc();
		$kontak = $this->Kontak_m->getAll1();

		$data['kontak'] = $kontak;
		$data['title'] = 'Contacts - ' . $title->nama_tentang;
		$data['namaPerusahaan'] = $title->nama_tentang;
		$data['metadesc'] = $title->nama_tentang . ' - Our Contact : ' . $desc->deskripsi_kontak . ' - ' . $descAbout->deskripsi_tentang;

		$this->load->view('frontend/layouts/header', $data);
		$this->load->view('frontend/contact', $data);
		$this->load->view('frontend/layouts/footer', $data);
	}
}
