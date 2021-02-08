<?php
defined('BASEPATH') or exit('No direct script access allowed');
class customermodel extends CI_Model
{

    public function getrecords($search)
    {   $query = $this->db;
        if($search){
        $query = $query->like('name',$search)->or_like('phone',$search);
        }
        $query = $query->get('customers');
       
        return $query->result();
    }

    public function saverecords($data)
    {
        return $this->db->insert('customers', $data);      
    }

    public function getallrecords($id)
    {   
        $query = $this->db->get_where('customers', array('id'=>$id));
        if($query->num_rows()>0)
        {
            return $query->row();
        }
    }

    public function deleterecord($id)
    {
        return $this->db->delete('customers', array('id'=>$id));      
    }
}
