<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Users extends CI_Model 
{	
	public function getusers($where = '')
	{
        return $this->db->query("select * from Users $where;");
	}

	public function getmasterperusahaan()
	{
        return $this->db->query("select * from MasterPerusahaan ");
	}
}
