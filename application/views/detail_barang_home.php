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
	  			<table class="table">
	  				<tr>
	  					<td>Nama</td>
	  					<td><strong><?php echo $brg->nama ?></strong></td>
	  				</tr>
	  				<tr>
	  					<td>Harga</td>
	  					<td><strong><div class="btn btn-sm btn-success">Rp.<?php echo number_format($brg->harga),0,',' ?></div></strong></td>
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
	  					<?php echo anchor('','<div class ="btn btn-sm btn-secondary">Lihat Tema</div')?></td>
	  				</tr>
	  			</table>

	  			<?php echo anchor('dashboard/tambah_ke_keranjang/' .$brg->id_barang,'<div class="btn btn-sm btn-primary">Tambah Ke Keranjang</div>')?>

	  			<?php echo anchor('home/index','<div class="btn btn-sm btn-warning">Kembali</div>')?>
	  		</div>
	  		
	  	</div>
	  <?php endforeach; ?>
	    
	  </div>
	</div>

</div>