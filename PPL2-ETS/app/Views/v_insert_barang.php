<div>
  <div class="py-3">
    <a class="btn btn-warning" href="<?= base_url("/barang") ?>">Kembali</a>
  </div>
  <h1>Masukan Data Barang Baru</h1>
  <div class="d-flex align-items-center justify-content-center">
    <img class="" src="<?= base_url('image/product.png') ?>" width="100px" height="100px">
  </div>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="text-lg" for="nama">Nama Barang</label>
      <input class="form-control" type="text" name="nama" id="nama">
    </div>
    <div class="form-group">
      <label class="text-lg" for="harga">Harga Barang</label>
      <input class="form-control" type="text" name="harga" id="harga">
    </div>
    <div class="form-group">
      <label class="text-lg" for="stok">Stok Barang</label>
      <input class="form-control" type="text" name="stok" id="stok">
    </div>
    <div class="form-group">
      <label class="text-lg" for="gambar">Gambar Barang</label>
      <input class="form-control p-1" type="file" name="gambar" id="gambar">
    </div>
      <button class="btn btn-success btn-block" type="submit">Simpan</button>
  </form>
</div>