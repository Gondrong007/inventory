<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Login_users
{
	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct()
	{
		$this->CI =& get_instance();
	}

	//Login
	public function LoginData($email, $password, $nama_perusahaan)
	{
		//query untuk pencocokan data
		$query = $this->CI->db->get_where('Users', array(	
            'EmailUsers' => $email,
			'Password' => $password,
			'NamaPerusahaan' => $nama_perusahaan
		));

		//Jika ada hasilnya
		if ($query->num_rows() > 0)
		{
			$row 			= $this->CI->db->query('SELECT * FROM Users WHERE EmailUsers = "'.$email.'" AND Password = "'.$password.'" AND NamaPerusahaan = "'.$nama_perusahaan.'" ');
			$users 			= $row->row();
			$id_users 		= $users->id;
			$nama_users		= $users->NamaUsers;
			$email_users	= $users->EmailUsers;
			$status 		= $users->Status;

			$this->CI->session->set_userdata('nama', $nama_users);
			$this->CI->session->set_userdata('email', $email_users);
			$this->CI->session->set_userdata('status', $status);
			$this->CI->session->set_userdata('users_id', $id_users);

			foreach ($query->result() as $row)
			{
				if ($row->Status == "1" && $row->NamaPerusahaan)
				{
					redirect(base_url('users/dashboard'));
			}else{
					$this->CI->session->set_flashdata('failed', 'Username dan Password Tidak Aktif');
					redirect(base_url().'login');
				}	
			}
		}else{
			$this->CI->session->set_flashdata('failed', 'Login Gagal, Harap Periksa Kembali Akun Anda');
			redirect(base_url().'login');
		}
	}

	//Cek login
	public function cek_login()
	{
		if ($this->CI->session->userdata('email') == '')
		{
			$this->CI->session->set_flashdata('failed', 'Silakan Login Dulu');
			redirect(base_url('login'));
		}
	}
 
	//Logout
	public function logout()
	{
		$this->CI->session->unset_userdata('email');
		$this->CI->session->unset_userdata('id');
		$this->CI->session->set_flashdata('success','Anda berhasil logout');
		redirect(base_url().'login');
	}
}

?>
