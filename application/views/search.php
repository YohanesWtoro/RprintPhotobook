<div class="container-fluid">

  <div class="row text-center mt-3">


    <?php 
      foreach ($cari as $data) : ?>
           <div class="card" style="width: 22rem;">
            <img src="<?php echo base_url().'upload/'.$data->gambar ?>" class="card-img-top" alt="">
            <div class="card-body">
              <h3 class="card-title mb-1" marg><?php echo $data->nama ?></h3>
              <h5><span class="badge badge-pill badge-success mb-2">Rp.<?php echo number_format($data->harga, 0,',','.' ) ?></span></h5><br>
              <?php echo anchor('dashboard/tambah_ke_keranjang/' .$data->id_barang,'<div class="btn btn-sm btn-primary">Tambah Ke Keranjang</div>')?>
              <?php echo anchor('dashboard/detail/' .$data->id_barang,'<div class="btn btn-sm btn-secondary">Detail</div>')?>
            </div>
        </div>
    <?php endforeach; ?>
  </div>
</div>