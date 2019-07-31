<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Admin/Event/Pengumuman_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		 if($this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='3'){
		$data["pengumuman"]= $this->Pengumuman_model->GetAll();
		$this->load->view('Admin/Event/List_pengumuman', $data);
		}else{
      redirect('Admin/Login');
    }
	}
	public function add(){
 if($this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='3'){
		$pengumuman = $this->Pengumuman_model;
		$validation = $this->form_validation;
		$validation->set_rules($pengumuman->rules());

		if($validation->run()) {
			$pengumuman->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}
		$this->load->view('Admin/Event/Tambah_pengumuman');
		}else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
		}
	public function edit($id = null){
		 if($this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='3'){
		if(!isset($id)) redirect ('Admin/Event/Pengumuman');

		$pengumuman =$this->Pengumuman_model;
		$validation =$this->form_validation;
		$validation->set_rules($pengumuman->rules());

		if ($validation->run()) {
			$pengumuman->update();
			$this->session->set_flashdata('success','Berhasil disimpan');
		}

		$data["pengumuman"] = $pengumuman->getById($id);
		if (!$data["pengumuman"]) show_404();

		$this->load->view("Admin/Event/Edit_pengumuman", $data);
		}else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
	}

	public function delete($id) {
		if($this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='3'){
		if (!isset($id)) show_404();

		if ($this->Pengumuman_model->delete($id)) {
			redirect(site_url('Admin/Event/Pengumuman'));
		}
		}else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
	}

	}

