<div class="container-fluid">
	<h4>Invoice Pemesanan Barang</h4>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>ID Invoice</th>
			<th>Nama Pemesan</th>
			<th>Alamat Pengiriman</th>
			<th>No Telepon</th>
			<th>Email</th>
			<th>Tanggal Pemesanan</th>
			<th>Batas Pembayaran</th>
			<th>Aksi</th>
		</tr>
		<?php foreach ($invoice as $inv): ?>
		<tr>
			<td><?php echo $inv->id ?></td>
			<td><?php echo $inv->nama ?></td>
			<td><?php echo $inv->alamat ?></td>
			<td><?php echo $inv->no_telp ?></td>
			<td><?php echo $inv->email ?></td>
			<td><?php echo $inv->tgl_pesan ?></td>
			<td><?php echo $inv->batas_bayar ?></td>
			<td><?php echo anchor('admin/invoice/detail/'.$inv->id,'<div class="btn btn-sm btn-primary">detail</div>')?></td>
		</tr>

	<?php endforeach; ?>

	</table>
</div>