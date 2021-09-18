<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
	public function __Construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$username		= $this->session->userdata('username');
		$data = array(
			'title' => 'Dashboard Admin',
			'username'	=> $username,
		);
		$this->load->view('admin/template/dashboard', $data);
	}

}
