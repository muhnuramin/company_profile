<?php

class Galeri_c extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Galeri_m');
		$this->load->model('M_tentang');
	}

	public function index()
	{
		$title = $this->M_tentang->getTitle();
		$desc = $this->M_tentang->getDesc();
		// $album = $this->Galeri_m->getAlbum()->result_array();
		$galeri = $this->Galeri_m->getAllgalery();
		$album = $this->Galeri_m->getAllalbum();

		// $data['album'] = $album;
		$data['galeri'] = $galeri;
		$data['album'] = $album;
		// $data['galeri'] = $this->Galeri_m;
		$data['title'] = 'Photo Gallery - ' . $title->nama_tentang;
		$data['namaPerusahaan'] = $title->nama_tentang;

		$this->load->view('frontend/layouts/header', $data);
		$this->load->view('frontend/galeri', $data);
		$this->load->view('frontend/layouts/footer', $data);
	}
}
