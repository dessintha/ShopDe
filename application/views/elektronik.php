<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <h4 class="breadcrumb-item"><?php echo $title ?></h4>
  </ol>

  <div class="row ml-1 text-center mt-3 mb-3" >
    <?php foreach ($elektronik as $brg) : ?>
      <div class="card ml-3" style="width: 15rem;">
        <img src="<?php echo base_url().'/upload/'.$brg->gambar ?>" class="card-img-top" alt="..." >
        <div class="card-body">
          <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
          <small><?php echo $brg->keterangan ?></small><br>
          <span class="badge badge-pill badge-success mb-2">Rp.<?php echo number_format($brg->harga,0,',','.')  ?></span>
          <?php echo anchor('Dashboard/tambah_keranjang/'.$brg->id_barang, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
          <?php echo anchor('Dashboard/detail/'.$brg->id_barang, '<div class="btn btn-sm btn-success mt-3">Detail</div>') ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

</div>