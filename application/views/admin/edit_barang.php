<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>

	<?php foreach($barang as $brg): ?>

		<form method="post" action="<?php echo base_url(). 'admin/data_barang/update' ?>">
			
			<div class="form-group">
                        <input type="hidden" name="id_barang" class="form-control" value="<?php echo $brg->id_barang ?>">
        		<label>Nama Barang</label>
        		<input type="text" name="nama" class="form-control" value="<?php echo $brg->nama ?>">
        		<label>Harga</label>
        		<input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
        		<label>Ukuran</label>
        		<input type="text" name="ukuran" class="form-control" value="<?php echo $brg->ukuran ?>">
        		<label>Jumlah Foto</label>
        		<input type="text" name="jumlah_foto" class="form-control" value="<?php echo $brg->jumlah_foto ?>">
        		<label>Jumlah Halaman</label>
        		<input type="text" name="jumlah_hlm" class="form-control" value="<?php echo $brg->jumlah_hlm ?>">
                        <label>Cover</label>
                        <input type="text" name="cover" class="form-control" value="<?php echo $brg->cover ?>">
        	</div>

        	<button type="submit" class="btn btn-primary btn-sm">Simpan</button>

        	

		</form>

	<?php endforeach; ?>
</div>