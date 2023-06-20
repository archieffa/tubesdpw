<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Contact extends CI_Model {

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
        $query = $this->db->query("SELECT * from T_Contact");
		return $query->result();
    }

	public function InsertDataContact($data){
		$this->db->insert('T_Contact', $data);
	}

	public function EditDataContact($data, $id){
		$this->db->where('id_contact', $id);
		$this->db->update('t_contact', $data);
	}

	public function getDataContactDetail($id){
		$this->db->where('id_contact', $id);
		$query = $this->db->get('t_contact');
		return $query->row();
	}

	public function DeleteDataContact($id){
		$this->db->where('id_contact', $id);
		$this->db->delete('T_Contact');
	}
}
