<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function signin(){
    // Lakukan validasi inputan
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|trim');

    if ($this->form_validation->run() == false) {
      // jika terdapat kesalahan input
      $data = array(
        'judul' => "Library Apps | Sign In",
      );
      // dikembalikan ke halaman login
      $this->load->view('pages/auth/signin', $data);
    } else {
      // jika tidak terdapat kesalahan input

      // menyimpan hasil inputan di masing masing variabel
      $email = $this->input->post('email');
      // melakukan enkripsi password dengan md5
      $password = md5($this->input->post('password'));

      // pengecekan data di database apakah akun tersebut ada atau tidak
      $user = $this->db->get_where('akun', ['EmailUser' => $email, 'Password' => $password ])->row_array();

      if ($user) {
        // jika ada akunnya
        
        // lakukan set session
        $this->session->set_userdata('email', $user['EmailUser']);

        // diarahkan ke halaman dashboard
        redirect('dashboard'); 

      } else {
        // jika tidak ada akunnya

        $data = array(
          'judul' => "Library Apps | Sign In",
        );

        // dilakukan set alert error menggunakan session
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email atau Password Salah</div>');
        
        // dikembalikan ke halaman login
        $this->load->view('pages/auth/signin', $data);
      }
    }
	}

  public function signup(){

    // validasi data inputan
    $this->form_validation->set_rules('fullname', 'Nama', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password1', 'Password', 'required|min_length[3]');
    $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|min_length[3]|matches[password1]');


    if ($this->form_validation->run() == false) {
      // jika ada data yang salah input

      $data = array(
        'judul' => "Library Apps | Sign Up",
      );
      
      // dikembalikan ke halaman register
      $this->load->view('pages/auth/signup', $data);
  
    } else {
      // jika data sudah benar

      // menyimpan hasil inputan di variabel masing masing
      $fullname = $this->input->post('fullname');
      $email = $this->input->post('email');
      // lapisin dengan enkripsi md5
      $password = md5($this->input->post('password1'));

      // pengecekan user
      $user = $this->db->get_where('akun', ['EmailUser' => $email])->row_array();

      if($user){
        // jika user sudah ada

        // kirimkan pesan error menggunakan session
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email telah digunakan, silahkan gunakan email lain</div>');

        $data = array(
          'judul' => "Library Apps | Sign Up",
        );
        
        // dikembalikan ke halaman register
        $this->load->view('pages/auth/signup', $data);

      } else {
        // jika user tidak ada

        $data = array(
          'judul' => "Library Apps | Sign Ip",
        );

        // masukan inputan dalam array
        $input = array(
          'EmailUser' => $email, 
          'Password' => $password,
          'Role' => 2
        );

        // input ke database
        $this->db->insert('akun', $input);

        // kirim pesan sukses menggunakan alert
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun Berhasil dibuat, silahkan masuk</div>');
        
        // menuju halaman signin
        $this->load->view('pages/auth/signin', $data);
      }
    }
	}

  public function logout(){
    // lepas session login
    $this->session->unset_userdata('email', $user['EmailUser']);

    // diarahkan ke halaman login
    redirect('auth/signin');
  }
}
