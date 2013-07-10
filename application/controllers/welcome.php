<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['main'] = "index";
		$this->load->view("welcome", $data);
	}

	public function course()
	{
		$data['main'] = "course";
		$this->load->view("course", $data);	
	}
	public function aboutus()
	{
		$data['main'] = "aboutus";
		$data['sub'] = "aboutus_ab";
		$this->load->view("aboutus", $data);	
	}
	public function works()
	{
		$data['main'] = "works";
		$this->load->view("works", $data);	
	}

	public function contactus()
	{
		$data['main'] = "contactus";
		$this->load->view("contactus", $data);	
	}

	public function teachers()
	{
		$data['main'] = "aboutus";
		$data['sub'] = "aboutus_tea";
		$this->load->view("teachers", $data);	
	}

	public function face()
	{
		$data['main'] = "aboutus";
		$data['sub'] = "aboutus_face";
		$this->load->view("face", $data);	
	}

	public function students()
	{
		$data['main'] = "aboutus";
		$data['sub'] = "aboutus_stu";
		$this->load->view("students", $data);	
	}



}

