<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_global extends CI_Model 
{
	public function InsertData($table_name,$data)
	{
		return $this->db->insert($table_name, $data);
	}

	public function UpdateData($table, $data, $where)
	{
		return $this->db->update($table, $data, $where);
	}

	public function DeleteData($table, $where)
	{
		return $this->db->delete($table, $where);
	}

	public function VerifikasiData($table, $data)
	{
		return $this->db->update($table, $data);
	}

}

