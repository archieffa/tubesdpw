<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_BlueMoon extends CI_Controller 
{
	// method default yang selalu dijalankan ketika mengakses controller
	public function __construct()
	{
		parent::__construct();  // memanggil method construct yang ada di CI_Controller
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

	public function cekLogin()
	{
		$email_customer = $_POST['email_customer'];
        $password_customer = $_POST['password_customer'];

        //cek data login
        if ($email_customer == "xxx" && $password_customer == "yyy") 
		{
            $this->index();
        }
        else 
        {
            $this->login();
        }
	}

	public function contact()
	{
		$this->load->view('V_contact');
	} 

	public function registration()
	{
		$this->form_validation->set_rules('nama_lengkap', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('no_telp', 'No_Telp', 'required|trim');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal_Lahir', 'required|trim');

		if($this->form_validation->run() == FALSE)  // ketika validasi formnya gagal
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
