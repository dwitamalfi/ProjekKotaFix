<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman_model extends CI_Model {

	private $_table = "tbl_pengumuman";
	public $id_pengumuman;
	public $nama_pengumuman ;
	public $deskripsi;
	public $gambar="default.jpg";
	public $tanggal_upload;

	public function rules(){
		return [
			['field' => 'nama_pengumuman',
			'label' => 'nama_pengumuman',
			'rules' => 'required'],
			['field' => 'deskripsi',
			'label' => 'deskripsi',
			'rules' => 'required']
		];
	}


	public function GetAll()
	{

		return $this->db->get($this->_table)->result();
	}
	public function getById($id){
		return $this->db->get_where($this->_table, ["id_pengumuman"=>$id])->row();
	}
	
	public function save(){
		$post = $this->input->post();
		
		$this->nama_pengumuman = $post{"nama_pengumuman"};
		$this->deskripsi = $post{"deskripsi"};
		$this->gambar= $this->_uploadImage();
		$this->db->insert($this->_table, $this);
	}

	// public function delete($id){
	// 	return $this->db->delete($this->_table, array("id_berita"=>$id));
	// }
	public function update(){
		$post=$this->input->post();
		$this->id_pengumuman = $post["id"];
		$this->nama_pengumuman= $post["nama_pengumuman"];
		$this->deskripsi= $post["deskripsi"];

		if (!empty($_FILES["gambar"]["name"])) {
			$this->gambar= $this->_uploadImage();
		}else {
			$this->gambar = $post["old_image"];
		}

		$this->db->update($this->_table, $this, array('id_pengumuman' => $post['id']));
	}

	public function delete($id){
		$this->_deleteImage($id);
		return $this->db->delete($this->_table, array("id_pengumuman" => $id));
	}	

	private function _uploadImage(){
		$config['upload_path'] = './upload/pengumuman';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$config['max_size']  = 1024; // 1MB

		$this->load->library('upload', $config);

		if($this->upload->do_upload('gambar')) {
			return $this->upload->data("file_name");
		}

		return "default.jpg";
	}

	private function _deleteImage($id) {
		$pengumuman = $this->getById($id);
		if ($pengumuman->gambar != "default.jpg") {
			$filename= explode(".", $pengumuman->gambar)[0];
			return array_map('unlink', glob(FCPATH."upload/pengumuman/$filename.*"));
		}
	}
}
