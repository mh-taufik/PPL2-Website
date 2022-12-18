<div class="container">
    <!-- INI BAGIAN CARD PRODUK -->
    <br>
    <br>
    <div class="container">
      <?php if(!empty($barang)){ ?>
      <table class="table table-light">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga Barang</th>
            <th scope="col">Quantity</th>
            <th scope="col">Jumlah</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $total = 0;
          foreach($barang as $key=>$data){ 
            $jumlah = $data['harga'] * $data['jumlah'];
            $total += $jumlah; 
        ?>  
        <tr>
            <th><?= $key + 1 ?></th>
            <td>
              <p class="h5"><?= $data['nama'] ?></p>
            </td>
            <td>
              <p class="h5">Rp. <?= number_format($data['harga'],2,",",".") ?></p>
            </td>
            <td>
              <p class="h5"><?= $data['jumlah'] ?></p>
            </td>
            <td>
              <p class="h5">Rp. <?= number_format($jumlah,2,",",".") ?></p>
            </td>
        </tr>
          <?php } ?>
          <tr>
            <td colspan="4"><p class="h4">Total Harga Barang</p></td>
            <td><p class="h4">Rp. <?php echo number_format($total,2,",",".") ?></p></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="container float-sm-right">
      <a href="<?= base_url() ?>" class="btn btn-warning">Kembali</a>
      <a href="<?= base_url('/cart/clear') ?>" class="btn btn-danger">Hapus Semua Barang</a>
      <a href="<?= base_url('/checkout') ?>" class="btn btn-info">Checkout</a>
    </div>
    <br>
    <br>
    <!-- <div id="checkout-form" class="bg-dark text-light p-5">
      <form method="post">
        <div>
          <label class="text-lg" for="kode_transaksi">Kode Transaksi</label>
          <input disabled class="form-control" type="text" name="kode_transaksi" id="kode_transaksi">
        </div>
        <div class="form-group">
          <label class="text-lg" for="nama_penerima">Nama Penerima</label>
          <input class="form-control" type="text" name="nama_penerima" id="nama_penerima">
        </div>
        <div class="form-group">
          <label class="text-lg" for="alamat_penerima">Alamat Penerima</label>
          <input class="form-control" type="text" name="alamat_penerima" id="alamat_penerima">
        </div>
      </form>
      
    </div> -->
  <?php } else {?>
    <div class="alert alert-secondary" role="alert">
      <h3 class="alert-heading">Keranjang anda kosong -_-</h3>
      <p>Tambahkan sebuah barang ke keranjang</p>
    </div>
  <?php } ?>
</div>

<script>

</script>