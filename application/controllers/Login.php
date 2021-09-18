<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{	
	public function __Construct()
	{
        parent::__construct();
		$this->load->model('m_users','users');
		$this->load->model('m_global','global');
	}

	public function index()
	{
		//Validasi
		$valid 				= $this->form_validation;
		$email				= $this->input->post('email');
        $password			= sha1($this->input->post('password'));
		$nama_perusahaan	= $this->input->post('nama_perusahaan');

		$valid->set_rules('email','Email Users','required');
		$valid->set_rules('password','Password','required');
		$valid->set_rules('nama_perusahaan','Nama Perusahaan','required');
		if ($valid->run())
		{
			$this->login_users->LoginData($email,$password,$nama_perusahaan);
		}
		$data = array(
			'title' => 'Login Users', 
			'subtitle' => 'Login Users',      
			'list_perusahaan' => $this->users->getmasterperusahaan()->result_array()
		);
		$this->load->view('users/login', $data);
	}

	public function logout()
	{
		$id_users 		= $this->session->userdata('users_id');
		$log=array( 
			'Aktivitas'		=> 'Logout Aplikasi',
			'UsersId'		=> $id_users,
			'Waktu'			=> date('Y-m-d H:i:s'),
		);  
        $this->global->InsertData('LogAktivitas',$log);
		$this->login_users->logout();
	}
}
