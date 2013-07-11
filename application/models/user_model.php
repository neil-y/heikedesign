<?php

class User_Model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}


	public function save($user_apply)
	{
		$this->db->insert("user_apply", $user_apply);	
	}

	public function listall()
	{
		$this->db->order_by("id", "desc");
		$result = $this->db->get("user_apply");	
		return $result->result_array();
	}
}
