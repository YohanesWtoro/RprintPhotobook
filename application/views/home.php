<div class="container-fluid">

  <div class="row text-center mt-3">

    <?php foreach ($barang as $brg) : ?>
           <div class="card" style="width: 22rem;">
            <img src="<?php echo base_url().'upload/'.$brg->gambar ?>" class="card-img-top" alt="">
            <div class="card-body">
              <h3 class="card-title mb-1" marg><?php echo $brg->nama?></h3>
              <h5><span class="badge badge-pill badge-success mb-2">Rp.<?php echo number_format($brg->harga, 0,',','.' ) ?></h5></span>
                <select class="mb-3">

                <?php
                    foreach ($tema as $tm){
                        echo '<option value="'.$tm->nama.'">'.$tm->nama.'</option>';
                    }
                ?>
              </select
              <?php echo anchor('dashboard/tambah_ke_keranjang/' .$brg->id_barang,'<div class="btn btn-sm btn-primary">Tambah Ke Keranjang</div>')?>
              <?php echo anchor('home/detail_home/' .$brg->id_barang,'<div class="btn btn-sm btn-secondary">Detail</div>')?>
            </div>
        </div>
    <?php endforeach; ?>
  </div>
</div>