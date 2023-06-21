<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Customer extends CI_Controller 
{
	public function index()
    {
        $data['user'] = $this->db->get_where('t_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('V_User', $data);
    }
}
