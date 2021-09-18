<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
	public function __Construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('m_global', 'global');
	}

	public function index()
	{
		$this->cek_session();
		$user_id 		= $this->session->userdata('users_id');
		$nama_users		= $this->session->userdata('nama');
		$email_users	= $this->session->userdata('email');
        $log=array( 
			'Aktivitas'		=> 'Melihat Dashboard',
			'UsersId'		=> $user_id,
			'Waktu'			=> date('Y-m-d H:i:s'),
		);  
        $this->global->InsertData('LogAktivitas',$log);
		$data = array(
			'title' => 'Dashboard Users',
			'id_users' => $user_id,
			'nama'	=> $nama_users,
			'email'	=> $email_users
		);
		$this->load->view('users/template/dashboard', $data);
	}

	function cek_session(){
		if(!$this->session->userdata('users_id')){
			redirect(base_url().'login');
			exit(0);
		}
	}

}
