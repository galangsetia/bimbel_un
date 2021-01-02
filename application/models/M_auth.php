<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_auth extends CI_Model {
    
    public function get($username) {
        $this->db->where('username', $username);
        $result = $this->db->get('admin')->row();
        return $result;
    }
}