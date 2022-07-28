<?php

class Beranda_c extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Beranda_m');
		$this->load->model('M_galeri');
		$this->load->model('M_tentang');
		$this->load->model('Album_m');
	}

	public function index()
	{
		$title = $this->M_tentang->getTitle();
		$desc = $this->M_tentang->getDesc();
		$sliderActive = $this->Beranda_m->getAll();
		$slider = $this->Beranda_m->getAll1();
		$tentang = $this->Beranda_m->getAll2();
		$galeri = $this->M_galeri->getAllGalery();
		$album = $this->Album_m->getAllAlbum();

		$data['galeri'] = $galeri;
		$data['album'] = $album;
		$data['slider'] = $slider;
		$data['sliderActive'] = $sliderActive;
		$data['tentang'] = $tentang;
		$data['namaPerusahaan'] = $title->nama_tentang;
		$data['title'] = $title->nama_tentang . ' - Home';
		$data['metadesc'] = $title->nama_tentang . ' - ' . $desc->deskripsi_tentang;


		$this->load->view('frontend/layouts/header', $data);
		$this->load->view('frontend/beranda', $data);
		$this->load->view('frontend/layouts/footer', $data);
	}
}
