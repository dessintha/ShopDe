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
        <table class="table table-bordered table-striped " id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center">
              <th>No</th>
              <th>Nama Barang</th>
              <th>Jumlah</th>
              <th>Harga</th>
              <th>Sub-Total</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; foreach($this->cart->contents() as $items) : ?>
            <tr>
              <td><?php echo esc_html($no++); ?></td>
              <td><?php echo esc_html($items['name']);?></td>
              <td><?php echo esc_html($items['qty']);?></td>
              <td align="right">Rp.<?php echo number_format($items['price'],0,',','.') ?></td>
              <td align="right">Rp.<?php echo number_format($items['subtotal'],0,',','.') ?></td>
            </tr>
            <?php endforeach; ?>
            <tr>
              <td colspan="4"></td>
              <td align="right">Rp.<?php echo number_format($this->cart->total(),0,',','.') ?></td>
            </tr>
          </tbody>
        </table>
        <div align="right">
          <a href="<?php echo esc_url('Dashboard/hapus_keranjang') ?>"><div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
          <a href="<?php echo esc_url('Dashboard/index') ?>"><div class="btn btn-sm btn-primary">Lanjutkan Belanja</div></a>
          <a href="<?php echo esc_url('Dashboard/pembayaran') ?>"><div class="btn btn-sm btn-success">Pembayaran</div></a>
        </div>
      </div>
  </div>
</div>