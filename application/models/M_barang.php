<?php
class M_barang extends CI_Model{

	function barang_list(){
		$hasil=$this->db->query("SELECT * FROM tbl_barang");
		return $hasil->result();
	}

	function simpan_barang($kode,$nama,$harga){
		$hasil=$this->db->query("INSERT INTO tbl_barang (kode_buku,nama_buku,harga_buku)VALUES('$kode','$nama','$harga')");
		return $hasil;
	}

	function get_barang_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_barang WHERE kode_buku='$kode'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'kode_buku' => $data->kode_buku,
					'nama_buku' => $data->nama_buku,
					'harga_buku' => $data->harga_buku,
					);
			}
		}
		return $hasil;
	}

	function update_barang($kode,$nama,$harga){
		$hasil=$this->db->query("UPDATE tbl_barang SET nama_buku='$nama',harga_buku='$harga' WHERE kode_buku='$kode'");
		return $hasil;
	}

	function hapus_barang($kode){
		$hasil=$this->db->query("DELETE FROM tbl_barang WHERE kode_buku='$kode'");
		return $hasil;
	}
	
}