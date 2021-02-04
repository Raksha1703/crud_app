<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function add()
	{
		$this->load->view('home');
    }
    public function display()
	{
		$this->load->view('show');
	}
}
?>