<div class="container-fluid">
	<button class="btn btn-sm btn-primary"  data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i>Tambah Barang</button>


	<table class="table table-bordered mt-3">
		<tr>
			<th>NO</th>
			<th>NAMA BARANG</th>
			<th>HARGA</th>
			<th>UKURAN</th>
      <th>JUMLAH FOTO</th>
			<th>JUMLAH HALAMAN</th>
			<th>COVER</th>
      <th>GAMBAR</th>
			<th colspan="3">AKSI</th>
		</tr>

			
		<?php
		$no=1;
		 foreach($barang as $brg) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $brg->nama ?></td>
				<td><?php echo $brg->harga ?></td>
				<td><?php echo $brg->ukuran ?></td>
        <td><?php echo $brg->jumlah_foto ?></td>
				<td><?php echo $brg->jumlah_hlm ?></td>
				<td><?php echo $brg->cover ?></td>
        <td><?php echo $brg->gambar ?></td>        
				<td><?php echo anchor('admin/data_barang/edit/' .$brg->id_barang, '<div class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>') ?></td>
				<td><?php echo anchor ('admin/data_barang/hapus/'.$brg->id_barang, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>') ?></td>
			</tr>

		<?php endforeach; ?>


	</table>

</div>


<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Masukan Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
        	
        	<div class="form-group">
        		<label>Nama </label>
        		<input type="text" name="nama" class="form-control">
          </div>

          <div class="form-group">
        		<label>Harga</label>
        		<input type="text" name="harga" class="form-control">
          </div>

          <div class="form-group">
            <label>Ukuran</label>
            <input type="text" name="ukuran" class="form-control">
          </div>

          <div class="form-group">         
            <label>Jumlah Foto</label>
            <input type="text" name="jumlah_foto" class="form-control">
          </div>
 
          <div class="form-group">         
        		<label>Jumlah Halaman</label>
        		<input type="text" name="jumlah_hlm" class="form-control">
          </div>

          <div class="form-group">       		
            <label>Cover</label>
        		<input type="text" name="cover" class="form-control">
          </div>

          <div class="form-group">        		
            <label>Gambar Produk</label><br>
        		<input type="file" name="gambar" class="form-control">
          </div>   
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>  
    </div>
  </div>
</div>