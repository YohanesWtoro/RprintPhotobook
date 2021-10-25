<div class="container-fluid">

  <div class="row text-center mt-3">

    <?php foreach ($tema as $tm) : ?>
           <div class="card" style="width: 17rem;">
            <img src="<?php echo base_url().'upload/'.$tm->gambar ?>" class="card-img-top" alt="">
            <div class="card-body">
              <h3 class="card-title mb-1" marg>&nbsp;</h3>
            </div>
        </div>
    <?php endforeach; ?>
  </div>
</div>