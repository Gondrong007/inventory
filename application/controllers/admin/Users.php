<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller 
{
	public function __Construct()
	{
		parent::__construct();
		$this->load->model('m_users','users');
	}

	public function index()
	{
		$username		= $this->session->userdata('username');
		$data = array(
			'title' => 'Users',
            'subtitle' => 'Data Users',
			'username'	=> $username,
			'list_users' => $this->users->getusers()->result_array()
		);
		$this->load->view('admin/users/index', $data);
	}

}
