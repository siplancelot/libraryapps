<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{

    $data = array(
      'judul' => "Library Apps | Dashboard",
      'page' => "pages/dashboard"
    );


		$this->load->view('theme/layout', $data);
	}
}
