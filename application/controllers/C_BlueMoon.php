<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_BlueMoon extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function login()
	{
		$this->load->view('V_Login.php');
	} 

	public function index()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

		if($this->form_validation->run() == FALSE)
		{
			$data['title'] = 'Blue Moon Hotel';
			$this->load->view('V_Registration.php', $data);
		}
		else
		{
			echo 'Data berhasil ditambahkan!';
		}
	}
}