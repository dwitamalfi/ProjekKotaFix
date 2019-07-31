<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	function __construct(){
	parent:: __construct();
	$this->load->model('M_berita');
	$this->load->helper('tanggal_helper');
	}

	public function index()
	{
		$data['berita'] = $this->M_berita->GetBerita();
		$this->load->view('Berita',$data);
	}

	public function readBerita($id=null){
		$berita =$this->M_berita;
		$data["berita"] = $berita->getById($id);
		$this->load->view('Read_berita', $data);
	}
}
