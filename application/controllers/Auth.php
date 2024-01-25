<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function signin(){

    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|trim');

    if ($this->form_validation->run() == false) {
      $data = array(
        'judul' => "Library Apps | Sign In",
      );
    
      $this->load->view('pages/auth/signin', $data);
    } else {
      $email = $this->input->post('email');
      $password = md5($this->input->post('password'));

      $user = $this->db->get_where('akun', ['EmailUser' => $email, 'Password' => $password ])->row_array();

      if ($user) {
        
        $this->session->set_userdata('email', $user['EmailUser']);
        // var_dump($this->session->userdata('email'));
        redirect('dashboard'); 
      } else {
        $data = array(
          'judul' => "Library Apps | Sign In",
        );

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email atau Password Salah</div>');
      
        $this->load->view('pages/auth/signin', $data);
      }
    }

   
	}

  public function signup(){

    $this->form_validation->set_rules('fullname', 'Nama', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password1', 'Password', 'required|min_length[3]');
    $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|min_length[3]|matches[password1]');


    if ($this->form_validation->run() == false) {
      $data = array(
        'judul' => "Library Apps | Sign Up",
      );
  
      $this->load->view('pages/auth/signup', $data);
  
    } else {
      $fullname = $this->input->post('fullname');
      $email = $this->input->post('email');
      $password = md5($this->input->post('password1'));

      $user = $this->db->get_where('akun', ['EmailUser' => $email])->row_array();

      if($user){

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email telah digunakan, silahkan gunakan email lain</div>');

        $data = array(
          'judul' => "Library Apps | Sign Up",
        );
    
        $this->load->view('pages/auth/signup', $data);

      } else {
        $data = array(
          'judul' => "Library Apps | Sign Ip",
        );

        $input = array(
          'EmailUser' => $email,
          'Password' => $password,
          'Role' => 2
        );

        $this->db->insert('akun', $input);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun Berhasil dibuat, silahkan masuk</div>');
        
        $this->load->view('pages/auth/signin', $data);
      }
    }
	}

  public function logout(){
    $this->session->unset_userdata('email', $user['EmailUser']);

    redirect('auth/signin');
  }
}
