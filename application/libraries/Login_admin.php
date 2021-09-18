<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Login_admin
{
	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct()
	{
		$this->CI =& get_instance();
	}

	//Login
	public function LoginData($username, $password)
	{
		//query untuk pencocokan data
		$query = $this->CI->db->get_where('admins', array(	
            'Username' => $username,
			'Password' => $password
		));

		//Jika ada hasilnya
		if ($query->num_rows() > 0)
		{
			$row 			= $this->CI->db->query('SELECT * FROM admins WHERE Username = "'.$username.'" AND Password = "'.$password.'" ');
			$users 			= $row->row();
			$id_admin 		= $users->id;
			$username		= $users->Username;
			$status 		= $users->Status;

			$this->CI->session->set_userdata('username', $username);
			$this->CI->session->set_userdata('status', $status);
			$this->CI->session->set_userdata('admin_id', $id_admin);

			foreach ($query->result() as $row)
			{
				if ($row->Status == "1")
				{
					redirect(base_url('admin/dashboard'));
			}else{
					$this->CI->session->set_flashdata('failed', 'Username dan Password Tidak Aktif');
					redirect(base_url().'admin/login');
				}	
			}
		}else{
			$this->CI->session->set_flashdata('failed', 'Login Gagal, Harap Periksa Kembali Akun Anda');
			redirect(base_url().'admin/login');
		}
	}

	//Cek login
	public function cek_login()
	{
		if ($this->CI->session->userdata('username') == '')
		{
			$this->CI->session->set_flashdata('failed', 'Silakan Login Dulu');
			redirect(base_url('admin/login'));
		}
	}
 
	//Logout
	public function logout()
	{
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('id');
		$this->CI->session->set_flashdata('success','Anda berhasil logout');
		redirect(base_url().'admin/login');
	}
}

?>
