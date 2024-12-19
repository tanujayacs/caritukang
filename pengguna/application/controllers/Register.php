<?php
class Register extends CI_Controller
{
	function index()
	{

        $data['url_register'] = $this->config->item('url_register'); 
		// $this->load->model('Mongkir');
		// $this->load->model('Mmember');
		
		// $data['distrik'] = $this->Mongkir->tampil_distrik();;

		$this->form_validation->set_rules('email_customer', 'email', 'required|is_unique[customer.email_customer]');
		$this->form_validation->set_rules('username_customer', 'username', 'required');
		$this->form_validation->set_rules('password_customer', 'password', 'required');
		$this->form_validation->set_rules('nama_customer', 'nama', 'required');
		$this->form_validation->set_rules('alamat_customer', 'alamat', 'required');
		$this->form_validation->set_rules('wa_customer', 'wa', 'required');
		$this->form_validation->set_rules('city_id', 'city_id', 'required');

		$this->form_validation->set_message('required', '%s wajib di isi');
		$this->form_validation->set_message('is_unique', '%s sudah ada yang isi');

		if ($this->form_validation->run() == TRUE) {

			$city_id = $this->input->post('city_id');
			$detail = $this->Mongkir->detail_distrik($city_id);


			$m['email_customer'] = $this->input->post('email_customer');
			$m['password_customer'] = $this->input->post('password_customer');
			$m['password_customer'] = sha1($m['password_customer']);
			$m['nama_customer'] = $this->input->post('nama_customer');
			$m['alamat_customer'] = $this->input->post('alamat_customer');
			$m['wa_customer'] = $this->input->post('wa_customer');
			$m['kode_distrik_customer'] = $this->input->post('city_id');
			$m['nama_distrik_customer'] = $detail['type'] . " " . $detail['city_name'] . " " . $detail['province'];

			$this->Mmember->register($m);
			$this->session->set_flashdata('pesan sukses', 'reggistrasi berhasil, silahkan login');

			
			redirect('home','refresh');
			
			
		}

		$this->load->view('register', $data);
	}
}
