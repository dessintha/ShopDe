<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <h4 class="breadcrumb-item"><?php echo esc_html($title); ?></h4>
  </ol>

  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <a class="btn btn-sm btn-primary mb-4" href="<?php echo esc_url('admin/Data_barang') ?>" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus"></i>Tambah Barang</a>
        <?php echo $this->session->flashdata('pesan') ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center">
              <th>No</th>
              <th>Nama Barang</th>
              <th>Keterangan</th>
              <th>Kategori</th>
              <th>Harga</th>
              <th>Stok</th>
              <th colspan="2">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; foreach($barang as $brg) : ?>
              <tr>
              <td><?php echo esc_html($no++); ?></td>
              <td><?php echo esc_html($brg->nama_brg); ?></td>
              <td><?php echo esc_html($brg->keterangan); ?></td>
              <td><?php echo esc_html($brg->kategori); ?></td>
              <td>Rp. <?php echo number_format($brg->harga,0,',','.')?></td>
              <td><?php echo esc_html($brg->stok); ?></td>              
              <td><?php echo anchor('admin/Data_barang/edit/'.$brg->id_barang, '<div class="btn btn-primary btn-sm" title="Edit Barang"><i class="fas fa-edit"></i></div>') ?></td>
              <td><?php echo anchor('admin/Data_barang/hapus/'.$brg->id_barang, '<div class="btn btn-danger btn-sm" title="Hapus Barang"><i class="fas fa-trash"></i></div>') ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo esc_url().'admin/data_barang/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
        	<div class="form-group">
        		<label>Nama Barang</label>
        		<input type="text" name="nama_brg" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Keterangan</label>
        		<input type="text" name="keterangan" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Kategori</label>
        		<select name="kategori" class="form-control">
        			<option>Elektronik</option>
        			<option>Pakaian Pria</option>
        			<option>Pakaian Wanita</option>
        			<option>Pakaian Anak</option>
        			<option>Olahraga</option>
        		</select>
        	</div>
        	<div class="form-group">
        		<label>Harga</label>
        		<input type="text" name="harga" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Stok</label>
        		<input type="text" name="stok" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Gambar Produk</label>
        		<input type="file" name="gambar" class="form-control">
        	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Simpan</button>
	      </div>
      </form>
    </div>
  </div>
</div>

  


