<?php
defined('BASEPATH') OR exit ('No direct script access allowed'); 
class Mcustomer extends CI_Model{
	// function tampil() {
	// 	$q = $this->db->get('customer');
	// 	$d = $q->result_array();
	// 	return $d;
	// }
	function login($inputan)
	{
		$username_customer = $inputan['username_customer'];
		$password_customer = $inputan['password_customer'];
		// $password_customer = sha1($password_customer);

		$this->db->where('username_customer', $username_customer);
		$this->db->where('password_customer', $password_customer);
		$q = $this->db->get('customer');
		$cekcustomer = $q->row_array();

		if (!empty($cekcustomer)) {
			$this->session->set_userdata("id_customer", $cekcustomer["id_customer"]);
			$this->session->set_userdata("email_customer", $cekcustomer["email_customer"]);
			$this->session->set_userdata("nama_customer", $cekcustomer["nama_customer"]);
			$this->session->set_userdata("alamat_customer", $cekcustomer["alamat_customer"]);
			$this->session->set_userdata("wa_customer", $cekcustomer["wa_customer"]);
			return "ada";
		} else {
			return "gak ada";
		}
	}
}