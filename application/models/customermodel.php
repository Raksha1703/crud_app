<?php
defined('BASEPATH') or exit('No direct script access allowed');
class customermodel extends CI_Model
{

    public function getrecords()
    {
        $query = $this->db->get('customers');
        return $query->result();
    }

    public function saverecords($data)
    {
        return $this->db->insert('customers', $data);      
    }

}
