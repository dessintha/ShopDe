<div class="container-fluid">
	<h4>Invoice Pemesanan Produk</h4>
	<table class="table table-borderd table-hover table-striped">
		<tr>
			<th>Id Invoice</th>
			<th>Nama Pemesan</th>
			<th>Alamat Pengiriman</th>
			<th>Tanggal Pemesanan</th>
			<th>Batas Pembayaran</th>
		</tr>
		<?php foreach ($invoice as $inv) : ?>
			<tr>
				<td><?php echo esc_html($inv->id); ?></td>
				<td><?php echo esc_html($inv->nama); ?></td>
				<td><?php echo esc_html($inv->alamat); ?></td>
				<td><?php echo esc_html($inv->tgl_pesan); ?></td>
				<td><?php echo esc_html($inv->batas_bayar); ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>