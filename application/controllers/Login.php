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
        $this->load->model('registermodel');
        //var_dump($data);
        if($this->registermodel->checklogin($data["username"],$data["password"])  )
        {
            return redirect('home');
        }
        else
        {
            echo "error";
        }               
    }
    public function registration()
    {   
        
        $this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_error_delimiters('<div class="has-text-danger">','</div>');
        if($this->form_validation->run())
        {     

            
            $data = $this->input->post();
            if($data){
                
                $this->load->model('registermodel');
                if($this->registermodel->savedata($data))
                {
                    $this->session->set_flashdata('response','Data SAVE Succesfully.');
                    return redirect('login');
                    
                }
                else
                {
                    $this->session->set_flashdata('response','Data failed to SAVE!!.');
                    return redirect('login/registration');
                }
            }
        }
        $this->load->view('register');
        
    }
}
?>