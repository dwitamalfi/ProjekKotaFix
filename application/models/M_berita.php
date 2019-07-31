<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model {

private $_table = "tbl_berita";
	public $id_berita;
	public $judul ;
	public $isi;
	public $gambar="default.jpg";
	public $tanggal_update;
	public function GetBerita()
	{
		$this->db->order_by("id_berita","desc");
		return $this->db->get($this->_table)->result();
	
	}

	public function getById($id){
		return $this->db->get_where($this->_table, ["id_berita"=>$id])->row();
	}

		
}
