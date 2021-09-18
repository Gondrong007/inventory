<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller 
{
	public function __Construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
        $this->load->model('m_users', 'users');
		$this->load->model('m_global', 'global');
	}

	public function index($id_users = '')
	{
		$this->cek_session();
		$id_users 		= $this->session->userdata('users_id');
		$nama_users		= $this->session->userdata('nama');
		$email_users	= $this->session->userdata('email');
        $profile        = $this->users->getusers("where id='$id_users' ")->result_array();
        $log=array( 
			'Aktivitas'		=> 'Melihat Profile',
			'UsersId'		=> $id_users,
			'Waktu'			=> date('Y-m-d H:i:s'),
		);  
        $this->global->InsertData('LogAktivitas',$log);
		$data = array(
			'title' => 'Profile',
            'subtitle' => 'Profile',
			'nama'	=> $nama_users,
			'email'	=> $email_users,
            'id_users' => (isset($profile[0]['id'])) ? $profile[0]['id'] : "",
            'nama_users' => (isset($profile[0]['NamaUsers'])) ? $profile[0]['NamaUsers'] : "",
            'email_users' => (isset($profile[0]['EmailUsers'])) ? $profile[0]['EmailUsers'] : "",
            'no_telp' => (isset($profile[0]['NoTelp'])) ? $profile[0]['NoTelp'] : "",
            'nama_perusahaan' => (isset($profile[0]['NamaPerusahaan'])) ? $profile[0]['NamaPerusahaan'] : "",
            'alamat_users' => (isset($profile[0]['AlamatUsers'])) ? $profile[0]['AlamatUsers'] : "",
		);
		$this->load->view('users/profile/index', $data);
	}

    public function actionupdate()
    {
        $id_users = $this->input->post('id_users');
        $alamat_users = $this->input->post('alamat_users');
        $data = array(
            'AlamatUsers' => $alamat_users
        );
        $this->global->UpdateData('Users', $data, array('id' => $id_users));
        echo "<script>alert('Berhasil Data Diupdate');window.location='".base_url()."users/profile';</script>";
    }

	function cek_session(){
		if(!$this->session->userdata('users_id')){
			redirect(base_url().'login');
			exit(0);
		}
	}

}
