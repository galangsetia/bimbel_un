<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_daftar extends CI_Model {
    
    public function input_data($data,$pendaftar) {
      $this->db->insert($pendaftar,$data);
    }

    public function hapus_data($where,$pendaftar){
        $this->db->where($where);
        $this->db->delete($pendaftar);
    }

    public function edit_data($where,$pendaftar){
        return $this->db->get_where($pendaftar,$where);
    }

    public function update_data($where,$data,$pendaftar){
        $this->db->where($where);
        $this->db->update($pendaftar,$data);
    }

    public function  konfirmasi_pendaftar($data,$peserta) {
        $this->db->insert($peserta,$data);
      }
}