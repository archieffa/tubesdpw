<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Customer extends CI_Controller 
{
	public function index()
    {
        $this->load->view('V_User');
    }
    public function nama()
    {
        // ambil data dari session
        $data['user'] = $this->db->get_where('t_customer', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'Selamat datang ' . $data['user']['nama_lengkap'];
    }
}
