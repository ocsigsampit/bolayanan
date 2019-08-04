<?php
class Model_layanan extends CI_Model{
	
	public function daftarBerkas(){
		$sql    = $this->db->query("SELECT a.id, a.no_bps, a.npwp, a.nm_wp, a.status, a.tgl_bps, a.tgl_selesai, b.nm_layanan FROM tb_berkas a LEFT JOIN tb_jns_layanan b ON (a.id_layanan = b.id_layanan) ORDER BY a.tgl_bps");

		return $sql->result();
	}
	
	public function daftarLayanan(){
		$sql = $this->db->query("SELECT * FROM tb_jns_layanan ORDER BY id_layanan");
		return $sql->result();
	}
	
	public function simpan($data){
		$a = $data['no_bps'];
		$b = $data['kode_layanan'];
		$c = $data['npwp'];
		$d = $data['nm_wp'];
		$e = $data['tgl_bps'];

		
		$sql    = $this->db->query("INSERT INTO tb_berkas (no_bps, id_layanan, npwp, nm_wp, status, tgl_bps) 
		VALUES ('".$a."', '".$b."', '".$c."', '".$d."', '0', '".$e."')");

	}
	
	public function dataBerkas($id_berkas){
		$sql    = $this->db->query("SELECT a.id, a.no_bps, a.npwp, a.nm_wp, a.status, a.tgl_bps, a.tgl_selesai, b.nm_layanan FROM tb_berkas a LEFT JOIN tb_jns_layanan b ON (a.id_layanan = b.id_layanan) WHERE a.id = ".$id_berkas." ORDER BY a.tgl_bps");

		return $sql->result();
	}
	
	public function selesaikanBerkas($id_berkas){
		$tanggal_ini = Date("Y-m-d");
		
		$sql    = $this->db->query("UPDATE tb_berkas SET status = '1', tgl_selesai = '".$tanggal_ini."' WHERE id = ".$id_berkas);

		echo $sql;
	}
    
	public function simpanPerubahanData($id_berkas, $kolom, $nilai){
		if($kolom == "select_layanan"){
			$kolom="id_layanan";
		}
		
		$sql = $this->db->query("UPDATE tb_berkas SET ".$kolom." = '".$nilai."' WHERE id = ".$id_berkas);

		echo $sql;
	}
}