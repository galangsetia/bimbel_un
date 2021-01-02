<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('M_daftar');
	}
 
	public function index()
	{
		$this->load->view('Daftar');
	}

	Public function tambah_pendaftar(){
		$id_pendaftar = $this->input->post('id_pendaftar');
		$nama_pendaftar = $this->input->post('nama_pendaftar');
		$email_pendaftar = $this->input->post('email_pendaftar');
		$no_wa = $this->input->post('no_wa');
		$alamat_pendaftar = $this->input->post('alamat_pendaftar');
		$asal_sekolah = $this->input->post('asal_sekolah');
		$paket_bimbel = $this->input->post('paket_bimbel');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'id_pendaftar' => $id_pendaftar,
			'nama_pendaftar' => $nama_pendaftar,
			'email_pendaftar' => $email_pendaftar,
			'no_wa' => $no_wa,
			'alamat_pendaftar' => $alamat_pendaftar,
			'asal_sekolah' => $asal_sekolah,
			'paket_bimbel' => $paket_bimbel,
			'keterangan' => $keterangan,
		);
		$this->M_daftar->input_data($data,'pendaftar');
		redirect('Berhasil_daftar');
	}

	Public function hapus_pendaftar($id_pendaftar){
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		  }
		$where = array('id_pendaftar' => $id_pendaftar);
		$this->M_daftar->Hapus_data($where,'pendaftar');
		redirect('Admin/List');
	}

	public function edit_pendaftar($id_pendaftar){
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		  }
        $where = array('id_pendaftar' => $id_pendaftar);
        $data['pendaftar'] = $this->M_daftar->edit_data($where,'pendaftar')->result();
        $this->load->view('daftar_view',$data);
	}
	

	// public function konfirmasi_pendaftar($id_pendaftar){
	// 	if($this->session->userdata('status') != "login"){
	// 		redirect(base_url("login"));
	// 	  }
    //     $where = array('id_pendaftar' => $id_pendaftar);
    //     $data['pendaftar'] = $this->M_daftar->edit_data($where,'pendaftar')->result();
    //     $this->load->view('daftar_view',$data);
	// }
	



	public function update(){
		$id_pendaftar = $this->input->post('id_pendaftar');
		$nama_pendaftar = $this->input->post('nama_pendaftar');
		$email_pendaftar = $this->input->post('email_pendaftar');
		$no_wa = $this->input->post('no_wa');
		$alamat_pendaftar = $this->input->post('alamat_pendaftar');
		$asal_sekolah = $this->input->post('asal_sekolah');
		$paket_bimbel = $this->input->post('paket_bimbel');
		$keterangan = $this->input->post('keterangan');

		
		$data = array(
			'id_pendaftar' => $id_pendaftar,
			'nama_pendaftar' => $nama_pendaftar,
			'email_pendaftar' => $email_pendaftar,
			'no_wa' => $no_wa,
			'alamat_pendaftar' => $alamat_pendaftar,
			'asal_sekolah' => $asal_sekolah,
			'paket_bimbel' => $paket_bimbel,
			'keterangan' => $keterangan,
		);

		$where = array(
			'id_pendaftar' => $id_pendaftar
		);

		$this->M_daftar->update_data($where,$data,'pendaftar');
		redirect('admin/list');
	}

	public function update_sd(){
		$id_pendaftar = $this->input->post('id_pendaftar');
		$nama_pendaftar = $this->input->post('nama_pendaftar');
		$email_pendaftar = $this->input->post('email_pendaftar');
		$no_wa = $this->input->post('no_wa');
		$alamat_pendaftar = $this->input->post('alamat_pendaftar');
		$asal_sekolah = $this->input->post('asal_sekolah');
		$paket_bimbel = $this->input->post('paket_bimbel');
		$keterangan = $this->input->post('keterangan');

		
		$data = array(
			'id_pendaftar' => $id_pendaftar,
			'nama_pendaftar' => $nama_pendaftar,
			'email_pendaftar' => $email_pendaftar,
			'no_wa' => $no_wa,
			'alamat_pendaftar' => $alamat_pendaftar,
			'asal_sekolah' => $asal_sekolah,
			'paket_bimbel' => $paket_bimbel,
			'keterangan' => $keterangan,
		);

		$where = array(
			'id_pendaftar' => $id_pendaftar
		);

		$this->M_daftar->update_data($where,$data,'pendaftar');
		redirect('admin/list_sd');
	}

	// konfirmasi
	
	

}
