<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Customer extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	// public function index()
	// {
	// 	$this->load->view('welcome_message');
	// }

    public function getAll()
    {
        $query = $this->db->query("SELECT * from T_User");
		return $query->result();
    }

	public function getDataCustomerDetail($id){
		$this->db->where('id_user', $id);
		$query = $this->db->get('T_User');
		return $query->row();
	}

	public function DeleteDataCustomer($id){
		$this->db->where('id_user', $id);
		$this->db->delete('T_User');
	}
}
