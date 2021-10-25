<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php
				$grand_total=0;
				if ($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $item)
					{
						$grand_total = $grand_total +$item['subtotal'];
					}

					echo "<h3>Total Belanja Anda : Rp.".number_format($grand_total, 0,',','.'); 

				   ?>
			</div>
			<br><br>
		<h3>Input Alamat Pengiriman dan Pembayaran</h3>
		<div class="col-md-2"></div>

		<form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">

			<div class="from-grup">
				<label>Nama Lengkap</label>
				<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Anda">
			</div>

			<div class="from-grup">
				<label>Alamat Lengkap</label>
				<input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap Anda">
			</div>

			<div class="from-grup">
				<label>Nomer Telepon</label>
				<input type="text" name="no_telp" class="form-control" placeholder="Nomer Telepon Lengkap Anda">
			</div>

			<div class="from-grup">
				<label>Email</label>
				<input type="text" name="email" class="form-control" placeholder="Email Anda">
			</div>

			<button type="submit" class="btn btn-sm btn-primary mt-4">pesan</button>
		</form>
		<?php
	}else{
		echo "<h3>Keranjang Belanja Anda Masih Kosong";
	}
	?>
		</div>
			
	</div>
</div>