<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengumuman extends CI_Model {


	public function GetPengumuman()
	{

		$pengumuman = $this->db->query('SELECT * FROM tbl_pengumuman;');
		return $pengumuman;
	}
		
}
