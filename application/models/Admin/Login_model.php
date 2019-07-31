<?php
class Login_model extends CI_Model{
	//cek username dan password admin berita
	function auth_berita($username,$password){
		$query=$this->db->query("SELECT * FROM admin_berita WHERE username='$username' AND password=MD5('$password') LIMIT 1");
		return $query;
	}

	//cek username dan password admin event
	function auth_event($username,$password){
		$query=$this->db->query("SELECT * FROM admin_event WHERE username='$username' AND password=MD5('$password') LIMIT 1");
		return $query;
	}

}
