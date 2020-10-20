<?php 

class Kategori extends CI_Controller
{
	public function elektronik()
	{
		$data['title']= 'Kategori elektronik';
		$data['elektronik'] = $this->M_Kategori->data_elektronik()->result();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('elektronik', $data);
		$this->load->view('template/footer');
	}

	public function pakaian_pria()
	{
		$data['title']= 'Kategori Pakaian Pria';
		$data['pakaian_pria'] = $this->M_Kategori->data_pakaian_pria()->result();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('pakaian_pria', $data);
		$this->load->view('template/footer');
	}

	public function pakaian_wanita()
	{
		$data['title']= 'Kategori Pakaian Wanita';
		$data['pakaian_wanita'] = $this->M_Kategori->data_pakaian_wanita()->result();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('pakaian_wanita', $data);
		$this->load->view('template/footer');
	}

	public function pakaian_anak()
	{
		$data['title']= 'Kategori Pakaian Anak';
		$data['pakaian_anak'] = $this->M_Kategori->data_pakaian_anak()->result();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('pakaian_anak', $data);
		$this->load->view('template/footer');
	}

	public function olahraga()
	{
		$data['title']= 'Kategori Olahraga';
		$data['olahraga'] = $this->M_Kategori->data_olahraga()->result();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('olahraga', $data);
		$this->load->view('template/footer');
	}
}

?>