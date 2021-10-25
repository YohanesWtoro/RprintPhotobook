<div class="container fluid">
	
		<div class="card">
	  <h5 class="card-header">Detail PhotoBook</h5>
	  <div class="card-body">
	  	<?php foreach ($barang as $brg):?>
	  	<div class="row">
	  		<div class="col-md-4">
	  			
	  		<img src="<?php echo base_url(). '/upload/' .$brg->gambar?>" style="width: 90%;">
	  		</div>
	  		<div class="col-md-8">
	  			<form method="post" action="<?php echo base_url() ?>dashboard/tambah_ke_keranjang">
	  			<table class="table">
	  				<tr>
	  					<td><input type="hidden" name="id_barang" value="<?php echo $brg->id_barang ?>"></td>
	  				</tr>
	  				<tr>
	  					<td>Nama</td>
	  					<td><input type="hidden" name="nama_barang" value="<?php echo $brg->nama ?>"><strong><?php echo $brg->nama ?></strong></td>
	  				</tr>
	  				<tr>
	  					<td>Harga</td>
	  					<td><input type="hidden" name="harga" value="<?php echo $brg->harga ?>"><strong><div class="btn btn-sm btn-success">Rp.<?php echo number_format($brg->harga),0,',' ?></div></strong></td>
	  				</tr>
	  				<tr>
	  					<td>Ukuran</td>
	  					<td><strong><?php echo $brg->ukuran ?></strong></td>
	  				</tr>
	  				<tr>
	  					<td>Jumlah Foto</td>
	  					<td><strong><?php echo $brg->jumlah_foto ?></strong></td>
	  				</tr>
	  				<tr>
	  					<td>Jumlah Halaman</td>
	  					<td><strong><?php echo $brg->jumlah_hlm ?></strong></td>
	  				</tr>
	  				<tr>
	  					<td>Cover</td>
	  					<td><strong><?php echo $brg->cover ?></strong></td>
	  				</tr>
	  				<tr>
	  					<td>Tema</td>
	  					<td><select name="tema">
						    <?php
						        foreach ($tema as $tm){
						            echo '<option value="'.$tm->nama.'">'.$tm->nama.'</option>';
						        }
						    ?>
							</select>
	  					<?php echo anchor('dashboard/index_tema','<div class ="btn btn-sm btn-secondary">Lihat Tema</div')?></td>
	  				</tr>
	  			</table>
	  			<button type="submit" class="btn btn-sm btn-primary mt-0">Tambah Ke Keranjang</button>

	  			<?php echo anchor('dashboard/index','<div class="btn btn-sm btn-warning">Kembali</div>')?>
	  		</div>
	  		<?php endforeach; ?>
	  	</div>
	    </form>
	  </div>
	</div>

</div>