<div class="container-fluid">

  <div class="row text-center mt-3">

    <?php foreach ($barang as $brg) : ?>


           <div class="card" style="width: 22rem;">
            <img src="<?php echo base_url().'upload/'.$brg->gambar ?>" class="card-img-top" alt="">
            <div class="card-body">
             <form method="post" action="<?php echo base_url() ?>dashboard/tambah_ke_keranjang">
              <h3 class="card-title mb-1" marg><?php echo $brg->nama ?></h3>
              <h5><span class="badge badge-pill badge-success">Rp.<?php echo number_format($brg->harga, 0,',','.' ) ?></span></h5>
              <input type="hidden" name="id_barang" value="<?php echo $brg->id_barang ?>">
              <input type="hidden" name="nama_barang" value="<?php echo $brg->nama ?>">
              <input type="hidden" name="harga" value="<?php echo $brg->harga ?>">
              <select class="mb-2" name="tema">

                <?php
                    foreach ($tema as $tm){
                        echo '<option value="'.$tm->nama.'">'.$tm->nama.'</option>';
                    }
                ?>
              </select><br>
              <button type="submit" class="btn btn-sm btn-primary mt-0">Tambah Ke Keranjang</button>
              <?php echo anchor('dashboard/detail/' .$brg->id_barang,'<div class="btn btn-sm btn-secondary">Detail</div>')?>
            </div>
        </div>
          </form>
    <?php endforeach; ?>

  </div>
</div>