<?php

class Data_barang extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Data Barang';
		$data['barang'] = $this->M_Barang->tampil_data()->result();
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_barang', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_aksi()
	{
		$nama_brg	= $this->input->post('nama_brg');
		$keterangan	= $this->input->post('keterangan');
		$kategori	= $this->input->post('kategori');
		$harga		= $this->input->post('harga');
		$stok		= $this->input->post('stok');
		$gambar		= $_POST['gambar']['name'];
		if ($gambar = ''){}else{
			$config['upload_path'] = 'upload';
			$config ['allowed_types'] = 'jpg|png|jpeg';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar Gagal Diupload";
			}else{
				$gambar = $this->upload->data('file_name');
			}
		}

		$data = array(
			'nama_brg'	=> $nama_brg,
			'keterangan'=> $keterangan,
			'kategori'=> $kategori,
			'harga'=> $harga,
			'stok'=> $stok,
			'gambar'=> $gambar
		);

		$this->M_Barang->tambah_barang($data, 'tb_barang');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data Berhasil Ditambahkan</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('admin/Data_barang');
		redirect('admin/Data_barang/index');
	}

	public function edit($id)
	{
		$where = array('id_barang' => $id);
		$data['barang'] = $this->M_Barang->edit_barang($where,'tb_barang')->result();
		$data['title'] = 'Edit Data Barang';
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/edit_data_barang', $data);
		$this->load->view('template_admin/footer');
	}

	public function update()
	{
		$id 		= $this->input->post('id_barang');
		$nama_brg	= $this->input->post('nama_brg');
		$keterangan	= $this->input->post('keterangan');
		$kategori	= $this->input->post('kategori');
		$harga		= $this->input->post('harga');
		$stok		= $this->input->post('stok');

		$data = array(
			'nama_brg'	=> $nama_brg,
			'keterangan'=> $keterangan,
			'kategori'	=> $kategori,
			'harga'		=> $harga,
			'stok'		=> $stok,
		);

		$where = array(
			'id_barang' => $id
		);

		$this->M_Barang->update_data($where,$data, 'tb_barang');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data Berhasil Diupdate</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/Data_barang/index');
	}

	public function hapus($id)
	{
		$where = array('id_barang' => $id);
		$this->M_Barang->hapus_data($where,'tb_barang');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data Berhasil Dihapus</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/Data_barang/index');
	}
}

?>