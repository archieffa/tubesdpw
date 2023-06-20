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
		$data['title'] = 'Blue Moon Hotel';
		$this->load->view('V_Login');
	} 

	// public function cekLogin()
	// {
	// 	$email_customer = $_POST['email_customer'];
    //     $password_customer = $_POST['password_customer'];

    //     //cek data login
    //     if ($email_customer == "xxx" && $password_customer == "yyy") 
	// 	{
    //         $this->index();
    //     }
    //     else 
    //     {
    //         $this->login();
    //     }
	// }

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
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[t_customer.email_customer]', ['is_unique ' => 'This email has already registered!']); 
		// is_unique = email tidak boleh duplikat, harus unik
		// [nama tabel.nama field] = untuk cek apakah data yang diinput sudah ada di dalam database atau belum
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', ['min_length' => 'Password too short']);	

		if($this->form_validation->run() == FALSE)  // ketika validasi formnya gagal
		{
			$data['title'] = 'Blue Moon Hotel';
			$this->load->view('V_Registration', $data);
		}
		else
		{
			// insert ke database
			$data =
			[
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'email' => $this->input->post('email'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)  // dienkripsi terlebih dahulu
			];

			$this->db->insert('t_register', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil membuat akun. Silahkan masuk dengan akun tersebut!</div>');  // notifikasi jika customer berhasil membuat akun
			redirect('C_BlueMoon/login');  // jika data berhasil diinsert maka halaman dipindahkan ke halaman login
		}
	}
}
