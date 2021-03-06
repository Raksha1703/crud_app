<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function add()
	{
		$this->load->view('home');
    }
    public function index()
	{
		$search = ($this->input->post('search'))?$this->input->post('search'):null;
		if($search)
		{
			$this->session->sess_destroy();
		}
		$this->load->model('customermodel');
		$data = $this->customermodel->getrecords($search);
		$this->load->view('show', ['data' => $data]);
	}
	public function create()
	{
		$this->load->view('create');
	}
	
	public function save()
	{
		$this->form_validation->set_rules('name','Customer Name','required');
		$this->form_validation->set_rules('phone','Phone','required');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('city','City','required');
		$this->form_validation->set_rules('country','Country','required');
		$this->form_validation->set_error_delimiters('<div class="has-text-danger">','</div>');

		if($this->form_validation->run())
		{	$data = $this->input->post();
			$this->load->model('customermodel');
			if($this->customermodel->saverecords($data))
			{
				$this->session->set_flashdata('response','Data SAVE Succesfully.');
			}
			else
			{
				$this->session->set_flashdata('response','Data failed to SAVE!!.');
			}
			return redirect('home');
		}
		else
		{
			$this->load->view('create');
		}
	}
	public function edit($id)
	{	
		$this->load->model('customermodel');
		$record = $this->customermodel->getallrecords($id);
		var_dump($record);
		$this->load->view('update',['record'=>$record]);
	}
	 public function delete($id)
	{
		$this->load->model('customermodel');
		if($this->customermodel->deleterecord($id))
		{
			$this->session->set_flashdata('response','Data DELETED Succesfully.');
		}
		else
		{
			$this->session->set_flashdata('response','Failed to DELETE Data!!.');
		}
		return redirect('home');
	}
}
?>