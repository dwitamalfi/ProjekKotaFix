<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kalender_model extends CI_Model {

	private $_table = "tbl_kalender";
	public $id_kalender;
	public $nama_acara ;
	public $deskripsi;
	public $gambar="default.jpg";
	public $tanggal_acara;
	public $tempat;

	public function rules(){
		return [
			['field' => 'nama_acara',
			'label' => 'nama_acara',
			'rules' => 'required'],
			['field' => 'deskripsi',
			'label' => 'deskripsi',
			'rules' => 'required'],
			['field' => 'tanggal_acara',
			'label' => 'tanggal_acara',
			'rules' => 'required'],
			['field' => 'tempat',
			'label' => 'tempat',
			'rules' => 'required']
		];
	}


	public function GetAll()
	{

		return $this->db->get($this->_table)->result();
	}
	public function getById($id){
		return $this->db->get_where($this->_table, ["id_kalender"=>$id])->row();
	}
	
	public function save(){
		$post = $this->input->post();
		
		$this->nama_acara = $post{"nama_acara"};
		$this->deskripsi = $post{"deskripsi"};
		$this->gambar= $this->_uploadImage();
		$this->tempat= $post{"tempat"};
		$this->tanggal_acara= $post{"tanggal_acara"};
		$this->db->insert($this->_table, $this);
	}

	// public function delete($id){
	// 	return $this->db->delete($this->_table, array("id_berita"=>$id));
	// }
	public function update(){
		$post=$this->input->post();
		$this->id_kalender = $post["id"];
		$this->nama_acara= $post["nama_acara"];
		$this->deskripsi= $post["deskripsi"];
		$this->tempat= $post["tempat"];
		$this->tanggal_acara= $post["tanggal_acara"];


		if (!empty($_FILES["gambar"]["name"])) {
			$this->gambar= $this->_uploadImage();
		}else {
			$this->gambar = $post["old_image"];
		}

		$this->db->update($this->_table, $this, array('id_kalender' => $post['id']));
	}

	public function delete($id){
		$this->_deleteImage($id);
		return $this->db->delete($this->_table, array("id_kalender" => $id));
	}	

	private function _uploadImage(){
		$config['upload_path'] = './upload/kalender';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$config['max_size']  = 2048; // 1MB

		$this->load->library('upload', $config);

		if($this->upload->do_upload('gambar')) {
			return $this->upload->data("file_name");
		}

		return "default.jpg";
	}

	private function _deleteImage($id) {
		$kalender = $this->getById($id);
		if ($kalender->gambar != "default.jpg") {
			$filename= explode(".", $kalender->gambar)[0];
			return array_map('unlink', glob(FCPATH."upload/kalender/$filename.*"));
		}
	}
}
