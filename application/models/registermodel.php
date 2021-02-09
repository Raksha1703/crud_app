<?php
defined('BASEPATH') or exit('No direct script access allowed');

class registermodel extends CI_Model
{   
    public function checklogin($username, $password)
    {
       
        $array = array('username' => $username, 'password' => $password);
        $query= $this->db->where($array);
        $query = $query->get('Users');
       
        return $query->result();
    }
    public function savedata($data)
    {   
        return $this->db->insert('Users', $data);
    }
}

?>