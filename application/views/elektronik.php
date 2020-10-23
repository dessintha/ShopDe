<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <h4 class="breadcrumb-item"><?php echoesc_html( $title); ?></h4>
  </ol>

  <div class="row ml-1 text-center mt-3 mb-3" >
    <?php foreach ($elektronik as $brg) : ?>
      <div class="card ml-3" style="width: 15rem;">
        <img src="<?php echo esc_url().'/upload/'.$brg->gambar ?>" class="card-img-top" alt="..." >
        <div class="card-body">
          <h5 class="card-title"><?php echo esc_html($brg->nama_brg); ?></h5>
          <small><?php echo esc_html($brg->keterangan); ?></small><br>
          <span class="badge badge-pill badge-success mb-2">Rp.<?php echo number_format($brg->harga,0,',','.')  ?></span>
          <?php echo esc_url('Dashboard/tambah_keranjang/'.$brg->id_barang, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
          <?php echo esc_url('Dashboard/detail/'.$brg->id_barang, '<div class="btn btn-sm btn-success mt-3">Detail</div>') ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

</div>