<div class="container-fluid">

	<table class="table table-bordered mt-3">
		<tr>
			<th>ID</th>
			<th>ID INVOICE</th>
			<th>ID BARANG</th>
			<th>NAMA BARANG</th>
			<th>JUMLAH</th>
			<th>HARGA</th>
		</tr>

			
		<?php
		 foreach($pesanan as $psn) : ?>

			<tr>
				<td><?php echo $psn->id ?></td>
				<td><?php echo $psn->id_invoice ?></td>
				<td><?php echo $psn->Id_barang ?></td>
				<td><?php echo $psn->nama_barang ?></td>
				<td><?php echo $psn->jumlah ?></td>
				<td><?php echo $psn->harga ?></td>
			</tr>

		<?php endforeach; ?>


	</table>

</div>