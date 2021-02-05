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
	public function edit($id)
	{
		echo $id;
	}
}
?>