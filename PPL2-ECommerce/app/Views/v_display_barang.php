<div class="container">
  <!-- BAR CHART -->
  <!-- <div class="card card-light">
    <div class="card-header">
      <h3 class="card-title">Grafik Harga Barang</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="chart">
        <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
      </div>
    </div>
  </div> -->
  <!------------------------------------------------>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-4">
      <?php foreach($barang as $data){ ?>  
            <div class="col pt-3">
              <div class="card" style="width: 15.5rem;">
                <img src="<?= base_url('image/barang/'.$data["gambar"]) ?>" class="card-img-top" alt="<?= $data["nama"] ?>">
                <div class="card-body">
                  <p class="card-title fw-bold"><?php echo $data["nama"] ?></p>
                  <p class="card-text">Price - Rp. <?= number_format($data["harga"],0,",-",".") ?>,- <br> Stock - <?= $data["stok"]?></p>
                </div>
                <div class="container">
                  <form action="<?= base_url('/cart/add') ?>" method="post">
                    <input type="hidden" id="nama" name="nama" value="<?php echo $data['nama'] ?>">
                    <input type="hidden" id="harga" name="harga" value="<?php echo $data['harga'] ?>">
                    <input type="hidden" id="kode" name="kode" value="<?php echo $data['id'] ?>">
                    <div class="input-group mb-3">
                      <input type="text" id="jumlah" name="jumlah" class="form-control" value="1">
                      <button class="btn btn-dark" type="submit" id="submit">Add to Cart</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          <?php } ?>
      </div>
    </div>
  </div>
</div>


