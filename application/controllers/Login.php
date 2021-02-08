<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index()
    {    
        $this->load->view('login');
    }
    public function submit()
    {
        $data = $this->input->post();
        //var_dump($data);
        if($data['username'] == "abc" && $data['password'] == "xyz" )
        {
            return redirect('home');
        }
        else
        {
            echo "error";
        }
               
    }
}
?>