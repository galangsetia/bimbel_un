<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{

        function cek_login($where){
                return $this->db->get_where('admin',$where);
        }

        public function input_data($data,$info) {
                $this->db->insert($info,$data);
              }
              
              function total_rows() {
         
                return $this->db->get_where('pendaftar',array('Keterangan'=>'BELUM'))->num_rows();
              }



}

?> 