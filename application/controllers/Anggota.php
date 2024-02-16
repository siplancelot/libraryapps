<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

  public function __construct(){

    parent:: __construct();

		if (!$this->session->userdata('email')) {
			redirect('auth/signin');
		}
	
    $this->load->model(array('AnggotaModel'));
    
  }

	public function index(){
    $anggota = $this->AnggotaModel->getData();

    $data = array(
      'judul' => 'Data Anggota',
      'page' => 'pages/anggota/index',
      'anggota' => $anggota
    );

    $this->load->view('theme/layout', $data);
  }
}
