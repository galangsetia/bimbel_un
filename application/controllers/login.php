<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('M_login');
      
      }
      public function index() {
          $this->load->view('login');
    }
     
    function aksi_login(){
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->M_login->cek_login("admin",$where)->num_rows(); //menghitung jumlah record
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin"));
 
		}else{
			echo "<h1> Username dan password salah ! </h1>";
		}
	}
 
	function logout(){
		$this->session->sess_destroy(); //menghapus semua session
		redirect(base_url('login'));
	}
}

  

