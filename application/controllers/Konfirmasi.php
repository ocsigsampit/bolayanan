<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi extends MY_Controller{
	public function __construct(){
		parent::__construct();
		
		// Load model
		$this->load->model('model_konfirmasi');
		include APPPATH . 'docxtemplate/docxtemplate.php';
	}
	
	public function index(){
		// Load library pagination
		$this->load->library('pagination');

		// Pengaturan pagination
		$config['base_url']   = base_url('konfirmasi/index/');
		$config['total_rows'] = $this->model_konfirmasi->get()->num_rows();
		$config['per_page']   = 5;
		$config['offset']     = !$this->uri->segment(3) ? 0 : $this->uri->segment(3);

		// Styling pagination
		$config['first_link'] = false;
		$config['last_link']  = false;

		$config['full_tag_open']  = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		$config['num_tag_open']   = '<li class="waves-effect">';
		$config['num_tag_close']  = '</li>';

		$config['prev_tag_open']  = '<li class="waves-effect">';
		$config['prev_tag_close'] = '</li>';

		$config['next_tag_open']  = '<li class="waves-effect">';
		$config['next_tag_close'] = '</li>';

		$config['cur_tag_open']   = '<li class="active"><a href="#">';
		$config['cur_tag_close']  = '</a></li>';

		$this->pagination->initialize($config);

		// Data untuk page index
		$data['pageTitle']   = 'Surat';
		//$data['events'] = $this->model_events->get_offset($config['per_page'], $config['offset'])->result();
		$data['datanya']     = $this->model_konfirmasi->get_offset($config['per_page'], $config['offset'])->result();
		$data['pageContent'] = $this->load->view('konfirmasi/suratList', $data, TRUE);

		// Jalankan view template/layout
		$this->load->view('template/layout', $data);
	}

	public function daftar_wp($id_surat){
		// Data untuk page index
		$data['pageTitle']   = 'Detail WP Penerbit';
		$data['datanya']     = $this->model_konfirmasi->daftar_wp_penerbit($id_surat);
		$data['pageContent'] = $this->load->view('konfirmasi/wpList', $data, TRUE);

		// Jalankan view template/layout
		$this->load->view('template/layout', $data);
	}
	
	public function add(){
		// Data untuk page index
		$data['pageTitle']   = 'Rekam Surat Permintaan Konfirmasi';
		$data['pageContent'] = $this->load->view('konfirmasi/addSurat', $data, TRUE);

		// Jalankan view template/layout
		$this->load->view('template/layout', $data);
	}
	
	public function detail($id, $npwp){
		// Data untuk page index
		$data['pageTitle']     = 'Detail Data';
		$data['jenis_pajak']   = $this->model_konfirmasi->jenis_pajak($id, $npwp);
		$data['datanya']       = $this->model_konfirmasi->detail($id, $npwp);
		$data['jmlDataKosong'] = $this->model_konfirmasi->jumlah_data_kosong($id, $npwp);
		$data['jmlDataTBO']    = $this->model_konfirmasi->jumlah_data_tbo($id, $npwp);
		$data['penerima']      = $this->model_konfirmasi->penerima($id, $npwp);
		$data['pageContent']   = $this->load->view('konfirmasi/dataList', $data, TRUE);

		// Jalankan view template/layout
		$this->load->view('template/layout', $data);
	}
	
	public function balasSurat($id_surat){
		// Data untuk page index
		$data['pageTitle']   = 'Balas Surat';
		$data['dataSurat']   = $this->model_konfirmasi->data_surat_balasan($id_surat);
		$data['pageContent'] = $this->load->view('konfirmasi/balasSurat', $data, TRUE);

		// Jalankan view template/layout
		$this->load->view('template/layout', $data);
	}
	
	public function simpanBalasanSurat(){
		//print_r($_POST);
		$id           = $_POST['id_surat'];
		$pejabat      = $_POST['pejabat'];
		$nama_pejabat = $_POST['nama_pejabat'];
		
		$this->model_konfirmasi->simpanBalasanSurat($id, $pejabat, $nama_pejabat);
		$this->model_konfirmasi->updateStatusBalasan($id);
		
	}
	
	public function download_surat_balasan($id_surat){
		$bulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
		
		$data = $this->model_konfirmasi->data_surat_balasan($id_surat);
		
		foreach($data as $r){
			$a = $r->asal_surat;
			$b = $r->pejabat;
			$c = $r->perihal;
			$d = $r->no_surat;
			$e = $r->tgl_surat;
			$f = $r->nm_wp_surat;
			$g = $r->npwp_surat;
			$h = $r->masa_pajak;
			$i = $r->nama_pejabat;
		}
		
		//Konvert 2018-08-18 menjadi 18 Agustus 2018
		$str_bulan     = date_format(date_create($e),"m");
		$num_bulan     = number_format($str_bulan);
		$tgl_surat_id  = date_format(date_create($e),'d')." ".$bulan[$num_bulan]." ".date_format(date_create($e),'Y');
		
		//Bulan pembuatan surat balasan
		$bulan_ini     = date("m");
		$num_bulan_ini = number_format($bulan_ini);
		$str_bulan_ini = $bulan[$num_bulan_ini];
		
		//echo APPPATH;
		
		//Buat judul file dari nomor surat dan kantor asal
		$nomor_nd_asal = $this->model_konfirmasi->nama_file_surat_balasan($id_surat);
		$nomor_nd_asal = explode("/",$nomor_nd_asal);
		$nomor_nd_asal = $nomor_nd_asal[0];
		
		$nama_kantor_asal = explode(" ",$a);
		$nama_kantor_asal = $nama_kantor_asal[2];
		$nama_file        = $nomor_nd_asal."_".$nama_kantor_asal;
		
		//Load class
		$docx = new DOCXTemplate(APPPATH."/tpl_surat_balasan.docx");
		
		$docx->set("kantor_asal", $a);
		$docx->set("pejabat", $b);
		$docx->set("perihal", $c);
		$docx->set("no_surat", $d);
		$docx->set("tgl_surat", $tgl_surat_id);
		$docx->set("nama_wp_asal", $f);
		$docx->set("npwp_asal", $g);
		$docx->set("masa_pajak", $h);
		$docx->set("nama_pejabat", $i);
		$docx->set("bulan_ini", $str_bulan_ini);
		
		$docx->saveAs($nama_file.".docx");

		header("Content-Type: application/ms-word");
		header("Content-Disposition: attachment; filename=".$nama_file.".docx");
		header("Pragma: no-cache");
		header("Expires: 0");

		readfile($nama_file.".docx");
	}
	
	public function buat_surat_konfirmasi($jenis_pajak, $id_surat, $npwp){
		//echo "Kode jenis pajak".$jenis_pajak;
		$data['surat']        = $this->model_konfirmasi->data_surat_konfirmasi($id_surat, $npwp);
		$data['detail']       = $this->model_konfirmasi->data_detail_konfirmasi($id_surat, $npwp);
		$data['baris_detail'] = $this->model_konfirmasi->jumlah_baris_detail_konfirmasi($id_surat, $npwp);
		
		$no_surat_lengkap  = $data['detail'][0]->no_surat;
		$no_surat_lengkap1 = explode("/",$no_surat_lengkap);
		$no_surat_lengkap2 = $no_surat_lengkap1[0];
		
		//echo "no_surat_lengkap : ".$no_surat_lengkap2;
		
		if($jenis_pajak == 1){
			$data['nama_file_doc'] = "KNFPPN_".$no_surat_lengkap2."_".$npwp;
			$this->load->view('konfirmasi/Surat Konfirmasi Faktur PPN',$data);
		}else{
			$data['nama_file_doc'] = "KNFPPh_".$no_surat_lengkap2."_".$npwp;
			$this->load->view('konfirmasi/Surat Konfirmasi PPh 23',$data);
		}
	}
	
	public function buat_surat_konfirmasi_tbo($jenis_pajak, $id_surat, $npwp){
		//echo "Kode jenis pajak".$jenis_pajak;
		$data['surat']        = $this->model_konfirmasi->data_surat_konfirmasi($id_surat, $npwp);
		$data['detail']       = $this->model_konfirmasi->data_detail_konfirmasi($id_surat, $npwp);
		$data['baris_detail'] = $this->model_konfirmasi->jumlah_baris_detail_konfirmasi($id_surat, $npwp);
		
		$no_surat_lengkap  = $data['detail'][0]->no_surat;
		$no_surat_lengkap1 = explode("/",$no_surat_lengkap);
		$no_surat_lengkap2 = $no_surat_lengkap1[0];
		
		//echo "no_surat_lengkap : ".$no_surat_lengkap2;
		
		if($jenis_pajak == 1){
			$data['nama_file_doc'] = "KNFPPNtbo_".$no_surat_lengkap2."_".$npwp;
			$this->load->view('konfirmasi/Surat Konfirmasi Faktur PPN_TBO',$data);
		}else{
			$data['nama_file_doc'] = "KNFPPhtbo_".$no_surat_lengkap2."_".$npwp;
			$this->load->view('konfirmasi/Surat Konfirmasi PPh 23_TBO',$data);
		}
	}
	
	public function rekam_ar($npwp){
		$data['pageTitle'] = 'Rekam Data Account Representative';
		$data['npwp']      = $npwp;
		$data['pageContent'] = $this->load->view('konfirmasi/rekam_ar', $data, TRUE);

		// Jalankan view template/layout
		$this->load->view('template/layout', $data);
	}
	
	public function simpan_ar(){
		$this->model_konfirmasi->save_ar($_POST['npwp'], $_POST['ar'], $_POST['alamat1'], $_POST['alamat2'], $_POST['alamat3']);
	}
	
	public function cari_kantor(){
		$kata_kunci = $this->input->post('keyword');
		
		$hasil = $this->model_konfirmasi->daftar_pengirim_surat($kata_kunci);
		//return json_encode($hasil);
		echo json_encode($hasil);
	}
	
}