<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AnggotaModel extends CI_Model {

	public function getData()
	{
		$this->db->select('*');
    $this->db->from('anggota');
    
    $query = $this->db->get();

    return $query->result_array();
	}
}
