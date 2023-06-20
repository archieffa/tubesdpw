<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_BlueMoon extends CI_Controller 
{
	// method default yang selalu dijalankan ketika mengakses controller
	public function __construct()
	{
		parent::__construct();  // memanggil method construct yang ada di CI_Controller
		$this->load->library('form_validation');
		$this->load->model('M_Contact');
	}

	public function index()
	{
		$this->load->view('V_Home');
	} 

	public function contact()
	{
		$this->load->view('V_contact');
	} 

	public function user()
	{
		$this->load->view('V_User');
	} 

	public function contactadmin()
	{
		$this->load->view('V_ContactAdmin');
	}
	
	
	
	public function linkContact(){
		$data_contact = $this->M_Contact->getAll();
		$temp['data'] = $data_contact;

        $this->load->view('V_ContactAdmin',$temp);
	}
	
	public function AksiDelete($id_contact){
		$this->M_Contact->DeleteDataContact($id_contact);
		redirect (base_url('C_BlueMoon/linkContact'));
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
		
		$this->M_Contact->InsertDataContact($DataInsert);
		redirect(base_url('C_BlueMoon/linkContact'));
	}

	public function login()
	{
		// validasi email dan password
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
	
		// jika validasi gagal
		if($this->form_validation->run() == FALSE)
		{
			$data['title'] = 'Blue Moon Hotel';
			$this->load->view('V_Login');
		}
		else
		{
			$this->_login();
		}
	} 

	private function _login()
	{
		// ambil email dan password yang sudah lolos validasi
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		// ke database
		$user = $this->db->get_where('t_customer', ['email' => $email])->row_array();

		// jika usernya ada
		if($user)
		{
			// cek password
			if(password_verify($password, $user['password']))
			{
				$data =
				[
					'email' => $user['email'],
					'id_role' => $user['id_role']
				];
				$this->session->set_userdata($data);
				redirect('C_Customer');
			}
			else
			{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');  // notifikasi jika akun tidak terdaftar
				redirect('C_BlueMoon/login');  // jika data gagal diinsert maka tetap di halaman login
			}
		}
		else
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun anda belum terdaftar!</div>');  // notifikasi jika akun tidak terdaftar
			redirect('C_BlueMoon/login');  // jika data gagal diinsert maka tetap di halaman login
		}
	}

	public function registration()
	{
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[t_customer.email]', ['is_unique ' => 'This email has already registered!']); 
		// is_unique = email tidak boleh duplikat, harus unik
		// [nama tabel.nama field] = untuk cek apakah data yang diinput sudah ada di dalam database atau belum
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', ['min_length' => 'Password terlalu pendek']);	

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
			
			$this->db->insert('t_customer', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil membuat akun. Silahkan masuk dengan akun tersebut!</div>');  // notifikasi jika customer berhasil membuat akun
			redirect('C_BlueMoon/login');  // jika data berhasil diinsert maka halaman dipindahkan ke halaman login
		}
	}

	// fungsinya untuk membersihkan session dan kembali ke halaman login
	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('id_role');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah keluar dari akun!</div>');  // notifikasi jika customer berhasil logout
		redirect('C_BlueMoon/login');  // jika berhasil logout maka halaman dipindahkan ke halaman login
	}
}
