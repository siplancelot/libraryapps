<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function signin(){

    $data = array(
      'judul' => "Library Apps | Sign In",
    );


		$this->load->view('pages/auth/signin', $data);
	}

  public function signup(){

    $data = array(
      'judul' => "Library Apps | Sign Up",
    );


		$this->load->view('pages/auth/signup', $data);
	}
}
