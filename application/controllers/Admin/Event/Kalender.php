<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kalender extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Admin/Event/Kalender_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		 if($this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='3'){
		$data["kalender"]= $this->Kalender_model->GetAll();
		$this->load->view('Admin/Event/List_kalender', $data);
		}else{
      redirect('Admin/Login');
    }
	}
	public function add(){
		 if($this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='3'){
		$kalender = $this->Kalender_model;
		$validation = $this->form_validation;
		$validation->set_rules($kalender->rules());

		if($validation->run()) {
			$kalender->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}
		$this->load->view('Admin/Event/Tambah_kalender');
		}else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
		}
	public function edit($id = null){
		 if($this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='3'){
		if(!isset($id)) redirect ('Admin/Event/Kalender');

		$kalender =$this->Kalender_model;
		$validation =$this->form_validation;
		$validation->set_rules($kalender->rules());

		if ($validation->run()) {
			$kalender->update();
			$this->session->set_flashdata('success','Berhasil disimpan');
		}

		$data["kalender"] = $kalender->getById($id);
		if (!$data["kalender"]) show_404();

		$this->load->view("Admin/Event/Edit_kalender", $data);
		}else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
	}

	public function delete($id) {
		if($this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='3'){
		if (!isset($id)) show_404();

		if ($this->Kalender_model->delete($id)) {
			redirect(site_url('Admin/Event/Kalender'));
		}
		}else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
	}

	}

