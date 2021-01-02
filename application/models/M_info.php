<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_info extends CI_Model
{
    public function input_data($data,$info) {
        $this->db->insert($info,$data);
      }

      public function edit_data($where,$info){
        return $this->db->get_where($info,$where);
    }

}

?> 