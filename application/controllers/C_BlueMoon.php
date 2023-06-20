<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_BlueMoon extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('V_Home');
	} 

	public function login()
	{
		$this->load->view('V_Login');
	} 

	public function contact()
	{
		$this->load->view('V_contact');
	} 

	public function linkContact(){
		$data_mitra = $this->M_mitra->getAll();
		$temp['data'] = $data_mitra;
        $temp['caption'] = "List of Mitra";
        $this->load->view('V_mitra',$temp);
	}

	public function tambahcontact(){
		$nama_contact = $this->input->post('nama_contact');
		$email_contact = $this->input->post('email_contact');
		$pesan_contact = $this->input->post('pesan_contact');

		$DataInsert = array(
			'nama_contact' => $nama_contact,
			'email_contact' => $email_contact,
			'pesan_contact' => $pesan_contact,
		);
		
		$this->M_mitra->InsertDataContact($DataInsert);
		redirect (site_url('C_BlueMoon/linkMitra'));
	}

	public function registration()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

		if($this->form_validation->run() == FALSE)
		{
			$data['title'] = 'Blue Moon Hotel';
			$this->load->view('V_Registration', $data);
		}
		else
		{
			echo 'Data berhasil ditambahkan!';
		}
	}
}
