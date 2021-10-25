<div class="container-fluid">
	<h4>Keranjang Belanja</h4>

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>NO</th>
			<th>Nama Product</th>
			<th>Jumlah</th>
			<th>Tema</th>
			<th>Harga</th>
			<th>Sub-Total</th>
		</tr>
		
		<?php
		$no=1; 
		foreach ($this->cart->contents() as $items) : ?>

			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $items['name'] ?></td>
				<td><?php echo $items['qty'] ?></td>
				<td><?php echo $items['theme'] ?></td>

				<td align="right">Rp.<?php echo number_format($items['price'], 0,',','.') ?></td>
				<td align="right">Rp.<?php echo number_format($items['subtotal'])?></td>
			</tr>

		<?php endforeach; ?>
		<tr>
			<td colspan="5" align="right"><b>TOTAL HARGA</b></td>
				<td align="right">Rp.<?php echo number_format($this->cart->total(), 0,',','.' ) ?></td>
			</tr>
	</table>

	<div align="right">
		<a href="<?php echo base_url('dashboard/hapus_keranjang') ?>"><div class="btn btn-sn btn-danger">Hapus</div></a>
		<a href="<?php echo base_url('dashboard/index') ?>"><div class="btn btn-sn btn-primary">Lanjutkan Belanja</div></a>
		<a href="<?php echo base_url('dashboard/pembayaran') ?>"><div class="btn btn-sn btn-success">Pembayaran</div></a>

	</div>

</div>