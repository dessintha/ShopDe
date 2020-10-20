<?php

class Invoices extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Daftar Invoice';
		$data['invoice'] = $this->M_Invoice->tampil_data();
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/invoice', $data);
		$this->load->view('template_admin/footer');
	}
}

?>