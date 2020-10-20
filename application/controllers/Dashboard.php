<?php

class Dashboard extends CI_Controller{
	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['barang'] = $this->M_Barang->tampil_data()->result();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('template/footer');
	}

	public function tambah_keranjang($id)
	{
		$barang = $this->M_Barang->find($id);
		$data = array(
        'id'      => $barang->id_barang,
        'qty'     => 1,
        'price'   => $barang->harga,
        'name'    => $barang->nama_brg,
	);

		$this->cart->insert($data);
		redirect('Dashboard');
	}

	public function detail_keranjang()
	{
		$data['title'] = 'Keranjang Belanja';
		$data['barang'] = $this->M_Barang->tampil_data()->result();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('keranjang');
		$this->load->view('template/footer');
	}

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('Dashboard/index');
	}

	public function pembayaran()
	{
		$data['title'] = 'pembayaran';
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('pembayaran');
		$this->load->view('template/footer');
	}

	public function proses_pesanan()
	{
		$data['title'] = 'Pesanan';
		$is_processed = $this->M_Invoice->index();
		if($is_processed){
			$this->cart->destroy();
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar');
			$this->load->view('proses_pesanan');
			$this->load->view('template/footer');	
		}else{
			echo "Maaf Pesanan Anda Gagal Diprose";
		}
		
	}

	public function detail($id_barang)
	{
		$data['title'] = "Detail Barang";
		$data['barang'] = $this->M_Barang->detail_brg($id_barang);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('detail_barang', $data);
		$this->load->view('template/footer');
	}
}

?>