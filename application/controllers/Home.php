<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function add()
	{
		$this->load->view('home');
    }
    public function index()
	{
		$this->load->model('customermodel');
		$data=$this->customermodel->getrecords();
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

		if($this->form_validation->run())
		{
			echo "Sucess";
		}
		else
		{
			$this->load->view('create');
		}
	}
	public function edit($id)
	{
		echo $id;
	}
}
?>