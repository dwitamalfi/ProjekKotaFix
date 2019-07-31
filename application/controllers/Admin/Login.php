<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Admin/Login_model');
	}

	function index(){
		$this->load->view('Admin/Login');
	}

	function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_adminevent=$this->Login_model->auth_event($username,$password);

        if($cek_adminevent->num_rows() > 0){ //jika login sebagai dosen
						$data=$cek_adminevent->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['level']=='1'){ //Akses admin
		            $this->session->set_userdata('akses','2');
		            $this->session->set_userdata('ses_id',$data['id_user']);
		            $this->session->set_userdata('ses_nama',$data['username']);
		            redirect('Admin/Event/Kalender/');

		         }else{ //akses dosen
		            $this->session->set_userdata('akses','3');
								$this->session->set_userdata('ses_id',$data['id_user']);
		            $this->session->set_userdata('ses_nama',$data['username']);
		            redirect('Admin/Event/Pengumuman');
		         }

        }else{ //jika login sebagai mahasiswa
					$cek_adminberita=$this->Login_model->auth_berita($username,$password);
					if($cek_adminberita->num_rows() > 0){
							$data=$cek_adminberita->row_array();
        			$this->session->set_userdata('masuk',TRUE);
							$this->session->set_userdata('akses','1');
							$this->session->set_userdata('ses_id',$data['id_user']);
							$this->session->set_userdata('ses_nama',$data['username']);
							redirect('Admin/Berita/Berita');
					}else{  // jika username dan password tidak ditemukan atau salah
							$url=base_url();
							echo $this->session->set_flashdata('msg','Username Atau Password Salah');
							redirect("Admin/Login");
					}
        }

    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect("Admin/Login");
    }

}
