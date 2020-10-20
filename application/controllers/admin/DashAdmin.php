<?php

class DashAdmin extends CI_Controller{
	public function index()
	{
		$data['title'] = 'Dashboard Admin';
		$elektronik = $this->db->query("SELECT * FROM tb_barang WHERE kategori = 'elektronik'");
		$pakaian_pria = $this->db->query("SELECT * FROM tb_barang WHERE kategori = 'pakaian pria'");
		$pakaian_wanita = $this->db->query("SELECT * FROM tb_barang WHERE kategori = 'pakaian wanita'");
		$pakaian_anak = $this->db->query("SELECT * FROM tb_barang WHERE kategori = 'pakaian anak'");
		$olahraga = $this->db->query("SELECT * FROM tb_barang WHERE kategori = 'olahraga'");
		$data['elektronik']=$elektronik->num_rows();
		$data['pakaian_pria']=$pakaian_pria->num_rows();
		$data['pakaian_wanita']=$pakaian_wanita->num_rows();
		$data['pakaian_anak']=$pakaian_anak->num_rows();
		$data['olahraga']=$olahraga->num_rows();
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('template_admin/footer');
	}
}


		