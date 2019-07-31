<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Admin/Berita/Berita_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		if($this->session->userdata('akses')=='1'){
		$data["berita"]= $this->Berita_model->GetAll();
		$this->load->view('Admin/Berita/List_berita', $data);
		}else{
      redirect('Admin/Login');
    }
	}

	public function add(){
		 if($this->session->userdata('akses')=='1'){
     $berita = $this->Berita_model;
		$validation = $this->form_validation;
		$validation->set_rules($berita->rules());

		if($validation->run()) {
			$berita->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}
		$this->load->view('Admin/Berita/Tambah_berita');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
}
	public function edit($id = null){
		 if($this->session->userdata('akses')=='1'){
		if(!isset($id)) redirect ('Admin/Berita/Berita');

		$berita =$this->Berita_model;
		$validation =$this->form_validation;
		$validation->set_rules($berita->rules());

		if ($validation->run()) {
			$berita->update();
			$this->session->set_flashdata('success','Berhasil disimpan');
		}

		$data["berita"] = $berita->getById($id);
		if (!$data["berita"]) show_404();

		$this->load->view("Admin/Berita/Edit_berita", $data);
		 }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
	}

	public function delete($id) {
		if($this->session->userdata('akses')=='1'){
		if (!isset($id)) show_404();

		if ($this->Berita_model->delete($id)) {
			redirect(site_url('Admin/Berita/Berita'));
		}
		 }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
	}

	}

