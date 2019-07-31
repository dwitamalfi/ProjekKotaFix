<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kalender extends CI_Model {


	public function GetKalender()
	{

		$kalender = $this->db->query('SELECT * FROM tbl_kalender;');
		return $kalender;
	}
		
}
