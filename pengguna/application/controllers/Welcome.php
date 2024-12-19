<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		// untuk login
		$data['url_login'] = $this->config->item('url_login'); // Ambil dari config
        // $this->load->view('login', $data);

		$inputan = $this->input->post();

		$this->form_validation->set_rules("username_customer","Username","required");
		$this->form_validation->set_rules("password_customer","Password","required");

		$this->form_validation->set_message("required", "%s wajib diisi");

		if ($this->form_validation->run() == TRUE)
		{
			$this->load->model('Mcustomer');
			$output = $this->Mcustomer->login($inputan);

			if ($output =="ada")
			{

				$this->session->set_flashdata('pesan_sukses','Anda Berhasil Login');
				redirect('beranda','refresh');
			} else {

				$this->session->set_flashdata('pesan_gagal','Loh kok gk bisa Login');
				redirect('/','refresh');
			}
		}



$this->load->view('login',$data);
	
		
	}
}
