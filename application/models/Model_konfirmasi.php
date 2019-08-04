<?php
class Model_layanan extends CI_Model{
	
	public function cek_status($no_bps, $npap){
		$sql = $this->db->query("SELECT status FROM tb_berkas WHERE no_bps = '".$no_bps."' AND npwp = '".$npwp."'");
		$hasil  = $sql->result();
		$hasil2 = $hasil[0];
		$hasil3 = ($hasil2->status == "1") ? "Selesai" : "Proses";

		return $hasil3;
	}
    
}