<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <h4 class="breadcrumb-item"><?php echo $title ?></h4>
  </ol>

  <div class="card" style="width: 60%">
    <div class="card-body">
      <?php foreach($barang as $brg) : ?>
        <form method="post" action="<?php echo base_url().'admin/Data_barang/update' ?>">
          <div class="form-group">
            <label>Nama Barang</label>
            <input type="hidden" name="id_barang" class="form-control" value="<?php echo $brg->id_barang ?>">
            <input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
          </div>
          <div class="form-group">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori ?>">
          </div>
          <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
          </div>
          <div class="form-group">
            <label>Stok</label>
            <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
          </div>

          <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        </form>
      <?php endforeach; ?>
    </div>
  </div>
</div>

  


