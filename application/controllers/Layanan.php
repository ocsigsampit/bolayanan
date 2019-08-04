<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends MY_Controller{
	public function __construct(){
		parent::__construct();
		// Load model
		$this->load->model('model_layanan');
	}
	
	public function index(){
		// Data untuk page index
		$data['pageTitle']   = 'Daftar Berkas';
		$data['daftarLayanan']  = $this->model_layanan->daftarLayanan();
		$data['datanya']     = $this->model_layanan->daftarBerkas();
		$data['pageContent'] = $this->load->view('layanan/daftarBerkas', $data, TRUE);

		// Jalankan view template/layout
		$this->load->view('template/layout', $data);
	}
	
	public function tambah_berkas(){
		if ($this->input->post('submit')) {   
		
			$this->form_validation->set_rules('select_layanan', 'Jenis Layanan', 'required');
			$this->form_validation->set_rules('no_bps', 'No BPS', 'required');
			$this->form_validation->set_rules('npwp', 'NPWP', 'required|min_length[15]');
			$this->form_validation->set_rules('nm_wp', 'Nama Wajib Pajak', 'required');
			$this->form_validation->set_rules('tgl_bps', 'Tanggal BPS', 'required');

			// Mengatur pesan error validasi data
			$this->form_validation->set_message('required', '%s tidak boleh kosong!');
			$this->form_validation->set_message('min_length', '%s harus terdiri dari minimal %d karakter!');

			// Jalankan validasi jika semuanya benar maka lanjutkan
			if ($this->form_validation->run() === TRUE) {

				$data = array(
					'kode_layanan' => $this->input->post('select_layanan'),
					'no_bps'       => $this->input->post('no_bps'),
					'npwp'         => $this->input->post('npwp'),
					'nm_wp'        => $this->input->post('nm_wp'),
					'tgl_bps'      => $this->input->post('tgl_bps')
				);

				// Jalankan function insert pada model_users
				$query = $this->model_layanan->simpan($data);

				// cek jika query berhasil
				if ($query) $message = array('status' => true, 'message' => 'Data berhasil ditambahkan !');
				else $message = array('status' => true, 'message' => 'Gagal !');

				// simpan message sebagai session
				$this->session->set_flashdata('message', $message);

				// refresh page
				redirect('layanan/index', 'refresh');
			} 
		}

		$data['pageTitle']      = 'Tambah Berkas';
		$data['daftarLayanan']  = $this->model_layanan->daftarLayanan();
		$data['pageContent']    = $this->load->view('layanan/addBerkas', $data, TRUE);

		// Jalankan view template/layout
		$this->load->view('template/layout', $data);
	}
	
	public function mtable(){
		// Data untuk page index
		$data['pageTitle']   = 'Materila Table';
		$data['pageContent'] = $this->load->view('layanan/materializeDatatables', $data, TRUE);

		// Jalankan view template/layout
		$this->load->view('template/layout', $data);
	}
	
	public function data_berkas(){
		$id_berkas = $this->input->post("id_berkas");
		$data      = $this->model_layanan->dataBerkas($id_berkas);
		
		echo json_encode($data);
	}
	
	public function selesaikan_berkas(){
		$id_berkas = $this->input->post("id_berkas");
		
		$data = $this->model_layanan->selesaikanBerkas($id_berkas);
	}
	
	public function simpan_perubahan_data(){
		$id_berkas = $this->input->post("id_berkas");
		$kolom     = $this->input->post("kolom");
		$nilai     = $this->input->post("nilai");
		
		$this->model_layanan->simpanPerubahanData($id_berkas, $kolom, $nilai);
	}
	
}