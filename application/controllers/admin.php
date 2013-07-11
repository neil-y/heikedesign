<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("User_Model");
	}

	public function index()
	{
		$data['users'] = $this->User_Model->listall();	
		$this->load->view("admin/welcome", $data);
	}

	public function add()
	{
		$name = $this->input->post("name");			
		$gender = $this->input->post("gender");			
		$gender = ($gender == "yes") ? 1 : 0;
		$phone = $this->input->post("phone");			
		$email = $this->input->post("email");			
		list($type_id, $typename) = explode("-", $this->input->post("type"));	
		$remark = $this->input->post("remark");			

		$user_apply = array(
			"name"	=> $name,
			"gender" => $gender,
			"phone" => $phone,
			"email" => $email,
			"remark" => $remark,
			"type_id" => $type_id,
			"typename" => $typename,
			"createtime" => date('Y-m-d H:m:s')
		);
		$this->User_Model->save($user_apply);
		$this->session->set_flashdata('success', 'success');
		redirect("/contactus");
	}

	public function signin()
	{
		$this->load->view("admin/signin");
	}

	public function signin_do()
	{
		$name = $this->input->post("name");
		$password = $this->input->post("password");
		
		if($name == NAME && $password == PASSWORD)
		{
			$newdata = array(
				'name'  => $name,
				'logged_in' => TRUE
			);
			$this->session->set_userdata('user', $newdata);			
			redirect("/admin");
		}
		else
		{
			redirect("/admin/signin");	
		}
	}

	public function signout()
	{
		$this->session->unset_userdata('user');	
		$this->session->sess_destroy();
		redirect("/admin/signin");
	}


}

