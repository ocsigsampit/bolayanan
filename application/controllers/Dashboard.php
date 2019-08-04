<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller{
	public function __construct(){
		parent::__construct();

		// Cek apakah user sudah login
		// $this->cekLogin();

		// Load model
		$this->load->model('model_konfirmasi');
	}

	public function index(){
		
		$data['pageTitle']   = 'Dashboard';
		$data['jmlSPPN']     = $this->model_konfirmasi->jumlah_surat("1");
		$data['jmlSPPh']     = $this->model_konfirmasi->jumlah_surat("2");
		$data['pageContent'] = $this->load->view('dashboard/content', $data, true);

		// Jalankan view template/layout
		$this->load->view('template/layout', $data);
	}
}