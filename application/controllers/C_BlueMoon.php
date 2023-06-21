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
		$this->load->model('M_Customer');
		$this->load->model('M_Kamar');
		$this->load->model('M_Booking');
		$this->load->model('M_Payment');

	}

	public function customerAdmin()
	{
		$this->load->view('V_CustomerAdmin');
	}

	public function index()
	{
		$this->load->view('V_Home');
	} 

	public function room()
	{
		$data_kamar = $this->M_Kamar->getAll();
		$temp['data'] = $data_kamar;

        $this->load->view('V_room',$temp);
	}

	public function payment()
	{
		$this->load->view('V_payment');
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

	public function formkamar()
	{
		$this->load->view('V_FormKamar');
	}

	public function booking()
	{
		$data['pilihanpayment'] = $this->M_Payment->getAll();
		$this->load->view('V_Booking', $data);
	} 

	public function tambahbooking(){
		$name_cust_booking = $this->input->post('name_cust_booking');
		$check_in_booking = $this->input->post('check_in_booking');
		$check_out_booking = $this->input->post('check_out_booking');
		$room_booking = $this->input->post('room_booking');
		$pilihan_bayar = $this->input->post('pilihan_bayar');
		
		$DataInsert = array(
			'name_cust_booking' => $name_cust_booking,
			'check_in_booking' => $check_in_booking,
			'check_out_booking' => $check_out_booking,
			'room_booking' => $room_booking,
			'pilihan_bayar'=>$pilihan_bayar,
		);
		
		$this->M_Booking->InsertDataBooking($DataInsert);
		redirect(base_url('C_BlueMoon/booking'));
	}

	public function linkBooking(){
		$data_booking = $this->M_Booking->getAll();
		$temp['data'] = $data_booking;

        $this->load->view('V_BookingAdmin',$temp);
	}


	public function linkContact(){
		$data_contact = $this->M_Contact->getAll();
		$temp['data'] = $data_contact;

        $this->load->view('V_ContactAdmin',$temp);
	}
	
	public function AksiDeletecontact($id_contact){
		$this->M_Contact->DeleteDataContact($id_contact);
		redirect (base_url('C_BlueMoon/linkContact'));
	}
	public function AksiDeleteBooking($id_booking){
		$this->M_Booking->DeleteDataBooking($id_booking);
		redirect (base_url('C_BlueMoon/linkBooking'));
	}
	
	public function linkCustomer(){
		$data_customer = $this->M_Customer->getAll();
		$temp['data'] = $data_customer;

        $this->load->view('V_CustomerAdmin',$temp);
	}
	
	public function AksiDeletecustomer($id_customer){
		$this->M_Customer->DeleteDataCustomer($id_customer);
		redirect (base_url('C_BlueMoon/linkCustomer'));
	}

	public function kamaradmin()
	{
		$this->load->view('V_KamarAdmin');
	}
	
	public function linkKamar(){
		$data_kamar = $this->M_Kamar->getAll();
		$temp['data'] = $data_kamar;

        $this->load->view('V_KamarAdmin',$temp);
	}
	
	public function AksiDeleteKamar($id_kamar){
		$this->M_Kamar->DeleteDataKamar($id_kamar);
		redirect (base_url('C_BlueMoon/linkKamar'));
	}

	public function tambahcontact()
	{
		$nama_contact = $this->input->post('nama_contact');
		$email_contact = $this->input->post('email_contact');
		$pesan_contact = $this->input->post('pesan_contact');
		
		$DataInsert = array(
			'nama_contact' => $nama_contact,
			'email_contact' => $email_contact,
			'pesan_contact' => $pesan_contact,
		);
		
		$this->M_Contact->InsertDataContact($DataInsert);
		redirect(base_url('C_BlueMoon/contact'));
	}
	
	public function tambahkamar(){
		$type_room = $this->input->post('type_room');
		$price_room = $this->input->post('price_room');
		$size_room = $this->input->post('size_room');
		$capacity_room = $this->input->post('capacity_room');
		$bed_room = $this->input->post('bed_room');
		$services_room = $this->input->post('services_room');
		$image_room = $_FILES['image_room'];
		if($image_room = ''){}else{
			$config['upload_path']  = './upload';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';
			
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('image_room')){
				echo "Upload Gagal"; die();
			}else{
				$image_room=$this->upload->data('file_name');
			}
		}
		$DataInsert = array(
			'type_room' => $type_room,
			'price_room' => $price_room,
			'size_room' => $size_room,
			'capacity_room' => $capacity_room,
			'bed_room' => $bed_room,
			'services_room' => $services_room,
			'image_room' => $image_room,
		);
		
		$this->M_Kamar->InsertDataKamar($DataInsert);
		redirect(base_url('C_BlueMoon/linkKamar'));
	}

	public function editKamar($id){
		$recordKamar= $this->M_Kamar->getDataKamarDetail($id);
		$DATA = array('data_room' =>$recordKamar);
		$this->load->view('V_editKamar', $DATA);

	}
	
	public function AksiEditKamar(){
		$id_room = $this->input->post('id_room');
		$type_room = $this->input->post('type_room');
		$price_room = $this->input->post('price_room');
		$size_room = $this->input->post('size_room');
		$capacity_room = $this->input->post('capacity_room');
		$bed_room = $this->input->post('bed_room');
		$services_room = $this->input->post('services_room');
		$image_room = $_FILES['image_room'];
		if($image_room = ''){}else{
			$config['upload_path']  = './upload';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('image_room')){
			}else{
				$image_room=$this->upload->data('file_name');
			}
		}
		$DataUpdate = array(
			'type_room' => $type_room,
			'price_room' => $price_room,
			'size_room' => $size_room,
			'capacity_room' => $capacity_room,
			'bed_room' => $bed_room,
			'services_room' => $services_room,
			'image_room' => $image_room,
		);
		$this->M_Kamar->EditDataKamar($DataUpdate, $id_room);
		redirect (base_url('C_BlueMoon/linkKamar'));
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
		$user = $this->db->get_where('t_user', ['email' => $email])->row_array();

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

				if($user['id_role'] == 2)  // jika user merupakan admin
				{
					redirect('C_Customer');
				}
				else
				{
					redirect('C_Admin');
				}
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
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[t_user.email]', ['is_unique ' => 'Email sudah terdaftar!']); 
		// is_unique = email tidak boleh duplikat, harus unik
		// [nama tabel.nama field] = untuk cek apakah data yang diinput sudah ada di dalam database atau belum
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', ['min_length' => 'Password terlalu pendek!']);	

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
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),  // dienkripsi terlebih dahulu
				'id_role' => 2
			];
			
			$this->db->insert('t_user', $data);
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
