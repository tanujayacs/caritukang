<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mbooking extends CI_Model
{
	function tampil()
	{
		$this->db->select('booking.*,keahlian.nama_keahlian');
		$this->db->from('booking');
		// $this->db->join('peran', 'booking.id_peran = peran.id_peran', 'left'); // Sesuaikan kolom relasi

        // $this->db->join('customer', 'booking.id_customer = customer.id_customer', 'left'); // Sesuaikan kolom relasi
		$this->db->join('keahlian', 'booking.id_keahlian = keahlian.id_keahlian', 'left'); // Sesuaikan kolom relasi
		$q = $this->db->get();
		return $q->result_array();
	}

    function keahlian()
	{
		$q = $this->db->get('keahlian');
		$d = $q->result_array();

		return $d;
	}

    function simpan($inputan)
    {
        $config['upload_path'] = $this->config->item('assets_booking');
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        $ngupload = $this->upload->do_upload("foto_kendala");

        if ($ngupload) {
            $inputan['foto_kendala'] = $this->upload->data("file_name");
        }

        $this->db->insert('booking', $inputan);
    }
	
}
