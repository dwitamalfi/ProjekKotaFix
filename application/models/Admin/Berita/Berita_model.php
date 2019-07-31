<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {

	private $_table = "tbl_berita";
	public $id_berita;
	public $judul ;
	public $isi;
	public $gambar="default.jpg";
	public $tanggal_update;

	public function rules(){
		return [
			['field' => 'judul',
			'label' => 'judul',
			'rules' => 'required'],
			['field' => 'isi',
			'label' => 'isi',
			'rules' => 'required']
		];
	}


	public function GetAll()
	{
		$this->db->order_by("id_berita","desc");
		return $this->db->get($this->_table)->result();
	}
	public function getById($id){
		return $this->db->get_where($this->_table, ["id_berita"=>$id])->row();
	}
	
	public function save(){
		$post = $this->input->post();
		
		$this->judul = $post{"judul"};
		$this->isi = $post{"isi"};
		$this->gambar= $this->_uploadImage();
		$this->db->insert($this->_table, $this);
	}

	// public function delete($id){
	// 	return $this->db->delete($this->_table, array("id_berita"=>$id));
	// }
	public function update(){
		$post=$this->input->post();
		$this->id_berita = $post["id"];
		$this->judul= $post["judul"];
		$this->isi= $post["isi"];

		if (!empty($_FILES["gambar"]["name"])) {
			$this->gambar= $this->_uploadImage();
		}else {
			$this->gambar = $post["old_image"];
		}

		$this->db->update($this->_table, $this, array('id_berita' => $post['id']));
	}

	public function delete($id){
		$this->_deleteImage($id);
		return $this->db->delete($this->_table, array("id_berita" => $id));
	}	

	private function _uploadImage(){
		$config['upload_path'] = './upload/berita';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$config['max_size']  = 1024; // 1MB

		$this->load->library('upload', $config);

		if($this->upload->do_upload('gambar')) {
			return $this->upload->data("file_name");
		}

		return "default.jpg";
	}

	private function _deleteImage($id) {
		$berita = $this->getById($id);
		if ($berita->gambar != "default.jpg") {
			$filename= explode(".", $berita->gambar)[0];
			return array_map('unlink', glob(FCPATH."upload/berita/$filename.*"));
		}
	}
}
