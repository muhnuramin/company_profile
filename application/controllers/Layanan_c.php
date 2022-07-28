<?php

class Layanan_c extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Layanan_m');
		$this->load->model('M_tentang');
	}

	public function index()
	{
		$layanan = $this->Layanan_m->getAll3();
		$title = $this->M_tentang->getTitle();
		$product = $this->Layanan_m->produk()->result_array();

		$data['layanan'] = $layanan;
		$data['gambar'] = $this->Layanan_m;
		$data['product'] = $product;
		$data['title'] = 'Our Products - ' . $title->nama_tentang;
		$data['namaPerusahaan'] = $title->nama_tentang;

		$this->load->view('frontend/layouts/header', $data);
		$this->load->view('frontend/produk', $data);
		$this->load->view('frontend/layouts/footer', $data);
	}
	public function detail($id)
	{
		$data = [
			'title' => 'Detail Produk',
			'produk' => $this->Layanan_m->getProdukById($id)
		];
		$this->load->view('frontend/layouts/header', $data);
		$this->load->view('frontend/detailproduk', $data);
		$this->load->view('frontend/layouts/footer', $data);
	}
}
