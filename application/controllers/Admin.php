<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller {
	public function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != "login"){
          redirect(base_url("login"));
        }
          $this->load->model('M_info');
          

      
      
      }
      public function index() {
       
          //load modelnya dulu
          $this->load->model('M_admin');
          
          $this->data['total_pendaftar'] =  $this->M_admin->total_rows()  ;
   
          //load viewnya
          $this->load->view('Admin',$this->data);

          // $this->load->view('Admin');
         


          
    }

   Public function list(){
    $data['pendaftars']=$this->db->get_where('pendaftar',array('Keterangan'=>'BELUM'));
    $this->load->view('List_Pendaftar',$data);
    }

    Public function list_sd(){
      $data['pendaftars']=$this->db->get_where('pendaftar',array('Paket_bimbel'=>'SD' , 'Keterangan'=>'SUDAH'));
      $this->load->view('kelas_sd',$data);
    }

    Public function list_smp(){
        $data['pendaftars']=$this->db->get_where('pendaftar',array('Paket_bimbel'=>'SMP' , 'Keterangan'=>'SUDAH'));
        $this->load->view('kelas_smp',$data);
    }

    Public function list_sma(){
        $data['pendaftars']=$this->db->get_where('pendaftar',array('Paket_bimbel'=>'SMA' , 'Keterangan'=>'SUDAH'));
        $this->load->view('kelas_sma',$data);
    }


    

    



    




    
     

}
