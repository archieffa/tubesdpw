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
