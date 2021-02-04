<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function add()
	{
		$this->load->view('home');
    }
    public function index()
	{
		$mod=$this->load->model('customermodel');
		var_dump($mod);
		$data=$this->customermodel->getrecords();
		var_dump($data);
		echo '<pre>';
			print_r($data);
		echo '</pre>';
		$this->load->view('show', ['data' => $data]);
	}
}
?>