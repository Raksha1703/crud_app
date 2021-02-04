<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class customermodel extends CI_Model{

        public function getrecords(){
            //$query = $this->db->get('customers');
            $this->db->select('*');
$this->db->from('customers');
$query=$this->db->get()->row();
return $query->row();

            var_dump("abs");
            if($query->num_rows()>0){
                return $query->row();
            }
        }

    }


?>